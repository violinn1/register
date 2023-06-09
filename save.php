<?php
include 'conection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$msg = $_POST['msg'];
$pass = $_POST['Password'];

if ($name != "" && $msg != "") {
  // Check if data already exists
  $checkQuery = $conn->prepare("SELECT * FROM forum WHERE student = :name");
  $checkQuery->bindParam(':name', $name);
  $checkQuery->execute();

  if ($checkQuery->rowCount() == 0) {
    // Data doesn't exist, perform insert
    $insertQuery = $conn->prepare("INSERT INTO forum (parent_comment, student, post, pass) VALUES (:id, :name, :msg, :pass)");
    $insertQuery->bindParam(':id', $id);
    $insertQuery->bindParam(':name', $name);
    $insertQuery->bindParam(':msg', $msg);
    $insertQuery->bindParam(':pass', $pass);
    $insertQuery->execute();

    echo json_encode(["statusCode" => 200]);
  } else {
    // Data exists, check password
    $existingData = $checkQuery->fetch();
    $existingPassword = $existingData['pass'];

    if ($pass === $existingPassword) {
      // Password matches, proceed with insert
      $insertQuery = $conn->prepare("INSERT INTO forum (parent_comment, student, post, pass) VALUES (:id, :name, :msg, :pass)");
      $insertQuery->bindParam(':id', $id);
      $insertQuery->bindParam(':name', $name);
      $insertQuery->bindParam(':msg', $msg);
      $insertQuery->bindParam(':pass', $pass);
      $insertQuery->execute();

      echo json_encode(["statusCode" => 200]);
    } else {
      // Password doesn't match
      echo json_encode(["statusCode" => 202]);
    }
  }
} else {
  echo json_encode(["statusCode" => 201]);
}

$conn = null;
?>
