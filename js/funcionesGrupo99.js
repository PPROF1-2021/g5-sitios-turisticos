// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }else{
          alert("Datos enviados de manera exitosa")
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

  function cargaBody(){
    alert('En esta página podrás contactarte con el equipo ClickAr');
  }

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
