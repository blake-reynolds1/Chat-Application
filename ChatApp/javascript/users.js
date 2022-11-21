const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button");

// press seach button and it will let you type a name to search
searchBtn.onclick = ()=>{
  searchBar.classList.toggle("active");
  searchBar.focus();
  searchBtn.classList.toggle("active");

}
