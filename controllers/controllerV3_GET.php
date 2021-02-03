<?php

$pattern_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$pattern_name = "/^[a-zA-Z-' ]*$/";
$pattern_postal = "/[0-9]{5}/";
$pattern_telephone = "/^(\+33|0033|0)(6|7)[0-9]{8}$/";
$pattern_lien = "#(https?://)([\w\d.&:\#@%/;$~_?\+-=]*)#";
$pattern_textarea = "/^[\w \-]+$/";
$pattern_int = "/^([0-9]+)$/";

// boolean verification regex
$validate_first_name = false;
$validate_last_name = false;
$validate_email = false;
$validate_codepostal = false;
$validate_telephone = false;
$validate_http = false;
$validate_hero = false;
$validate_hack = false;
$validate_exp = false;
$validate_num = false;
$validate_nb_badge = false;
$validate_pays = false;
$validate_ville = false;
$validate_adress = false;
$validate_form = false;
$affichage_error =  false;

$validate = array();

//nom
if(isset($_GET['nom'])){
    $nom = $_GET['nom'];
    if(preg_match($pattern_name, $_GET['nom'])){
        echo 'ok';
        $validate_first_name =  true;
        }
        else{
            echo 'pas ok';
            $error_nom = 'erreur nom';
            $validate[] = $error_nom;
        }
}

//prenom
if(isset($_GET['prenom'])){
    $prenom = $_GET['prenom'];
if(preg_match($pattern_name, $_GET['prenom'])){
    echo 'ok';
    $validate_last_name = true;
}
else{
    echo 'pas ok';
    $error_prenom = 'erreur prenom';
    $validate[] = $error_prenom;
    
}
}

if(isset($_GET['date'])){
    $date_naissance = $_GET['date'];
    echo 'ok';
}

//pays
if(isset($_GET['pays'])){
    $pays_naissance = $_GET['pays'];
if(preg_match($pattern_name, $_GET['pays'])){
    $validate_pays =  true;
    echo 'ok';
}
else{
    echo 'pas ok';
    $error_pays = 'erreur pays';
    $validate[] = $error_pays;

}
}

//ville
if(isset($_GET['ville'])){
    $ville = $_GET['ville'];
if(preg_match($pattern_name,$_GET['ville'])){
    $validate_ville =  true;
    echo 'ok';
}
else{
echo 'pas ok';
$error_ville = 'erreur ville';
$validate[] = $error_ville;
}
}

//adresse
if(isset($_GET['adresse'])){
    $adresse = $_GET['adresse'];
if(preg_match($pattern_textarea,$_GET['adresse'])){
    $validate_adress =  true;
    echo 'ok';
}
else{
    echo 'pas ok';
    $error_adresse = 'erreur adresse';
    $validate[] = $error_adresse;
}
}



//codepostal
if(isset($_GET['codepostal'])){
    $codepostal = $_GET['codepostal'];
if(preg_match($pattern_postal,$_GET['codepostal'])){
    $validate_codepostal =  true;
    echo 'ok';
}
else{
    echo 'pas ok';
    $error_codepostal = 'erreur code postal';
    $validate[] = $error_codepostal;
}
}

//telephone
if(isset($_GET['telephone'])){
    $telephone = $_GET['telephone'];
if(preg_match($pattern_telephone,$_GET['telephone'])){
    $validate_telephone =  true;
    echo 'ok';
}
else{
    echo 'pas ok';
    $error_tel = 'erreur tel';
    $validate[] = $error_tel;
}
}

//email
if(isset($_GET['email'])){
    $email = $_GET['email'];
    if(preg_match($pattern_email,$_GET['email'])){
        $validate_email =  true;
        echo 'ok';
   }
   else{
    echo 'pas ok';
    $error_mail = 'erreur mail';
    $validate[] = $error_mail;
   }
   
}



//numero pole emploi
if(isset($_GET['num'])){
    $num = $_GET['num'];
if(preg_match($pattern_int, $_GET['num'])){
    $validate_num =  true;
    echo 'ok';
}
else{
    echo 'pas ok';
    $error_num= 'erreur num';
    $validate[] = $error_num;
}
}

//nombre de badge
if(isset($_GET['nb_badge'])){
    $nb_badge = $_GET['nb_badge'];
if(preg_match($pattern_int, $_GET['nb_badge'])){
    $validate_nb_badge =  true;
    echo 'ok';
}
else{
    echo 'pas ok';
    $error_badge = 'erreur badge';
    $validate[] = $error_badge;
}
}

//lien codacademy
if(isset($_GET['lien'])){
    $lien = $_GET['lien'];
if(preg_match($pattern_lien,$_GET['lien'])){
    $validate_http =  true;
    echo 'ok';

}
else{
    echo 'pas ok';
    $error_lien= 'erreur lien';
    $validate[] = $error_lien;
}
}

//hero
if(isset($_GET['hero'])){
    $hero = $_GET['hero'];
if(preg_match($pattern_name,$_GET['hero'])){
    $validate_hero =  true;
    echo 'ok';
}
else{
    echo 'pas ok';
    $error_hero = 'erreur hero';
    $validate[] = $error_hero;
}
}

//hack
if(isset($_GET['hack'])){
    $hack = $_GET['hack'];
if(preg_match($pattern_textarea, $_GET['hack'])){
    $validate_hack =  true;
    echo 'ok';
}
else{
    
    echo 'pas ok';
    $error_hack = 'erreur hack';
    $validate[] = $error_hack;
}
}

//experiences
if(isset($_GET['experiences'])){
    $experiences = $_GET['experiences'];
if(preg_match($pattern_textarea, $_GET['experiences'])){
    $validate_exp =  true;
    echo 'ok';
}
else{
  
    echo 'pas ok';
    $error_exp = 'erreur exp';
    $validate[] = $error_exp;

}
}


//formulaire entier
if($validate_first_name ==  true && $validate_last_name == true && $validate_pays == true &&$validate_codepostal ==  true && $validate_telephone == true && $validate_email ==  true&& $validate_hero == true && $validate_exp == true && $validate_hack == true && $validate_num ==  true && $validate_nb_badge == true && $validate_pays ==  true && $validate_ville == true && $validate_adress ==  true  && $validate_http == true){
    $validate_form =  true; 
}


else{
    $validate_form =  false;
    $affichage_error =  true;
}




?>