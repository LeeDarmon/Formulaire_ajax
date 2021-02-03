<?php

$validate_tab = array();
$validate_form = false;

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    $validate_nom =  'nom ok';
    $validate_tab[] = $validate_nom;
}

if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    $validate_prenom =  'prenom ok';
    $validate_tab[] = $validate_prenom;
}
if (isset($_POST['pays'])) {
    $pays = $_POST['pays'];
    $validate_pays =  'pays ok';
    $validate_tab[] = $validate_pays;
}
if (isset($_POST['date'])) {
    $date = $_POST['date'];
    echo 'ok';
}
if (isset($_POST['ville'])) {
    $ville = $_POST['ville'];
    $validate_ville =  'ville ok';
    $validate_tab[] = $validate_ville;
}
if (isset($_POST['adresse'])) {
    $adresse = $_POST['adresse'];
    $validate_adresse =  'adresse ok';
    $validate_tab[] = $validate_adresse;
}
if (isset($_POST['codepostal'])) {
    $codepostal = $_POST['codepostal'];
    $validate_codepostal =  'code postal ok';
    $validate_tab[] = $validate_codepostal;
}
if (isset($_POST['telephone'])) {
    $telephone = $_POST['telephone'];
    $validate_telephone =  'telephone ok';
    $validate_tab[] = $validate_telephone;
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $validate_email =  'email ok';
    $validate_tab[] = $validate_email;
}
if (isset($_POST['num'])) {
    $num = $_POST['num'];
    $validate_num =  'num ok';
    $validate_tab[] = $validate_num;
}
if (isset($_POST['hero'])) {
    $hero = $_POST['hero'];
    $validate_hero =  'hero ok';
    $validate_tab[] = $validate_hero;
}
if (isset($_POST['hack'])) {
    $hack = $_POST['hack'];
    $validate_hack =  'hack ok';
    $validate_tab[] = $validate_hack;
}
if (isset($_POST['experiences'])) {
    $experiences = $_POST['experiences'];
    $validate_exp =  'exp ok';
    $validate_tab[] = $validate_exp;
}
if (isset($_POST['nb_badge'])) {
    $nb_badge = $_POST['nb_badge'];
    $validate_nb_badge =  'badge ok';
    $validate_tab[] = $validate_nb_badge;
}
if (isset($_POST['lien'])) {
    $lien = $_POST['lien'];
    $validate_http =  'lien ok';
    $validate_tab[] = $validate_http;
}

if(count($validate_tab) == 14){
    $validate_form = true;
}