<?php  
class Produit
{
	private $id;
	private $nom;
	private $prix;
	private $categorie;
	private $description;
	private $quantite;
	private $image;
	private $imageTmp;
	private $reference;

	public function setNom($n){
		$this->nom = $n;
	}
	public function setCategorie($c){
		$this->categorie = $c;
	}
	public function setPrix($p){
		$this->prix = $p;
	}
	public function setQuantite($q){
		$this->quantite = $q;
	}	
	public function setDescription($d){
		$this->description = $d;
	}	
	public function setId($i){
		$this->id = $i;
	}
	public function setReference($r){
		$this->reference = $r;
	}
	public function setImage($i){
		$this->image = $i;
	}
	public function setImageTmp($i){
		$this->imageTmp = $i;
	}
	public function getImage(){
		return $this->image;
	}
	public function getImageTmp(){
		return $this->imageTmp;
	}
	public function getNom(){
		return $this->nom;
	}
	public function getPrix(){
		return $this->prix;
	}
	public function getQuantite(){
		return $this->quantite;
	}	
	public function getCategorie(){
		return $this->categorie;
	}	
	public function getDescription(){
		return $this->description;
	}	
	public function getId(){
		return $this->id;
	}
	public function getReference(){
		return $this->reference;
	}
	function __construct($n,$c, $p, $d, $i, $it,$q,$r){
		$this->nom  	   = $n;
		$this->categorie=$c;
		$this->prix 	   = $p;
		$this->description = $d;
		$this->image       = $i;
		$this->imageTmp    = $it;
		$this->quantite    = $q;
		$this->reference   = $r;
	}
}
	?>