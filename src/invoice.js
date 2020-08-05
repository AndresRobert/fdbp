function showTabContent (_id, _class) {
    _$$(_class).forEach(tab => { tab.style.display = 'none' });
    _$(_id).style.display = 'inherit';
    window.location.hash = '#t_' +  _id.substring(1, _id.length);
}

const _subtabs = [
    'tab_service',
    'tab_insurance',
    'tab_invoice',
    'tab_providers'
];

$(() => {
    let _selectedTab = window.location.hash.replace('t_', 'tab_');
    if (_subtabs.indexOf(_selectedTab)) { $('#tab_database').click() }
    $(_selectedTab).click();
    $('.dTable').each( function() {
        $(this).find('thead tr').clone(true).appendTo($(this).find('thead'));
        $(this).find('thead tr:eq(0) th').each(function (i) {
            let _placeholder = $(this).data('placeholder') || 'Buscar...';
            $(this).html('<input style="margin:0" type="text" placeholder="' + _placeholder + '">');
            $(this).css({ "padding": "1px 2px" });
            $('input', this).on('keyup change', function () {
                if (_table.column(i).search() !== this.value) {
                    _table.column(i).search(this.value).draw();
                }
            });
        });
        let _table = $(this).DataTable({
            "language": {
                "paginate": { "previous": "<", "next": ">" },
                "pageLength": 50
            },
            dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'pdf'
            ]
        });
    } );
});