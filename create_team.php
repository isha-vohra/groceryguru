<?php
include "config.php";

$name = $_POST["name"];
$users = $_SESSION["userid"];

$sql = "INSERT INTO groups SET
  name = '$name',
  users = '$users'
";

$sql2 = "UPDATE users
SET groupName = '$name'
WHERE id = $users";

$result1 = $conn->query($sql);
$result2 = $conn->query($sql2);
if ($result1 == TRUE && $result2 == TRUE) {
  header("location:http://localhost/grocery_guru/progress.php");
}
?>
