<?php
require_once "Controllers/UserController.php";
class BasicController
{
    private UserController $UserController;

    public function __construct()
    {
        $this->UserController = new UserController();
    }

    public function Index()
    {
        try {
            require "Views/Index.php";
        } catch (Exception $ex) {
            return;
        }
    }

    public function Home()
    {
        try {
            $data = $this->UserController->Read();
            if($data != null) {
                require "Views/Home.php";
            } else {
                header("Location: http://localhost:8080/CRUD_PHP/Login");
            }
        } catch (Exception $ex) {
            return;
        }
    }

    public function About()
    {
        try {
            require "Views/About.php";
        } catch (Exception $ex) {
            return;
        }
    }

    public function Login()
    {
        try {
            require "Views/Login.php";
        } catch (Exception $ex) {
            return;
        }
    }
}
