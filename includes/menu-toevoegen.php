<?php
if (isset($_POST['toevoegenSubmit'])) {

    require_once("../includes/connector.php");

    $sql = "INSERT INTO menu (naam, beschrijving, prijs) VALUES (:naam, :beschrijving, :prijs)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':naam', $_POST['naam']);
    $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt->execute();

    header('Location: ../admin.php');

} else {
    header('Location: ../menu-toevoegen.php');
}