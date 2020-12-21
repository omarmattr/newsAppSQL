<?php
if(isset($_COOKIE['login'])){
    header("Location:home.php");

}
?>
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


    <div class="divCenter" ><h2>Sign-In</h2><br></div>
    <form method="post" onsubmit="return checksignin();">
        <div class="">
            <label for="username">Email</label>
            <input type="email" class="form-control" id="Email"  name="Email" aria-describedby="text" onkeyup="check_v_mail('Email')">
        </div>
        <div class="">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" onkeyup="valid_text('password')">
        </div>
        <br>
        <div class="divCenter">  <button type="submit" class="btn btn-primary" >Sign-In</button></div>
    </form>
    <div class="divCenter" > <h6>New account?</h6></div>
    <a href="SignUp.php">  <button type="button" class="btn btn-secondary">Create account</button></a>

</div>

</body></html>
<?php
include_once ("checkuser.php")
?>