<?php

include_once ("connectsql.php");
if ( isset($_POST['Email'], $_POST['password'], $_POST['firstName'], $_POST['secondName']) ) {
$Email= $_POST['Email'] ;
    $password=strval($_POST['password']) ;
    $firstName=strval($_POST['firstName']) ;
    $secondName=strval($_POST['secondName']) ;

    if ( $con->query ("INSERT INTO admin (fname, sname, email,password  ) values 
('$firstName','$secondName','$Email','$password')")){
setcookie("login",$_POST['firstName'],time()+3600*24);
        header("Location:home.php");
        }
}

?>