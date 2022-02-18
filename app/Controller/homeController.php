<?php

namespace Controller;
use DB\Querybuilder;

use Infrasructure\Request\Request;
use model\database;
use model\Task;
use model\User;


class homeController
{
use Querybuilder;

    public function index($request)
    {
     //  var_dump($request);
      //  echo "ok ";

    // echo  Querybuilder::->select();
//        $model = new User();
//        $model->usertable();
//        echo "<br>";
     //  echo (new Task())->Task();

    //    echo  $model->select();
       // var_dump('ok');

    }
}