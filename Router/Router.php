<?php
require "Controllers/BasicController.php";
class Router{
    private BasicController $BasicController;

    public function __construct()
    {
       $this->BasicController = new BasicController(); 
    }

    public function GetRoute($url){
        $url = str_replace('/', '\/', $url);
        $url = str_replace('_', '', $url);
        $url = str_replace('\/', ' ', $url);
        $array = str_word_count($url, 1);
        if(isset($array[1])){
            $this->CallRoute($array[1]);
        }else{
            $this->BasicController->Login();
        }
    }

    public function CallRoute($route){
        switch($route){
            case "": $this->BasicController->Login(); break;
            case "Login": $this->BasicController->Login(); break;
            case "Home": $this->BasicController->Home(); break;
            case "About": $this->BasicController->About(); break;
            default: $this->CallRoute(""); break;
        }
    }
}
?>