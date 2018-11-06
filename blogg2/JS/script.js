
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


<<<<<<< HEAD
//recogemos los elementos li
=======
//regocemos los elementos li
>>>>>>> 0e3add1a1ee2510dc1ddfb4d9186fa990e55282f
var lis = document.getElementsByTagName("li");

for(var i = 0; i < lis.length; i++){
	document.getElementById(lis[i].id).addEventListener("click", redireccionar);
}

function redireccionar(e){

<<<<<<< HEAD
	var rutaDestino ='http://localhost/Proyectos/blog/RetoBlog/blogg2/' + e.target.id + '.php';
=======
	var rutaDestino ='http://localhost/Proyectos/RETOBLOG/RetoBlog/blogg2/' + e.target.id + '.php';
>>>>>>> 0e3add1a1ee2510dc1ddfb4d9186fa990e55282f
	
	if(window.location != rutaDestino){

		location.href=rutaDestino.toString();
	}
}
