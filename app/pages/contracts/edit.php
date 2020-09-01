<div id="editContract" class="modal bottom-sheet eighty-percent">
    <input type="hidden" id="e_id">
    <div class="modal-content">
        <h5>Solicitante</h5>
        <div class="row">
            <div class="input-field col s12 m4">
                <input placeholder="ej.: 12345678-9" id="e_s_id" type="text" class="validate" pattern="^\d{6,8}(-)[\dK]$" required>
                <label for="e_s_id">Rut</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="" id="e_s_name" type="text" class="validate" pattern="[\S\s]+[\S]+" required>
                <label for="e_s_name">Nombre</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="" id="e_s_last_name" type="text" class="validate" pattern="[\S\s]+[\S]+" required>
                <label for="e_s_last_name">Apellido</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input placeholder="" id="e_s_address" type="text" class="validate" pattern="[\S\s]+[\S]+" required>
                <label for="e_s_address">Dirección</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m3">
                <select id="e_s_region_id"></select>
                <label for="e_s_region_id">Región</label>
            </div>
            <div class="input-field col s12 m3">
                <select id="e_s_comune_id"></select>
                <label for="e_s_comune_id">Comuna</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input placeholder="ej.: nombre@gmail.com" id="e_s_email" type="text" class="validate" pattern="^((?!\.)[\w_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$" required>
                <label for="e_s_email">Email</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="9 8765 4321" id="e_s_mobile" type="text" class="validate" pattern="^(9)( ?)[98765]\d{3}( ?)\d{4}$" required>
                <label for="e_s_mobile">Celular</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="2 9876 5432" id="e_s_phone" type="text">
                <label for="e_s_phone">Teléfono</label>
            </div>
        </div>
        <h5>Fallecido</h5>
        <div class="row">
            <div class="input-field col s12 m4">
                <input placeholder="ej.: 12345678-9" id=e_"d_id" type="text" class="validate" pattern="^\d{6,8}(-)[\dK]$" required>
                <label for="e_d_id">Rut</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m8">
                <input placeholder="" id="e_d_name" type="text" class="validate" pattern="[\S\s]+[\S]+" required>
                <label for="e_d_name">Nombre</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input placeholder="" id="e_d_address" type="text">
                <label for="e_d_address">Dirección</label>
            </div>
            <div class="input-field col s12 m3">
                <select id="e_d_region_id"></select>
                <label for="e_d_region_id">Región</label>
            </div>
            <div class="input-field col s12 m3">
                <select id="e_d_comune_id"></select>
                <label for="e_d_comune_id">Comuna</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m3">
                <input placeholder="" id="e_d_place" type="text">
                <label for="e_d_place">Lugar de Fallecimiento</label>
            </div>
            <div class="input-field col s12 m3">
                <input placeholder="ej.: Casado(a)" id="e_d_marital_status" type="text">
                <label for="e_d_marital_status">Estado Civil</label>
            </div>
            <div class="input-field col s12 m3">
                <input placeholder="ej.: Profesor(a)" id="e_d_occupation" type="text">
                <label for="e_d_occupation">Ocupación</label>
            </div>
            <div class="input-field col s12 m3">
                <input placeholder="ej.: Media Completa" id="e_d_education" type="text">
                <label for="e_d_education">Educación</label>
            </div>
        </div>
        <h5>Velatorio</h5>
        <div class="row">
            <div class="input-field col s12 m3">
                <input placeholder="" id="e_c_church" type="text">
                <label for="e_c_church">Capilla</label>
            </div>
            <div class="input-field col s12 m3">
                <input placeholder="" id="e_c_address" type="text">
                <label for="e_c_address">Dirección</label>
            </div>
            <div class="input-field col s12 m3">
                <select id="e_c_region_id"></select>
                <label for="e_c_region_id">Región</label>
            </div>
            <div class="input-field col s12 m3">
                <select id="e_c_comune_id"></select>
                <label for="e_c_comune_id">Comuna</label>
            </div>
        </div>
        <h5>Funeral</h5>
        <div class="row">
            <div class="input-field col s12 m6">
                <select id="e_f_cementery_id"></select>
                <label for="e_f_cementery_id">Cementerio</label>
            </div>
            <div class="input-field col s12 m3">
                <input placeholder="Seleccione una fecha" id="e_f_date" type="text" class="datepicker validate" required>
                <label for="e_f_date">Fecha</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m3">
                <input placeholder="Seleccione una hora (24H)" id="e_f_time" type="text" class="timepicker validate" required>
                <label for="e_f_time">Hora</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
        </div>
        <h5>Servicio</h5>
        <div class="row">
            <div class="input-field col s12 m6">
                <select id="e_v_service_id"></select>
                <label for="e_v_service_id">Tipo</label>
            </div>
            <div class="input-field col s12 m3">
                <input value="Sin proveedor" id="e_v_provider_name" type="text" readonly>
                <label for="e_v_provider_name">Provider</label>
                <span class="helper-text">Según tipo de servicio</span>
            </div>
            <div class="input-field col s12 m3">
                <input value="Sin Color" id="e_v_color" type="text" readonly>
                <label for="e_v_color">Color</label>
                <span class="helper-text">Según tipo de servicio</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="e_v_include" class="materialize-textarea validate" required></textarea>
                <label for="e_v_include">Incluye</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12">
                <textarea id="e_v_observation" class="materialize-textarea"></textarea>
                <label for="e_v_observation">Observación</label>
            </div>
            <div class="input-field col s12">
                <textarea placeholder="Obituario" id="e_v_warning" class="materialize-textarea"></textarea>
                <label for="e_v_warning">Aviso</label>
                <span class="helper-text">Se publicará en redes sociales</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input id="e_v_cost" onchange="Form.Calc.payment()" type="number" min="1" class="validate" required>
                <label for="e_v_cost">Valor del Servicio</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input id="e_v_discount" onchange="Form.Calc.payment()" type="number" min="0" class="validate" required>
                <label for="e_v_discount">Descuento</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input value="0" id="e_v_total" type="number" readonly>
                <label for="e_v_total">Total</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <select id="e_v_insurance_id"></select>
                <label for="e_v_insurance_id">Previsión</label>
            </div>
            <div class="input-field col s12 m4">
                <input id="e_v_coverage" onchange="Form.Calc.payment()" type="number" min="0" class="validate" required>
                <label for="e_v_coverage">Aporte Previsión</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input value="0" id="e_v_payment" type="number" readonly>
                <label for="e_v_payment">Saldo</label>
            </div>
        </div>
        <h5>Forma de Pago</h5>
        <div class="row">
            <div class="input-field col s12 m4">
                <label>
                    <input id="e_p_cash" type="checkbox">
                    <span>Efectivo</span>
                </label>
            </div>
            <div class="input-field col s12 m4">
                <label>
                    <input id="e_p_check" type="checkbox">
                    <span>Cheque al día</span>
                </label>
            </div>
            <div class="input-field col s12 m4">
                <label>
                    <input id="e_p_check_defered" type="checkbox">
                    <span>Cheque a Fecha</span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <label>
                    <input id="e_p_transfer" type="checkbox">
                    <span>Transferencia</span>
                </label>
            </div>
            <div class="input-field col s12 m4">
                <label>
                    <input id="e_p_credit_card" type="checkbox">
                    <span>Tarjeta de Crédito</span>
                </label>
            </div>
            <div class="input-field col s12 m4">
                <label>
                    <input id="e_p_other" type="checkbox">
                    <span>Otro</span>
                </label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="editThisContract()" class="waves-effect waves-light teal btn-small">Editar</a>
    </div>
