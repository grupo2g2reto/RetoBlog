
/* login */

function mostrarOcultar(id){
    var elemento = document.getElementById(id);
   /*  if(!elemento) {
    return true;
    } */
    if (elemento.style.display == "none") {
    elemento.style.display = "block"
    } else {
    elemento.style.display = "none"
    };
    return true;
    };


//regocemos los elementos li
var lis = document.querySelectorAll(".admin");

for(var i = 0; i < lis.length; i++){
	document.getElementById(lis[i].id).addEventListener("click", redireccionar);
}

function redireccionar(e){
	//alert(e.target.id);
	//console.log(e.target.id);
	var rutaDestino ='http://http://localhost/Proyectos/RETOBLOG-ANNE/RetoBlog/blogg2/' + e.target.id + '.php';
	//console.log(location.href);
	//console.log(rutaDestino);
	if(window.location != rutaDestino){
		console.log('redireccionando...');
		location.href=rutaDestino.toString();
	}
}
