<?php
class Request
{
    private $controller = 'MainController';
    private $action = 'indexAction';
    private $params = array();

    public function __construct()
    {
        $requestUri = explode('/', $_SERVER['REQUEST_URI']);

    }

    public function getController()
    {
        return $this->controller;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getParams()
    {
        return $this->params;
    }
}