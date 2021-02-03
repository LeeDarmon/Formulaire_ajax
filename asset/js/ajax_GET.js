
var baseurl = window.location.origin;

$( document ).ready(function() {

    document.getElementById("next_1").disabled = true;   
    document.getElementById("next_2").disabled = true;
    document.getElementById("next_3").disabled = true;
    document.getElementById("next_4").disabled = true;
    document.getElementById("submit").disabled = true;

    $("input").on('input', function(){
        var inputs = $(this).attr("id");
        // console.log(baseurl + '/tp_php/controllerV3.php?'+$(this).attr("name")+"="+$(this).val());
        $.ajax({
            url : baseurl + '/tp_php/controllerV3.php?'+$(this).attr("name")+"="+$(this).val(),
            type : 'GET',
            data : $(this).val(),
            success(response){
            console.log(response);
    
    if(response == 'ok'){
       $('#'+inputs).removeClass("has-error").addClass("has-success");
    
       if($('#'+inputs).val() == ''){
        $('#'+inputs).removeClass("has-success").addClass("has-error");
       }
    }
    else if (response == 'pas ok'){
        console.log("c'est pas ok");
        $('#'+inputs).removeClass("has-success").addClass("has-error");
    }

    if($("#nom").hasClass("has-success") && $("#prenom").hasClass("has-success")){
        document.getElementById("next_1").disabled = false;
    }
    if($("#date").hasClass("has-success") && $("#pays").hasClass("has-success")){
        document.getElementById("next_2").disabled = false;
    }
    if($("#adresse").hasClass("has-success") && $("#ville").hasClass("has-success") && $("#codepostal").hasClass("has-success")){
        document.getElementById("next_3").disabled = false;
    }
    if($("#email").hasClass("has-success") && $("#telephone").hasClass("has-success")){
        document.getElementById("next_4").disabled = false;
    }
    if($("#num").hasClass("has-success") && $("#nb_badge").hasClass("has-success") && $("#lien").hasClass("has-success") && $("#hero").hasClass("has-success") && $("#hack").hasClass("has-success") && $("#experiences").hasClass("has-success")){
        document.getElementById("submit").disabled = false;
    }
            }
        });
    });
    
    
 
  });







