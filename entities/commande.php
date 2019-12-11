<?PHP
class Commande{

	private $ref_prod;
	private $prixtotal;
	private $id_client;
	private $quantite;
	private $etat;
	function __construct($ref_prod,$prixtotal,$id_client,$quantite,$etat){
		$this->ref_prod=$ref_prod;
		$this->prixtotal=$prixtotal;
		$this->id_client=$id_client;
		$this->quantite=$quantite;
		$this->etat=$etat;
	}
	
	function getref_prod(){
		return $this->ref_prod;
	}
	function getprixtotal(){
		return $this->prixtotal;
	}
	function getid_client(){
		return 1;
	}
	function getetat(){
		return $this->etat;
	}
	function getquantite(){
		return $this->quantite;
	}

	function setprixtotal($prixtotal){
		$this->prixtotal=$prixtotal;
	}
	function setid_client($id_client){
		$this->id_client;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	function setquantite($quantite){
		$this->quantite=$quantite;
	}
	
}

?>