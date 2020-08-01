// Base

_$ = sel => {
    const el = document.querySelectorAll(sel);
    return el.length === 0 ? document.createElement('div') : el[0];
};
_$$ = sel => {
    return document.querySelectorAll(sel);
};
_$.ready = fn => {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn, _$.evtOptions);
};
_$.evtOptions = { capture: true, once: false, passive: true };

// Prototypes

const pro = HTMLElement.prototype;
pro.on = function (eventName, eventHandler) {
    this.addEventListener(eventName, eventHandler, _$.evtOptions);
    return this;
};
pro.val = function (newVal) {
    if (newVal === undefined)  return this.value;
    this.value = newVal;
    return this;
};
pro.html = function (html) {
    if (html === undefined) return this.innerHTML;
    this.innerHTML = html;
    return this;
};
pro.append = function (html) {
    this.innerHTML = this.innerHTML + html;
    return this;
};
pro.prepend = function (html) {
    this.innerHTML = html + this.innerHTML;
    return this;
};
pro.addClass = function (className) {
    this.classList.add(className);
    return this;
};
pro.removeClass = function (className) {
    this.classList.remove(className);
    return this;
};
pro.toggleClass = function (className) {
    this.classList.toggle(className);
    return this;
};
pro.hide = function () {
    this.style.display = 'none';
    return this;
};
pro.show = function () {
    if (this.style.display === 'none') this.style.display = '';
    return this;
};
pro.remove = function () {
    this.parentNode.removeChild(this);
};
pro.attr = function (attributeName, value) {
    if (typeof value === 'undefined') return this.getAttribute(attributeName);
    this.setAttribute(attributeName, value);
    return this;
};
pro.hasClass = function (className) {
    return this.classList.contains(className);
};
pro.prev = function () {
    return this.previousElementSibling;
};
pro.next = function () {
    return this.nextElementSibling;
};
pro.parent = function () {
    return this.parentNode;
};
pro.find = function (sel) {
    return this.querySelectorAll(sel);
};
pro.fadeRemove = function () {
    this.addClass('fadeOut');
    setTimeout(() => this.remove(), 200);
};
pro.trigger = function (eventName) {
    const event = document.createEvent('HTMLEvents');
    event.initEvent(eventName, true, false);
    this.dispatchEvent(event);
    return this;
};
pro.empty = function () {
    this.innerHTML = '';
    return this;
};

// Components
/*
// How to use
Render(
    div({ id: 'app', className: 'card' },
        header({ className: 'header' },
            h1({ className: 'header_title' }, 'Simple Framework'),
            a(
                {
                    className: 'button',
                    target: '_blank',
                    alt: 'Find out more about Simple Framework',
                    href: 'https://simple.acode.cl',
                },
                'What is this?',
            ),
        ),
    )
);
*/

_$.attributeExceptions = ['role'];
_$.setTxt = (el, text) => {
    const textNode = document.createTextNode(text);
    el.appendChild(textNode);
};
_$.addArry = (el, children) => {
    children.forEach((child) => {
        if (Array.isArray(child)) _$.addArry(el, child);
        else if (child instanceof window.Element) el.appendChild(child);
        else if (typeof child === 'string') _$.setTxt(el, child);
    });
};
_$.setAttr = (el, styles) => {
    if (!styles) {
        el.removeAttribute('styles');
        return;
    }
    Object.keys(styles).forEach((styleName) => {
        if (styleName in el.style) {
            el.style[styleName] = styles[styleName]; // eslint-disable-line no-param-reassign
        }
        else {
            console.warn(`${ styleName } is not a valid style for a <${ el.tagName.toLowerCase() }>`);
        }
    });
};
_$.create = (type, textOrPropsOrChild, ...children) => {
    const el = document.createElement(type);
    if (Array.isArray(textOrPropsOrChild)) _$.addArry(el, textOrPropsOrChild);
    else if (textOrPropsOrChild instanceof window.Element) el.appendChild(textOrPropsOrChild);
    else if (typeof textOrPropsOrChild === 'string') _$.setTxt(el, textOrPropsOrChild);
    else if (typeof textOrPropsOrChild === 'object') {
        Object.keys(textOrPropsOrChild).forEach((propName) => {
            if (propName in el || _$.attributeExceptions.includes(propName) || propName.startsWith('data-')) {
                const value = textOrPropsOrChild[propName];
                if (propName === 'style') _$.setAttr(el, value);
                else if (value) el[propName] = value;
            }
            else console.warn(`${ propName } is not a valid property of a <${ type }>`);
        });
    }
    if (children) _$.addArry(el, children);
    return el;
};

