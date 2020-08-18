<?php
setlocale(LC_ALL,"es_ES");
$date = DateTime::createFromFormat("Y-m-d", date('Y-m-d'));
$strDate = strftime("%e de %B del %G",$date->getTimestamp());
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <head><?php include '../layout/head.php' ?></head>
    <script>
        let data = JSON.parse(_$.cookie.get('fdbp_contract_data'));
        const urlParams = new URLSearchParams(location.search);
        if (urlParams.get('contract') !== null) {
            _$('#body').removeClass('preview');
            _$.ajax('/api/contracts/get', { id: urlParams.get('contract') }, { headers: getBearerHeaders()}).then(
                ({ status, response }) => {
                    if (status === 'error') {
                        _$('#body').addClass('preview');
                        _$.snackbar('Hubo un error al intentar guardar el contrato, cierre esta vista y vuelva a intentarlo', 'Cerrar');
                    }
                    if (status === 'fail') {
                        _$.snackbar('Session expirada, cierre esta vista y vuelva a intentarlo', 'Cerrar');
                    } else {
                        if (response.status !== 'fail' && response.contract !== []) {
                            data = response.contract;
                        } else {
                            _$.snackbar('Hubo un error al intentar guardar el contrato, cierre esta vista y vuelva a intentarlo', 'Cerrar');
                        }
                    }
                }
            ).catch(e => console.log(e));
        }
        // Load data
        console.log(data);
    </script>
