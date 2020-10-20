<?php
require_once 'Bicycle.php';
require_once 'PedestrianWay.php';
require_once 'Car.php';
require_once 'ResidentialWay.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'Skateboard.php';
require_once 'HighWay.php';




echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . "\n";
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . "\n";
echo $bike->brake();
echo '<br>';


echo $renault->start();
echo "\n";
echo $renault->forward();
echo '<br> Vitesse de la voiture : ' . $renault->getCurrentSpeed() . ' km/h' . "\n";
echo $renault->brake();
echo '<br> Vitesse de la voiture : ' . $renault->getCurrentSpeed() . ' km/h' . "\n";
echo $renault->brake();
echo "\n";


$bike = new Bicycle('blue', 1);
$fiat = new Car("red", 7, "essence"); 

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
echo "\n";
echo "\n";

$fiat = new Car('blue', 6, 'electric');
echo $fiat->forward();

var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('blue', 2, 3, 'fuel');
echo "\n";
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . "\n";
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . "\n";
echo $truck->brake();
echo "\n";


echo $truck->filling();
echo "\n";

$theRoad = new MotorWay();
$theStreet = new ResidentialWay();
$thePavement = new PedestrianWay();

$theRoad->addVehicle($fiat);
var_dump($theRoad);

$theStreet->addVehicle($truck);
var_dump($theStreet);

$thePavement->addVehicle($skate);
var_dump($thePavement);


