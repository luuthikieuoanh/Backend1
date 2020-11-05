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
        
        table,table th{
            border: 1px solid #000;
            border-collapse: collapse;
        }
        
    </style>
</head>


<body>
    <form action="register.php" method="post" id="form_register">
        <div class="form-row">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>

        <div class="form-row">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="form-row">
            <label for="firstname">FirstName</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div class="form-row">
            <label for="lastname">LastName</label>
            <input type="text" name="lastname" id="lastname">
        </div>
        <button type="submit">Sign up</button>
    </form>

    <table>
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
        </tr>
        <tr>
        <?php
        if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])) {
            echo '<th>' . $_POST['firstname'] . '</th>';
            echo '<th>' . $_POST['lastname'] . '</th>';
        } else {
        }
        ?>
        </tr>
        




    </table>


</body>

</html>