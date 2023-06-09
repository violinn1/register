<?php
include 'conection.php';

if (isset($_POST['commentId']) && isset($_POST['Reason'])) {
  $commentId = $_POST['commentId'];
  $Reason = $_POST['Reason'];

  // Verifikasi password dengan melakukan query ke database
  $stmt = $conn->prepare("SELECT COUNT(*) FROM forum WHERE id = :commentId AND pass = :Reason");
  $stmt->bindParam(':commentId', $commentId);
  $stmt->bindParam(':Reason', $Reason);
  $stmt->execute();
  $count = $stmt->fetchColumn();

  if ($count > 0) { // Jika ID dan password cocok
    // Hapus komentar
    $sql = $conn->prepare("DELETE FROM forum WHERE id = :commentId AND parent_comment = 0 OR parent_comment = :commentId");
    $sql->bindParam(':commentId', $commentId);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      echo json_encode(array("statusCode" => 200));
    } else {
      echo json_encode(array("statusCode" => 201));
    }
  } else {
    echo json_encode(array("statusCode" => 202)); // ID atau password tidak cocok
  }
}

$conn = null;
?>
