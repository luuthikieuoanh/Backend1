<?php
include_once 'User.php' ;

$u1 = new User('oanh123','oanh','kieu','oanh');
echo $u1->getFullName();
echo'</br>';
echo $u1->getUserName();
