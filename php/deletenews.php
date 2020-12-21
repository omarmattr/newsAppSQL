<?php
include_once ("connectsql.php");
$id=$_GET['id'];
$query = "delete  FROM news where id=$id";
if(mysqli_query($con,$query)){
    header("Location:home.php");
}
  //  $result = $con->query($query);
?>