<?php
session_start();

if($_POST["selector"]){

    $_SESSION["user"]["lang"] = $_POST["lang"];

    switch($_SESSION["user"]["role"]) {

        case "Admin": 
            header("Location: roles/admin.php");
        break;

        case "Manager": 
            header("Location: roles/manager.php");    
        break;

        case "Client": 
            header("Location: roles/client.php");   
        break;
    }
}


?>
<html>
<body>
    
<form method="POST">
<select name="lang" >
    <option value="ru">Русский</option>
    <option value="ua">Українська</option>
    <option value="en">English</option>
    <option value="it">Italiano</option>
</select>
    <input type="submit" name = "selector" value="Select">
</form>


</body>
</html>