<?php 
require_once("includes/connector.php");
$dataTable = "resevering";
$sql = "select * FROM resevering";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){

        echo   "<tr>";
        echo   "<td>" . $result['klantNaam'] ."</td>";
        echo   "<td>" . $result['Email'] ."</td>";
        echo   "<td>" . $result ['aantal']."</td>";
        echo   "<td>" . $result ['datum']."</td>";
        echo   "<td>" . $result ['tijd']."</td>";
        echo   "<td>" . $result ['bijzonderheden']."</td>";
        echo   "<td><a href='includes/delete.php?id=" . $result['ID'] . "&dataTable=" . $dataTable . "'><button>verwijderen</button></td>";
        echo   "</tr>"; 
    }