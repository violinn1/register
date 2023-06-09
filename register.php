<?php
// Create a database connection
$conn = mysqli_connect("localhost", "root", "", "nadeline");
// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $username = $_POST["username"];
  $jenisKelamin = $_POST["jeniskelamin"];
  $usia = $_POST["usia"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  // Check if the username is already taken
  $sql = "SELECT * FROM user WHERE username='$username'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo "The username is already taken.";
  } else {
    // The username is not taken, so insert the new user into the database
    $sql = "INSERT INTO user (nama, username, jeniskelamin, usia, email, password) VALUES ('$name','$username', '$jenisKelamin', '$usia', '$email', '$password')";
    mysqli_query($conn, $sql);
    header('location: index.php');
  }
}
mysqli_close($conn);
?>