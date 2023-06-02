<?php
function emptyInputSignup($name,$email,$uid,$pwd,$pwdrepeat) {
    $result;
    if(empty($name)|| empty($email)|| empty($uid)|| empty($pwd)|| empty($pwdrepeat)){
    $result=true;
    }
    else{
            $result=false;

    }
    return $result;
}
       
    
function invalidUid($uid) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function invalidEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false; // Valid email format
    } else {
        echo "Invalid Email: " . $email; // Debugging statement to display the invalid email
        return true; // Invalid email format
    }
}

    
function pwdMatch($pwd,$pwdrepeat){
    
    $result;
    if ($pwd != $pwdrepeat){
    $result=true;
    }
    else{
            $result=false;

    }
    return $result;
}
    

function uidExists($conn, $uid, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $uid, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        mysqli_stmt_close($stmt);
        return $row;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

function createUser($conn, $uid, $email, $name, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $uid, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../signup.php?error=none");
    exit();
}
function emptyInputLogin($username,$pwd) {
    $result;
    if(empty($username)|| empty($pwd)){
    $result=true;
    }
    else{
            $result=false;

    }
    return $result;
}
function loginUser($conn, $username, $pwd) {
   $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
         header("Location: ../login.php?error=wronglogin");
        exit();
    }
    
    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd,$pwdHashed);
    
    if($checkPwd === false){
         header("Location: ../login.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["userId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("Location: ../login.php");
        exit();

    }
}

?>