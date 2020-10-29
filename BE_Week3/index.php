<?php
include_once 'User.php';

 $username ="luuthikieuoanh"; $password = '12345'; $firstName = 'luu'; $lastName ='oanh';
 $obj=new User($username,$password,$firstName,$lastName);
echo $obj->getFullName();