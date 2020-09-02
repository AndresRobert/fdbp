<div id="editCementery" class="modal bottom-sheet eighty-percent">
    <input id="cem_edit_id" type="hidden">
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12">
                <input id="cem_edit_name" type="text" class="validate" required>
                <label for="cem_edit_name">Nombre</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="editThisCementery()" class="waves-effect waves-light teal btn-small">Editar</a>
    </div>
</div>
<script>
    function editThisCementery() {
        let data = Form.getValues('#editCementery', 'cem_edit_');
        Api.post(Api.endpoints['cementery_add'], true, data)
            .then(({ status, response }) => {
                if (status === 'OK') {
                    M.toast({ html: response.message });
                    if (response.status === 'fail') {
                        $.each(response.errors, function( _, id ) {
                            $('#cem_edit_' + id).addClass('invalid');
                        });
                    } else {
                        $('#editCementery').modal('close');
                        Helper.openLink();
                    }
                }
            })
            .catch( e => console.log(e) );
    }

</script>
