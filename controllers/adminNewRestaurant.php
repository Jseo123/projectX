<?php
class adminNewRestaurant extends Controller {
    function __construct()
    {
        parent::__construct();
    }

    public function render(){
        session_start();
        if(isset($_SESSION["admin"])){
            $this->view->render("admin/newRestaurant");
        }
        else {
            header("Location:" . BASE_URL . "/adminLog/forbidden");
        }
    }
}