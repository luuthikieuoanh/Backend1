<?php
spl_autoload_register(function ($class_name) {
    require "class/" . $class_name . ".php";
})
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #form_register label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>


<body>
    <form action="login.php" method="post" id="form_register">
        <div class="form-row">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>

        <div class="form-row">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit">Sign up</button>
    </form>


    <?php

    $user=new User("oanh123","12345","kieu","oanh");
    // if (!empty($_POST)) {
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    //     if ($user->login($username, $password)) {
    //         echo " Login Successfully ";
    //     } else {
    //         echo " Your username or password not validate ";
    //     }
    // }
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        if (User::login($_POST['username'], $_POST['password'])) {
            echo "Logged in Successfully";
        }
    }
    ?>

</body>

</html>