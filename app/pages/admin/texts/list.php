<div id="texts_container" class="row card-panel">
    Test
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
                            .append('<div class="col s6">' +
                                '   <textarea id="text_' + text.id + '" class="materialize-textarea">' + text.text + '</textarea>' +
                                '</div>' +
                                '<div class="col s6">' +
                                '   <p>' + text.observation + '</p>' +
                                '</div>');
                    });
                }
            }
        })
        .catch( e => console.log(e) );
</script>