<?php


require_once("getConnection.php");
try {


    $sql = 'SELECT * 
            FROM pants 
            LEFT JOIN gender ON gender.genID=pants.genID
            WHERE pants.genID = 1 ';

    $q = $conn->prepare($sql);

    $q->execute();


    while ($record = $q->fetchObject()) {


        $img_path = "http://" . $record->paImg;

        $gender = "N/A";

        if ($record->gender == "Female") {
            $gender = "Womens";
        } elseif ($record->gender == "Male") {
            $gender = "Mens";
        } else {
            $gender = "Unisex";
        }


        echo "<article class='flexParagraph'>
        <p class='item-id'>$record->paID</p>
        <img data-src='$img_path' src='$img_path' alt='women pants' >
        <h4>$record->paName</h4>
        <p style='font-style: italic'>$gender</p>
        <p>$record->paDesc</p>
        <h5>$record->paPrice</h5>
        <button id='add-to-basket'>Add to Basket</button>
    </article>";
    }


} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>