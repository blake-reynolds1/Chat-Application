const pswrdField = document.querySelector(".form input[type='password']"),
toggleBtn = document.querySelector(".form .field i");

// this lets the user press the "eye" icon to let the password show letters or be hidden
// the classList puts the slash over the eye once it is used
toggleBtn.onclick = ()=>{
  if(pswrdField.type == "password"){
    pswrdField.type = "text";
    toggleBtn.classList.add("active");
  }else{
    pswrdField.type = "password";
    toggleBtn.classList.remove("active");
  }
}
 
