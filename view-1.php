<?php
include 'db.php';

$sql = "SELECT id, actName, actTimeIn, actTimeOut FROM tasks ORDER BY id ASC";
$result = mysqli_query($conn, $sql);

echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
  $id = $row["id"];
  $actName = $row["actName"];
  $actTimeIn = $row["actTimeIn"];
  $actTimeOut  = $row["actTimeOut"];
  $completado = false;

  echo "<div data-content2 id='button' class='contenedor seccion-c' >";
  echo "<div class='container_list'>";
  echo "<div class='container_list-1'>";
  echo "<input type='hidden' name='id' value='".$id."'>";
  echo "<input type='hidden' name='table' value='tasks'>";
  echo "<button  style='margin-left: 15px;'>";
  echo "<a class='activation' data-target2='#button' style='cursor:pointer;'>";
  echo "<i class='".($completado ? "fas fa-check co" : "far fa-circle co")."' data='realizado'></i>";
  echo "</a>";
  echo "</button>";
  echo "<p class='actividad'>".$actName. " de " .$actTimeIn. " hasta " .$actTimeOut."</p>";
  echo "<div class='container_list-btn'>";
  echo "<form method='post' action='delete.php'>";
  echo "<input type='hidden' name='id' value='".$id."'>";
  echo "<input type='hidden' name='table' value='tasks'>";
  echo "<button type='submit' class='btn-eliminar'>";
  echo "<i class='fas fa-trash-alt'></i>";
  echo "</button>";
  echo "</form>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
}
echo "</ul>";

mysqli_close($conn);
?>
