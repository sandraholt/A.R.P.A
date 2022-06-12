<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grave</title>
    <script src="jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="css/otros.css" title="css">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="parte">PARTE DE CONVIVENCIA GRAVE</h1>
                <hr>
                <form id="form" class="grave">
                    <div class="mb-3">
                        <div class="col-md-6">
                            <label for="profesor" class="form-label">PROFESOR/A que rellena el parte</label>
                            <input type="text" class="form-control" id="profesor">
                        </div>
                    </div>
		    </br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="alumno" class="form-label">ALUMNO/A</label>
                            <input type="text" class="form-control" id="alumno">
                        </div>
			</br>
                        <div class="col-md-6">
                            <label for="grupo" class="form-label">GRUPO</label>
                            <input type="text" class="form-control" id="grupo">
                        </div>
			</br>
                        <div class="col-md-6">
                            <label for="tutor" class="form-label">TUTOR</label>
                            <input type="text" class="form-control" id="tutor">
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
                                    <input type="radio" name="agresion" class="form-check-input" id="agresion">
                                    <label for="agresion-si" class="form-check-label">Agresión física a un miembro de la comunidad educativa</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="injurias" class="form-check-input" id="injurias">
                                    <label for="injurias-si" class="form-check-label">Injurias y ofensas contra un miembro de la comunidad educativa</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="actuaciones" class="form-check-input" id="actuaciones">
                                    <label for="actuaciones-si" class="form-check-label">Actuaciones perjudiciales para la salud y la integridad o incitación a ellas</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="vejaciones" class="form-check-input" id="vejaciones">
                                    <label for="vejaciones-si" class="form-check-label">Vejaciones o humillaciones contra un miembro de la comunidad educativa</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="amenazas" class="form-check-input" id="amenazas">
                                    <label for="amenazas-si" class="form-check-label">Amenazas o coacciones a un miembro de la comunidad educativa</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="suplantacion" class="form-check-input" id="suplantacion">
                                    <label for="suplantacion-si" class="form-check-label">Suplantación de la personalidad y falsificación o sustracción de documentos</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="deterioro" class="form-check-input" id="deterioro">
                                    <label for="deterioro-si" class="form-check-label">Deterioro grave de las instalaciones o documentos del Centro o pertenecias de un miembro de la comunidad educativa</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="reiteracion" class="form-check-input" id="reiteracion">
                                    <label for="reiteracion-si" class="form-check-label">Reiteración en un mismo curso de conductas contrarias a las normas de convivencia</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="impedir" class="form-check-input" id="impedir">
                                    <label for="impedir-si" class="form-check-label">Impedir el normal desarrollo de las actividades del Centro</label>
                                </div>
				<div class="form-check form-check-inline">
                                    <input type="radio" name="incumplimiento" class="form-check-input" id="incumplimiento">
                                    <label for="incumplimiento-si" class="form-check-label">Incumplimineto de las correciones impuestas</label>
                                </div>
                            </div>
                        </div>
                    </div>
			</br>
                    <div class="row mb-3">
                        <div class="col-md-9">
                            <div>
                                <label for="descripcion" class="form-label">DESCRIPCIÓN DE LA CONDUCTA</label></br>
                                <input type="text" class="form-control" id="descripcion">
                            </div>
                        </div>
                    </div>
			</br>
                    <span class="d-block pb-2">FIRMA PROFESOR/A</span>
                    <div class="signature mb-2" style="background-color: white; width: 100%; height: 200px;">
                        <canvas id="signature-canvas"
                            style="border: 1px solid black; width: 100%; height: 200px;"></canvas>
                    </div>
                    <table>
                        <tr>
                            <a href="mailto:aabusarj2656@iesbezmiliana.net?subject=Parte disciplinario&body=Su hij@ ha sido amonestado">
                            <button type="submit" class="boton" name="enviar">Enviar</button></a>
                            <button type="reset" class="boton" name="reset">Borrar</button>
                            <button type="text" class="boton" name="text">Clic derecho e imprimir para pdf</button>
                            <a href="index.html"><input type = "submit" value = "Logout" name = "logout" class="boton"></a>
                        </tr>
                    </table>
                    
                </form>
            </div>
        </div>
    </div>

</body>

</html>