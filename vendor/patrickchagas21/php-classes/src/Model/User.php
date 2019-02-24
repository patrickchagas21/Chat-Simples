<?php
namespace Pcode\Model;

use \Pcode\DB\Sql;
use \Pcode\Model;


class User extends Model
{

	const SESSION = "User";

	//Pegar a sessão do usuário
	public static function getFromSession()
	{
		$user = new User();
		if (isset($_SESSION[User::SESSION]) && (int)$_SESSION[User::SESSION]['iduser'] > 0) {
			$user->setData($_SESSION[User::SESSION]);
		}
		return $user;
	}

	public static function login($user_name, $user_password)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_users WHERE user_name = :USER_NAME", array(
			":USER_NAME"=>$user_name
		));

		//Verificar se encotrou algum login
		if (count($results) === 0) // se for 0, ele não encontrou nada
		{

			throw new \Exception("Usuário inexistente ou senha inválida.");

		}

		$data = $results[0];//primeiro registro que ele encontrou

		//Verificar a senha do usuário
		if (password_verify($user_password, $data["user_password"]) === true)
		{

			$user = new User();

			//chamar todos os SETTERS
			$user->setData($data);

			$_SESSION[User::SESSION] = $user->getValues();

			return $user;

		} else {

			throw new \Exception("Usuário inexistente ou senha inválida.");
		}

	}

	//Validar login
	public static function verifyLogin()
	{	
		if (
			//SE ELA NÃO FOI DEFINIDA ESSE SESSION
			!isset($_SESSION[User::SESSION])
			//ELA PODE SER DEFINADA, MAS PODE ESTAR VAZIA
			|| 
			!$_SESSION[User::SESSION]
			||
			//verificar o id do usuário
			!(int)$_SESSION[User::SESSION]["iduser"] > 0

		) {

			header("Location: /");
			exit;
		}
	}

	//Deslogar o sistema
	public static function logout()
	{

		$_SESSION[User::SESSION] = NULL;

	}

}


?>