const a = (...args) => _$.create('a', ...args);
const button = (...args) => _$.create('button', ...args);
const div = (...args) => _$.create('div', ...args);
const footer = (...args) => _$.create('footer', ...args);
const h1 = (...args) => _$.create('h1', ...args);
const h2 = (...args) => _$.create('h2', ...args);
const h3 = (...args) => _$.create('h3', ...args);
const h4 = (...args) => _$.create('h4', ...args);
const h5 = (...args) => _$.create('h5', ...args);
const h6 = (...args) => _$.create('h6', ...args);
const header = (...args) => _$.create('header', ...args);
const i = (...args) => _$.create('i', ...args);
const img = (...args) => _$.create('img', ...args);
const input = (...args) => _$.create('input', ...args);
const main = (...args) => _$.create('main', ...args);
const nav = (...args) => _$.create('nav', ...args);
const option = (...args) => _$.create('option', ...args);
const p = (...args) => _$.create('p', ...args);
const select = (...args) => _$.create('select', ...args)
const span = (...args) => _$.create('span', ...args);
const tr = (...args) => _$.create('tr', ...args);
const th = (...args) => _$.create('th', ...args);
const td = (...args) => _$.create('td', ...args);
const SVGcircle = () => document.createElementNS('http://www.w3.org/2000/svg', 'circle') ;
const Render = (html, container = document.body) => container.appendChild(html);

// Custom Components

const Dialog = props => (
    div({ className: 'overlay' },
        div({ className: 'card elevated' },
            h5(props.title),
            p(props.message),
            div({ className: 'buttons right' }, props.buttons)
        )
    )
);

const SheetBottom = props => (
    div({ className: 'overlay sheet-bottom' },
        div({ className: 'card', id: props.id })
    )
);

const SheetSide = props => (
    div({ className: 'overlay sheet-side' },
        div({ className: 'card', id: props.id })
    )
);

const Gallery = props => (
    div({ className: 'overlay', id: 'sfGallery' },
        img({ className: 'galleryFullImage', alt: '', src: props.src })
    )
);

const AsyncLoadingBar = () => (
    div({ className: 'asyncProgressIndicator', id: 'sfAsyncLoadingBar' },
        div({ className: 'bar' })
    )
);

const SyncLoadingCircle = () => {
    let _circle = SVGcircle();
    _circle.setAttribute('cx', '50');
    _circle.setAttribute('cy', '50');
    _circle.setAttribute('r', '20');
    _circle.setAttribute('fill', 'none');
    _circle.setAttribute('stroke-width', '5');
    _circle.setAttribute('stroke-miterlimit', '10');
    let _svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    _svg.appendChild(_circle);
    let _div = document.createElement('div');
    _div.addClass('syncProgressIndicator');
    _div.appendChild(_svg);
    let _overlay = document.createElement('div');
    _overlay.addClass('overlay');
    _overlay.id = 'sfSyncLoadingCircle';
    _overlay.appendChild(_div);
    return _overlay;
};

// Functions

_$.asyncLoad = fn => {
    setTimeout(fn(), 0);
};

/**
 *
 * @param item
 * @returns {boolean}
 */
_$.isset = item => {
    return item instanceof Element ? _$.exists(item) : typeof item !== 'undefined' && item !== null;
};

/**
 *
 *  _$.ajax('https://acode.cl/test', { parameter: 9 })
 *  .then( response => {
 *      console.log(response); // JSON data parsed by 'response.json()' call
 *  });
 *
 * @param url
 * @param data
 * @param options
 * @returns {Promise}
 *
 */
