<?php

//CRUD

class Prof
{
    private $bdd; // Déclarez la propriété ici

    function __construct($bdd)
    {
        $this->bdd = $bdd;
    }


    public function ajouterProf($nom, $prenom, $matiere, $salle)
    {
        $req = $this->bdd->prepare("INSERT INTO profs (Nom, Prenom, Matiere, Salle) VALUES (:nom , :prenom, :matiere, :salle)");
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenom', $prenom);
        $req->bindParam(':matiere', $matiere);
        $req->bindParam(':salle', $salle);

        return $req->execute();
    }



    public function allProf()
    {
        $req = $this->bdd->prepare("SELECT * FROM profs");
        $req->execute();
        return $req->fetchAll();
    }

    public function supprimerProf($id)
    {

        $req = $this->bdd->prepare("DELETE FROM profs WHERE ID_Prof = ?");
        return $req->execute([$id]);
    }

    public function updateProf($nom, $prenom, $matiere, $salle, $id)
    {
        $stmt = $this->bdd->prepare("UPDATE profs SET nom = :nom, prenom = :prenom, matiere = :matiere, salle = :salle WHERE ID_Prof = :id");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':matiere', $matiere);
        $stmt->bindParam(':salle', $salle);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function getProfById($id)
    {
        $stmt = $this->bdd->prepare('SELECT * FROM profs WHERE ID_Prof = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
