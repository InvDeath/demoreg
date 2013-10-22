<?php

class App {
    private $request = NULL;
    private $controller = NULL;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $controller = $this->request->getController();
        require_once $controller . '.php';
        $this->controller = new $controller();
    }

    public function getResult()
    {
        return $this->controller->{$this->request->getAction()}($this->request->getParams());
    }

} 