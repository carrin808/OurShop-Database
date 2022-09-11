<?php
if (isset($_GET['product_id'])){
    //connrct to the db
    require 'db_conn.php';

    //Receive the product id
    $receive_id=$_GET['product_id'];

    //To implement the deletion. prepare the delete query
    $delete_query = "DELETE FROM `products` WHERE id='$receive_id'";

    $delete = msqli_query($conn,$delete_query);
    if (!$delete){
        die("Deletion failed");
    }else{
        header("location:products.php");
    }
}
