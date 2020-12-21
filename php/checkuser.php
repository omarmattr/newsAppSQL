<?php
include_once ("connectsql.php");

if ( isset($_POST['Email'], $_POST['password']) ) {
    $result = $con->query('SELECT fname,email, password FROM admin ');
    if ($result->num_rows > 0) {
        $pass=false;
        $user=false;
        $name="";
        while ($row = $result->fetch_assoc()) {
            if ($row['email'] === $_POST['Email']) {
                $user=true;

                if ($row['password'] === $_POST['password']) {
                    $name=$row['fname'];
                    $pass=true;

                }
            }
        }
        if ($user && $pass){

            setcookie("login",$name,time()+3600*24);

            header("Location:home.php");
            echo "<script type='text/javascript'>history.forward(1);</script>";
        }elseif (!$user){
            echo "<script type='text/javascript'>alert('Incorrect Email!');</script>";
        }else{ echo "<script type='text/javascript'>alert('Incorrect password!');</script>";}

    }

}
?>