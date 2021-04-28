<?php


require_once("getConnection.php");
try {


    $sql = 'SELECT * 
            FROM shirt 
            LEFT JOIN gender ON gender.genID=shirt.genID
            WHERE shirt.genID = 1 ';

    $q = $conn->prepare($sql);

    $q->execute();


    while ($record = $q->fetchObject()) {


        $img_path = "http://" . $record->shrtImg;

        $gender = "N/A";

        if ($record->gender == "Female") {
            $gender = "Womens";
        } elseif ($record->gender == "Male") {
            $gender = "Mens";
        } else {
            $gender = "Unisex";
        }


        echo "<article class='flexParagraph'>
        <p class='item-id'>$record->shrtID</p>
        <img data-src='$img_path' src='$img_path' alt='women shirt' >
        <h4>$record->shrtName</h4>
        <p style='font-style: italic'>$gender</p>
        <p>$record->shrtDesc</p>
        <h5>$record->shrtPrice</h5>
        <button id='add-to-basket'>Add to Basket</button>
    </article>";
    }


} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>