 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html><head><title>Ejemplo aprenderaprogramar.com</title><meta charset="utf-8">

<style type="text/css"> body, p {margin-left:30px; font-family: sans-serif;}

.estiloForm {background-color: #f3f3f3; border: solid 2px black; margin-left:20px; width: 330px; padding:10px; }

.estiloForm label {display: block; width: 120px; float: left; text-align:right; margin-bottom: 35px; padding-right: 20px;}

br {clear: left;} input[type="submit"], input[type="reset"] {margin:25px 5px 10px 5px;}

</style>

<script type="text/javascript">

window.onload = function () {

// Variable global por estar declarada sin hacer uso de var

elementosEnForm = document.forms['formularioContacto'].elements;

for (var i=0; i< elementosEnForm.length; i++) {

                if (elementosEnForm[i].type != 'radio') {elementosEnForm[i].disabled = true;}

                else {elementosEnForm[i].addEventListener('click', activarElementos);}

}

}

 

function activarElementos() { for (var i=0; i<elementosEnForm.length; i++) {elementosEnForm[i].disabled=false;} }

</script>

</head>

<body><h2>Cursos aprenderaprogramar.com</h2><h3>Ejemplos JavaScript</h3>

                <div class="estiloForm">

                               <form name ="formularioContacto" method="get" action="http://aprenderaprogramar.com">

                               <p>Debe elegir tratamiento para activar el formulario</p>

                               <label>Tratamiento</label>

                               <input type="radio" name="tratamiento" id="tratarSr" value="Sr."/>Sr.

                               <input type="radio" name="tratamiento" id ="tratarSra" value="Sra."/>Sra.<br/>

                               <label>Nombre</label><input id="nombre" name="nombre" type="text"/><br/>

                               <label>Apellidos</label><input id="apellidos" name="apellidos" type="text"/><br/>

                               <label>Dirección</label><input id="direccion1" name="direccion1" type="text"/><br/>

                               <label>Ciudad</label><select id="ciudad" name="ciudad">

                               <option value="">Elija opción</option><option value="Mexico">México D.F. (MX)</option>

                               <option value="Madrid">Madrid (ES)</option><option value="Santiago">Santiago (CL)</option>

                               </select><br/>

                               <label>Preferencias</label><input name="Libros" type="checkbox" />Libros

                               <input name="Peliculas" type="checkbox"  />Películas

                               <input class="botonFormulario" type="submit" value="Enviar"/>

                               <input class="botonFormulario" type="reset" value="Cancelar"/>

                </form>

                </div>
</body></html>