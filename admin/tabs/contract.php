<div id="contract" class="tab-content col-12 card">
    <div class="row">
        <div class="col-12 right">
            Contrato / Presupuesto Interno Nº: <b>Nuevo</b>
        </div>
        <div class="col-12 right">
            Fecha: <?php echo date('Y-m-d') ?>
        </div>
    </div>
    <hr>
    <h5>Solicitado Por</h5>
    <div class="row">
        <div class="col-4">
            <label for="s_name">Nombre</label>
            <input id="s_name" type="text" required>
        </div>
        <div class="col-4">
            <label for="s_last_name">Apellidos</label>
            <input id="s_last_name" type="text" required>
        </div>
        <div class="col-4">
            <label for="s_id">RUT</label>
            <input id="s_id" type="text" required>
        </div>
        <div class="col-6">
            <label for="s_address">Dirección</label>
            <input id="s_address" type="text" required>
        </div>
        <div class="col-3">
            <label for="s_region_id">Región</label>
            <select id="s_region_id">
                <option value="1">Region 1</option>
                <option value="2">Region 2</option>
                <option value="3">Region 3</option>
            </select>
        </div>
        <div class="col-3">
            <label for="s_comune_id">Comuna</label>
            <select id="s_comune_id">
                <option value="1">Comuna 1</option>
                <option value="2">Comuna 2</option>
                <option value="3">Comuna 3</option>
            </select>
        </div>
        <div class="col-6">
            <label for="s_email">Email</label>
            <input id="s_email" type="email" required>
        </div>
        <div class="col-3">
            <label for="s_mobile">Celular</label>
            <input id="s_mobile" type="tel" required>
        </div>
        <div class="col-3">
            <label for="s_phone">Teléfono</label>
            <input id="s_phone" type="tel">
        </div>
    </div>
    <hr>
    <h5>Fallecido</h5>
    <div class="row">
        <div class="col-8">
            <label for="d_name">Nombre Completo (Q.E.P.D.)</label>
            <input id="d_name" type="text" required>
        </div>
        <div class="col-4">
            <label for="d_id">RUT</label>
            <input id="d_id" type="text" required>
        </div>
        <div class="col-6">
            <label for="d_address">Dirección</label>
            <input id="d_address" type="text">
        </div>
        <div class="col-3">
            <label for="d_region_id">Región</label>
            <select id="d_region_id">
                <option value="1">Region 1</option>
                <option value="2">Region 2</option>
                <option value="3">Region 3</option>
            </select>
        </div>
        <div class="col-3">
            <label for="d_comune_id">Comuna</label>
            <select id="d_comune_id">
                <option value="1">Comuna 1</option>
                <option value="2">Comuna 2</option>
                <option value="3">Comuna 3</option>
            </select>
        </div>
        <div class="col-12">
            <label for="d_place">Lugar de Fallecimiento</label>
            <input id="d_place" type="text">
        </div>
        <div class="col-4">
            <label for="d_marital_status_id">Estado Civil</label>
            <select id="d_marital_status_id">
                <option value="1">Estado 1</option>
                <option value="2">Estado 2</option>
                <option value="3">Estado 3</option>
            </select>
        </div>
        <div class="col-4">
            <label for="d_occupation_id">Ocupación</label>
            <select id="d_occupation_id">
                <option value="1">Ocupacion 1</option>
                <option value="2">Ocupacion 2</option>
                <option value="3">Ocupacion 3</option>
            </select>
        </div>
        <div class="col-4">
            <label for="d_education_id">Estudios</label>
            <select id="d_education_id">
                <option value="1">Estudio 1</option>
                <option value="2">Estudio 2</option>
                <option value="3">Estudio 3</option>
            </select>
        </div>
    </div>
    <hr>
    <h5>Velatorio</h5>
    <div class="row">
        <div class="col-12">
            <label for="c_church">Capilla</label>
            <input id="c_church" type="text">
        </div>
        <div class="col-6">
            <label for="c_address">Dirección Capilla</label>
            <input id="c_address" type="text">
        </div>
        <div class="col-3">
            <label for="c_region_id">Región</label>
            <select id="c_region_id">
                <option value="1">Region 1</option>
                <option value="2">Region 2</option>
                <option value="3">Region 3</option>
            </select>
        </div>
        <div class="col-3">
            <label for="c_comune_id">Comuna</label>
            <select id="c_comune_id">
                <option value="1">Comuna 1</option>
                <option value="2">Comuna 2</option>
                <option value="3">Comuna 3</option>
            </select>
        </div>
    </div>
    <hr>
    <h5>Funeral</h5>
    <div class="row">
        <div class="col-6">
            <label for="f_cementery_id">Cementerio</label>
            <select id="f_cementery_id">
                <option value="1">Cementerio 1</option>
                <option value="2">Cementerio 2</option>
                <option value="3">Cementerio 3</option>
            </select>
        </div>
        <div class="col-2">
            <label for="f_press">Prensa</label>
            <input id="f_press" type="text">
        </div>
        <div class="col-2">
            <label for="f_date">Fecha</label>
            <input id="f_date" type="date" required>
        </div>
        <div class="col-2">
            <label for="f_time">Hora</label>
            <input id="f_time" type="time" required>
        </div>
    </div>
    <hr>
    <h5>Servicio</h5>
    <div class="row">
        <div class="col-4">
            <label for="v_type">Tipo</label>
            <input id="v_type" type="text" required>
        </div>
        <div class="col-4">
            <label for="v_provider_id">Proveedor</label>
            <select id="v_provider_id">
                <option value="1">Proveedor 1</option>
                <option value="2">Proveedor 2</option>
                <option value="3">Proveedor 3</option>
            </select>
        </div>
        <div class="col-4">
            <label for="v_color">Color</label>
            <input id="v_color" type="text">
        </div>
        <div class="col-12">
            <label for="v_include">Incluye</label>
            <textarea id="v_include" required></textarea>
        </div>
        <div class="col-12">
            <label for="v_warning">Aviso</label>
            <textarea id="v_warning"></textarea>
        </div>
        <div class="col-12">
            <label for="v_observation">Observación</label>
            <textarea id="v_observation"></textarea>
        </div>
        <div class="col-4">
            <label for="v_cost">Valor del Servicio</label>
            <input id="v_cost" type="number">
        </div>
        <div class="col-4">
            <label for="v_discount">Descuento</label>
            <input id="v_discount" type="number">
        </div>
        <div class="col-4">
            <label for="v_total">Valor Total</label>
            <input id="v_total" type="number" readonly>
        </div>
        <div class="col-4">
            <label for="v_insurance_id">Nombre Previsión</label>
            <select id="v_insurance_id">
                <option value="1">Nombre 1</option>
                <option value="1">Nombre 2</option>
                <option value="1">Nombre 3</option>
            </select>
        </div>
        <div class="col-4">
            <label for="v_coverage">Aporte Previsión</label>
            <input id="v_coverage" type="number">
        </div>
        <div class="col-4">
            <label for="v_payment">Saldo</label>
            <input id="v_payment" type="number" readonly>
        </div>
        <div class="col-4">
            <label for="p_transfer" class="checkbox">Transferencia</label>
            <input id="p_transfer" type="checkbox">
        </div>
        <div class="col-4">
            <label for="p_cash" class="checkbox">Efectivo</label>
            <input id="p_cash" type="checkbox">
        </div>
        <div class="col-4">
            <label for="p_check" class="checkbox">Cheque al día</label>
            <input id="p_check" type="checkbox">
        </div>
        <div class="col-4">
            <label for="p_check_defered" class="checkbox">Cheque a Fecha</label>
            <input id="p_check_defered" type="checkbox">
        </div>
        <div class="col-4">
            <label for="p_credit_card" class="checkbox">Tarjeta de Crédito</label>
            <input id="p_credit_card" type="checkbox">
        </div>
        <div class="col-4">
            <label for="p_other" class="checkbox">Otro</label>
            <input id="p_other" type="checkbox">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 right">
            <button class="text" onclick="clearAllFields('#contract')">Limpiar</button>
            <button onclick="showContractPreview()">Vista Previa</button>
            <button class="fill" onclick="saveContract()">Guardar</button>
        </div>
    </div>
