let Config = {};
Config.siteHome = 'http://www.funerariadelbuenpastor.cl';

let Helper = {};
Helper.openLink = (link = '', target = '') => {
    if (link !== '') {
        if (target === '_blank') {
            window.open(link);
        } else {
            window.location.href = link;
        }
    }
    else {
        window.location.reload();
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
    data.drawCallback = function ( _ ) {
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
    let fixCvalue = typeof cvalue !== 'object' ? cvalue : JSON.stringify(cvalue);
    document.cookie = cname + "=" + encodeURIComponent(fixCvalue) + ";" + expires + ";path=/";
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
Helper.deleteAllCookies = () => {
    document.cookie.split(";").forEach(function(c) {
        document.cookie = c
            .replace(/^ +/, "")
            .replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/");
    });
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
Helper.Options = {};
Helper.Options.datepicker = () => {
    return {
        format: 'yyyy-mm-dd',
        i18n: {
            months: [
                'Enero',
                'Febrero',
                'Marzo',
                'Abril',
                'Mayo',
                'Junio',
                'Julio',
                'Agosto',
                'Septiembre',
                'Octubre',
                'Noviembre',
                'Diciembre'
            ],
            monthsShort: [
                'Ene',
                'Feb',
                'Mar',
                'Abr',
                'May',
                'Jun',
                'Jul',
                'Ago',
                'Sep',
                'Oct',
                'Nov',
                'Dic'
            ],
            weekdays: [
                'Domingo',
                'Lunes',
                'Martes',
                'Miércoles',
                'Jueves',
                'Viernes',
                'Sábado'
            ],
            weekdaysShort: [
                'Dom',
                'Lun',
                'Mar',
                'Mie',
                'Jue',
                'Vie',
                'Sab'
            ],
            weekdaysAbbrev: [
                'D','L','M','M','J','V','S'
            ],
            cancel: 'Cancelar',
            done: 'Aceptar',
            clear: 'Limpiar'
        }
    };
};
Helper.Options.timepicker = () => {
    return {
        twelveHour: false,
        i18n: {
            cancel: 'Cancelar',
            done: 'Aceptar',
            clear: 'Limpiar'
        }
    };
};
Helper.List = {};
Helper.List.getById = (list, id) => {
    let response = "";
    $.each(list, function( _, item ) {
        if (parseInt(id) === parseInt(item.id)) {
            response = item.name;
            return false;
        }
    });
    return response;
};

let Api = {};
Api.endpoints = {
    'login': '/api/login',
    'logout': '/api/logout',
    'check': '/api/check',

    'regions': '/api/regions/list',
    'comunes': '/api/comunes/list',
    'comunes_by_region': '/api/comunes/list/byRegion',

    'insurances': '/api/insurances/list',
    'insurance_add': '/api/insurance/add',
    'insurance_del': '/api/insurance/delete',
    'cementeries': '/api/cementeries/list',
    'cementery_add': '/api/cementery/add',
    'cementery_del': '/api/cementery/delete',
    'services': '/api/services/list',
    'service_add': '/api/service/add',
    'service_del': '/api/service/delete',
    'providers': '/api/providers/list',
    'provider_del': '/api/provider/delete',
    'provider_add': '/api/provider/add',

    'contracts': '/api/contracts/list',
    'contract_get': '/api/contracts/list/one',
    'contract_add': '/api/contract/add',
    'contract_del': '/api/contract/delete',
    'contract_invoice': '/api/contract/invoice',
    'contract_payment': '/api/contract/payment'

};
Api.setList = (name = 'none') => {
    if (name === 'none') {
        console.error('setList', 'No name');
        return;
    }
    Api.post(Api.endpoints[name])
        .then(({ _, response }) => {
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
Api.post = async function (endpoint = '', auth = false, data = {}) {
    console.log(endpoint, auth, data);
    const headers = auth ? Auth.getHeaders() : { 'Content-Type': 'application/json' },
        response = await fetch(endpoint, {
            method: 'POST',
            cache: 'no-cache',
            referrerPolicy: 'no-referrer',
            headers: headers,
            body: JSON.stringify(data)
        });
    return await response.json();
};

let Auth = {};
Auth.login = (email, password) => {
    Api.post(Api.endpoints['login'], false, { "email": email, "password": password })
        .then(({ status, response }) => {
            M.toast({ html: response.message });
            if (status === 'OK') {
                Helper.setCookie('fdbp_token', response.token);
                Helper.openLink('/app');
            }
        });
};
Auth.logout = () => {
    Api.post(Api.endpoints['logout'], false)
        .then(() => {
            Helper.deleteAllCookies();
            Helper.openLink('/');
        });
};
Auth.getHeaders = () => {
    return {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + Helper.getCookie('fdbp_token')
    }
};
Auth.checkStatus = () => {
    const key = Helper.getCookie('fdbp_token') || null;
    Api.post(Api.endpoints['check'], false, {key: key})
        .then(({status, response}) => {
            if (status !== 'OK' || response.status !== 'success') {
                //M.toast({html: response.message});
                Helper.openLink('/');
            }
        });
}

let Adaptor = {};
Adaptor.select = (selectId = '', listName = '') => {
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
Adaptor.comunes = (selectId = '', regionId = '') => {
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
Adaptor.Connect.comunes = (regionId, comuneId) => {
    $(document).on('change', regionId, function () {
        Adaptor.comunes(comuneId, this.value);
        $(comuneId).formSelect();
    });
};
Adaptor.Connect.services = (selectId, inputId, listName) => {
    let list = Api.getList(listName);
    $(document).on('change', selectId, function () {
        let selectedId = this.value;
        $.each(list, function( _, item ) {
            if (item.id === selectedId) {
                $(inputId).val(item.name);
                return false;
            }
        });
    });
};

let Form = {};
Form.getValues = (containerId, prefix = '') => {
    let formData = {};
    const container = $(containerId),
        strings = container.find('select, textarea, input[type=text], input[type=hidden]'),
        numerics = container.find('input[type=number]'),
        booleans = container.find('input[type=checkbox]');
    strings.each( (_, input) => {
        if (input.id !== "") {
            formData[input.id.replace(prefix,'')] = input.value;
        }
    });
    numerics.each( (_, input) => {
        if (input.id !== "") {
            formData[input.id.replace(prefix,'')] = parseInt(input.value) || 0;
        }
    });
    booleans.each( (_, input) => {
        if (input.id !== "") {
            if ($(input).prop("checked") === true) {
                formData[input.id.replace(prefix,'')] = 1;
            } else {
                formData[input.id.replace(prefix,'')] = 0;
            }
        }
    });
    Helper.setCookie('fdbp_contract_data', formData);
    return formData;
};
Form.Calc = {};
Form.Calc.payment = (prefix = '') => {
    let cost = parseInt($('#' + prefix + 'v_cost').val()) || 0;
    let discount = parseInt($('#' + prefix + 'v_discount').val()) || 0;
    $('#' + prefix + 'v_total').val(cost - discount);
    let coverage = parseInt($('#' + prefix + 'v_coverage').val()) || 0;
    $('#' + prefix + 'v_payment').val(cost - discount - coverage);
};

// Pre-Init

Api.setList('regions');
Api.setList('comunes');
Api.setList('comunes_by_region');
Api.setList('insurances');
Api.setList('cementeries');
Api.setList('services');
Api.setList('providers');

// Init
Helper.ready(() => {
    $('.sidenav').sidenav();
    $('.tooltipped').tooltip();
    $('.modal').modal();
    $('select').formSelect();
    $('.datepicker').datepicker(Helper.Options.datepicker());
    $('.timepicker').timepicker(Helper.Options.timepicker());
});