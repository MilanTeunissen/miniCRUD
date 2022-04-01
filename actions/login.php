<?php 
session_start();
require_once("../includes/connector.php");

$sql="SELECT ID, wachtwoord FROM users WHERE username = :username";

$stmt = $connect->prepare($sql);
$stmt->bindParam(':username', $_POST['username']); //verbind hem met wat hij uit het formelier haalt 
$stmt->execute();
$result = $stmt->fetchAll();

if ($stmt->rowCount() > 0) {
    foreach ($result as $result) {
        if (password_verify($_POST['password'], $result['password'])) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['name'] = $_POST['username'];
            header("Location: ../Adminpages/home.php");
            exit();
        } else {
            // Incorrect password
            header("Location: ../pages/loginPage.php?error=Password or username is incorrect");
            exit();
        }
    }
} else {
    // Incorrect username
    header("Location: ../pages/loginPage.php?error=Password or username is incorrect");
    exit();
}