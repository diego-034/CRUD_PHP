<?php
require_once "Models/Conexion.php";
require_once "Models/Interface/IController.php";

class ProductsModel implements IController
{
    private Conexion $Conexion;
    private $Consult = "SELECT * FROM products";
    private $Insert = "INSERT INTO products(Name,Price,Stock,Description) VALUES(?,?,?,?)";
    private $Delete = "DELETE FROM products WHERE ProductId = ? ";
    private $Update = "UPDATE products SET Name = ?, Price = ?, Stock = ?, Description = ? WHERE ProductId = ? ";
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
            if ($product != null) {
                $response = $this->Conexion->query($this->Insert, $product, ["s", "i", "i", "s"]);
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            return false;
        }
    }

    public function Update($product)
    {
        try {
            if ($product != null) {
                $response = $this->Conexion->query($this->Update, $product, ["s", "i", "i", "s","i"]);
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
        }
    }

    public function Delete($productId)
    {
        try {
            if ($productId != null) {
                $response = $this->Conexion->query($this->Delete, $productId, ["i"]);
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            return false;
        }
    }

    public function SelectOne($productId)
    {
        try {
            if ($productId != null) {
                $response = $this->Conexion->query($this->SelectOne, $productId, ["i"]);
                if ($response[0] != null) {
                    return $response[0];
                }
                return null;
            } else {
                return null;
            }
        } catch (Exception $ex) {
        }
    }
}
