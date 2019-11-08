<?php

session_start();
if(!isset($_SESSION["name"])){
    header("Location: welcome.php");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["house"])){
        $_SESSION["house"] = $_POST["house"];
        header("Location: professor.php");
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
            <h2>Please choose your house</h2>
            <form action="house.php" method="post">
                <input id="gryffindor" type="radio" name="house" value="Gryffindor">
                <label for="gryffindor">Gryffindor</label>
                <input id="slytherin" type="radio" name="house" value="Slytherin">
                <label for="slytherin">Slytherin</label> <br/>
                <div>
                    <img src="gryffindor.jpg" alt="Gryffindor" width="100">
                    <img src="slytherin.jpg" alt="Slytherin" width="150">
                </div>
                <input id="ravenclaw" type="radio" name="house" value="Ravenclaw">
                <label for="ravenclaw">Ravenclaw</label>
                <input id="hufflepuff" type="radio" name="house" value="Hufflepuff">
                <label for="hufflepuff">Hufflepuff</label> <br/>
                <div>
                    <img src="ravenclaw.jpg" alt="Ravenclaw" width="100">
                    <img src="hufflepuff.jpg" alt="Hufflepuff" width="120">
                </div>
                <button>Continue</button>
            </form>
        </div>
    </body>
</html>