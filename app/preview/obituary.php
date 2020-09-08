<?php
setlocale(LC_ALL,"es_ES");
$date = DateTime::createFromFormat("Y-m-d", $_GET['date']);
$strDate = strftime("%e de %B del %G",$date->getTimestamp());
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Obituario</title>
    <?php include '../layout/head.php' ?>
</head>

<body>

<div class="container">
    <div class="card">
        <div class="row">
            <div class="col s12"><img src="/src/img/obi.svg"></div>
        </div>
        <div class="row">
            <div class="col s12">Se comunica el sensible fallecimiento de <span><?php echo $_GET['name'] ?></span> (Q.E.P.D)</div>
            <div class="col s12">El funeral se llevará a cabo en <span><?php echo $_GET['place'] ?></span> el dia <span><?php echo $strDate ?></span> a las <span><?php echo $_GET['time'] ?> horas.</span></div>
            <div class="col s12"><span>"<?php echo $_GET['message'] ?>"</span></div>

        </div>
        <div class="row">
            <div class="col s12">Obituario, gentileza <span>Funeraria del Buen Pastor</span></div>
        </div>
    </div>
</div>

</body>

</html>