<div id="editService" class="modal">
    <input id="ser_edit_id" type="hidden">
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12">
                <input id="ser_edit_name" type="text" class="validate" required>
                <label for="ser_edit_name">Nombre</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="editThisService()" class="waves-effect waves-light teal btn-small">Editar</a>
    </div>
</div>
<script>
    function editThisService() {
        let data = Form.getValues('#editService', 'ser_edit_');
        Api.post(Api.endpoints['service_add'], true, data)
            .then(({ status, response }) => {
                if (status === 'OK') {
                    M.toast({ html: response.message });
                    if (response.status === 'fail') {
                        $.each(response.errors, function( _, id ) {
                            $('#ser_edit_' + id).addClass('invalid');
                        });
                    } else {
                        $('#editService').modal('close');
                        Helper.openLink();
                    }
                }
            })
            .catch( e => console.log(e) );
    }

</script>
