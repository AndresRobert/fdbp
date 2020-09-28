<div id="undeleteContract" class="modal">
    <div class="modal-content">
        <h5>Reactivar</h5>
        <p>¿Está seguro de que desea reactivar este contrato Nro.<span id="undel_id"></span>?</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-googleBlue btn-flat">Cancelar</a>
        <a href="#!" onclick="recoverThisContract()" class="modal-close waves-effect waves-light red btn-small">Reactivar</a>
    </div>
</div>
<script>

    function recoverThisContract() {
        let id = $('#undel_id').html();
        Api.post(Api.endpoints['contract_undel'], true, { id: id })
            .then(({ status, response }) => {
                $('#undeleteContract').modal('close');
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
