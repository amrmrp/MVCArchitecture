<?php

namespace Controller;

use Infrasructure\Request\Request;
use model\database;
use model\User;

class userController
{
    public function index(Request $request)
    {
      echo  $request->id;
        echo "<pre>";
       var_dump($request);
        echo "ok";
    }
    public function login()
    {



   }
}