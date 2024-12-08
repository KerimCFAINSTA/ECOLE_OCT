<form action="controller/utilisateurController.php" method="POST">

    nom : <input type="text" name="nom">
    prenom : <input type="text" name="prenom">
    email : <input type="email" name="email">
    <input type="hidden" name="action" value="ajouter">
    <input type="submit" value="valider">

</form>
<form action="controller/profController.php" method="POST">

    nom : <input type="text" name="nom">
    prenom : <input type="text" name="prenom">
    matiere : <input type="matiere" name="matiere">
    salle : <input type="number" name="salle">
    <input type="hidden" name="action" value="ajouter">
    <input type="submit" value="valider">

</form>