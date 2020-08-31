<?php
setlocale(LC_ALL,"es_ES");
$date = DateTime::createFromFormat("Y-m-d", date('Y-m-d'));
$strDate = strftime("%e de %B del %G",$date->getTimestamp());
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ver Contrato</title>
    <?php include '../layout/head.php' ?>
</head>
<body class="preview" style="background-color: #EEE; position: unset; font-size: 0.9rem">
<div class="content printable-page">
    <div class="row">
        <div class="col s3 isotype">
            <img src="/src/img/isotype.png" alt="">
        </div>
        <div class="col s9 info">
            <div class="row">
                <div class="col s12 center great-vives t-title">Funeraria del Buen Pastor</div>
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
                    <b style="font-size:18px"><br>Nº: <span id="id">99999</span></b>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 t-right">STGO, <?php echo $strDate ?></div>
    </div>

    <div class="row">
        <div class="col s7">
            <b>Solicitado por</b>: <span id="s_name">No informado</span> <span id="s_last_name">No informado</span><br>
            Dirección: <span id="s_address">No informado</span><br>
            Teléfono: <span id="s_mobile">No informado</span><br>
            Email: <span id="s_email">No informado</span>
        </div>
        <div class="col s3">
            R.U.T. <span id="s_id">No informado</span><br>
            Comuna: <span id="s_comune_name">No informado</span><br>
            Región: <span id="s_region_name">No informado</span>
        </div>
    </div>

    <div class="row">
        <div class="col s7">
            <b>Nombre del Fallecido</b>: <span id="d_name">No informado</span><br>
            R.U.T. <span id="d_id">No informado</span><br>
            Estado Civil: <span id="d_marital_status">No informado</span><br>
            Dirección: <span id="d_address">No informado</span><br>
            Lugar de Fallecimiento: <span id="d_place">No informado</span>
        </div>
        <div class="col s3">
            Q.E.P.D.<br>
            Ocupación: <span id="d_occupation">No informado</span><br>
            Estudios: <span id="d_education">No informado</span><br>
            Comuna: <span id="d_comune_name">No informado</span><br>
            Región: <span id="d_region_name">No informado</span>
        </div>
    </div>

    <div class="row">
        <div class="col s7">
            <b>Lugar del Velatorio</b>: <span id="c_church">No informado</span><br>
            Dirección: <span id="c_address">No informado</span>
        </div>
        <div class="col s3">
            Comuna: <span id="c_comune_name">No informado</span><br>
            Región: <span id="c_region_name">No informado</span>
        </div>
    </div>

    <div class="row">
        <div class="col s5">
            <b>Cementerio</b>: <span id="f_cementery_name">No informado</span><br>
        </div>
        <div class="col s4">
            Fecha Funeral: <span id="f_date">No informado</span>
        </div>
        <div class="col s3">
            Hora de Llegada: <span id="f_time">No informado</span>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <b>Tipo Servicio</b>: <span id="v_service_name">No informado</span><br>
            El servicio Incluye: <span id="v_include">No informado</span>
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
            <span id="v_insurance_name">No informado</span><br>
            Saldo
        </div>
        <div class="col s3">
            <b id="v_cost">0</b><br>
            <b id="v_discount">0</b><br>
            <b id="v_total">0</b><br>
            <b id="v_coverage">0</b><br>
            <br>
            <b id="v_payment">0</b>
        </div>
    </div>

    <div class="row">
        <div class="col s7">
            <b class="t-just t-small">
                Para pago con transferencia electrónica los datos son:
                Cuenta Corriente, Banco BBVA Nº 4330100037682,
                Rut 12.060.286-1, Alejandra Silva Morales, email:
                alejandra@funerariadelbuenpastor.cl
            </b>
        </div>
        <div class="col s5">
            El saldo es pagado con:<br>
            <i class="material-icons t-icon t-icon-padding">check</i> Transferencia<br>
            <i class="material-icons t-icon t-icon-padding">crop_square</i> Efectivo<br>
            <i class="material-icons t-icon t-icon-padding">crop_square</i> Cheque al día<br>
            <i class="material-icons t-icon t-icon-padding">crop_square</i> Cheque a fecha<br>
            <i class="material-icons t-icon t-icon-padding">crop_square</i> Tarjeta de crédito<br>
            <i class="material-icons t-icon t-icon-padding">crop_square</i> Otro
        </div>
    </div>

    <div class="row">
        <div class="col s5 t-sign">Firma y RUT del contratante</div>
        <div class="col s2"></div>
        <div class="col s5 t-sign">Firma Jefe de Ventas</div>
    </div>

</div>

