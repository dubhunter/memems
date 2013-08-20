<?php

$app = new \Phalcon\Mvc\Micro();

//hello
$app->get('/deploy', function() {
	echo '<h1>Hello World</h1>';
});

//deploy
$app->get('/deploy', function() {
	`git pull origin master`;
});

$app->handle();