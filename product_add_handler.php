<?php
if (isset($_POST['btn_submit'])){
    //Connect to the db
    require 'db_conn.php';
    //Receive data from user
    $product_name = mysqli_real_escape_string($conn,$_POST['pname']);
    $product_qtty = mysqli_real_escape_string($conn,$_POST['qtty']);
    $product_price = mysqli_real_escape_string($conn,$_POST['price']);

    //To save the data, prepare the insert query
    $insert_query = "INSERT INTO `products`(`id`, `Name`, `Quantity`, `Price`) VALUES (null,'$product_name','$product_qtty','$product_price')";
    //Finally execute the query
    $save = mysqli_query($conn,$insert_query);

    //Check if the data has been saved successfully
    if (!$save){
        echo "Failed submitting product";
    }else{
        header("location:index.php");
    }
}
