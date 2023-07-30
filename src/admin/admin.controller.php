<?php
require '../database/database.php';

function getProductsData($mysqli)
{
  $query = "SELECT * FROM products INNER JOIN shop on products.ShopID = shop.ShopID";
  $stmt = $mysqli->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();


  $productsData = array();

  while ($row = $result->fetch_assoc()) {
    $productsData[] = $row;
  }

  return $productsData;
}
