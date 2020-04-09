<?php
session_start();
require "../classes.php";
require "../array.php";



if (isset($_SESSION["user"])){

        if ($_SESSION["user"]["role"]!="Admin"){
            exit(header("Location: /error404/"));
        }
        
        if($_POST["exit"]){ 
            session_destroy();
            header("Location: ../authorization.php");
        }
        if (empty($_SESSION["user"]["lang"])){
            header("Location: ../change_lang.php");
        }
        if ($_SESSION["user"]["role"]=="Admin"){
            
            $admin = new Admin($_SESSION["user"]["lang"],$_SESSION["user"]["role"],$_SESSION["user"]["name"],$_SESSION["user"]["surname"]);
            $admin->introduce();
        }
}
else {
    header("Location: ../authorization.php");
}

?>
<html>
<body>
    <br>
    <a href="../change_lang.php">Change your language</a>
    <br>
    <form method="POST">
    <input type="submit" name="exit" value="Выйти">
    </form>
</body>
</html> 
