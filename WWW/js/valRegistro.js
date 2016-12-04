//Variables globales
var form = document.getElementById('nvoUsr');
var div;

function validarForm(){

  var div_error;
  var msj;
  var contador = 0; //contador para validar que todos los campos sean correctos

  //revisa los espacios en blanco del nombre y nombre de usuario
  vacio();

  var tel = document.getElementById('tel');
  var cel = document.getElementById('cel');

  //Valida el telefono
  if (valNum(tel.value)) {
    div_error = document.getElementById('error_tel');
    if(div_error === null)
      mensajeE(tel,'error_tel','¡Debes teclear solo números!');
  }
  else{
    borrarDiv('error_tel');
    contador++;
  }

  //Valida el celular
  if (valNum(cel.value)) {
    div_error = document.getElementById('error_cel');
    if(div_error === null)
      mensajeE(cel,'error_cel','¡Debes teclear solo números!');
  }
  else{
    borrarDiv('error_cel');
    contador++;
  }

  //Valida código postal
  var cp = document.getElementById('cp');

  if(! /^\d{5}$/.test(cp.value)){
    div_error = document.getElementById('error_cp');
    if(div_error === null)
      mensajeE(cp,'error_cp','¡CP incorrecto!');
  }
  else{
    borrarDiv('error_cp');
    contador++;
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

    default: borrarDiv('error_clave');
             borrarDiv('error_cclave');
             contador++;
  }
alert(contador);
  if(contador === 4)
    return true;
  else
    return false;
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
  estado = 'ext';

  if(clv.value.length >= 6 && clv.value.length <= 20){
    borrarDiv('error_clave');//Se borra el div con el error del tamaño si estaba incorrecto
    if(clv.value !== cclv.value)
      estado = 'dif';
  }
  else
    estado = 'tam';

  return estado;
}

function vacio()
{
  var vec = [];
  vec[0] = document.getElementById('nombre');
  vec[1] = document.getElementById('apellidoP');
  vec[2] = document.getElementById('apellidoM');
  vec[3] = usrNom = document.getElementById('usrNom');

  for(var i=0; i<vec.length; i++){
    var error = 'erro_'+vec[i].id;

    if(vec[i].value === null || vec[i].value.length === 0 || /^\s*$/.test(vec[i].value)){
      var div_error = document.getElementById(error);
      if(div_error === null)
        mensajeE(vec[i],error,'¡No debe estar vacio!');
    }
    else
      borrarDiv(error);
  }
}

function borrarDiv(error)
{
  var div_error = document.getElementById(error);
  if(div_error !== null)
    form.removeChild(div_error);
}
