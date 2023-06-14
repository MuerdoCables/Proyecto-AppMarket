let estrella = document.querySelectorAll("#puntuacion i");
let puntos = document.getElementById("puntos");

window.addEventListener("load", iniciar, false);

function iniciar() {
    mostrar_puntuacion();
}

// Cambia la puntuación por estrellas en la valoración de nuestro usuario
function mostrar_puntuacion() {
    let puntuacion;
    
    try {
        puntuacion = parseInt(puntos.value);
    } catch (error) {
        puntuacion = 0;
    }

    pintar(puntuacion - 1);
}

// Pinta las estrellas
function pintar(numEstrella) {

    // Pintamos de gris todas las estrellas
    for (let i = 0; i < estrella.length; i++) estrella[i].classList.remove("active");

    // Pintamos las estrellas correspondientes
    for (let i = 0; i <= numEstrella; i++) estrella[i].classList.add("active");

}