<script>

    function setPrintable(_data) {
        $('#id').html(Helper.setDefault(_data.id, '999999'));

        $('#s_name').html(Helper.setDefault(_data.s_name, 'Sin nombre'));
        $('#s_last_name').html(Helper.setDefault(_data.s_last_name, 'Sin apellido'));
        $('#s_address').html(Helper.setDefault(_data.s_address, 'Sin dirección'));
        $('#s_mobile').html(Helper.setDefault(_data.s_mobile, '9 0000 0000'));
        $('#s_email').html(Helper.setDefault(_data.s_email, 'sin_mail@mail.cl'));
        $('#s_id').html(Helper.setDefault(_data.s_id, '00000000-K'));
        $('#s_comune_name').html(Helper.setDefault(_data.s_comune_name, 'Sin Comuna'));
        $('#s_region_name').html(Helper.setDefault(_data.s_region_name, 'Sin Region'));

        $('#d_name').html(Helper.setDefault(_data.d_name, 'Sin nombre'));
        $('#d_id').html(Helper.setDefault(_data.d_id, '00000000-K'));
        $('#d_marital_status').html(Helper.setDefault(_data.d_marital_status, 'No informado'));
        $('#d_address').html(Helper.setDefault(_data.d_address, 'Sin dirección'));
        $('#d_place').html(Helper.setDefault(_data.d_place, 'No informado'));
        $('#d_occupation').html(Helper.setDefault(_data.d_occupation, 'No informado'));
        $('#d_education').html(Helper.setDefault(_data.d_education, 'No informado'));
        $('#d_comune_name').html(Helper.setDefault(_data.d_comune_name, 'Sin Comuna'));
        $('#d_region_name').html(Helper.setDefault(_data.d_region_name, 'Sin Region'));

        $('#c_church').html(Helper.setDefault(_data.c_church, 'No informado'));
        $('#c_address').html(Helper.setDefault(_data.c_address, 'Sin dirección'));
        $('#c_comune_name').html(Helper.setDefault(_data.c_comune_name, 'Sin Comuna'));
        $('#c_region_name').html(Helper.setDefault(_data.c_region_name, 'Sin Region'));

        $('#v_service_name').html(Helper.setDefault(_data.v_service_name, 'No informado'));
        $('#v_include').html(Helper.setDefault(_data.v_include, ''));
        $('#v_warning').html(Helper.setDefault(_data.v_warning, ''));
        $('#v_observation').html(Helper.setDefault(_data.v_observation, ''));

        $('#f_cementery_name').html(Helper.setDefault(_data.f_cementery_name, 'No informado'));
        $('#f_date').html(Helper.setDefault(_data.f_date, ''));
        $('#f_time').html(Helper.setDefault(_data.f_time, ''));

        $('#v_cost').html(Helper.setDefault(Number(_data.v_cost).toLocaleString('es-CL'), '0'));
        $('#v_discount').html(Helper.setDefault(Number(_data.v_discount).toLocaleString('es-CL'), '0'));
        $('#v_total').html(Helper.setDefault(Number(_data.v_total).toLocaleString('es-CL'), '0'));
        $('#v_coverage').html(Helper.setDefault(Number(_data.v_coverage).toLocaleString('es-CL'), '0'));
        $('#v_payment').html(Helper.setDefault(Number(_data.v_payment).toLocaleString('es-CL'), '0'));

        if (_data.p_cash === true || _data.p_cash === '1') {
            $('#p_cash').removeClass('fa-square').addClass('fa-check-square');
        }
        if (_data.p_check === true || _data.p_check === '1') {
            $('#p_check').removeClass('fa-square').addClass('fa-check-square');
        }
        if (_data.p_check_defered === true || _data.p_check_defered === '1') {
            $('#p_check_defered').removeClass('fa-square').addClass('fa-check-square');
        }
        if (_data.p_credit_card === true || _data.p_credit_card === '1') {
            $('#p_credit_card').removeClass('fa-square').addClass('fa-check-square');
        }
        if (_data.p_other === true || _data.p_other === '1') {
            $('#p_other').removeClass('fa-square').addClass('fa-check-square');
        }
        if (_data.p_transfer === true || _data.p_transfer === '1') {
            $('#p_transfer').removeClass('fa-square').addClass('fa-check-square');
        }
    }

    $(() => {
        let data = JSON.parse(Helper.getCookie('fdbp_contract_data') || {});
        const urlParams = new URLSearchParams(location.search);
        if (urlParams.get('contract') !== null) {
            $('#body').removeClass('preview');
            $('#id').html(urlParams.get('contract'));
            Api.post(Api.endpoints['one_contract'], { id: urlParams.get('contract') }, true)
                .then(({ status, response }) => {
                    if (status === 'error') {
                        $('#body').addClass('preview');
                        M.toast({ html: 'Hubo un error al intentar guardar el contrato, cierre esta vista y vuelva a intentarlo'});
                    }
                    if (status === 'fail') {
                        M.toast({ html: 'Session expirada, cierre esta vista y vuelva a intentarlo'});
                    } else {
                        if (response.status !== 'fail' && response.contract !== []) {
                            const comunes = Api.getList('comunes'),
                                regions = Api.getList('regions'),
                                cementeries = Api.getList('cementeries'),
                                insurances = Api.getList('insurances'),
                                services = Api.getList('services');
                            data = response.contract;
                            data['c_comune_name'] = comunes[data['c_comune_id']];
                            data['c_region_name'] = regions[data['c_region_id']];
                            data['d_comune_name'] = comunes[data['d_comune_id']];
                            data['d_region_name'] = regions[data['d_region_id']];
                            data['f_cementery_name'] = cementeries[data['f_cementery_id']];
                            data['f_date'] = data['f_datetime'].substring(0,10);
                            data['f_time'] = (data['f_datetime'].substring(0,-8)).substring(0,5);
                            data['s_comune_name'] = comunes[data['s_comune_id']];
                            data['s_region_name'] = regions[data['s_region_id']];
                            data['v_insurance_name'] = insurances[data['v_insurance_id']];
                            data['v_service_name'] = services[data['v_service_id']];
                            setPrintable(data);
                        } else {
                            M.toast({ html: 'Hubo un error al intentar guardar el contrato, cierre esta vista y vuelva a intentarlo' });
                        }
                    }
                })
                .catch( e => console.log(e) );
        } else {
            setPrintable(data);
        }
    });

</script>
</body>
</html>