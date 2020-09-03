<div id="addService" class="modal">
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12">
                <input id="ser_add_name" type="text" class="validate" required>
                <label for="ser_add_name">Nombre</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="addThisService()" class="waves-effect waves-light teal btn-small">Agregar</a>
    </div>
</div>
<script>
    function addThisService() {
        let data = Form.getValues('#addService', 'ser_add_');
        Api.post(Api.endpoints['service_add'], true, data)
            .then(({ status, response }) => {
                if (status === 'OK') {
                    M.toast({ html: response.message });
                    if (response.status === 'fail') {
                        $.each(response.errors, function( _, id ) {
                            $('#ser_add_' + id).addClass('invalid');
                        });
                    } else {
                        $('#addService').modal('close');
                        Helper.openLink();
                    }
                }
            })
            .catch( e => console.log(e) );
    }

</script>
