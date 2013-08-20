<?php

$app = new \Phalcon\Mvc\Micro();

//Retrieves all robots
$app->get('/deploy', function() {
	`git pull origin master`;
});

$app->handle();