<?php

//insert.php

    include('connectsql.php');

    $id = $_GET['id'];
$image_file = addslashes(file_get_contents($_FILES["update_image"]["tmp_name"]));

//$image_file = addslashes($_POST['image']);
   $details = $_POST['details'];
    $title = $_POST['title'];

    $query = "UPDATE news
SET title = '$title', details= '$details',img='$image_file'
WHERE id='$id'";

  if( $con->query( $query)){
     // echo "success";
     header("Location:viewdetails.php?id='$id'");
    }else{
      echo $con->error;
  }
//$statement = $con->query($query);
//$statement->execute();




?>