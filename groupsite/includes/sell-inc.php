<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $date = $_POST["date"];
    $ISBN = $_POST["ISBN"];
    $price = $_POST["price"];

    require_once "dbh-inc.php";

    // Insert book information into the "books" table
    $sql = "INSERT INTO books (title, author, date, ISBN, price) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../sell.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssss", $title, $author, $date, $ISBN, $price);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: ../sell.php?success=bookuploaded");
    exit();
} else {
    header("Location: ../sell.php");
    exit();
}
?>
