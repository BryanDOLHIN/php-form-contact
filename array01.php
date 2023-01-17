<?php
    $etudiants = array ( 'Vincent', 'Romain', 'Alexandre');

print($etudiants[0].PHP_EOL);
print($etudiants[1].PHP_EOL);
print($etudiants[2].PHP_EOL);

$etudiants2 = ['Arthur', 'Bryan', 'Evan'];

print($etudiants2[0].PHP_EOL);
print($etudiants2[1].PHP_EOL);
print($etudiants2[2].PHP_EOL);

$etudiant = array ('prenom' => 'Vincent'
                , 'nom' => 'MAZURAIS'   
                , 'email' => 'vincent.mazurais@ik.me');

print($etudiant['prenom'].PHP_EOL);
print($etudiant['nom'].PHP_EOL);
print($etudiant['email'].PHP_EOL);

$etudiant2 =  ['prenom' => 'Alexandre'
                , 'nom' => 'PAIN'   
                , 'email' => 'alexandre.pain@ik.me',];

print($etudiant2['prenom'].PHP_EOL);
print($etudiant2['nom'].PHP_EOL);
print($etudiant2['email'].PHP_EOL);