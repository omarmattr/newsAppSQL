<?php
if(!isset($_COOKIE['login'])){
    header("Location:siginin.php");
}

$id=$_GET['id'];
include_once ("connectsql.php");
$query = "SELECT * FROM news where id=$id";

$result = $con->query($query);
$row=mysqli_fetch_array($result);
$title= $row['title'];
 //$image=$row['img'] ;
$details= $row['details'];
?>
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
    <script src="../js/js.js">

    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php">newsMy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="addnews.php">add news</a>
            <!--            <a class="nav-item nav-link" href="#">Pricing</a>-->
            <!--            <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
        </div>
    </div>
</nav>
<form method="post" id="update_news" action="updatenews.php?id=<?php echo $_GET['id']?>" onsubmit="return check_input();" enctype="multipart/form-data" >
    <div class="divCenter" style="width: 50%;margin: auto;">
<h3>update_news</h3>
        <div class="">
            <label for="title">news title</label>
            <input type="text" class="form-control" id="title"  name="title" onkeyup="valid_text('title');" aria-describedby="text">
        </div>
        <div class="">
            <label for="details">news details</label><br>
            <textarea name="details" id="details" rows="5" cols="100" onkeyup="valid_text('details');" style="max-width: 100%;border-radius: 5px;border-color: #ced4da;padding: 0.375rem 0.75rem;"></textarea>
<!--            <input type="" class="form-control" id="details"  name="details" aria-describedby="text">-->
        </div>
<br>
    <div class="input-group mb-3">

        <div class="custom-file">
<!--            <input type="file" class="custom-file-input" name="update_image" id="update_image"  accept=".jpg, .png, .gif">-->
<!--            <label class="custom-file-label" for="image">Choose file</label>-->
            <input type="file" class="custom-file-input" name="update_image" id="update_image" aria-describedby="inputGroupFileAddon01" accept=".jpg, .png, .gif">
            <label class="custom-file-label" for="image">Choose file</label>
        </div>
    </div>
    <br />
     <input type="submit" name="update" id="update" value="UpDate" class="btn btn-info" />
    </div>

</form>

<script language="JavaScript">
   document.getElementById("title").value='<?php echo $title;?>';
    document.getElementById("details").value='<?php echo $details;?>';


</script>
</body></html>


