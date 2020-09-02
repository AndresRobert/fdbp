<div class="row card-panel">
    <div class="col s12">
        <table id="services_list" class="dTable striped highlight">
            <thead>
            <tr>
                <th>#</th>
                <th>Servicio</th>
                <th data-placeholder="none">Acciones</th>
            </tr>
            </thead>
            <tbody id="servicesTable"></tbody>
        </table>
        <script>
            Api.get(Api.endpoints['services'], true)
                .then(({ status, response }) => {
                    if (status === 'OK') {
                        Helper.Datatable.init(
                            "#services_list",
                            {
                                "data" : response.list,
                                "columns" : [
                                    { "data" : "id" },
                                    { "data" : "name" },
                                    {
                                        "mRender": function (d, t, row) {
                                            return '<a href="#!" onclick="serviceEdit(' + row.id + ', ' + row.name + ')" data-tooltip="Editar" class="tooltipped btn-flat"><i class="material-icons">edit</i></a>' +
                                                '<a href="#!" onclick="serviceDelete(' + row.id + ', ' + row.name + ')" data-tooltip="Eliminar" class="tooltipped btn-flat"><i class="material-icons">delete_forever</i></a>';
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

            function serviceEdit(id, name) {
                $('#ser_edit_id').val(id);
                $('#ser_edit_name').val(name);
                const Modal = $('#editService');
                Modal.modal('open');
                // TODO: Load form
            }

            function serviceDelete(id, name) {
                $('#ser_del_id').val(id);
                $('#ser_del_name').html(name);
                const Modal = $('#deleteService');
                Modal.modal('open');
            }

        </script>
    </div>
</div>