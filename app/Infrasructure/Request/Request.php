<?php

namespace Infrasructure\Request;

class Request
{

    private $requestmethod;
    private $parameters;
    private $path;
    private $match;

    /**
     * @return mixed
     */
    public function getMatch()
    {
        return $this->match ;
    }

    /**
     * @param mixed $match
     */
    public function setMatch($match)
    {
        $this->match = $match;
    }


    public function __construct()
    {
        $getrequest = isset($_GET['path']) ? $_GET['path'] : null;
        $this->setParameters($_REQUEST);
        $this->setPath($getrequest);
        $this->setRequestmethod(strtolower($_SERVER['REQUEST_METHOD']));
    }

    /**
     * @return mixed
     */
    public function getRequestmethod()
    {
        return $this->requestmethod;
    }

    /**
     * @param mixed $requestmethod
     */
    protected function setRequestmethod($requestmethod)
    {
        $this->requestmethod = $requestmethod;
    }

    /**
     * @return mixed
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param mixed $parameters
     */
    protected function setParameters($parameters)
    {
        $this->parameters = $parameters;
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
    protected function setPath($path)
    {

        $this->path = $path;
    }


}