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
            <label for="solicName">Nombre</label>
            <input id="solicName" type="text" required>
        </div>
        <div class="col-4">
            <label for="solicLastName">Apellidos</label>
            <input id="solicLastName" type="text" required>
        </div>
        <div class="col-4">
            <label for="solicId">RUT</label>
            <input id="solicId" type="text" required>
        </div>
        <div class="col-6">
            <label for="solicAddress">Dirección</label>
            <input id="solicAddress" type="text" required>
        </div>
        <div class="col-3">
            <label for="solicState">Región</label>
            <select id="solicState">
                <option value="1">Region 1</option>
                <option value="2">Region 2</option>
                <option value="3">Region 3</option>
            </select>
        </div>
        <div class="col-3">
            <label for="solicDistrict">Comuna</label>
            <select id="solicDistrict">
                <option value="1">Comuna 1</option>
                <option value="2">Comuna 2</option>
                <option value="3">Comuna 3</option>
            </select>
        </div>
        <div class="col-6">
            <label for="solicEmail">Email</label>
            <input id="solicEmail" type="email" required>
        </div>
        <div class="col-3">
            <label for="solicMobile">Celular</label>
            <input id="solicMobile" type="tel" required>
        </div>
        <div class="col-3">
            <label for="solicPhone">Teléfono</label>
            <input id="solicPhone" type="tel">
        </div>
    </div>
    <hr>
    <h5>Fallecido</h5>
    <div class="row">
        <div class="col-8">
            <label for="deceFullName">Nombre Completo (Q.E.P.D.)</label>
            <input id="deceFullName" type="text" required>
        </div>
        <div class="col-4">
            <label for="deceId">RUT</label>
            <input id="deceId" type="text" required>
        </div>
        <div class="col-6">
            <label for="deceAddress">Dirección</label>
            <input id="deceAddress" type="text">
        </div>
        <div class="col-3">
            <label for="deceState">Región</label>
            <select id="deceState">
                <option value="1">Region 1</option>
                <option value="2">Region 2</option>
                <option value="3">Region 3</option>
            </select>
        </div>
        <div class="col-3">
            <label for="deceDistrict">Comuna</label>
            <select id="deceDistrict">
                <option value="1">Comuna 1</option>
                <option value="2">Comuna 2</option>
                <option value="3">Comuna 3</option>
            </select>
        </div>
        <div class="col-12">
            <label for="decePlace">Lugar de Fallecimiento</label>
            <input id="decePlace" type="text">
        </div>
        <div class="col-4">
            <label for="deceMaritalStatus">Estado Civil</label>
            <select id="deceMaritalStatus">
                <option value="1">Estado 1</option>
                <option value="2">Estado 2</option>
                <option value="3">Estado 3</option>
            </select>
        </div>
        <div class="col-4">
            <label for="deceOccupation">Ocupación</label>
            <select id="deceOccupation">
                <option value="1">Ocupacion 1</option>
                <option value="2">Ocupacion 2</option>
                <option value="3">Ocupacion 3</option>
            </select>
        </div>
        <div class="col-4">
            <label for="deceGrade">Estudios</label>
            <select id="deceGrade">
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
            <label for="churchName">Capilla</label>
            <input id="churchName" type="text">
        </div>
        <div class="col-6">
            <label for="churchAddress">Dirección Capilla</label>
            <input id="churchAddress" type="text">
        </div>
        <div class="col-3">
            <label for="churchState">Región</label>
            <select id="churchState">
                <option value="1">Region 1</option>
                <option value="2">Region 2</option>
                <option value="3">Region 3</option>
            </select>
        </div>
        <div class="col-3">
            <label for="churchDistrict">Comuna</label>
            <select id="churchDistrict">
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
            <label for="funeralPlace">Cementerio</label>
            <select id="funeralPlace">
                <option value="1">Cementerio 1</option>
                <option value="2">Cementerio 2</option>
                <option value="3">Cementerio 3</option>
            </select>
        </div>
        <div class="col-2">
            <label for="funeralPress">Prensa</label>
            <input id="funeralPress" type="text">
        </div>
        <div class="col-2">
            <label for="funeralDate">Fecha</label>
            <input id="funeralDate" type="date" required>
        </div>
        <div class="col-2">
            <label for="funeralTime">Hora</label>
            <input id="funeralTime" type="time" required>
        </div>
    </div>
    <hr>
    <h5>Servicio</h5>
    <div class="row">
        <div class="col-4">
            <label for="serviceType">Tipo</label>
            <input id="serviceType" type="text" required>
        </div>
        <div class="col-4">
            <label for="serviceProvider">Proveedor</label>
            <select id="serviceProvider">
                <option value="1">Proveedor 1</option>
                <option value="2">Proveedor 2</option>
                <option value="3">Proveedor 3</option>
            </select>
        </div>
        <div class="col-4">
            <label for="serviceColor">Color</label>
            <input id="serviceColor" type="text">
        </div>
        <div class="col-12">
            <label for="serviceInclude">Incluye</label>
            <textarea id="serviceInclude" required></textarea>
        </div>
        <div class="col-12">
            <label for="serviceWarning">Aviso</label>
            <textarea id="serviceWarning"></textarea>
        </div>
        <div class="col-12">
            <label for="serviceObservation">Observación</label>
            <textarea id="serviceObservation"></textarea>
        </div>
        <div class="col-4">
            <label for="serviceCost">Valor del Servicio</label>
            <input id="serviceCost" type="number">
        </div>
        <div class="col-4">
            <label for="serviceDiscount">Descuento</label>
            <input id="serviceDiscount" type="number">
        </div>
        <div class="col-4">
            <label for="serviceTotal">Valor Total</label>
            <input id="serviceTotal" type="number" readonly>
        </div>
        <div class="col-4">
            <label for="serviceDiscount2Name">Nombre Previsión</label>
            <select id="serviceDiscount2Name">
                <option value="1">Nombre 1</option>
                <option value="1">Nombre 2</option>
                <option value="1">Nombre 3</option>
            </select>
        </div>
        <div class="col-4">
            <label for="serviceDiscount2">Aporte Previsión</label>
            <input id="serviceDiscount2" type="number">
        </div>
        <div class="col-4">
            <label for="total2">Saldo</label>
            <input id="total2" type="number" readonly>
        </div>
        <div class="col-4">
            <label for="payment1" class="checkbox">Transferencia</label>
            <input id="payment1" type="checkbox">
        </div>
        <div class="col-4">
            <label for="payment2" class="checkbox">Efectivo</label>
            <input id="payment2" type="checkbox">
        </div>
        <div class="col-4">
            <label for="payment3" class="checkbox">Cheque al día</label>
            <input id="payment3" type="checkbox">
        </div>
        <div class="col-4">
            <label for="payment4" class="checkbox">Cheque a Fecha</label>
            <input id="payment4" type="checkbox">
        </div>
        <div class="col-4">
            <label for="payment5" class="checkbox">Tarjeta de Crédito</label>
            <input id="payment5" type="checkbox">
        </div>
        <div class="col-4">
            <label for="payment6" class="checkbox">Otro</label>
            <input id="payment6" type="checkbox">
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
    function showContractPreview () {
        let _contract = {
            solicName: $('#solicName').val(),
            solicLastName: $('#solicLastName').val(),
            solicId: $('#solicId').val(),
            solicAddress: $('#solicAddress').val(),
            solicState: $('#solicState').val(),
            solicDistrict: $('#solicDistrict').val(),
            solicEmail: $('#solicEmail').val(),
            solicMobile: $('#solicMobile').val(),
            solicPhone: $('#solicPhone').val(),
            deceFullName: $('#deceFullName').val(),
            deceId: $('#deceId').val(),
            deceAddress: $('#deceAddress').val(),
            deceState: $('#deceState').val(),
            deceDistrict: $('#deceDistrict').val(),
            decePlace: $('#decePlace').val(),
            deceMaritalStatus: $('#deceMaritalStatus').val(),
            deceOccupation: $('#deceOccupation').val(),
            deceGrade: $('#deceGrade').val(),
            churchName: $('#churchName').val(),
            churchAddress: $('#churchAddress').val(),
            churchState: $('#churchState').val(),
            churchDistrict: $('#churchDistrict').val(),
            funeralPlace: $('#funeralPlace').val(),
            funeralPress: $('#funeralPress').val(),
            funeralDate: $('#funeralDate').val(),
            funeralTime: $('#funeralTime').val(),
            serviceType: $('#serviceType').val(),
            serviceProvider: $('#serviceProvider').val(),
            serviceColor: $('#serviceColor').val(),
            serviceInclude: $('#serviceInclude').val(),
            serviceWarning: $('#serviceWarning').val(),
            serviceObservation: $('#serviceObservation').val(),
            serviceCost: $('#serviceCost').val(),
            serviceDiscount: $('#serviceDiscount').val(),
            serviceTotal: $('#serviceTotal').val(),
            serviceDiscount2Name: $('#serviceDiscount2Name').val(),
            serviceDiscount2: $('#serviceDiscount2').val(),
            total2: $('#total2').val(),
            payment1: $('#payment1').is(':checked'),
            payment2: $('#payment2').is(':checked'),
            payment3: $('#payment3').is(':checked'),
            payment4: $('#payment4').is(':checked'),
            payment5: $('#payment5').is(':checked'),
            payment6: $('#payment6').is(':checked')
        };
        console.log(_contract);
        _$.ajax('/api/contract/save', _contract, getBearerHeaders()).then(
            ({ status, response }) => {
                console.log(status, response);
                _$.cookie.set('fdbp_contract_data', JSON.stringify(_contract));
                // open contract preview
                goToLink('/admin/contract.php', '_blank');
            }
        );
    }

    function saveContract () {
        // get all data
        // api save contract
        // open contract
        goToLink('/admin/contract.php', '_blank')
    }
</script>