<div id="paymentContract" class="modal">
    <div class="modal-content">
        <h5>Asociar Pago</h5>
        <div class="row">
            <div class="input-field col s12 m6">
                <p>Esta operación indica que el contrato <span id="pay_id"></span> está pagado.</p>
            </div>
            <div class="input-field col s12 m6">
                <input placeholder="Seleccione una fecha" id="pay_f_date" type="text" class="datepicker validate" required>
                <label for="pay_f_date">Fecha</label>
                <span class="helper-text" data-error="Error" data-success="OK"></span>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-googleBlue btn-flat">Cancelar</a>
        <a href="#!" onclick="payThisContract()" class="modal-close waves-effect waves-light green btn-small">Aceptar</a>
    </div>
</div>
<script>

    function payThisContract() {
        let id = $('#pay_id').html();
        let date = $('#pay_f_date').val();
        Api.post(Api.endpoints['contract_payment'], true, { id: id, date: date })
            .then(({ status, response }) => {
                $('#paymentContract').modal('close');
                if (status === 'OK') {
                    M.toast({ html: response.message });
                    if (response.status !== 'fail') {
                        Helper.openLink();
                    }
                }
            })
            .catch( e => console.log(e) );
    }

</script>
