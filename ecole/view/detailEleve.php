<?php

$idEleve = $_GET['idEleve'];

include('model/utilisateurModel.php');
include('bdd/bdd.php');

$utilisateur = new Utilisateur($bdd);
$detailUtilisateur = $utilisateur->getUtilisateurById($idEleve);
//var_dump($detailUtilisateur);
//die();
?>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">email</th>
            <th scope="col">Supprimer</th>



        </tr>

    </thead>

    <tbody>
        <tr>
            <th scope="row"><?php echo $detailUtilisateur['ID_Utilisateur']; ?></th>
            <td><?php echo $detailUtilisateur['Nom']; ?></td>
            <td><?php echo $detailUtilisateur['Prenom']; ?></td>
            <td><?php echo $detailUtilisateur['Email']; ?></td>
            <td>
                <form action="controller/utilisateurController.php" method="POST">
                    <input type="hidden" name="action" value="supprimer">
                    <input type="hidden" name="idEleve" value="<?php echo $detailUtilisateur['ID_Utilisateur']; ?>">
                    <input type="submit" value="supprimer" />
                </form>
            </td>

        </tr>
    </tbody>
</table>