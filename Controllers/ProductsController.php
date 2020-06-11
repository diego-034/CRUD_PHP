<?php
require_once "Models/ProductsModel.php";

class ProductsController
{
    private ProductsModel $ProductsModel;

    public function __construct()
    {
        $this->ProductsModel = new ProductsModel();
    }

    public function Read()
    {
        try {
            return $this->ProductsModel->Read();
        } catch (Exception $ex) {
            return null;
        }
    }

    public function Insert()
    {
        try {
            if (isset($_POST['Add'])) {
                $product = [
                    $_POST['Name'],
                    $_POST['Price'],
                    $_POST['Stock'],
                    $_POST['Description']
                ];
                $response = $this->ProductsModel->Insert($product);
            } else {
                echo false;
            }
        } catch (Exception $ex) {
            echo false;
        }
    }

    public function Update()
    {
    }

    public function Delete()
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

    public function SelectOne()
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
