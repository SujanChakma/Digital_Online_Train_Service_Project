<?php
include('dbcon.php');

$trainNO = $_REQUEST["SelectTrainNo"];
$fair = $_REQUEST["price"];
$trainName = $_REQUEST["TrainName"];
$startstation = $_REQUEST["StartStation"];
$arrivalstation = $_REQUEST["ArrivalStation"];
$paymentcode = $_REQUEST["paymentcode"];


echo '

<html>

<head>
<link rel="stylesheet" type="text/css" href="ticket.css" />
</head>

<body>

<div class="main">


<div class="middle">

<div class="first"> 
<h5>BANGLADESH RAILWAY INTERCITY SERVICE</h5>
<p class="p">Ticket No.';   echo '</p>';

echo '
</div> 

<div class="second">

<div class="leftsecond"><p class="p">Name of Train:'; echo $trainName; echo '</p></div>
<div class="rightsecond"><p class="p">Train No.'; echo $trainNO; echo '</p>';
echo '</div>

</div> <br>

<div class="third"><p class="p">From:'; echo $startstation;  echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To:'; echo $arrivalstation; echo '
</p> </div>


<div class="fourth"><p class="p">Fair:';echo $fair;echo ' taka</p></div>


</div>




</div>

<!--print div start from here-->
<div class="print">
<form>
<button type="submit" class="buttonprint" onClick="window.print()" formaction="printmessage.php">Print the ticket</button>
</form>
</div>
<!--print div end here-->

</body>

</html>


';

?>