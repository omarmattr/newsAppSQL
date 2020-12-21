<?php

//fetch_images.php

include('connectsql.php');

$query = "SELECT * FROM news ORDER BY id DESC";

$statement = $con->query($query);

$output = "";//'<div class="row" style="margin-left: 5%; width: 95%;background-color: #eee">';
$count=1;
if($statement->num_rows > 0)
{
    $result = $statement;//->fetchAll();

    foreach($result as $row){

        $output .= '

  <div  class="col-md-2 col-sm-6 cardView"  >
  <a href="viewdetails.php?id='.$row['id'].'"   >
   <img name="img"   src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'"  width="100%" height="250px"  style="min-height: 250px ;overflow: hidden;object-fit: cover;"/>
   <h6 name="title"   >'.$row['title']. '</h6>
   
    <h6 class="hiddenDetails" >' .$row['details'].'</h6>
    </a>
    ';
        if(isset($_COOKIE['login'])){
            $output .=' <button type="button" onclick="clickDelete('.$row['id'].');" class="btn btn-danger btnCart btnd" style=""><img src="../images/icon-trash.png" width="15px"  ></button>
<a href="update.php?id='.$row['id'].'&update=1"><button type="button" class="btn btn-warning btnCart btne" style=""><img src="../images/icon-edit.png" width="15px" ></button></a>';
        }
        $output .='</div>
 
  ';

    }
}else{
    $output="<h1>no data yet</h1>";
}

$output .= '';//'</div>';
echo $output;



?>