<?php

    //initalise html
    $html = '<p>Enter details for people table</p>';

    // check post parameters
    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email'])) {

        //data validation
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];

        //check length
        if (strlen($firstname) <= 64 && strlen($lastname) <= 64 && strlen($email) <= 32) {
            //you could do other checks here

            //save to database (server host, username, password, database name)
            $mysqli = mysqli_connect("localhost", "rk506_user", "Nousslayons", "rk506_ci527_test");
            
            //protection against SQL injection
            $firstname = mysqli_real_escape_string($mysqli, $firstname);
            $lastname = mysqli_real_escape_string($mysqli, $lastname);
            $email = mysqli_real_escape_string($mysqli, $email);

            //build the SQL statement
            $sql = "INSERT INTO people (firstName, lastName, email) " . "VALUES ('$firstname', '$lastname', '$email')";

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
        . '<br><label for="email">email: </label>'
        . '<input type="email" id="email" name="email" />'
        . '<input type="submit" value="Save to Database" />'
        . '</form>';

?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="login.css" rel="stylesheet" />
    <script src="login.js"></script>
    <title>Brighton Bazaar</title>
</head>

<body>


    <main>
        <header>

            <div class="topbar">

                <div class="navigation">

                    <a href="home.html">Home</a>
                    <a href="#buy">Buy</a>
                    <a href="login.html">Log In 2</a>
                    <a class="active" href="#login" id="login">Log In</a>
                    <form id="form">
                        <input type="search" class="search" id="query" placeholder="Seach images....">
                        <button>
                            <svg viewBox="0 0 1024 1024">
                                <path class="path1"
                                    d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

        </header>

        <div id="section1">

            <div id="logotxt">
                <img id="logo" src="./images/brighton bazaar.svg" alt="Italian Trulli">
                <div id="textcontainer">
                    <h2> Weclome back! Please Log In</h2>
            </div>
            </div>

            <?php
            echo $html;
        ?>

        </div>


        


        



           

           

    </main>
    <footer>

    </footer>

</body>


</html>
