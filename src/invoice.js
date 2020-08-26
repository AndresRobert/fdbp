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
Helper.Datatable.init = (id, data = {}) => {
    let dtable = $(id);
    dtable.find('thead tr').clone(true).appendTo(dtable.find('thead'));
    dtable.find('thead tr:eq(0) th').each(function (i) {
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
    data.language = { "paginate": { "previous": "<", "next": ">" }, "pageLength": 50 };
    data.dom = 'Bfrtip';
    data.buttons = [ 'csv', 'excel', 'pdf' ];
    data.drawCallback = function ( settings ) {
        $('.dt-buttons').find('button').addClass('btn-flat waves-effect waves-googleGreen');
    };
    let _table = dtable.DataTable(data);
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
    document.cookie = cname + "=" + encodeURIComponent(cvalue) + ";" + expires + ";path=/";
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
Helper.Object = {};
Helper.Object.save = (name, object) => {
    localStorage.setItem(name, JSON.stringify(object));
};
Helper.Object.load = (name) => {
    let item = localStorage.getItem(name);
    return item === null ? [] : JSON.parse(item);
};
Helper.Object.remove = (name) => {
    return localStorage.removeItem(name);
};
Helper.Object.clearAll = () => {
    localStorage.clear();
};

let Api = {};
Api.endpoints = {
    'login': '/api/login',
    'logout': '/api/logout',
    'check': '/api/check',
    'regions': '/api/list/regions',
    'comunes': '/api/list/comunes',
    'comunes_by_region': '/api/list/comunesByRegion',
    'insurances': '/api/list/insurances',
    'cementeries': '/api/list/cementeries',
    'services': '/api/list/services',
    'providers': '/api/list/providers',
    'providers_by_service': '/api/list/providersByService',
    'colors_by_service': '/api/list/colorsByService',
    'contracts': '/api/contract'
};
Api.setList = (name = 'none') => {
    if (name === 'none') {
        console.error('setList', 'No name');
        return;
    }
    $.get(Api.endpoints[name], ({ _, response }) => {
        Helper.Object.save(name, response.list);
    });
};

Api.getList = (name = 'none') => {
    if (name === 'none') {
        console.error('getList', 'No name');
        return;
    }
    if (Helper.Object.load(name) === '') {
        return [];
    }
    return Helper.Object.load(name);
};

let Auth = {};
Auth.login = (email, password) => {
    $.post(Api.endpoints['login'],
        { "email": email, "password": password },
        ({ status, response }) => {
            M.toast({ html: response.message });
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
        'Authorization': 'Bearer ' + Helper.getCookie('fdbp_token')
    }
};
Auth.checkStatus = () => {
    const key = Helper.getCookie('fdbp_token') || null;
    $.post(Api.endpoints['check'], { key: key }, function ({ status, response }) {
        if (status !== 'OK' || response.status !== 'success') {
            //M.toast({html: response.message});
            Helper.openLink('/');
        }
    }, 'json');
};

let Adaptor = {};
Adaptor.Select = (selectId = '', listName = '') => {
    let select = $(selectId);
    if (select.length > 0) {
        let list = Api.getList(listName);
        if (list === []) {
            console.log('Data not available for select');
        } else {
            select.empty();
            $.each(list, function( _, { id, name } ) {
                select.append('<option value="' + id + '">' + name + '</option>');
            });
        }
    } else {
        console.log('select is not present');
    }
};
Adaptor.Comunes = (selectId = '', regionId = '') => {
    let select = $(selectId);
    if (select.length > 0) {
        let list = Api.getList('comunes_by_region');
        if (list === []) {
            console.log('Data not available for select')
        } else {
            select.empty();
            $.each(list[regionId], function( _, { id, name } ) {
                select.append('<option value="' + id + '">' + name + '</option>');
            });
        }
    } else {
        console.log('select is not present');
    }
};
Adaptor.Connect = {};
Adaptor.Connect.Comunes = (region_id, comune_id) => {
    $(document).on('change', region_id, function () {
        Adaptor.Comunes(comune_id, this.value);
        $(comune_id).formSelect();
    });
};

Api.setList('regions');
Api.setList('comunes');
Api.setList('comunes_by_region');
Api.setList('insurances');
Api.setList('cementeries');
Api.setList('services');
Api.setList('providers');
Api.setList('providers_by_service');
Api.setList('colors_by_service');

Helper.ready(() => {
    $('input, textarea, select').on('change', function () { $(this).removeClass('error') });
    $('.sidenav').sidenav();
    $('.tooltipped').tooltip();
    $('.modal').modal();
    $('select').formSelect();
    $('.datepicker').datepicker();
});