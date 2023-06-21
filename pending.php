<?php
require_once "db.php";

$todoName = $_POST["todoName"];

if (empty($todoName)) {
  echo "Error: Please fill in all fields.";
} else {
$sql = "INSERT INTO todo (todo) VALUES ('$todoName')";
if ($conn->query($sql) === TRUE) {
   echo "The data has been added successfully to the 'todo' table";
 } else {
    echo "Error while inserting data into the 'todo' table: " . $conn->error;
 }
}
$conn->close();
?>
