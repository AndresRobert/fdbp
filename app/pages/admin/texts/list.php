<div class="row card-panel">
    Test
</div>
<script>
    Api.post(Api.endpoints['texts'], true)
        .then(({ status, response }) => {
            if (status === 'OK') {
                M.toast({ html: response.message });
                if (response.status === 'success') {
                    $.each( response.list, function( _, text ) {
                        console.log(text);
                    });
                }
            }
        })
        .catch( e => console.log(e) );
</script>