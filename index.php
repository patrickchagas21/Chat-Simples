<?php 

require_once("vendor/autoload.php");

use Pcode\DB\Sql;

$app = new Slim\Slim();

$app->get('/', function() {

	$sql = new Sql();

	 $results = $sql->select("SELECT * FROM chat");

	echo json_encode($results);

});

$app->run();

?>