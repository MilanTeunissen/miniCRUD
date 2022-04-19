<?php
if (isset($_GET['searchInput'])) {
    require_once("connector.php");
    $likeInput = '%'.$_GET['searchInput'].'%';

    // Gerechten
    $sql = "SELECT * FROM menu WHERE naam LIKE :input OR beschrijving LIKE :input2";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":input", $likeInput);
    $stmt->bindParam(":input2", $likeInput);
    $stmt->execute();
    $results = $stmt->fetchAll();

    $gerechtenSearch = false;
    if ($stmt->rowCount() > 0) {
        $gerechtenSearch = true;
    }

    if ($gerechtenSearch == true) {
        foreach ($results as $result){

            $roundedPrice = sprintf('%0.2f', $result['prijs']);
        
            echo   "<div class='Menu'>";
            echo   "<h1 class='Menu_head'>" . $result['naam'] ."</h1>";
            echo   "<p class='Menu_text'>" . $result['beschrijving'] ."</p>";
            echo   "<p class='Menu_text'>€" . $roundedPrice ."</p>";
            echo   "<button class='cart'>Bestellen</button>";
            echo   "</div>";    
        }
    } else {
        echo "We hebben helaas niks kunnen vinden op " . $_GET['searchInput'];
    }
} else {
    header("../index.php");
}