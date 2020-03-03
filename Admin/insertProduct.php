<?php
   include('../config.php');

$sql="INSERT INTO product (productName, Category_Name, Model,Type, Warehouse_ID, Description,Price, Picture)
VALUES ('$_POST[name]', '$_POST[select]', '$_POST[model]', '$_POST[type]', 1, '$_POST[ml]', '$_POST[price]', '$_POST[picture]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  header("location: add_product.php");
  echo "1 record added";

 mysqli_close($mysqli);
?>
