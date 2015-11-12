// Avoid `console` errors in browsers that lack a console
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

// Font Smoothie copyright 2013,14,15 Torben Haase <http://pixelsvsbytes.com>
// Source-URL <https://gist.github.com/letorbi/5177771>
(function(){function a(){function e(a){if(null===a.cssRules)return console.warn("Fontsmoothie warning: Browser blocks access to CSS rules in "+a.href);for(var b=a.href||location.href,b=new RegExp(b.substring(0,b.lastIndexOf("/")).replace(/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&"),"g"),c,f=0;c=a.cssRules[f];f++){if(c.style&&c.style.src&&(c.style.src=c.style.src.replace(b,".").replace(/([^;]*?),\s*(url\(\S*? format\(["']?svg["']?\))([\s,]*[^;]+|)/,"$2, $1$3"),window.opera)){var d=c.cssText;a.deleteRule(f); a.insertRule(d,f)}c.styleSheet&&e(c.styleSheet)}}try{var a=document.getElementsByTagName("HEAD")[0],h=a.appendChild(document.createElement("CANVAS")),b=h.getContext("2d");b.textBaseline="top";b.font="32px Arial";b.fillText("O",0,0);for(var d,k=0;255==b.getImageData(5,8,1,1).data[3]&&(d=document.styleSheets[k]);k++)d&&e(d);a.removeChild(h)}catch(g){throw g;}}if(-1<navigator.userAgent.toLowerCase().indexOf("windows nt 5.1"))if("complete"==document.readyState)a();else{var g=window.onload;window.onload= window.onload?function(e){g(e);a()}:a}})();


/*
 Sticky-kit v1.1.1 | WTFPL | Leaf Corcoran 2014 | http://leafo.net
*/
(function () {
    var k, e; k = this.jQuery || window.jQuery; e = k(window); k.fn.stick_in_parent = function (d) {
        var v, y, n, p, h, C, s, G, q, H; null == d && (d = {}); s = d.sticky_class; y = d.inner_scrolling; C = d.recalc_every; h = d.parent; p = d.offset_top; n = d.spacer; v = d.bottoming; null == p && (p = 0); null == h && (h = void 0); null == y && (y = !0); null == s && (s = "is_stuck"); null == v && (v = !0); G = function (a, d, q, z, D, t, r, E) {
            var u, F, m, A, c, f, B, w, x, g, b; if (!a.data("sticky_kit")) {
                a.data("sticky_kit", !0); f = a.parent(); null != h && (f = f.closest(h)); if (!f.length) throw "failed to find stick parent";
                u = m = !1; (g = null != n ? n && a.closest(n) : k("<div />")) && g.css("position", a.css("position")); B = function () {
                    var c, e, l; if (!E && (c = parseInt(f.css("border-top-width"), 10), e = parseInt(f.css("padding-top"), 10), d = parseInt(f.css("padding-bottom"), 10), q = f.offset().top + c + e, z = f.height(), m && (u = m = !1, null == n && (a.insertAfter(g), g.detach()), a.css({ position: "", top: "", width: "", bottom: "" }).removeClass(s), l = !0), D = a.offset().top - parseInt(a.css("margin-top"), 10) - p, t = a.outerHeight(!0), r = a.css("float"), g && g.css({
                        width: a.outerWidth(!0),
                        height: t, display: a.css("display"), "vertical-align": a.css("vertical-align"), "float": r
                    }), l)) return b()
                }; B(); if (t !== z) return A = void 0, c = p, x = C, b = function () {
                    var b, k, l, h; if (!E && (null != x && (--x, 0 >= x && (x = C, B())), l = e.scrollTop(), null != A && (k = l - A), A = l, m ? (v && (h = l + t + c > z + q, u && !h && (u = !1, a.css({ position: "fixed", bottom: "", top: c }).trigger("sticky_kit:unbottom"))), l < D && (m = !1, c = p, null == n && ("left" !== r && "right" !== r || a.insertAfter(g), g.detach()), b = { position: "", width: "", top: "" }, a.css(b).removeClass(s).trigger("sticky_kit:unstick")),
                    y && (b = e.height(), t + p > b && !u && (c -= k, c = Math.max(b - t, c), c = Math.min(p, c), m && a.css({ top: c + "px" })))) : l > D && (m = !0, b = { position: "fixed", top: c }, b.width = "border-box" === a.css("box-sizing") ? a.outerWidth() + "px" : a.width() + "px", a.css(b).addClass(s), null == n && (a.after(g), "left" !== r && "right" !== r || g.append(a)), a.trigger("sticky_kit:stick")), m && v && (null == h && (h = l + t + c > z + q), !u && h))) return u = !0, "static" === f.css("position") && f.css({ position: "relative" }), a.css({ position: "absolute", bottom: d, top: "auto" }).trigger("sticky_kit:bottom")
                },
                w = function () { B(); return b() }, F = function () { E = !0; e.off("touchmove", b); e.off("scroll", b); e.off("resize", w); k(document.body).off("sticky_kit:recalc", w); a.off("sticky_kit:detach", F); a.removeData("sticky_kit"); a.css({ position: "", bottom: "", top: "", width: "" }); f.position("position", ""); if (m) return null == n && ("left" !== r && "right" !== r || a.insertAfter(g), g.remove()), a.removeClass(s) }, e.on("touchmove", b), e.on("scroll", b), e.on("resize", w), k(document.body).on("sticky_kit:recalc", w), a.on("sticky_kit:detach", F), setTimeout(b,
                0)
            }
        }; q = 0; for (H = this.length; q < H; q++) d = this[q], G(k(d)); return this
    }
}).call(this);

