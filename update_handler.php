<?php
if (isset($_POST['btn_update'])){
    require 'db_conn.php';

    $updated_name = mysqli_real_escape_string($conn,$_POST['pname']);
    $updated_qtty = mysqli_real_escape_string($conn,$_POST['qtty']);
    $updated_price = mysqli_real_escape_string($conn,$_POST['price']);
    $received_id = mysqli_real_escape_string($conn,$_POST['my_id']);

    //To implement the updating, prepare the update query
    $update_query = "UPDATE `products` SET `Name`='$updated_name',`Quantity`='$updated_qtty',`Price`='$updated_price' WHERE 'id'='$received_id'";

    $update = mysqli_query($conn,$update_query);
    if (!$update){
        die("Updating failed");
    }else{
        header("location:products.php");
    }
}
