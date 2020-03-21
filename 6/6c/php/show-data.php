<?php
    include "conn.php";

    $sql = "SELECT * FROM tb_product";
    $result = $conn->query($sql);

    foreach($result as $res){
        $id = $res["id"];
        $name = $res["name"];
        $price = $res["price"];
        $id_category = $res["id_category"];
        $id_cashier = $res["id_cashier"];
    }
?>