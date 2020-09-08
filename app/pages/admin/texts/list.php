<div class="row card-panel">
    Test
</div>
<script>
    function getTexts() {
        Api.post(Api.endpoints['texts'], true)
            .then(({ status, response }) => {
                if (status === 'OK') {
                    M.toast({ html: response.message });
                    console.log(response);
                }
            })
            .catch( e => console.log(e) );
    }
</script>