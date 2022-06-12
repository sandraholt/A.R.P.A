
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leve</title>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="css/otros.css" title="css">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="parte">PARTE DE CONVIVENCIA LEVE</h1>
                <hr>
                <form id="form" name="leve" class="leve" action="leve.php" method = "POST">
                    <div class="mb-3">
                        <div class="col-md-6">
                            <label for="profesor" class="form-label">PROFESOR/A que rellena el parte</label>
                            <input type="text" class="form-control" name="profesor" id="profesor" required="">
                        </div>
                    </div>
		    </br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="alumno" class="form-label">ALUMNO/A</label>
                            <input type="text" class="form-control" name="alumno" id="alumno" required="">
                        </div>
			</br>
                        <div class="col-md-6">
                            <label for="grupo" class="form-label">GRUPO</label>
                            <input type="text" class="form-control" name="grupo" id="grupo" required="">
                        </div>
			</br>
                        <div class="col-md-6">
                            <label for="tutor" class="form-label">TUTOR</label>
                            <input type="text" class="form-control" name="tutor" id="tutor" required="">
                        </div>
            </br>
                        <div class="col-md-6">
                            <label for="email" class="form-label">EMAIL</label>
                            <input type="email" class="form-control" name="email" id="email" required="">
                        </div>
                    </div>
			</br>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <div>
                                <label for="" class="form-label">TIPIFICACIÓN DE LA CONDUCTA CONTRARIA A LAS NORMAS DE CONVIVENCIA</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="perturba" class="form-check-input" id="perturba">
                                    <label for="hijos-si" class="form-check-label">Perturba el normal desarrollo de las actividades de clase</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="colaboracion" class="form-check-input" id="colaboracion">
                                    <label for="hijos-si" class="form-check-label">Falta de colaboración sistemática en la realización de actividades</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="impide" class="form-check-input" id="impide">
                                    <label for="hijos-si" class="form-check-label">Impide o dificultael estudio a sus compañeros/as</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="puntualidad" class="form-check-input" id="puntualidad">
                                    <label for="puntualidad-si" class="form-check-label">Falta injustificada de puntualidad</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="asistencia" class="form-check-input" id="asistencia">
                                    <label for="asistencia-si" class="form-check-label">Falta injustificada de asistencia a clase</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="actuacion" class="form-check-input" id="actuacion">
                                    <label for="actuacion-si" class="form-check-label">Actuación incorrecta hacia algún miembro de la comunidad educativa</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="daños" class="form-check-input" id="daños">
                                    <label for="daños-si" class="form-check-label">Daños en instalaciones, documentos del Centro, o pertenencias de algún miembro de la comunidad educativa</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="material" class="form-check-input" id="material">
                                    <label for="material-si" class="form-check-label">No trae material para trabajar en clase</label>
                                </div>
                            </div>
                        </div>
			</br>
                        <div class="col-md-9">
                            <div>
                                <label for="conducta" class="form-label">OTRA CONDUCTA NO CONTEMPLADA</label>
				</br>
                                <input type="text" class="form-control" name="conducta" id="conducta" required="">
                            </div>
                        </div>
                    </div>
			</br>
                    <div class="row mb-3">
                        <div class="col-md-9">
                            <div>
                                <label for="descripcion" class="form-label">DESCRIPCIÓN DE LA CONDUCTA</label></br>
                                <input type="text" class="form-control" name="descripcion" id="descripcion" required="">
                            </div>
                        </div>
                    </div>
			</br>
                    <span class="d-block pb-2">FIRMA PROFESOR/A</span>
                    <div class="signature mb-2" style="background-color: white; width: 100%; height: 200px;">
                        <canvas id="signature-canvas"
                            style="border: 1px solid rgb(6, 6, 6); width: 100%; height: 200px;"></canvas>
                    </div>
                    <?php
                        include("conexion.php");
                        if(isset($_POST['alumno'])){
                            $query=mysqli_query($conexion, "SELECT alumnocontacto_email  FROM alumnos WHERE user = '$alumno'");
                            $nr = mysqli_num_rows($query);
                            if($nr == 1)
                            {
                                echo "<script> alert('RECOGIDO');</script>";
                            }
                            else
                            {
                                echo "<script> alert('El usuario no existe');</script>";
                            }
                        }
                    ?>
                    <table>
                        <tr>
                            <a href="mailto:aabusarj2656@iesbezmiliana.net?subject=Parte disciplinario&body=Su hij@ ha sido amonestado">
                            <button type="submit" class="boton" name="enviar">Enviar</button></a>
                            <button type="reset" class="boton" name="reset">Borrar</button>
                            <button type="text" class="boton" name="text" action="pdf.php">PDF</button>
                            <a href="index.html"><input type = "submit" value = "Logout" name = "logout" class="boton"></a>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    

</body>

</html>