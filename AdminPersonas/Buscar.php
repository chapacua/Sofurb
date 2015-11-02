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
  <title>Buscar</title>
</head>
<body>
<fieldset>

<!-- Form Name -->
<center>
<legend>Buscar</legend>
</center>
<!-- Text input-->
<div class="container">
  <div class="row" align="center">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-perpage">Tipo:</label>
                            <select id="pref-perpage" class="form-control">
                                <option selected="selected" value="">Todos</option>
                                <option value="Inquilino">Inquilino</option>
                                <option value="Propietario">Propietario</option>
                            </select>                                
                        </div> <!-- form group [rows] -->
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Nombre:</label>
                            <input type="text" class="form-control input-sm" id="pref-search" name="Nombre">
                        </div>
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Cedula:</label>
                            <input type="number" class="form-control input-sm" id="pref-search" name="Cedula">
                        </div>
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search"># Vivienda:</label>
                            <input type="number" class="form-control input-sm" id="pref-search" name="Cedula">
                        </div>
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search"># Torre/Manzana/Bloque:</label>
                            <input type="text" class="form-control input-sm" id="pref-search" name="Cedula">
                        </div><!-- Date Picker -->
                        <div class="form-group">
                          <label class="filter-col" style="margin-right:0;" for="pref-search">Fecha ingreso:</label>
                            <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control datepicker input-sm" name="FechaIni"/>
                              <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            </div>
                          </div>                               
                        </div> <!-- form group [order by] --> 
                        <div class="form-group">    
                            <button type="submit" class="btn btn-default filter-col">
                                <span class="glyphicon glyphicon-record"></span> Encontrar
                            </button>  
                        </div>
                    </form>
                </div>
            </div>
        </div>    
  </div>
</div>