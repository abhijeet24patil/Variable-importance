$address = new $Address();
$address->setMby(2);
$address->setMon('01-01-2015 6:00');
$address->setAddress('Sambra Belgavi');
$address->setCity('Belagavi');
$address->setState('Karnataka');
$address->setCountry('India');
$address->setPincode(590001);
$address->setCby(1);
$address->setCon('01-01-2015 6:00');


$airport = new Airport();
$airport->setCby(1);
$airport->setCon('01-01-2015 6:00');
$airport->setMby(2);
$airport->setMon('01-01-2015 6:00');
$airport->setAirportCode(123);
$airport->setAirportName('RcB');
$airport->setTerminal(1);
$airport->setAddress($address);



$flight = new Flight();
$flight->setFlightNo(123);
$flight->setScheduledArrivalTime('01-01-2015 6:00');
$flight->setScheduledDepartureTime('01-01-2015 6:15');
$flight->setFrom('Belagavi');
$flight->setTo('Pune');
$flight->setvia('Sankeshwar');
$flight->setEcapacity(4);
$flight->setBcapacity(4);
$flight->setCby(1);
$flight->setCon('01-01-2015 6:00');
$flight->setMby(2);
$flight->setMon('01-01-2015 6:00');
$flight->setArrivalTime('01-01-2015 6:00');
$flight->setDepartureTime('01-01-2015 6:00');
$flight->setWorkDay('Monday');
$flight->setAirport($airport);



/*$season = new $Season();
$season->setCby(1);
$season->setCon('01-01-2015 6:00');
$season->setMby(2);
$season->setMon('01-01-2015 6:00');
$season->setName('');
$season->setStartDate('');
$season->setEndDate('');
$season->setFareId('');*/


$fare = new $Fare();
$fare->setCby(1);
$fare->setCon('01-01-2015 6:00');
$fare->setMby(2);
$fare->setMon('01-01-2015 6:00');
$fare->setEfare(1290.50);
$fare->setBfare(1200.50);
$fare->setFlightNo(123);

$flight->save();

var_dump($flight->toArray());