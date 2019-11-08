<?php

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_SESSION["name"] = $_POST["name"];
    header("Location: house.php");
}

?>

<html>
    <head>
        <title>Zadatak 3</title>
    </head>
    <body>
        <h1>Welcome to Harry Potter Quiz</h1>
        <div>
            <form action="welcome.php" method="post">
                <div>
                    <label for="nameInput">Please enter your name</label> <br/>
                    <input type="text" name="name" id="nameInput"> <br/>
                    <button>Continue</button>
                </div>
            </form>
        </div>
    </body>
</html>