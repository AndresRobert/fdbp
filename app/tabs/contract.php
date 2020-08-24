<div class="row">
    <div class="col-12 right">
        Fecha: <?php echo date('Y-m-d') ?>
    </div>
</div>
<div class="row card elevated">
    <h5>Solicitado Por</h5>
    <div class="col-4">
        <label for="s_name">Nombre</label>
        <input id="s_name" type="text" placeholder="Nombre del Solicitante" required>
    </div>
    <div class="col-4">
        <label for="s_last_name">Apellidos</label>
        <input id="s_last_name" type="text" placeholder="Apellido del Solicitante" required>
    </div>
    <div class="col-4">
        <label for="s_id">RUT</label>
        <input id="s_id" type="text" placeholder="ej.: 12345678-9" required>
    </div>
    <div class="col-6">
        <label for="s_address">Dirección</label>
        <input id="s_address" type="text" placeholder="Dirección del Solicitante" required>
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
        <input id="s_email" type="email" placeholder="ej.: nombre@gmail.com" required>
    </div>
    <div class="col-3">
        <label for="s_mobile">Celular</label>
        <input id="s_mobile" type="tel" placeholder="ej.: 9 1234 5678" required>
    </div>
    <div class="col-3">
        <label for="s_phone">Teléfono</label>
        <input id="s_phone" placeholder="ej.: 2 1234 5678" type="tel">
    </div>
</div>
<div class="row card elevated">
    <h5>Fallecido</h5>
    <div class="col-8">
        <label for="d_name">Nombre Completo (Q.E.P.D.)</label>
        <input id="d_name" type="text" placeholder="Nombre Completo del Fallecido" required>
    </div>
    <div class="col-4">
        <label for="d_id">RUT</label>
        <input id="d_id" type="text" placeholder="ej.: 12345678-9" required>
    </div>
    <div class="col-6">
        <label for="d_address">Dirección</label>
        <input id="d_address" placeholder="Dirección del Fallecido" type="text">
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
        <input id="d_place" placeholder="" type="text">
    </div>
    <div class="col-4">
        <label for="d_marital_status">Estado Civil</label>
        <input id="d_marital_status" placeholder="" type="text">
    </div>
    <div class="col-4">
        <label for="d_occupation">Ocupación</label>
        <input id="d_occupation" placeholder="" type="text">
    </div>
    <div class="col-4">
        <label for="d_education">Estudios</label>
        <input id="d_education" placeholder="" type="text">
    </div>
</div>
<div class="row card elevated">
    <h5>Velatorio</h5>
    <div class="col-12">
        <label for="c_church">Capilla</label>
        <input id="c_church" placeholder="Nombre del lugar" type="text">
    </div>
    <div class="col-6">
        <label for="c_address">Dirección Capilla</label>
        <input id="c_address" placeholder="Dirección del lugar" type="text">
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
<div class="row card elevated">
    <h5>Funeral</h5>
    <div class="col-6">
        <label for="f_cementery_id">Cementerio</label>
        <select id="f_cementery_id">
            <option value="1">Cementerio 1</option>
            <option value="2">Cementerio 2</option>
            <option value="3">Cementerio 3</option>
        </select>
    </div>
    <div class="col-3">
        <label for="f_date">Fecha</label>
        <input id="f_date" type="date" required>
    </div>
    <div class="col-3">
        <label for="f_time">Hora</label>
        <input id="f_time" type="time" required>
    </div>
</div>
<div class="row card elevated">
    <h5>Servicio</h5>
    <div class="col-4">
        <label for="v_service_id">Tipo</label>
        <select id="v_service_id">
            <option value="1">Nombre 1</option>
            <option value="1">Nombre 2</option>
            <option value="1">Nombre 3</option>
        </select>
    </div>
    <div class="col-4">
        <label for="v_provider">Proveedor</label>
        <input id="v_provider" type="text" readonly>
    </div>
    <div class="col-4">
        <label for="v_color">Color</label>
        <input id="v_color" type="text" readonly>
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
        <input id="v_cost" type="number" min="0" value="0">
    </div>
    <div class="col-4">
        <label for="v_discount">Descuento</label>
        <input id="v_discount" type="number" min="0" value="0">
    </div>
    <div class="col-4">
        <label for="v_total">Valor Total</label>
        <input id="v_total" type="number" value="0" class="total" readonly>
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
        <input id="v_coverage" type="number" min="0" value="0">
    </div>
    <div class="col-4">
        <label for="v_payment">Saldo</label>
        <input id="v_payment" type="number" value="0" class="total" readonly>
    </div>
    <h6>Forma de Pago</h6>
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
<div class="row">
    <div class="col-12 right">
        <button class="text" onclick="clearAllFields('#contract')">Limpiar</button>
        <button onclick="showContractPreview()">Vista Previa</button>
        <button class="fill" onclick="saveContract()">Guardar</button>
    </div>
