//Variables globales
var form = document.getElementById('nvoUsr');
var div;

function validarForm(){

  var div_error;
  var msj;

  var tel = document.getElementById('tel');
  var cel = document.getElementById('cel');

  //Valida el telefono
  if (valNum(tel.value)) {
    div_error = document.getElementById('error_tel');
    if(div_error === null)
      mensajeE(tel,'error_tel','¡Debes teclear solo números!');
  }
  else {
    div_error = document.getElementById('error_tel');
    if(div_error !== null)
      form.removeChild(div_error);
  }

  //Valida el celular
  if (valNum(cel.value)) {
    div_error = document.getElementById('error_cel');
    if(div_error === null)
      mensajeE(cel,'error_cel','¡Debes teclear solo números!');
  }
  else {
    div_error = document.getElementById('error_cel');
    if(div_error !== null)
      form.removeChild(div_error);
  }

  //Valida código postal
  var cp = document.getElementById('cp');

  if(! /^\d{5}$/.test(cp.value)){
    div_error = document.getElementById('error_cp');
    if(div_error === null)
      mensajeE(cp,'error_cp','¡CP incorrecto!');
  }
  else {
    div_error = document.getElementById('error_cp');
    if(div_error !== null)
      form.removeChild(div_error);
  }

  //Valida que las contraseñas sean iguales y este en un rango de 6 a 20 carácteres
  var clv = document.getElementById('clave');
  var cclv = document.getElementById('cclave');

  switch (valClv(clv,cclv)) {

    case 'dif': div_error = document.getElementById('error_cclave');
            if(div_error === null)
              mensajeE(cclv,'error_cclave','¡Las contraseñas no coincidén!');
      break;

    case 'tam': div_error = document.getElementById('error_clave');
            if(div_error === null)
              mensajeE(clv,'error_clave','¡La contraseña debe estar en un rango de 6 a 20 carácteres!');
      break;

    default:  div_error = document.getElementById('error_clave');
              if(div_error !== null)
                form.removeChild(div_error);
              div_error = document.getElementById('error_cclave');
              if(div_error !== null)
                form.removeChild(div_error);
  }
}

//Funciónpara validar que las cadenas sean digitos y espacios en blanco
function valNum(cad){

  var cadAux = "";
  var estado = false;

  for(var i=0; i<cad.length; i++ ){
    if(cad.charAt(i) != ' ' && cad.charAt(i) != '-')
      cadAux += cad.charAt(i);
  }

  if(isNaN(cadAux))
    estado = true; //regresa verdadero si la cadena tiene letras

  return estado;
}

//Función para insertar mensaje con erro para el telefono y celular
function mensajeE(ent,tpError,mensaje){

  div = document.createElement('div');
  div.setAttribute('class','error');
  div.setAttribute('id',tpError);

  //Mensaje de error
  var msj = document.createTextNode(mensaje);
  div.appendChild(msj);
  form.insertBefore(div,ent.nextSibling);
}

//Función para validar la contraseña
function valClv(clv,cclv){
  clv = document.getElementById('clave');
  estado = 'ext';

  if(clv.value.length >= 6 && clv.value.length <= 20){
    cclv = document.getElementById('cclave');
    if(clv.value !== cclv.value)
      estado = 'dif';
  }
  else
    estado = 'tam';

  return estado;
}
