<?PHP
class promotion{
	private $nom;
	private $description;
	private $date;
	  

	
	
	function __construct($nom,$description,$date){
		$this->nom=$nom;
		$this->description=$description;
		$this->date=$date ; 
		 
		
		
	}
	

	function getnom(){
		return $this->nom;
	}
	function getdescription(){
		return $this->description; }
	 
	function getdate(){
		return $this->date;
	}
	
	

	function setnom($nom){
		$this->nom=$nom;
	}
	function setdescription($description){
		$this->description=$description;
	 } 
	
	function setdate($date){
		$this->date=$date;
	}
	
	
	
}

?>