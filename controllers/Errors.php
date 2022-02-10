<?php
class Errors extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render("main/index");
        $this->view->message = "Big big no no.";
     // echo "<p>Failed to load resource.</p>" ;
    }
}