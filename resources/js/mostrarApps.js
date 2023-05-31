let contenido = document.getElementsByTagName('main')[0];
let txt = "";
let apps;

window.addEventListener("load", iniciar, false);

function iniciar() {
    // Creamos la promesa
    let miPromesa = new Promise(function (resolved, rejected) {
        if (recuperarApps() = true) resolved();
    });

    // Llamamos a la promesa
    miPromesa.then(() => {
        
    });
    
    
    
    // contenido.innerHTML = `
    // <ul>
    // @foreach ($apps->where('app_categoria', '=', 'Navegador')->orderBy('app_id', 'desc') as $app)
    //     <li><a href="{{route('apps.show', $app)}}">{{$app->app_nombre}}</a></li>
    // @endforeach
    // </ul>
    // `;
}

function recuperarApps() {
    // Creamos el objeto
    let xhr = new XMLHttpRequest();

    // Creamos la función que será llamada cuando cambie el valor de la propiedad readystate (del 0 al 4)
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            // Al hacer parse convertimos un string JSON en un objeto
            apps = JSON.parse(this.responseText);
            apps.forEach((app) => {
                txt += `<li><a href="http://proyecto.local/apps/${app.app_id}">${app.app_nombre}</a></li>`;
            });
            contenido.innerHTML = `<ul>${txt}</ul>`;
            // Mostramos los datos
            // document.getElementById("objeto_desarrolladores").innerHTML = `${objeto[0].nombre} estudió grado en ${objeto[0].estudios} y tiene ${objeto[0].edad} años.<br/>`;
            

            return true;
            // Si queremos convertir un objeto JS en una cadena JSON
            // let cadena = JSON.stringify(apps);
            // contenido.innerHTML += "El objeto  en modo cadena es " + cadena;
        }
    }

    // Especificamos la solicitud
    xhr.open("GET", "apps/index.blade.php", true);

    // Enviamos la solicitud al servidor
    xhr.send();
}