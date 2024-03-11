const btnCart = document.querySelector('.container-icon')
btnCart.addEventListener('click', () => {
    containerCartProducts.classList.toggle('hidden-cart')
})
const btnsAgregarAlCarrito = document.querySelectorAll('.info-product button'); // Seleccionar todos los botones "Añadir al carrito"
const contadorProductos = document.getElementById('contador-productos'); // Seleccionar el contador de productos
const totalPagar = document.querySelector('.total-pagar'); // Seleccionar el elemento que muestra el total a pagar
const containerCartProducts = document.querySelector('.container-cart-products'); // Seleccionar el contenedor de los productos en el carrito

// Inicializar el total de productos y el precio total
let totalProductos = 0;
let precioTotal = 0;

// Función para actualizar el carrito
const actualizarCarrito = (titulo, precio) => {
    // Incrementar el contador de productos
    totalProductos++;
    contadorProductos.textContent = totalProductos;
    
    // Actualizar el precio total
    precioTotal += precio;
    totalPagar.textContent = `$${precioTotal.toFixed(2)}`;
    
    // Crear elemento para mostrar el producto en el carrito
    const nuevoProducto = document.createElement('div');
    nuevoProducto.classList.add('cart-product');
    nuevoProducto.innerHTML = `
        <div class="info-cart-product">
            <span class="cantidad-producto-carrito">1</span>
            <p class="titulo-producto-carrito">${titulo}</p>
            <span class="precio-producto-carrito">S/${precio.toFixed(2)}</span>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="icon-close">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    `;
    
    // Agregar el producto al carrito
    containerCartProducts.appendChild(nuevoProducto);
};

// Agregar evento de clic a todos los botones "Añadir al carrito"
btnsAgregarAlCarrito.forEach(btn => {
    btn.addEventListener('click', () => {
        const producto = btn.closest('.item'); // Obtener el contenedor del producto
        const titulo = producto.querySelector('h2').textContent; // Obtener el título del producto
        const precio = parseFloat(producto.querySelector('.price').textContent.replace('S/', '').trim()); // Obtener el precio del producto
        actualizarCarrito(titulo, precio); // Llamar a la función actualizarCarrito con el título y el precio del producto
    });
});

// // Obtener el botón "Comprar"
const btnComprar = document.querySelector('.cart-total button');

// Agregar un evento de clic al botón "Comprar"
btnComprar.addEventListener('click', () => {
    // Obtener la información de los productos en el carrito
    const productosEnCarrito = document.querySelectorAll('.cart-product');
    let mensaje = 'Hola, estoy interesado en comprar los siguientes productos:';
    
    // Iterar sobre cada producto en el carrito
    productosEnCarrito.forEach(producto => {
        const titulo = producto.querySelector('.titulo-producto-carrito').textContent;
        const precio = producto.querySelector('.precio-producto-carrito').textContent;
        mensaje += `\n${titulo} - ${precio}`;
    });
    
    // Obtener el precio total a pagar
    const total = document.querySelector('.total-pagar').textContent;
    
    // Reemplazar el símbolo de la moneda ($ por S/)
    const precioTotalS = total.replace('$', 'S/');
    
    // Construir el enlace de WhatsApp con el mensaje
    const enlaceWhatsApp = `https://wa.me/937331928?text=${encodeURIComponent(mensaje + '\n\nTotal: ' + precioTotalS)}`;
    
    // Redirigir al usuario a WhatsApp
    window.location.href = enlaceWhatsApp;
});
