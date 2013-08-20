<?php

$app = new \Phalcon\Mvc\Micro();

//default handler
$app->notFound(function() {
	header('HTTP/1.1 404');
	echo '404';
});

//hello
$app->get('/hello', function() {
	echo '<h1>Hello World</h1>';
});

//deploy
$app->post('/deploy', function() {
	error_log('/deploy');
	error_log(`git pull origin master`);
});

//handle
$app->handle();