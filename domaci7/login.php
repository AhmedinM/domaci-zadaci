<?php

require_once "Auth.php";
$t = new Auth();

session_start();

if($t->check()===true){     //OVAKO SAM SHVATIO POSLJEDNJU RECENICU
    header("Location: cars.php");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if($t->attempt($_POST["email"],$_POST["password"])===true){
        $_SESSION["logedin"] = true;
        header("Location: cars.php");
    }
}

?>

<html>
    <head>
        <title>Log in</title>
    </head>
    <body>
        <form action="login.php" method="post">
            <div>
                <label for="emailInput">E-mail:</label> <br/>
                <input type="text" id="emailInput" name="email">
            </div>
            <div>
                <label for="passwordInput">Password</label> <br/>
                <input type="password" name="password">
            </div>
            <div>
                <button>Login</button>
            </div>
        </form>
    </body>
</html>