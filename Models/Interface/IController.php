<?php
interface IController{
    public function Read();
    public function Insert($product);
    public function Update($product);
    public function Delete($productId);
    public function SelectOne($productId);
}
?>