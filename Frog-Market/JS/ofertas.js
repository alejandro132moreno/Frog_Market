
/*Tarjetas*/
document.addEventListener('DOMContentLoaded', function () {
    var clickableCards = document.querySelectorAll('.flip-card.clickable');

    function handleCardClick() {
        var card = this;

        var cardInner = card.querySelector('.flip-card-inner');

        var isFlipped = cardInner.style.transform === 'rotateY(180deg)';

        cardInner.style.transform = isFlipped ? 'rotateY(0deg)' : 'rotateY(180deg)';
    }

    clickableCards.forEach(function (card) {
        card.addEventListener('click', handleCardClick);
    });
});
/*Fin Tarjetas*/

/*Boton y compras*/
const floatingBtn = document.getElementById('floating-btn');
const carritoContainer = document.getElementById('carrito-container');
const totalSpan = document.getElementById('total'); // Agregado: Obtener el elemento span

let total = 0; // Agregado: Variable para almacenar el total

floatingBtn.addEventListener('click', function () {
    carritoContainer.classList.toggle('visible');
});

/*Carrito*/

document.addEventListener('DOMContentLoaded', () => {
    // Obtener elementos del DOM
    const botonesAñadir = document.querySelectorAll('button[data-producto]');
    const carritoLista = document.querySelector('#carrito');
    const totalSpan = document.querySelector('#total');

    // Obtener el carrito almacenado en localStorage
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

    // Obtener el total almacenado en localStorage
    let total = parseFloat(localStorage.getItem('total')) || 0;
    totalSpan.textContent = `$${total.toFixed(2)}`;

    // Evento al hacer clic en un botón "Añadir"
    botonesAñadir.forEach((boton) => {
        boton.addEventListener('click', () => {
            // Obtener información del producto desde el botón
            const nombreProducto = boton.dataset.producto;
            const precioProducto = parseFloat(boton.dataset.precio);

            // Verificar si el producto ya está en el carrito
            const itemExistente = carrito.find((item) => item.nombre === nombreProducto);

            if (itemExistente) {
                // Si el producto ya está en el carrito, aumentar la cantidad
                itemExistente.cantidad += 1;
            } else {
                // Si el producto no está en el carrito, agregarlo
                carrito.push({ nombre: nombreProducto, precio: precioProducto, cantidad: 1 });
            }

            // Actualizar la lista del carrito en el DOM
            renderizarCarrito();

            // Actualizar el total
            total += precioProducto;
            totalSpan.textContent = `$${total.toFixed(2)}`;

            // Almacenar datos en localStorage
            localStorage.setItem('carrito', JSON.stringify(carrito));
            localStorage.setItem('total', total.toString());
        });
    });

    // Evento al hacer clic en el botón "Vaciar"
    document.getElementById('boton-vaciar').addEventListener('click', () => {
        // Limpiar la lista del carrito
        carrito = [];
        renderizarCarrito();

        // Reiniciar el total
        total = 0;
        totalSpan.textContent = '$0.00';

        // Limpiar datos en localStorage
        localStorage.removeItem('carrito');
        localStorage.removeItem('total');
    });
    document.getElementById('boton-comprar').addEventListener('click', () => {
        // Limpiar la lista del carrito
        carrito = [];
        renderizarCarrito();

        // Reiniciar el total
        total = 0;
        totalSpan.textContent = '$0.00';

        // Limpiar datos en localStorage
        localStorage.removeItem('carrito');
        localStorage.removeItem('total');
    });

    // Función para renderizar el carrito en el DOM
    function renderizarCarrito() {
        carritoLista.innerHTML = '';

        carrito.forEach((item, index) => {
            const nuevoElementoLi = document.createElement('li');
            nuevoElementoLi.textContent = `${item.nombre} x${item.cantidad} $${(item.precio * item.cantidad).toFixed(2)}`;

            // Botón de eliminación
        const botonEliminar = document.createElement('button');
        botonEliminar.textContent = 'X';
        botonEliminar.classList.add('btn', 'btn-danger', 'btn-sm', 'ms-2');
        botonEliminar.addEventListener('click', () => eliminarProducto(index));

        // Agregar el botón de eliminación al elemento de la lista del carrito
        nuevoElementoLi.appendChild(botonEliminar);

            // Agregar el nuevo elemento a la lista del carrito
            carritoLista.appendChild(nuevoElementoLi);
        });
    }
    function eliminarProducto(index) {
        const producto = carrito[index];
        if (producto.cantidad > 1) {
            // Si hay más de 1 unidad, simplemente restar 1
            producto.cantidad -= 1;
        } else {
            // Si hay 1 unidad, eliminar completamente el producto del carrito
            carrito.splice(index, 1);
        }
    
        // Actualizar la lista del carrito en el DOM
        renderizarCarrito();
    
        // Actualizar el total
        total -= producto.precio;
        totalSpan.textContent = `$${total.toFixed(2)}`;
    
        // Almacenar datos en localStorage
        localStorage.setItem('carrito', JSON.stringify(carrito));
        localStorage.setItem('total', total.toString());
    }
    renderizarCarrito();
    
});
