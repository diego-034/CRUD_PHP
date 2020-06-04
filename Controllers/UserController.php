<?php
require_once "Controllers/Interface/IController.php";
require_once "Models/Conexion.php";
class UserController implements IController{
    private Conexion $Conexion;
    private $Consult = "SELECT * FROM products";
    private $Insert = "INSERT INTO products() VALUES()";
    private $Delete = "DELETE products WHERE ProductId = ? ";
    private $Update = "UPDATE products SET ";

    public function __construct()
    {
        $this->Conexion = new Conexion();
    }
    public function Read(){
        try{            
            return $this->Conexion->query($this->Consult);
        }catch(Exception $ex){
            return null;
        }
    }
    public function Insert(){

    }
    public function Update(){

    }
    public function Delete(){

    }
}
?>