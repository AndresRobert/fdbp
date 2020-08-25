<!DOCTYPE html>
<html lang="es">
<head><?php include 'layout/head.php' ?></head>
<body class="grey lighten-3">
<?php include 'layout/topbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col s12">
            <h4>Contratos</h4>
            <p>Listado de contratos emitidos</p>
            <a href="#newContract" class="btn-floating btn-fixed btn-large waves-effect waves-light green tooltipped modal-trigger" data-position="left" data-tooltip="Nuevo Contrato"><i class="material-icons">add</i></a>
        </div>
    </div>
    <div class="row card-panel">
        <div class="col s12">
            <table id="contracts_list" class="dTable striped highlight">
                <thead>
                <tr>
                    <th>Número</th>
                    <th>Fecha</th>
                    <th>Solicitante RUT</th>
                    <th>Solicitante Nombres</th>
                    <th>Solicitante Apellidos</th>
                    <th>Solicitante Dirección</th>
                    <th>Solicitante Comuna</th>
                    <th>Solicitante Región</th>
                    <th>Solicitante Celular</th>
                    <th>Solicitante Email</th>
                    <th>Solicitante Teléfono</th>
                    <th>Fallecido Nombre</th>
                    <th>Fallecido Dirección</th>
                    <th>Fallecido Comuna</th>
                    <th>Fallecido Región</th>
                    <th>Fallecido Estado Civil</th>
                    <th>Fallecido Estudios</th>
                    <th>Fallecido Ocupación</th>
                    <th>Fallecido Lugar de Fallecimiento</th>
                    <th>Velatorio Capilla</th>
                    <th>Velatorio Dirección</th>
                    <th>Velatorio Comuna</th>
                    <th>Velatorio Región</th>
                    <th>Funeral Cementerio</th>
                    <th>Funeral Fecha</th>
                    <th>Funeral Hora</th>
                    <th>Servicio Tipo</th>
                    <th>Servicio Color</th>
                    <th>Servicio Incluye</th>
                    <th>Servicio Observación</th>
                    <th>Servicio Aviso</th>
                    <th>Servicio Valor</th>
                    <th>Servicio Descuento</th>
                    <th>Servicio Valor Total</th>
                    <th>Servicio Previsión</th>
                    <th>Servicio Previsión Aporte</th>
                    <th>Servicio Saldo</th>
                    <th data-placeholder="si/no">Transferencia</th>
                    <th data-placeholder="si/no">Efectivo</th>
                    <th data-placeholder="si/no">Cheque al día</th>
                    <th data-placeholder="si/no">Cheque a fecha</th>
                    <th data-placeholder="si/no">Tarjeta de Crédito</th>
                    <th data-placeholder="si/no">Otro</th>
                    <th data-placeholder="none">Acciones</th>
                </tr>
                </thead>
                <tbody id="contractsTable"></tbody>
            </table>
            <script>
                $.ajax({
                    url: Api.endpoints['contracts'],
                    type: 'get',
                    headers: Auth.getHeaders(),
                    dataType: 'json',
                    success: ({ status, response }) => {
                        if (status === 'OK') {
                            Helper.Datatable.init(
                                "#contracts_list",
                                {
                                    "data" : response.contract,
                                    "columns" : [
                                        { "data" : "id" },
                                        { "data" : "date" },
                                        { "data" : "s_id" },
                                        { "data" : "s_name" },
                                        { "data" : "s_last_name" },
                                        { "data" : "s_address" },
                                        { "data" : "s_comune_name" },
                                        { "data" : "s_region_name" },
                                        { "data" : "s_mobile" },
                                        { "data" : "s_email" },
                                        { "data" : "s_phone" },
                                        { "data" : "d_name" },
                                        { "data" : "d_address" },
                                        { "data" : "d_comune_name" },
                                        { "data" : "d_region_name" },
                                        { "data" : "d_marital_status" },
                                        { "data" : "d_education" },
                                        { "data" : "d_occupation" },
                                        { "data" : "d_place" },
                                        { "data" : "c_church" },
                                        { "data" : "c_address" },
                                        { "data" : "c_comune_name" },
                                        { "data" : "c_region_name" },
                                        { "data" : "f_cementery_name" },
                                        { "data" : "f_date" },
                                        { "data" : "f_time" },
                                        { "data" : "v_service_name" },
                                        { "data" : "v_color" },
                                        { "data" : "v_include" },
                                        { "data" : "v_observation" },
                                        { "data" : "v_warning" },
                                        { "data" : "v_cost" },
                                        { "data" : "v_discount" },
                                        { "data" : "v_total" },
                                        { "data" : "v_insurance_name" },
                                        { "data" : "v_coverage" },
                                        { "data" : "v_payment" },
                                        {
                                            "mRender": function (d, t, row) {
                                                if (row.p_transfer === '1') {
                                                    return '<i class="material-icons">check_box</i>';
                                                }
                                                return '<i class="material-icons">crop_din</i>';
                                            }
                                        },
                                        {
                                            "mRender": function (d, t, row) {
                                                if (row.p_cash === '1') {
                                                    return '<i class="material-icons">check_box</i>';
                                                }
                                                return '<i class="material-icons">crop_din</i>';
                                            }
                                        },
                                        {
                                            "mRender": function (d, t, row) {
                                                if (row.p_check === '1') {
                                                    return '<i class="material-icons">check_box</i>';
                                                }
                                                return '<i class="material-icons">crop_din</i>';
                                            }
                                        },
                                        {
                                            "mRender": function (d, t, row) {
                                                if (row.p_check_defered === '1') {
                                                    return '<i class="material-icons">check_box</i>';
                                                }
                                                return '<i class="material-icons">crop_din</i>';
                                            }
                                        },
                                        {
                                            "mRender": function (d, t, row) {
                                                if (row.p_credit_card === '1') {
                                                    return '<i class="material-icons">check_box</i>';
                                                }
                                                return '<i class="material-icons">crop_din</i>';
                                            }
                                        },
                                        {
                                            "mRender": function (d, t, row) {
                                                if (row.p_other === '1') {
                                                    return '<i class="material-icons">check_box</i>';
                                                }
                                                return '<i class="material-icons">crop_din</i>';
                                            }
                                        },
                                        {
                                            "mRender": function (d, t, row) {
                                                return '<button onclick="contractView(' + row.id + ')" class="btn-flat waves-effect waves-googleBlue">Ver</button>' +
                                                    '<button onclick="contractPublish(' + row.id + ')" class="btn-flat waves-effect waves-googleGreen">Publicar</button>' +
                                                    '<button onclick="contractEdit(' + row.id + ')" class="btn-flat waves-effect waves-googleYellow">Editar</button>' +
                                                    '<button onclick="contractDelete(' + row.id + ')" class="btn-flat waves-effect waves-googleRed">Eliminar</button>';
                                            }
                                        }
                                    ]
                                }
                            );
                        } else {
                            M.toast({html: 'No se encontraron contratos'});
                        }
                    },
                    error: data => {
                        if (data.responseJSON.response.response_code === 401) {
                            Helper.openLink('/');
                        }
                    }
                });
            </script>
        </div>
    </div>
    <!-- Modals -->
    <div id="newContract" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>
</div>
</body>
</html>