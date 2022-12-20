"use strict";

let Fnam = document.getElementById("Fname");
let Lnam = document.getElementById("Lname");
let Msg = document.getElementById("message");
let email = document.getElementById("email");
let subButton = document.getElementById("submitButton");

subButton.addEventListener("click", validateName);
function validateName() {
    let regEx = /^[A-Za-z]+$/;
    let emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    if(Fnam.value.match(regEx)){
    if(Lnam.value.match(regEx)){
    if(Msg.value != ""){
    if(email.value.match(emailReg)){
       alert("Thank you for your submission. Someone will contact you shortly!");
       return true;
    }else{
      alert("Please enter a valid email address!")
    }
    }else{
      alert("Please enter a message!")
    }
    }else{ 
    alert("Please enter a name with only letters!")
} 
    }else{ 
      alert("Please enter a name with only letters!")
  } 
}
