<div id="editProvider" class="modal bottom-sheet eighty-percent">
    <input id="pro_edit_id" type="hidden">
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12">
                <input id="pro_edit_name" type="text" class="validate" required>
                <label for="pro_edit_name">Nombre</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="editThisProvider()" class="waves-effect waves-light teal btn-small">Editar</a>
    </div>
</div>
<script>
    function editThisProvider() {
        let data = Form.getValues('#editProvider', 'pro_edit_');
        Api.post(Api.endpoints['provider_add'], true, data)
            .then(({ status, response }) => {
                if (status === 'OK') {
                    M.toast({ html: response.message });
                    if (response.status === 'fail') {
                        $.each(response.errors, function( _, id ) {
                            $('#pro_edit_' + id).addClass('invalid');
                        });
                    } else {
                        $('#editProvider').modal('close');
                        Helper.openLink();
                    }
                }
            })
            .catch( e => console.log(e) );
    }

</script>
