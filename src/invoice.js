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
    'contract': '/api/contract'
};
Api.setList = (name = 'none') => {
    if (name === 'none') {
        console.error('setList', 'No name');
        return;
    }
    Api.get(Api.endpoints[name])
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
Api.get = async function (endpoint = '', auth = false) {
    const headers = auth ? Auth.getHeaders() : { 'Content-Type': 'application/json' },
        response = await fetch(endpoint, {
            method: 'GET',
            cache: 'no-cache',
            referrerPolicy: 'no-referrer',
            headers: headers
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
            Helper.openLink('/')
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
Form.getValues = (containerId) => {
    let formData = [];
    let container = $(containerId);
    container.find('select, textarea, input[type=text]').each( function () {
        console.log('1', this);
        let form = $(this);
        if (typeof form.attr("id") !== 'undefined') {
            formData[form.attr("id")] = $(this).val();
        }
    });
    container.find('input[type=number]').each( function () {
        console.log('2', this);
        let form = $(this);
        if (typeof form.attr("id") !== 'undefined') {
            formData[form.attr("id")] = parseInt($(this).val()) || 0;
        }
    });
    container.find('input[type=checkbox]').each( function () {
        console.log('3', this);
        let form = $(this);
        if (typeof form.attr("id") !== 'undefined') {
            if (form.prop("checked") === true) {
                formData[form.attr("id")] = 1;
            } else {
                formData[form.attr("id")] = 0;
            }
        }
    });
    return formData;
};
Form.Calc = {};
Form.Calc.payment = () => {
    let cost = parseInt($('#v_cost').val()) || 0;
    let discount = parseInt($('#v_discount').val()) || 0;
    $('#v_total').val(cost - discount);
    let coverage = parseInt($('#v_coverage').val()) || 0;
    $('#v_payment').val(cost - discount - coverage);
};

// Pre-Init

Api.setList('regions');
Api.setList('comunes');
Api.setList('comunes_by_region');
Api.setList('insurances');
Api.setList('cementeries');
Api.setList('services');
Api.setList('providers');
Api.setList('providers_by_service');
Api.setList('colors_by_service');

// Init
Helper.ready(() => {
    $('.sidenav').sidenav();
    $('.tooltipped').tooltip();
    $('.modal').modal();
    $('select').formSelect();
    $('.datepicker').datepicker(Helper.Options.datepicker());
    $('.timepicker').timepicker(Helper.Options.timepicker());
});