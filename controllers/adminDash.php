<?php
class adminDash extends Controller {
    function __construct()
    {
        parent::__construct();
    }

    public function render(){
        $this->view->render("admin/dashBoard");
    }
}