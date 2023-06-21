<?php
include 'db.php';

$id = $_POST['id'];
$table = $_POST['table'];
$boolean = $_POST['boolean'];

$sql = "UPDATE $table SET completed = $boolean WHERE id = $id";
if ($conn->query($sql) === TRUE) {
  $message = "The data has been added successfully to the '$table' table";
  $success = true;
} else {
  $message = "Error while inserting data into the '$table' table: " . $conn->error;
  $success = false;
}

if ($success) {
  $response = "<script>alert(\"$message\");window.location.href = 'index.php';</script>";
} else {
  $response = "<script>alert(\"$message\");window.location.href = 'index.php';</script>";
}

echo $response;

$conn->close();
?>
