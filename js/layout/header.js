document.addEventListener('DOMContentLoaded', function () {
    
    let menuHamburguesa = document.querySelector(".hamburger-menu");
    let menu = document.querySelector(".nav-left");
    
    console.log("JOLINES");
    if (menuHamburguesa) {
        menuHamburguesa.addEventListener("click", function(){
            menu.classList.toggle("desplega");

            console.log("La vida es DURISSIMA ... JOLINES");
        }, false);
    }
}
);