<?PHP
class reclamation{
	private $ref_rec;
	private $titre_rec;
	private $email_rec;
	private $message_rec;
	private $nom_client;
	private $date_rec;
	function __construct($titre_rec,$email_rec,$message_rec,$nom_client,$date_rec){

		$this->titre_rec=$titre_rec;
		$this->email_rec=$email_rec;
		$this->message_rec=$message_rec;
		$this->nom_client=$nom_client;
		$this->date_rec=$date_rec;
	}
	
	public function getRef_rec()
	{
		return $this->ref_rec;
	}
	public function setRef_rec($ref_rec)
	{
		$this->ref_rec = $ref_rec;
	}
	
	public function getTitre_rec()
	{
		return $this->titre_rec;
	}
	public function setTitre_rec($titre_rec)
	{
		$this->titre_rec = $titre_rec;
	}
	
	public function getEmail_rec()
	{
		return $this->email_rec;
	}
	public function setEmail_rec($email_rec)
	{
		$this->email_rec = $email_rec;
	}
	
	public function getMessage_rec()
	{
		return $this->message_rec;
	}
	public function setMessage_rec($message_rec)
	{
		$this->message_rec = $message_rec;
	}
	
	public function getDate_rec()
	{
		return $this->date_rec;
	}
	public function setDate_rec($date_rec)
	{
		$this->date_rec = $date_rec;
	}
	
	public function getNom_client()
	{
		return $this->nom_client;
	}
	public function setNom_client($nom_client)
	{
		$this->nom_client = $nom_client;
	}
	
}

?>