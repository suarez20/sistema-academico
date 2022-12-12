<?php
include "../include/header.php";
?>

<!-- page content -->
<div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro de Docente</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="operaciones/registrar_estudiante.php">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DNI :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="dni" maxlength="8" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos y Nombres :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nom_ap" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Genero :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_genero" id="id_genero" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $buscar_genero = buscarGenero($conexion);
                          while ($res_b_genero = mysqli_fetch_array($buscar_genero)) {
                          ?>
                          <option value="<?php echo $res_b_genero['id']; ?>"><?php echo $res_b_genero['genero']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Nacimiento :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="fecha_nac" class="date-picker form-control col-md-7 col-xs-12" required="required" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dirección :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="direccion" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Correo :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NRO Celular :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cel" maxlength="9" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Año de Ingreso :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="anio_ingreso" maxlength="9" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Programa de Estudios :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="programa_estudio" id="programa_estudio" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $buscar_pe = buscarProgramaEstudio($conexion);
                          while ($res_b_pe = mysqli_fetch_array($buscar_pe)) {
                          ?>
                          <option value="<?php echo $res_b_pe['id']; ?>"><?php echo $res_b_pe['nombre']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Semestre:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="semestre" id="semestre" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $buscar_sem = buscarSemestre($conexion);
                          while ($res_b_sem = mysqli_fetch_array($buscar_sem)) {
                          ?>
                          <option value="<?php echo $res_b_sem['id']; ?>"><?php echo $res_b_sem['descripcion']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Seccion :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="seccion" maxlength="9" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Turno :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="turno" maxlength="9" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Condición :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="condicion" id="condicion" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $buscar_condicion = buscarCondicion($conexion);
                          while ($res_b_condicion = mysqli_fetch_array($buscar_condicion)) {
                          ?>
                          <option value="<?php echo $res_b_condicion['id']; ?>"><?php echo $res_b_condicion['descripcion']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Discapacidad :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="discapacidad" id="discapacidad" class="form-control col-md-7 col-xs-12">
                            <option value="">Seleccione</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="../Docentes.php"><button class="btn btn-primary" type="button">Cancelar</button></a>
						              <button class="btn btn-primary" type="reset">Limpiar</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->

<?php
include "../include/footer.php";
?>