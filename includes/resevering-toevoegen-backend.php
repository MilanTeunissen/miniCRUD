<?php
if (isset($_POST['reseveringToevoegenSubmit'])) {

    require_once("../includes/connector.php");

    $sql = "INSERT INTO resevering (klantNaam, Email, aantal, datum, tijd, bijzonderheden) VALUES (:klantNaam, :Email, :aantal, :datum, :tijd, :bijzonderheden)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':klantNaam', $_POST['Naam']);
    $stmt->bindParam(':Email', $_POST['email']);
    $stmt->bindParam(':aantal', $_POST['aantal']);
    $stmt->bindParam(':datum', $_POST['datum']);
    $stmt->bindParam(':tijd', $_POST['tijd']);
    $stmt->bindParam(':bijzonderheden', $_POST['bijzonderheden']);
    $stmt->execute();

    header('Location: ../admin.php');

} else {
    header('Location: ../resevering-toevoegen.php');
}   