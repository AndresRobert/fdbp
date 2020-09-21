<?php
$content = base64_decode($_GET['content']);
$contract = unserialize($content);
setlocale(LC_ALL,"es_ES");
$date = DateTime::createFromFormat("Y-m-d", $contract[0]['date']);
$strDate = strftime("%e de %B del %G",$date->getTimestamp());
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ver Contrato</title>
    <?php include '../layout/ext_head.php' ?>
</head>
<body style="background-color: #EEE; position: unset; font-size: 0.9rem">
<div class="content printable-page">
    <div class="row" style="margin:0">
        <div class="col s3 isotype">
            <img src="/src/img/isotype.png<?= $ver ?>" alt="">
        </div>
        <div class="col s9 info">
            <div class="row">
                <div class="col s12 center t-title"><span class="great-vives">Funeraria del Buen Pastor</span><sub>®</sub></div>
            </div>
            <div class="row">
                <div id="text_1" class="col s6 center t-small"></div>
                <div class="col s6 center">
                    <b id="text_2"></b>
                    <b style="font-size:18px"><br>Nº: <span id="id"><?php echo $contract[0]['id'] ?></span></b>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 t-right">STGO, <?php echo $strDate ?></div>
    </div>

    <div class="row">
        <div class="col s7">
            <b>Solicitado por</b>: <span id="s_name"><?php echo $contract[0]['s_name'] ?></span> <span id="s_last_name"><?php echo $contract[0]['s_last_name'] ?></span><br>
            Dirección: <span id="s_address"><?php echo $contract[0]['s_address'] ?></span><br>
            Teléfono: <span id="s_mobile"><?php echo $contract[0]['s_mobile'] ?></span><br>
            Email: <span id="s_email"><?php echo $contract[0]['s_email'] ?></span>
        </div>
        <div class="col s5">
            R.U.T. <span id="s_id"><?php echo $contract[0]['s_id'] ?></span><br>
            Comuna: <span id="s_comune_name"><?php echo $contract[0]['s_comune_name'] ?></span><br>
            Región: <span id="s_region_name"><?php echo $contract[0]['s_region_name'] ?></span>
        </div>
    </div>

    <div class="row">
        <div class="col s7">
            <b>Nombre del Fallecido</b>: <span id="d_name"><?php echo $contract[0]['d_name'] ?></span><br>
            R.U.T. <span id="d_id"><?php echo $contract[0]['d_id'] ?></span><br>
            Estado Civil: <span id="d_marital_status"><?php echo $contract[0]['d_marital_status'] ?></span><br>
            Dirección: <span id="d_address"><?php echo $contract[0]['d_address'] ?></span><br>
            Lugar de Fallecimiento: <span id="d_place"><?php echo $contract[0]['d_place'] ?></span>
        </div>
        <div class="col s5">
            Q.E.P.D.<br>
            Ocupación: <span id="d_occupation"><?php echo $contract[0]['d_occupation'] ?></span><br>
            Estudios: <span id="d_education"><?php echo $contract[0]['d_education'] ?></span><br>
            Comuna: <span id="d_comune_name"><?php echo $contract[0]['d_comune_name'] ?></span><br>
            Región: <span id="d_region_name"><?php echo $contract[0]['d_region_name'] ?></span>
        </div>
    </div>

    <div class="row">
        <div class="col s7">
            <b>Lugar del Velatorio</b>: <span id="c_church"><?php echo $contract[0]['c_church'] ?></span><br>
            Dirección: <span id="c_address"><?php echo $contract[0]['c_address'] ?></span>
        </div>
        <div class="col s5">
            Comuna: <span id="c_comune_name"><?php echo $contract[0]['c_comune_name'] ?></span><br>
            Región: <span id="c_region_name"><?php echo $contract[0]['c_region_name'] ?></span>
        </div>
    </div>

    <div class="row">
        <div class="col s7">
            <b>Cementerio</b>: <span id="f_cementery_name"><?php echo $contract[0]['f_cementery_name'] ?></span><br>
        </div>
        <div class="col s5">
            Fecha Funeral: <span id="f_date"><?php echo $contract[0]['f_date'] ?></span><br>
            Hora de Llegada: <span id="f_time"><?php echo substr($contract[0]['f_time'], 0, 5) ?></span>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <b>Tipo Servicio</b>: <span id="v_service_name"><?php echo $contract[0]['v_service_name'] ?></span><br>
            El servicio Incluye: <span id="v_include"><?php echo $contract[0]['v_include'] ?></span>
        </div>
    </div>

    <div class="row">
        <div class="col s7">
            <p id="text_3" class="t-just t-small"></p>
        </div>
        <div class="col s2">
            Valor del Servicio<br>
            Descuento<br>
            Valor Total<br>
            Aporte<br>
            <span id="v_insurance_name"><?php echo $contract[0]['v_insurance_name'] ?></span><br>
            Saldo
        </div>
        <div class="col s2 t-right">
            <b id="v_cost"></b><br>
            <b id="v_discount"></b><br>
            <b id="v_total"></b><br>
            <b id="v_coverage"></b><br>
            <br>
            <b id="v_payment"></b>
        </div>
    </div>

    <div class="row">
        <div class="col s7 t-just t-small">
            <b id="text_4"></b>
        </div>
        <div class="col s5">
            El saldo es pagado con:<br>
            <i id="p_transfer" class="material-icons t-icon t-icon-padding">crop_square</i> Transferencia<br>
            <i id="p_cash" class="material-icons t-icon t-icon-padding">crop_square</i> Efectivo<br>
            <i id="p_check" class="material-icons t-icon t-icon-padding">crop_square</i> Cheque al día<br>
            <i id="p_check_defered" class="material-icons t-icon t-icon-padding">crop_square</i> Cheque a fecha<br>
            <i id="p_credit_card" class="material-icons t-icon t-icon-padding">crop_square</i> Tarjeta de crédito<br>
            <i id="p_other" class="material-icons t-icon t-icon-padding">crop_square</i> Otro
        </div>
    </div>

    <div class="row">
        <div class="col s5 t-sign">Firma y RUT del contratante</div>
        <div class="col s2"></div>
        <div class="col s5 t-sign">Firma Jefe de Ventas</div>
    </div>

