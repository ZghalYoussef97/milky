<?PHP

class User{
	private $name;
	private $username;
	private $password;
	private $email;
	function __construct($name,$username,$password,$email){
		$this->name=$name;
		$this->username=$username;
		$this->password=$password;
		$this->email=$email;
	}
	
	function getname(){
		return $this->name;
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

	function setusername($username){
		$this->username=$username;
	}
	function setpassword($password){
		$this->password;
	}
	function setemail($email){
		$this->email=$email;
	}

}

?>