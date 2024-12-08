<?php

$idProf = $_GET['idProf'];

include('model/profModel.php');
include('bdd/bdd.php');

$prof = new Prof($bdd);
$detailProf = $prof->getProfById($idProf);

//var_dump($detailProf);
//die();
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">matiere</th>
            <th scope="col">salle</th>
            <th scope="col">Supprimer</th>



        </tr>

    </thead>

    <tbody>
        <tr>
            <th scope="row"><?php echo $detailProf['ID_Prof']; ?></th>
            <td><?php echo $detailProf['Nom']; ?></td>
            <td><?php echo $detailProf['Prenom']; ?></td>
            <td><?php echo $detailProf['Matiere']; ?></td>
            <td><?php echo $detailProf['Salle']; ?></td>
            <td>
                <form action="controller/ProfController.php" method="POST">
                    <input type="hidden" name="action" value="supprimer">
                    <input type="hidden" name="idEleve" value="<?php echo $detailProf['ID_Prof']; ?>">
                    <input type="submit" value="supprimer" />
                </form>
            </td>

        </tr>
    </tbody>
</table>