</div>

<script>

    setRegions();
    setComunes();

    function getContractData() {
        return {
            s_name: $('#s_name').val(),
            s_last_name: $('#s_last_name').val(),
            s_id: $('#s_id').val(),
            s_address: $('#s_address').val(),
            s_region_id: $('#s_region_id').val(),
            s_region_name: _pairs['api_regions'][$('#s_region_id').val()],
            s_comune_id: $('#s_comune_id').val(),
            s_comune_name: _pairs['api_comunes_list'][$('#s_comune_id').val()],
            s_email: $('#s_email').val(),
            s_mobile: $('#s_mobile').val(),
            s_phone: $('#s_phone').val(),
            d_name: $('#d_name').val(),
            d_id: $('#d_id').val(),
            d_address: $('#d_address').val(),
            d_region_id: $('#d_region_id').val(),
            d_region_name: _pairs['api_regions'][$('#d_region_id').val()],
            d_comune_id: $('#d_comune_id').val(),
            d_comune_name: _pairs['api_comunes_list'][$('#d_comune_id').val()],
            d_place: $('#d_place').val(),
            d_marital_status: $('#d_marital_status').val(),
            d_occupation: $('#d_occupation').val(),
            d_education: $('#d_education').val(),
            c_church: $('#c_church').val(),
            c_address: $('#c_address').val(),
            c_region_id: $('#c_region_id').val(),
            c_region_name: _pairs['api_regions'][$('#c_region_id').val()],
            c_comune_id: $('#c_comune_id').val(),
            c_comune_name: _pairs['api_comunes_list'][$('#c_comune_id').val()],
            f_cementery_id: $('#f_cementery_id').val(),
            f_cementery_name: _pairs['api_cementeries'][$('#f_cementery_id').val()],
            f_date: $('#f_date').val(),
            f_time: $('#f_time').val(),
            v_service_id: $('#v_service_id').val(),
            v_service_name: _pairs['api_services'][$('#v_service_id').val()],
            v_provider: $('#v_provider').val(),
            v_color: $('#v_color').val(),
            v_include: $('#v_include').val(),
            v_warning: $('#v_warning').val(),
            v_observation: $('#v_observation').val(),
            v_cost: $('#v_cost').val(),
            v_discount: $('#v_discount').val(),
            v_total: $('#v_total').val(),
            v_insurance_id: $('#v_insurance_id').val(),
            v_insurance_name: _pairs['api_insurances'][$('#v_insurance_id').val()],
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
        _$.cookie.set('fdbp_contract_data', JSON.stringify(_contract));
        openLink('/app/preview/contract.php', '_blank');
    }

    function saveContract() {
        let _contract = getContractData();
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
                            openLink('/app/preview/contract.php?contract=' + response.id, '_blank');
                        }
                    }
                }
            ).catch(e => console.log(e));
        }
    }

    loadSelect('#s_region_id', 'api_regions');
    loadSelect('#d_region_id', 'api_regions');
    loadSelect('#c_region_id', 'api_regions');
    loadSelect('#v_insurance_id', 'api_insurances');
    loadSelect('#f_cementery_id', 'api_cementeries');
    loadSelect('#v_service_id', 'api_services');

    loadComunes('#s_comune_id', '1');
    loadComunes('#d_comune_id', '1');
    loadComunes('#c_comune_id', '1');

    $('#s_region_id').on('change', function() { loadComunes('#s_comune_id', this.value) });
    $('#d_region_id').on('change', function() { loadComunes('#d_comune_id', this.value) });
    $('#c_region_id').on('change', function() { loadComunes('#c_comune_id', this.value) });

    $('#v_cost, #v_discount, #v_coverage').on('change', () => { calcTotal() });

</script>