_$.ajax = async function (url = '', data = {}, options = {}) {
    const method = _$.isset(options.method)
        ? options.method
        : 'POST', // *GET, POST, PUT, DELETE, etc.
        contentType = _$.isset(options.content_type)
            ? options.content_type
            : { 'Content-Type': 'application/json' }, // 'Content-Type': 'application/x-www-form-urlencoded'
        cors = _$.isset(options.cors)
            ? options.cors // no-cors, *cors, same-origin
            : 'cors',
        cache = _$.isset(options.cache)
            ? options.cache // *default, no-cache, reload, force-cache, only-if-cached
            : 'no-cache',
        credentials = _$.isset(options.credentials)
            ? options.credentials // include, *same-origin, omit
            : 'same-origin',
        redirect = _$.isset(options.redirect)
            ? options.redirect // manual, *follow, error
            : 'follow',
        policy = _$.isset(options.policy)
            ? options.policy // no-referrer, *client
            : 'no-referrer',
        response = await fetch(url, {
            method: method,
            mode: cors,
            cache: cache,
            credentials: credentials,
            redirect: redirect,
            referrerPolicy: policy,
            headers: contentType,
            body: JSON.stringify(data) // body data type must match 'Content-Type' header
        });
    return await response.json(); // parses JSON response into native JavaScript objects
};

_$.cookie = {};
_$.cookie.set = (name, value, days = 90) => {
    let date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    let expires = "; expires=" + date.toUTCString();
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
};
_$.cookie.get = name => {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
};
_$.cookie.delete = name => document.cookie = name + '=; Max-Age=-99999999;';

_$.exists = sel => sel instanceof Element ? document.body.contains(sel) : document.body.contains(_$(sel));

// Framework

_$.dialog = (message = '', options = {}) => {
    let title = _$.isset(options.title) ? options.title : 'Information',
        buttons = _$.isset(options.buttons) ? options.buttons : [],
        _buttons = [];
    buttons.forEach(_button => {
        let _id = _$.isset(_button.id) ? _button.id : '',
            _text = _$.isset(_button.text) ? _button.text : '';
        if (_text !== '') {
            _buttons.push(button({ className: 'text', id: _id }, _text));
        }
    });
    Render(Dialog({ title: title, message: message, buttons: _buttons }));
    _$.init('overlay');
};

_$.sheet = (type = '', html = '') => {
    if (type === 'side') {
        Render(SheetSide({ id: 'sfSheet' }));
    }
    else {
        Render(SheetBottom({ id: 'sfSheet' }));
    }
    _$('#sfSheet').innerHTML = html;
    _$.init('overlay');
};

_$.fullscreenImg = src => {
    if (_$.isset(src)) {
        let oldGallery = _$('#sfGallery');
        if (_$.isset(oldGallery)) oldGallery.remove();
        let newGallery = Gallery({ src: src });
        Render(newGallery);
        newGallery.on('click', () => {
            _$('#sfGallery').fadeRemove();
        });
    }
};

_$.loading = {};
_$.loading.async = () => Render(AsyncLoadingBar());
_$.loading.sync = () => Render(SyncLoadingCircle());
_$.loading.dismiss = () => {
    let sfAsyncLoadingBar = _$('#sfAsyncLoadingBar'),
        sfSyncLoadingCircle = _$('#sfSyncLoadingCircle');
    if (_$.exists('#sfAsyncLoadingBar')) sfAsyncLoadingBar.fadeRemove();
    if (_$.exists('#sfSyncLoadingCircle')) sfSyncLoadingCircle.fadeRemove();
};

_$.snackbarId = 1;
_$.snackbar = (message, button = '') => {
    let _id = _$.snackbarId++,
        _container = _$('.snackbarContainer');
    if (button === '') {
        _container.appendChild(div({ id: 'snackItem' + _id }, message));
        let _time = message.length * 20 + 3000;
        setTimeout(() => _$('#snackItem' + _id).fadeRemove() , _time);
    }
    else {
        _container.appendChild(div({ id: 'snackItem' + _id }, message, span(button)));
        let _snackbar = _$('#snackItem' + _id);
        _snackbar.find('span')[0].on('click', () => _snackbar.fadeRemove());
    }
};

