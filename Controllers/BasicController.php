<?php
require_once "Controllers/UserController.php";
class BasicController
{
    private UserController $UserController;

    public function __construct()
    {
        $this->UserController = new UserController();
    }

    public function Home()
    {
        try {
            $data = $this->UserController->Read();
            require "Views/Home.php";
        } catch (Exception $ex) {
            return;
        }
    }
}
