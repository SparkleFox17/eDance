<?php

include_once("./inc/config.php");

include_once("./template/header.php");

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/2019/eDance/' :
        include("./view/home.php");
        break;
    case '/2019/eDance/about' :
        include("./view/about.php");
        break;
    case '/2019/eDance/catalogue' :
        include("./view/catalogue.php");
        break;
    case '/2019/eDance/faq' :
        include("./view/faq.php");
        break;
    case '/2019/eDance/suscribe' :
        include("./view/subscribe.php");
        break;
    default:
        http_response_code(404);
        echo "oops"; 
        break; 
           
}




/*include("./view/home.php");
include("./view/about.php");
include("./view/catalogue.php");
include("./view/faq.php"); 
include("./view/subscribe.php");*/
include_once("./template/footer.php");
?>



