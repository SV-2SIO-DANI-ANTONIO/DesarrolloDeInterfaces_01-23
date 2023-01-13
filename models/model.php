<?php
require_once("models/model.php");

class Model
{
    public function login()
    {
        if (isset($_REQUEST['user']) && isset($_REQUEST['password'])) {
            if ($_REQUEST['user'] == "PracticasSIO" && $_REQUEST['password'] == "12345") {
                $_SESSION["newsession"] = $_REQUEST['user'];
                return $_SESSION["newsession"];

            } else {
                return null;
            }
        }
    }
}