<?php
include('dbcon.php');

echo '

<html>
<head>
<link rel="stylesheet" type="text/css" href="ticketform.css"/>
<script>
function validateForm() {
    var x = document.forms["sujanform"]["price"].value;
    
    if (x == "") {
        alert("Fair field must be filled out");
        return false;
    }
    
}
</script>
</head>

<body>
<div class="fix main">

<div class="fix head">
<h1>Bangladesh Railway</h1>
</div>

<div class="fix form1">
<form name="sujanform" onsubmit = "return validateForm()" method="post">

<div class="fix leftside">

<div class="fix leftleftside">
<big><b>Train No  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :</b></big>
</div>
<div class="fix leftrightside">
<select name="SelectTrainNo">
<option>Select Train No</potion>
<option>701</option>
<option>702</option>
<option>703</option>
<option>704</option>
<option>705</option>
<option>706</option>
<option>707</option>
<option>708</option>
<option>709</option>
<option>710</option>
<option>711</option>
<option>712</option>
<option>713</option>
<option>714</option>
<option>715</option>
<option>716</option>
<option>717</option>

</select>
</div>
</div>
<!--end leftSide div-->

<div class="fix rightside">

<div class="fix leftrightside">
<big><b>Select Started Station   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :</b></big>
</div>

<div class="fix rightrightside">
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
<!--end rightside-->

<div class="fix middleside">

<div class="fix leftmiddleside">
<big><b>Train Name &nbsp;&nbsp;&nbsp; :</b></big>
</div>

<div class="fix rightmiddleside">
<select name="TrainName">
<option>Select Train Name</option>
<option>Subarna Express Train</option>
<option>Mohanagar Godli</option>
<option>Mohanagar Provati</option>
<option>Ekota Express </option>
<option>Tista Express</option>
<option>Prabat Express</option>
<option>Upukol Express</option>
<option>Karutoa Express</option>
<option>Chittra Express</option>
<option>Sundorbon Express</option>
</select>
</div>

</div>
<!--end middleside div-->

<div class="fix last">

<div class="fix leftlast"><big><b>Select Arrival Station  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :</b></big></div>
<div class="fix rightlast">
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

</div>

<!--end last div-->

<div class="fix inputbox1">

<div class="leftinputboxtext"><big><b>Payment Code:</b></big></div>
<div class="rightinputbox1"><input type="text" name="paymentcode" class="payment"/></div>


</div>

<div class="fix inbox2">
<div class="fix leftinbox2"><big><b>Fair:&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    :</b></big></div>
<div class="fix rightinbox2"><input type="text" name="price" class="price"/></div>
</div>

<div class="fix inputbox3">
<button type="submit" formaction="ticket.php" class="button1" />submit</button>
<button type="submit" formaction="checkdata.php" class="button1" />Go To Previous Page</button>

</div>

</form>

</div>


</div>
</body>
</html>


';

?>