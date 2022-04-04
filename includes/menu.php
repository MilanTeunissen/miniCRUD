<?php 
require_once("includes/connector.php");
$sql = "select * FROM menu";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        $roundedPrice = sprintf('%0.2f' , $result['prijs']);

        echo   "<div class='Menu'>";
        echo   "<h1 class='Menu_head'>" . $result['naam'] ."</h1>";
        echo   "<p class='Menu_text'>" . $result['beschrijving'] ."</p>";
        echo   "<p class='Menu_text'>€" . $roundedPrice ."</p>";
        echo   "<button class='cart'>Bestellen</button>";
        echo   "</div>";    
    }


    