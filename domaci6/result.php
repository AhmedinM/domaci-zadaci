<?php

session_start();
if(!isset($_SESSION["pet"])){
    header("Location: pet.php");
}

?>

<html>
    <head>
        <title>Zadatak 3</title>
    </head>
    <body>
        <h1>Harry Potter Quiz</h1>
        <div>
            <h2>Result</h2>
            <table border="1">
                <tr>
                    <td><b>Name</b></td>
                    <td>
                        <?=$_SESSION["name"]?>
                    </td>
                </tr>
                <tr>
                    <td><b>House</b></td>
                    <td>
                        <?=$_SESSION["house"]?> <br/>
                        <img src="<?=strtolower($_SESSION['house'])?>.jpg" alt="House" width="100">
                    </td>
                </tr>
                <tr>
                    <td><b>Favourite Professor</b></td>
                    <td>
                        <?=$_SESSION["professor"]?>
                    </td>
                </tr>
                <tr>
                    <td><b>Pet</b></td>
                    <td>
                        <?=$_SESSION["pet"]?>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>