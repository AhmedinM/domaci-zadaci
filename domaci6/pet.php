<?php

session_start();
if(!isset($_SESSION["professor"])){
    header("Location: professor.php");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["pet"])){
        $_SESSION["pet"] = $_POST["pet"];
        header("Location: result.php");
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
            <h2>What pet would you bring with you in Hogarts?</h2>
            <form action="pet.php" method="post">
                <input type="radio" name="pet" id="owl" value="Owl">
                <label for="owl">Owl</label> <br/>
                <input type="radio" name="pet" id="cat" value="Cat">
                <label for="cat">Cat</label> <br/>
                <input type="radio" name="pet" id="spider" value="Spider">
                <label for="spider">Spider</label> <br/>
                <input type="radio" name="pet" id="toad" value="Toad">
                <label for="toad">Toad</label> <br/>
                <button>Continue</button>
            </form>
        </div>
    </body>
</html>