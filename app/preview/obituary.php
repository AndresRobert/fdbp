<?php
setlocale(LC_ALL,"es_ES");
$date = DateTime::createFromFormat("Y-m-d", $_GET['fdbpdate']);
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
    <div class="card center" style="font-family:initial;font-size:1.3rem;border:1px solid #777;padding:3rem">
        <div class="row">
            <div class="col s12"><img style="height:50px" src="/src/img/obi.svg"></div>
        </div>
        <div class="row">
            <div class="col s12">Se comunica el sensible fallecimiento de <span><?php echo $_GET['fdbpname'] ?></span> (Q.E.P.D)</div>
        </div>
        <div class="row">
            <div class="col s12">El funeral se llevará a cabo en <span><?php echo $_GET['fdbpplace'] ?></span> el dia <span><?php echo $strDate ?></span> a las <span><?php echo substr($_GET['fdbptime'], 0, 5) ?> horas.</span></div>
        </div>
        <div class="row">
            <div class="col s12"><i>"<?php echo $_GET['fdbpmessage'] ?>"</i></div>
        </div>
        <div class="row">
            <div class="col s12 gray-text" style="font-size:1rem">Obituario, gentileza <span>Funeraria del Buen Pastor</span></div>
        </div>
    </div>
</div>

</body>

</html>