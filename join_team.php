<?php
include "config.php";
$name = $_POST["join"];
$user = $_SESSION["userid"];

$sql = "SELECT * FROM groups";
$found = False;
$curUsers = "";
$groupID = -1;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    //echo $row["id"];
    if ($found == FALSE) {
      if ($row['name'] == $name ) {
      $found = True;
      $curUsers = $row["users"];
      $groupID = $row["id"];
      }
    }
  }
} else {
  echo "RIP";
}

if ($found == False) {
  header("location:http://localhost/grocery_guru/index.php");
}

$newUsers = $curUsers . " " . $user;

$sql2 = "UPDATE groups
SET users = '$newUsers'
WHERE id = $groupID";

$sql3 = "UPDATE users
SET groupName = '$name'
WHERE id = $user";
echo $sql2 . "<br>";
echo $sql3;

$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);



if ($result2 == True and $result3 == True) {
  header("location:http://localhost/grocery_guru/progress.php");
} else {
  echo "fail";
}
?>
