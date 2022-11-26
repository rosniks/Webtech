const sandwichtButton = document.getElementsByClassName("sandwich-button")[0]
const navbarLinks = document.getElementsByClassName("navbar-links")[0]

sandwichtButton.addEventListener("click", () =>{
    navbarLinks.classList.toggle("active")
})
