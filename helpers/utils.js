class Utils{
    constructor(){
        this.contraseña = document.querySelector('#contraseña');
        this.checkbox = document.querySelector('#checkbox');
        this.nav = document.querySelector(".nav");
        this.button = document.querySelector('.header');
    }
    
    mostrarContraseña() {
        if (this.checkbox.checked === true) {
            this.contraseña.setAttribute("type", "text");
        } else {
            this.contraseña.setAttribute("type", "password");
        }
    }
    
    click(){ 
        this.button.addEventListener("click", () => {
        if (this.nav.style.display == "none") {
            this.nav.style.display = 'block';
        } else {
            this.nav.style.display = 'none';
        }
        });
    }

    mouseleave(){
        this.nav.addEventListener("mouseleave", () => {
            this.nav.style.display = 'none';
        });
    }
}

const ejecutarEventos = ()=>{
    const utils = new Utils();
    utils.click();
    utils.mouseleave();
};

const mostrarContraseña = ()=>{
    const utils = new Utils();
    utils.mostrarContraseña();
}

ejecutarEventos();



