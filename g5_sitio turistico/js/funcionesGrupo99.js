function obtenerdatos()
{
	var usuario=document.getElementById('usuario').value;
	var contraseña=document.getElementById('contraseña').value;

	document.write(" usuario: "+usuario+"<br> ");
	document.write("contraseña: "+contraseña+"<br>");
}

setTimeout(function(obtenerdatos) {
	location.href='index.html';

}, 1000 *10);
