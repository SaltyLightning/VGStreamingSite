<?php

/**
 * Created by PhpStorm.
 * User: xay
 * Date: 11/29/2016
 * Time: 11:58 AM
 */
class User
{
    private $_username;
    private $_email;
    private $_loginStatus;
    private $_uploadedVideos;

    /**
     * @return mixed
     */
    public function getUploadedVideos()
    {
        return $this->_uploadedVideos;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    public function __construct($username)
    {
        $this->_username = $username;
        $this->_loginStatus = false;
    }

    public function login($password){
        $sql = "SELECT * FROM Users WHERE Username = " . $this->_username;
        $con = mysqli_connect("localhost", "cs", "", "cs3500");

        if (mysqli_connect_errno($con)) {

        }
        else {
            $result = mysqli_query($con, $sql);
            $arr = mysqli_fetch_array($result);
            if ( hash_equals($arr["hash"], crypt($password, $arr["hash"]))) {
                $this->_loginStatus = true;
                $this->_uploadedVideos = $this->findUploadedVideos();
            }
            else{
                throw new Exception("Incorrect password.");
            }
        }
    }

    public function registerUser($password, $email){
        // A higher "cost" is more secure but consumes more processing power
        $cost = 10;

        // Create a random salt
        $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

        // Prefix information about the hash so PHP knows how to verify it later.
        // "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
        $salt = sprintf("$2a$%02d$", $cost) . $salt;

        // Hash the password with the salt
        $hash = crypt($password, $salt);

        $sql = "INSERT INTO Users (Username, Email, Hash) SELECT * FROM (SELECT ". $this->_username . ", " . $email. ", " .$hash. ") AS tmp";
    }

    public function isUsernameAvailable(){
        $sql = "SELECT * FROM Users WHERE Username = $this->_username";
        $con = mysqli_connect("localhost", "cs", "", "cs3500");

        if (mysqli_connect_errno($con)){
            return true;
        }
        else{
            return false;
        }
    }
    private function findUploadedVideos(){
        throw new Exception("Not implemented");
    }
}