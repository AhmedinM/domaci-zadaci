<?php

session_start();
if(!isset($_SESSION["house"])){
    header("Location: house.php");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["professor"])){
        $_SESSION["professor"] = $_POST["professor"];
        header("Location: pet.php");
    }
}

?>

<html>
    <head>
        <title>Zadatak 3</title>
    </head>
    <body>
        <h1>Harry Potter Quiz</h1>
        <div>
            <h2>Please choose your favourite professor</h2>
            <form action="professor.php" method="post">
                <input type="radio" name="professor" id="minerva" value="Minerva McGonagal">
                <label for="minerva">Minerva McGonagal</label> <br/>
                <input type="radio" name="professor" id="severus" value="Severus Snape">
                <label for="severus">Severus Snape</label> <br/>
                <input type="radio" name="professor" id="albus" value="Albus Dumbledore">
                <label for="albus">Albus Dumbledore</label> <br/>
                <input type="radio" name="professor" id="filius" value="Filius Flitwick">
                <label for="filius">Filius Flitwick</label> <br/>
                <input type="radio" name="professor" id="alastor" value="Alastor Moody">
                <label for="alastor">Alastor Moody</label> <br/>
                <input type="radio" name="professor" id="remus" value="Remus Lupin">
                <label for="remus">Remus Lupin</label> <br/>
                <button>Continue</button>
            </form>
        </div>
    </body>
</html>