<?php
require_once 'Controller.php';

class MainController extends Controller {

    public function indexAction(array $params) {
        return 'This is index action!';
    }
} 