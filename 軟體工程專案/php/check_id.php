<?php
    include "db_conn_software.php";
    
    $product_name = $_REQUEST["product_name"];//ex: "1";

    $query = ("SELECT product_id FROM product WHERE product_name = ? ");   
    $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
    $error = $stmt->execute($product_name); //執行sql語法
    $result = $stmt->fetchAll();
    $val = $result[0][0];
    echo json_encode($val);
?>
