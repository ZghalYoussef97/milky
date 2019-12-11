<?php  
class Categorie
{
	private $id_categorie;
	private $nom;


	public function setNom($n){
		$this->nom = $n;
	}
	
	
	public function setId($i){
		$this->id_categorie = $i;
	}

	public function getNom(){
		return $this->nom;
	}
	
	public function getId(){
		return $this->id_categorie;
	}

	function __construct($n){
		$this->nom  	   = $n;
	
	}
	
}
	?>