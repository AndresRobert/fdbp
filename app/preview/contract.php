<?php
setlocale(LC_ALL,"es_ES");
$date = DateTime::createFromFormat("Y-m-d", date('Y-m-d'));
$strDate = strftime("%e de %B del %G",$date->getTimestamp());
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ver Contrato</title>
    <link rel="stylesheet" href="/src/base.css">
    <script src="/src/base.js"></script>
</head>
<body id="body" style="background-color: #EEE">
<div id="content" class="printable-page">

    <div>

        <div>
            <div>
                <img src="/src/img/isotype.png" alt="" class="isotype">
            </div>
            <div>
                <span style="font-family:'Great Vibes',cursive;font-size:48px">Funeraria del Buen Pastor</span>
                <p>Avda. Vicuña Mackenna 10.634</p>
                <p>P.23 1/2 La Florida</p>
                <p>FONO: 22 318 8248 CELULAR: +569 802 3195</p>
                <p>www.funerariadelbuenpastor.cl</p>
                <p class="bold">CONTRATO / PRESUPUESTO INTERNO</p>
                <p class="bold" style="font-size:18px">Nº: <span id="id">99999</span></p>
            </div>
        </div>

        <div>
            <div>STGO, <?php echo $strDate ?></div>
        </div>

        <div>
            <div>
                <p><b>Solicitado por</b>: <span id="s_name">No informado</span> <span id="s_last_name">No informado</span></p>
                <p>Dirección: <span id="s_address">No informado</span></p>
                <p>Teléfono: <span id="s_mobile">No informado</span></p>
                <p>Email: <span id="s_email">No informado</span></p>
            </div>
            <div>
                <p>R.U.T. <span id="s_id">No informado</span></p>
                <p>Comuna: <span id="s_comune_name">No informado</span></p>
                <p>Región: <span id="s_region_name">No informado</span></p>
            </div>
        </div>

        <div>
            <div>
                <p><b>Nombre del Fallecido</b>: <span id="d_name">No informado</span></p>
                <p>R.U.T. <span id="d_id">No informado</span></p>
                <p>Estado Civil: <span id="d_marital_status">No informado</span></p>
                <p>Dirección: <span id="d_address">No informado</span></p>
                <p>Lugar de Fallecimiento: <span id="d_place">No informado</span></p>
            </div>
            <div>
                <p>Q.E.P.D.</p>
                <p>Ocupación: <span id="d_occupation">No informado</span></p>
                <p>Estudios: <span id="d_education">No informado</span></p>
                <p>Comuna: <span id="d_comune_name">No informado</span></p>
                <p>Región: <span id="d_region_name">No informado</span></p>
            </div>
        </div>

        <div>
            <div>
                <p><b>Lugar del Velatorio</b>: <span id="c_church">No informado</span></p>
                <p>Dirección: <span id="c_address">No informado</span></p>
            </div>
            <div>
                <p>&nbsp;</p>
                <p>Comuna: <span id="c_comune_name">No informado</span></p>
                <p>Región: <span id="c_region_name">No informado</span></p>
            </div>
        </div>

        <div>
            <div>
                <p><b>Cementerio</b>: <span id="f_cementery_name">No informado</span></p>
            </div>
            <div>
                <p>Fecha Funeral: <span id="f_date">No informado</span></p>
            </div>
            <div>
                <p>Hora de Llegada: <span id="f_time">No informado</span></p>
            </div>
        </div>

        <div>
            <div>
                <p><b>Tipo Servicio</b>: <span id="v_service_name">No informado</span></p>
                <p>El servicio Incluye: <span id="v_include">No informado</span></p>
            </div>
        </div>

        <div>
            <div>
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
            <div>
                <p>Valor del Servicio</p>
                <p>Descuento</p>
                <p>Valor Total</p>
                <p>Aporte</p>
                <p><span id="v_insurance_name">No informado</span></p>
                <p>Saldo</p>
            </div>
            <div>
                <p class="bold"><span id="v_cost">0</span></p>
                <p class="bold"><span id="v_discount">0</span></p>
                <p class="bold"><span id="v_total">0</span></p>
                <p class="bold"><span id="v_coverage">0</span></p>
                <p>&nbsp;</p>
                <p class="bold"><span id="v_payment">0</span></p>
            </div>
        </div>

        <div>
            <div>
                <p class="bold just">
                    Para pago con transferencia electrónica los datos son:
                    Cuenta Corriente, Banco BBVA Nº 4330100037682,
                    Rut 12.060.286-1, Alejandra Silva Morales, email:
                    alejandra@funerariadelbuenpastor.cl
                </p>
            </div>
            <div>
                <p>El saldo es pagado con:</p>
                <p><i id="p_transfer" class="far fa-square"></i> Transferencia</p>
                <p><i id="p_cash" class="far fa-square"></i> Efectivo</p>
                <p><i id="p_check" class="far fa-square"></i> Cheque al día</p>
                <p><i id="p_check_defered" class="far fa-square"></i> Cheque a fecha</p>
                <p><i id="p_credit_card" class="far fa-square"></i> Tarjeta de crédito</p>
                <p><i id="p_other" class="far fa-square"></i> Otro</p>
            </div>
        </div>

        <div>
            <div>
                <p>Firma y RUT del contratante</p>
            </div>
            <div></div>
            <div>
                <p>Firma Jefe de Ventas</p>
            </div>
        </div>

    </div>
