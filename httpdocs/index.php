<?php

$app = new \Phalcon\Mvc\Micro();

//hello
$app->get('/hello', function() {
	echo '<h1>Hello World</h1>';
});

//deploy
$app->post('/deploy', function() {
	`git pull origin master`;
});

$app->handle();