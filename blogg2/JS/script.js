
/*------------- -----------------------login */

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


//-----------------------------recogemos los elementos li
var lis = document.getElementsByTagName("li");

for(var i = 0; i < lis.length; i++){
	document.getElementById(lis[i].id).addEventListener("click", redireccionar);
}

//-----------------------------REDIRECCIONAMIENTO--------------------------
function redireccionar(e){
	var rutaDestino ='http://localhost/Proyectos/RETOBLOG/RetoBlog/blogg2/' + e.target.id + '.php';
	if(window.location != rutaDestino){
		location.href=rutaDestino.toString();
	}
}

//------------------------MOSTRAR COMENTARIOS-------------------------------
function mostrarComentarios(){
    var rutaDestino ='http://localhost/Proyectos/RETOBLOG/RetoBlog/blogg2/insertarComentario.php';
	if(window.location != rutaDestino){
		location.href=rutaDestino.toString();
	}
}

//-------------------------CONFIRMAR BORRAR USUARIO----------------------
function confirmarBorrarUsuario() {
    console.log("prueba");
    var r = confirm("¿Borrar usuario?");
    if (r == false) {
        event.preventDefault();
    }
}

//--------------------------CONFIRMAR BORRAR COMENTARIO---------------------
function confirmarBorrarComentario() {
    console.log("prueba");
    var r = confirm("¿Borrar comentario?");
    if (r == false) {
        event.preventDefault();
    }
}

//--------------------------CONFIRMAR BORRAR ENTRADA--------------------------
function confirmarBorrarEntrada() {
    console.log("prueba");
    var r = confirm("¿Borrar entrada?");
    if (r == false) {
        event.preventDefault();
    }
}

//---------------------------------CONFIRMACIÓN ACTUALIZACIÓN DE USUARIO-------
function confirmarActualizarUsuario() {
    console.log("prueba");
    var r = confirm("Actualizar usuario?");
    if (r == false) {
        event.preventDefault();
    }
}

/*-------------------------REGISTRO-----------------------------------*/
var red = "#8C1010";
var original = "rgba(10, 180, 180, 1)";

//--------------------------VALIDAR USUARIO-----------------
function validarUsuario(u) {
    var usuario = document.getElementById("usuario");
    var array = [];
    /*Busca una cadena .test() */
    if (/[-!@#$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/.test(u)) {
        /*push() agrega uno o más elementos al final de un array y devuelve la nueva */
        array.push("No se puede utilizar caracteres especiales");
    }
    if (array.length > 0) {
        usuario.setCustomValidity(array);
        usuario.style.borderColor = red;
    } else {
        usuario.setCustomValidity("");
        usuario.style.borderColor = original;
    }
}

//--------------------------VALIDAR CONTRASEÑA--------------------
function validarPass(pass) {
    var clave = document.getElementById("pass");
    var array = [];
    if (!/^.{7,15}$/.test(pass)) {
        array.push("La contraseña debe tener entre 7-15 caracteres.");
    }
    if (!/\d/.test(pass)) {
        array.push("Debe contener al menos un número.");
    }
    if (!/[a-z]/.test(pass)) {
        array.push("Debe contener una letra minúscula.");
    }
    if (!/[A-Z]/.test(pass)) {
        array.push("Debe contener una letra mayúscula.");
    }
    if (array.length > 0) {
        /*join() une todos los elementos de una matriz (o un objeto similar a una matriz) en una cadena y devuelve esta cadena. */
        clave.setCustomValidity(array.join(""));
        clave.style.borderColor = red;
    } else {
        clave.setCustomValidity("");
        clave.style.borderColor = original;
    }
}

//----------------------VALIDAR EMAIL-----------------
function validarCorreo(email) {  
    var correo = document.getElementById("correo");
    var array = [];
    if (/^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email)) {
        correo.setCustomValidity("");
        correo.style.borderColor = original;   
    } else {
        array.push("Introduce el correo como este ejemplo nombrecorreo@dominio.com");
        correo.setCustomValidity(array);
        correo.style.borderColor = red;
    
    }
}

