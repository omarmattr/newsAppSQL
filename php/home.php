
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
    <a class="navbar-brand" href="#">newsMy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <?php
            if(isset($_COOKIE['login'])){
                echo ' <a class="nav-item nav-link" href="addnews.php">add news</a>';
              echo ' <a class="nav-item nav-link" onclick="sure=confirm(\'Are you sure to delete all\');if(sure){window.location.href =\'deleteAll.php?sure=\'+sure;}">delete all</a>';

            }?>
            <?php
            if(!isset($_COOKIE['login'])){
                echo ' <a class="nav-item nav-link" href="siginin.php">sign in</a>';
            }?>


        </div>
    </div>
</nav>
<!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
<!--    <ol class="carousel-indicators">-->
<!--        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
<!--        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
<!--        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
<!--    </ol>-->
<!--    <div class="carousel-inner">-->
<!--        <div class="carousel-item active">-->
<!--            <img class="d-block w-100" src="../images/edit-icon.png" alt="First slide">-->
<!--        </div>-->
<!--        <div class="carousel-item">-->
<!--            <img class="d-block w-100" src="..." alt="Second slide">-->
<!--        </div>-->
<!--        <div class="carousel-item">-->
<!--            <img class="d-block w-100" src="..." alt="Third slide">-->
<!--        </div>-->
<!--    </div>-->
<!--    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
<!--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--        <span class="sr-only">Previous</span>-->
<!--    </a>-->
<!--    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
<!--        <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--        <span class="sr-only">Next</span>-->
<!--    </a>-->
<!--</div>-->




<div id="images_list" class="row" ></div>

</body></html>

<script>
function clickDelete(id){
    sure=confirm('Are you sure to delete all');
    if(sure){window.location.href ='deletenews.php?id='+id+'&sure='+sure;}
}
    $(document).ready(function(){

       load_news();

        function load_news()
        {
            $.ajax({
                url:"veiwnews.php",
                success:function(data)
                {
                    $('#images_list').html(data);
                }
            });
        }


    });
</script>