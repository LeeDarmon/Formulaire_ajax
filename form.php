<!DOCTYPE html>
    <html>
        <head>
            <title></title>
            <meta charset="UTF-8" />
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <link rel="stylesheet" href="asset/css/style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
        <div class="container">
        <form action="indexV2.php" method="POST" id="formulaire">

<h1 class="text-center display-3">Veuillez saisir vos informations</h1>


<section id="step1">
<div class="row">
<div class="col-12"><label class="mt-3" for="nom">Nom</label><input id="nom" class="form-control input-lg" type="text" name="nom" placeholder="nom" maxlength = "30"  value="<?php if (isset($nom)) {echo $nom; }?>" required></div>
<div class="col-12"><label class="mt-3" for="prenom">Prenom</label><input id="prenom" class="form-control input-lg" type="text" name="prenom" placeholder="prenom" maxlength = "30" value="<?php if (isset($nom)) {echo $prenom; }?>" required></div>
<button id="next_1" class="btn btn-success mt-3 mx-auto d-block">Suivant</button>
</div>
</section>

<section id="step2">
<div class="row">
<div class="col-12"><label class="mt-3" for="date_naissance">Date de naissance</label><input id="date" class="form-control input-lg"  type="date" name="date" placeholder="votre date de naissance" value="<?php if (isset($date_naissance)) {echo $date_naissance; }?>" required></div>
<div class="col-12"><label class="mt-3" for="pays_naissance">Pays de naissance</label><input  id="pays"   class="form-control input-lg" type="text" name="pays" placeholder="votre pays de naissance" value="<?php if (isset($pays_naissance)) {echo $pays_naissance; }?>" required></div>
<button id="next_2" class="btn btn-success mt-3 mx-auto d-block">Suivant</button>
</div>
</section>

<section id="step3">
<div class="row">
<div class="col-12"><label class="mt-3" for="adresse">Adresse</label><input id="adresse"   class="form-control input-lg" type="text" name="adresse" placeholder="votre adresse" value="<?php if (isset($adresse)) {echo $adresse; }?>" required></div>
<div class="col-12"><label class="mt-3" for="codepostal">Codepostal</label><input  id="codepostal"  class="form-control input-lg" type="text" name="codepostal" placeholder="votre code postal" maxlength="5" value="<?php if (isset($codepostal)) {echo $codepostal; }?>" required></div>
<div class="col-12"><label class="mt-3" for="ville">Ville</label><input  id="ville"  class="form-control input-lg" type="text" name="ville" placeholder="votre ville" value="<?php if (isset($ville)) {echo $ville; }?>"required></div>
<button id="next_3" class="btn btn-success mt-3 mx-auto d-block">Suivant</button>
</div>
</section>

<section id="step4">
<div class="row">
<div class="col-12"><label class="mt-3" for="email">Email</label><input id="email"   class="form-control input-lg" type="email" name="email" placeholder="votre email" value="<?php if (isset($email)) {echo $email; }?>" required></div>
<div class="col-12"><label class="mt-3" for="telephone">Telephone</label><input  id="telephone"  class="form-control input-lg" type="tel" name="telephone" placeholder="votre telephone" value="<?php if (isset($telephone)) {echo $telephone; }?>" required></div>
<button id="next_4" class="btn btn-success mt-3 mx-auto d-block">Suivant</button>
</div>
</section>

<section id="step5">
<div class="row">
<div class="col-12"><label class="mt-3" for="num">Numéros pôle emploi</label><input id="num"  class="form-control input-lg" type="tel" name="num" placeholder="votre numéros pôle emploi" value="<?php if (isset($num)) {echo $num; }?>" required></div>
<div class="col-12"><label class="mt-3" for="nb_badge">Nombre de badge</label><input  id="nb_badge"  class="form-control input-lg" type="tel" name="nb_badge" placeholder="votre nombre de badge" value="<?php if (isset($nb_badge)) {echo $nb_badge; }?>" required></div>
<div class="col-12"><label class="mt-3" for="lien">Votre lien codacademy</label><input  id="lien"  class="form-control input-lg"  type="text" name="lien" placeholder="votre lien codeacademy" value="<?php if (isset($lien)) {echo $lien; }?>" required></div>
<div class="col-12"><label class="mt-3" for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label><input id="hero"  class="form-control input-lg"  type="text" name="hero" placeholder="votre héros" value="<?php if (isset($hero)) {echo $hero; }?>" required></div>
<div class="col-12"><label class="mt-3" for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label><input  id="hack"   class="form-control input-lg" type="text" name="hack" placeholder="votre hack" value="<?php if (isset($hack)) {echo $hack; }?>" required></div>
<div class="col-12"><label class="mt-3" for="experiences">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><input id="experiences"  class="form-control input-lg" name="experiences" placeholder="votre experience" value="<?php if (isset($experiences)) {echo $experiences;}?>" required></div>

<div class="col-12 text-center">
<input class="mt-5 mb-5 btn btn-primary btn-lg"  type="submit" value="Envoyer" id="submit">
</div>
</section>

</form>

        </div>
        </body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="asset/js/validate.js"></script>
        <script src="asset/js/ajax_POST.js"></script>
</html>