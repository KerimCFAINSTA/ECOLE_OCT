<?php

include('./controller/selectAllUtilisateur.php');

?>




<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">email</th>
      <th scope="col">action</th>


    </tr>

  </thead>

  <tbody>
    <?php foreach ($allUtilisateurs as $value) {  ?>
      <tr>
        <th scope="row">1</th>
        <td><?php echo $value['Nom']; ?></td>
        <td><?php echo $value['Prenom']; ?></td>
        <td><?php echo $value['Email']; ?></td>
        <td><a href="index.php?page=detailEleve&idEleve=<?php echo $value['ID_Utilisateur']; ?>">detail</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>


</body>

</html>