<?php
require_once 'Controller.php';

class MainController extends Controller {

    public function indexAction(array $params) {
        $variables = array(
            'head'          => '',
            'styles'        => '',
            'scripts'       => '',
            'page_top'      => '',
            'page'          => '',
            'page_bottom'   => '',
        );
        return $this->themer->renderer($variables, file_get_contents('resources/templates/html.tpl.php'));
    }
} 