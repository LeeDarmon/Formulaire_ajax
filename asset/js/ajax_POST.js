
var baseurl = window.location.origin;

$( document ).ready(function() {

    document.getElementById("next_1").disabled = true;   
    document.getElementById("next_2").disabled = true;
    document.getElementById("next_3").disabled = true;
    document.getElementById("next_4").disabled = true;
    document.getElementById("submit").disabled = true;

    $('#nom,#prenom,#date,#date,#pays,#adresse,#codepostal,#ville,#email,#telephone,#num,#nb_badge,#lien,#hero,#hack,#experiences').on('input', function(){
        handleRequest(this.name);
    });

        var handleRequest=function(input_name){

            var data = $("#formulaire").serialize();
            console.log(data);
            data += '&input_name='+input_name;

            $.ajax({
                url : baseurl + '/tp_php/controllers/controllerV3_POST.php',
                type : 'POST',
                data : data,
                success(response){
                console.log(response);
        
        if(response == 'ok'){
           $('#'+input_name).removeClass("has-error").addClass("has-success");
        
           if($('#'+input_name).val() == ''){
            $('#'+input_name).removeClass("has-success").addClass("has-error");
           }
        }
        else if (response == 'pas ok'){
            $('#'+input_name).removeClass("has-success").addClass("has-error");
        }
    
        if($("#nom").hasClass("has-success") && $("#prenom").hasClass("has-success")){
            document.getElementById("next_1").disabled = false;
            var step1 = true;
        }
        if($("#date").hasClass("has-success") && $("#pays").hasClass("has-success")){
            document.getElementById("next_2").disabled = false;
            var step2 =  true;
        }
        if($("#adresse").hasClass("has-success") && $("#ville").hasClass("has-success") && $("#codepostal").hasClass("has-success")){
            document.getElementById("next_3").disabled = false;
            var step3 = true;
        }
        if($("#email").hasClass("has-success") && $("#telephone").hasClass("has-success")){
            document.getElementById("next_4").disabled = false;
            var step4 =  true;
        }
        if($("#num").hasClass("has-success") && $("#nb_badge").hasClass("has-success") && $("#lien").hasClass("has-success") && $("#hero").hasClass("has-success") && $("#hack").hasClass("has-success") && $("#experiences").hasClass("has-success")){
            document.getElementById("submit").disabled = false;
            var step5 =  true;
        }
        // if(step1 ==  true && step2 ==  true && step3 == true && step4 == true && step5 == true){
        //     alert('formulaire ok');
        //     window.location.href = '../tp_php/validate.php';
        // }
                }
            });
        }
        

    });
    
    
 








