let Helper = {};
Helper.include = (file_path) => {
    const js = document.createElement("script");
    js.type = "text/javascript";
    js.src = file_path;
    document.body.appendChild(js);
};
Helper.openLink = (link, target) => {
    if (target === '_blank') {
        window.open(link);
    } else {
        window.location.href = link;
    }
};
Helper.setDefault = (value = '', _default = 'No definido') => {
    return value === '' ? _default : value;
};
Helper.clearAllFields = (id) => {
    let _container = $(id);
    _container.find('input, textarea').each( function () { this.val('') });
    _container.find('select').each( function () { this.val('1').change() });
};
Helper.calcTotal = () => {
    const v_cost = $('#v_cost').val(),
        v_discount = $('#v_discount').val(),
        v_coverage = $('#v_coverage').val();
    $('#v_total').val(v_cost - v_discount);
    $('#v_payment').val(v_cost - v_discount - v_coverage);
};
Helper.Datatable = {};
Helper.Datatable.init = () => {
    $('.dTable').each( function() {
        $(this).find('thead tr').clone(true).appendTo($(this).find('thead'));
        $(this).find('thead tr:eq(0) th').each(function (i) {
            let _placeholder = $(this).data('placeholder') || 'Buscar...';
            if (_placeholder !== 'none') {
                $(this).html('<input style="margin:0" type="text" placeholder="' + _placeholder + '">');
            }
            $(this).css({ "padding": "1px 2px" });
            $('input', this).on('keyup change', function () {
                if (_table.column(i).search() !== this.value) {
                    _table.column(i).search(this.value).draw();
                }
            });
        });
        let _table = $(this).DataTable({
            "language": { "paginate": { "previous": "<", "next": ">" }, "pageLength": 50 },
            dom: 'Bfrtip',
            buttons: [ 'csv', 'excel', 'pdf' ]
        });
    } );
};

Helper.include('https://kit.fontawesome.com/a93fffc8fc.js');
Helper.include('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
Helper.include('https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js');
Helper.include('https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js');
Helper.include('https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js');
Helper.include('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js');
Helper.include('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js');
Helper.include('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js');
Helper.include('https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js');
Helper.include('./vendor/acode.js');

let Api = {};
Api.endpoints = {
    'login': '/api/login',
    'logout': '/api/logout',
    'check': '/api/check',
    'regions': '/api/regions',
    'comunes_by_region': '/api/comunesByRegion',
    'insurances': '/api/insurances',
    'cementeries': '/api/cementeries',
    'services': '/api/services',
    'comunes': '/api/comunes'
};

let Auth = {};
Auth.login = (email, password) => {
    _$.ajax(Api.endpoints['login'], { email: email, password: password }
    ).then(
        ({ status, response }) => {
            _$.snackbar(response.message);
            if (status === 'OK' && response.code === 200) {
                _$.cookie.set('fdbp_token', response.token);
                Helper.openLink('/app');
            }
        }
    );
};
Auth.logout = () => {
    _$.ajax(Api.endpoints['logout'], { id: 'hbwef73238edbak' })
        .then( () => { window.location.href = '/' })
};
Auth.getHeaders = () => {
    return {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + _$.cookie.get('fdbp_token')
    }
};
Auth.checkStatus = () => {
    const key = _$.cookie.get('fdbp_token') || null;
    _$.ajax(Api.endpoints['check'], { key: key })
        .then(({ status, response }) => {
            if (status !== 'OK' || response.status !== 'success') {
                _$.snackbar(response.message)
                window.location.href = '/';
            } else {
                _$('#body').style.display = 'block';
            }
        });
};

$(() => {
    Helper.Datatable.init();
    $('input, textarea, select')
        .on('change', function () { $(this).removeClass('error') });
});