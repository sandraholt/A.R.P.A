<?php
  ob_start();
  include ("conexion.php");
  include 'leve.php';
  require("fpdf.php");
  function bd_agregar($temp){
  $doc = new FPDF(); //creamos desde 0 el objeto pdfdoc
  $doc->Addpage(); // añadimos una pagina
  $doc->SetFont('Arial', '', 11);
  $doc->Ln(); // salto de línea
  $doc->Cell (190,12,'Parte disciplinario:',1,2,'C','0');
  $doc->Ln(); // salto de línea
  $doc->Cell (50,9,'Profesor:'.$_POST['profesor'],1,2,'L'); //distribuir celdas
  $doc->Ln(); // salto de línea
  $doc->Cell (50,9,'Alumno:'.$_POST['alumno'],1,2,'L');
  $doc->Ln(); // salto de línea
  $doc->Cell (50,9,'Grupo:'.$_POST['grupo'],1,2,'L');
  $doc->Ln(); // salto de línea
  $doc->Cell (50,9,'Tutor:'.$_POST['tutor'],1,2,'L');
  $doc->Ln(); // salto de línea
  $doc->Cell (50,9,'Email:'.$_POST['email'],1,2,'L');
  $doc->Ln(); // salto de línea
  $doc->Cell (50,9,'Conducta:'.$_POST['conducta'],1,2,'L');
  $doc->Ln(); // salto de línea
  $doc->Cell (50,9,'Descripción:'.$_POST['descripcion'],1,2,'L');
  $doc->Output();
  ob_end_flush();}
  ?>
