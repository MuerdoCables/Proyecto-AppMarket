document.getElementById("foto").addEventListener("change",r,!1);function r(t){var a=t.target.files[0],e=new FileReader;e.onload=n=>document.getElementById("imagen").setAttribute("src",n.target.result),e.readAsDataURL(a)}
