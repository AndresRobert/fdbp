const _subtabs = [
    'tab_service',
    'tab_insurance',
    'tab_invoice',
    'tab_providers'
];

const _cookieURL = {
    'fdbp_regions': '/api/regions'
};

function showTabContent(_id = '#search', _class = '.tab-content') {
    _$$(_class).forEach(tab => { tab.style.display = 'none' });
    _$(_id).style.display = 'inherit';
    window.location.hash = '#t_' +  _id.substring(1, _id.length);
}

function login() {
    _$.ajax(
        '/api/login',
        { email: _$('#email').val(), password: _$('#password').val() }
    ).then(
        ({ status, response }) => {
            if (status === 'OK' && response.response_code === 200) {
                _$.cookie.set('fdbp_key', response.token);
                window.location.href = '/admin';
            } else {
                _$.snackbar(response.message)
            }
        }
    );
}

function logout() {
    _$.ajax(
        '/api/logout',
        { id: 'TKR0NUkHatORfgC3UZb_eERSxlrZtxnI5_cSCRyx5qU' }
    ).then( () => { window.location.href = '/' })
}

function getBearerHeaders() {
    return {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + _$.cookie.get('fdbp_key')
    };
}

function checkAuthStatus() {
    const key = _$.cookie.get('fdbp_key') || null;
    _$.ajax('/api/check', { key: key }).then(
        ({ status, response }) => {
            if (status !== 'OK' || response.status !== 'success') {
                _$.snackbar(response.message)
                window.location.href = '/';
            } else {
                _$('#body').style.display = 'block';
            }
        });
}

function toggleDarkMode() {
    _$.darkmode();
    let actual = _$.cookie.get('darkmode');
    if (actual === 'darkmode') {
        _$.cookie.set('darkmode', '');
    }
    else {
        _$.cookie.set('darkmode', 'darkmode');
    }
}

function openLink(_link, _target) {
    if (_target === '_blank') {
        window.open(_link);
    } else {
        window.location.href = _link;
    }
}

$(() => {
    let _selectedTab = window.location.hash.replace('t_', 'tab_');
    if (_selectedTab === '') {
        $('#tab_search').click()
    } else {
        if (_subtabs.indexOf(_selectedTab)) { $('#tab_database').click() }
        $(_selectedTab).click();
    }
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
    $('input, textarea, select')
        .on('change', function () { $(this).removeClass('error') });
});

function getSelectData(_cookieName) {
    _$.ajax(_cookieURL[_cookieName], {id: 'hbwef73238edbak'}, { headers: getBearerHeaders()}).then(
        ({ status, response }) => {
            if (status === 'error') {
                _$.snackbar('Error de servidor: contacte al administrador en support@acode.cl', 'Cerrar');
            }
            if (status === 'fail') {
                _$.snackbar('Session expirada');
                openLink('/');
            } else {
                if (response.status !== 'fail') {
                    _$.cookie.set(_cookieName, JSON.stringify(response.list));
                } else {
                    _$.snackbar('No se encontro información: contacte al administrador en support@acode.cl', 'Cerrar');
                }
            }
        }
    ).catch(e => console.log(e));
}

let _comunes = {};

function loadComunes(_selectId, _regionId) {
    if (!_$.isset(_comunes[1])) {
        _$.ajax('/api/comunes', {id: 'hbwef73238edbak'}, { headers: getBearerHeaders()}).then(
            ({ status, response }) => {
                if (status === 'error') {
                    _$.snackbar('Error de servidor: contacte al administrador en support@acode.cl', 'Cerrar');
                }
                if (status === 'fail') {
                    _$.snackbar('Session expirada');
                    openLink('/');
                } else {
                    if (response.status !== 'fail') {
                        _comunes = response.list;
                        loadSelect(_selectId, _comunes[_regionId]);
                    } else {
                        _$.snackbar('No se encontraron comunas: contacte al administrador en support@acode.cl', 'Cerrar');
                    }
                }
            }
        ).catch(e => console.log(e));
    } else {
        loadSelect(_selectId, _comunes[_regionId]);
    }
}

function getData(_cookieName) {
    if (_$.cookie.get(_cookieName) === null) {
        getSelectData(_cookieName);
    }
    return JSON.parse(_$.cookie.get(_cookieName));
}

function loadSelect(_selectId, _data) {
    let _select = $(_selectId);
    _select.empty();
    _select.prop('selectedIndex', 0);
    $.each(_data, function (key, entry) {
        _select.append($('<option></option>').attr('value', entry.id).text(entry.name));
    });
}