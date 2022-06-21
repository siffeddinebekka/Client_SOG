<?php 
	require_once("modele/modele.sog.php");

	class Controleur
	{
		private $unModele;

		public function __construct()
		{
			$this->unModele = new Modele();
		}
		public function selectAllClients()
		{
			$lesClients = $this->unModele->selectAllClients();

			return $lesClients;
		}
		public function insertClient($tab)
		{
			$this->unModele->insertClient($tab);
		}
		public function deleteClient($codec)
		{
			$this->unModele->deleteClient($codec);
		}
		public function selectWhereClient($codec)
		{
			$this->unModele->selectWhereClient($codec);
		}

		///////////////////Technicien/////////////////

		public function selectAllTechniciens()
		{
			$lesTechniciens = $this->unModele->selectAllTechniciens();

			return $lesTechniciens;
		}
		public function insertTechnicien($tab)
		{
			$this->unModele->insertTechnicien($tab);
		}
		public function deleteTechnicien($codet)
		{
			$this->unModele->deleteTechnicien($codet);
		}


		//////////Intervention///////////////////////
		public function selectAllIntervention()
		{
			$lesInterventions = $this->unModele->selectAllIntervention();

			return $lesInterventions;
		}
		public function insertIntervention($tab)
		{
			$this->unModele->insertIntervention($tab);
		}
		public function deleteIntervention($codei)
		{
			$this->unModele->deleteIntervention($codei);
		}


		//Gestion des Users//
		public function selectAllUsers()
		{
			$lesUsers = $this->unModele->selectAllUsers();

			return $lesUsers;
		}
		public function deleteUsers($id)
		{
			$this->unModele->deleteUsers($id);
		}
		public function selectWhereUsers($id)
		{
			$this->unModele->selectWhereUsers($id);
		}

		
		// Gestion vue NbIntervention//
		public function selectAllNbInterventions()
		{
			$lesNbInterventions = $this->unModele->selectAllNbInterventions();

			return $lesNbInterventions;
		}
		
		public function deleteNbIntervention($codeIntervention)
		{
			$this->unModele->deleteTechnicien($codeIntervention);
		}
		public function selectWhereNbIntertervention($codeIntervention)
		{
			$this->unModele->selectWhereNbIntertervention($codeIntervention);
		}


		//Gestion vue Panier//

			public function selectAllPaniers()
		{
			$lesPaniers = $this->unModele->selectAllPaniers();

			return $lesPaniers;
		}
		
		public function deletePanier($produit)
		{
			$this->unModele->deleteTechnicien($produit);
		}
		public function selectWherePanier($produit)
		{
			$this->unModele->selectWherePanier($produit);
		}

		//Gestion vue Stats//

			public function selectAllStats()
		{
			$lesStats = $this->unModele->selectAllStats();

			return $lesStats;
		}
		
		public function deleteStat($code)
		{
			$this->unModele->deleteStat($code);
		}
		public function selectWhereStat($code)
		{
			$this->unModele->selectWhereStat($code);
		}


		// Gestion des Rendez_vous

		public function insertRendez_vous($tab)
		{
			$this->unModele->insertRendez_vous($tab);
		}
		public function selectAllRdvs()
		{
			$lesRendezvous = $this->unModele->selectAllRdvs();

			return $lesRendezvous;
		}


	}
?>