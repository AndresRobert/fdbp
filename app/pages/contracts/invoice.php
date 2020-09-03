<div id="invoiceContract" class="modal">
    <div class="modal-content">
        <h5>Asociar Factura</h5>
        <div class="row">
            <div class="input-field col s4">
                <input id="aso_id" type="number" placeholder="0" readonly>
                <label for="aso_id">Contrato</label>
            </div>
            <div class="col s4 center" style="line-height:5rem">
                <i class="material-icons">arrow_forward</i>
            </div>
            <div class="input-field col s4">
                <input id="aso_invoice" type="text" class="validate" min="1" required>
                <label for="aso_invoice">Factura</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-light btn-small">Cancelar</a>
        <a href="#!" onclick="invoiceThisContract()" class="modal-close waves-effect waves-light green btn-small">Asociar</a>
    </div>
</div>
<script>

    function invoiceThisContract() {
        let id = $('#aso_id').val(),
            invoice = $('#aso_invoice').val();
        Api.post(Api.endpoints['contract_invoice'], true, { id: id, invoice: invoice })
            .then(({ status, response }) => {
                $('#invoiceContract').modal('close');
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
