<?php 
require_once("includes/connector.php");
$sql = "select * FROM menu";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        $roundedPrice = sprintf('%0.2f' , $result['prijs']);

        echo   "<tr>";
        echo   "<td>" . $result['naam'] ."</td>";
        echo   "<td>" . $result['beschrijving'] ."</td>";
        echo   "<td>€" . $roundedPrice ."</td>";
        echo   "</tr>"; 
    }