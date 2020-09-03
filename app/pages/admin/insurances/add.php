<div id="addInsurance" class="modal">
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12">
                <input id="ins_add_name" type="text" class="validate" required>
                <label for="ins_add_name">Nombre</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="addThisInsurance()" class="waves-effect waves-light teal btn-small">Agregar</a>
    </div>
</div>
<script>
    function addThisInsurance() {
        let data = Form.getValues('#addInsurance', 'ins_add_');
        Api.post(Api.endpoints['insurance_add'], true, data)
            .then(({ status, response }) => {
                if (status === 'OK') {
                    M.toast({ html: response.message });
                    if (response.status === 'fail') {
                        $.each(response.errors, function( _, id ) {
                            $('#ins_add_' + id).addClass('invalid');
                        });
                    } else {
                        $('#addInsurance').modal('close');
                        Helper.openLink();
                    }
                }
            })
            .catch( e => console.log(e) );
    }

</script>
