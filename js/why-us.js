
window.nitro_lazySizesConfig = window.nitro_lazySizesConfig || {};
window.nitro_lazySizesConfig.lazyClass = "nitro-lazy";
nitro_lazySizesConfig.srcAttr = "nitro-lazy-src";
nitro_lazySizesConfig.srcsetAttr = "nitro-lazy-srcset";
nitro_lazySizesConfig.expand = 10;
nitro_lazySizesConfig.expFactor = 1;
nitro_lazySizesConfig.hFac = 1;
nitro_lazySizesConfig.loadMode = 1;
nitro_lazySizesConfig.ricTimeout = 50;
nitro_lazySizesConfig.loadHidden = true;
(function() {
    var t = null;
    var e = false;
    var a = false;
    var i = window.scrollY;
    var r = Date.now();

    function n() {
        window.removeEventListener("scroll", n);
        window.nitro_lazySizesConfig.expand = 300
    }

    function o(t) {
        let e = t.timeStamp - r;
        let a = Math.abs(i - window.scrollY) / e;
        let n = Math.max(a * 200, 300);
        r = t.timeStamp;
        i = window.scrollY;
        window.nitro_lazySizesConfig.expand = n
    }
    window.addEventListener("scroll", o, {
        passive: true
    });
    window.addEventListener("NitroStylesLoaded", function() {
        e = true
    });
    window.addEventListener("load", function() {
        a = true
    });
    document.addEventListener("lazybeforeunveil", function(t) {
        var e = false;
        var a = t.target.getAttribute("nitro-lazy-bg");
        var i = t.target.getAttribute("data-nitro-fragment-id");
        if (a) {
            let i = t.target.style.backgroundImage.replace("data:image/gif;base64,R0lGODlhAQABAIABAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==", a.replace(/\(/g, "%28").replace(/\)/g, "%29"));
            if (i === t.target.style.backgroundImage) {
                i = "url(" + a.replace(/\(/g, "%28").replace(/\)/g, "%29") + ")"
            }
            let r = t.target.style.backgroundImage;
            let n = ["initial", "inherit"].indexOf(r.toLowerCase()) === -1;
            if (r && n) {
                i = r + ", " + i
            }
            t.target.style.backgroundImage = i;
            e = true
        }
        if (t.target.tagName == "VIDEO") {
            if (t.target.hasAttribute("nitro-lazy-poster")) {
                t.target.setAttribute("poster", t.target.getAttribute("nitro-lazy-poster"))
            } else if (!t.target.hasAttribute("poster")) {
                t.target.setAttribute("preload", "metadata")
            }
            e = true
        }
        if (i) {
            if (!window.loadNitroFragment(i, "lazy")) {
                t.preventDefault();
                return false
            }
        }
        if (t.target.classList.contains("av-animated-generic")) {
            t.target.classList.add("avia_start_animation", "avia_start_delayed_animation");
            e = true
        }
        if (!e) {
            var r = t.target.tagName.toLowerCase();
            if (r !== "img" && r !== "iframe") {
                t.target.querySelectorAll("img[nitro-lazy-src],img[nitro-lazy-srcset]").forEach(function(t) {
                    t.classList.add("nitro-lazy")
                })
            }
        }
    })
})();


