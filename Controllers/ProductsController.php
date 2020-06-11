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
                echo $response;
            } else {
                echo false;
            }
        } catch (Exception $ex) {
            echo false;
        }
    }

    public function Update()
    {
        try {
            if (isset($_POST['Id'])) {
                $product = array(
                    0 => $_POST['Name'],
                    1 => $_POST['Price'],
                    2 => $_POST['Stock'],
                    3 => $_POST['Description'],
                    4 => $_POST['Id']
                );
                $response = $this->ProductsModel->Update($product);
                echo $response;
            } else {
                echo false;
            }
        } catch (Exception $ex) {
            echo false;
        }
    }

    public function Delete()
    {
        try {
            if (isset($_POST['Delete'])) {
                $response = $this->ProductsModel->Delete([$_POST['Delete']]);
                echo $response;
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
                $response = $this->ProductsModel->SelectOne([$_GET['Edit']]);
                if ($response[0] != null) {
                    $object = array(
                        'id' => $response[0],
                        'name' => $response[1],
                        'price' => $response[2],
                        'stock' => $response[3],
                        'description' => $response[4]
                    );
                    echo json_encode($object);
                } else {
                    echo null;
                }
            } else {
                echo false;
            }
        } catch (Exception $ex) {
        }
    }
}
