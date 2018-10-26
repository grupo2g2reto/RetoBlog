//..................................................LOGIN..............................................................
//...........................................desplegable login.........................................................
// mostrar y ocultar formulario de inicio de sesion
var login=document.getElementById("login");
login.onclick= desplegarLogin()
function desplegarLogin(){
	document.getElementsByClassName("testbox").style(display = "block");
};
/*function desplegarLogin(){
	document.getElementsByClassName("testbox").style(display = "block");
	//document.write("<style>.testbox{display: block;}</style>");document.write("<style>.testbox{display: block;}</style>");
}*/
   /* var login=document.getElementById('login');
    console.log(login);*/


//EDITOR DE TEXTO ENTRADAS
$(document).ready(function(){
	//#id del texto
	$('#txt-content').Editor();
});

 



