<?PHP
class Guide{

	private $id;
	private $description;
	private $duree;

	function __construct($id,$description,$duree){
		$this->id=$id;
		$this->description=$description;
		$this->duree=$duree;
	
	}
	
	function getid(){
		return $this->id;
	}
	function getdescription(){
		return $this->description;
	}
	function getduree(){
		return duree;
	}
	
	

	function setdescription($description){
		$this->description=$description;
	}
	function setduree($duree){
		$this->duree;
	}
	
	
}

?>