<?php 

session_start();

require_once("vendor/autoload.php");

use \Pcode\Model\User;
use \Slim\Slim;
use \Pcode\Page;
use \Pcode\PageSystem;

$app = new Slim();

$app->config('debug', true);

//Tela principal do sistema / Dashboard
$app->get('/dashboard', function() {

	User::verifyLogin();

	$page = new PageSystem();

	$page->setTpl("index");

});


//Tela de login
$app->get('/', function() {

	$page = new Page();

	$page->setTpl("login");

});

//receber os dados do formulário do login
$app->post('/login', function() {

	User::login($_POST["user_name"], $_POST["user_password"]);

	header("Location: /dashboard");
	exit;

});

//Deslogar do sistema
$app->get('/logout', function() {

	User::logout();

	header("Location: /");
	exit;
});

$app->run();

?>