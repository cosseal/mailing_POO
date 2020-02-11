<?php
include"mailing.php";

$from="anneliesecosse@gmail.com";
$CC=[""];
$to=["yoyo@me.be"];
$objet ="bienvenue";
$contenu = "Bonjour yoyo";
$pj = "";

$email = new mailing ($from, $CC, $to, $objet,$contenu,$pj);


if(filter_var($email,FILTER_VALIDATE_EMAIL)){
$email->sendmail();}

