<?php
require_once "Controllers/ProductsController.php";
require_once "Models/Products.php";

class BasicController
{
    private ProductsController $ProductsController;
    private Products $Products;

    public function __construct()
    {
        $this->ProductsController = new ProductsController();
        $this->Products = new Products();
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
