<div id="editContract" class="modal bottom-sheet eighty-percent">
    <input id="e_id" type="hidden">
    <div class="modal-content">
        <h5>Solicitante</h5>
        <div class="row">
            <div class="input-field col s12 m4">
                <input onblur="checkRut(this)" placeholder="ej.: 12345678-9" id="e_s_id" type="text" class="validate" required>
                <label for="e_s_id">Rut</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="" id="e_s_name" type="text" class="validate" pattern="[\S\s]+[\S]+" required>
                <label for="e_s_name">Nombre</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="" id="e_s_last_name" type="text" class="validate" pattern="[\S\s]+[\S]+" required>
                <label for="e_s_last_name">Apellido</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input placeholder="" id="e_s_address" type="text" class="validate" pattern="[\S\s]+[\S]+" required>
                <label for="e_s_address">Dirección</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m3">
                <select id="e_s_region_id" class="validate" required></select>
                <label for="e_s_region_id">Región</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m3">
                <select id="e_s_comune_id" class="validate" required></select>
                <label for="e_s_comune_id">Comuna</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input placeholder="ej.: nombre@gmail.com" id="e_s_email" type="text" pattern="^((?!\.)[\w_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$">
                <label for="e_s_email">Email</label>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="ej.: 9 8765 4321" id="e_s_mobile" type="text" class="validate" pattern="^(9)( ?)[98765]\d{3}( ?)\d{4}$" required>
                <label for="e_s_mobile">Celular</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="ej.: 2 9876 5432" id="e_s_phone" type="text">
                <label for="e_s_phone">Teléfono</label>
            </div>
        </div>
        <h5>Fallecido</h5>
        <div class="row">
            <div class="input-field col s12 m4">
                <input onblur="checkRut(this)" placeholder="ej.: 12345678-9" id="e_d_id" type="text" class="validate" required>
                <label for="e_d_id">Rut</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m8">
                <input placeholder="" id="e_d_name" type="text" class="validate" pattern="[\S\s]+[\S]+" required>
                <label for="e_d_name">Nombre</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input placeholder="" id="e_d_address" type="text" class="validate" required>
                <label for="e_d_address">Dirección</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m3">
                <select id="e_d_region_id" class="validate" required></select>
                <label for="e_d_region_id">Región</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m3">
                <select id="e_d_comune_id" class="validate" required></select>
                <label for="e_d_comune_id">Comuna</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input placeholder="ej.: Casado(a)" id="e_d_marital_status" type="text" class="validate" required>
                <label for="e_d_marital_status">Estado Civil</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="ej.: Profesor(a)" id="e_d_occupation" type="text" class="validate" required>
                <label for="e_d_occupation">Ocupación</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="ej.: Media Completa" id="e_d_education" type="text" class="validate" required>
                <label for="e_d_education">Educación</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input placeholder="" id="e_d_place" type="text" class="validate" required>
                <label for="e_d_place">Lugar de Fallecimiento</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="Seleccione una fecha" id="e_d_date" type="text" class="datepicker validate" required>
                <label for="e_d_date">Fecha de Fallecimiento</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="" id="e_d_insurance" type="text" class="validate" required>
                <label for="e_d_insurance">Tipo de Previsión</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
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
                <input type="text" id="e_f_cementery_name" class="autocomplete" placeholder="ej.: Parque del Recuerdo">
                <input type="hidden" id="e_f_cementery_id">
                <label for="e_f_cementery_id" class="active">Cementerio</label>
            </div>
            <div class="input-field col s12 m3">
                <input placeholder="Seleccione una fecha" id="e_f_date" type="text" class="datepicker" onfocusin="Adaptor.addInPlace('#e_f_cementery','cementeries','cementery_add')">
                <label for="e_f_date">Fecha</label>
            </div>
            <div class="input-field col s12 m3">
                <input placeholder="Seleccione una hora (24H)" id="e_f_time" type="text" class="timepicker">
                <label for="e_f_time">Hora</label>
            </div>
        </div>
        <h5>Servicio</h5>
        <div class="row">
            <div class="input-field col s12 m6">
                <input type="text" id="e_v_service_name" class="autocomplete" placeholder="ej.: PLANA ECO...">
                <input type="hidden" id="e_v_service_id">
                <label for="e_v_service_id" class="active">Tipo</label>
            </div>
            <div class="input-field col s12 m3">
                <select id="e_v_provider_id" onchange="Adaptor.addInPlace('#e_v_service','services','service_add')"></select>
                <label for="e_v_provider_id">Proveedor</label>
            </div>
            <div class="input-field col s12 m3">
                <input value="Sin Color" id="e_v_color" type="text">
                <label for="e_v_color">Color</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="e_v_include" class="materialize-textarea"></textarea>
                <label for="e_v_include">Incluye</label>
            </div>
            <div class="input-field col s12">
                <textarea id="e_v_observation" class="materialize-textarea"></textarea>
                <label for="e_v_observation">Observación</label>
            </div>
            <div class="input-field col s12">
                <textarea placeholder="ej.: Se comunica el sentido fallecimiento de José Miguel Carrera [1785 - 1821]" id="e_v_warning" class="materialize-textarea"></textarea>
                <label for="e_v_warning">Aviso</label>
                <span class="helper-text">Se publicará en redes sociales</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input id="e_v_cost" onchange="Form.Calc.payment('e_')" type="number" min="0">
                <label for="e_v_cost">Valor del Servicio</label>
            </div>
            <div class="input-field col s12 m4">
                <input id="e_v_discount" onchange="Form.Calc.payment('e_')" type="number" min="0">
                <label for="e_v_discount">Descuento</label>
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
                <input id="e_v_coverage" onchange="Form.Calc.payment('e_')" type="number" min="0">
                <label for="e_v_coverage">Aporte Previsión</label>
            </div>
            <div class="input-field col s12 m4">
                <input value="0" id="e_v_payment" type="number" readonly>
                <label for="e_v_payment">Saldo</label>
            </div>
        </div>
        <h5>Forma de Pago</h5>
        <div class="row">
            <div class="input-field col s12 m3">
                <label>
                    <input id="e_p_cash" type="checkbox">
                    <span>Efectivo</span>
                </label>
            </div>
            <div class="input-field col s12 m3">
                <label>
                    <input id="e_p_check" type="checkbox">
                    <span>Cheque al día</span>
                </label>
            </div>
            <div class="input-field col s12 m3">
                <label>
                    <input id="e_p_check_defered" type="checkbox">
                    <span>Cheque a Fecha</span>
                </label>
            </div>
            <div class="input-field col s12 m3">
                <label>
                    <input id="e_p_transfer" type="checkbox">
                    <span>Transferencia</span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m3">
                <label>
                    <input id="e_p_credit_card" type="checkbox">
                    <span>Tarjeta de Crédito</span>
                </label>
            </div>
            <div class="input-field col s12 m3">
                <label>
                    <input id="e_p_debit_card" type="checkbox">
                    <span>Tarjeta de Débito</span>
                </label>
            </div>
            <div class="input-field col s12 m3">
                <label>
                    <input id="e_p_other" type="checkbox">
                    <span>Otro</span>
                </label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-googleBlue btn-flat">Cancelar</a>
        <a href="#!" onclick="editThisContract()" class="waves-effect waves-light teal btn-small">Editar</a>
    </div>
