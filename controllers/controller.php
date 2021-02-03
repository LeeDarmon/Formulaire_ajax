<?php

if(!empty($_POST)){


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naissance = $_POST['date_naissance'];
$pays_naissance = $_POST['pays_naissance'];
$adresse = $_POST['adresse'];
$codepostal = $_POST['codepostal'];
$ville = $_POST['ville'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$num = $_POST['num'];
$nb_badge = $_POST['nb_badge'];
$lien = $_POST['lien'];
$hero = $_POST['hero'];
$hack = $_POST['hack'];
$experiences = $_POST['experiences'];
$error_tab = array();

//boolean verification regex
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

//regex des inputs//
$pattern_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$pattern_name = "/^[a-zA-Z-' ]*$/";
$pattern_postal = "/[0-9]{5}/";
$pattern_telephone = "/^(\+33|0033|0)(6|7)[0-9]{8}$/";
$pattern_lien = "#(https?://)([\w\d.&:\#@%/;$~_?\+-=]*)#";
$pattern_textarea = "/^[\w \-]+$/";
$pattern_int = "/^([0-9]+)$/";

//verifications
//nom
if(preg_match($pattern_name, $nom)){
    echo "nom valide";
    echo ("<br>");
    $validate_first_name =  true;
}
else{
    $error_name = 'il y a une erreur sur votre nom';
    $error_tab[] = $error_name;

    echo "nom invalide";
    echo ("<br>");
}

//prenom
if(preg_match($pattern_name, $prenom)){
    echo "prenom valide";
    echo ("<br>");
    $validate_last_name =  true;
}
else{
    $error_name = 'il y a une erreur sur votre prenom';
    $error_tab[] = $error_name;
    echo "prenom invalide";
    echo ("<br>");
}

//pays
if(preg_match($pattern_name, $pays_naissance)){
    echo "pays valide";
    echo ("<br>");
    $validate_pays =  true;
}
else{
    $error_name = 'il y a une erreur sur votre pays';
    $error_tab[] = $error_name;
    echo "pays invalide";
    echo ("<br>");
}

//ville
if(preg_match($pattern_name,$ville)){
    echo "ville valide";
    echo ("<br>");
    $validate_ville = true;
}
else{
    $error_name = 'il y a une erreur sur votre ville';
    $error_tab[] = $error_name;
    echo "ville invalide";
    echo ("<br>");
}

//adresse
if(preg_match($pattern_textarea,$adresse)){
    echo "adress valide";
    echo ("<br>");
    $validate_adress = true;
}
else{
    $error_name = 'il y a une erreur sur votre adresse';
    $error_tab[] = $error_name;
    echo "adress invalide";
    echo ("<br>");
}


//codepostal
if(preg_match($pattern_postal,$codepostal)){
    echo "codepostal valide";
    echo ("<br>");
    $validate_codepostal = true;
}
else{
    $error_name = 'il y a une erreur sur votre code postal';
    $error_tab[] = $error_name;
    echo "codepostal invalide";
    echo ("<br>");
}

//telephone
if(preg_match($pattern_telephone,$telephone)){
    echo "telephone valide";
    echo ("<br>");
    $validate_telephone = true;
}
else{
    $error_name = 'il y a une erreur sur votre telephone';
    $error_tab[] = $error_name;
    echo "telephone invalide";
    echo ("<br>");
}

//email - double verifications
if(preg_match($pattern_email, $email)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "email valide";
        echo ("<br>");
        $validate_email = true;
   }
   else{
    $error_name = 'il y a une erreur sur votre email';
    $error_tab[] = $error_name;
    echo "email invalide";
    echo ("<br>");
   }
   
}
else{
    $error_name = 'il y a une erreur sur votre email';
    $error_tab[] = $error_name;
    echo "email invalide";
    echo ("<br>");
}

//numero pole emploi
if(preg_match($pattern_int, $num)){
    echo "num valide";
    echo ("<br>");
    $validate_num =  true;
}
else{
    $error_name = 'il y a une erreur sur votre numero pole emploi';
    $error_tab[] = $error_name;
    echo "num invalide";
    echo ("<br>");
}

//nombre de badge
if(preg_match($pattern_int, $nb_badge)){
    echo "nb_badge valide";
    echo ("<br>");
    $validate_nb_badge =  true;
}
else{
    $error_name = 'il y a une erreur sur votre nombre de badge';
    $error_tab[] = $error_name;
    echo "nb_badge invalide";
    echo ("<br>");
}

//lien codacademy
if(preg_match($pattern_lien,$lien)){
    echo "lien valide";
    echo ("<br>");
    $validate_http =  true;
}
else{
    $error_name = 'il y a une erreur sur votre lien';
    $error_tab[] = $error_name;
    echo "lien invalide";
    echo ("<br>");
}

//hero
if(preg_match($pattern_name,$hero)){
    echo "hero valide";
    echo ("<br>");
    $validate_hero = true;
}
else{
    $error_name = 'il y a une erreur sur votre hero';
    $error_tab[] = $error_name;
    echo "hero invalide";
    echo ("<br>");
}

//hack
if(preg_match($pattern_textarea, $hack)){
    echo "hack valide";
    echo ("<br>");
    $validate_hack = true;
}
else{
    $error_name = 'il y a une erreur sur votre daily hack';
    $error_tab[] = $error_name;
    echo "hack invalide";
    echo ("<br>");
}

//experiences
if(preg_match($pattern_textarea, $experiences)){
    echo "experiences valide";
    echo ("<br>");
    $validate_exp = true;
}
else{
    $error_name = 'il y a une erreur sur votre experience';
    $error_tab[] = $error_name;
    echo "experiences invalide";
    echo ("<br>");
}

//formulaire entier
if($validate_first_name ==  true && $validate_last_name == true && $validate_pays == true &&$validate_codepostal ==  true && $validate_telephone == true && $validate_email ==  true&& $validate_hero == true && $validate_exp == true && $validate_hack == true && $validate_num ==  true && $validate_nb_badge == true && $validate_pays ==  true && $validate_ville == true && $validate_adress ==  true  && $validate_http == true){
    echo "formulaire validé";

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="container">

    <div class="row text-center">
        <div class="col-6 alert-info border border-white">Nom : <?php echo $nom ;?></div>
        <div class="col-6 alert-info border border-white">Prenom : <?php echo $prenom ;?></div>
        <div class="col-6 alert-info border border-white">Ville de naissance : <?php echo $pays_naissance ;?></div>
        <div class="col-6 alert-info border border-white">Date de naissance : <?php echo $date_naissance ;?></div>
        <div class="col-4 alert-info border border-white">Adresse : <?php echo $adresse ;?></div>
        <div class="col-4 alert-info border border-white">Ville : <?php echo $ville ;?></div>
        <div class="col-4 alert-info border border-white">Code postal : <?php echo $codepostal ;?></div>
        <div class="col-6 alert-info border border-white">Telephone : <?php echo $telephone ;?></div>
        <div class="col-6 alert-info border border-white">Email : <?php echo $email ;?></div>
        <div class="col-6 alert-info border border-white">Numeros pole emploi : <?php echo $num ;?></div>
        <div class="col-6 alert-info border border-white">Nombre de badge : <?php echo $nb_badge ;?></div>
        <div class="col-12 alert-info border border-white">Lien codacademy : <?php echo $lien ;?></div>
        <div class="col-12 alert-info border border-white">Votre héros préféré : <?php echo $hero ;?></div>
        <div class="col-12 alert-info border border-white">Vos daily hack : <?php echo $hack ;?></div>
        <div class="col-12 alert-info border border-white">Vos experiences : <?php echo $experiences ;?></div>
    </div>

    </div>
    </body>
    </html>


    <?php
    



}
else { ?>

<!DOCTYPE html>
    <html>
        <head>
            <title></title>
            <meta charset="UTF-8" />
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
        <div class="container">
        <form action="index.php" method="POST">

<h1 class="text-center display-3">Veuillez saisir vos informations</h1>

<div class="row">
<div class="col-6"><label class="mt-3" for="nom">Nom</label><input class="form-control input-lg"  type="text" name="nom" placeholder="nom" maxlength = "30"  value="<?php if (isset($nom)) {echo $nom; }?>" required></div>
<div class="col-6"><label class="mt-3" for="prenom">Prenom</label><input class="form-control input-lg"  type="text" name="prenom" placeholder="prenom" maxlength = "30" value="<?php if (isset($nom)) {echo $prenom; }?>" required></div>
</div>

<div class="row">
<div class="col-6"><label class="mt-3" for="date_naissance">Date de naissance</label><input class="form-control input-lg"  type="date" name="date_naissance" placeholder="votre date de naissance" value="<?php if (isset($date_naissance)) {echo $date_naissance; }?>" required></div>
<div class="col-6"><label class="mt-3" for="pays_naissance">Pays de naissance</label><input class="form-control input-lg"  type="text" name="pays_naissance" placeholder="votre pays de naissance" value="<?php if (isset($pays_naissance)) {echo $pays_naissance; }?>" required></div>
</div>

<div class="row">
<div class="col-7"><label class="mt-3" for="adresse">Adresse</label><input class="form-control input-lg"  type="text" name="adresse" placeholder="votre adresse" value="<?php if (isset($adresse)) {echo $adresse; }?>" required></div>
<div class="col-2"><label class="mt-3" for="codepostal">Codepostal</label><input class="form-control input-lg"  type="text" name="codepostal" placeholder="votre code postal" maxlength="5" value="<?php if (isset($codepostal)) {echo $codepostal; }?>" required></div>
<div class="col-3"><label class="mt-3" for="ville">Ville</label><input class="form-control input-lg"  type="text" name="ville" placeholder="votre ville" value="<?php if (isset($ville)) {echo $ville; }?>"required></div>
</div>

<div class="row">
<div class="col-6"><label class="mt-3" for="email">Email</label><input class="form-control input-lg"  type="email" name="email" placeholder="votre email" value="<?php if (isset($email)) {echo $email; }?>" required></div>
<div class="col-6"><label class="mt-3" for="telephone">Telephone</label><input class="form-control input-lg"  type="tel" name="telephone" placeholder="votre telephone" value="<?php if (isset($telephone)) {echo $telephone; }?>" required></div>
</div>

<div class="col-12"><label class="mt-3" for="num">Numéros pôle emploi</label><input class="form-control input-lg"  type="tel" name="num" placeholder="votre numéros pôle emploi" value="<?php if (isset($num)) {echo $num; }?>" required></div>
<div class="col-12"><label class="mt-3" for="nb_badge">Nombre de badge</label><input class="form-control input-lg"  type="tel" name="nb_badge" placeholder="votre nombre de badge" value="<?php if (isset($nb_badge)) {echo $nb_badge; }?>" required></div>
<div class="col-12"><label class="mt-3" for="lien">Votre lien codacademy</label><input class="form-control input-lg"  type="text" name="lien" placeholder="votre lien codeacademy" value="<?php if (isset($lien)) {echo $lien; }?>" required></div>
<div class="col-12"><label class="mt-3" for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label><input class="form-control input-lg"  type="text" name="hero" placeholder="votre héros" value="<?php if (isset($hero)) {echo $hero; }?>" required></div>
<div class="col-12"><label class="mt-3" for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label><input class="form-control input-lg"  type="text" name="hack" placeholder="votre hack" value="<?php if (isset($hack)) {echo $hack; }?>" required></div>
<div class="col-12"><label class="mt-3" for="experiences">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><textarea class="form-control input-lg" name="experiences" placeholder="votre experience" value="" required><?php if (isset($experiences)) {echo $experiences; }?></textarea></div>

<div class="col-12 text-center">
<input class="mt-5 mb-5 btn btn-primary btn-lg"  type="submit" value="Envoyer">
</div>

</form>

<div class="col-12 text-center text-danger">
<?php 
for ($i = 0;$i<count($error_tab);$i++){
echo $error_tab[$i];
echo("<br>");
}
?>
</div>
        
    
        </div>
    
    
        </body>
    </html>




<?php
   
}

}

