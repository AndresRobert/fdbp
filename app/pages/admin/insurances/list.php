<div class="row card-panel">
    <div class="col s12">
        <table id="insurances_list" class="dTable striped highlight">
            <thead>
            <tr>
                <th>#</th>
                <th>Aseguradora</th>
                <th data-placeholder="none">Acciones</th>
            </tr>
            </thead>
            <tbody id="insuranceTable"></tbody>
        </table>
        <script>
            Api.get(Api.endpoints['insurances'], true)
                .then(({ status, response }) => {
                    if (status === 'OK') {
                        Helper.Datatable.init(
                            "#insurances_list",
                            {
                                "data" : response.list,
                                "columns" : [
                                    { "data" : "id" },
                                    { "data" : "name" },
                                    {
                                        "mRender": function (d, t, row) {
                                            return '<a href="#!" onclick="insuranceEdit(' + row.id + ', ' + row.name + ')" data-tooltip="Editar" class="tooltipped btn-flat"><i class="material-icons">edit</i></a>' +
                                                '<a href="#!" onclick="insuranceDelete(' + row.id + ')" data-tooltip="Eliminar" class="tooltipped btn-flat"><i class="material-icons">delete_forever</i></a>';
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

            function insuranceEdit(id, name) {
                $('#ins_edit_id').val(id);
                $('#ins_edit_name').val(id);
                const Modal = $('#editInsurance');
                Modal.modal('open');
                // TODO: Load form
            }

            function insuranceDelete(id) {
                $('#pro_ins_id').html(id);
                const Modal = $('#deleteInsurance');
                Modal.modal('open');
            }

        </script>
    </div>
</div>