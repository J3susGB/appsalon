document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
});

function iniciarApp() {
    buscarPorFecha();
}

function buscarPorFecha() {
    const fechaInput = document.querySelector('#fecha');
    fechaInput.addEventListener('input', function(e) {
        const fechaSeleccionada = e.target.value;
        
        window.location = `?fecha=${fechaSeleccionada}`; //Redirecciona a ese día (pone la fecha la barra de dirección del navegador)
    });
}