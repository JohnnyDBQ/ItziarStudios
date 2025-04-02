document.addEventListener('DOMContentLoaded', function () {
    
    let menuHamburguesa = document.querySelector(".hamburger-menu");
    let menu = document.querySelector(".nav-left");
    
    if (menuHamburguesa) {
        menuHamburguesa.addEventListener("click", function(){
            menu.classList.toggle("desplega");

        }, false);
    }
}
);