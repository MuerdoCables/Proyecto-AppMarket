let n=document.querySelectorAll("#puntuacion i"),i=document.getElementById("puntos");window.addEventListener("load",a,!1);function a(){o()}function o(){let e;try{e=parseInt(i.value)}catch{e=0}l(e-1)}function l(e){for(let t=0;t<n.length;t++)n[t].classList.remove("active");for(let t=0;t<=e;t++)n[t].classList.add("active")}
