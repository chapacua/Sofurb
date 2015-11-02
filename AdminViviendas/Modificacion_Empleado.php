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
  <script type="text/javascript" src="/bower_components/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
  <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <script src="datepicker/js/bootstrap-datepicker.js"></script>
  <script>
        $(function(){
          $('.datepicker').datepicker();
        });
  </script>
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
  <link rel="stylesheet" href="datepicker/css/datepicker.css">
</head>
<body>
<form class="form-horizontal" name="fomulario">
<fieldset>

<!-- Form Name -->
<legend>Modificacion Empleado</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NombreProp">Nombre</label>  
  <div class="col-md-5">
  <input id="NombreProp" name="NombreProp" placeholder="Nombre Completo" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Cedula">Cedula</label>  
  <div class="col-md-4">
  <input id="Cedula" name="Cedula" placeholder="Cedula" class="form-control input-md" required="" type="number">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Cargo">Cargo</label>
  <div class="col-md-4">
    <select id="Cargo" name="Cargo" class="form-control">
      <option value="Vigilante">Vigilante</option>
      <option value="Aseador">Aseador</option>
      <option value="Administrador">Administrador</option>
    </select>
  </div>
</div>

<!-- Text text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Salario">Salario</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">$</span>
      <input id="Salario" name="Salario" class="form-control" placeholder="Salario" required="" type="number">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Telefono">Telefono</label>  
  <div class="col-md-4">
  <input id="Telefono" name="Telefono" placeholder="Telefono Fijo" class="form-control input-md" type="number"> 
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

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Direccion">Direccion</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="Direccion" name="Direccion" class="form-control" placeholder="Direccion" required="" type="Direccion">
      <span class="input-group-addon">
      <span class=" glyphicon glyphicon-globe"></span>
    </div>
  </div>
</div>

<!-- Date Picker -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Torre">Fecha Inicio</label>
  <div class="col-md-4">
    <div class='input-group date' id='datetimepicker1'>
    <input type='text' class="form-control datepicker" name="FechaIni" disabled="disabled"/>
      <span class="input-group-addon">
      <span class="glyphicon glyphicon-calendar"></span>
    </span>
    </div>
    <span class="help-block">Fecha de inicio del contrato</span> 
  </div>
</div>

<!-- Date Picker -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Torre">Fecha Salida</label>
  <div class="col-md-4">
    <div class='input-group date' id='datetimepicker1'>
    <input type='text' class="form-control datepicker" name="FechaIni"  />
      <span class="input-group-addon">
      <span class="glyphicon glyphicon-calendar"></span>
    </span>
    </div>
    <span class="help-block">Fecha de finalizacion del contrato</span> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Cargo">Estado</label>
  <div class="col-md-4">
    <select id="Cargo" name="Cargo" class="form-control">
      <option value="Vigilante">Contratado</option>
      <option value="Aseador">Despedido</option>
      <option value="Administrador">Renunció</option>
    </select>
  </div>
</div>
<div>
  <input type="hidden" name="Tipo" value="Inquilino">
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Crear"></label>
  <div class="col-md-4">
    <button id="Crear" name="Crear" class="btn btn-success">Crear</button>
  </div>
</div>

</fieldset>
</form>

