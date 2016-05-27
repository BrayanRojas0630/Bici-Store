<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!doctype html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8" /> 
<title>Document</title> 

<link rel="stylesheet" href="ventanamodal.css" /> 
<script type='text/javascript' src='ventanamodal.js'></script> 

</head> 
<body> 
<?php 

$amiguito = @$_GET['id']; 
?> 

<a href='javascript:void(0)' onclick='mostrareldiv();' data-idusuario="<?php echo $amiguito ?>" id="miventana" style='text-decoration:none; ' > <span> Mi ventana modal</span> </a> 

<div id='fade' class='overlay' > 
<div id='light' class='modal'> 
<div id='msgcomun'> 
<span class= 'msgdoscomun ' >Amigos en común </span> 
<a class='closemodal' href = 'javascript:void(0)' onclick = 'ocultareldiv() '> X </a> 
</div> 


<div id="respuesta"></div> 

</div> 
</div> 


</body> 
</html> 
