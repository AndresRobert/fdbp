<div class="row card-panel">
    <div id="texts_container" class="col s12"></div>
</div>
<script>
    Api.post(Api.endpoints['texts'])
        .then(({ status, response }) => {
            if (status === 'OK') {
                M.toast({ html: response.message });
                if (response.status === 'success') {
                    let textsContainer = $('#texts_container');
                    $.each( response.list, function( _, text ) {
                        textsContainer
                            .append('<div class="row">' +
                                '   <div class="col s6">' +
                                '       <p class="teal-text">' + text.observation + '</p>' +
                                '   </div>' +
                                '   <div class="col s6">' +
                                '       <textarea style="height:20rem" id="text_' + text.id + '" class="materialize-textarea">' + text.text + '</textarea>' +
                                '       <a onclick="updateThisText(' + text.id + ')" class="waves-effect waves-light btn-small">Actualizar</a>' +
                                '   </div>' +
                                '</div>');
                    });
                }
            }
        })
        .catch( e => console.log(e) );

    function updateThisText(id) {
        let newText = $('#text_' + id).val();
        Api.post(Api.endpoints['text_update'], true, { id: id, text: newText })
            .then(({ status, response }) => {
                M.toast({ html: response.message });
                if (status === 'OK') {
                    Helper.openLink();
                }
            })
            .catch( e => console.log(e) );
    }
</script>