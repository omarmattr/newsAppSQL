<?php

//insert.php

                include('connectsql.php');


    $image_file=   addslashes(file_get_contents($_FILES["insert_image"]["tmp_name"]));
$Writer=$_COOKIE["login"];
$time=date("Y-m-d h:i");
               // echo $image_file;
                $details = $_POST['details'];
                $title = $_POST['title'];
                $query = "INSERT INTO news(title,details,img,Writer,time) VALUES ('$title','$details','$image_file','$Writer','$time');";
                if ($con->query( $query)) {
                      header("Location:home.php");
                } else {
                     echo   $con->error;
                }
//        $statement = $con->prepare($query);
//        $statement->execute();



?>
