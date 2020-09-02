<div id="deleteCementery" class="modal">
    <input type="hidden" id="cem_del_id">
    <div class="modal-content">
        <h5>Eliminar</h5>
        <p>¿Está seguro de que desea eliminar esta cementerio: <span id="cem_del_name"></span>?</p>
    </div>
    <div class="modal-footer">
        <a href="#!" onclick="deleteThisCementery()" class="modal-close waves-effect waves-light red btn-small">Eliminar</a>
    </div>
</div>
<script>

    function deleteThisCementery() {
        let id = $('#cem_del_id').val();
        Api.post(Api.endpoints['cementery_del'], true, { id: id })
            .then(({ status, response }) => {
                $('#deleteCementery').modal('close');
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
