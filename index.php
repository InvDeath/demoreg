<?php
include_once 'classes/App.php';
include_once 'classes/Request.php';

$app = new App(new Request());

print $app->getResult();