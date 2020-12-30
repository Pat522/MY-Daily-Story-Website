<?php
error_reporting(0);
$item=44;

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
$sqldata="UPDATE view SET c = ".$temp." WHERE reg =44;";
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

    <center><h1>Elephant And Friends</h1>
            <img src="44.jpg">
          <div style="height: 400px;width: 700px;color: black;">A lone elephant wandered the forest looking for friends. She came across a monkey and asked, “Will you be my friend, monkey?” “You are too big and cannot swing on trees as I do. So I cannot be your friend”, said the monkey.

The elephant them came across a rabbit and asked him if she could be his friend. “You are too big to fit inside my burrow. You cannot be my friend”, replied the rabbit.

Then the elephant met a frog and asked if she could be her friend. The frog said “You are too big and heavy. You cannot jump like me. I am sorry, but you cannot be my friend”.

The elephant asked a fox, and he got the same reply, that he was too big. The next day, all the animals in the forest were running in fear. The elephant stopped a bear and asked what was happening and was told that a tiger has been attacking all the animals.

The elephant wanted to save the other weak animals and went to the tiger and said “Please sir, leave my friends alone. Do not eat them”. The tiger didn’t listen and asked the elephant to mind her own business. Seeing no other way to solve the problem, the elephant kicked the tiger and scared it away.

She then went back to the others and told them what happened. On hearing how the elephant saved their lives, the animals agreed in unison, “You are just the right size to be our friend”.
</div>

<h4 style="margin-top: 20px;">Moral</h4>
<p>
Friends come in all shapes and sizes!

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