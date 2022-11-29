const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault(); // preventing form from submitting 
}

// when "continue to chat" button is clicked, the console on the web page outputs
continueBtn.onclick = ()=>{
   // starting ajax
   let xhr = new XMLHttpRequest(); //create XML object
   xhr.open("POST", "php/signup.php", true);
   xhr.onload = ()=>{
       if(xhr.readyState === XMLHttpRequest.DONE){
           if(xhr.status === 200){
               let data = xhr.response; //xhr.response gives us response of that passed URL
               console.log(data);
               if(data === "success"){
                   // problem with accessing the users.php after continuing from the regristation form
                   location.href = "users.php"; 
               }else{
                   errorText.textContent = data;
                   errorText.style.display = "block";
               }
           }
       }
   }
   // send the form data through ajax to php
   let formData = new FormData(form); //create new formData Object
   xhr.send(formData); //send the form data to php
}



