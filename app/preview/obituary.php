<?php
setlocale(LC_ALL,"es_ES");
$date = DateTime::createFromFormat("Y-m-d", $_GET['fdbpdate']);
$strDate = strftime("%e de %B del %G",$date->getTimestamp());
?>
<!DOCTYPE html>
<html lang="es" style="background-color:#ddd">

<head>
    <title>Obituario <?php echo $_GET['fdbpname'] ?></title>
    <?php include '../layout/head.php' ?>
</head>

<body>

<div class="container" style="max-width:45rem;padding-top:5rem">
    <div class="card center" style="font-family:initial;font-size:1.3rem;padding:3rem">
        <div class="row">
            <div class="col s12"><img style="height:50px" src="/src/img/obi.png"></div>
        </div>
        <div class="row">
            <div class="col s12"><span id="text_9"></span> <?php echo $_GET['fdbpname'] ?> (Q.E.P.D)</div>
        </div>
        <div class="row">
            <div class="col s12"><span id="text_10"></span> <?php echo $_GET['fdbpplace'] ?> el dia <span><?php echo $strDate ?></span> a las <span><?php echo substr($_GET['fdbptime'], 0, 5) ?> horas.</span></div>
        </div>
        <div class="row">
            <div class="col s12"><i>"<?php echo $_GET['fdbpmessage'] ?>"</i></div>
        </div>
        <div class="row">
            <div class="col s12 gray-text" style="font-size:1rem"><span id="text_11"></span></div>
        </div>
    </div>
</div>

<script>
    getTexts = async function () {
        const response = await fetch('/api/texts/list', {
            method: 'POST',
            cache: 'no-cache',
            referrerPolicy: 'no-referrer',
            headers: { 'Content-Type': 'application/json' }
        });
        return await response.json();
    };

    getTexts()
        .then(({ status, response }) => {
            if (status === 'OK') {
                if (response.status === 'success') {
                    $.each( response.list, function( _, text ) {
                        if (text.id > 8 && text.id < 12) {
                            $('#text_' + text.id).html(text.text);
                        }
                        if (text.id > 11) {
                            return false;
                        }
                    });
                }
            }
        })
        .catch( e => console.log(e) );
</script>

</body>

</html>