<?php

$app->get('/home', function(){
    return "Home";
});


$app->get('/', function(){
    return "Index";
});