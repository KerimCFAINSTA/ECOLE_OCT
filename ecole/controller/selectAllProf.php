<?php

include('./model/ProfModel.php');
include('./bdd/bdd.php');


$Prof = new Prof($bdd);
$allProfs = $Prof->allProf();

//var_dump($allProfs);
//die();
