<?php
include 'connection.php';

if (isset($_POST['commentId']) && isset($_POST['Reason'])) {
  $commentId = $_POST['commentId'];
  $Reason = $_POST['Reason'];

  // Verifikasi password dengan melakukan query ke database
  $stmt = $conn->prepare("SELECT COUNT(*) FROM comments WHERE commentId = :commentId AND passwd = :Reason");
  $stmt->bindParam(':commentId', $commentId);
  $stmt->bindParam(':Reason', $Reason);
  $stmt->execute();
  $count = $stmt->fetchColumn();

  if ($count > 0) { // Jika ID dan password cocok
    // Hapus balasan komentar
    $sql = $conn->prepare("DELETE FROM comments WHERE parent_comment = :commentId");
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
