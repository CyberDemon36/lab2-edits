<?php
class user {
    public $name;
    public $surname;
    public $role;
    public $login;
    public $password;
    function __construct($lang, $role, $name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;
        $this->lang = $lang;
    }
};
class Admin extends user {

    public function introduce(){
        $arr_lang = [
            "ru"=> ["start" => "Привет, " , "end" => ", вам разрешено все на данном сайте"],
            "ua" => ["start" => "Привіт, " , "end" => ", вам дозволено усе на даному сайті"],
            "it" => ["start" => "Привет, " , "end" => ", вам дозволено усе на даному сайті"],
            "en" => ["start" => "Hello, " , "end" => ", you are allmight at this web-site"]
        ];
        // $lang = $_SESSION["user"]["lang"];

        echo $arr_lang[$this->lang]["start"] . " ". $this->role . " " . $this->name . " " . $this->surname . $arr_lang[$this->lang]["end"];
    }
};

class manager extends user {

    public function introduce(){
        $arr_lang = [
            "ru"=> ["start" => "Привет, " , "end" => ", вам разрешено взаимодействовать с аккаунтами клиентов"],
            "ua" => ["start" => "Привіт, " , "end" => ", вам дозволено взаїмодіяти з аккаунтами клієнтів"],
            "it" => ["start" => "Привет, " , "end" => ", puoi interagire con gli account dei clienti."],
            "en" => ["start" => "Hello, " , "end" => ", you can interract with client accounts"]
        ];
        // $lang = $_SESSION["user"]["lang"];

        echo $arr_lang[$this->lang]["start"] . " ". $this->role . " " . $this->name . " " . $this->surname . $arr_lang[$this->lang]["end"];
    }
};
class client extends user {

    public function introduce(){
        $arr_lang = [
            "ru"=> ["start" => "Привет, " , "end" => ", добро пожаловать на сайт!"],
            "ua" => ["start" => "Привіт, " , "end" => ", ласкаво просимо на сайт!"],
            "it" => ["start" => "Привет, " , "end" => ", benvenuto nel sito!"],
            "en" => ["start" => "Hello, " , "end" => ", welcome to the web-site!"]
        ];
        // $lang = $_SESSION["user"]["lang"];

        echo $arr_lang[$this->lang]["start"] . " ". $this->role . " " . $this->name . " " . $this->surname . $arr_lang[$this->lang]["end"];
    }
};
?>