var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register(){
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
}
function login(){
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
}


let eyeicon = document.getElementById("eyeicon");
let password = document.getElementById("password");

eyeicon.onclick = function() {
    if(password.type == "password"){
        password.type = "text";
    }else{
        password.type = "password";
    }
}










var emailField = document.getElementById("email-field"); 

var emailError = document.getElementById("email-error"); 


function validateEmail(){

                    if(!emailField.value.match(/[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
					
					emailError.innerHTML = "please enter a valid email";
					return false;

}

emailError.innerHTML = "";
return true;

}