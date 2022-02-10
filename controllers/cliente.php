<?php
class Cliente extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
        session_start();
        if (isset($_SESSION["client"])) {
            $this->view->render("client/cliente");
        } else {
            header("Location:" . BASE_URL . "/clientLog/forbidden");
        }
    }


    public function getRestaurantInfo()
    {
        session_start();
        $id = $_SESSION["id"];
        $resultArray = $this->model->getRestaurantInfo($id);
        echo json_encode($resultArray);
    }
}
