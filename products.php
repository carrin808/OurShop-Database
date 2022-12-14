<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OUR SHOP | PRODUCTS</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<body>
<a href="index.php" class="btn btn-outline-dark btn-block">BACK</a>
<h1 class="text-info text-center">eMobilis Students' Centre Products</h1>
<table class="table table-dark table-hover">
    <tr>
        <th>PRODUCT NAME</th>
        <th>PRODUCT QUANTITY</th>
        <th>PRODUCT PRICE</th>
        <th>DELETE</th>
        <th>UPDATE</th>
    </tr>
    <?php
    //Start by connecting to the db
    require 'db_conn.php';
    //To display data, prepare a select query
    $select_query = "SELECT * FROM `products` WHERE 1";
    //Finally execute the query and display the records on table rows
    $products = mysqli_query($conn,$select_query);
    //Loop throught the data to display each row at a time
    while ($row = mysqli_fetch_assoc($products)){
        extract($row);
        echo "<tr>
                      <td>$name</td>
                      <td>$quantity</td>
                      <td>$price</td>
                      <td><a href='delete.php?product_id=$id' class='btn btn-danger btn-block'>Delete</a></td>
                      <td><a href='update.php?product_name=$name&product_qtty=$quantity&product_price=$price&product_id=$id' class='btn btn-primary btn-block'>Update</a></td>
              </tr>";
    }
    ?>
</table>

</body>
</html>

