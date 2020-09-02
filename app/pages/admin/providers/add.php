<div id="addProvider" class="modal">
    <input id="pro_add_id" type="hidden">
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12">
                <input id="pro_add_name" type="text" class="validate" required>
                <label for="pro_add_name">Nombre</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="addThisProvider()" class="waves-effect waves-light teal btn-small">Agregar</a>
    </div>
</div>
<script>
    function addThisProvider() {
        let data = Form.getValues('#addProvider', 'pro_add_');
        Api.post(Api.endpoints['provider_add'], true, data)
            .then(({ status, response }) => {
                if (status === 'OK') {
                    M.toast({ html: response.message });
                    if (response.status === 'fail') {
                        $.each(response.errors, function( _, id ) {
                            $('#pro_add_' + id).addClass('invalid');
                        });
                    } else {
                        $('#addProvider').modal('close');
                        Helper.openLink();
                    }
                }
            })
            .catch( e => console.log(e) );
    }

</script>
