<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Calendar</title>
		<link rel="stylesheet" href="assignment2.css">
	</head>
	
	<body>
	<div id = "content">
		<?php

		$time = time();

		$numDay = date('d', $time);
		$numMonth = date('m', $time);
		$strMonth = date('F', $time);
		$numYear = date('Y', $time);
		$firstDay = mktime(0,0,0,$numMonth,1,$numYear);
		$daysInMonth = cal_days_in_month(0, $numMonth, $numYear);
		$dayOfWeek = date('w', $firstDay);
		
		// adding the current month
			echo "<div class = 'month'>";
			echo $strMonth, " "; // Current month
			echo $numYear; // Current Year
			echo "</div>";
		?>
	
		<div class="row">
			<div class="column"><b>Sunday</b></div>
			<div class="column"><b>Monday</b></div>
			<div class="column"><b>Tuesday</b></div>
			<div class="column"><b>Wednesday</b></div>
			<div class="column"><b>Thursday</b></div>
			<div class="column"><b>Friday</b></div>
			<div class="column"><b>Saturday</b></div>
		</div>

		<?php 
		
			//Calendar
		
			$counter = 1; // actual date
			$flag = 0; // check the first day of month
			for($i=1;$i<= 5;$i++) {  // print rows
				echo "<div class = 'row'>";
					for($j=0;$j< $daysInMonth;$j++) { // print cols and add numbers
						echo "<div class = 'column'>";
						if ($flag >= $dayOfWeek && $counter <= $daysInMonth){ // starting and ending on the correct day
							echo $counter;
							$day = mktime(0,0,0,$numMonth,$counter,$numYear);
							//$timestamp = date('w', $day);							
							$counter++;
						} else {
							$flag++;
						}
						echo "</div>";
						if($j == 6) { // creating next line after the 6th day
							break;
						}
					}
				echo "</div>";
			}
		?>
	
		
	</body>
</html>