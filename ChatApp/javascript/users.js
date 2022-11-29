const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list");


// press seach button and it will let you type a name to search
searchBtn.onclick = ()=>{
  searchBar.classList.toggle("active");
  searchBar.focus();
  searchBtn.classList.toggle("active");
  searchBar.value = "";
}
searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value; //getting user search
  //adding an active class when user start searching and only run the setInterval ahax if there is no active class
  if(searchTerm != ""){
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest(); //create XML object
  xhr.open("POST", "php/search.php", true); // Javascript codes are same as Signup Form but PHP codes will be different
  xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              usersList.innerHTML = data;
          } 
      }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);  //sending user search term to php file w ajax
} 

setInterval(()=>{
  // starting ajax
  let xhr = new XMLHttpRequest(); //create XML object
  xhr.open("GET", "php/users.php", true); // Javascript codes are same as Signup Form but PHP codes will be different
  xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response; //xhr.response gives us response of that passed URL
              if(!searchBar.classList.contains("active")){ //if active active not contains in search bar then add this data
                usersList.innerHTML = data;
              }
          } 
      }
  }
  xhr.send();

}, 500); //function will run frequently after 500ms