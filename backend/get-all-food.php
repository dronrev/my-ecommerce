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
    }
}

?>