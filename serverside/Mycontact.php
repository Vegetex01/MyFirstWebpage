<?php

if (isset($_POST['btnRegistration'])) {

    include 'db2.php';

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $age = $_POST['age'];
    $homeaddresss = $_POST['homeaddress'];
    $stateofresidence = $_POST['stateofresidence'];
    $country = $_POST['country'];

//check if the student email already exist
    $checkTeacherEmail = $database->checkTeacherEmail($email);

    if ($checkTeacherEmail) {
        echo "The Email already exist";
    } else {

//check if the teacher phone number already exist
        $checkTeacherPhoneNumber= $database->checkTeacherPhoneNumber($phoneNumber);

    if ($checkTeacherPhoneNumber) {
        echo "The Number is already taken";
    } else {

        //call the registration method
        $TeacherRegistation = $database->registerTeacher($firstName, $lastName, $email, $phoneNumber, $age, $homeaddresss, $stateofresidence, $country);


        //check if the registration was successful
        if ($TeacherRegistation) {

            echo "Teacher registration successful";

        } else {

            echo "Teacher registration failed";
        }
    }
    }
}
?>




<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type=email] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type=number] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>

    <h2>Student Registration Form</h2>


    <div class="container">
        <form method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Your Email..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="phonenumber">PhoneNumber</label>
                </div>
                <div class="col-75">
                    <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Your Phone Number..">
                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <label for="age">Age</label>
                </div>
                <div class="col-75">
                    <input type="number" id="age" name="age" placeholder="Your Age..">
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-25">
                    <label for="HomeAddress">HomeAddress</label>
                </div>
                <div class="col-75">
                    <input type="text" id="HomeAddress" name="homeaddress" placeholder="Your HomeAddress..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="StateOfResidence">StateOfResidence</label>
                </div>
                <div class="col-75">
                    <input type="text" id="StateOfResidence" name="stateofresidence" placeholder="Your State Of Residence..">
                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <label for="Country">Country</label>
                </div>
                <div class="col-75">
                    <input type="text" id="Country" name="country" placeholder="Your Country..">
                </div>
            </div>

            <br />
            <div class="row">
                <input type="submit" name="btnRegistration" value="Submit">
            </div>
        </form>
    </div>

</body>

</html>