<?php
include_once 'connect-db.php';

$db = new Operations();
$conn = $db->dbConnection();

$data = json_decode(file_get_contents("php://input"));
$food_id = "f" . uniqid();
$food_name = $data->food_name;
$food_desc = $data->food_description;
$food_cat = $data->food_cat;
$food_price = $data->food_price;

switch ($food_cat) {
    case 'main_courses':
        $food_id = "m" . uniqid();
        break;
    
    case 'starters':
        $food_id = "star" . uniqid();
        break;
    
    case 'salads':
        $food_id = "sal" . uniqid();
        break;

    case 'desserts':
        $food_id = "des" . uniqid();
        break;
    
    case 'drinks':
        $food_id = "d" . uniqid();
        break;

    default:
        
        break;
}

$sql = 'INSERT INTO `product` SET food_id = :food_id, food_name = :food_name,
 food_description = :food_description, food_category = :food_category, food_price = :food_price';

$stmt = $conn->prepare($sql);
$stmt->bindParam(':food_id',$food_id);
$stmt->bindParam(':food_name',$food_name);
$stmt->bindParam(':food_description',$food_desc);
$stmt->bindParam(':food_category',$food_cat);
$stmt->bindParam(':food_price',$food_price);

if($stmt->execute()){
    echo json_encode([
        'message' => 'Product added successfully!'
    ]);
}

?>