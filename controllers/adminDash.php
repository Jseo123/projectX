<?php
class adminDash extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
        session_start();
        if (isset($_SESSION["admin"])) {
            $this->view->render("admin/dashBoard");
        } else {
            header("Location:" . BASE_URL . "/adminLog/forbidden");
        }
    }
}
