<?php
class User 
{
    public $username;
    public $password;
    public $firstname;
    public $lastname;
    
    public function __construct($username='',$password='',$firstname='',$lastname='')
    {
        $this->username = $username;
        $this->password = password_hash($password,PASSWORD_DEFAULT);
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    public function getFullName()
    {
        return $this->firstname.$this->lastname;
    }
    public function getUserName()
    {
        return $this->username;
    }

    public function __toString()
    {
        return "aaaa";
    }
    public static function login($username,$password)
    {
        return ($username == 'admin') && password_verify($password,password_hash('12345',PASSWORD_DEFAULT));
    }
}