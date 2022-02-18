<?php

namespace Infrasructure\Routing;

use Infrasructure\Request\Request;

class Rout
{
    protected $rout;
    private $method;
    private $path;
    private $controller;
    private $action;
    private $pathlist = [];
    private $routekey;

    public function __construct()
    {

    }

//    public function run()
//    {
//        $str = str_replace(['/', '{', '}'], ['\/', '(?<', '>[\w-]*)'], $arr);
//        foreach ($str as $key => $value) {
//            $pattern = '/^' . $value . '$/m';
//            $m = preg_match($pattern, $request->getPath(), $out_matches);
//            if ($m) {
//                $key_route = $key;
//            }
//            foreach ($out_matches as $k => $v) {
//                if (is_int($k)) {
//                    unset($out_matches[$k]);
//                    array_unshift($out_matches, $request->setMatch($out_matches));
//                    $o = $request->getMatch();
//                    foreach ($o as $kk => $vv) {
//                        if (is_int($kk)) {
//                            unset($o[$kk]);
//                        }
//                    }
//                }
//            }
//        }
//
//    }


    /**
     * @param array $arr
     * @param Request $request
     * @return bool
     */
    function run(array $arr, Request $request)
    {
        $str = str_replace(['/', '{', '}'], ['\/', '(?<', '>[\w-]*)'], $arr);
        $out_matches = [];
        foreach ($str as $key => $value) {
            $pattern = '/^' . $value . '$/m';
            $matchBool = preg_match($pattern, $request->getPath(), $out_matches);
            if ($matchBool) {
                $keyRoute = $key;
                foreach ($out_matches as $k => $v) {
                    if (is_int($k)) {
                        unset($out_matches[$k]);
                    }
                }
                $request->setMatch($out_matches);
                $this->setRoutekey($keyRoute);
            }
        }

        return true;
    }


    /**
     * @param $patth_all_route
     * @param $array
     * @param Request $request
     */
    function newClassIncludeing($patth_all_route, $array, Request $request)
    {
        $requestController = $patth_all_route;
        if (isset($requestController)) {
            if (array_key_exists($requestController, $array)) {
                $class = "Controller\\{$array[$requestController]["controller"]}";
                if (class_exists($class)) {
                    $object = new $class;
                    if (method_exists($class, $array[$requestController]["method"])) {
                        $object->{$array[$requestController]["method"]}($request);
                    } else {
                        die("not found method");
                    }
                } else {
                    die("not found class");
                }
            } else {
                die("route not fond");
            }
        } else {
            die("route empity");
        }
    }



    /**
     * @return mixed
     */
    public function getRoutekey()
    {
        return $this->routekey;
    }

    /**
     * @param mixed $routekey
     */
    public function setRoutekey($routekey)
    {
        $this->routekey = $routekey;
    }


    public function add($method, $path, $controller, $action)
    {
        $this->setMethod($method);
        $this->setPath($path);
        $this->setController($controller);
        $this->setAction($action);
        $this->rout[$this->getMethod()][$this->getPath()] = [
            'controller' => $this->getController(),
            'method' => $this->getAction(),
        ];
        $this->pathlist[] = $this->getPath();
    }

    public function get($path, $controller, $action)
    {
        $this->setMethod('get');
        $this->setPath($path);
        $this->setController($controller);
        $this->setAction($action);
        $this->add($this->getMethod(), $this->getPath(), $this->getController(), $this->getAction());
    }

    public function post($path, $controller, $action)
    {
        $this->setMethod('post');
        $this->setPath($path);
        $this->setController($controller);
        $this->setAction($action);
        $this->add($this->getMethod(), $this->getPath(), $this->getController(), $this->getAction());
    }

    public function delete($path, $controller, $action)
    {
        $this->setMethod('delete');
        $this->setPath($path);
        $this->setController($controller);
        $this->setAction($action);
        $this->add($this->getMethod(), $this->getPath(), $this->getController(), $this->getAction());
    }

    public function put($path, $controller, $action)
    {
        $this->setMethod('put');
        $this->setPath($path);
        $this->setController($controller);
        $this->setAction($action);
        $this->add($this->getMethod(), $this->getPath(), $this->getController(), $this->getAction());
    }


    /**
     * @return array
     */
    public function getPathlist()
    {

        return $this->pathlist;
    }


    /**
     * @param array $pathlist
     */
    public function setPathlist($pathlist)
    {
        $this->pathlist = $pathlist;
    }


    /**
     * @return mixed
     */
    public function getRout()
    {
        return $this->rout;
    }

    /**
     * @param mixed $rout
     */
    public function setRout($rout)
    {
        $this->rout = $rout;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @param mixed $controller
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }


}