<?php
header('Content-Type: application/json');
include 'connect.php';
$data = array();
$sql = "SELECT COUNT(id) FROM product";
$result = selectSQL($sql);
foreach ($result as $row) {
  $data[] = $row;
}
echo json_encode($data);
