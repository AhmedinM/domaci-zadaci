<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$databasename = "domaci8";

$dbCon = new mysqli($host,$username,$password,$databasename);

if($dbCon->connect_error){
    die("Failed to connect to database: {$dbCon->connection_error}");
}

$sql = "SELECT * FROM cars";
$result = $dbCon->query($sql);

?>

<html>
    <head>
        <title>Cars</title>
    </head>
    <body>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Manufacturer</th>
                        <th>Model</th>
                        <th>Transmission</th>
                        <th>Engine Cubic</th>
                        <th>Fuel Type</th>
                        <th>Horse Power</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($car = $result->fetch_assoc()):?>
                    <tr>
                        <td><?=$car["id"]?></td>
                        <td><?=$car["manufacturer"]?></td>
                        <td><?=$car["model"]?></td>
                        <td><?=$car["transmission"]?></td>
                        <td><?=$car["engine_cubic"]?></td>
                        <td><?=$car["fuel_type"]?></td>
                        <td><?=$car["horse_power"]?></td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </body>
</html>