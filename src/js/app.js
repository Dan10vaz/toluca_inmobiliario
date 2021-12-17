document.addEventListener('DOMContentLoaded', function() {

    eventListeners();

    darkMode();

    serviceWorker();
});

function serviceWorker() {
    if('serviceWorker' in navigator)
    navigator.serviceWorker.register('./sw.js')
        .then(registrado => console.log('Se instalo correctamente...', registrado))
        .catch(error => console.log('Fallo la instalacion...', error))
    else {
    console.log('Service Workers no soportados')
    }

}


function darkMode(){

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    if(prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    }else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function() {
        if(prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        }else {
            document.body.classList.remove('dark-mode');
        }
    })


    const botonDarkMode = document.querySelector('.dark-mode-boton')
    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode')
    });
}

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar');
}

