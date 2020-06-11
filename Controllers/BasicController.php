<?php
require_once "Controllers/ProductsController.php";

class BasicController
{
    private ProductsController $ProductsController;

    public function __construct()
    {
        $this->ProductsController = new ProductsController();
    }

    public function Home()
    {
        try {
            $data = $this->ProductsController->Read();
            require "Views/Home.php";
        } catch (Exception $ex) {
            return;
        }
    }
}