_$.darkmode = () => {
    _$('html').toggleClass('darkmode');
};

_$.inView = (element, threshold = 0) => {
    const rect = element.getBoundingClientRect(),
        vpWidth = window.innerWidth,
        vpHeight = window.innerHeight,
        above = rect && rect.bottom - threshold <= 0,
        below = rect && rect.top - vpHeight + threshold >= 0,
        left = rect && rect.right - threshold <= 0,
        right = rect && rect.left - vpWidth + threshold >= 0,
        inside = !!rect && !above && !below && !left && !right,
        any = above || below || left || right || inside;
    return { inside, above, below, left, right, any };
};

_$.loadImg = () => {
    let images = _$$('[data-src]');
    images.forEach(image => {
        let { inside } = _$.inView(image);
        if (inside === true) {
            image.attr('src', image.attr('data-src'));
            image.removeAttribute('data-src');
            _$.init('gallery')
        }
    });
};

_$.init = component => {
    switch (component) {
        case 'nav':
            _$.asyncLoad(() => {
                let items = _$('nav').find('a');
                items.forEach((item, index, list) => {
                    item.on('click', e => {
                        list.forEach(link => { link.removeClass('active') });
                        e.target.addClass('active');
                        _$('nav').removeClass('active');
                    });
                });
            });
            break;
        case 'followScroll':
            _$.asyncLoad(() => {
                let active = true;
                window.addEventListener('scroll', () => {
                    const item = _$('.followScroll').find('a:not(.link)'),
                        first = 0,
                        last = item.length - 1,
                        scrollTop = ((document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop) === 0,
                        scrolledToBottom = (window.scrollY + window.innerHeight) >= document.body.scrollHeight;
                    if (item.length > 0) {
                        if (scrollTop) {
                            if (!item[first].hasClass('active')) {
                                item.forEach(e => { e.removeClass('active') });
                                item[first].addClass('active')
                            }
                        }
                        else {
                            item.forEach(e => {
                                let { inside } = _$.inView(_$(e.attr('href')));
                                if (!active) {
                                    if (inside && !e.hasClass('active')) {
                                        e.addClass('active');
                                        active = true;
                                    }
                                }
                                else {
                                    if (!inside && e.hasClass('active')) {
                                        e.removeClass('active');
                                        active = false;
                                    }
                                }
                            });
                            if (scrolledToBottom) {
                                console.log("scrolledToBottom");
                                if (!item[last].hasClass('active')) {
                                    item.forEach(e => { e.removeClass('active') });
                                    item[last].addClass('active')
                                }
                            }
                        }
                    }
                }, _$.evtOptions);
            });
            break;
        case 'snackbar':
            Render(div({ className: 'snackbarContainer' }));
            break;
        case 'overlay':
            _$.asyncLoad(() => {
                let overlays = _$$('.overlay');
                overlays.forEach(overlay => {
                    overlay.on('click', e => {
                        if (e.target.hasClass('overlay')) {
                            overlay.fadeRemove();
                        }
                    });
                });
            });
            break;
        case 'gallery':
            _$.asyncLoad(() => {
                let galleries = _$$('.gallery');
                galleries.forEach(gallery => {
                    let images = gallery.find('img');
                    images.forEach(item => {
                        item.on('load', function () {
                            let _height = this.naturalHeight,
                                _width = item.naturalWidth;
                            if (_height < _width) {
                                item.addClass('narrower');
                            }
                        });
                        item.on('click', e => {
                            _$.fullscreenImg(e.target.attr('src'));
                        });
                    });
                });
            });
            break;
        case 'circleIndicator':
            _$.asyncLoad(() => {
                let indicators = _$$('.circleIndicator');
                indicators.forEach(indicator => {
                    let circleBG = SVGcircle();
                    circleBG.setAttribute('cx', '24');
                    circleBG.setAttribute('cy', '24');
                    circleBG.setAttribute('r', '22');
                    circleBG.style.strokeDasharray = '100 0';
                    indicator.appendChild(circleBG);
                    let circle = SVGcircle();
                    circle.setAttribute('cx', '24');
                    circle.setAttribute('cy', '24');
                    circle.setAttribute('r', '22');
                    const circumference = 44 * Math.PI;
                    circle.style.strokeDasharray = `${ circumference } ${ circumference }`;
                    circle.style.strokeDashoffset = '' + (circumference - indicator.dataset.percent / 100 * circumference);
                    indicator.appendChild(circle);
                });
                let indeterminateIndicators = _$$('.circleIndicatorIndeterminate');
                indeterminateIndicators.forEach(indicator => {
                    let circle = SVGcircle();
                    circle.setAttribute('cx', '24');
                    circle.setAttribute('cy', '24');
                    circle.setAttribute('r', '22');
                    circle.style.strokeDasharray = '1, 200';
                    circle.style.strokeDashoffset = '0';
                    indicator.appendChild(circle);
                });
            });
            break;
        case 'range':
            _$.asyncLoad(() => {
                let ranges = _$$('input[type="range"]');
                ranges.forEach(range => {
                    range.on('input', e => {
                        e.target.prev().find('.range')[0].html(e.target.value);
                    });
                });
            });
            break;
        case 'tabs':
            _$.asyncLoad(() => {
                let tabContainers = _$$('.tabs');
                tabContainers.forEach(tabContainer => {
                    tabContainer.find('.tab').forEach((tab, i, _tabs) => {
                        tab.on('click', e => {
                            _tabs.forEach(_tab => _tab.removeClass('active'));
                            e.target.addClass('active');
                        });
                    });
                });
            });
            break;
        case 'imgLazyLoad':
            window.addEventListener('scroll', _ => { _$.loadImg() }, _$.evtOptions);
            window.addEventListener('resize', _ => { _$.loadImg() }, _$.evtOptions);
            window.addEventListener('orientationchange', _ => { _$.loadImg() }, _$.evtOptions);
            break;
        case 'tooltip':
            _$.asyncLoad(() => {
                if (!_$.exists('#sfTooltip')) {
                    Render(span({ id: 'sfTooltip', className: 'tooltip' }, ''));
                    window.onscroll = () => _tooltip.removeClass('show');
                }
                let _tooltip = _$('#sfTooltip');
                let hasTooltips = _$$('[data-tooltip]');
                hasTooltips.forEach(hasTooltip => {
                    hasTooltip.on('mouseenter', e => {
                        _tooltip.html(e.target.dataset.tooltip);
                        let { right, bottom, left } = e.target.getBoundingClientRect();
                        _tooltip.style.top = (bottom + 10) + 'px';
                        _tooltip.style.left = (left + (right - left) / 2) + 'px';
                        _tooltip.style.maxWidth = (e.target.clientWidth + 10) + 'px';
                        _tooltip.style.marginLeft = '-' + (_tooltip.clientWidth / 2) + 'px';
                        _tooltip.addClass('show');
                    });
                    hasTooltip.on('mouseleave', () => _tooltip.removeClass('show'));
                    hasTooltip.on('touchstart', e => {
                        _tooltip.html(e.target.dataset.tooltip);
                        let { right, bottom, left } = e.target.getBoundingClientRect();
                        _tooltip.style.top = (bottom + 10) + 'px';
                        _tooltip.style.left = (left + (right - left) / 2) + 'px';
                        _tooltip.style.maxWidth = (e.target.clientWidth + 10) + 'px';
                        _tooltip.style.marginLeft = '-' + (_tooltip.clientWidth / 2) + 'px';
                        _tooltip.toggleClass('show');
                    });
                });
            });
            break;
        default:
    }
};

_$.ready(() => {
    _$.init('nav');
    _$.init('followScroll');
    _$.init('snackbar');
    _$.init('gallery');
    _$.init('circleIndicator');
    _$.init('range');
    _$.init('tabs');
    _$.init('tooltip');
    _$.init('imgLazyLoad');
    document.body.style.opacity = '1';
});