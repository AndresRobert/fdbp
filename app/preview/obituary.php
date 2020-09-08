<?php
setlocale(LC_ALL,"es_ES");
$date = DateTime::createFromFormat("Y-m-d", date('Y-m-d'));
$strDate = strftime("%e de %B del %G",$date->getTimestamp());
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Obituario</title>
    <?php include '../layout/head.php' ?>
</head>

<body>
<pre><?php echo $_GET ?></pre>
</body>

</html>