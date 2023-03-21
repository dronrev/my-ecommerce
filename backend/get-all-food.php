<?php

include_once 'connect-db.php';


$db = new Operations();
$conn = $db->dbConnection();

$sql = "SELECT * FROM product";
$stmt = $conn->prepare($sql);

if($stmt->execute()){
    $total = $stmt->rowCount();
    if($total > 0){
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
        /*foreach ($data as $key) {
            $food_id = $key['food_id'];
            $food_name = $key['food_name'];
            $food_description = $key['food_description'];
            $food_price = $key['food_price'];
            $food_cat = $key['food_category'];
            echo '<div class="card '.$food_id.' '.$food_cat.'">'.
            '<img src="./assets/images/food2.jpg" alt="bro" width="150" height="200">'
            . '<div class="food-name">'
            . ' <p class="food-name-title">'.$food_name 
            .'</p>
            <p>'.$food_description.'</p>
            <p>RM '.$food_price.'</p>
            <button  class="order-button" onclick="test(`'.$food_id.'`)">Add to Cart</button>'
            . '</div>'
             . '</div>';
        }*/
    }
}

?>