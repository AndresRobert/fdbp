<div id="addCementery" class="modal">
    <input id="cem_add_id" type="hidden">
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12">
                <input id="cem_add_name" type="text" class="validate" required>
                <label for="cem_add_name">Nombre</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="addThisCementery()" class="waves-effect waves-light teal btn-small">Agregar</a>
    </div>
</div>
<script>
    function addThisCementery() {
        let data = Form.getValues('#addCementery', 'cem_add_');
        Api.post(Api.endpoints['cementery_add'], true, data)
            .then(({ status, response }) => {
                if (status === 'OK') {
                    M.toast({ html: response.message });
                    if (response.status === 'fail') {
                        $.each(response.errors, function( _, id ) {
                            $('#cem_add_' + id).addClass('invalid');
                        });
                    } else {
                        $('#addCementery').modal('close');
                        Helper.openLink();
                    }
                }
            })
            .catch( e => console.log(e) );
    }

</script>
