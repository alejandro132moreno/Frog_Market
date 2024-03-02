/*Botones y compras*/
const floatingBtn = document.getElementById('botons');
const botonEditar = document.getElementById('boton-editar');
const carritoContainer = document.getElementById('carrito-container');

floatingBtn.addEventListener('click', function () {
    carritoContainer.classList.toggle('visible');
});

botonEditar.addEventListener('click', function () {
    carritoContainer.classList.remove('visible');
});

/*
function ticket() {
    window.location.href = 'lo.html'
}
*/
/*
function validarCorreo() {
    // Obtener el valor del campo de correo electrónico
    var correo = document.getElementById('correo').value;
    
    // Expresión regular para validar el correo electrónico
    var patronCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Verificar si el correo coincide con el patrón
    if (patronCorreo.test(correo)) {
        // Correo válido
        document.getElementById('errorCorreo').innerHTML = '';
        alert('Correo electrónico válido: ' + correo);
    } else {
        // Correo no válido
        document.getElementById('errorCorreo').innerHTML = 'Ingrese un correo electrónico válido.';
    }
}*/