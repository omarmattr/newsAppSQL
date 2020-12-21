<?php
if(isset($_COOKIE['login'])){
    header("Location:home.php");

}?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
    <script src="../js/js.js">

    </script>
</head>

<body>

<div class="divCenter" ><h1>NewsMy</h1></div>
<div class="card" id="divcard" >


    <div class="divCenter" ><h2>Sign-Up</h2><br></div>
    <form method="post" name="form" onsubmit="return validate_all();">
        <div class="">
            <label for="firstName">first Name</label>
            <input type="text" class="form-control" id="firstName" onkeyup="valid_text('firstName');"  name="firstName" aria-describedby="text">
        </div>  <div class="">
            <label for="secondName">second Name</label>
            <input type="text" class="form-control" id="secondName" onkeyup="valid_text('secondName');"  name="secondName" aria-describedby="text">
        </div>
        <div class="">
            <label for="username">Email</label>
            <input type="email" class="form-control" id="Email" onkeyup="check_v_mail('Email')" name="Email" aria-describedby="text">
        </div>
        <div class="">
            <label for="password">Password</label>
            <input type="password" class="form-control" onkeyup="check_v_pass('password', 'outbutpass');" name="password" id="password"><span id="outbutpass"></span>
        </div>

        <br>
        <div id="insert">

        </div>
        <div class="divCenter">  <button type="submit"  class="btn btn-primary" >Sign-Up</button></div>


    </form>
    <div class="divCenter" > <h6>already have account?</h6></div>
    <a href="siginin.php">  <button type="submit" class="btn btn-secondary">Already have an account? Sign-In</button></a>

</div>

</body></html>
<?php

        include_once ("insertuser.php");
?>