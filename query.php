<?php
    if(isset($_GET['soil']) && isset($_GET['rainfall']) && isset($_GET['temperature'])) {
  		$soil = $_GET['soil'];
  		$rainfall = $_GET['rainfall'];
  		$temperature = $_GET['temperature'];

  		$file = fopen('demo.csv', 'w');
  		fputcsv($file, array($soil, $temperature, $rainfall));
  		fclose($file);

  		// executing R file for processing the request

  		exec("Rscript code.r");

  		// returning the json object made from the values returned from R to the application
      $file = fopen("test.txt", "r");
      	$value = trim(fgets($file));
      	fclose($file);

      if($value=="1")
      {
      	$crop = "Chillies";

      }
      else if($value=="2")
      {
      	$crop = "Sweet potato";

      }
      else if($value=="3")
      {
      	$crop = "Green gram";

      }

      echo '<p>Favourable Crop is: <b>'.$crop.'</b>.</p>';

  	}
    ?>
