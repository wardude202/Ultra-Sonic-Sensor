<?php
    $json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Melbourne,au&units=metric&APPID=fda2109659faa71995bdd900e8a6674a");
    $data = json_decode($json);
	 $currentTemp = round($data->main->temp);
 
    echo "<h3> Current Temp In Melbourne</h3>";
    echo "<div class='progress w3-grey'>";
    
    echo "    <div class='progress-bar bg-info w3-green' style='width: " . $currentTemp * 2 ."%' role='progressbar' aria-valuenow='0' aria-valuemin='-5' aria-valuemax='50'>$currentTemp °C</div>";
    echo "</div>";
    
    if ($currentTemp > 25)
    {
		echo "<h4> Its Probably Going To Be Busy Today!</h4>";    
    }
    else
    {
		echo "<h4> It Shouldn't Be Busy Today! </h4>";    
    }


    
?>