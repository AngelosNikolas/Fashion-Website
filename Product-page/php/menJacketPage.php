<?php


require_once("getConnection.php");
try {


    $sql = 'SELECT * 
            FROM jacket 
            LEFT JOIN gender ON gender.genID=jacket.genID
            WHERE jacket.genID = 2 ';

    $q = $conn->prepare($sql);

    $q->execute();


    while ($record = $q->fetchObject()) {


        $img_path = "http://" . $record->jaImg;

        $gender = "N/A";

        if ($record->gender == "Female") {
            $gender = "Womens";
        } elseif ($record->gender == "Male") {
            $gender = "Mens";
        } else {
            $gender = "Unisex";
        }


        echo "<article class='flexParagraph'>
        <p class='item-id'>$record->jaID</p>
        <img data-src='$img_path' src='$img_path' alt='mens jacket' >
        <h4>$record->jaName</h4>
        <p style='font-style: italic'>$gender</p>
        <p>$record->jaDesc</p>
        <h5>$record->jaPrice</h5>
        <button id='add-to-basket'>Add to Basket</button>
    </article>";
    }


} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>