/*!
 * imagesLoaded PACKAGED v3.1.8
 * JavaScript is all like "You images are done yet or what?"
 * MIT License
 */

(function () { function e() { } function t(e, t) { for (var n = e.length; n--;) if (e[n].listener === t) return n; return -1 } function n(e) { return function () { return this[e].apply(this, arguments) } } var i = e.prototype, r = this, o = r.EventEmitter; i.getListeners = function (e) { var t, n, i = this._getEvents(); if ("object" == typeof e) { t = {}; for (n in i) i.hasOwnProperty(n) && e.test(n) && (t[n] = i[n]) } else t = i[e] || (i[e] = []); return t }, i.flattenListeners = function (e) { var t, n = []; for (t = 0; e.length > t; t += 1) n.push(e[t].listener); return n }, i.getListenersAsObject = function (e) { var t, n = this.getListeners(e); return n instanceof Array && (t = {}, t[e] = n), t || n }, i.addListener = function (e, n) { var i, r = this.getListenersAsObject(e), o = "object" == typeof n; for (i in r) r.hasOwnProperty(i) && -1 === t(r[i], n) && r[i].push(o ? n : { listener: n, once: !1 }); return this }, i.on = n("addListener"), i.addOnceListener = function (e, t) { return this.addListener(e, { listener: t, once: !0 }) }, i.once = n("addOnceListener"), i.defineEvent = function (e) { return this.getListeners(e), this }, i.defineEvents = function (e) { for (var t = 0; e.length > t; t += 1) this.defineEvent(e[t]); return this }, i.removeListener = function (e, n) { var i, r, o = this.getListenersAsObject(e); for (r in o) o.hasOwnProperty(r) && (i = t(o[r], n), -1 !== i && o[r].splice(i, 1)); return this }, i.off = n("removeListener"), i.addListeners = function (e, t) { return this.manipulateListeners(!1, e, t) }, i.removeListeners = function (e, t) { return this.manipulateListeners(!0, e, t) }, i.manipulateListeners = function (e, t, n) { var i, r, o = e ? this.removeListener : this.addListener, s = e ? this.removeListeners : this.addListeners; if ("object" != typeof t || t instanceof RegExp) for (i = n.length; i--;) o.call(this, t, n[i]); else for (i in t) t.hasOwnProperty(i) && (r = t[i]) && ("function" == typeof r ? o.call(this, i, r) : s.call(this, i, r)); return this }, i.removeEvent = function (e) { var t, n = typeof e, i = this._getEvents(); if ("string" === n) delete i[e]; else if ("object" === n) for (t in i) i.hasOwnProperty(t) && e.test(t) && delete i[t]; else delete this._events; return this }, i.removeAllListeners = n("removeEvent"), i.emitEvent = function (e, t) { var n, i, r, o, s = this.getListenersAsObject(e); for (r in s) if (s.hasOwnProperty(r)) for (i = s[r].length; i--;) n = s[r][i], n.once === !0 && this.removeListener(e, n.listener), o = n.listener.apply(this, t || []), o === this._getOnceReturnValue() && this.removeListener(e, n.listener); return this }, i.trigger = n("emitEvent"), i.emit = function (e) { var t = Array.prototype.slice.call(arguments, 1); return this.emitEvent(e, t) }, i.setOnceReturnValue = function (e) { return this._onceReturnValue = e, this }, i._getOnceReturnValue = function () { return this.hasOwnProperty("_onceReturnValue") ? this._onceReturnValue : !0 }, i._getEvents = function () { return this._events || (this._events = {}) }, e.noConflict = function () { return r.EventEmitter = o, e }, "function" == typeof define && define.amd ? define("eventEmitter/EventEmitter", [], function () { return e }) : "object" == typeof module && module.exports ? module.exports = e : this.EventEmitter = e }).call(this), function (e) { function t(t) { var n = e.event; return n.target = n.target || n.srcElement || t, n } var n = document.documentElement, i = function () { }; n.addEventListener ? i = function (e, t, n) { e.addEventListener(t, n, !1) } : n.attachEvent && (i = function (e, n, i) { e[n + i] = i.handleEvent ? function () { var n = t(e); i.handleEvent.call(i, n) } : function () { var n = t(e); i.call(e, n) }, e.attachEvent("on" + n, e[n + i]) }); var r = function () { }; n.removeEventListener ? r = function (e, t, n) { e.removeEventListener(t, n, !1) } : n.detachEvent && (r = function (e, t, n) { e.detachEvent("on" + t, e[t + n]); try { delete e[t + n] } catch (i) { e[t + n] = void 0 } }); var o = { bind: i, unbind: r }; "function" == typeof define && define.amd ? define("eventie/eventie", o) : e.eventie = o }(this), function (e, t) { "function" == typeof define && define.amd ? define(["eventEmitter/EventEmitter", "eventie/eventie"], function (n, i) { return t(e, n, i) }) : "object" == typeof exports ? module.exports = t(e, require("wolfy87-eventemitter"), require("eventie")) : e.imagesLoaded = t(e, e.EventEmitter, e.eventie) }(window, function (e, t, n) { function i(e, t) { for (var n in t) e[n] = t[n]; return e } function r(e) { return "[object Array]" === d.call(e) } function o(e) { var t = []; if (r(e)) t = e; else if ("number" == typeof e.length) for (var n = 0, i = e.length; i > n; n++) t.push(e[n]); else t.push(e); return t } function s(e, t, n) { if (!(this instanceof s)) return new s(e, t); "string" == typeof e && (e = document.querySelectorAll(e)), this.elements = o(e), this.options = i({}, this.options), "function" == typeof t ? n = t : i(this.options, t), n && this.on("always", n), this.getImages(), a && (this.jqDeferred = new a.Deferred); var r = this; setTimeout(function () { r.check() }) } function f(e) { this.img = e } function c(e) { this.src = e, v[e] = this } var a = e.jQuery, u = e.console, h = u !== void 0, d = Object.prototype.toString; s.prototype = new t, s.prototype.options = {}, s.prototype.getImages = function () { this.images = []; for (var e = 0, t = this.elements.length; t > e; e++) { var n = this.elements[e]; "IMG" === n.nodeName && this.addImage(n); var i = n.nodeType; if (i && (1 === i || 9 === i || 11 === i)) for (var r = n.querySelectorAll("img"), o = 0, s = r.length; s > o; o++) { var f = r[o]; this.addImage(f) } } }, s.prototype.addImage = function (e) { var t = new f(e); this.images.push(t) }, s.prototype.check = function () { function e(e, r) { return t.options.debug && h && u.log("confirm", e, r), t.progress(e), n++, n === i && t.complete(), !0 } var t = this, n = 0, i = this.images.length; if (this.hasAnyBroken = !1, !i) return this.complete(), void 0; for (var r = 0; i > r; r++) { var o = this.images[r]; o.on("confirm", e), o.check() } }, s.prototype.progress = function (e) { this.hasAnyBroken = this.hasAnyBroken || !e.isLoaded; var t = this; setTimeout(function () { t.emit("progress", t, e), t.jqDeferred && t.jqDeferred.notify && t.jqDeferred.notify(t, e) }) }, s.prototype.complete = function () { var e = this.hasAnyBroken ? "fail" : "done"; this.isComplete = !0; var t = this; setTimeout(function () { if (t.emit(e, t), t.emit("always", t), t.jqDeferred) { var n = t.hasAnyBroken ? "reject" : "resolve"; t.jqDeferred[n](t) } }) }, a && (a.fn.imagesLoaded = function (e, t) { var n = new s(this, e, t); return n.jqDeferred.promise(a(this)) }), f.prototype = new t, f.prototype.check = function () { var e = v[this.img.src] || new c(this.img.src); if (e.isConfirmed) return this.confirm(e.isLoaded, "cached was confirmed"), void 0; if (this.img.complete && void 0 !== this.img.naturalWidth) return this.confirm(0 !== this.img.naturalWidth, "naturalWidth"), void 0; var t = this; e.on("confirm", function (e, n) { return t.confirm(e.isLoaded, n), !0 }), e.check() }, f.prototype.confirm = function (e, t) { this.isLoaded = e, this.emit("confirm", this, t) }; var v = {}; return c.prototype = new t, c.prototype.check = function () { if (!this.isChecked) { var e = new Image; n.bind(e, "load", this), n.bind(e, "error", this), e.src = this.src, this.isChecked = !0 } }, c.prototype.handleEvent = function (e) { var t = "on" + e.type; this[t] && this[t](e) }, c.prototype.onload = function (e) { this.confirm(!0, "onload"), this.unbindProxyEvents(e) }, c.prototype.onerror = function (e) { this.confirm(!1, "onerror"), this.unbindProxyEvents(e) }, c.prototype.confirm = function (e, t) { this.isConfirmed = !0, this.isLoaded = e, this.emit("confirm", this, t) }, c.prototype.unbindProxyEvents = function (e) { n.unbind(e.target, "load", this), n.unbind(e.target, "error", this) }, s });




