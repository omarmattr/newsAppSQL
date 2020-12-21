<?php
include('connectsql.php');


if($_GET['sure'] == 'true') {

$query = "DELETE FROM news;
";
$query2="ALTER TABLE news AUTO_INCREMENT = 1;";

if( $con->query( $query)){
    // echo "success";
    if( $con->query( $query2)){
        header("Location:home.php");
    }

}else{
    echo $con->error;
}

}



?>
