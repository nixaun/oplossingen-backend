<?php


$app->get('/{type}', 'HomeController@index');
$app->get('/', 'HomeController@index');

?>