</div>

<script>

    let v_cost = <?php echo $contract[0]['v_cost'] ?>,
        v_discount = <?php echo $contract[0]['v_discount'] ?>,
        v_total = <?php echo $contract[0]['v_total'] ?>,
        v_coverage = <?php echo $contract[0]['v_coverage'] ?>,
        v_payment = <?php echo $contract[0]['v_payment'] ?>;

    $('#v_cost').html(Number(v_cost).toLocaleString('es-CL'));
    $('#v_discount').html(Number(v_discount).toLocaleString('es-CL'));
    $('#v_total').html(Number(v_total).toLocaleString('es-CL'));
    $('#v_coverage').html(Number(v_coverage).toLocaleString('es-CL'));
    $('#v_payment').html(Number(v_payment).toLocaleString('es-CL'));

    let p_cash = <?php echo $contract[0]['p_cash'] ?>,
        p_check = <?php echo $contract[0]['p_check'] ?>,
        p_check_defered = <?php echo $contract[0]['p_check_defered'] ?>,
        p_credit_card = <?php echo $contract[0]['p_credit_card'] ?>,
        p_other = <?php echo $contract[0]['p_other'] ?>,
        p_transfer = <?php echo $contract[0]['p_transfer'] ?>;

    if (p_cash === true || p_cash === '1' || p_cash === 1) {
        $('#p_cash').html('check');
    }
    if (p_check === true || p_check === '1' || p_check === 1) {
        $('#p_check').html('check');
    }
    if (p_check_defered === true || p_check_defered === '1' || p_check_defered === 1) {
        $('#p_check_defered').html('check');
    }
    if (p_credit_card === true || p_credit_card === '1' || p_credit_card === 1) {
        $('#p_credit_card').html('check');
    }
    if (p_other === true || p_other === '1' || p_other === 1) {
        $('#p_other').html('check');
    }
    if (p_transfer === true || p_transfer === '1' || p_transfer === 1) {
        $('#p_transfer').html('check');
    }

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
                        if (text.id === 5) {
                            return false;
                        }
                        $('#text_' + text.id).html(text.text);
                    });
                }
            }
        })
        .catch( e => console.log(e) );

</script>
</body>
</html>