<?php
require_once "Controllers/Interface/IController.php";
require_once "Models/Conexion.php";
class UserController implements IController{
    private Conexion $Conexion;
    private $Consult = "SELECT * FROM Facturas";
    private $Insert = "";
    private $Delete = "";
    private $Update = "";

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