document.addEventListener("DOMContentLoaded", function(event) { 

var step1 = document.getElementById("step1");
var step2 = document.getElementById("step2");
var step3 = document.getElementById("step3");
var step4 = document.getElementById("step4");
var step5 = document.getElementById("step5");

var next_1 = document.getElementById("next_1");
var next_2 = document.getElementById("next_2");
var next_3 = document.getElementById("next_3");
var next_4 = document.getElementById("next_4");

step1.style.display="block";
step2.style.display="none";
step3.style.display="none";
step4.style.display="none";
step5.style.display="none";

next_1.addEventListener("click", function( event ) {
    event.preventDefault();
    step1.style.display = "none";
    step2.style.display = "block";
        });
next_2.addEventListener("click", function( event ) {
    event.preventDefault();
    step2.style.display = "none";
    step3.style.display = "block";
        });

next_3.addEventListener("click", function( event ) {
    event.preventDefault();
    step3.style.display = "none";
    step4.style.display = "block";
        });

next_4.addEventListener("click", function( event ) {
    event.preventDefault();
    step4.style.display = "none";
    step5.style.display = "block";
        });




        
});