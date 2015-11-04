<!DOCTYPE html>
<html>
<head>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!-- ... -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
  <script src="datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">

window.onload = function () {

// Variable global por estar declarada sin hacer uso de var

elementosEnForm = document.forms['FormuUsuario'].elements;

for (var i=0; i< elementosEnForm.length; i++) {
                if (elementosEnForm[i].type != 'checkbox') {elementosEnForm[i].disabled = true;}
                else {elementosEnForm[i].addEventListener('click', activarElementos);}
 }
}
function activarElementos() { for (var i=0; i<elementosEnForm.length; i++) {elementosEnForm[i].disabled=false;} }

</script>

  <script>
        $(function(){
          $('.datepicker').datepicker();
        });
  </script>

  <link rel="stylesheet" href="datepicker/css/datepicker.css">
</head>
<body>

<fieldset>

<!-- Form Name -->
<legend>Propietario</legend>

<form name ="FormuUsuario" class="form-horizontal">

<div class="form-group">
  <div class="checkbox">
    <div class='input-group date' id='datetimepicker1'>
      <label>
      <input type="checkbox" name="tratamiento" id="Modifica" value="si" />
      <span class="input-group-addon">
      <span class=" glyphicon glyphicon-pencil"></span>
    </span>
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NombreProp">Nombre</label>  
  <div class="col-md-6">
  <input id="NombreProp" name="NombreProp" placeholder="Nombre Completo" class="form-control input-md" required="" type="text">
  <span class="help-block">Nombre del propietario de la vivienda</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Cedula">Cedula</label>  
  <div class="col-md-5">
  <input id="Cedula" name="Cedula" placeholder="Cedula" class="form-control input-md" required="" type="number">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Telefono">Telefono</label>  
  <div class="col-md-4">
  <input id="Telefono" name="Telefono" placeholder="Telefono Fijo" class="form-control input-md" type="number">
  <span class="help-block">Telefono Fijo</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Celular">Celular</label>  
  <div class="col-md-4">
  <input id="Celular" name="Celular" placeholder="Celular" class="form-control input-md" required="" type="number">
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">@</span>
      <input id="Email" name="Email" class="form-control" placeholder="Email" required="" type="email">
    </div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Apartamento">Apartamento</label>
  <div class="col-md-4">
    <select id="Apartamento" name="Apartamento" class="form-control">
      <option value="101">101</option>
      <option value="102">102</option>
      <option value="103">103</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Torre">Torre</label>
  <div class="col-md-4">
    <select id="Torre" name="Torre" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
    </select>
  </div>
</div>

<!-- Date Picker -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Torre">Fecha Inicio</label>
  <div class="col-md-4">
    <div class='input-group date' id='datetimepicker1'>
    <input type='text' class="form-control datepicker" name="FechaIni" />
      <span class="input-group-addon">
      <span class="glyphicon glyphicon-calendar"></span>
    </span>
    </div>
    <span class="help-block">Fecha de ingreso a la unidad</span> 
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Guardar"></label>
  <div class="col-md-4">
    <button id="Guardar" name="Guardar" class="btn btn-success">Guardar</button>
  </div>
</div>

</fieldset>
</form>