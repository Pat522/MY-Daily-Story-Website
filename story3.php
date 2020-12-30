<?php
error_reporting(0);
$item=33;

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
$sqldata="UPDATE view SET c = ".$temp." WHERE reg =33;";
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

    <center><h1>True Friends Love You Anyway</h1>
            <img src="33.jpg">
          <div style="height: 400px;width: 700px;color: black;">Lord Krishna and Sudama were childhood friends. While Krishna thrived and prospered, Sudama didn’t. He lead the life of a poor Brahmin man, living in a small hut with his wife and kids. Most days, the kids wouldn’t even get enough to eat from what Sudama got as alms. One day, his wife suggested that he go and ask his friend Krishna for help.

Sudama was reluctant to seek favors, but he also didn’t want his kids to suffer. So his wife borrows some rice from the neighbors to make some rice snacks that Krishna liked, and gave it to Sudama to take it to his friend. Sudama took it and set out to Dwaraka. He was amazed at the gold that was used to build the city. He reached the palace gates and was obstructed by the guards, who judged him by his torn dhoti and poor appearance.

Sudama requested the guards to at least inform Krishna that his friend Sudama has come to meet him. The guard, although reluctant, goes and informs the lord. On hearing that Sudama was here, Krishna stops doing whatever he was doing and runs barefoot to meet his childhood friend.

Krishna hugs Sudama welcomes him to his abode and treats him with utmost love and respect. Sudama, ashamed of the poor man’s rice snacks he got for Krishna, tries to hide it. But the all-knowing Krishna asks Sudama for his gift and eats his favorite rice snacks that his friend brought for him.

Krishna and his friend spend time laughing and talking about their childhood but Sudama, overwhelmed by the kindness and compassion showed by his friend, is unable to ask Krishna for help. When he returns home, Sudama finds that his hut has been replaced by a huge mansion and his wife and kids are dressed in fine clothes.

Sudama realized how lucky he was to have a true friend like Krishna. He didn’t even ask, but Krishna knew what Sudama wanted and gave it to him.
</div>

<h4 style="margin-top: 80px;">Moral</h4>
<p>
True friends do not distinguish between rich and poor. They are always there for you when you need them.</p>
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