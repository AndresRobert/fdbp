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
                <th>Servicio Proveedor</th>
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
            Api.get(Api.endpoints['contract'], true)
                .then(({ status, response }) => {
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
                                    { "data" : "v_provider_name" },
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
                                                '<button onclick="contractEdit(' + row.id + ')" class="btn-flat waves-effect waves-googleYellow">Editar</button>' +
                                                '<button onclick="contractPublish(' + row.id + ')" class="btn-flat waves-effect waves-googleGreen">Publicar</button>' +
                                                '<button onclick="contractDelete(' + row.id + ')" class="btn-flat waves-effect waves-googleRed">Eliminar</button>';
                                        }
                                    }
                                ]
                            }
                        );
                    }
                    else if (status === 'Unauthorized') {
                        Helper.openLink('/');
                    }
                    else {
                        M.toast({html: 'No se encontraron contratos'});
                    }
                })
                .catch( e => console.log(e) );

            function contractView(id) {
                Helper.openLink('/app/preview/contract.php?contract=' + id, '_blank');
            }

            function contractEdit (id) {
                // Abrir el modal
                const Modal = $('.editContract');
                Modal.modal('open');
                // Cargar los datos del contrato
                Api.post(Api.endpoints['one_contract'], true, { id: id })
                    .then(({ status, response }) => {
                        if (status === 'error') {
                            M.toast({ html: 'Hubo un error al intentar obtener el contrato'});
                            Modal.modal('close');
                        }
                        if (status === 'fail') {
                            M.toast({ html: 'Session expirada, cierre esta vista y vuelva a intentarlo'});
                            Helper.openLink('/');
                        } else {
                            if (response.status !== 'fail' && response.contract !== []) {
                                let data = response.contract;
                                data['f_date'] = data['f_datetime'].substring(0,10);
                                data['f_time'] = data['f_datetime'].substring(11,16);
                                setDataOnModal(data, 'e_');
                                M.toast({ html: 'Contrato cargado' });
                            } else {
                                M.toast({ html: 'Hubo un error al intentar cargar el contrato' });
                            }
                        }
                    })
                    .catch( e => console.log(e) );
            }

            function setDataOnModal(_data, prefix) {
                $('#' + prefix + 'id').val(Helper.setDefault(_data.id, '999999'));

                $('#' + prefix + 's_name').val(Helper.setDefault(_data.s_name, ''));
                $('#' + prefix + 's_last_name').val(Helper.setDefault(_data.s_last_name, ''));
                $('#' + prefix + 's_address').val(Helper.setDefault(_data.s_address, ''));
                $('#' + prefix + 's_mobile').val(Helper.setDefault(_data.s_mobile, ''));
                $('#' + prefix + 's_email').val(Helper.setDefault(_data.s_email, ''));
                $('#' + prefix + 's_id').val(Helper.setDefault(_data.s_id, ''));
                $('#' + prefix + 's_comune_id').val(Helper.setDefault(_data.s_comune_id, '1'));
                $('#' + prefix + 's_region_id').val(Helper.setDefault(_data.s_region_id, '1'));

                $('#' + prefix + 'd_name').val(Helper.setDefault(_data.d_name, ''));
                $('#' + prefix + 'd_id').val(Helper.setDefault(_data.d_id, ''));
                $('#' + prefix + 'd_marital_status').val(Helper.setDefault(_data.d_marital_status, ''));
                $('#' + prefix + 'd_address').val(Helper.setDefault(_data.d_address, ''));
                $('#' + prefix + 'd_place').val(Helper.setDefault(_data.d_place, ''));
                $('#' + prefix + 'd_occupation').val(Helper.setDefault(_data.d_occupation, ''));
                $('#' + prefix + 'd_education').val(Helper.setDefault(_data.d_education, ''));
                $('#' + prefix + 'd_comune_id').val(Helper.setDefault(_data.d_comune_id, '1'));
                $('#' + prefix + 'd_region_id').val(Helper.setDefault(_data.d_region_id, '1'));

                $('#' + prefix + 'c_church').val(Helper.setDefault(_data.c_church, ''));
                $('#' + prefix + 'c_address').val(Helper.setDefault(_data.c_address, ''));
                $('#' + prefix + 'c_comune_id').val(Helper.setDefault(_data.c_comune_id, '1'));
                $('#' + prefix + 'c_region_id').val(Helper.setDefault(_data.c_region_id, '1'));

                $('#' + prefix + 'v_service_id').val(Helper.setDefault(_data.v_service_id, '1'));
                $('#' + prefix + 'v_include').val(Helper.setDefault(_data.v_include, ''));
                $('#' + prefix + 'v_warning').val(Helper.setDefault(_data.v_warning, ''));
                $('#' + prefix + 'v_observation').val(Helper.setDefault(_data.v_observation, ''));
                $('#' + prefix + 'v_insurance_id').val(Helper.setDefault(_data.v_insurance_id, '1'));

                $('#' + prefix + 'f_cementery_id').val(Helper.setDefault(_data.f_cementery_id, '1'));
                $('#' + prefix + 'f_date').val(Helper.setDefault(_data.f_date, ''));
                $('#' + prefix + 'f_time').val(Helper.setDefault(_data.f_time, ''));

                $('#' + prefix + 'v_cost').val(Helper.setDefault(Number(_data.v_cost).toLocaleString('es-CL'), '0'));
                $('#' + prefix + 'v_discount').val(Helper.setDefault(Number(_data.v_discount).toLocaleString('es-CL'), '0'));
                $('#' + prefix + 'v_total').val(Helper.setDefault(Number(_data.v_total).toLocaleString('es-CL'), '0'));
                $('#' + prefix + 'v_coverage').val(Helper.setDefault(Number(_data.v_coverage).toLocaleString('es-CL'), '0'));
                $('#' + prefix + 'v_payment').val(Helper.setDefault(Number(_data.v_payment).toLocaleString('es-CL'), '0'));

                if (_data.p_cash === true || _data.p_cash === '1' || _data.p_cash === 1) {
                    $('#' + prefix + 'p_cash').attr('checked', true);
                } else {
                    $('#' + prefix + 'p_cash').attr('checked', false);
                }
                if (_data.p_check === true || _data.p_check === '1' || _data.p_check === 1) {
                    $('#' + prefix + 'p_check').attr('checked', true);
                } else {
                    $('#' + prefix + 'p_check').attr('checked', false);
                }
                if (_data.p_check_defered === true || _data.p_check_defered === '1' || _data.p_check_defered === 1) {
                    $('#' + prefix + 'p_check_defered').attr('checked', true);
                } else {
                    $('#' + prefix + 'p_check_defered').attr('checked', false);
                }
                if (_data.p_credit_card === true || _data.p_credit_card === '1' || _data.p_credit_card === 1) {
                    $('#' + prefix + 'p_credit_card').attr('checked', true);
                } else {
                    $('#' + prefix + 'p_credit_card').attr('checked', false);
                }
                if (_data.p_other === true || _data.p_other === '1' || _data.p_other === 1) {
                    $('#' + prefix + 'p_other').attr('checked', true);
                } else {
                    $('#' + prefix + 'p_other').attr('checked', false);
                }
                if (_data.p_transfer === true || _data.p_transfer === '1' || _data.p_transfer === 1) {
                    $('#' + prefix + 'p_transfer').attr('checked', true);
                } else {
                    $('#' + prefix + 'p_transfer').attr('checked', false);
                }
            }

        </script>
    </div>
</div>