<?php

class Usuario{
    const URL_COMPLETA ="http://localhost";
    public $email;
    public $password;

    function getEmail() {
		return $this->$email;
	}

	function setEmail($email) {
        $this->$email = $email;
	}

    function getPassword() {
		return $this->$password;
	}

    function setPassword( $password) {
		$this->$password = $password;
	}    
}

$usuario= new Usuario();
var_dump($usuario);
?>