
<?php


require_once("getConnection.php");
try {


    $sql = 'SELECT * 
            FROM shoes 
            LEFT JOIN gender ON gender.genID=shoes.genID ';
    $q = $conn->prepare($sql);

    $q->execute();


    while($record = $q->fetchObject()){

        //echo $record->shDesc . " ";

        $img_path = "http://" . $record->shImg;

        $gender = "N/A";

        if ($record->gender == "Female"){
            $gender = "Womens";
        }
        elseif ($record->gender == "Male") {
            $gender = "Mens";
        }
        else{
            $gender = "Unisex";
        }


        echo "<article class='flexParagraph'>
        <p class='item-id'>$record->shID</p>
        <img data-src=\"$img_path\" src=\"$img_path\" alt='shoe' >
        <h4 id='product-name'>$record->shName</h4>
        <p style='font-style: italic'>$gender</p>
        <p>$record->shDesc</p>
        <h5>$record->shPrice</h5>
        <button id='add-to-basket'>Add to Basket</button>
    </article>";
    }


} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>