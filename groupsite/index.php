<?php

    //initalise html
    $html = '<p>Enter details for people table</p>';

    // check post parameters
    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['phone'])) {

        //data validation
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $phone = $_POST['phone'];

        //check length
        if (strlen($firstname) <= 64 && strlen($lastname) <= 64 && strlen($phone) <= 32) {
            //you could do other checks here

            //save to database (server host, username, password, database name)
            $mysqli = mysqli_connect("localhost", "rk506_user", "NousSlayons", "rk506_ci527_test");
            
            //protection against SQL injection
            $firstname = mysqli_real_escape_string($mysqli, $firstname);
            $lastname = mysqli_real_escape_string($mysqli, $lastname);
            $phone = mysqli_real_escape_string($mysqli, $phone);

            //build the SQL statement
            $sql = "INSERT INTO people (firstName, lastName, phone) " . "VALUES ('$firstname', '$lastname', '$phone')";

            //execute SQL statement
            $result = mysqli_query($mysqli, $sql);
            if ($result !== false) {
                //gives you back last generated id - Marcus: "that's quirky"
                $id = mysqli_insert_id($mysqli);
                $html = "<p>Success! Insert id = $id. Enter more people if you want.</p>";
            }
            $id = mysqli_insert_id($mysqli);

            //get insert id and show it
        }
        else {
            $html = '<p>One or more of the values are too long, try again.</p>';
        }
        

        
        //$html = '<p>Welcome back, ' . $user . '</p>' . '<p><a href="./post.php">Log Out</a></p>';
    }

    $html .= '<form method="POST" action="" >'
        . '<label for="firstName">Firstname: </label>'
        . '<input type="text" id="firstName "name="firstName" />'
        . '<br><label for="lastName">Lastname: </label>'
        . '<input type="text" id="lastName" name="lastName" />'
        . '<br><label for="phone">Phone: </label>'
        . '<input type="tel" id="phone" name="phone" />'
        . '<input type="submit" value="Save to Database" />'
        . '</form>';

?>
<!DOCTYPE html>
<style>
    input {display:block; margin-bottom: 10px;}
</style>
<html>
    <head>
        <meta charset="utf-8">
        <title>Databases</title>
    </head>
    <body>
        <h1>Login Form</h1>
        <?php
            echo $html;
        ?>
    </body>
</html>