<?php
require_once 'Themer.php';

class Controller {
    protected  $themer = NULL;

    public function __construct()
    {
        $this->themer = new Themer();
    }
} 