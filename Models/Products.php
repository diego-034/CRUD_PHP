<?php
class Products{
    private $productId;
    private $name;
    private $price;
    private $stock;
    private $description;

    public function SetProductId($productId){
        $this->productId = $productId;
    } 

    public function GetProductId(){
        return $this->productId;
    } 

    public function SetName($name){
        $this->name = $name;
    } 

    public function GetName(){
        return $this->name;
    } 

    public function SetPrice($price){
        $this->price = $price;
    } 
    
    public function GetPrice(){
        return $this->price;
    } 

    public function SetStock($stock){
        $this->stock = $stock;
    } 
    
    public function GetStock(){
        return $this->stock;
    } 

    public function SetDescription($description){
        $this->description = $description;
    } 
    
    public function GetDescription(){
        return $this->description;
    } 
}
?>