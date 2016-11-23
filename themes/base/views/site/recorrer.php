<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php

//areglo de extensiones permitidas
$arr_exts=array("jpg","gif","png");

//definimos el path de acceso
$path = "imgPersona/";

//abrimos el directorio
$dir = opendir($path);

//Mostramos las informaciones
while ($elemento=readdir($dir))
{
   $ext=substr($elemento,-3);
   if(($elemento!='.') && ($elemento!='..') && in_array($ext,$arr_exts))
   {
      echo '<img src="'.$path.$elemento.'">'.$elemento;
      echo "<br>";
   }
}

//Cerramos el directorio
closedir($dir);


?>
</body>
</html>