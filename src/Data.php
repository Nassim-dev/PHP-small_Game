<?php

$servname = 'localhost:8080';
$bddname = 'pdodb';
$user = 'root';
$pass = 'example';

try{
    $bdd = new PDO("mysql:host=$servname;dbname=$bddname", $user, $pass);
}

catch(Exception $expt){
    die("Error :".$expt->getMessage());
}

$requête_sql = "CREATE TABLE 'Character'(
    Id INT unsigned AUTO_INCREMENT PRIMARY KEY,
    'Name' VARCHAR(30) NOT NULL,
    'Hp' INT unsigned NOT NULL DEFAULT '100',
    'Atk' INT unsigned NOT NULL,
    'Def' INT unsigned NOT NULL,
    ";


                