var Nombre = document.getElementById("nombre");
var Nomlib = document.getElementById("nomlib");
var Imagen = document.getElementById("imagen");
var Comentario = document.getElementById("comentario");
var urlimagen;

Imagen.addEventListener('change', function() {
    var file = Imagen.files[0];

    if (file) {
        var reader = new FileReader();

        reader.onload = function(e) {
            urlimagen = e.target.result;

            Imagen.src = urlimagen; // Fix here

            console.log("URL de la imagen almacenada:", urlimagen);
        };
        reader.readAsDataURL(file);
    }
});

// Hacer que no se pierdan los datos al actualizar
var recomendaciones = JSON.parse(localStorage.getItem("recomendaciones")) || [];

function agregar() {
    var nuevaRecomendacion = {
        Nombre: Nombre.value, // Fix here
        Nomlib: Nomlib.value, // Fix here
        Imagen: urlimagen,
        Comentario: Comentario.value
    };

    recomendaciones.push(nuevaRecomendacion);

    console.log(recomendaciones);

    localStorage.setItem("recomendaciones", JSON.stringify(recomendaciones));

    alert("Se Acaba de Enviar tu Opinion Correctamente");

    limpiar();
}

function limpiar() {
    Nombre.value = "";
    Nomlib.value = "";
    Imagen.value = "";
    Comentario.value = "";
}