</div>
<script>

    function getContractData () {
        return {
            s_name: $('#s_name').val(),
            s_last_name: $('#s_last_name').val(),
            s_id: $('#s_id').val(),
            s_address: $('#s_address').val(),
            s_region_id: $('#s_region_id').val(),
            s_comune_id: $('#s_comune_id').val(),
            s_email: $('#s_email').val(),
            s_mobile: $('#s_mobile').val(),
            s_phone: $('#s_phone').val(),
            d_name: $('#d_name').val(),
            d_id: $('#d_id').val(),
            d_address: $('#d_address').val(),
            d_region_id: $('#d_region_id').val(),
            d_comune_id: $('#d_comune_id').val(),
            d_place: $('#d_place').val(),
            d_marital_status_id: $('#d_marital_status_id').val(),
            d_occupation_id: $('#d_occupation_id').val(),
            d_education_id: $('#d_education_id').val(),
            c_church: $('#c_church').val(),
            c_address: $('#c_address').val(),
            c_region_id: $('#c_region_id').val(),
            c_comune_id: $('#c_comune_id').val(),
            f_cementery_id: $('#f_cementery_id').val(),
            f_press: $('#f_press').val(),
            f_date: $('#f_date').val(),
            f_time: $('#f_time').val(),
            v_type: $('#v_type').val(),
            v_provider_id: $('#v_provider_id').val(),
            v_color: $('#v_color').val(),
            v_include: $('#v_include').val(),
            v_warning: $('#v_warning').val(),
            v_observation: $('#v_observation').val(),
            v_cost: $('#v_cost').val(),
            v_discount: $('#v_discount').val(),
            v_total: $('#v_total').val(),
            v_insurance_id: $('#v_insurance_id').val(),
            v_coverage: $('#v_coverage').val(),
            v_payment: $('#v_payment').val(),
            p_transfer: $('#p_transfer').is(':checked'),
            p_cash: $('#p_cash').is(':checked'),
            p_check: $('#p_check').is(':checked'),
            p_check_defered: $('#p_check_defered').is(':checked'),
            p_credit_card: $('#p_credit_card').is(':checked'),
            p_other: $('#p_other').is(':checked')
        };
    }

    function clearAllFields(_id) {
        let _container = $(_id);
        _container.find('input, textarea, select').each( function () { this.val('') });
    }

    function validateContract(_contract) {
        if (_contract.s_name === '' || _contract.s_last_name === '' || _contract.s_id === '') {
            _$.snackbar('Debe ingresar el nombre, apellido y RUT del solicitante');
            _$('#s_name').addClass('error');
            _$('#s_last_name').addClass('error');
            _$('#s_id').addClass('error');
            return false;
        }
        if (_contract.s_email === '' || _contract.s_mobile === '') {
            _$.snackbar('Debe ingresar un email y un número de telefono móvil para el solicitante');
            _$('#s_email').addClass('error');
            _$('#s_mobile').addClass('error');
            return false;
        }
        if (_contract.d_name === '' || _contract.d_id === '') {
            _$.snackbar('Debe ingresar un nombre y un rut para identificar al fallecido');
            _$('#d_name').addClass('error');
            _$('#d_id').addClass('error');
            return false;
        }
        if (_contract.f_date === '' || _contract.f_time === '') {
            _$.snackbar('Debe ingresar una fecha y una hora del funeral');
            _$('#f_date').addClass('error');
            _$('#f_time').addClass('error');
            return false;
        }
        if (_contract.v_type === '' || _contract.v_include === '') {
            _$.snackbar('Debe ingresar un tipo y lo que incluye el servicio');
            _$('#v_type').addClass('error');
            _$('#v_include').addClass('error');
            return false;
        }
        if (_contract.v_cost === '' || _contract.v_cost === 0) {
            _$.snackbar('Debe ingresar el valor del servicio');
            _$('#v_cost').addClass('error');
            return false;
        }
        if (_contract.p_transfer === false && _contract.p_cash === false &&
            _contract.p_check === false && _contract.p_check_defered === false &&
            _contract.p_credit_card === false && _contract.p_other === false) {
            _$.snackbar('Debe ingresar al menos un medio de pago para el servicio');
            return false;
        }
        return true;
    }

    function showContractPreview () {
        let _contract = getContractData();
        console.log(_contract);
        _$.cookie.set('fdbp_contract_data', JSON.stringify(_contract));
        openLink('/admin/preview/contract.php', '_blank');
    }

    function saveContract () {
        let _contract = getContract();
        if (validateContract(_contract)) {
            _$.ajax('/api/contracts/save', _contract, { headers: getBearerHeaders()}).then(
                ({ status, response }) => {
                    if (status === 'error') {
                        _$.snackbar('Error de servidor: contacte al administrador en support@acode.cl', 'Cerrar');
                    }
                    if (status === 'fail') {
                        _$.snackbar('Session expirada');
                        openLink('/');
                    } else {
                        _$.snackbar(response.message, 'Cerrar');
                        if (response.status !== 'fail' && response.id !== -1) {
                            _$.cookie.set('fdbp_contract_data', JSON.stringify(_contract));
                            clearAllFields('#contract');
                            openLink('/admin/preview/contract.php?contract=' + response.id, '_blank');
                        }
                    }
                }
            ).catch(e => console.log(e));
        }
    }

    loadSelect('#s_region_id', 'fdbp_regions');
    loadSelect('#d_region_id', 'fdbp_regions');
    loadSelect('#c_region_id', 'fdbp_regions');

</script>