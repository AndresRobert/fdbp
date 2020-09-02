<div id="deleteProvider" class="modal">
    <input type="hidden" id="pro_del_id">
    <div class="modal-content">
        <h5>Eliminar</h5>
        <p>¿Está seguro de que desea eliminar este proveedor: <span id="pro_del_name"></span>?</p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="deleteThisProvider()" class="modal-close waves-effect waves-light red btn-small">Eliminar</a>
    </div>
</div>
<script>

    function deleteThisProvider() {
        let id = $('#pro_del_id').val();
        Api.post(Api.endpoints['provider_del'], true, { id: id })
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
