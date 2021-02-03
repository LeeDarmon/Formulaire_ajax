<?php

$pattern_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$pattern_name = "/^[a-zA-Z-' ]*$/";
$pattern_postal = "/[0-9]{5}/";
$pattern_telephone = "/^(\+33|0033|0)(6|7)[0-9]{8}$/";
$pattern_lien = "#(https?://)([\w\d.&:\#@%/;$~_?\+-=]*)#";
$pattern_textarea = "/^[\w \-]+$/";
$pattern_int = "/^([0-9]+)$/";





//nom
if (isset($_POST['input_name'])){
    switch($_POST['input_name']){
        case 'nom':
            $nom = $_POST['nom'];
            if(preg_match($pattern_name, $_POST['nom'])){
                echo 'ok';
                }
                else{
                echo 'pas ok';

                }
        break;
        case 'prenom':
            $prenom = $_POST['prenom'];
            if(preg_match($pattern_name, $_POST['prenom'])){
                echo 'ok';
                }
                else{
                    echo 'pas ok';
                }
        break;
        case 'pays':
            $pays = $_POST['pays'];
            if(preg_match($pattern_name, $_POST['pays'])){
                echo 'ok';
            }
            else{
                echo 'pas ok';

            
            }

        break;
        case 'date':
            $date = $_POST['date'];
                echo 'ok';
        
        break;
        case 'ville':
            $ville = $_POST['ville'];
            if(preg_match($pattern_name,$_POST['ville'])){
                echo 'ok';
            }
            else{
            echo 'pas ok';
            }

        break;
        case 'adresse':
            $adresse = $_POST['adresse'];
            if(preg_match($pattern_textarea,$_POST['adresse'])){
                echo 'ok';
            }
            else{
                echo 'pas ok';
            }

        break;
        case 'codepostal':
            $codepostal = $_POST['codepostal'];
            if(preg_match($pattern_postal,$_POST['codepostal'])){
                echo 'ok';
            }
            else{
                echo 'pas ok';
            }

        break;
        case 'telephone':
            $telephone = $_POST['telephone'];
            if(preg_match($pattern_telephone,$_POST['telephone'])){

                echo 'ok';
            }
            else{
                echo 'pas ok';
            }

        break;
        case 'email':
            $email = $_POST['email'];
            if(preg_match($pattern_email,$_POST['email'])){
                echo 'ok';
           }
           else{
            echo 'pas ok';
           }

        break;
        case 'num':
            $num = $_POST['num'];
            if(preg_match($pattern_int, $_POST['num'])){
                echo 'ok';
            }
            else{
                echo 'pas ok';
            }

        break;
        case 'hero':
            $hero = $_POST['hero'];
            if(preg_match($pattern_name,$_POST['hero'])){
                echo 'ok';
            }
            else{
                echo 'pas ok';
            }

        break;
        case 'hack':
            $hack = $_POST['hack'];
            if(preg_match($pattern_textarea, $_POST['hack'])){
                echo 'ok';
            }
            else{
                
                echo 'pas ok';

            }

        break;
        case 'experiences':
            $experiences = $_POST['experiences'];
            if(preg_match($pattern_textarea, $_POST['experiences'])){
                echo 'ok';
            }
            else{
              
                echo 'pas ok';
            
            }

        break;
        case 'nb_badge':
            $nb_badge = $_POST['nb_badge'];
            if(preg_match($pattern_int, $_POST['nb_badge'])){
                echo 'ok';
            }
            else{
                echo 'pas ok';
            }

        break;
        case 'lien':
            $lien = $_POST['lien'];
            if(preg_match($pattern_lien,$_POST['lien'])){
                echo 'ok';
            
            }
            else{
                echo 'pas ok';

            }

        break;
       
    }

}

?>