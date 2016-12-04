var form = document.getElementById('producto');
var div;

function valProducto(){

  var div_error;
  var contador = 0; //validar el numero de errores para poder continuar el registro
  var vec = [];
  vec[0] = document.getElementById('nomProducto');
  vec[1] = document.getElementById('descripcion');

  //Se valida que el nombre del producto y  la descripcion no este en blanco
  for(var i=0; i<vec.length; i++){
    var error = 'erro_'+vec[i].id;
    if(vec[i].value.length === 0 || /^\s*$/.test(vec[i].value)){
      div_error = document.getElementById(error);
      if(div_error === null)
        mensajeE(vec[i],error,'¡No debe estar en blanco!');
    }
    else
      borrarDiv(error);
  }

  return true;
}

function msjError(ent,error,msj){
  div = document.createElement('div');
  div.setAttribute('class','error');
  div.setAttribute('id',error);

  var mensaje = document.createTextNode(msj);
  div.appendChild(mensaje);
  form.insertBefore(div,ent.nextSibling);

}

function borrarDiv(error){
  var div_error = document.getElementById(error);
  if(div_error !== null)
    form.removeChild(div_error);
}
