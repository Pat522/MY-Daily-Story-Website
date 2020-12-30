<?php
error_reporting(0);
$item=77;

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
$sqldata="UPDATE view SET c = ".$temp." WHERE reg =77;";
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

    <center><h1> The Other Side Of The Wall</h1>
            <img src="77.jpg">
          <div style="height: 300px;width: 700px;color: black;">A young woman inherited a beautiful garden from her grandmother. She loved gardening too and was very proud of her garden. One day, she saw a very beautiful plant in a catalog and wanted that for her garden. She ordered it and planted it at the base of the stonewall in her backyard. She took great care of the plant, which grew quickly and had beautiful green leaves on it.

Months passed, but not a single flower bloomed on the tree. Vexed, she almost wanted to cut the tree down. At such a time, her invalid called and said, “Thank you so much for the beautiful flowers. You have no idea how much I enjoy looking at the blooms of the vine you have planted”.

Hearing this, the young girl rushes to the neighbor’s side of the wall and sees the most beautiful flower in bloom. All the care she took had paid off. Only the vine crept through the crevices because of which it did not flower on her side of the wall but did generously on the other side.
</div>

<h4 style="margin-top: 20px;">Moral</h4>
<p>
Just because you cannot see the good results of your efforts does not mean that it bore no fruit.

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