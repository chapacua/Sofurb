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
<legend>Ingreso Vivienda</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NombreProp">ID</label>  
  <div class="col-md-5">
  <input id="NombreProp" name="NombreProp" placeholder="Nombre Completo" class="form-control input-md" required="" type="number" required="required">
    <span class="help-block">Numero o identificador del apartamento, casa, o aparta-estudio</span> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="NombreProp">Ubicacion</label>  
  <div class="col-md-5">
  <input id="NombreProp" name="NombreProp" placeholder="Nombre Completo" class="form-control input-md" required="" type="text"  required="required">
    <span class="help-block">Numero o identificador de la torre, manzana, o bloque donde esta ubicado</span> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Habitaciones">Piso</label>
  <div class="col-md-4">
    <select id="Habitaciones" name="Habitaciones" class="form-control"  required="required">
      <option selected="selected" value="">Seleccione</option>
      <option value="1">1ro</option>
      <option value="2">2do</option>
      <option value="3">3ro</option>
      <option value="4">4to</option>
      <option value="5">5to</option>
      <option value="6">6to</option>
      <option value="7">7mo</option>
      <option value="8">8vo</option>
      <option value="9">9no</option>
      <option value="10">10mo</option>
      <option value="11">11vo</option>
      <option value="12">12vo</option>
      <option value="13">13vo</option>
      <option value="14">14vo</option>
      <option value="15">15vo</option>
      <option value="16">16vo</option>
      <option value="17">17vo</option>
      <option value="18">18vo</option>
      <option value="19">19vo</option>
      <option value="20">20vo</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Habitaciones">Habitaciones</label>
  <div class="col-md-4">
    <select id="Habitaciones" name="Habitaciones" class="form-control"  required="required">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Habitaciones">Baños</label>
  <div class="col-md-4">
    <select id="Habitaciones" name="Habitaciones" class="form-control"  required="required">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Habitaciones">Balcones</label>
  <div class="col-md-4">
    <select id="Habitaciones" name="Habitaciones" class="form-control"  required="required">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </div>
</div>

<!-- Text text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Cobro">Monto a cobrar</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">$</span>
      <input id="Cobro" name="Cobro" class="form-control" placeholder="Valor en pesos, sin puntos"  type="number"  required="required">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Habitaciones">Dueño</label>
  <div class="col-md-4">
    <select id="Habitaciones" name="Habitaciones" class="form-control">
      <option value="0">0</option>
    </select>
  </div>
</div>


<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Direccion">Direccion</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="Direccion" name="Direccion" class="form-control" placeholder="Direccion" type="text"  required="required">
      <span class="input-group-addon">
      <span class=" glyphicon glyphicon-globe"></span>
    </div>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Comentarios">Comentarios</label>
  <div class="col-md-4">
    <div class="input-group">
    <textarea id="Comentarios" name="Comentarios" class="form-control" placeholder="Comentarios" ></textarea>
      <span class="input-group-addon">
      <span class=" glyphicon glyphicon-pencil"></span>
    </div>
  </div>
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

