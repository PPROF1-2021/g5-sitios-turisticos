

function diferenciaDias(fecha){
    var inicio = new Date().getTime();
    var fin = new Date(fecha).getTime();
    var dias = (fin-inicio)/(1000*60*60*24);

    return Math.round(dias);

}

function cambiarColor(id,sombra){
    document.getElementById(id).style.color = sombra;
    console.log(document.getElementById(id).style.color);
}

function mostrarMensaje(msj){
    alert(msj);
}