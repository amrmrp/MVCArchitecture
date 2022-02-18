<?php

namespace model;

//use Querybuilder\Querybuilder;

use DB\Query;
use DB\Querybuilder;

class User extends Database
{
    use Querybuilder,Query;

    public function usertable()
    {





      //  $this->select()->where("id","5" )->from('users')->result();

//        $this->table='users';
//        echo  $this->selectall('id.name.email');
//        echo "<br>";
//        $this->selectwhere("email=amirreza.moghaddampoor41145@gmail.com,password=*84+*-*/5487545");
    }

    public function userget($email,$password)
    {

    //    $this->select()->where("id","5")->result();
//        $password = md5($password);
//        $stmnt = $this->connection->query("SELECT * FROM `users` WHERE email='{$email}' AND password='{$password}' ");
//        return $stmnt->fetch(\PDO::FETCH_OBJ);
    }

}