else {?>
  <!DOCTYPE html>
    <html>
        <head>
            <title></title>
            <meta charset="UTF-8" />
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
        <div class="container">
        <form action="index.php" method="POST">
    
        <h1 class="text-center display-3">Veuillez saisir vos informations</h1>
    
        <div class="row">
        <div class="col-12 col-md-6"><label class="mt-3" for="nom">Nom</label><input class="form-control input-lg"  type="text" name="nom" placeholder="nom" maxlength = "30" required></div>
        <div class="col-12 col-md-6"><label class="mt-3" for="prenom">Prenom</label><input class="form-control input-lg"  type="text" name="prenom" placeholder="prenom" maxlength = "30" required></div>
        </div>
    
        <div class="row">
        <div class="col-12 col-md-6"><label class="mt-3" for="date_naissance">Date de naissance</label><input class="form-control input-lg"  type="date" name="date_naissance" placeholder="votre date de naissance"  required></div>
        <div class="col-12 col-md-6"><label class="mt-3" for="pays_naissance">Pays de naissance</label><input class="form-control input-lg"  type="text" name="pays_naissance" placeholder="votre pays de naissance"  required></div>
        </div>
    
        <div class="row">
        <div class="col-12 col-md-7"><label class="mt-3" for="adresse">Adresse</label><input class="form-control input-lg"  type="text" name="adresse" placeholder="votre adresse"  required></div>
        <div class="col-12 col-md-2"><label class="mt-3" for="codepostal">Codepostal</label><input class="form-control input-lg"  type="text" name="codepostal" placeholder="votre code postal" maxlength="5"  required></div>
        <div class="col-12 col-md-3"><label class="mt-3" for="ville">Ville</label><input class="form-control input-lg"  type="text" name="ville" placeholder="votre ville" required></div>
        </div>
    
        <div class="row">
        <div class="col-12 col-md-6"><label class="mt-3" for="email">Email</label><input class="form-control input-lg"  type="email" name="email" placeholder="votre email"  required></div>
        <div class="col-12 col-md-6"><label class="mt-3" for="telephone">Telephone</label><input class="form-control input-lg"  type="tel" name="telephone" placeholder="votre telephone"  required></div>
        </div>
    
        <div class="col-12"><label class="mt-3" for="num">Numéros pôle emploi</label><input class="form-control input-lg"  type="tel" name="num" placeholder="votre numéros pôle emploi" required></div>
        <div class="col-12"><label class="mt-3" for="nb_badge">Nombre de badge</label><input class="form-control input-lg"  type="tel" name="nb_badge" placeholder="votre nombre de badge"  required></div>
        <div class="col-12"><label class="mt-3" for="lien">Votre lien codacademy</label><input class="form-control input-lg"  type="text" name="lien" placeholder="votre lien codeacademy"  required></div>
        <div class="col-12"><label class="mt-3" for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label><input class="form-control input-lg"  type="text" name="hero" placeholder="votre héros"  required></div>
        <div class="col-12"><label class="mt-3" for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label><input class="form-control input-lg"  type="text" name="hack" placeholder="votre hack"  required></div>
        <div class="col-12"><label class="mt-3" for="experiences">Avez vous déjà eu une expérience avec la programmation et/ou l informatique avant de remplir ce formulaire ?</label><textarea class="form-control input-lg" name="experiences" placeholder="votre experience" required></textarea></div>
    
        <div class="col-12 text-center">
        <input class="mt-5 mb-5 btn btn-primary btn-lg"  type="submit" value="Envoyer">
        </div>
    
        </form>
        
    
        </div>
    
    
        </body>
    </html>

    <?php
}


?>