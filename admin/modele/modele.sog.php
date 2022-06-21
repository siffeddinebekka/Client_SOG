<?php 

	class Modele
	{
		private $unPdo;



		public function __construct()
		{
			$this->unPdo = null;
			try{
				$this->unPdo = new Pdo("mysql:host=localhost:8888;dbname=orange","Admin","Admin123");
			}
			catch(PDOException $exp)
			{
				echo"Impossible de se connecter a la base de données";
				echo $exp->getmessage();
			}
		}
		////////// Gestion des CLient//////////////

		public function selectAllClients()
		{
			$requete = "select * from client; ";
			$select = $this->unPdo->prepare($requete);

			$select -> execute();
			$lesClients = $select-> fetchAll();
			return $lesClients;
		}
		public function insertClient($tab)
		{
			$requete ="insert into client values (null, :nomc, :prenomc, :adressec, :cpc, :mailc, :telc);" ;

			$donnees =array(":nomc"=>$tab['nomc'],":prenomc"=>$tab['prenomc'],":adressec"=>$tab['adressec'],":cpc"=>$tab['cpc'],":mailc"=>$tab['mailc'],":telc"=>$tab['telc']);
			$select = $this->unPdo->prepare ($requete);
			$select -> execute($donnees);


		}
		public function deleteClient($codec)
		{
			$requete ="delete from client where codec = :codec;" ;
			$donnees = array(":codec"=>$codec);
			$select = $this->unPdo->prepare($requete);
			$select->execute($donnees);
		}

	public function selectAllIntervention()
	{
		$requete = "select * from intervention ;";
		$select = $this->unPdo->prepare($requete);
		$select -> execute();
		$lesInterventions = $select->fetchAll();
		return $lesInterventions;
	}
	public function insertIntervention($tab)
	{
		$requete = "insert into intervention values(null, :adressei, :datetimei, :objet, :codec,:nomc, :codet, :nomt);";
		$donnees = array(":adressei"=>$tab['adressei'],":datetimei"=>$tab['datetimei'], ":objet"=>$tab['objet'],":codec"=>$tab['codec'],  ":nomc"=>$tab['nomc'],":codet"=>$tab['codet'],":nomt"=>$tab['nomt']);
		$select = $this->unPdo->prepare($requete);
		$select->execute($donnees);
	}
	public function deleteIntervention($codei)
	{
		$requete ="delete from intervention where codei = :codei;";
		$donnees = array(":codei"=>$codei);
		$select = $this->unPdo->prepare($requete);
		$select->execute($donnees);
	}
	public function selectAllTechniciens()
	{
		$requete = "select * from technicien;";
		$select = $this->unPdo->prepare($requete);
		$select->execute();
		$lesTechniciens = $select->fetchAll();
		return $lesTechniciens;
	}
	public function insertTechnicien($tab)
	{
		$requete = "insert into technicien values(null, :nomt, :prenomt, :dateemb, :mailt, :telt);";
		$donnees =array(":nomt"=>$tab['nomt'], ":prenomt"=>$tab['prenomt'], ":dateemb"=>$tab['dateemb'], ":mailt"=>$tab['mailt'], ":telt"=>$tab['telt']);
		$select = $this->unPdo->prepare($requete);
		$select -> execute($donnees);
	}
	public function deleteTechnicien($codet)
	{
		$requete="delete from technicien where codet = :codet;";
		$donnees =array(":codet"=>$codet);
		$select = $this->unPdo->prepare($requete);
		$select->execute($donnees);
	}
	public function selectWhereAdmin($admin, $PASSWORD)
	{
		$requete = "select * from admin where PASSWORD = :PASSWORD and USERNAME = :admin;";
		$donnees = array(":PASSWORD"=>$PASSWORD, ":admin"=>$admin);
		$select = $this->unPdo->prepare($requete);
		$select->execute($donnees);
	}

	public function selectWhereClient($codec)
	{
		$requete = "select * from client where codec = :codec ;";
		$donnees = array(":codec"=>$codec);
		$select = $this->unPdo->prepare($requete);
		$select->execute($donnees);
	}

	public function selectWhereUsers($id)
	{
		$requete = "select * from users where id = :id ;";
		$donnees = array(":id"=>$id);
		$select = $this->unPdo->prepare($requete);
		$select->execute($donnees);
	}
	public function selectSearch($tab , $mot)
	{
		$donnees = array();
		$champs = array();
		foreach ($tab as $cle) {
			$champs[] = $cle." like :mot";
			$donnees[":mot"] = "%".$mot."%";
		}
		$chaineWhere = implode("or",$champs);
		$requete = "select * from".$this->uneTable."where".$chaineWhere;
		$select = $this->pdo->prepare($requete);
		$select->execute($donnees);
		return $select->fetchAll();
	}
	//Gestion des user////

	public function selectAllUsers()
		{
			$requete = "select * from users; ";
			$select = $this->unPdo->prepare($requete);
			$select -> execute();
			$lesUsers = $select-> fetchAll();
			return $lesUsers;
		}	
		public function deleteUsers($id)
		{
			$requete ="delete from users where id = :id;" ;
			$donnees = array(":id"=>$id);
			$select = $this->unPdo->prepare($requete);
			$select->execute($donnees);
		}
		public function checkMail($email)
		{
			$requete = "select * from users where email = ?;";
			$donnees = array(":email"=>$email);
			$select = $this->unPdo->prepare($requete);
			$select->execute($donnees);
		}


		// vue NbIntervention
			// vue NbIntervention
			public function selectAllNbInterventions()
			{	
				$requete = "select * from NbIntervention;";
				$select = $this->unPdo->prepare($requete);
				$select -> execute();
				$lesNbInterventions = $select-> fetchAll();
				return $lesNbInterventions;
			}
			public function selectWhereNbIntervention($codeIntervention)
			{
			$requete = "select * from NbIntervention where codeIntervention = :codeIntervention ;";
			$donnees = array(":codeIntervention"=>$codeIntervention);
			$select = $this->unPdo->prepare($requete);
			$select->execute($donnees);
			}

			public function deleteNbIntervention($codeIntervention)
			{
				$requete ="delete from NbIntervention where codeIntervention = :codeIntervention;" ;
				$donnees = array(":codeIntervention"=>$codeIntervention);
				$select = $this->unPdo->prepare($requete);
				$select->execute($donnees);
			}
			public function selectNbIntervention()
			{
				$requete = "select codeIntervention , objet, codeClient, nomClient, nomTechncien,codeTechnicien from nbintervention;";
				$donnees = sprintf(array(":codeIntervention"=>$tab['codeIntervention'],":Objet"=>$tab['Objet'],":CodeClient"=>$tab['CodeClient'],":nomClient"=>$tab['nomClient'],":Nomtechnicien"=>$tab['Nomtechnicien'],":CodeTechnicien"=>$tab['CodeTechnicien']));
				$select = $this->unPdo->prepare ($requete);
				$select -> execute($donnees);

			}

		//gestion vue panier
		public function selectAllPaniers()
		{	
			$requete = "select * from panier;";
			$select = $this->unPdo->prepare($requete);
			$select -> execute();
			$lesPaniers = $select-> fetchAll();
			return $lesPaniers;
		}
		public function selectWherePanier($produit)
		{
		$requete = "select * from panier where produit = :produit ;";
		$donnees = array(":produit"=>$produit);
		$select = $this->unPdo->prepare($requete);
		$select->execute($donnees);
		}

		public function deletePanier($produit)
		{
			$requete ="delete from panier where produit = :produit;" ;
			$donnees = array(":produit"=>$produit);
			$select = $this->unPdo->prepare($requete);
			$select->execute($donnees);
		}
		// gestion vue stat

		public function selectAllStats()
		{	
			$requete = "select * from stat;";
			$select = $this->unPdo->prepare($requete);
			$select -> execute();
			$lesStats = $select-> fetchAll();
			return $lesStats;
		}
		public function selectWhereStat($code)
		{
		$requete = "select * from stat where code = :code ;";
		$donnees = array(":code"=>$code);
		$select = $this->unPdo->prepare($requete);
		$select->execute($donnees);
		}

		public function deleteStat($code)
		{
			$requete ="delete from stat where code = :code;" ;
			$donnees = array(":code"=>$code);
			$select = $this->unPdo->prepare($requete);
			$select->execute($donnees);
		}

		// Gestion des Rendez_vous//

		public function selectAllRdvs()
		{
			$requete = "select * from RDV;";
			$select = $this->unPdo->prepare($requete);
			$select ->execute();
			$lesRdvs = $select->fetchAll();
			return $lesRdvs;
		}

		public function insertRendez_vous($tab)
		{
		$requete = "insert into RDV  values(null, :Nom, :Prenom, :email, :adresse, :tel, :motif, :dateRdv);";
		$donnees =array(":Nom"=>$tab['Nom'], ":Prenom"=>$tab['Prenom'], ":email"=>$tab['email'], ":adresse"=>$tab['adresse'], ":telt"=>$tab['tel'], ":tel"=>$tab['motif'],":dateRdv"=>$tab['dateRdv']);
		$select = $this->unPdo->prepare($requete);
		$select->execute($donnees);

		}

}
?>