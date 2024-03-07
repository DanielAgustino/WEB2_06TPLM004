<html>
<head><title>Contoh Static Variabel</title></head>
<body><h1>Variabel Static</h1>
<?php
Function dicoba()
{

Static $a=0;//denganstatic
echo "Nilai a :";
echo $a;
echo "<br>";
$a++;
}
dicoba();
dicoba(); 
dicoba();
dicoba();
?>
</body>
</html>