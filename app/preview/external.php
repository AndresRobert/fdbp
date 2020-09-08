<?php
$contract = base64_decode($_GET['content']);
//$u_contract = unserialize($contract, false);
setlocale(LC_ALL,"es_ES");
$date = DateTime::createFromFormat("Y-m-d", $contract['date']);
$strDate = strftime("%e de %B del %G",$date->getTimestamp());
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ver Contrato</title>
    <?php include '../layout/ext_head.php' ?>
</head>
<body class="preview" style="background-color: #EEE; position: unset; font-size: 0.9rem">
<pre><?php print_r($_GET['content']) ?></pre>
<pre><?php print_r($contract) ?></pre>
<pre><?php //print_r($u_contract) ?></pre>
<div class="content printable-page">
    <div class="row">
        <div class="col s3 isotype">
            <img src="/src/img/isotype.png" alt="">
        </div>
        <div class="col s9 info">
            <div class="row">
                <div class="col s12 center t-title"><span class="great-vives">Funeraria del Buen Pastor</span>®</div>
            </div>
            <div class="row">
                <div class="col s6 center t-small">
                    Avda. Vicuña Mackenna 10.634<br>
                    P.23 1/2 La Florida<br>
                    FONO: 22 318 8248 CELULAR: +569 802 3195<br>
                    www.funerariadelbuenpastor.cl
                </div>
                <div class="col s6 center">
                    <b>CONTRATO / PRESUPUESTO<br> INTERNO</b>
                    <b style="font-size:18px"><br>Nº: <span id="id"><?php echo $contract['id'] ?></span></b>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 t-right">STGO, <?php echo $strDate ?></div>
    </div>

    <div class="row">
        <div class="col s7">
            <b>Solicitado por</b>: <span id="s_name"><?php echo $contract['s_name'] ?></span> <span id="s_last_name"><?php echo $contract['s_last_name'] ?></span><br>
            Dirección: <span id="s_address"><?php echo $contract['s_address'] ?></span><br>
            Teléfono: <span id="s_mobile"><?php echo $contract['s_mobile'] ?></span><br>
            Email: <span id="s_email"><?php echo $contract['s_email'] ?></span>
        </div>
        <div class="col s5">
            R.U.T. <span id="s_id"><?php echo $contract['s_id'] ?></span><br>
            Comuna: <span id="s_comune_name"><?php echo $contract['s_comune_name'] ?></span><br>
            Región: <span id="s_region_name"><?php echo $contract['s_region_name'] ?></span>
        </div>
    </div>

    <div class="row">
        <div class="col s7">
            <b>Nombre del Fallecido</b>: <span id="d_name"><?php echo $contract['d_name'] ?></span><br>
            R.U.T. <span id="d_id"><?php echo $contract['d_id'] ?></span><br>
            Estado Civil: <span id="d_marital_status"><?php echo $contract['d_marital_status'] ?></span><br>
            Dirección: <span id="d_address"><?php echo $contract['d_address'] ?></span><br>
            Lugar de Fallecimiento: <span id="d_place"><?php echo $contract['d_place'] ?></span>
        </div>
        <div class="col s5">
            Q.E.P.D.<br>
            Ocupación: <span id="d_occupation"><?php echo $contract['d_occupation'] ?></span><br>
            Estudios: <span id="d_education"><?php echo $contract['d_education'] ?></span><br>
            Comuna: <span id="d_comune_name"><?php echo $contract['d_comune_name'] ?></span><br>
            Región: <span id="d_region_name"><?php echo $contract['d_region_name'] ?></span>
        </div>
    </div>

    <div class="row">
        <div class="col s7">
            <b>Lugar del Velatorio</b>: <span id="c_church"><?php echo $contract['c_church'] ?></span><br>
            Dirección: <span id="c_address"><?php echo $contract['c_address'] ?></span>
        </div>
        <div class="col s5">
            Comuna: <span id="c_comune_name"><?php echo $contract['c_comune_name'] ?></span><br>
            Región: <span id="c_region_name"><?php echo $contract['c_region_name'] ?></span>
        </div>
    </div>

    <div class="row">
        <div class="col s7">
            <b>Cementerio</b>: <span id="f_cementery_name"><?php echo $contract['f_cementery_name'] ?></span><br>
        </div>
        <div class="col s5">
            Fecha Funeral: <span id="f_date"><?php echo $contract['f_date'] ?></span><br>
            Hora de Llegada: <span id="f_time"><?php echo $contract['f_time'] ?></span>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <b>Tipo Servicio</b>: <span id="v_service_name"><?php echo $contract['v_service_name'] ?></span><br>
            El servicio Incluye: <span id="v_include"><?php echo $contract['v_include'] ?></span>
        </div>
    </div>

    <div class="row">
        <div class="col s7">
            <p class="t-just t-small">
                La persona que firma el presente contrato privado, se
                responsabiliza por todo el pago del servicio, así como
                también de los cheques que pudieran extenderse con el
                fin de pagar a la Funeraria del Buen Pastor en los
                plazos y fechas pactadas y específicas en el contrato,
                las cuotas mortuorias del IPS y de AFP se darán por
                pagadas unicamente cuando estas las hagan efectivas, de
                lo contrario el contratante se responsabilizará del
                pago a la funeraria del total de los aranceles que
                cubran estos beneficios, el presente contrato lo firma
                exclusivamente el contratante del servicio.
            </p>
        </div>
        <div class="col s2">
            Valor del Servicio<br>
            Descuento<br>
            Valor Total<br>
            Aporte<br>
            <span id="v_insurance_name"><?php echo $contract['v_insurance_name'] ?></span><br>
            Saldo
        </div>
        <div class="col s2 t-right">
            <b id="v_cost"><?php echo $contract['v_cost'] ?></b><br>
            <b id="v_discount"><?php echo $contract['v_discount'] ?></b><br>
            <b id="v_total"><?php echo $contract['v_total'] ?></b><br>
            <b id="v_coverage"><?php echo $contract['v_coverage'] ?></b><br>
            <br>
            <b id="v_payment"><?php echo $contract['v_payment'] ?></b>
        </div>
    </div>

    <div class="row">
        <div class="col s7 t-just t-small">
            <b>
                Para pago con transferencia electrónica los datos son:
                Cuenta Corriente, Banco BBVA Nº 4330100037682,
                Rut 12.060.286-1, Alejandra Silva Morales, email:
                alejandra@funerariadelbuenpastor.cl
            </b>
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

    function setPrintable() {

        let p_cash = <?php echo $contract['p_cash'] ?>,
            p_check = <?php echo $contract['p_check'] ?>,
            p_check_defered = <?php echo $contract['p_check_defered'] ?>,
            p_credit_card = <?php echo $contract['p_credit_card'] ?>,
            p_other = <?php echo $contract['p_other'] ?>,
            p_transfer = <?php echo $contract['p_transfer'] ?>;

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
    }

    setPrintable();

</script>
</body>
</html>