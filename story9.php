<?php
error_reporting(0);
$item=99;

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
$sqldata="UPDATE view SET c = ".$temp." WHERE reg =99;";
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

    <center>
        <h1>The Camel And The Baby</h1>
            <img src="99.jpg">
          <div style="height: 400px;width: 400px;color: black;">One day, a camel and her baby were chatting. The baby asked, “Mother, why do we have humps?” The mother replied, “Our humps are for storing water so that we can survive in the desert”.
            <br>

“Oh”, said the child, “and why do we have rounded feet mother?” “Because they are meant to help us walk comfortably in the desert. These legs help us move around in the sand.”

“Alright. But why are our eyelashes so long?” “To protect our eyes from the desert dust and sand. They are the protective covers for the eyes”, replied the mother camel.

The baby camel thought for a while and said, “So we have humps to store water for desert journeys, rounded hooves to keep us comfortable when we walk in the desert sand, and long eyelashes to protect us from sand and dust during a desert storm. Then what are we doing in a zoo?”

The mother was dumbfounded.

</div>
<br>
<h4>Moral</h4>
<p>
Your strengths, skills, and knowledge are useless if you are not in the right place.</p>
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