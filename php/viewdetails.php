
<!doctype html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body style="background-color: #eee">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php">newsMy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
          <?php
          if(isset($_COOKIE['login'])){
              echo ' <a class="nav-item nav-link" href="addnews.php">add news</a>';
          }?>
            <?php
            if(!isset($_COOKIE['login'])){
                echo ' <a class="nav-item nav-link" href="siginin.php">sign in</a>';
            }?>
            <!--            <a class="nav-item nav-link" href="#">Pricing</a>-->
            <!--            <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
        </div>
    </div>
</nav>

<div id="view_details" style=" ">
    <?php

    $id=$_GET['id'];
    include_once ("connectsql.php");
    $query = "SELECT * FROM news where id=$id";

    $result = $con->query($query);
    $row=mysqli_fetch_array($result);
    echo $row['title'];
    echo "<br> Posted by : ".$row["Writer"];
    echo ".   at<em> ".$row['time']."</em>";
    echo '<br><br> <img name="img"   src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'"    style="max-width: 80%;overflow: hidden;object-fit:contain; max-height: 500px;max-width: 70%;" /><br><br><br>';
   echo $row['details'];


    ?>
</div>

</body></html>
