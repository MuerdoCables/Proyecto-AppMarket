let estrella = document.querySelectorAll("#puntuacion i");
let puntos = document.getElementById("val_puntuacion");

window.addEventListener("load", iniciar, false);

function iniciar() {
    mostrar_estrellas();
    mostrar_puntuacion();

    // Inicia un evento al pulsar una estrella
    for (let i = 0; i < estrella.length; i++) estrella[i].addEventListener("click", function() { valorar(i) });
}

// Cambia la puntuación por estrellas en las valoraciones de los usuarios
function mostrar_estrellas() {
    let estrellas = document.getElementsByClassName("estrellas");

    for (let i = 0; i < estrellas.length; i++){
        let puntuacion = parseInt(estrellas[i].innerHTML);
        estrellas[i].innerHTML = "";
        for (let j = 0; j < 5; j++)  {
            if (j < puntuacion) estrellas[i].innerHTML += `<i class="bi bi-star-fill"></i>`;
            else estrellas[i].innerHTML += `<i class="bi bi-star"></i>`;
        }
    }
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

// Cambia el color de las estrellas al valor seleccionado
function valorar(numEstrella) {
    pintar(numEstrella);
    puntos.value = numEstrella + 1;
}

// Pinta las estrellas
function pintar(numEstrella) {

    // Pintamos de gris todas las estrellas
    for (let i = 0; i < estrella.length; i++) estrella[i].classList.remove("active");

    // Pintamos las estrellas correspondientes
    for (let i = 0; i <= numEstrella; i++) estrella[i].classList.add("active");

}