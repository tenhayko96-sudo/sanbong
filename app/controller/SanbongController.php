<?php
class SanbongController{

     public function __construct(){

    }

    public function index(){
        require_once __DIR__."/../view/sanbong/sanbong_view.php";
    }
    public function themmoi(){
        require_once __DIR__."/../view/sanbong/sanbong_themmoi.php";
    }
}
?>