<?php
spl_autoload_register(function ($class_name) {
    require "class/" . $class_name . ".php";
});
if (isset($_POST['username'])) {
    $stList = [];
    for ($i = 0; $i < count($_POST['username']); $i++) {
        $st = new Student($_POST['username'][$i], $_POST['password'][$i], $_POST['firstname'][$i], $_POST['lastname'][$i], $_POST['gpa'][$i]);
        $stList[$i] = $st;
    }
    var_dump($stList);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #form_register label {
            display: inline-block;
            width: 100px;
        }

        #form_register .form-row {
            padding: 5px 0;
        }
    </style>
</head>

<body>


    <form action="demopostarray.php" method="post" id="form_register">
        <div class="addfr" id="addfr">
            <div class="form-row">
                <label for="username">Username</label>
                <input type="text" name="username[]">
            </div>
            <div class="form-row">
                <label for="password">Password</label>
                <input type="password" name="password[]">
            </div>
            <div class="form-row">
                <label for="firstname">FirstName</label>
                <input type="text" name="firstname[]">
            </div>
            <div class="form-row">
                <label for="lastname">LastName</label>
                <input type="text" name="lastname[]">
            </div>
            <div class="form-row">
                <label for="gpa">GPA</label>
                <input type="text" name="gpa[]">
            </div>
        </div>
        

        <div id="form"></div>

        <button type="submit">Sign up</button>

    </form>
    <br>



    <button type="button" id="btn">+</button>

    <table>
        <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>GPA</th>
            <th>Rank</th>
        </tr>
        <tr>
            <?php
            if (isset($st)) {
                foreach ($stList as $st) {
                    echo "<td>" . $st->getUserName() . "</td>";
                    echo "<td>" . $st->getFullName() . "</td>";
                    echo "<td>" . $st->get_gpa() . "</td>";
                    echo "<td>" . $st->rank() . "</td>";
                }
            }

            // if(!empty($_POST)){
            //     $student = new Student($_POST['username'],$_POST['password'],$_POST['firstName'],$_POST['lastName'],$_POST['gpa']);

            // }                   
            ?>

        </tr>
    </table>


    <!-- <form action="demopostarray.php" method="post" id="form">
        <label for=""></label>
        <input type="text" name="fruit[]" id=""><br>
        <input type="text" name="fruit[]" id=""><br>
        <input type="text" name="fruit[]" id=""><br>
        <div class="addfr" id="addfr"></div><br>
       
        <button type="submit">Send</button>
    </form> -->

    <script>
        const form = document.querySelector('.addfr');

        document.getElementById("btn").addEventListener("click", btnAdd);

        function btnAdd() {
            // const clone = form.cloneNode(true);
            // document.querySelector('.form_register').appendChild(clone);
            document.getElementById("form").innerHTML += '<br>'+ form.innerHTML;
            // document.getElementById("addfr").innerHTML += ` <form action="demopostarray.php" method="post" id="form_register">
            //     <div class="form-row">
            //         <label for="username">Username</label>
            //         <input type="text" name="username[]">
            //     </div>
            //     <div class="form-row">
            //         <label for="password">Password</label>
            //         <input type="password" name="password[]">
            //     </div>
            //     <div class="form-row">
            //         <label for="firstname">FirstName</label>
            //         <input type="text" name="firstname[]" >
            //     </div>
            //     <div class="form-row">
            //         <label for="lastname">LastName</label>
            //         <input type="text" name="lastname[]">
            //     </div>
            // </form>
            // <br>`;

        }
    </script>
</body>


</html>