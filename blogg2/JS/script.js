
/* login */

function mostrarOcultar(id){
    var elemento = document.getElementById(id);

    /*  if(!elemento) {
    return true;
    }  */
    if (elemento.style.display == "none") {
    elemento.style.display = "block"
    } else {
    elemento.style.display = "none"
    };
    return true;
    };


//regocemos los elementos li
var lis = document.getElementsByTagName("li");

for(var i = 0; i < lis.length; i++){
	document.getElementById(lis[i].id).addEventListener("click", redireccionar);
}

function redireccionar(e){

	var rutaDestino ='http://localhost/Proyectos/RETOBLOG-ANNE/RetoBlog/blogg2/' + e.target.id + '.php';
	
	if(window.location != rutaDestino){

		location.href=rutaDestino.toString();
	}
}
function mostrarComentarios(){
    var rutaDestino ='http://localhost/Documentos/RetoBlog/blogg2/mostrarComentario.php';
	if(window.location != rutaDestino){

		location.href=rutaDestino.toString();
	}
}
