<?php


spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    $path = "./app/" . $class . ".php";
    if (file_exists($path)) {
        require $path;
    } else {
        die("no file directory");
    }
});
$request= new \Infrasructure\Request\Request();

include __DIR__ . "/app/web.php";
include_once __DIR__ . "/app/Routeprocessing.php";




















//if (isset($_GET['path'])) {
//    $uri=explode("/", $_GET['path']);
//    if (isset($uri[0])&&isset($uri[1])){
//        list($class,$methode ) = explode("/", $_GET['path']);
//
//    $path=__DIR__."/app/".$class.".php";
//
//    $controller_path=file_exists($path);
//    if ($controller_path){
//        $class_out=  require $path;
//        if (class_exists($class)){
//            if (method_exists($class,$methode)){
//                $object=new $class;
//                $object->$methode();
//            }else{
//                die("no method");
//            }
//        }
//    }else{
//        die("not found controller");
//    }
//    }else{
//        die("not found methode");
//    }
//}

//
//$ob=new Test();
//$ob->index();
