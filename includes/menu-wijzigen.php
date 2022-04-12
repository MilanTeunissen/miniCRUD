<?php
if (isset($_POST['wijzigenSubmit'])) {

    require_once("../includes/connector.php");

    $sql = "UPDATE menu SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs WHERE id = :id";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->bindParam(':naam', $_POST['naam']);
    $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt->execute();

    header('Location: ../admin.php');

} else {
    header('Location: ../menu-wijzigen.php');
}