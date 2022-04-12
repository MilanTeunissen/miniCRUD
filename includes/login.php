<?php 
 if (isset($_POST['inlogSubmit'])) {
    session_start();
    require_once("../includes/connector.php");

    $sql = "SELECT ID, wachtwoord FROM users WHERE username = :username";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if ($stmt->rowCount() > 0) {
        foreach ($result as $result) {
            if($_POST['wachtwoord'] === $result['wachtwoord']) {
                $_SESSION['ID'] = $result['ID'];
                header("Location: ../admin.php");
            } else {
                echo "username of password incorrect!";
            }
        }
    } else {
        echo "username of password incorrect!";
        exit();
    }




} else {
    header("Location: ../inlog.php");
}