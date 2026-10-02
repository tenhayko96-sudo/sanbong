<?php
require_once __DIR__."/app/controller/DashboardController.php";
require_once __DIR__."/app/controller/SanbongController.php";



$modun = $_GET['modun'] ?? "";
$action = $_GET['action'] ?? "";



switch($modun):
    case "sanbong":
        $controller = new SanbongController();
        if($action == "themmoi"){
            $controller -> themmoi();
        
        }
        else{
            $controller -> index();
        }
        
        break;
    default:
        $controller = new DashboardController();
        $controller -> index();
    break;
endswitch;




