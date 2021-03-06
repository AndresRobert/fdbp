<div id="newContract" class="modal bottom-sheet eighty-percent">
    <div class="modal-content">
        <h5>Solicitante</h5>
        <div class="row">
            <div class="input-field col s12 m4">
                <input onblur="checkRut(this)" placeholder="ej.: 12345678-9" id="s_id" type="text" class="validate" required>
                <label for="s_id">Rut</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="" id="s_name" type="text" class="validate" pattern="[\S\s]+[\S]+" required>
                <label for="s_name">Nombre</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="" id="s_last_name" type="text" class="validate" pattern="[\S\s]+[\S]+" required>
                <label for="s_last_name">Apellido</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input placeholder="" id="s_address" type="text" class="validate" pattern="[\S\s]+[\S]+" required>
                <label for="s_address">Dirección</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m3">
                <select id="s_region_id" class="validate" required></select>
                <label for="s_region_id">Región</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m3">
                <select id="s_comune_id" class="validate" required></select>
                <label for="s_comune_id">Comuna</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input placeholder="ej.: nombre@gmail.com" id="s_email" type="text" pattern="^((?!\.)[\w_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$">
                <label for="s_email">Email</label>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="ej.: 9 8765 4321" id="s_mobile" type="text" class="validate" pattern="^(9)( ?)[98765]\d{3}( ?)\d{4}$" required>
                <label for="s_mobile">Celular</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="ej.: 2 9876 5432" id="s_phone" type="text">
                <label for="s_phone">Teléfono</label>
            </div>
        </div>
        <h5>Fallecido</h5>
        <div class="row">
            <div class="input-field col s12 m4">
                <input onblur="checkRut(this)" placeholder="ej.: 12345678-9" id="d_id" type="text" class="validate" required>
                <label for="d_id">Rut</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m8">
                <input placeholder="" id="d_name" type="text" class="validate" pattern="[\S\s]+[\S]+" required>
                <label for="d_name">Nombre</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input placeholder="" id="d_address" type="text" class="validate" required>
                <label for="d_address">Dirección</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m3">
                <select id="d_region_id" class="validate" required></select>
                <label for="d_region_id">Región</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m3">
                <select id="d_comune_id" class="validate" required></select>
                <label for="d_comune_id">Comuna</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input placeholder="ej.: Casado(a)" id="d_marital_status" type="text" class="validate" required>
                <label for="d_marital_status">Estado Civil</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="ej.: Profesor(a)" id="d_occupation" type="text" class="validate" required>
                <label for="d_occupation">Ocupación</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="ej.: Media Completa" id="d_education" type="text" class="validate" required>
                <label for="d_education">Educación</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input placeholder="ej.: Domicilio" id="d_place" type="text" class="validate" required>
                <label for="d_place">Lugar de Fallecimiento</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="Seleccione una fecha" id="d_date" type="text" class="datepicker validate" required>
                <label for="d_date">Fecha de Fallecimiento</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input placeholder="" id="d_insurance" type="text" class="validate" required>
                <label for="d_insurance">Tipo de Previsión</label>
                <span class="helper-text" data-error="Requerido" data-success="OK"></span>
            </div>
        </div>
        <h5>Velatorio</h5>
        <div class="row">
            <div class="input-field col s12 m3">
                <input placeholder="" id="c_church" type="text">
                <label for="c_church">Capilla</label>
            </div>
            <div class="input-field col s12 m3">
                <input placeholder="" id="c_address" type="text">
                <label for="c_address">Dirección</label>
            </div>
            <div class="input-field col s12 m3">
                <select id="c_region_id"></select>
                <label for="c_region_id">Región</label>
            </div>
            <div class="input-field col s12 m3">
                <select id="c_comune_id"></select>
                <label for="c_comune_id">Comuna</label>
            </div>
        </div>
        <h5>Funeral</h5>
        <div class="row">
            <div class="input-field col s12 m6">
                <input type="text" id="f_cementery_name" class="autocomplete">
                <input type="hidden" id="f_cementery_id">
                <label for="f_cementery_name">Cementerio</label>
            </div>
            <div class="input-field col s12 m3">
                <input placeholder="Seleccione una fecha" id="f_date" type="text" class="datepicker">
                <label for="f_date">Fecha</label>
            </div>
            <div class="input-field col s12 m3">
                <input placeholder="Seleccione una hora (24H)" id="f_time" type="text" class="timepicker">
                <label for="f_time">Hora</label>
            </div>
        </div>
        <h5>Servicio</h5>
        <div class="row">
            <div class="input-field col s12 m6">
                <select id="v_service_id"></select>
                <label for="v_service_id">Tipo</label>
            </div>
            <div class="input-field col s12 m3">
                <select id="v_provider_id"></select>
                <label for="v_provider_id">Proveedor</label>
            </div>
            <div class="input-field col s12 m3">
                <input value="Sin Color" id="v_color" type="text">
                <label for="v_color">Color</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="v_include" class="materialize-textarea"></textarea>
                <label for="v_include">Incluye</label>
            </div>
            <div class="input-field col s12">
                <textarea id="v_observation" class="materialize-textarea"></textarea>
                <label for="v_observation">Observación</label>
            </div>
            <div class="input-field col s12">
                <textarea placeholder="ej.: Se comunica el sentido fallecimiento de José Miguel Carrera [1785 - 1821]" id="v_warning" class="materialize-textarea"></textarea>
                <label for="v_warning">Aviso</label>
                <span class="helper-text">Se publicará en redes sociales</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input id="v_cost" onchange="Form.Calc.payment()" type="number" min="0">
                <label for="v_cost">Valor del Servicio</label>
            </div>
            <div class="input-field col s12 m4">
                <input id="v_discount" onchange="Form.Calc.payment()" type="number" min="0">
                <label for="v_discount">Descuento</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
            <div class="input-field col s12 m4">
                <input value="0" id="v_total" type="number" readonly>
                <label for="v_total">Total</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <select id="v_insurance_id"></select>
                <label for="v_insurance_id">Previsión</label>
            </div>
            <div class="input-field col s12 m4">
                <input id="v_coverage" onchange="Form.Calc.payment()" type="number" min="0">
                <label for="v_coverage">Aporte Previsión</label>
            </div>
            <div class="input-field col s12 m4">
                <input value="0" id="v_payment" type="number" readonly>
                <label for="v_payment">Saldo</label>
            </div>
        </div>
        <h5>Forma de Pago</h5>
        <div class="row">
            <div class="input-field col s12 m4">
                <label>
                    <input id="p_cash" type="checkbox">
                    <span>Efectivo</span>
                </label>
            </div>
            <div class="input-field col s12 m4">
                <label>
                    <input id="p_check" type="checkbox">
                    <span>Cheque al día</span>
                </label>
            </div>
            <div class="input-field col s12 m4">
                <label>
                    <input id="p_check_defered" type="checkbox">
                    <span>Cheque a Fecha</span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <label>
                    <input id="p_transfer" type="checkbox">
                    <span>Transferencia</span>
                </label>
            </div>
            <div class="input-field col s12 m4">
                <label>
                    <input id="p_credit_card" type="checkbox">
                    <span>Tarjeta de Crédito</span>
                </label>
            </div>
            <div class="input-field col s12 m4">
                <label>
                    <input id="p_other" type="checkbox">
                    <span>Otro</span>
                </label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-googleBlue btn-flat">Cancelar</a>
        <a href="#!" onclick="previewThisContract()" class="waves-effect waves-light blue btn-small">Vista Previa</a>
        <a href="#!" onclick="saveThisContract()" class="waves-effect waves-light teal btn-small">Guardar</a>
    </div>
