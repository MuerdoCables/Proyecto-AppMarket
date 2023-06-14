// document.getElementById("foto").addEventListener('load', cambiarImagen, false);
document.getElementById("foto").addEventListener('change', cambiarImagen, false);

function cambiarImagen(event) {
    var file = event.target.files[0];
    var reader = new FileReader();

    reader.onload = (event) => document.getElementById("imagen").setAttribute('src', event.target.result);
    reader.readAsDataURL(file);
}