<!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="asset/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="body_result">
    <div class="container">

    <div class="row text-center nice-border">
        <div class="col-6 offset-3 image-block"><img src="https://www.villa-thermae.fr/wp-content/uploads/2017/04/profile-icon-9.png" class="img-fluid img-profil"></div><div class="col-3"></div>
        <div class="col-4 offset-2 col-custom"><label>Nom : </label> <?php echo $nom ;?></div>
        <div class="col-4 col-custom"><label>Prenom : </label> <?php echo $prenom ;?></div>
        <div class="col-6 col-custom"><label>Ville de naissance : </label> <?php echo $pays ;?></div>
        <div class="col-6 col-custom"><label>Date de naissance : </label> <?php echo $date ;?></div>
        <div class="col-4 col-custom"><label>Adresse : </label> <?php echo $adresse ;?></div>
        <div class="col-4 col-custom"><label>Ville : </label> <?php echo $ville ;?></div>
        <div class="col-4 col-custom"><label>Code postal : </label> <?php echo $codepostal ;?></div>
        <div class="col-6 col-custom"><label>Telephone :</label> <?php echo $telephone ;?></div>
        <div class="col-6 col-custom"><label>Email : </label> <?php echo $email ;?></div>
        <div class="col-6 col-custom"><label>Numeros pole emploi : </label> <?php echo $num ;?></div>
        <div class="col-6 col-custom"><label>Nombre de badge : </label> <?php echo $nb_badge ;?></div>
        <div class="col-12 col-custom"><label>Lien codacademy : </label> <?php echo $lien ;?></div>
        <div class="col-12 col-custom"><label>Votre héros préféré : </label> <?php echo $hero ;?></div>
        <div class="col-12 col-custom"><label>Vos daily hack : </label> <?php echo $hack ;?></div>
        <div class="col-12 col-custom"><label>Vos experiences : </label> <?php echo $experiences ;?></div>
    </div>

    </div>
    </body>
    </html>