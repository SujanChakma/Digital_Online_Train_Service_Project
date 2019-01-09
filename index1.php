<?php
include('dbcon.php');

echo '
<html>
<head><title></title>
<link rel="stylesheet" type="text/css" href="project.css" />
</head>
<body>
      <div class="main">
      <div class="head">
	<marquee SCROLLDELAY=50; BEHAVIOR=ALTERNATE><h1>Developed By Sujan Chakma</h1></marquee>
	</div>
	<div class="image">
	<img src="images/train.jpg">
	</div>
	
    <form action="Show.php" method="post" name="user">
    <button class="box1" >All train schedule</button>
    <button type="submit" formaction="search.php" class="box2">Search specific trains for specific stations</button>

    </form>
    </div>
</body>	
</html>';
$conn->close();
?>