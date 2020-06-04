<?php
class User{
    private $name;
    private $lastName;
    private $password;

    public function SetName($name){
        $this->name = $name;
    } 

    public function GetName(){
        return $this->name;
    } 

    public function SetLastName($lastName){
        $this->lastName = $lastName;
    } 
    
    public function GetLastName(){
        return $this->lastName;
    } 

    public function SetPassword($password){
        $this->password = $password;
    } 
    
    public function GetPassword(){
        return $this->password;
    } 
}
?>