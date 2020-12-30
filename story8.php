<?php
error_reporting(0);
$item=88;

$con=mysqli_connect("localhost","root","","story");
if(!$con)
  die("Server could not connected");
$sql = "SELECT * FROM view";
$res= mysqli_query($con,$sql);
$mes= mysqli_query($con,$sql);
$count=0;
while($row = mysqli_fetch_array($res)){
    $count=$count+1;
}

while($count>0){
  $row1 = mysqli_fetch_array($mes);
if($row1['reg']== $item)
{
    $temp=$row1['c']+1;
$sqldata="UPDATE view SET c = ".$temp." WHERE reg =88;";
$rs=mysqli_query($con,$sqldata);

$rs=mysqli_query($con,$sqldata);
echo "<center><p>Total Visit of this story : ".$temp."</p></center>";
if($rs!=0)

break;
}
  $count=$count-1; if($count==0) break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link href="style.css" rel="stylesheet">




    

</head>
<body>

    <center><h1> The Dog At The Well</h1>
            <img src="88.jpg">
          <div style="height: 300px;width: 700px;color: black;">A dog and her pups lived on a farm, where there was a well. The mother dog told the pups, do not go near the well or play around it. One of the pups wondered why they shouldn’t go to the well and decided to explore it. He went to the well. Climbed up the wall and peeked inside.

In there, he saw his reflection and thought it was another dog. The pup saw that the other dog in the well (his reflection) was doing whatever he was doing, and got angry for imitating him. He decided to fight with the dog and jumped into the well, only to find no dog there. He barked and barked and swam until the farmer came and rescued him. The pup had learned his lesson.
</div>

<h4 style="margin-top: 20px;">Moral</h4>
<p>
Always listen to what the elders say. Question them, but do not defy them.

</p>
    </center>
    <br><br>
  <footer class="footer-section" style="float: bottom;">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                           <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Kalyanpur, Kanpur (U.P)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+91 9305298676</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>santoshpathak.sp90@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>
</html>