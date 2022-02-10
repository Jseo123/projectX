<?php
class AdminLog extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
        $this->view->render("admin/index");
    }

    public function logIn()
    {
        $user = $_POST["login-name"];
        $pass = $_POST["login-pass"];
        $userCheck = $this->model->userCheck($user);
        if ($userCheck === false) {

            header("Location:" . BASE_URL . "/adminLog/failedLog");
        } else {
            $passCheck = password_verify($pass, $userCheck["password"]);
            if ($passCheck === true) {
                session_start();
                $_SESSION["admin"] = $userCheck["user"];
                unset($_POST);
                header("Location:" . BASE_URL . "/adminDash");
            } else {

                header("Location:" . BASE_URL . "/adminLog/failedLog");
            }
        }
    }

    public function failedlog()
    {
        $this->view->message = "Wrong user or password";
        $this->view->render("admin/index");
    }

    public function logOUt()
    {
        session_start();

        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        session_destroy();

        header("Location:" . BASE_URL . "/adminLog");
    }
}
