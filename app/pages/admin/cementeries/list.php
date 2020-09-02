<div class="row card-panel">
    <div class="col s12">
        <table id="cementeries_list" class="dTable striped highlight">
            <thead>
            <tr>
                <th>#</th>
                <th>Cementerio</th>
                <th data-placeholder="none">Acciones</th>
            </tr>
            </thead>
            <tbody id="cementeriesTable"></tbody>
        </table>
        <script>
            Api.post(Api.endpoints['cementeries'], true)
                .then(({ status, response }) => {
                    if (status === 'OK') {
                        Helper.Datatable.init(
                            "#cementeries_list",
                            {
                                "data" : response.list,
                                "columns" : [
                                    { "data" : "id" },
                                    { "data" : "name" },
                                    {
                                        "mRender": function (d, t, row) {
                                            return '<a href="#!" onclick="cementeryEdit(' + row.id + ', \"' + row.name + '\")" data-tooltip="Editar" class="tooltipped btn-flat"><i class="material-icons">edit</i></a>' +
                                                '<a href="#!" onclick="cementeryDelete(' + row.id + ', \"' + row.name + '\")" data-tooltip="Eliminar" class="tooltipped btn-flat"><i class="material-icons">delete_forever</i></a>';
                                        }
                                    }
                                ],
                                "order": [[ 0, "asc" ]],
                                "initComplete": function (settings, json) {
                                    $('.tooltipped').tooltip();
                                }
                            }
                        );
                    }
                    else if (status === 'Unauthorized') {
                        Helper.openLink('/');
                    }
                    else {
                        M.toast({html: 'No se encontraron cementerios'});
                    }
                })
                .catch( e => console.log(e) );

            function cementeryEdit(id, name) {
                $('#cem_edit_id').val(id);
                $('#cem_edit_name').val(name);
                const Modal = $('#editCementery');
                Modal.modal('open');
            }

            function cementeryDelete(id, name) {
                $('#cem_del_id').val(id);
                $('#cem_del_name').html(name);
                const Modal = $('#deleteCementery');
                Modal.modal('open');
            }

        </script>
    </div>
</div>