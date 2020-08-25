let Helper = {};
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
            } else {
                $(this).html('');
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
Helper.ready = fn => {
    if (document.readyState !== 'loading') {
        fn();
    }
    else {
        document.addEventListener('DOMContentLoaded', fn, {capture: true, once: false, passive: true});
    }
};
Helper.setCookie = (cname, cvalue, exdays = 1) => {
    let d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
};
Helper.getCookie = (cname) => {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
};

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
    $.post(
        Api.endpoints['login'],
        { "email": email, "password": password },
        function ({ status, response }) {
            M.toast({html: response.message});
            if (status === 'OK') {
                Helper.setCookie('fdbp_token', response.token);
                Helper.openLink('/app');
            }
        }, 'json');
};
Auth.logout = () => {
    $.post(Api.endpoints['logout'], function () { Helper.openLink('/') }, 'json');
};
Auth.getHeaders = () => {
    return {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + Cookies.get('fdbp_token')
    }
};
Auth.checkStatus = () => {
    const key = Helper.getCookie('fdbp_token') || null;
    $.post(Api.endpoints['check'], { key: key }, function ({ status, response }) {
        if (status !== 'OK' || response.status !== 'success') {
            M.toast({html: response.message});
            Helper.openLink('/');
        }
    }, 'json');
};

Helper.ready(() => {
    Helper.Datatable.init();
    $('.dt-buttons').find('button').addClass('btn-flat waves-effect waves-googleGreen');
    $('input, textarea, select').on('change', function () { $(this).removeClass('error') });
    $('.sidenav').sidenav();
    $('.tooltipped').tooltip();
});