<?php
class Student extends User{
    private $gpa;
    public function __construct($username, $password,$firstName, $lastName, $gpa){
        Parent::__construct($username, $password, $firstName, $lastName);  
        $this->gpa = $gpa;       
    }
    public function get_gpa(){
        return $this->gpa;
    }
    public function rank(){
        if($this->gpa ==null){
            return ;
        }else 
        if($this->gpa < 5){
            return "Yếu";
        }else if($this->gpa < 7){
            return "Trung Bình";
        }else if($this->gpa <8){
            return "Khá";
        }       
        return "Giỏi";
    }
}