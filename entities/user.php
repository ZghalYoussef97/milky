<?php
class user{
    private $username;
    private $password;
    private $email;
    private $rang;
    function __construct($username,$password,$email,$rang){
        $this->username=$username;
		$this->password=$password;
        $this->email=$email;
        $this->rang=$rang;
    } 

    function getusername(){
		return $this->username;
	}
	function getpassword(){
		return $this->password;
	}
	function getemail(){
		return $this->email;
    }
    function getrang(){
        return $this->rang;
    }

	function setusername($username){
		$this->username=$username;
	}
	function setpassword($password){
		$this->password;
	}
	function setemail($email){
		$this->email=$email;
    }
    function setrang($rang){
        $this->rand=$rang;
    }


}



?>