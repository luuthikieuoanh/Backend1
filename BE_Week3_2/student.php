<?php 
    spl_autoload_register(function($class_name){
        require "class/". $class_name .".php";
    })
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        form {
            width: 400px;
            min-height: 250px;          
            padding: 15px 0;
            margin: 60px 0;
            text-align: center;
        }

        form h2 {
            text-align: center;
            padding: 10px 0;
        }

        form .form-group {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            padding: 5px 20px;
        }

        form .form-group input {
            width: 70%;
            padding: 2px 5px;
            white-space: nowrap;
        }

        form button {
            display: inline-block;
            margin-left: 20px;
            margin-top: 20px;
            padding: 8px 50px;
            border-radius: 8px;
            border: none;
            background: lightblue;
            color: #fff;
        }

        /* form button:focus {
            outline: none;
            background: #fff;
            color: #000;
        } */

        table {
            min-width: 400px;
            border-collapse: collapse;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid #000;
            text-align: center;
        }

        th {
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <form action="student.php" method="post" name="register-form" id="register-form">
        <h2>Nhap Thong Tin</h2>
        <div class="form-group">
            <label for="username">Username: </label>
            <input type="text" name="username" id="username">
        </div>
        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="firstName">First Name: </label>
            <input type="text" name="firstName" id="firstName">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name: </label>
            <input type="text" name="lastName" id="lastName">
        </div>
        <div class="form-group">
            <label for="gpa">GPA: </label>
            <input type="text" name="gpa" id="gpa">
        </div>       
        <button type="submit">Send</button>
    </form>

    <table>
        <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>GPA</th>
            <th>Rank</th>
        </tr>
        <tr>
            <?php
                if(!empty($_POST)){
                    $student = new Student($_POST['username'],$_POST['password'],$_POST['firstName'],$_POST['lastName'],$_POST['gpa']);
                    echo "<td>".$student->getUserName()."</td>";
                    echo "<td>" .$student->getFullName()."</td>";
                    echo "<td>".$student->get_gpa() ."</td>";
                    echo "<td>".$student->rank()."</td>";
                }                   
            ?>

        </tr>
    </table>
    
</body>

</html>

