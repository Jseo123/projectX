<?php
class AdminLog extends Controller {
    function __construct()
    {
        parent::__construct();
    }

    public function render(){
        $this->view->render("admin/index");
    }

    public function logIn(){
        $user = $_POST["email"];
        $pass = $_POST["password"];
        $userCheck = $this->model->userCheck($user);
          if($userCheck === false){
        header("Location:". BASE_URL . "/adminLog/failedLog");
          } else {
             $passCheck = password_verify($pass, $userCheck["pass"]);
             if($passCheck === true){
                session_start();
                $_SESSION["admin"] = $userCheck["name"];
                unset($_POST);
                 header("Location:" .BASE_URL . "/dashboard");
             } else {
        header("Location:". BASE_URL . "/login?failedLog");
             }
          }
    }

    public function failedlog(){
        $this->view->message = "Wrong user or password";
        $this->view->render("admin/index");
    }
}