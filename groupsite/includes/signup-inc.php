<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["submit"])) {

$name= $_POST["name"];
$email= $_POST["email"];
$uid= $_POST["uid"];
$pwd= $_POST["pwd"];
$pwdrepeat= $_POST["pwdrepeat"];

require_once "dbh-inc.php";
require_once "functions-inc.php";

    if(emptyInputSignup($name,$email,$uid,$pwd,$pwdrepeat) !== false){
        header("location:../signup.php?error=emptyinput");
        exit();
    }

    if(invalidUid($uid) !== false){
        header("location:../signup.php?error=invalidUid");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location:../signup.php?error=invalidEmail");
        exit();
    }
    
     if(pwdMatch($pwd,$pwdrepeat) !== false){
        header("location:../signup.php?error=passwordsdontmatch");
        exit();
    }

 if(uidExists($conn,$uid,$email) !== false){
        header("location:../signup.php?error=usernametaken");
        exit();
    }
    
createUser($conn, $uid, $email, $name, $pwd);


}
else{
    header("location:../signup.php");
}
?>