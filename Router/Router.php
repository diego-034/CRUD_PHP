<?php
require "Controllers/BasicController.php";

class Router{
    private BasicController $BasicController;
    private ProductsController $ProductsController;


    public function __construct()
    {
       $this->BasicController = new BasicController(); 
       $this->ProductsController = new ProductsController(); 
    }

    public function GetRoute($url){
        $url = str_replace('/', '\/', $url);
        $url = str_replace('_', '', $url);
        $url = str_replace('\/', ' ', $url);
        $array = str_word_count($url, 1);
        if(isset($array[1])){
            $this->CallRoute($array[1]);
        }else{
            $this->BasicController->Home();
        }
    }

    public function CallRoute($route){
        switch($route){
            case "": $this->BasicController->Home(); break;
            case "Home": $this->BasicController->Home(); break;
            case "Add": $this->ProductsController->Insert(); break;
            case "Delete": $this->ProductsController->Delete(); break;
            case "SelectOne": $this->ProductsController->SelectOne(); break;
            case "Update": $this->ProductsController->Update(); break;
            default: $this->CallRoute(""); break;
        }
    }
}
?>