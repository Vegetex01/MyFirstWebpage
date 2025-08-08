<?php
session_start();
include 'db2.php';


$email = $_SESSION['email'];



///todo:
//import the db class
//create a method to get the user by the email address

$getTeachersByEmail = $database->getTeachersByEmail($email);

if ($getTeachersByEmail) {

    $firstName = $getTeachersByEmail['firstName'];
    $lastName = $getTeachersByEmail['lastName'];
    $email = $getTeachersByEmail['email'];



    echo "Welcome " . $firstName + " " . $lastName . " " . $email;



} else {

    echo "Unauthorized";
    //redirect to contact
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>

<body>
    Welcome <?php echo $_GET['firstname']; ?> <br>
    Your email address is: <?php echo $_GET['email']; ?>
</body>

</html>