<?php
include('../model/utilisateurModel.php');
include('../bdd/bdd.php');

if (isset($_POST['action'])) {


	$utilisateurController = new UtilisateurController($bdd);

	switch ($_POST['action']) {

		case 'ajouter':
			$utilisateurController->create();
			break;


		case 'supprimer':
			$utilisateurController->delete();
			break;

		default:
			# code...
			break;
	}
}


class UtilisateurController
{
	private $utilisateur;

	function __construct($bdd)
	{
		$this->utilisateur = new Utilisateur($bdd);
	}

	public function create()
	{

		//verif

		$npmhash = password_hash($_POST['nom'], PASSWORD_DEFAULT);

		$this->utilisateur->ajouterUtilisateur($_POST['nom'], $_POST['prenom'], $_POST['email']);

		//redirection 
		header('Location:http://127.0.0.1/ecole/');
	}

	public function delete()
	{


		$this->utilisateur->supprimerUtilisateur($_POST['idEleve']);
		header('Location:http://localhost/promo284-2025/ecole10oct/ecole/index.php?page=Alleleve');
	}
}
