<div class="row card-panel">
    <div class="col s12">
        <table id="contracts_list" class="dTable striped highlight">
            <thead>
            <tr>
                <th>Número</th>
                <th>Factura</th>
                <th>Pagado</th>
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
            Api.post(Api.endpoints['contracts'], true)
                .then(({ status, response }) => {
                    if (status === 'OK') {
                        Helper.Datatable.init(
                            "#contracts_list",
                            {
                                "data" : response.contract,
                                "columns" : [
                                    { "data" : "id" },
                                    { "data" : "invoice" },
                                    {
                                        "mRender": function (d, t, row) {
                                            if (row.paid === '1') {
                                                return '<i data-tooltip="Pagado ' + row.paid_date + '" class="tooltipped material-icons green-text">radio_button_checked</i>';
                                            }
                                            else if (row.paid === '0') {
                                                return '<i data-tooltip="Pendiente" class="tooltipped material-icons red-text">radio_button_unchecked</i>';
                                            }
                                            return '';
                                        }
                                    },
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
                                                return '<i class="material-icons si">check_box</i>';
                                            }
                                            return '<i class="material-icons no">crop_din</i>';
                                        }
                                    },
                                    {
                                        "mRender": function (d, t, row) {
                                            if (row.p_cash === '1') {
                                                return '<i class="material-icons si">check_box</i>';
                                            }
                                            return '<i class="material-icons no">crop_din</i>';
                                        }
                                    },
                                    {
                                        "mRender": function (d, t, row) {
                                            if (row.p_check === '1') {
                                                return '<i class="material-icons si">check_box</i>';
                                            }
                                            return '<i class="material-icons no">crop_din</i>';
                                        }
                                    },
                                    {
                                        "mRender": function (d, t, row) {
                                            if (row.p_check_defered === '1') {
                                                return '<i class="material-icons si">check_box</i>';
                                            }
                                            return '<i class="material-icons no">crop_din</i>';
                                        }
                                    },
                                    {
                                        "mRender": function (d, t, row) {
                                            if (row.p_credit_card === '1') {
                                                return '<i class="material-icons si">check_box</i>';
                                            }
                                            return '<i class="material-icons no">crop_din</i>';
                                        }
                                    },
                                    {
                                        "mRender": function (d, t, row) {
                                            if (row.p_other === '1') {
                                                return '<i class="material-icons si">check_box</i>';
                                            }
                                            return '<i class="material-icons no">crop_din</i>';
                                        }
                                    },
                                    {
                                        "mRender": function (d, t, row) {
                                            let btnEdit = '<a href="#!" onclick="contractEdit(' + row.id + ')" data-tooltip="Editar" class="tooltipped btn-flat"><i class="material-icons">edit</i></a>',
                                                btnDelete = '<a href="#!" onclick="contractDelete(' + row.id + ')" data-tooltip="Eliminar" class="tooltipped btn-flat"><i class="material-icons">delete_forever</i></a>',
                                                btnInvoice = '<a href="#!" onclick="contractAddInvoice(' + row.id + ')" data-tooltip="Asociar Factura" class="tooltipped btn-flat"><i class="material-icons">description</i></a>',
                                                btnPayment = '<a href="#!" onclick="contractAddPayment(' + row.id + ')" data-tooltip="Informar Pago" class="tooltipped btn-flat"><i class="material-icons">local_atm</i></a>',
                                                btnEmailSend = '<a href="#!" onclick="contractSend(' + row.id + ')" data-tooltip="Enviar Email" class="tooltipped btn-flat"><i class="material-icons">mail</i></a>',
                                                btnPublish = '<a href="#!" onclick="contractPublish(\'' + row.d_name + '\', \'' + row.v_warning + '\', \'' + row.f_date + '\')" data-tooltip="Publicar en Facebook" class="tooltipped btn-flat"><i class="material-icons">record_voice_over</i></a>';
                                            if (row.invoice === '') {
                                                btnPayment = '<a href="#!" data-tooltip="Sin Factura" class="tooltipped btn-flat grey-text" ><i class="material-icons">local_atm</i></a>';
                                            } else {
                                                if (row.paid === '1') {
                                                    btnEdit = '<a href="#!" data-tooltip="No Editable" class="tooltipped btn-flat grey-text"><i class="material-icons">edit</i></a>';
                                                    btnDelete = '<a href="#!" data-tooltip="No Eliminable" class="tooltipped btn-flat grey-text"><i class="material-icons">delete_forever</i></a>';
                                                    btnInvoice = '<a href="#!" data-tooltip="Factura Ya Asociada" class="tooltipped btn-flat grey-text"><i class="material-icons">description</i></a>';
                                                    btnPayment = '<a href="#!" data-tooltip="Pagado" class="tooltipped btn-flat grey-text"><i class="material-icons">local_atm</i></a>';
                                                }
                                            }
                                            if (row.s_email === 'No Informado') {
                                                btnEmailSend = '<a href="#!" data-tooltip="Sin Email" class="tooltipped btn-flat grey-text"><i class="material-icons">mail</i></a>';
                                            }
                                            if (row.v_warning === '') {
                                                btnPublish = '<a href="#!" data-tooltip="Sin Aviso" class="tooltipped btn-flat grey-text"><i class="material-icons">record_voice_over</i></a>';
                                            }
                                            return '<a href="#!" onclick="contractView(' + row.id + ')" data-tooltip="Ver" class="tooltipped btn-flat"><i class="material-icons">remove_red_eye</i></a>' +
                                                btnEdit + btnDelete + btnInvoice + btnPayment + btnEmailSend + btnPublish;
                                        }
                                    }
                                ],
                                "order": [[ 0, "desc" ]],
                                "initComplete": function (settings, json) {
                                    $('.tooltipped').tooltip();
                                }
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

            function contractAddInvoice(id) {
                const Modal = $('#invoiceContract');
                Modal.modal('open');
                $('#aso_id').val(id).addClass('active');
            }

            function contractAddPayment(id) {
                const Modal = $('#paymentContract');
                Modal.modal('open');
                $('#pay_id').html(id);
            }

            function contractView(id) {
                Helper.openLink('/app/preview/contract.php?contract=' + id, '_blank');
            }

            function contractEdit(id) {
                const Modal = $('#editContract');
                Modal.modal('open');
                Api.post(Api.endpoints['contract_get'], true, { id: id })
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

            function contractPublish(name, message, date) {
                Helper.openLink('https://fdbp.acode.cl/app/preview/obituary.php?name=' + name + '&message=' + message + '&date=' + date, '_blank');
                //Helper.openLink('https://www.facebook.com/sharer/sharer.php?u=' + Config.siteHome + '&quote=' + encodeURIComponent(text), '_blank');
                //M.toast({ html: 'To be implemented' });
            }

            function contractSend() {
                M.toast({ html: 'To be implemented' });
            }

            function contractDelete(id) {
                $('#del_id').html(id);
                const Modal = $('#deleteContract');
                Modal.modal('open');
            }

            function setDataOnModal(_data, prefix) {
                $('#' + prefix + 'id').val(Helper.setDefault(_data.id, '999999'));

                $('#' + prefix + 's_name').val(Helper.setDefault(_data.s_name, ''));
                $('#' + prefix + 's_last_name').val(Helper.setDefault(_data.s_last_name, ''));
                $('#' + prefix + 's_address').val(Helper.setDefault(_data.s_address, ''));
                $('#' + prefix + 's_mobile').val(Helper.setDefault(_data.s_mobile, ''));
                $('#' + prefix + 's_email').val(Helper.setDefault(_data.s_email, ''));
                $('#' + prefix + 's_id').val(Helper.setDefault(_data.s_id, ''));
                $('#' + prefix + 's_region_id').val(Helper.setDefault(_data.s_region_id, '1'));
                $('#' + prefix + 's_region_id').formSelect();
                $('#' + prefix + 's_region_id').trigger('change');
                $('#' + prefix + 's_comune_id').val(Helper.setDefault(_data.s_comune_id, '1'));
                $('#' + prefix + 's_comune_id').formSelect();

                $('#' + prefix + 'd_name').val(Helper.setDefault(_data.d_name, ''));
                $('#' + prefix + 'd_id').val(Helper.setDefault(_data.d_id, ''));
                $('#' + prefix + 'd_marital_status').val(Helper.setDefault(_data.d_marital_status, ''));
                $('#' + prefix + 'd_address').val(Helper.setDefault(_data.d_address, ''));
                $('#' + prefix + 'd_place').val(Helper.setDefault(_data.d_place, ''));
                $('#' + prefix + 'd_occupation').val(Helper.setDefault(_data.d_occupation, ''));
                $('#' + prefix + 'd_education').val(Helper.setDefault(_data.d_education, ''));
                $('#' + prefix + 'd_region_id').val(Helper.setDefault(_data.d_region_id, '1'));
                $('#' + prefix + 'd_region_id').formSelect();
                $('#' + prefix + 'd_region_id').trigger('change');
                $('#' + prefix + 'd_comune_id').val(Helper.setDefault(_data.d_comune_id, '1'));
                $('#' + prefix + 'd_comune_id').formSelect();

                $('#' + prefix + 'c_church').val(Helper.setDefault(_data.c_church, ''));
                $('#' + prefix + 'c_address').val(Helper.setDefault(_data.c_address, ''));
                $('#' + prefix + 'c_region_id').val(Helper.setDefault(_data.c_region_id, '1'));
                $('#' + prefix + 'c_region_id').formSelect();
                $('#' + prefix + 'c_region_id').trigger('change');
                $('#' + prefix + 'c_comune_id').val(Helper.setDefault(_data.c_comune_id, '1'));
                $('#' + prefix + 'c_comune_id').formSelect();

                $('#' + prefix + 'v_service_id').val(Helper.setDefault(_data.v_service_id, '1'));
                $('#' + prefix + 'v_service_id').formSelect();
                $('#' + prefix + 'v_include').val(Helper.setDefault(_data.v_include, ''));
                $('#' + prefix + 'v_warning').val(Helper.setDefault(_data.v_warning, ''));
                $('#' + prefix + 'v_observation').val(Helper.setDefault(_data.v_observation, ''));
                $('#' + prefix + 'v_insurance_id').val(Helper.setDefault(_data.v_insurance_id, '1'));
                $('#' + prefix + 'v_insurance_id').formSelect();
                $('textarea').trigger('focus');

                $('#' + prefix + 'f_cementery_id').val(Helper.setDefault(_data.f_cementery_id, '1'));
                $('#' + prefix + 'f_cementery_id').formSelect();
                $('#' + prefix + 'f_date').val(Helper.setDefault(_data.f_date, ''));
                $('#' + prefix + 'f_time').val(Helper.setDefault(_data.f_time, ''));

                $('#' + prefix + 'v_cost').val(Helper.setDefault(_data.v_cost, '0'));
                $('#' + prefix + 'v_discount').val(Helper.setDefault(_data.v_discount, '0'));
                $('#' + prefix + 'v_total').val(Helper.setDefault(_data.v_total, '0'));
                $('#' + prefix + 'v_coverage').val(Helper.setDefault(_data.v_coverage, '0'));
                $('#' + prefix + 'v_payment').val(Helper.setDefault(_data.v_payment, '0'));
                $('input[type=number]').trigger('focus');

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