</div>
<script>
    Adaptor.select('#s_region_id','regions');
    Adaptor.select('#d_region_id','regions');
    Adaptor.select('#c_region_id','regions');
    Adaptor.autocomplete('#f_cementery','cementeries');
    Adaptor.addInPlace('#f_cementery','cementeries','cementery_add');
    Adaptor.select('#v_service_id','services');
    Adaptor.select('#v_service_id','services');
    Adaptor.select('#v_insurance_id','insurances');
    Adaptor.select('#v_provider_id','providers');
    Adaptor.comunes('#s_comune_id', 0);
    Adaptor.comunes('#d_comune_id', 0);
    Adaptor.comunes('#c_comune_id', 0);
    Adaptor.Connect.comunes('#s_region_id', '#s_comune_id');
    Adaptor.Connect.comunes('#d_region_id', '#d_comune_id');
    Adaptor.Connect.comunes('#c_region_id', '#c_comune_id');

    function previewThisContract() {
        Form.getValues('#newContract');
        Helper.openLink('/app/preview/contract.php', '_blank');
    }

    function saveThisContract() {
        let data = Form.getValues('#newContract');
        Api.post(Api.endpoints['contract_add'], true, data)
            .then(({ status, response }) => {
                if (status === 'OK') {
                    M.toast({ html: response.message });
                    if (response.status === 'fail') {
                        $.each(response.errors, function( _, id ) {
                            $('#' + id).addClass('invalid');
                        });
                    } else {
                        Helper.openLink('/app/preview/contract.php?contract=' + response.id, '_blank');
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
