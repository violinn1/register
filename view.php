<?php
include 'conection.php';
$data = array();
$sql = "SELECT *  FROM `forum` ORDER BY id desc";
$result = $conn->query($sql);
while($row = $result->fetch()){
        array_push($data, $row);
        array_push($data);
}

echo json_encode($data);
$conn = null;
exit();



