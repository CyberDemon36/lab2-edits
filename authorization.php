<?php
session_start();
require "array.php";
require_once("classes.php");
$LOGIN = $_POST["login"];
$PASSWORD = $_POST["password"];
$SUBMIT = $_POST["submit"];


$counter = 0;



//   if (!isset($_SESSION)){
    if(!empty($LOGIN)){
        for($i = 0; $i<count($arr); $i++){ 

            if($LOGIN == $arr[$i]["login"] and $PASSWORD == $arr[$i]["password"]) {
                
                $_SESSION["user"] = ["role"=> $arr[$i]["role"], "name"=> $arr[$i]["name"],"surname"=> $arr[$i]["surname"], "lang"=> $arr[$i]["lang"] ]; 
                

                switch($arr[$i]["role"]) {

                    case "Admin": {
                        $counter++;
                       
                        header("Location: roles/admin.php");
                    break;
                    }

                    case "Manager": {
                        $counter++;
                        
                        header("Location: roles/manager.php");
                    break;
                    }

                    case "Client": {
                        $counter++;
                        
                        header("Location: roles/client.php");    
                    break;
                    } 
                }   
            }
        }
        if($counter == 0){
        echo "Вы ввели неверные данные!";
        }
    }

require "index.php";
?>