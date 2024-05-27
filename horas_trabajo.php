<!DOCTYPE html>
<html lang="es">
<head>
    <head>
        <?php include("head.php");?>
    </head>
    <body>
       <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="https://spmardique.com/" target="_blank">Aplicativo SIMAEQ</a>
                   
                   
                </div>
            </div>
            <!-- /navbar-inner -->
        </div><br/>

            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
                            
            
            <blockquote>
            Registrar Horas de Trabajo de Equipo
            </blockquote>
                         <form name="form1" id="form1" class="form-horizontal row-fluid" action="" method="POST" >
										

										<div class="control-group">
											<label class="control-label" for="Seleccione el Equipo">Equipo</label>
											<div class="controls">
												
												<select class="form-group col-md-4">
												  <option>Grúa Pórtico</option>
												  <option>Grúa Movil</option>
												  <option>Transtainer</option>
												  <option>Reach Stacker</option>
												  <option>Empty Container</option>
												  <option>Montacargas</option>
												  <option>Tracto Camión</option>
												</select>
											</div>
										</div>                           
                                      <div class="control-group">
											<label class="control-label" for="referencia">Referencia del Equipo</label>
											<div class="controls">
												
												<select class="form-group col-md-4">
												  <option>GP-001</option>
												  <option>GP-002</option>
												  <option>GP-003</option>
												  <option>GP-004</option>
												  <option>GP-005</option>
												  <option>GP-006</option>
												  <option>GM-001</option>
												  <option>GM-002</option>
												  <option>GM-003</option>
												  <option>GM-004</option>
												  <option>GM-005</option>
												  <option>TN-001</option>
												  <option>TN-002</option>
												  <option>TN-003</option>
												  <option>TN-004</option>
												  <option>TN-005</option>
												  <option>TN-006</option>
												  </option>
												</select>
											</div>
										</div>
										<br>
										<div class="form-group col-md-4">
											<label class="control-label" for="nombres">Horas Trabajada</label>
											<div class="controls">
												<input type="text" name="Horas trabajada" id="horas trabajadas" placeholder="Horas_trabajo" class="form-control span8 tip" required>
											</div>
										</div>
										</br>
									</br><option></br></option>

										<div class="form-group col-md-6">
											<div class="controls">
												<button type="submit" name="input" id="input" class="btn btn-sm btn-primary">Registrar</button>
                                               <a href="../../principal.php"class="btn btn-sm btn-danger">Cancelar</a>
											</div>
										</div>
									</form>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        
        <!--/.wrapper--><br />
        <div class="footer span-12">
            <div class="container">
              <center> <b class="copyright"><a href="https://spmardique.com/"> Aplicativo SIMAEQ</a> &copy; <?php echo date("Y")?> Sistema de Mantenimiento de equipos </b></center>
            </div>
        </div>

        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      
    </body>
