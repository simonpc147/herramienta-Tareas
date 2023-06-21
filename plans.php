<?php
require_once "db.php";

$actName = $_POST["actName"];
$actTimeIn = $_POST["actTimeIn"];
$actTimeOut = $_POST["actTimeOut"];  

if (empty($actName) || empty($actTimeIn) || empty($actTimeOut)) {
  echo "Error: Please fill in all fields.";
} else {
  $sql = "INSERT INTO tasks (actName, actTimeIn, actTimeOut) VALUES ('$actName', '$actTimeIn', '$actTimeOut')";
  if ($conn->query($sql) === TRUE) {
    echo "Data has been added successfully to the 'tasks' table.";
  } else {
    echo "Error while inserting data into the 'tasks' table: " . $conn->error;
  }
}

$conn->close();
?>
