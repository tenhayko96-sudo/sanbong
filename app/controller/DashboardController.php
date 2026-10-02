<?php
class DashboardController
{
    public function __construct(){

    }

    public function index(){
        require_once __DIR__."/../view/dashboard/dashboard_view.php";
    }
}
?>