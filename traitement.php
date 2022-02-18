<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$naissance = $_POST ['naissance'];
print("<center>Bonjour $prenom $nom $naissance </center>");

if ($naissance < 2004-01-01){
    echo header("Location: https://www.amazon.fr/");
} else header("Location: https://www.youtube.com/watch?v=jhUncZn49EM");


?> 