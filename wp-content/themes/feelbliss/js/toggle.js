document.getElementById("oakland-btn").addEventListener("click", function(){
    $elt1 = document.getElementById("oakland-map");
    $elt2 = document.getElementById("larkspur-map");
//    $elt3 = document.getElementById("orinda-map");
    $elt1.style.zIndex = 10;     
    $elt2.style.zIndex = 8; 
//    $elt3.style.zIndex = 8;    
    $btn1 = document.getElementById("oakland-btn");
    $btn2 = document.getElementById("larkspur-btn");
//    $btn3 = document.getElementById("orinda-btn");
    $btn1.style.border = "4px solid blue"; 
    $btn2.style.border = "4px solid #333";
//    $btn3.style.border = "4px solid #333";  

});
document.getElementById("larkspur-btn").addEventListener("click", function(){
    $elt1 = document.getElementById("oakland-map");
    $elt2 = document.getElementById("larkspur-map");
//    $elt3 = document.getElementById("orinda-map");
    $elt1.style.zIndex = 8;     
    $elt2.style.zIndex = 10;
//    $elt3.style.zIndex = 8;     
    $btn1 = document.getElementById("oakland-btn");
    $btn2 = document.getElementById("larkspur-btn");
//    $btn3 = document.getElementById("orinda-btn");
    $btn1.style.border = "4px solid #333"; 
    $btn2.style.border = "4px solid blue";
//    $btn3.style.border = "4px solid #333" 
});
/* document.getElementById("orinda-btn").addEventListener("click", function(){
    $elt1 = document.getElementById("oakland-map");
    $elt2 = document.getElementById("larkspur-map");
    $elt3 = document.getElementById("orinda-map");
    $elt1.style.zIndex = 8;     
    $elt2.style.zIndex = 8; 
    $elt3.style.zIndex = 10;      
    $btn1 = document.getElementById("oakland-btn");
    $btn2 = document.getElementById("larkspur-btn");
    $btn3 = document.getElementById("orinda-btn");
    $btn1.style.border = "4px solid #333"; 
    $btn2.style.border = "4px solid #333";
    $btn3.style.border = "4px solid blue"; 
}); */
