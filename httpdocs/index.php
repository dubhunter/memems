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

//goodbye
$app->get('/goodbye', function() {
	echo '<h1>Goodbye World</h1>';
});

//deploy
$app->post('/deploy', function() {
	exec('pwd', $output);
	error_log(implode(PHP_EOL, $output));
});

//handle
$app->handle();
