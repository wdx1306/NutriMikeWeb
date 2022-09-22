const menu = document.getElementById('menu');
const indicador = document.getElementById('indicador');
const secciones = document.querySelectorAll('.seccion');

let tamanoIdicador = menu.querySelector('a').offsetWidth;
indicador.style.width = tamanoIdicador + 'px';

let indexSeccionActiva;

// Observer
const observer = new IntersectionObserver((entradas, observer) => {
    entradas.forEach(entrada => {
        if (entrada.isIntersecting) {
            // Obtenemos cual es la seccion que esta entrando en pantalla.
            // console.log(`La entrada ${entrada.target.id} esta intersectando`);

            // Creamos un arreglo con las secciones y luego obtenemos el index del la seccion que esta en pantalla.
            indexSeccionActiva = [...secciones].indexOf(entrada.target);
            indicador.style.transform = `translateX(${tamanoIdicador * indexSeccionActiva}px)`;
        }
    });
}, {
    rootMargin: '-80px 0px 0px 0px',
    threshold: 0.2
});

// Agregamos un observador para el hero.


// Asignamos un observador a cada una de las secciones
secciones.forEach(seccion => observer.observe(seccion));