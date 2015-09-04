<?php

/**
 * Ibrahim Nasir International Airport Flight information demo
 * http://www.jawish.org/
*/

require_once('../src/Fis.php');

// create new FlightInfo object
$f = new Jawish\Fis();

// get arrivals
$flights = $f->getFlights('arrivals');

echo '<font face="arial" size="2">';
echo '<h3>Arrivals</h3>';

// output updated time of listing
echo '<i>Updated time: ' . date('r', $f->updatedAt) . "</i><br />\r\n";

foreach ($flights as $date => $flights)
{
	echo "<hr />\r\n";
	echo date('d M Y', $date). "<br />\r\n";
	
	foreach ($flights as $flight) {
		echo 'Airline Name: ' . $flight['airlineName'] . "<br />\r\n";
		echo 'Airline ID: ' . $flight['airlineId'] . "<br />\r\n";
		echo 'Flight ID: ' . $flight['flightId'] . "<br />\r\n";
		echo 'Route: ' . join( ' > ', $flight['route']) . "<br />\r\n";
		echo 'Scheduled Time: ' . $flight['scheduledAt'] . "<br />\r\n";
		echo 'Estimated Time: ' . $flight['estimatedAt'] . "<br />\r\n";
		echo 'Status: ' . $flight['status'] . "<hr />\r\n";
	}
}

echo '</font>';
?>