</div>
<script>
    Adaptor.select('#c_s_region_id','regions');
    Adaptor.select('#c_d_region_id','regions');
    Adaptor.select('#c_c_region_id','regions');
    Adaptor.select('#c_f_cementery_id','cementeries');
    Adaptor.select('#c_v_service_id','services');
    Adaptor.select('#c_v_insurance_id','insurances');
    Adaptor.comunes('#c_s_comune_id', 1);
    Adaptor.comunes('#c_d_comune_id', 1);
    Adaptor.comunes('#c_c_comune_id', 1);
    Adaptor.Connect.comunes('#c_s_region_id', '#c_s_comune_id');
    Adaptor.Connect.comunes('#c_d_region_id', '#c_d_comune_id');
    Adaptor.Connect.comunes('#c_c_region_id', '#c_c_comune_id');
    Adaptor.Connect.services('#c_v_service_id', '#c_v_provider_name', 'providers_by_service');
    Adaptor.Connect.services('#c_v_service_id', '#c_v_color', 'colors_by_service');

    function editThisContract() {
        let data = Form.getValues('#editContract');
        console.log(data);
        Api.post(Api.endpoints['contract'], true, data)
            .then(({ status, response }) => {
                if (status === 'OK') {
                    M.toast({ html: response.message });
                    if (response.status === 'fail') {
                        $.each(response.errors, function( _, id ) {
                            $('#' + id).addClass('invalid');
                        });
                    } else {
                        Helper.openLink();
                    }
                }
            })
            .catch( e => console.log(e) );
    }

</script>
