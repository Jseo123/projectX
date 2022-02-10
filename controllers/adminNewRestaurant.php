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

    public function addRestaurant(){
        session_start();
        if(isset($_SESSION["admin"])){
            $first_name = $_POST["ownerName"];
            $last_name = $_POST["lastName"];
            $restaurant_name = $_POST["restaurantName"];
            $adress = $_POST["adress"];
            $phone = $_POST["phone"];
            $card_number = $_POST["cardNumber"];
            $cvc = $_POST["cvc"];
            $expiration_date = $_POST["expirationDate"];
            $email = $_POST["email"];
            $user = $_POST["user"];
            $password = password_hash($_POST["pass"], PASSWORD_DEFAULT);
            $notes = $_POST["notes"];
    
            if ($this->model->addRestaurant(["first_name" => $first_name, "last_name" => $last_name, "restaurant_name" => $restaurant_name, "adress" => $adress, "phone" => $phone, "card_number" => $card_number, "cvc" => $cvc, "expiration_date" => $expiration_date, "email" => $email , "user" => $user , "password" => $password , "notes" => $notes])) {
                $this->view->added = "Nuevo empleado agregado";
                $this->view->render("admin/dashBoard");
            } else {
                $this->view->failed = "No ha sido posible crear nuevo empleado";
                $this->view->render("admin/dashBoard");
            }
        } else {
            $this->view->message = "Wrong user or password";
            $this->view->render("admin/index");
        }
        }
      
}