</div>
<script>
    Adaptor.select('#e_s_region_id','regions');
    Adaptor.select('#e_d_region_id','regions');
    Adaptor.select('#e_c_region_id','regions');
    Adaptor.autocomplete('#e_f_cementery','cementeries');
    Adaptor.autocomplete('#e_v_service','services');
    Adaptor.select('#e_v_insurance_id','insurances');
    Adaptor.select('#e_v_provider_id','providers');
    Adaptor.comunes('#e_s_comune_id', 1);
    Adaptor.comunes('#e_d_comune_id', 1);
    Adaptor.comunes('#e_c_comune_id', 1);
    Adaptor.Connect.comunes('#e_s_region_id', '#e_s_comune_id');
    Adaptor.Connect.comunes('#e_d_region_id', '#e_d_comune_id');
    Adaptor.Connect.comunes('#e_c_region_id', '#e_c_comune_id');

    function editThisContract() {
        let data = Form.getValues('#editContract', 'e_');
        Api.post(Api.endpoints['contract_add'], true, data)
            .then(({ status, response }) => {
                if (status === 'OK') {
                    M.toast({ html: response.message });
                    if (response.status === 'fail') {
                        $.each(response.errors, function( _, id ) {
                            $('#e_' + id).addClass('invalid');
                        });
                    } else {
                        $('#editContract').modal('close');
                        Helper.openLink();
                    }
                }
            })
            .catch( e => console.log(e) );
    }

    function checkRut(input) {
        if (!Form.Calc.checkRut(input.value)) {
            M.toast({html: 'El RUT no es válido'});
            $(input).removeClass('valid').addClass('invalid');
        } else {
            $(input).removeClass('invalid').addClass('valid');
        }
    }

</script>
