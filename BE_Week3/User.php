<?php
class User 
{
    public $username ;
    public $password ;
    public $firstName ;
    public $lastName ;

    public function __construct($username,$password,$firstName,$lastName){
        // return $username;
    
        $this->username = $username;
        $this->password=password_hash($password,PASSWORD_DEFAULT);
        $this->firstName=$firstName;
        $this->lastName=$lastName;
    }

    public function getFullName()
    {
       return $this->firstName.$this->lastName;
    }

    public function getUser()
    {
       return $this->username.$this->password;
    }
}
