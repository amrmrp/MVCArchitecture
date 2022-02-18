<?php

use Infrasructure\Routing\Rout;

$rout=new Rout();
$rout->add('get','article','userController','index');
$rout->add('get','article5','userController','index');
//$rout->add('get','article','userController','index');
//$rout->add('put','article','userController','index');
//$rout->add('delete','amir/123','userController','index');
//
$rout->get('amir','userController','index');
$rout->get('amir/45123','userController','index');
$rout->get('amir/333333/{id}','userController','index');
$rout->get('amir/{id}','userController','index');
$rout->post('amir/{id}','userController','index');
$rout->get('amir/{slug}/{id}','userController','index');
$rout->get('amir/{slug}/amir/{id}','userController','index');