(function(e, t) {
    if (typeof module == "object" && module.exports) {
        module.exports = lazySizes
    } else {
        e.lazySizes = t(e, e.document, Date)
    }
})(window, function e(e, t, r) {
    "use strict";
    if (!e.IntersectionObserver || !t.getElementsByClassName || !e.MutationObserver) {
        return
    }
    var i, n;
    var a = t.documentElement;
    var s = e.HTMLPictureElement;
    var o = "addEventListener";
    var l = "getAttribute";
    var c = e[o].bind(e);
    var u = e.setTimeout;
    var f = e.requestAnimationFrame || u;
    var d = e.requestIdleCallback || u;
    var v = /^picture$/i;
    var m = ["load", "error", "lazyincluded", "_lazyloaded"];
    var g = Array.prototype.forEach;
    var p = function(e, t) {
        return e.classList.contains(t)
    };
    var z = function(e, t) {
        e.classList.add(t)
    };
    var h = function(e, t) {
        e.classList.remove(t)
    };
    var y = function(e, t, r) {
        var i = r ? o : "removeEventListener";
        if (r) {
            y(e, t)
        }
        m.forEach(function(r) {
            e[i](r, t)
        })
    };
    var b = function(e, r, n, a, s) {
        var o = t.createEvent("CustomEvent");
        if (!n) {
            n = {}
        }
        n.instance = i;
        o.initCustomEvent(r, !a, !s, n);
        e.dispatchEvent(o);
        return o
    };
    var C = function(t, r) {
        var i;
        if (!s && (i = e.picturefill || n.pf)) {
            i({
                reevaluate: true,
                elements: [t]
            })
        } else if (r && r.src) {
            t.src = r.src
        }
    };
    var w = function(e, t) {
        return (getComputedStyle(e, null) || {})[t]
    };
    var E = function(e, t, r) {
        r = r || e.offsetWidth;
        while (r < n.minSize && t && !e._lazysizesWidth) {
            r = t.offsetWidth;
            t = t.parentNode
        }
        return r
    };
    var A = function() {
        var e, r;
        var i = [];
        var n = function() {
            var t;
            e = true;
            r = false;
            while (i.length) {
                t = i.shift();
                t[0].apply(t[1], t[2])
            }
            e = false
        };
        return function(a) {
            if (e) {
                a.apply(this, arguments)
            } else {
                i.push([a, this, arguments]);
                if (!r) {
                    r = true;
                    (t.hidden ? u : f)(n)
                }
            }
        }
    }();
    var x = function(e, t) {
        return t ? function() {
            A(e)
        } : function() {
            var t = this;
            var r = arguments;
            A(function() {
                e.apply(t, r)
            })
        }
    };
    var L = function(e) {
        var t;
        var i = 0;
        var a = n.throttleDelay;
        var s = n.ricTimeout;
        var o = function() {
            t = false;
            i = r.now();
            e()
        };
        var l = d && s > 49 ? function() {
            d(o, {
                timeout: s
            });
            if (s !== n.ricTimeout) {
                s = n.ricTimeout
            }
        } : x(function() {
            u(o)
        }, true);
        return function(e) {
            var n;
            if (e = e === true) {
                s = 33
            }
            if (t) {
                return
            }
            t = true;
            n = a - (r.now() - i);
            if (n < 0) {
                n = 0
            }
            if (e || n < 9) {
                l()
            } else {
                u(l, n)
            }
        }
    };
    var T = function(e) {
        var t, i;
        var n = 99;
        var a = function() {
            t = null;
            e()
        };
        var s = function() {
            var e = r.now() - i;
            if (e < n) {
                u(s, n - e)
            } else {
                (d || a)(a)
            }
        };
        return function() {
            i = r.now();
            if (!t) {
                t = u(s, n)
            }
        }
    };
    var _ = function() {
        var i, s;
        var o, f, d, m, E;
        var T;
        var _ = new Set;
        var M = new Map;
        var R = /^img$/i;
        var W = /^iframe$/i;
        var O = "onscroll" in e && !/glebot/.test(navigator.userAgent);
        var S = 0;
        var F = 0;
        var I = function(e) {
            S--;
            if (F) {
                F--
            }
            if (e && e.target) {
                y(e.target, I)
            }
            if (!e || S < 0 || !e.target) {
                S = 0;
                F = 0
            }
            if (J.length && S - F < 1 && S < 3) {
                u(function() {
                    while (J.length && S - F < 1 && S < 4) {
                        K({
                            target: J.shift()
                        })
                    }
                })
            }
        };
        var P = function(e) {
            if (T == null) {
                T = w(t.body, "visibility") == "hidden"
            }
            return T || !(w(e.parentNode, "visibility") == "hidden" && w(e, "visibility") == "hidden")
        };
        var B = function(e) {
            z(e.target, n.loadedClass);
            h(e.target, n.loadingClass);
            h(e.target, n.lazyClass);
            y(e.target, $)
        };
        var D = x(B);
        var $ = function(e) {
            D({
                target: e.target
            })
        };
        var k = function(e, t) {
            try {
                e.contentWindow.location.replace(t)
            } catch (r) {
                e.src = t
            }
        };
        var q = function(e) {
            var t;
            var r = e[l](n.srcsetAttr);
            if (t = n.customMedia[e[l]("data-media") || e[l]("media")]) {
                e.setAttribute("media", t)
            }
            if (r) {
                e.setAttribute("srcset", r)
            }
        };
        var H = x(function(e, t, r, i, a) {
            var s, o, c, f, d, p;
            if (!(d = b(e, "lazybeforeunveil", t)).defaultPrevented) {
                if (i) {
                    if (r) {
                        z(e, n.autosizesClass)
                    } else {
                        e.setAttribute("sizes", i)
                    }
                }
                o = e[l](n.srcsetAttr);
                s = e[l](n.srcAttr);
                if (a) {
                    c = e.parentNode;
                    f = c && v.test(c.nodeName || "")
                }
                p = t.firesLoad || "src" in e && (o || s || f);
                d = {
                    target: e
                };
                if (p) {
                    y(e, I, true);
                    clearTimeout(m);
                    m = u(I, 2500);
                    z(e, n.loadingClass);
                    y(e, $, true)
                }
                if (f) {
                    g.call(c.getElementsByTagName("source"), q)
                }
                if (o) {
                    e.setAttribute("srcset", o)
                } else if (s && !f) {
                    if (W.test(e.nodeName)) {
                        k(e, s)
                    } else {
                        e.src = s
                    }
                }
                if (o || f) {
                    C(e, {
                        src: s
                    })
                }
            }
            A(function() {
                if (e._lazyRace) {
                    delete e._lazyRace
                }
                if (!p || e.complete) {
                    if (p) {
                        I(d)
                    } else {
                        S--
                    }
                    B(d)
                }
            })
        });
        var j = function(e) {
            if (n.isPaused) return;
            var t, r;
            var a = R.test(e.nodeName);
            var o = a && (e[l](n.sizesAttr) || e[l]("sizes"));
            var c = o == "auto";
            if ((c || !d) && a && (e.src || e.srcset) && !e.complete && !p(e, n.errorClass)) {
                return
            }
            t = b(e, "lazyunveilread").detail;
            if (c) {
                N.updateElem(e, true, e.offsetWidth)
            }
            S++;
            if ((r = J.indexOf(e)) != -1) {
                J.splice(r, 1)
            }
            M.delete(e);
            _.delete(e);
            i.unobserve(e);
            s.unobserve(e);
            H(e, t, c, o, a)
        };
        var G = function(e) {
            var t, r;
            for (t = 0, r = e.length; t < r; t++) {
                if (e[t].isIntersecting === false) {
                    continue
                }
                j(e[t].target)
            }
        };
        var J = [];
        var K = function(e, r) {
            var i, n, a, s;
            for (n = 0, a = e.length; n < a; n++) {
                if (r && e[n].boundingClientRect.width > 0 && e[n].boundingClientRect.height > 0) {
                    M.set(e[n].target, {
                        rect: e[n].boundingClientRect,
                        scrollTop: t.documentElement.scrollTop,
                        scrollLeft: t.documentElement.scrollLeft
                    })
                }
                if (e[n].boundingClientRect.bottom <= 0 && e[n].boundingClientRect.right <= 0 && e[n].boundingClientRect.left <= 0 && e[n].boundingClientRect.top <= 0) {
                    continue
                }
                if (!e[n].isIntersecting) {
                    continue
                }
                s = e[n].target;
                if (S - F < 1 && S < 4) {
                    F++;
                    j(s)
                } else if ((i = J.indexOf(s)) == -1) {
                    J.push(s)
                } else {
                    J.splice(i, 1)
                }
            }
        };
        var Q = function() {
            var e, t;
            for (e = 0, t = o.length; e < t; e++) {
                if (!o[e]._lazyAdd && !o[e].classList.contains(n.loadedClass)) {
                    o[e]._lazyAdd = true;
                    i.observe(o[e]);
                    s.observe(o[e]);
                    _.add(o[e]);
                    if (!O) {
                        j(o[e])
                    }
                }
            }
        };
        var U = function() {
            if (n.isPaused) return;
            if (M.size === 0) return;
            const r = t.documentElement.scrollTop;
            const i = t.documentElement.scrollLeft;
            T = null;
            const a = r + e.innerHeight + n.expand;
            const s = i + e.innerWidth + n.expand * n.hFac;
            const o = r - n.expand;
            const l = (i - n.expand) * n.hFac;
            for (let e of M) {
                const [t, r] = e;
                const i = r.rect.top + r.scrollTop;
                const n = r.rect.bottom + r.scrollTop;
                const c = r.rect.left + r.scrollLeft;
                const u = r.rect.right + r.scrollLeft;
                if (n >= o && i <= a && u >= l && c <= s && P(t)) {
                    j(t)
                }
            }
        };
        return {
            _: function() {
                E = r.now();
                o = t.getElementsByClassName(n.lazyClass);
                i = new IntersectionObserver(G);
                s = new IntersectionObserver(K, {
                    rootMargin: n.expand + "px " + n.expand * n.hFac + "px"
                });
                const e = new ResizeObserver(e => {
                    if (_.size === 0) return;
                    s.disconnect();
                    s = new IntersectionObserver(K, {
                        rootMargin: n.expand + "px " + n.expand * n.hFac + "px"
                    });
                    M = new Map;
                    for (let e of _) {
                        s.observe(e)
                    }
                });
                e.observe(t.documentElement);
                c("scroll", L(U), true);
                new MutationObserver(Q).observe(a, {
                    childList: true,
                    subtree: true,
                    attributes: true
                });
                Q()
            },
            unveil: j
        }
    }();
    var N = function() {
        var e;
        var r = x(function(e, t, r, i) {
            var n, a, s;
            e._lazysizesWidth = i;
            i += "px";
            e.setAttribute("sizes", i);
            if (v.test(t.nodeName || "")) {
                n = t.getElementsByTagName("source");
                for (a = 0, s = n.length; a < s; a++) {
                    n[a].setAttribute("sizes", i)
                }
            }
            if (!r.detail.dataAttr) {
                C(e, r.detail)
            }
        });
        var i = function(e, t, i) {
            var n;
            var a = e.parentNode;
            if (a) {
                i = E(e, a, i);
                n = b(e, "lazybeforesizes", {
                    width: i,
                    dataAttr: !!t
                });
                if (!n.defaultPrevented) {
                    i = n.detail.width;
                    if (i && i !== e._lazysizesWidth) {
                        r(e, a, n, i)
                    }
                }
            }
        };
        var a = function() {
            var t;
            var r = e.length;
            if (r) {
                t = 0;
                for (; t < r; t++) {
                    i(e[t])
                }
            }
        };
        var s = T(a);
        return {
            _: function() {
                e = t.getElementsByClassName(n.autosizesClass);
                c("resize", s)
            },
            checkElems: s,
            updateElem: i
        }
    }();
    var M = function() {
        if (!M.i) {
            M.i = true;
            N._();
            _._()
        }
    };
    (function() {
        var t;
        var r = {
            lazyClass: "lazyload",
            lazyWaitClass: "lazyloadwait",
            loadedClass: "lazyloaded",
            loadingClass: "lazyloading",
            preloadClass: "lazypreload",
            errorClass: "lazyerror",
            autosizesClass: "lazyautosizes",
            srcAttr: "data-src",
            srcsetAttr: "data-srcset",
            sizesAttr: "data-sizes",
            minSize: 40,
            customMedia: {},
            init: true,
            hFac: .8,
            loadMode: 2,
            expand: 400,
            ricTimeout: 0,
            throttleDelay: 125,
            isPaused: false
        };
        n = e.nitro_lazySizesConfig || e.nitro_lazysizesConfig || {};
        for (t in r) {
            if (!(t in n)) {
                n[t] = r[t]
            }
        }
        u(function() {
            if (n.init) {
                M()
            }
        })
    })();
    i = {
        cfg: n,
        autoSizer: N,
        loader: _,
        init: M,
        uP: C,
        aC: z,
        rC: h,
        hC: p,
        fire: b,
        gW: E,
        rAF: A
    };
    return i
});
