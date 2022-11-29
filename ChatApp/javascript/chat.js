const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
    e.preventDefault(); // preventing form from submitting 
}

sendBtn.onclick = ()=>{
    // starting ajax
   let xhr = new XMLHttpRequest(); //create XML object
   xhr.open("POST", "php/insert-chat.php", true); // Javascript codes are same as Signup Form but PHP codes will be different
   xhr.onload = ()=>{
       if(xhr.readyState === XMLHttpRequest.DONE){
           if(xhr.status === 200){
              inputField.value = ""; //once messafe inserted into db then leave blank the input field
              scrollToBottom();
            }
       }
   }
   // send the form data through ajax to php
   let formData = new FormData(form); //create new formData Object
   xhr.send(formData); //send the form data to php

}

chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");

}
chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
    
}

setInterval(()=>{
    // starting ajax
    let xhr = new XMLHttpRequest(); //create XML object
    xhr.open("POST", "php/get-chat.php", true); // Javascript codes are same as Signup Form but PHP codes will be different
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response; //xhr.response gives us response of that passed URL
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")){ // if active class contains in chatbox scroll to the bottom 
                    scrollToBottom();
                }
            } 
        }
    }
    let formData = new FormData(form); //create new formData Object
    xhr.send(formData); //send the form data to php

  }, 500); //function will run frequently after 500ms

function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;

}