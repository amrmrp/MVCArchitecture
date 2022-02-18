<?php

$routes = $rout->getRout();
$arr = $rout->getPathlist();

$rout->run($arr, $request);
$keyRoute = $rout->getRoutekey();

//array_unshift($out_matches, $request);
//var_dump($request);

$requestMethod = $request->getRequestmethod();

$patth_all_route = $rout->getPathlist();

$rout->newClassIncludeing($patth_all_route[$keyRoute], $routes[$requestMethod], $request);



