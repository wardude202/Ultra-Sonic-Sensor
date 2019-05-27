<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="styles/tables.css" >        
    <title>Parked Details</title>

</head>
<body>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <?php
      echo "<h1> Parking Spot Status </h1>";
		//table print
		include_once 'Temperature.php';
		echo "<h3> Parking Status </h3>";
		echo "<table border=\"2\">\n";
		echo "<tr>\n "
	 	."<th scope=\"col\">Spot Status</th>\n "
	 	."<th scope=\"col\">Last Park Duration</th>\n "
	 	."</tr>\n ";
	 	echo "<tr>\n";
	 	echo "<td id=\"SpotStatus\"></td>\n" ;  
      echo "<td id=\"LastDuration\"></td>\n" ;  
		echo "</tr>\n";       
		echo "</table>";
		echo "<br />";
		echo "<h3> Fee Of Previous Consumers </h3>";
   	echo "<div id=\"Price\"></div>";  
		echo "<a id=\"back\" href=\"index.html\">Back To Index</a>";
		
    ?>
   

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
