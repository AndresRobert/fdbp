<div class="row card-panel">
    <div class="col s12">
        <table id="providers_list" class="dTable striped highlight">
            <thead>
            <tr>
                <th>#</th>
                <th>Proveedor</th>
                <th data-placeholder="none">Acciones</th>
            </tr>
            </thead>
            <tbody id="providersTable"></tbody>
        </table>
        <script>
            Api.post(Api.endpoints['providers'], true)
                .then(({ status, response }) => {
                    if (status === 'OK') {
                        Helper.Datatable.init(
                            "#providers_list",
                            {
                                "data" : response.list,
                                "columns" : [
                                    { "data" : "id" },
                                    { "data" : "name" },
                                    {
                                        "mRender": function (d, t, row) {
                                            return '<a href="#!" onclick="providerEdit(' + row.id + ', ' + row.name + ')" data-tooltip="Editar" class="tooltipped btn-flat"><i class="material-icons">edit</i></a>' +
                                                '<a href="#!" onclick="providerDelete(' + row.id + ', ' + row.name + ')" data-tooltip="Eliminar" class="tooltipped btn-flat"><i class="material-icons">delete_forever</i></a>';
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
                        M.toast({html: 'No se encontraron proveedores'});
                    }
                })
                .catch( e => console.log(e) );

            function providerEdit(id, name) {
                $('#pro_edit_id').val(id);
                $('#pro_edit_name').val(name);
                const Modal = $('#editProvider');
                Modal.modal('open');
            }

            function providerDelete(id, name) {
                $('#pro_del_id').val(id);
                $('#pro_del_name').html(name);
                const Modal = $('#deleteProvider');
                Modal.modal('open');
            }

        </script>
    </div>
</div>