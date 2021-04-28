<?php


require_once("getConnection.php");
try {


    $sql = 'SELECT * 
            FROM accessories 
            LEFT JOIN gender ON gender.genID=accessories.genID ';
    $q = $conn->prepare($sql);

    $q->execute();


    while ($record = $q->fetchObject()) {


        $img_path = "http://" . $record->asImg;

        $gender = "N/A";

        if ($record->gender == "Female") {
            $gender = "Womens";
        } elseif ($record->gender == "Male") {
            $gender = "Mens";
        } else {
            $gender = "Unisex";
        }


        echo "<article class='flexParagraph'>
        <p class='item-id'>$record->asID</p>
        <img data-src='$img_path' src='$img_path' alt='accessory' >
        <h4>$record->asName</h4>
        <p style='font-style: italic'>$gender</p>
        <p>$record->asDesc</p>
        <h5>$record->asPrice</h5>
        <button id='add-to-basket'>Add to Basket</button>
    </article>";
    }


} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>