const _subtabs = [
    'tab_service',
    'tab_insurance',
    'tab_invoice',
    'tab_providers'
];

const _url = {
    'api_login': '/api/login',
    'api_logout': '/api/logout',
    'api_checkAuth': '/api/check',
    'api_regions': '/api/regions',
    'api_comunes': '/api/comunes',
    'api_insurances': '/api/insurances',
    'api_cementeries': '/api/cementeries',
    'api_services': '/api/services',
    'api_comunes_list': '/api/comunesListed'
};

const _lists = {};
let _pairs = {};

function showTabContent(_id = '#search', _class = '.tab-content') {
    _$$(_class).forEach(tab => { tab.style.display = 'none' });
    _$(_id).style.display = 'inherit';
    window.location.hash = '#t_' +  _id.substring(1, _id.length);
}

function login() {
    _$.ajax(
        _url['api_login'],
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
    _$.ajax(_url['api_logout'], { id: 'hbwef73238edbak' })
        .then( () => { window.location.href = '/' })
}

function getBearerHeaders() {
    return {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + _$.cookie.get('fdbp_key')
    };
}

function checkAuthStatus() {
    const key = _$.cookie.get('fdbp_key') || null;
    _$.ajax(_url['api_checkAuth'], { key: key }).then(
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

function setList(listName, list) {
    console.log('name', listName);
    if (_$.cookie.get(listName) === null) {
        _pairs[listName] = {};
        $.each(list, function (_id, _data) {
            _pairs[listName][_data.id] = _data.name;
        });
        _$.cookie.set(listName, JSON.stringify(_pairs[listName]));
    } else {
        _pairs[listName] = JSON.parse(_$.cookie.get(listName));
    }
    console.log('name', listName, _$.cookie.get(listName));
}

function getList(_listName) {
    if (_$.cookie.get(_listName) !== null) {
        _pairs[_listName] = JSON.parse(_$.cookie.get(_listName));
        if (_pairs[_listName] !== {}) {
            return;
        }
    }
    _$.ajax(_url[_listName], {id: 'hbwef73238edbak'}, {headers: getBearerHeaders()}).then(
        ({status, response}) => {
            if (status === 'error') {
                _$.snackbar('Error de servidor: contacte al administrador', 'Cerrar');
                checkAuthStatus();
            }
            if (status === 'fail') {
                _$.snackbar('Session expirada');
                checkAuthStatus();
            } else {
                if (response.status !== 'fail') {
                    setList(_listName, response.list);
                } else {
                    _$.snackbar('No se encontro información: contacte al administrador');
                    checkAuthStatus();
                }
            }
        }
    ).catch(e => console.log(e, _listName));
}

function setDefault(_string = '', _default = 'No definido') {
    return _string === '' ? _default : _string;
}

function loadSelect(_selectId, _endpoint) {
    if (_$.size(_lists[_endpoint]) === 0) {
        _$.ajax(_url[_endpoint], {id: 'hbwef73238edbak'}, {headers: getBearerHeaders()}).then(
            ({status, response}) => {
                if (status === 'error') {
                    _$.snackbar('Error de servidor: contacte al administrador', 'Cerrar');
                    checkAuthStatus();
                }
                if (status === 'fail') {
                    _$.snackbar('Session expirada');
                    checkAuthStatus();
                } else {
                    if (response.status !== 'fail') {
                        _lists[_endpoint] = response.list;
                        setList(_endpoint, response.list);
                        setSelectData(_selectId, _lists[_endpoint]);
                    } else {
                        _$.snackbar('No se encontro información: contacte al administrador');
                        checkAuthStatus();
                    }
                }
            }
        ).catch(e => console.log(e, _endpoint));
    } else {
        setSelectData(_selectId, _lists[_endpoint]);
    }
}

function setRegions() {
    _$.ajax(_url['api_regions'], {id: 'hbwef73238edbak'}, {headers: getBearerHeaders()}).then(
        ({status, response}) => {
            if (status === 'error') {
                _$.snackbar('Error de servidor: contacte al administrador', 'Cerrar');
            }
            if (status === 'fail') {
                _$.snackbar('Session expirada');
            } else {
                if (response.status !== 'fail') {
                    _lists['api_regions'] = response.list;
                    setList('api_regions', response.list);
                    return;
                } else {
                    _$.snackbar('No se encontro información: contacte al administrador');
                }
            }
        }
    ).catch(e => console.log(e, 'api_regions'));
    checkAuthStatus();
}

function setComunes() {
    _$.ajax(_url['api_comunes_list'], {id: 'hbwef73238edbak'}, {headers: getBearerHeaders()}).then(
        ({status, response}) => {
            if (status === 'error') {
                _$.snackbar('Error de servidor: contacte al administrador', 'Cerrar');
            }
            if (status === 'fail') {
                _$.snackbar('Session expirada');
            } else {
                if (response.status !== 'fail') {
                    _lists['api_comunes_list'] = response.list;
                    setList('api_comunes_list', response.list);
                    return;
                } else {
                    _$.snackbar('No se encontro información: contacte al administrador');
                }
            }
        }
    ).catch(e => console.log(e, 'api_comunes_list'));
    checkAuthStatus();
}

function loadComunes(_selectId, _regionId) {
    if (_$.size(_lists['api_comunes']) === 0) {
        _$.ajax(_url['api_comunes'], {id: 'hbwef73238edbak'}, { headers: getBearerHeaders()}).then(
            ({ status, response }) => {
                if (status === 'error') {
                    _$.snackbar('Error de servidor: contacte al administrador', 'Cerrar');
                }
                if (status === 'fail') {
                    _$.snackbar('Session expirada');
                } else {
                    if (response.status !== 'fail') {
                        _lists['api_comunes'] = response.list;
                        setList('api_comunes', response.list);
                        setSelectData(_selectId, _lists['api_comunes'][_regionId]);
                        return;
                    } else {
                        _$.snackbar('No se encontraron comunas: contacte al administrador');
                    }
                }
            }
        ).catch(e => console.log(e, _selectId, _regionId));
    } else {
        setSelectData(_selectId, _lists['api_comunes'][_regionId]);
        return;
    }
    checkAuthStatus();
}

function setSelectData(_selectId, _data) {
    let _select = $(_selectId);
    _select.empty();
    _select.prop('selectedIndex', 0);
    $.each(_data, function (key, entry) {
        _select.append($('<option></option>').attr('value', entry.id).text(entry.name));
    });
}

function clearAllFields(_id) {
    let _container = $(_id);
    _container.find('input, textarea').each( function () { this.val('') });
    _container.find('select').each( function () { this.val('1').change() });
}

function calcTotal() {
    const v_cost = $('#v_cost').val(),
        v_discount = $('#v_discount').val(),
        v_coverage = $('#v_coverage').val();
    $('#v_total').val(v_cost - v_discount);
    $('#v_payment').val(v_cost - v_discount - v_coverage);
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