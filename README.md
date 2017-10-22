# FIS
Gets latest information on inbound and outbound flights for [(VRMM) Velana International Airport - Maldives](https://en.wikipedia.org/wiki/Velana_International_Airport)

# Usage
```php
<?php
require_once('./Fis.php');

$fis = new Jawish\Fis();

// arrivals
$arrivals = $fis->getFlights('arrivals');

// depatures
$depatures = $fis->getFlights('depatures');

var_dump($arrivals, $depatures);
```

# Details
`getFlights()` returns an an array of Flights for the date (date => [Flights...]). The date is a UNIX timestamp.

Each Flight contains the following details.

| field | description | example |
| --- | --- | ---- |
| `airlineName` | Human readable name of the airline | Emirates |
| `airlineId` | Unique ID for the airline | EK |
| `flightId` | Flight code | EK 658 |
| `route` | Array of route for the flight | Dubai |
| `scheduledAt` | Scheduled time in 24 hours format | 09:35 |
| `estimatedAt` | Estimated time | 09:50 |
| `status` | Status of the flight | LANDED |
