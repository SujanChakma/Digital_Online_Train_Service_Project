<?php
include('dbcon.php');

echo'

<html>
<head>
<link rel="stylesheet" type="text/css" href="search.css" />
</head>

<body>

<!--Start main div-->

<div class="fix main">

<!--Start head div-->
<div class="fix head">

<h1>Welcome To Digital Search Form</h1>

</div>

<!--end head div-->

<!--Start mainbox div-->
<div class="fix mainbox">

<form>

<!--Start firstbox div-->
<div class="fix firstbox">

<!--Start leftfirstbox div-->
<div fix class="leftfirstbox"><big><b>Select Started Station:</b></big></div>
<!--end leftfirstbox div-->

<!--Start rightfirstbox div-->
<div class="rightfirstbox">
<select name="StartStation">
              <option>Select a source station</option>
              <option>Chittagong</option>
              <option>Dhaka</option>
              <option>Dinajpur</option>
              <option>Dewangong</option>
              <option>Sylhet</option>
              <option>Noakhali</option>
              <option>Santahar</option>
              <option>Borimari</option>
            </select>
</div>

</div>
<!--end firstbox div-->

<!--Start seconbox div-->
<div class="fix seconbox">

<!--Start leftseconbox div-->
<div class="leftsecondox"><big><b>Select Arrival Station:</b></big></div>
<!--End leftsecondox div-->

 
<!--Start rightsecondox div-->
<div class="rightsecondox">
<select name="ArrivalStation">
              <option>Select a destination station</option>
               <option>Chittagong</option>
              <option>Dhaka</option>
              <option>Dinajpur</option>
              <option>Dewangong</option>
              <option>Sylhet</option>
              <option>Noakhali</option>
              <option>Santahar</option>
              <option>Borimari</option>
              <option>Khulna</option>
            </select>
 </div>
 <!--end rightsecondox div-->

</div>
<!--end secondbox div-->

<br><br>
<button type="submit" formaction="checkdata.php" class="box1">Search</button>

<button type="submit" formaction="index1.php" class="box1">Go to Previous Page</button>

</form>
<!--end mainbox div-->

</div> <!--end main div-->

</body>
</html>



';

?>