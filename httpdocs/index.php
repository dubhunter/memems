<?php

$app = new \Phalcon\Mvc\Micro();

//default
$app->notFound(function() {
	header('HTTP/1.1 404');
});

//hello
$app->get('/hello', function() {
	echo '<h1>Hello World</h1>';
});

//goodbye
$app->get('/goodbye', function() {
	echo '<h1>Goodbye World</h1>';
});

//deploy
$app->post('/deploy', function() {
	shell_exec('git pull origin master');
});

//handle
$app->handle();
