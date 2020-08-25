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
                    <th>Fallecido RUT</th>
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
                                        { "data" : "d_id" },
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
</div>
<!-- Modals -->
<div id="newContract" class="modal bottom-sheet">
    <div class="modal-content">
        <h5>Solicitante</h5>
        <div class="row">
            <div class="input-field col s12 m4">
                <input placeholder="ej.: 12345678-9" id="s_id" type="text" class="validate" pattern="^\d{6,8}(-)[\dK]$">
                <label for="s_id">Rut</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="" id="s_name" type="text" class="validate" pattern="[\S\s]+[\S]+">
                <label for="s_name">Nombre</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="" id="s_last_name" type="text" class="validate" pattern="[\S\s]+[\S]+">
                <label for="s_last_name">Apellido</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input placeholder="" id="s_address" type="text" class="validate" pattern="^\d{6,8}(-)[\dK]$">
                <label for="s_address">Dirección</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m3">
                <select id="s_region_id">
                    <option value="1">Región 1</option>
                    <option value="2">Región 2</option>
                    <option value="3">Región 3</option>
                </select>
                <label for="s_region_id">Región</label>
            </div>
            <div class="input-field col s12 m3">
                <select id="s_comune_id">
                    <option value="1">Comuna 1</option>
                    <option value="2">Comuna 2</option>
                    <option value="3">Comuna 3</option>
                </select>
                <label for="s_comune_id">Comuna</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input placeholder="ej.: nombre@gmail.com" id="s_email" type="text" class="validate" pattern="^((?!\.)[\w-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$">
                <label for="s_email">Email</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="9 87654321" id="s_mobile" type="text" class="validate" pattern="^(9)( )[98765]\d{3}\d{4}$">
                <label for="s_mobile">Celular</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="298765432" id="s_phone" type="text">
                <label for="s_phone">Teléfono</label>
            </div>
        </div>
        <h5>Fallecido</h5>
        <div class="row">
            <div class="input-field col s12 m4">
                <input placeholder="ej.: 12345678-9" id="d_id" type="text" class="validate" pattern="^\d{6,8}(-)[\dK]$">
                <label for="d_id">Rut</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m8">
                <input placeholder="" id="d_name" type="text" class="validate" pattern="[\S\s]+[\S]+">
                <label for="d_name">Nombre</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input placeholder="" id="d_address" type="text">
                <label for="d_address">Dirección</label>
            </div>
            <div class="input-field col s12 m3">
                <select id="d_region_id">
                    <option value="1">Región 1</option>
                    <option value="2">Región 2</option>
                    <option value="3">Región 3</option>
                </select>
                <label for="d_region_id">Región</label>
            </div>
            <div class="input-field col s12 m3">
                <select id="d_comune_id">
                    <option value="1">Comuna 1</option>
                    <option value="2">Comuna 2</option>
                    <option value="3">Comuna 3</option>
                </select>
                <label for="d_comune_id">Comuna</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="waves-effect waves-light blue btn-small">Vista Previa</a>
        <a href="#!" class="modal-close waves-effect waves-light green btn-small">Guardar</a>
        <a href="#!" class="modal-close waves-effect waves-light red btn-small">Eliminar</a>
    </div>
</div>
</body>
</html>