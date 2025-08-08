<?php


class Database
{

    private $connection;


    public function connect_db()
    {

        //connection to the database
        $this->connection = mysqli_connect("localhost", 'root', '', 'prosperdbv2');


        if (mysqli_connect_error()) {

            die("Database connection error" . mysqli_connect_error() . mysqli_connect_errno());
        }

    }



    public function registerTeacher($firstName, $lastName, $email, $phoneNumber, $age, $homeaddresss, $stateofresidence, $country)
    {

        //added the query to insert into the database
        $sql_query = "INSERT INTO `Teachers` (FirstName, LastName, Email, PhoneNumber, Age, Homeaddress, stateofresidence, country) 
                     VALUES ('$firstName','$lastName','$email','$phoneNumber','$age', '$homeaddresss', '$stateofresidence', '$country')";

        //run the query excution
        $execution = mysqli_query($this->connection, $sql_query);

        //check if the execution was successful
        if ($execution) {

            return true;

        } else {

            return false;
        }
    }


    public function getTeachersByEmail($email)
    {
        $sql_query = "SELECT * from `Teachers` where Email = '$email'";

        $execution = mysqli_query($this->connection, $sql_query);
        $execution_check = mysqli_fetch_assoc($execution);

        return $execution_check;
    }


    public function checkTeacherEmail($email)
    {
        $sql_query = "SELECT Email from `Teachers` where Email = '$email'";

        $execution = mysqli_query($this->connection, $sql_query);
        $execution_check = mysqli_fetch_assoc($execution);

        return $execution_check;
    }
    public function checkTeacherPhoneNumber($phoneNumber)
    {
        $sql_query = "SELECT PhoneNumber from `Teachers` where PhoneNumber = '$phoneNumber'";

        $execution = mysqli_query($this->connection, $sql_query);
        $execution_check = mysqli_fetch_assoc($execution);

        return $execution_check;
    }




    public function updateTeacherRecord()
    {
        return false;
    }


    public function deleteTeacher()
    {

        return false;

    }

}





$database = new Database();
$database->connect_db();







?>