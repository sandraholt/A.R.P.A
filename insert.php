<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserciones</title>
</head>
<body>
    <?php
        //si los datos se metieran por formulario, habría que declarar la variable.
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "partes";
        $conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if (!$conexion) {
            die("Conexión fallida: " . mysqli_connect_error());
        }
        echo "Conectado a la base de datos.";

        //Insertamos datos de la tabla acceso
        $sql = "INSERT INTO `acceso` (`acceso_id`, `user`, `passwd`) VALUES ('11111111l', 'warewolf', 'Hombrelobo')";
        if (mysqli_query($conexion, $sql)){
            echo "Acceso insertado correctamente </br>";
        }else {
            echo "Error al insertar". $sql . "<br>" . mysqli_connect_error($conexion);
        }

        $sql1 = "INSERT INTO `acceso` (`acceso_id`, `user`, `passwd`) VALUES ('22222222l', 'snivelus', SHA('Slytherin'))";
        if (mysqli_query($conexion, $sql1)){
            echo "Acceso insertado correctamente </br>";
        }else {
            echo "Error al insertar". $sql1 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql2 = "INSERT INTO `acceso` (`acceso_id`, `user`, `passwd`) VALUES ('22222221l', 'srtahoover', SHA('Odioalisa'))";
        if (mysqli_query($conexion, $sql2)){
            echo "Acceso insertado correctamente </br>";
        }else {
            echo "Error al insertar". $sq2 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql3 = "INSERT INTO `acceso` (`acceso_id`, `user`, `passwd`) VALUES ('33333333l', 'catgonall', SHA('Ceraverto'))"; 
        if (mysqli_query($conexion, $sql3)){
            echo "Acceso insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql3 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql4 = "INSERT INTO `acceso` (`acceso_id`, `user`, `passwd`) VALUES ('45552224l', 'seymorfalso', SHA('Barto'))";
        if (mysqli_query($conexion, $sql4)){
            echo "Acceso insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql3 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql5 = "INSERT INTO `acceso` (`acceso_id`, `user`, `passwd`) VALUES ('66666666l', 'ednakraba', SHA('Flanders'))";
        if (mysqli_query($conexion, $sql5)){
            echo "Acceso insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql5 . "<br>" . mysqli_connect_error($conexion);
        }

        // Insertamos datos de la tabla profesores.
        $sql6 = "INSERT INTO profesores (`profesor_id`, `profesor_name`, `profesor_email`, `profesor_telefono`, `tutoria`) VALUES ('45552224l', 'Seymor Skinner', 'seymorfalso@gmail.com', '66666666', '1')";
        if (mysqli_query($conexion, $sql6)){
            echo "Profesor insertado correctamente </br>";
        }else {
            echo "Error al insertar". $sql6 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql7 = "INSERT INTO `profesores` (`profesor_id`, `profesor_name`, `profesor_email`, `profesor_telefono`, `tutoria`) VALUES ('66666666l', 'Edna Krabappel', 'ednakraba@gmail.com', '55555555', '1')";
        if (mysqli_query($conexion, $sql7)){
            echo "Profesor insertado correctamente </br>";
        }else {
            echo "Error al insertar". $sql7 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql8 = "INSERT INTO `profesores` (`profesor_id`, `profesor_name`, `profesor_email`, `profesor_telefono`, `tutoria`) VALUES ('22222222l', 'Elizabeth Hoover', 'srtahoover@gmail.com', '77777777', '1')";
        if (mysqli_query($conexion, $sql8)){
            echo "Profesor insertado correctamente </br>";
        }else {
            echo "Error al insertar". $sq8 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql9 = "INSERT INTO `profesores` (`profesor_id`, `profesor_name`, `profesor_email`, `profesor_telefono`, `tutoria`) VALUES ('33333333l', 'Minerva McGonagall', 'catgonagall@gmail.com', '33333333', '0')";
        if (mysqli_query($conexion, $sql9)){
            echo "Profesor insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql9 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql10 = "INSERT INTO `profesores` (`profesor_id`, `profesor_name`, `profesor_email`, `profesor_telefono`, `tutoria`) VALUES ('11111111l', 'Remus Lupin', 'warewolf@gmail.com', '22222222', '0')";
        if (mysqli_query($conexion, $sql10)){
            echo "Profesor insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql10 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql11 = "INSERT INTO `profesores` (`profesor_id`, `profesor_name`, `profesor_email`, `profesor_telefono`, `tutoria`) VALUES ('22222221l', 'Severus Snape', 'snivelus@gmail.com', '11111111', '0')";
        if (mysqli_query($conexion, $sql11)){
            echo "Profesor insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql11 . "<br>" . mysqli_connect_error($conexion);
        }
        // Insertamos datos de la tabla alumnos.
        $sql12 = "INSERT INTO `alumnos` (`alumno_id`, `alumno_name`, `alumno_contacto`, `alumnocontacto_telefono`, `alumnocontacto_email`) 
        VALUES ('77777777H', 'Bart Simpsons', 'Marge Simpsons', '555555555', 'margesimpsons@gmail.com'/*, '2'*/)";
        if (mysqli_query($conexion, $sql12)){
            echo "Alumno insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql12 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql13 = "INSERT INTO `alumnos` (`alumno_id`, `alumno_name`, `alumno_contacto`, `alumnocontacto_telefono`, `alumnocontacto_email`) 
        VALUES ('88888888H', 'Lisa Simpsons', 'Marge Simpsons', '555555555', 'margesimpsons@gmail.com'/*, '2'*/)";
        if (mysqli_query($conexion, $sql13)){
            echo "Alumno insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql13 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql14 = "INSERT INTO `alumnos` (`alumno_id`, `alumno_name`, `alumno_contacto`, `alumnocontacto_telefono`, `alumnocontacto_email`) 
        VALUES ('99999999H', 'Hugo Simpsons', 'Marge Simpsons', '555555555', 'margesimpsons@gmail.com'/*, '2'*/)";
        if (mysqli_query($conexion, $sql14)){
            echo "Alumno insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql14 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql15 = "INSERT INTO `alumnos` (`alumno_id`, `alumno_name`, `alumno_contacto`, `alumnocontacto_telefono`, `alumnocontacto_email`) 
        VALUES ('11111111H', 'Luna Lovegood', 'Xenophilius Lovegood', '888888888', 'quisquilloso@gmail.com'/*, '2'*/)";
        if (mysqli_query($conexion, $sql15)){
            echo "Alumno insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql15 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql16 = "INSERT INTO `alumnos` (`alumno_id`, `alumno_name`, `alumno_contacto`, `alumnocontacto_telefono`, `alumnocontacto_email`) 
        VALUES ('22222222H', 'Ginevra Molly Weasly', 'Molly Weasly', '855554454', 'mollyweasly@gmail.com'/*, '2'*/)";
        if (mysqli_query($conexion, $sql16)){
            echo "Alumno insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql16 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql17 = "INSERT INTO `alumnos` (`alumno_id`, `alumno_name`, `alumno_contacto`, `alumnocontacto_telefono`, `alumnocontacto_email`) 
        VALUES ('33333333H', 'Neville Longbottom', 'Augusta Longbottom', '555555555', 'nanny@gmail.com'/*, '2'*/)";
        if (mysqli_query($conexion, $sql17)){
            echo "Alumno insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql17 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql18 = "INSERT INTO `alumnos` (`alumno_id`, `alumno_name`, `alumno_contacto`, `alumnocontacto_telefono`, `alumnocontacto_email`) 
        VALUES ('44444444H', 'Martin Prince', 'Martha Prince', '876854215', 'nerdyson@gmail.com'/*, '2'*/)";
        if (mysqli_query($conexion, $sql18)){
            echo "Alumno insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql18 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql19 =  "INSERT INTO `alumnos` (`alumno_id`, `alumno_name`, `alumno_contacto`, `alumnocontacto_telefono`, `alumnocontacto_email`) 
        VALUES ('66666666H', 'Milhouse Van Houten', 'Kirk Van Houten', '558475155', 'kirk@gmail.com'/*, '2'*/)";
        if (mysqli_query($conexion, $sql19)){
            echo "Alumno insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql19 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql20 = "INSERT INTO `alumnos` (`alumno_id`, `alumno_name`, `alumno_contacto`, `alumnocontacto_telefono`, `alumnocontacto_email`) 
        VALUES ('55555555H', 'Nelson Muntz', 'Mrs. Muntz', '875445555', 'stripgirl@gmail.com'/*, '2'*/)";
        if (mysqli_query($conexion, $sql20)){
            echo "Alumno insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql20 . "<br>" . mysqli_connect_error($conexion);
        }

        $sql21 = "INSERT INTO `alumnos` (`alumno_id`, `alumno_name`, `alumno_contacto`, `alumnocontacto_telefono`, `alumnocontacto_email`) 
        VALUES ('44444432H', 'Michael D`Amico', 'Marion Anthony D`Amico', '336854215', 'tonyelgordo@gmail.com'/*, '2'*/)";
        if (mysqli_query($conexion, $sql21)){
            echo "Alumno insertado correctamente</br>";
        }else {
            echo "Error al insertar". $sql21 . "<br>" . mysqli_connect_error($conexion);
        }
        mysqli_close($conexion);
/*

//PARA COMPROBACIONES EN PHPMYADMIN SQL SECTION
            //INSERT INTO `acceso` (`acceso_id`, `user`, `passwd`) VALUES ('11111111l', 'warewolf', ('Hombrelobo'));
            //INSERT INTO `acceso` (`acceso_id`, `user`, `passwd`) VALUES ('22222222l', 'snivelus', SHA('Slytherin'));
            //INSERT INTO `acceso` (`acceso_id`, `user`, `passwd`) VALUES ('22222221l', 'srtahoover', SHA('Odioalisa'));
            //INSERT INTO `acceso` (`acceso_id`, `user`, `passwd`) VALUES ('33333333l', 'catgonall', SHA('Ceraverto'));
            //INSERT INTO `acceso` (`acceso_id`, `user`, `passwd`) VALUES ('45552224l', 'seymorfalso', SHA('Barto'));
            //INSERT INTO `acceso` (`acceso_id`, `user`, `passwd`) VALUES ('66666666l', 'ednakraba', SHA('Flanders'));
*/
        ?>
    </body>
    </html>

    