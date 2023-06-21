<?php
require_once "db.php";

$improved = $_POST["improved"];
$improvedTime = $_POST["improvedTime"];

if (empty($improved) || empty($improvedTime)) {
  echo "Error: Please fill in all fields.";
} else {
$sql = "INSERT INTO improved (improved, improvedTime) VALUES ('$improved', '$improvedTime')";
if ($conn->query($sql) === TRUE) {
  echo "The data has been added successfully to the 'improved' table";
} else {
  echo "Error while inserting data into the 'improved' table: " . $conn->error;
 }
}
$conn->close();
?>