//Application Scripts
jQuery(document).ready(function ($) {
    var breakpoint = 780;
    
    //placeholder helper
    if (!Modernizr.input.placeholder) {

        $('[placeholder]').focus(function () {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
                input.val('');
                input.removeClass('placeholder');
            }
        }).blur(function () {
            var input = $(this);
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.addClass('placeholder');
                input.val(input.attr('placeholder'));
            }
        }).blur();
        $('[placeholder]').parents('form').submit(function () {
            $(this).find('[placeholder]').each(function () {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            })
        });
    };
    
    //sticky aside subscribe form 
    var $wnd = $(window),
        offset_top = 114,
        $subscribe_form=$('#subscribe');

    function sticky_form() {
        var w = $wnd.width();
        if (w > breakpoint) {
            $subscribe_form.stick_in_parent({//fixed position
                parent: $('#content'),
                offset_top: offset_top,
                recalc_every: 3
            });
        } else {
            $subscribe_form.trigger("sticky_kit:detach"); //static position for small resolutions
        }
    }

    $('#content, .post-img' ).imagesLoaded(function () {
        sticky_form();
    });
    

    $wnd.on('resize', function () {
        setTimeout(sticky_form, 200);
    });

    //SVG fallback
    if (!Modernizr.svg) {
        $('img[src*="svg"]').attr('src', function () {
            return $(this).attr('src').replace('.svg', '.png');
        });
    }


    //make single post images responsives
    $('#content main.single-post > article img').addClass('max-full-width');

    //notices
    $(document).on('click', '.notice a[class^="icon-remove"]', function (e) {
        e.preventDefault();
        var notice = $(this).parents('.notice');
        $(this).hide();
        notice.fadeOut('slow');
    });

    //scroll to section (link on Product Page menu)
    $('.blog-header').on('click', '[data-scroll]', function (e) {
        e.preventDefault();
        var target = $(this).attr('href');
        if (target) {
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 800);
        }
    });
});
