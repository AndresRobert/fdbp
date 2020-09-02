<div id="editInsurance" class="modal bottom-sheet eighty-percent">
    <input id="ins_edit_id" type="hidden">
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12">
                <input id="ins_edit_name" type="text" class="validate" required>
                <label for="ins_edit_name">Nombre</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="editThisInsurance()" class="waves-effect waves-light teal btn-small">Editar</a>
    </div>
</div>
<script>
    function editThisInsurance() {
        let data = Form.getValues('#editInsurance', 'ins_edit_');
        Api.post(Api.endpoints['insurance_add'], true, data)
            .then(({ status, response }) => {
                if (status === 'OK') {
                    M.toast({ html: response.message });
                    if (response.status === 'fail') {
                        $.each(response.errors, function( _, id ) {
                            $('#ins_edit_' + id).addClass('invalid');
                        });
                    } else {
                        $('#editInsurance').modal('close');
                        Helper.openLink();
                    }
                }
            })
            .catch( e => console.log(e) );
    }

</script>
