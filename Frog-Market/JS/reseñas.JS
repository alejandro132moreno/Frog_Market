var tarjetasIzquierdaContainer = document.getElementById("tarjetasIzquierda");
var tarjetasDerechaContainer = document.getElementById("tarjetasDerecha");

var recomendaciones = JSON.parse(localStorage.getItem("recomendaciones")) || [];

recomendaciones.forEach((element, index) => {
    var backgroundColor = index % 2 === 0 ? "lightblue" : "lightgreen";
    var targetContainer = index % 2 === 0 ? tarjetasIzquierdaContainer : tarjetasDerechaContainer;

    var tarjetaContainer = document.createElement("div");
    tarjetaContainer.className = "contenedor-tarjeta";

    tarjetaContainer.innerHTML = `
        <div class="card mb-3" style="background-color: ${backgroundColor};">
        <img class="card-img-top mx-auto mt-3" alt="Imagen" style="max-width: 100px;" src="data:image/png;base64,${element.Imagen}" alt="">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">${element.Nombre}</h5>
                <p class="card-text">
                    <strong>Nombre del Libro:</strong> ${element.Nomlib} <br>
                    <strong>Comentario:</strong> ${element.Comentario} <br>
                </p>
                <div class="d-flex mt-3">
                    <button type="button" class="btn btn-primary boton-añadir" style="width: 50%;">Añadir</button>
                    <button type="button" class="btn btn-danger boton-eliminar" style="width: 50%;">Eliminar</button>
                </div>
            </div>
        </div>
    `;

    targetContainer.appendChild(tarjetaContainer);
});

if (tarjetasIzquierdaContainer.children.length > 0 || tarjetasDerechaContainer.children.length > 0) {
    document.querySelectorAll(".contenedor-tarjeta .card-body").forEach(cardBody => {
        cardBody.style.display = "flex";
        cardBody.style.flexDirection = "column";
        cardBody.style.height = "100%";
    });
}

