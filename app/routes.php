<?php

$app->get('/home', function($request, $response){
    return $this->view->render($response,'home.twig');
});


$app->get('/', function(){
    return "Index";
});