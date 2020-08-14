<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contract</title>
    <link href="../../src/vendor/acode.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="../../src/invoice.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a93fffc8fc.js" crossorigin="anonymous"></script>
    <script src="../../src/vendor/acode.js"></script>
    <script src="../../src/invoice.js"></script>
    <script>
        let data = _$.cookie.get('fdbp_contract_data');
        const urlParams = new URLSearchParams(queryString);
        if (urlParams.get('contract') !== 'preview') {
            _$('#body').removeClass('');
            _$.ajax('/api/contracts/get', { 'id' => urlParams.get('contract') }, { headers: getBearerHeaders()}).then(
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
            <img src="../src/img/isotype.png" alt="" class="isotype">
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
                    <p class="bold" style="font-size:18px">Nº: 32</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row right">
        <div class="col-12">STGO, 4 de Mayo del 2020</div>
    </div>
    <div class="row padding-top">
        <div class="col-8">
            <p><b>Solicitado por</b>: Julio Humberto Ortíz Puga</p>
            <p>Dirección: Avenida La Escuela Nº 813</p>
            <p>Teléfono: 12345678</p>
            <p>Email: email@email.com</p>
        </div>
        <div class="col-4">
            <p>R.U.T. 12.345.678-9</p>
            <p>Comuna: Las Condes</p>
            <p>Región: Metropolitana</p>
        </div>
    </div>
    <div class="row padding-top">
        <div class="col-8">
            <p><b>Nombre del Fallecido</b>: Julia Viola Puga Michaud</p>
            <p>R.U.T. 12.345.678-9</p>
            <p>Estado Civil: Viuda</p>
            <p>Dirección: Colombia Nº 9072</p>
            <p>Lugar de Fallecimiento: Hogar Acalis</p>
        </div>
        <div class="col-4">
            <p>Q.E.P.D.</p>
            <p>Ocupación: Pensionada</p>
            <p>Estudios: Básicos</p>
            <p>Comuna: La Florida</p>
            <p>Región: Metropolitana</p>
        </div>
    </div>
    <div class="row padding-top">
        <div class="col-8">
            <p><b>Lugar del Velatorio</b>: Parroquia Santa Clara</p>
            <p>Dirección: Santa Elisa Nº 050</p>
        </div>
        <div class="col-4">
            <p>&nbsp;</p>
            <p>Comuna: La Cisterna</p>
            <p>Región: Metropolitana</p>
        </div>
    </div>
    <div class="row padding-top">
        <div class="col-12">
            <p><b>Tipo Servicio</b>: Mackelita Eco. Lisa Brillo</p>
            <p>El servicio Incluye: Int. capilla ardiente, t. registro civil, libro de condolencias, tarjetas de agradecimiento. Valor médico $50.000</p>
        </div>
    </div>
    <div class="row padding-top">
        <div class="col-12">
            <p><b>Cementerio</b>: Parque del Recuerdo Vespucio</p>
        </div>
        <div class="col-8">
            <p>Fecha Funeral: 05-05-2020</p></div>
        <div class="col-4">
            <p>Hora de Llegada: 12:39</p>
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
                    <p>CAPREDENA</p>
                    <p>Saldo</p>
                </div>
                <div class="col-4">
                    <p class="bold">650.000</p>
                    <p class="bold">0</p>
                    <p class="bold">650.000</p>
                    <p class="bold">365.000</p>
                    <p>&nbsp;</p>
                    <p class="bold">280.000</p>
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
                    <p><i class="far fa-check-square"></i> Transferencia</p>
                </div>
                <div class="col-12 no-padding-input">
                    <p><i class="far fa-square"></i> Efectivo</p>
                </div>
                <div class="col-12 no-padding-input">
                    <p><i class="far fa-square"></i> Cheque al día</p>
                </div>
                <div class="col-12 no-padding-input">
                    <p><i class="far fa-square"></i> Cheque a fecha</p>
                </div>
                <div class="col-12 no-padding-input">
                    <p><i class="far fa-square"></i> Tarjeta de crédito</p>
                </div>
                <div class="col-12 no-padding-input">
                    <p><i class="far fa-square"></i> Otro</p>
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