<?php
require_once "Models/Conexion.php";
require_once "Models/Interface/IController.php";

class ProductsModel implements IController
{

    private Conexion $Conexion;
    private $Consult = "SELECT * FROM products";
    private $Insert = "INSERT INTO products(Name,Price,Stock,Description) VALUES(?,?,?,?)";
    private $Delete = "DELETE FROM products WHERE ProductId = ? ";
    private $Update = "UPDATE products SET ";
    private $SelectOne = "SELECT * FROM products WHERE ProductId = ?";

    public function __construct()
    {
        $this->Conexion = new Conexion();
    }

    public function Read()
    {
        try {
            return $this->Conexion->query($this->Consult);
        } catch (Exception $ex) {
            return null;
        }
    }

    public function Insert($product)
    {
        try {
            if (isset($_POST['Add'])) {
                $product = [
                    $_POST['Name'],
                    $_POST['Price'],
                    $_POST['Stock'],
                    $_POST['Description']
                ];
                $response = $this->Conexion->query($this->Insert, $product, ["s", "i", "i", "s"]);
            } else {
                echo false;
            }
        } catch (Exception $ex) {
            echo false;
        }
    }
    public function Update($product)
    {
    }

    public function Delete($productId)
    {
        try {
            if (isset($_POST['Delete'])) {
                $response = $this->Conexion->query($this->Delete, [$_POST['Delete']], ["i"]);
                echo true;
            } else {
                echo false;
            }
        } catch (Exception $ex) {
            echo false;
        }
    }

    public function SelectOne($productId)
    {
        try {
            if (isset($_GET['Edit'])) {
                $response = $this->Conexion->query($this->SelectOne, [$_GET['Edit']], ["i"]);
                echo json_encode([$response[0]]);
            } else {
                echo false;
            }
        } catch (Exception $ex) {
        }
    }
}
