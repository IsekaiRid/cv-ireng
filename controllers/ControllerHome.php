<?php 

class ControllerHome {

    public function index(){
        require_once("../view/welcomes.php");
    }


    public function welcome(){
        require_once("../view/about.php");
    }

}