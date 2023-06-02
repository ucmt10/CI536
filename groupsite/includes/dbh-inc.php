<?php
$serverName ="localhost";
$dBusername ="rk506_bazaaruser";
$dBPassword ="Bazaaruser";
$dBName ="rk506_bazaar";

$conn = mysqli_connect($serverName, $dBusername, $dBPassword, $dBName);

            //protection against SQL injection
            //$firstname = mysqli_real_escape_string($mysqli, $firstname);
           // $lastname = mysqli_real_escape_string($mysqli, $lastname);
           // $phone = mysqli_real_escape_string($mysqli, $phone);
           
if (!$conn) {
    // Connection error
    die("Connection failed: " . mysqli_connect_error());
}
?>