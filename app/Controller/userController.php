<?php

namespace Controller;

use Infrasructure\Request\Request;
use model\database;
use model\User;

class userController
{

    public function index(Request $request)
    {
        echo "<pre>";
       var_dump($request);
        echo "ok";
    }
    public function login()
    {

      //  var_dump($request);
        $db=new User();
        var_dump($db->userget($request['email'],$request['password']));
   }
}