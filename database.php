<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <?php
        $servidor = "localhost";
        //http://arpaiesbezmiliana.ddns.net/
        $usuario = "root";
        $password = "";
        $conexion = mysqli_connect($servidor, $usuario, $password);

        if(!$conexion)
        {
            echo "<p>Conexión fallida</p>";
        }
        else
        {
            //CREAMOS LA BASE DE DATOS
            $sql = "CREATE DATABASE Partes";
            if(mysqli_query($conexion, $sql))
            {
                echo "<p>Base de Datos prueba ha sido creada correctamente</p>";
            }
            else
            {
                echo "<p>Error</p>" . mysqli_error($conexion);
            }

            mysqli_select_db($conexion, "Partes");

            // CREAMOS LA TABLA ALUMNOS
            $sql2 = "CREATE TABLE alumnos (alumno_id char(9) NOT NULL, alumno_name VARCHAR (50) NOT NULL, alumno_contacto char(50) NOT NULL, alumnocontacto_telefono int NOT NULL,
            alumnocontacto_email char(50), CONSTRAINT pk_alumno PRIMARY KEY (alumno_id))";
            if(mysqli_query($conexion, $sql2))
            {
                echo "<p>La tabla ha sido creada correctamente</p>";
            }
            else
            {
                echo "<p>Error</p>" . mysqli_error($conexion);
            }
             // CREAMOS LA TABLA ACCESO
             $sql9 = "CREATE TABLE acceso (acceso_id char(9) NOT NULL, user char(10) NOT NULL, passwd char(40) NOT NULL, CONSTRAINT pk_acceso PRIMARY KEY (acceso_id))";
             if(mysqli_query($conexion, $sql9))
             {
                 echo "<p>La tabla ha sido creada correctamente</p>";
             }
             else
             {
                 echo "<p>Error</p>" . mysqli_error($conexion);
             }
            // CREAMOS LA TABLA PROFESORES
            $sql3 = "CREATE TABLE profesores (profesor_id char(9) NOT NULL, profesor_name char(50) NOT NULL, profesor_email char(50) NOT NULL, profesor_telefono int NOT NULL, tutoria bool NOT NULL,  CONSTRAINT pk_profesores PRIMARY KEY (profesor_id))";
            if(mysqli_query($conexion, $sql3))
            {
                echo "<p>La tabla ha sido creada correctamente</p>";
            }
            else
            {
                echo "<p>Error</p>" . mysqli_error($conexion);
            }
            /*CREAMOS CREAMOS LA TABLA CURSO
            $sql4 = "CREATE TABLE curso (curso_id int NOT NULL auto_increment , curso_name char(20) NOT NULL, alumno_q int NOT NULL, aula int NOT NULL,
            profesor_id char(9) NOT NULL, CONSTRAINT pk_curso PRIMARY KEY (curso_id))";
            if(mysqli_query($conexion, $sql4))
            {
                echo "<p>La tabla ha sido creada correctamente</p>";
            }
            else
            {
                echo "<p>Error</p>" . mysqli_error($conexion);
            }
            // CREAMOS LA TABLA PARTE
            $sql5 = "CREATE TABLE parte (parte_id int NOT NULL auto_increment, modalidad_name char(20) NOT NULL, CONSTRAINT pk_parte PRIMARY KEY (parte_id))";
            if(mysqli_query($conexion, $sql5))
            {
                echo "<p>La tabla ha sido creada correctamente</p>";
            }
            else
            {
                echo "<p>Error</p>" . mysqli_error($conexion);
            }
            // CREAMOS LA TABLA ASIGNATURA
            $sql6 = "CREATE TABLE asignaturas (asignatura_id char(5) NOT NULL, profesor_id CHAR(9) NOT NULL, curso_id int NOT NULL, CONSTRAINT pk_asignaturas PRIMARY KEY (asignatura_id))";
            if(mysqli_query($conexion, $sql6))
            {
                echo "<p>La tabla ha sido creada correctamente</p>";
            }
            else
            {
                echo "<p>Error</p>" . mysqli_error($conexion);
            }
            // CREAMOS LA TABLA HORARIO
            $sql7 = "CREATE TABLE horario (horario_id int NOT NULL auto_increment, hora char(8) NOT NULL, dia char(9) NOT NULL,asignatura_id char(5) NOT NULL, profesor_id char(9) NOT NULL, 
            curso_id int NOT NULL ,CONSTRAINT pk_horario PRIMARY KEY (horario_id))";
            if(mysqli_query($conexion, $sql7))
            {
                echo "<p>La tabla ha sido creada correctamente</p>";
            }
            else
            {
                echo "<p>Error</p>" . mysqli_error($conexion);
            }
            // CREAMOS LA TABLA HISTORIALPARTES
            $sql8 = "CREATE TABLE historialpartes (histoparte_id int NOT NULL auto_increment, parte_id int NOT NULL, profesor_id char(9) NOT NULL, alumno_id char(9) NOT NULL,
            horario_id int NOT NULL, CONSTRAINT pk_historial PRIMARY KEY (histoparte_id))";
            if(mysqli_query($conexion, $sql8))
            {
                echo "<p>La tabla ha sido creada correctamente</p>";
            }
            else
            {
                echo "<p>Error</p>" . mysqli_error($conexion);
            }*/
            
        }
    ?>
</body>
</html>