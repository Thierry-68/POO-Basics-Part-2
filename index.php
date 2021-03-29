<?php
// index.php
require_once('Bicycle.php');
require_once('Car.php');
require_once('Truck.php');

$listColors=["red","green","blue","black"];

// Calcul d'un couleur au hasard
function randColor($color) : string
{
    return $color[rand(0,1000)%4];
};

$myFirstBicycle = new Bicycle(randColor($listColors),1);
echo "The <span>first bicyle<span> ".$myFirstBicycle->getColor()." ".$myFirstBicycle->forward()."</br>";

$mySecondBicycle = new Bicycle(randColor($listColors),2);
echo "The second bicyle ".$mySecondBicycle->getColor()." ".$mySecondBicycle->forward()."</br>";;

$myThreeBicycle = new Bicycle(randColor($listColors),1);
echo "The three bicyle ".$myThreeBicycle->getColor()." ".$myThreeBicycle->forward()."</br>";;

echo "The first bicyle ".$myFirstBicycle->getColor()." ".$myFirstBicycle->brake()."</br>";
echo " The second bicyle ".$mySecondBicycle->getColor()." ".$mySecondBicycle->brake()."</br>";;

echo "<hr>";

$myFirstCar = new car(randColor($listColors),2,"essence");
$myFirstCar->setName("first");
echo $myFirstCar->getName()." : ".$myFirstCar->forward()."</br>";

$mySecondCar = new car(randColor($listColors),2,"electric");
$mySecondCar->setName("second");
echo $mySecondCar->getName()." : ".$mySecondCar->start();
echo $mySecondCar->getName()." ".$mySecondCar->forward()."</br>";

$myThreeCar = new car(randColor($listColors),2,"eolienne");
$myThreeCar->setName("three");
echo $myThreeCar->getName()." : ".$myThreeCar->forward()."</br>";

echo $myFirstCar->getName()." ".$myFirstCar->brake()."</br>";
echo $mySecondCar->getName()." ".$mySecondCar->brake()."</br>";

echo "<hr>";

$myFirstTruck=new Truck(randColor($listColors),2,"essence",30);
$myFirstTruck->setName("First");
echo $myFirstTruck->getName()." : ".$myFirstTruck->forward()."</br>";

$mySecondTruck=new Truck(randColor($listColors),2,"essence",20);
$mySecondTruck->setName("Second");
echo $mySecondTruck->getName()." : ".$mySecondTruck->start()."</br>";
echo $mySecondTruck->getName()." : ".$mySecondTruck->forward()."</br>";
echo "<hr>";
$myFirstTruck->setCurrentStorage(40);
echo $myFirstTruck->getName()." : Your current Storage is ".$myFirstTruck->fillFull()."</br>";
