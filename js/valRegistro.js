//Variables globales
var form = document.getElementById('nvoUsr');

function validarForm(){

  var div_error;
  var tel = document.getElementById('tel');
  var cel = document.getElementById('cel');

  //Valida el telefono
  if (valNum(tel.value)) {
    mensajeE(tel,'error_tel');
  }
  else {
    div_error = document.getElementById('error_tel');
    if(div_error)
      form.removeChild(div_error);
  }

  //Valida el celular
  if (valNum(cel.value)) {
    mensajeE(cel,'error_cel');
  }
  else {
    div_error = document.getElementById('error_cel');
    if(div_error)
      form.removeChild(div_error);
  }

  //Valida que las contraseñas sean iguales
  var clv = document.getElementById('clave');
  var cclv = document.getElementById('cclave');

  if(clv.value !== cclv.value){

    var div = document.createElement('div');

    div.setAttribute('class','error');
    div.setAttribute('id','error_clv');

    var msg = document.createTextNode('¡Las contraseñas no coincidén!');
    div.appendChild(msg);
    form.insertBefore(div,cclv.nextSibling);
  }
  else {
    div_error = document.getElementById('error_clv');
    if(div_error)
      form.removeChild(div_error);
  }
}

//Funciónpara validar que las cadenas sean digitos y espacios en blanco
function valNum(cad){

  var cadAux = "";
  var estado = false;

  for(var i=0; i<cad.length; i++ ){
    if(cad.charAt(i) != ' ')
      cadAux += cad.charAt(i);
  }

  if(isNaN(cadAux))
    estado = true; //regresa verdadero si la cadena tiene letras

  return estado;
}

//Función para insertar mensaje con erro para el telefono y celular
function mensajeE(ent,tpError){

  var div = document.createElement('div');
  div.setAttribute('class','error');
  div.setAttribute('id',tpError);

  //Mensaje de error
  var msg = document.createTextNode('¡Debes escribir solo números!');
  div.appendChild(msg);
  form.insertBefore(div,ent.nextSibling);
}
