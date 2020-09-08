<div class="row card-panel">
    <div id="texts_container" class="col s12"></div>
</div>
<script>
    Api.post(Api.endpoints['texts'], true)
        .then(({ status, response }) => {
            if (status === 'OK') {
                M.toast({ html: response.message });
                if (response.status === 'success') {
                    let textsContainer = $('#texts_container');
                    $.each( response.list, function( _, text ) {
                        textsContainer
                            .append('<div class="row"><div class="col s6">' +
                                '   <textarea id="text_' + text.id + '" class="materialize-textarea">' + text.text + '</textarea>' +
                                '</div>' +
                                '<div class="col s6">' +
                                '   <p>' + text.observation + '</p>' +
                                '</div></div>');
                    });
                }
            }
        })
        .catch( e => console.log(e) );
</script>