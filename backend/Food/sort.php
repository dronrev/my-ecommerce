<?php

class Sort{
    public function mainCourses(){
        try{
            $db = new Operations();
            $conn = $db->dbConnection();
            $sql = "SELECT * FROM `product` WHERE food_category = 'Main Courses'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $count = $stmt->rowCount();
            if($count>0){
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($data);
            }
            else{
                echo 'mana bro';
            }
        }
        catch(PDOException $e){
            echo $e;
        }
    }
}

?>