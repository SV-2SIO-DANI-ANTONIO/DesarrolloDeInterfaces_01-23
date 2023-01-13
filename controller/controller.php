<?php
require_once('models/model.php');

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }


    public function run(): void
    {

        session_start();
        session_destroy();

        $res = $this->model->login();
        if (is_null($res)) {
            echo "error de login";
        } else {
            echo "tu usuario logueado es: ";
            echo $_SESSION["newsession"];

        }
    }


}