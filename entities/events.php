<?PHP
class events{
	private $nom;
	private $description;
	private $location;
	private $date;

	
	
	function __construct($nom,$description,$location,$date){
		$this->nom=$nom;
		$this->description=$description;
		$this->location=$location ; 
		$this->date=$date;
		
		
	}
	

	function getnom(){
		return $this->nom;
	}
	function getdescription(){
		return $this->description;
	}
	function getlocation(){
		return $this->location;
	}
	function getdate(){
		return $this->date;
	}
	
	

	function setnom($nom){
		$this->nom=$nom;
	}
	function setdescription($description){
		$this->description=$description;
	}
	function setlocation($location){
		$this->location=$location;
	}
	
	function setdate($date){
		$this->date=$date;
	}
	
	
	
}

?>