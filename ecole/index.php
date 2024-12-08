<?php
include('view/commun/header.php');

//system de routing 

$page = isset($_GET['page']) ? $_GET['page'] : 'acceuil';

switch ($page) {
    case 'Alleleve':
        include('view/eleve.php');
        break;

    case 'detailEleve':
        include('view/detailEleve.php');
        break;

    default:
        include('view/accueil.php');
        break;

    case 'ALLprof':
        include('view/prof.php');
        break;

    case 'detailProf':
        include('view/detailProf.php');
        break;
}

include('view/commun/footer.php');
