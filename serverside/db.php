<?php


class Database
{

    private $connection;


    public function connect_db()
    {

        //connection to the database
        $this->connection = mysqli_connect("localhost", 'root', '', 'prosperdb');


        if (mysqli_connect_error()) {

            die("Database connection error" . mysqli_connect_error() . mysqli_connect_errno());
        }

    }



    public function registerStudent($firstName, $lastName, $email, $phoneNumber, $age)
    {

        //added the query to insert into the database
        $sql_query = "INSERT INTO `Students` (FirstName, LastName, Email, PhoneNumber, Age) 
                     VALUES ('$firstName','$lastName','$email','$phoneNumber','$age')";

        //run the query excution
        $execution = mysqli_query($this->connection, $sql_query);

        //check if the execution was successful
        if ($execution) {

            return true;
        } else {

            return false;
        }
    }


    public function checkStudentEmail($email)
    {
        $sql_query = "SELECT Email from `Students` where Email = '$email'";

        $execution = mysqli_query($this->connection, $sql_query);
        $execution_check = mysqli_fetch_assoc($execution);

        return $execution_check;
    }




    public function updateStudentRecord()
    {
        return false;
    }


    public function deleteStudent()
    {

        return false;

    }

}





$database = new Database();
$database->connect_db();







?>