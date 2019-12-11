<?PHP
class visite{
	private $date_visite;
	private $nb_visiteurs;
	
	
	
	function __construct($date_visite,$nb_visiteurs){
		$this->date_visite=$date_visite;
		$this->nb_visiteurs=$nb_visiteurs;
	
	}
	
    function getdate_visite(){
		return $this->date_visite;
	}
	
	function getnb_visiteurs(){
		return $this->nb_visiteurs;
	}
	
	
	function setdate_visite($date_visite){
		$this->date_visite=$date_visite;
	}
	function setnb_visiteurs($nb_visiteurs){
		$this->nb_visiteurs=$nb_visiteurs;
	}
	
}

?>