</div>
<script>

    function setPrintable(_data) {
        $('#id').html(setDefault(_data.id, '999999'));

        $('#s_name').html(setDefault(_data.s_name, 'Sin nombre'));
        $('#s_last_name').html(setDefault(_data.s_last_name, 'Sin apellido'));
        $('#s_address').html(setDefault(_data.s_address, 'Sin dirección'));
        $('#s_mobile').html(setDefault(_data.s_mobile, '9 0000 0000'));
        $('#s_email').html(setDefault(_data.s_email, 'sin_mail@mail.cl'));
        $('#s_id').html(setDefault(_data.s_id, '00000000-K'));
        $('#s_comune_name').html(setDefault(_data.s_comune_name, 'Sin Comuna'));
        $('#s_region_name').html(setDefault(_data.s_region_name, 'Sin Region'));

        $('#d_name').html(setDefault(_data.d_name, 'Sin nombre'));
        $('#d_id').html(setDefault(_data.d_id, '00000000-K'));
        $('#d_marital_status').html(setDefault(_data.d_marital_status, 'No informado'));
        $('#d_address').html(setDefault(_data.d_address, 'Sin dirección'));
        $('#d_place').html(setDefault(_data.d_place, 'No informado'));
        $('#d_occupation').html(setDefault(_data.d_occupation, 'No informado'));
        $('#d_education').html(setDefault(_data.d_education, 'No informado'));
        $('#d_comune_name').html(setDefault(_data.d_comune_name, 'Sin Comuna'));
        $('#d_region_name').html(setDefault(_data.d_region_name, 'Sin Region'));

        $('#c_church').html(setDefault(_data.c_church, 'No informado'));
        $('#c_address').html(setDefault(_data.c_address, 'Sin dirección'));
        $('#c_comune_name').html(setDefault(_data.c_comune_name, 'Sin Comuna'));
        $('#c_region_name').html(setDefault(_data.c_region_name, 'Sin Region'));

        $('#v_service_name').html(setDefault(_data.v_service_name, 'No informado'));
        $('#v_include').html(setDefault(_data.v_include, ''));
        $('#v_warning').html(setDefault(_data.v_warning, ''));
        $('#v_observation').html(setDefault(_data.v_observation, ''));

        $('#f_cementery_name').html(setDefault(_data.f_cementery_name, 'No informado'));
        $('#f_date').html(setDefault(_data.f_date, ''));
        $('#f_time').html(setDefault(_data.f_time, ''));

        $('#v_cost').html(setDefault(Number(_data.v_cost).toLocaleString('es-CL'), '0'));
        $('#v_discount').html(setDefault(Number(_data.v_discount).toLocaleString('es-CL'), '0'));
        $('#v_total').html(setDefault(Number(_data.v_total).toLocaleString('es-CL'), '0'));
        $('#v_coverage').html(setDefault(Number(_data.v_coverage).toLocaleString('es-CL'), '0'));
        $('#v_payment').html(setDefault(Number(_data.v_payment).toLocaleString('es-CL'), '0'));

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

    getList('api_regions');
    getList('api_comunes_list');
    getList('api_cementeries');
    getList('api_insurances');
    getList('api_services');

    $(() => {
        let data = JSON.parse(_$.cookie.get('fdbp_contract_data'));
        const urlParams = new URLSearchParams(location.search);
        if (urlParams.get('contract') !== null) {
            _$('#body').removeClass('preview');
            $('#id').html(urlParams.get('contract'));
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
                            data['c_comune_name'] = _pairs[data['c_comune_id']];
                            data['c_region_name'] = _pairs[data['c_region_id']];
                            data['d_comune_name'] = _pairs[data['d_comune_id']];
                            data['d_region_name'] = _pairs[data['d_region_id']];
                            data['f_cementery_name'] = _pairs[data['f_cementery_id']];
                            data['f_date'] = data['f_datetime'].substring(0,10);
                            data['f_time'] = (data['f_datetime'].substring(0,-8)).substring(0,5);
                            data['s_comune_name'] = _pairs[data['s_comune_id']];
                            data['s_region_name'] = _pairs[data['s_region_id']];
                            data['v_insurance_name'] = _pairs[data['v_insurance_id']];
                            data['v_service_name'] = _pairs[data['v_service_id']];
                            setPrintable(data);
                        } else {
                            _$.snackbar('Hubo un error al intentar guardar el contrato, cierre esta vista y vuelva a intentarlo', 'Cerrar');
                        }
                    }
                }
            ).catch(e => console.log(e));
        } else {
            setPrintable(data);
        }
    });

</script>
</body>
</html>