</head>
<body id="body" class="preview">
<div id="content" class="grid printable">
    <div class="row center">
        <div class="col-3">
            <img src="../../src/img/isotype.png" alt="" class="isotype">
        </div>
        <div class="col-9">
            <div class="row center">
                <div class="col-12" style="font-family:'Great Vibes',cursive;font-size:48px">Funeraria del Buen Pastor</div>
            </div>
            <div class="row center">
                <div class="col-7 font12">
                    <p>Avda. Vicuña Mackenna 10.634</p>
                    <p>P.23 1/2 La Florida</p>
                    <p>FONO: 22 318 8248 CELULAR: +569 802 3195</p>
                    <p>www.funerariadelbuenpastor.cl</p>
                </div>
                <div class="col-5">
                    <p class="bold">CONTRATO / PRESUPUESTO INTERNO</p>
                    <p class="bold" style="font-size:18px">Nº: <span id="id">99999</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row right">
        <div class="col-12">STGO, <?php echo $strDate ?></div>
    </div>
    <div class="row padding-top">
        <div class="col-8">
            <p><b>Solicitado por</b>: <span id="s_name">Julio Humberto </span><span id="s_last_name">Ortíz Puga</span></p>
            <p>Dirección: <span id="s_address">Avenida La Escuela Nº 813</span></p>
            <p>Teléfono: <span id="s_mobile">12345678</span></p>
            <p>Email: <span id="s_email">email@email.com</span></p>
        </div>
        <div class="col-4">
            <p>R.U.T. <span id="s_id">12345678-9</span></p>
            <p>Comuna: <span id="s_comune_name">Las Condes</span></p>
            <p>Región: <span id="s_region_name">Metropolitana</span></p>
        </div>
    </div>
    <div class="row padding-top">
        <div class="col-8">
            <p><b>Nombre del Fallecido</b>: <span id="d_name">Julia Viola Puga Michaud</span></p>
            <p>R.U.T. <span id="d_id">12345678-9</span></p>
            <p>Estado Civil: <span id="d_marital_status">Viuda</span></p>
            <p>Dirección: <span id="d_address">Colombia Nº 9072</span></p>
            <p>Lugar de Fallecimiento: <span id="d_place">Hogar Acalis</span></p>
        </div>
        <div class="col-4">
            <p>Q.E.P.D.</p>
            <p>Ocupación: <span id="d_occupation">Pensionada</span></p>
            <p>Estudios: <span id="d_education">Básicos</span></p>
            <p>Comuna: <span id="d_comune_name">La Florida</span></p>
            <p>Región: <span id="d_region_name">Metropolitana</span></p>
        </div>
    </div>
    <div class="row padding-top">
        <div class="col-8">
            <p><b>Lugar del Velatorio</b>: <span id="c_church">Parroquia Santa Clara</span></p>
            <p>Dirección: <span id="c_address">Santa Elisa Nº 050</span></p>
        </div>
        <div class="col-4">
            <p>&nbsp;</p>
            <p>Comuna: <span id="c_comune_name">La Cisterna</span></p>
            <p>Región: <span id="c_region_name">Metropolitana</span></p>
        </div>
    </div>
    <div class="row padding-top">
        <div class="col-12">
            <p><b>Tipo Servicio</b>: <span id="v_service_name">Mackelita Eco. Lisa Brillo</span></p>
            <p>El servicio Incluye: <span id="v_include">Int. capilla ardiente, t. registro civil, libro de condolencias, tarjetas de agradecimiento.</span> <span id="v_warning"></span> <span id="v_observation">Valor médico $50.000</span></p>
        </div>
    </div>
    <div class="row padding-top">
        <div class="col-12">
            <p><b>Cementerio</b>: <span id="f_cementery_name">Parque del Recuerdo Vespucio</span></p>
        </div>
        <div class="col-8">
            <p>Fecha Funeral: <span id="f_date">05-05-2020</span></p></div>
        <div class="col-4">
            <p>Hora de Llegada: <span id="f_time">12:39</span></p>
        </div>
    </div>
    <div class="row padding-top">
        <div class="col-8 font10 padding-right">
            <p class="just">
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
        <div class="col-4">
            <div class="row">
                <div class="col-8">
                    <p>Valor del Servicio</p>
                    <p>Descuento</p>
                    <p>Valor Total</p>
                    <p>Aporte</p>
                    <p><span id="v_insurance_name">CAPREDENA</span></p>
                    <p>Saldo</p>
                </div>
                <div class="col-4">
                    <p class="bold"><span id="v_cost">650.000</span></p>
                    <p class="bold"><span id="v_discount">0</span></p>
                    <p class="bold"><span id="v_total">650.000</span></p>
                    <p class="bold"><span id="v_coverage">365.000</span></p>
                    <p>&nbsp;</p>
                    <p class="bold"><span id="v_payment">280.000</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row padding-top">
        <div class="col-8 font12 padding-right">
            <p class="bold just">
                Para pago con transferencia electrónica los datos son:
                Cuenta Corriente, Banco BBVA Nº 4330100037682,
                Rut 12.060.286-1, Alejandra Silva Morales, email:
                alejandra@funerariadelbuenpastor.cl
            </p>
        </div>
        <div class="col-4">
            <p>El saldo es pagado con:</p>
            <div class="row">
                <div class="col-12 no-padding-input">
                    <p><i id="p_transfer" class="far fa-check-square"></i> Transferencia</p>
                </div>
                <div class="col-12 no-padding-input">
                    <p><i id="p_cash" class="far fa-square"></i> Efectivo</p>
                </div>
                <div class="col-12 no-padding-input">
                    <p><i id="p_check" class="far fa-square"></i> Cheque al día</p>
                </div>
                <div class="col-12 no-padding-input">
                    <p><i id="p_check_defered" class="far fa-square"></i> Cheque a fecha</p>
                </div>
                <div class="col-12 no-padding-input">
                    <p><i id="p_credit_card" class="far fa-square"></i> Tarjeta de crédito</p>
                </div>
                <div class="col-12 no-padding-input">
                    <p><i id="p_other" class="far fa-square"></i> Otro</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row padding-top">
        <div class="col-5 sign">
            <p>Firma y RUT del contratante</p>
        </div>
        <div class="col-2"></div>
        <div class="col-5 sign">
            <p>Firma Jefe de Ventas</p>
        </div>
    </div>
</div>
</body>
</html>