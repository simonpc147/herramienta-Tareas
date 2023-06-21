<?php
include 'db.php';

$id = $_POST['id'];
$table = $_POST['table'];

$sql = "DELETE FROM $table WHERE id = $id";
if ($conn->query($sql) === TRUE) {
  $message = "The row has been deleted successfully";
} else {
  $message = "Error deleting the row: " . $conn->error;
}

$conn->close();

echo "<script>alert('$message'); window.location = 'index.php';</script>";
?>
