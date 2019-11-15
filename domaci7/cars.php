<?php

require_once "Car.php";
require_once "IEngine.php";
require_once "ITransmission.php";

require_once "Auth.php";
$t = new Auth();

//session_start();
if($t->check()!==true){
    header("Location: login.php");
}

$e1 = new V8TDIEngine();
$t1 = new SevenGearAutomaticTransmission();
$c1 = new Car("Audi","R8",$e1,$t1);

$e2 = new V8FSIEngine();
$t2 = new SevenGearAutomaticTransmission();
$c2 = new Car("BMW","M850i",$e2,$t2);

$e3 = new V6TDIEngine();
$t3 = new SixGearAutomaticTransmission();
$c3 = new Car("Ferrari","LaFerrari",$e3,$t3);

$e4 = new V6FSIEngine();
$t4 = new SixGearAutomaticTransmission();
$c4 = new Car("Lamborghini","Aventador",$e4,$t4);

$e5 = new V8TDIEngine();
$t5 = new FiveGearAutomaticTransmission();
$c5 = new Car("Mercedes-Benz","S-Class",$e5,$t5);

$e6 = new V8FSIEngine();
$t6 = new FiveGearAutomaticTransmission();
$c6 = new Car("Chevrolet","Impala",$e6,$t6);

$e7 = new V6TDIEngine();
$t7 = new SixGearManualTransmission();
$c7 = new Car("Volkwagen","Golf Mk2",$e7,$t7);

$e8 = new V6FSIEngine();
$t8 = new SixGearManualTransmission();
$c8 = new Car("Renault","Clio",$e8,$t8);

$e9 = new V8TDIEngine();
$t9 = new FiveGearManualTransmission();
$c9 = new Car("Opel","Corsa",$e9,$t9);

$e10 = new V8FSIEngine();
$t10 = new FiveGearManualTransmission();
$c10 = new Car("Peugeot","206",$e10,$t10);

$cars = [$c1,$c2,$c3,$c4,$c5,$c6,$c7,$c8,$c9,$c10];

?>

<html>
    <head>
        <title>Cars</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td rowspan="2">Naziv</td>
                <td colspan="4">Motor</td>
                <td colspan="2">Prenos</td>
            </tr>
            <tr>
                <td>Gorivo</td>
                <td>Zapremina</td>
                <td>Broj <br/> ventila</td>
                <td>Broj <br/> konjskih <br/> snaga</td>
                <td>Tip</td>
                <td>Broj brzina</td>
            </tr>
            <?php
                foreach($cars as $car){
                    echo "<tr>";
                    echo "<td>{$car->toString()}</td>";
                    echo "<td>{$car->getEngine()->getFuelType()}</td>";
                    echo "<td>{$car->getEngine()->getLiters()}</td>";
                    echo "<td>{$car->getEngine()->getNumberOfCylinders()}</td>";
                    echo "<td>{$car->getEngine()->getHorsePower()}</td>";
                    echo "<td>{$car->getTransmission()->getType()}</td>";
                    echo "<td>{$car->getTransmission()->getNumberOfGears()}</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>