<?php
require_once 'INCLUDES' . "../dataincludes/DataAccess.php";
class UserModel
{


    
    public $firstname;
    public $lastname;
    public $gender;
    public $dob;
    public $phone;
    public $email;
    public $userName;
    public $pass;

    public function setUserInformation($firstname, $lastname,$gender,$dob, $phone,$email,$userName,$pass)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->gender = $gender;
        $this->dob = $dob ;
        $this->phone = $phone;
        $this->email = $email;
        $this->username = $userName;
        $this ->pass = $pass; 
        
    }

    function insertUser($firstname ,$lastname,$gender,$dob, $phone, $email, $userName, $pass )
    {

        try {
            //this function will be needing to insert user in login table

            $sql = "insert into db_user (firstname,lastname,gender,date of birth,phone,email,username,password) values ('" . $firstname . "','" . $lastname . "','" . $gender . "','" . $dob . "','" . $phone . "','" . $email . "','" . $userName . "','" . $pass . "',)";
            $db =  new DataAccess();
            $db->executeQuery($sql);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    function deleteUser($userName)
    {

        try {
            //this function will be needing to insert user in login table
            $sql = "delete from db_user  where username='" . $userName . "'";
            $db =  new DataAccess();
            $db->executeQuery($sql);
            $sql1 = "delete from login  where username='" . $userName . "'";
            var_dump($sql1);
            $db1 =  new DataAccess();
            $db1->executeQuery($sql1);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function getTotalNumberOfUser()
    {
        $sql = "SELECT * FROM user";
        $db = new DataAccess();

        $result = $db->getData($sql);

        return $result->num_rows;
    }
    public function getAllUsers()
    {
        $sql = "SELECT * FROM db_user";
        $db = new DataAccess();

        $result = $db->getData($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $db_users[] =  array(
                    "firstname" => $row["firstname"],
                    "lastname" => $row["lastname"],
                    "gender" => $row["gender"],
                    "email" => $row["email"],
                    "dob" => $row["date of birth"],
                    "phone" => $row["phone"],
                    "username" => $row["username"],
                    "pass" => $row["pass"]
                );
            }
            return $db_users;
        } else {
            echo "0 results";
        }
    }
}
