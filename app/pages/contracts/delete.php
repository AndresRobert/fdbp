<div id="deleteContract" class="modal">
    <div class="modal-content">
        <h5>Eliminar</h5>
        <p>¿Está seguro de que desea eliminar este contrato Nro.<span id="del_id"></span>?</p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="deleteThisContract()" class="modal-close waves-effect waves-light red btn-small">Eliminar</a>
    </div>
</div>
<script>

    function deleteThisContract() {
        let id = $('#del_id').html();
        Api.post(Api.endpoints['contract_del'], true, { id: id })
            .then(({ status, response }) => {
                $('#deleteContract').modal('close');
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
