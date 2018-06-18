<?php

namespace App\Controller;

class UserController{
    public function index(){
        $users = [
            "eduardo",
            "Jose",
            "Carla"
        ];

        require_once _VIEW_PATH_ . "header.php";
        require_once _VIEW_PATH_ . "user/index.php";
        require_once _VIEW_PATH_ . "footer.php";
    }
}