<?php

include('./controller/selectAllProf.php');

?>




<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">matiere</th>
            <th scope="col">salle</th>
            <th scope="col">action</th>


        </tr>

    </thead>

    <tbody>
        <?php foreach ($allProfs as $value) {  ?>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $value['Nom']; ?></td>
                <td><?php echo $value['Prenom']; ?></td>
                <td><?php echo $value['Matiere']; ?></td>
                <td><?php echo $value['Salle']; ?></td>
                <td><a href="index.php?page=detailProf&idProf=<?php echo $value['ID_Prof']; ?>">detail</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>


</body>

</html>