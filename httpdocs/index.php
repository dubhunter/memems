<?php

error_log(print_r($_SERVER, true));
error_log(print_r($_REQUEST, true));
exit();

$app = new \Phalcon\Mvc\Micro();

$app->notFound(function() {
	echo '404';
});

//hello
$app->get('/hello', function() {
	echo '<h1>Hello World</h1>';
});

//deploy
$app->post('/deploy', function() {
	`git pull origin master`;
});

$app->handle();