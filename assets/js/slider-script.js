jQuery.extend(jQuery.easing, {
    easeInOutCubic: function(e, f, a, h, g) {
        if ((f /= g / 2) < 1) {
            return h / 2 * f * f * f + a
        }
        return h / 2 * ((f -= 2) * f * f + 2) + a
    }
});

function rai_shift(k, i, c) {
    var d = jQuery;
    var h = d(this);
    var b = c.find("li");
    var f = c.find(".rai_list");
    var e = {
        position: "absolute",
        top: 0,
        left: 0,
        width: "100%",
        height: "100%",
        overflow: "hidden",
        zIndex: -9
    };
    var g = d("<div>").addClass("rai_effect rai_shift").css(e).appendTo(c);
    var a = d("<div>").css(e).css({
        display: "none",
        zIndex: 4
    }).appendTo(g);
    var j = d("<div>").css(e).css({
        display: "none",
        zIndex: 3
    }).appendTo(g);
    this.go = function(l, p, n) {
        var m = c.width();
        var o = c.height();
        a.append(d(i.get(l)).clone());
        j.append(d(i.get(p)).clone());
        if (k.responsive < 3) {
            a.find("img").css("width", "100%");
            j.find("img").css("width", "100%")
        }
        f.stop(true, true).hide().css({
            left: -l + "00%"
        });
        var q = {
            left: [{
                left: -m
            }, {
                left: 0
            }],
            right: [{
                left: m
            }, {
                left: 0
            }],
            down: [{
                top: o
            }, {
                top: 0
            }],
            up: [{
                top: -o
            }, {
                top: 0
            }]
        }[k.direction || ["left", "right", "down", "up"][Math.floor(Math.random() * 4)]];
        if (k.support.transform) {
            if (q[0].left) {
                q[0] = {
                    translate: [q[0].left, 0, 0]
                }
            } else {
                q[0] = {
                    translate: [0, q[0].top, 0]
                }
            }
            q[1] = {
                translate: [0, 0, 0]
            }
        }
        a.show();
        j.show();
        raiAnimate(a, q[0], q[1], k.duration, "easeInOutCubic", function() {
            f.show();
            a.hide().html("");
            j.hide().html("");
            h.trigger("effectEnd")
        });
        raiAnimate(j, {
            scale: 1,
            translate: [0, 0, 0]
        }, {
            scale: 0.5,
            translate: [0, 0, 0]
        }, k.duration, "easeInOutCubic")
    }
}; // -----------------------------------------------------------------------------------

jQuery.extend(jQuery.easing, {
    easeInBack: function(e, f, a, i, h, g) {
        if (g == undefined) {
            g = 1.70158
        }
        return i * (f /= h) * f * ((g + 1) * f - g) + a
    },
    easeOutBack: function(e, f, a, i, h, g) {
        if (g == undefined) {
            g = 1.70158
        }
        return i * ((f = f / h - 1) * f * ((g + 1) * f + g) + 1) + a
    },
    easeInBackQ: function(e, f, a, j, i, g) {
        var h = (f /= i) * f;
        return a + j * h * (4 * f * h - 8 * h + 8 * f - 3)
    },
    easeOutBackQ: function(e, f, a, j, i, g) {
        var h = (f /= i) * f;
        return a + j * (4 * h * f * h - 12 * h * h + 16 * h * f - 13 * h + 6 * f)
    },
    easeInBackQ2: function(e, f, a, j, i, g) {
        var h = (f /= i) * f;
        return a + j * h * (1.5 * f * h - 2.5 * h + 5 * f - 3)
    },
    easeOutBackQ2: function(e, f, a, j, i, g) {
        var h = (f /= i) * f;
        return a + j * (1.5 * h * f * h - 5 * h * h + 10 * h * f - 12 * h + 6.5 * f)
    }
});

function rai_brick(f, s, g) {
    var h = jQuery,
        n = h(this),
        a = f.cols || 4,
        r = f.rows || 3,
        H = 2.5,
        c = 2,
        v = f.perspective || 2000,
        u = g.find(".rai_list"),
        G = [],
        b = 30,
        x = {},
        o = h("<div>").addClass("rai_effect rai_brick").appendTo(g),
        q = f.support.transform && f.support.transition && f.support.perspective,
        p = /Safari/.test(navigator.userAgent) && !/Chrome/.test(navigator.userAgent),
        m = /Firefox/.test(navigator.userAgent);
    var y = [{
        zIndex: 0,
        rotateX: 360,
        rotateZ: -360,
        rotateY: 180,
        halfScale: 0.5,
        halfLeft: 0.7,
        halfTop: 0.7,
        delay: 0.36
    }, {
        zIndex: 1,
        rotateX: -360,
        rotateZ: 360,
        rotateY: 180,
        halfScale: 0.5,
        halfLeft: 0.2,
        halfTop: 0.4,
        delay: 0.81
    }, {
        zIndex: 1,
        rotateX: 360,
        rotateZ: -360,
        rotateY: -180,
        halfScale: 0.5,
        halfLeft: -0.2,
        halfTop: 0.4,
        delay: 0.45
    }, {
        zIndex: 0,
        rotateX: -360,
        rotateZ: 360,
        rotateY: -180,
        halfScale: 0.5,
        halfLeft: -0.7,
        halfTop: 0.7,
        delay: 0.63
    }, {
        zIndex: 1,
        rotateX: -360,
        rotateZ: 360,
        rotateY: -180,
        halfScale: 0.5,
        halfLeft: 0.7,
        halfTop: 0,
        delay: 0.54
    }, {
        zIndex: 2,
        rotateX: 360,
        rotateZ: -360,
        rotateY: 180,
        halfScale: 0.5,
        halfLeft: 0.2,
        halfTop: 0,
        delay: 0.38
    }, {
        zIndex: 2,
        rotateX: 360,
        rotateZ: -360,
        rotateY: -180,
        halfScale: 0.5,
        halfLeft: -0.2,
        halfTop: 0,
        delay: 0
    }, {
        zIndex: 1,
        rotateX: -360,
        rotateZ: 360,
        rotateY: 180,
        halfScale: 0.5,
        halfLeft: -0.7,
        halfTop: 0,
        delay: 0.72
    }, {
        zIndex: 0,
        rotateX: -360,
        rotateZ: 360,
        rotateY: 180,
        halfScale: 0.5,
        halfLeft: 0.7,
        halfTop: -0.7,
        delay: 1
    }, {
        zIndex: 1,
        rotateX: -360,
        rotateZ: 360,
        rotateY: -180,
        halfScale: 0.5,
        halfLeft: 0.2,
        halfTop: -0.4,
        delay: 0.7
    }, {
        zIndex: 1,
        rotateX: 360,
        rotateZ: -360,
        rotateY: 180,
        halfScale: 0.5,
        halfLeft: -0.2,
        halfTop: -0.4,
        delay: 0.57
    }, {
        zIndex: 0,
        rotateX: 360,
        rotateZ: -360,
        rotateY: -180,
        halfScale: 0.5,
        halfLeft: -0.7,
        halfTop: -0.7,
        delay: 0.9
    }, ];
    o.css({
        position: "absolute",
        top: 0,
        left: 0,
        width: g.width(),
        height: g.height(),
        transform: "translate3d(0,0,0)",
        transformOrigin: (f.width / 2) + "px " + (f.height / 2) + "px 0",
        perspective: v
    }).hide();
    for (var l = 0; l < a * r; l++) {
        var B = l % a,
            A = Math.floor(l / a);
        var E = h("<div>").css({
                position: "absolute",
                left: 100 * B / a + "%",
                top: 100 * A / r + "%",
                outline: "1px solid transparent",
                transformStyle: (p || m) ? "flat" : "preserve-3d",
                zIndex: y[l].zIndex,
                overflow: q ? "visible" : "hidden"
            }).appendTo(o),
            z = h("<div>").css({
                transform: "scale(1) rotateX(0) rotateY(0) translate3d(0,0,0)",
                outline: "1px solid transparent",
                transformStyle: "preserve-3d"
            }).appendTo(E),
            w = h("<div>").addClass("rai_front_image").appendTo(z),
            D = q ? h("<div>").addClass("rai_back_image").appendTo(z) : 0;
        w.css({
            position: "absolute",
            width: "100%",
            height: "100%",
            overflow: "hidden",
            backfaceVisibility: "hidden",
            transform: "translate3d(0,0,0)"
        }).append(h("<img>").css({
            left: -B * 100 + "%",
            top: -A * 100 + "%",
            position: "absolute",
            outline: "1px solid transparent"
        }));
        if (q) {
            D.css({
                position: "absolute",
                width: "100%",
                height: "100%",
                overflow: "hidden",
                backfaceVisibility: "hidden",
                transform: "rotateY(180deg) translate3d(0,0," + b + "px)"
            }).append(h("<img>").css({
                left: -B * 100 + "%",
                top: -A * 100 + "%",
                position: "absolute",
                outline: "1px solid transparent"
            }))
        }
        var t = {
            position: "absolute",
            outline: "1px solid transparent"
        };
        G[l] = {
            part: z,
            front: w,
            back: D,
            wrapper: E,
            leftEdge: q ? h("<div>").addClass("rai_left_edge").css(t).appendTo(z) : 0,
            rightEdge: q ? h("<div>").addClass("rai_right_edge").css(t).appendTo(z) : 0,
            topEdge: q ? h("<div>").addClass("rai_top_edge").css(t).appendTo(z) : 0,
            bottomEdge: q ? h("<div>").addClass("rai_bottom_edge").css(t).appendTo(z) : 0
        }
    }

    function C(N) {
        var J = {},
            L = s.get(N),
            O = f.width / a,
            P = f.height / r;
        for (var K = 0; K < a * r; K++) {
            var N = K % a,
                M = Math.floor(K / a);
            J[K] = F(L, {
                x: N * O,
                y: M * P,
                w: O,
                h: P
            })
        }
        return J
    }

    function I(J, M, j, K, L) {
        for (var i in M) {
            if (typeof G[i] !== "function") {
                M[i].topEdge.css({
                    width: K,
                    height: J,
                    background: j[i],
                    transform: "rotateX(90deg) translate3d(0,-" + J / 2 + "px," + J / 2 + "px)"
                });
                M[i].bottomEdge.css({
                    width: K,
                    height: J,
                    background: j[i],
                    transform: "rotateX(90deg) translate3d(0,-" + J / 2 + "px," + (-L + J / 2) + "px)"
                });
                M[i].leftEdge.css({
                    width: J,
                    height: L,
                    background: j[i],
                    transform: "rotateY(90deg) translate3d(" + J / 2 + "px,0,-" + J / 2 + "px)"
                });
                M[i].rightEdge.css({
                    width: J,
                    height: L,
                    background: j[i],
                    transform: "rotateY(90deg) translate3d(" + J / 2 + "px,0," + (K - J / 2) + "px)"
                })
            }
        }
    }

    function e(J, K) {
        var i = 0;
        for (var j in J) {
            if (typeof J[j] !== "function") {
                (function(L, M) {
                    raiAnimate(function(O) {
                        var U, S, T, R = "",
                            N = {};
                        if (O <= 0.5) {
                            U = h.easing.easeInBack(1, O * 2, 0, 1, 1, 1).toFixed(3);
                            S = h.easing.easeInBackQ(1, O * 2, 0, 1, 1, 1).toFixed(3);
                            T = h.easing.easeInBackQ2(1, O * 2, 0, 1, 1, 1).toFixed(3);
                            M[L].back.css("backfaceVisibility", "hidden")
                        } else {
                            U = h.easing.easeOutBack(1, (O - 0.5) * 2, 0, 1, 1, 1).toFixed(3);
                            S = h.easing.easeOutBackQ(1, (O - 0.5) * 2, 0, 1, 1, 1).toFixed(3);
                            T = h.easing.easeOutBackQ2(1, (O - 0.5) * 2, 0, 1, 1, 1).toFixed(3);
                            M[L].back.css("backfaceVisibility", "visible")
                        }
                        for (var P in M[L].animate[O <= 0.5 ? "half" : "end"]) {
                            var V = M[L].animate[O <= 0.5 ? "begin" : "half"][P] || 0,
                                Q = M[L].animate[O <= 0.5 ? "half" : "end"][P] || 0;
                            if (typeof Q !== "object") {
                                if (P === "scale" || P === "rotateX" || P === "rotateY") {
                                    Q = V + (Q - V) * S
                                } else {
                                    if (P === "left" || P === "top") {
                                        Q = V + (Q - V) * T
                                    } else {
                                        Q = V + (Q - V) * U
                                    }
                                }
                            }
                            if (P === "rotateX" || P === "rotateY" || P === "rotateZ") {
                                R += P + "(" + Q + "deg) "
                            } else {
                                if (P === "scale") {
                                    R += P + "(" + Q + ") "
                                } else {
                                    if (P === "translate3d") {
                                        R += P + "(" + (V[0] + (Q[0] - V[0]) * U).toFixed(3) + "px," + (V[1] + (Q[1] - V[1]) * U).toFixed(3) + "px," + (V[2] + (Q[2] - V[2]) * U).toFixed(3) + "px) "
                                    } else {
                                        N[P] = Q
                                    }
                                }
                            }
                        }
                        M[L].wrapper.css({
                            transform: "translate3d(" + (N.left ? N.left : 0).toFixed(3) + "px," + (N.top ? N.top : 0).toFixed(3) + "px,0)"
                        });
                        delete N.left;
                        delete N.top;
                        if (R) {
                            N.transform = R
                        }
                        M[L].part.css(N)
                    }, 0, 1, M[L].animate.duration, M[L].animate.delay, function() {
                        i++;
                        if (i == M.length && K) {
                            K()
                        }
                    })
                }(j, J))
            }
        }
    }

    function k(aa, M, N, P) {
        var X = g.width(),
            W = g.height(),
            V = X / a,
            U = W / r,
            L = (f.duration * 0.4) > 1000 ? 1000 : (f.duration * 0.4),
            K = f.duration * 0.6,
            Q = [0, 0];
        I(b, aa, x[M], V, U);
        o.css({
            transformOrigin: (X / 2) + "px " + (W / 2) + "px 0",
            width: X,
            height: W
        });
        for (var S in aa) {
            if (typeof aa[S] !== "function") {
                var J = y[S].delay * L;
                if (Q[1] <= J) {
                    Q[0] = S;
                    Q[1] = J
                }
                aa[S].part[0].rai_delay = [J, 0]
            }
        }
        aa[Q[0]].part[0].rai_delay[1] = 1;
        for (var S in aa) {
            if (typeof aa[S] !== "function") {
                var R = aa[S],
                    Z = S % a,
                    Y = Math.floor(S / a),
                    T = X * Z / a,
                    O = W * Y / r;
                R.animate = {
                    delay: R.part[0].rai_delay[0],
                    duration: K,
                    begin: {
                        left: 0,
                        top: 0,
                        width: V,
                        height: U,
                        scale: 1,
                        rotateX: 0,
                        rotateY: 0,
                        translate3d: [0, 0, p ? b : 0]
                    },
                    half: {
                        left: y[S].halfLeft * V,
                        top: y[S].halfTop * U,
                        scale: y[S].halfScale,
                        rotateX: y[S].rotateX / 2,
                        rotateY: y[S].rotateY / 2,
                        translate3d: [0, 0, (p ? 1 : 0.5) * b]
                    },
                    end: {
                        left: 0,
                        top: 0,
                        scale: 1,
                        rotateX: y[S].rotateX,
                        rotateY: y[S].rotateY,
                        translate3d: [0, 0, b]
                    }
                };
                R.front.find("img").css(N);
                R.back.css("backfaceVisibility", "hidden").find("img").css(N);
                R.part.css({
                    width: R.animate.begin.width,
                    height: R.animate.begin.height,
                    left: R.animate.begin.left,
                    top: R.animate.begin.top
                })
            }
        }
        e(aa, P)
    }
    var d;
    this.go = function(X, M) {
        if (d) {
            return M
        }
        o.show();
        var K = h(s.get(M));
        K = {
            width: K.width(),
            height: K.height(),
            marginTop: parseFloat(K.css("marginTop")),
            marginLeft: parseFloat(K.css("marginLeft"))
        };
        if (q) {
            G[0].front.find("img").on("load", function() {
                u.hide()
            });
            for (var N in G) {
                if (typeof G[N] !== "function") {
                    G[N].front.find("img").attr("src", s.get(M).src);
                    G[N].back.find("img").attr("src", s.get(X).src)
                }
            }
            if (!x[M]) {
                x[M] = C(M)
            }
            d = new k(G, M, K, function() {
                u.show();
                n.trigger("effectEnd");
                o.hide();
                for (var i in G) {
                    if (typeof G[i] !== "function") {
                        G[i].part.css({
                            transition: "",
                            transform: "rotateX(0) rotateY(0) translate3d(0,0,0)"
                        })
                    }
                }
                d = 0
            })
        } else {
            d = true;

            function Y(j, i) {
                return Math.random() * (i - j + 1) + j
            }
            var T = g.width(),
                W = g.height(),
                S = T / a,
                V = W / r,
                L = T - S * (a - 1),
                U = W - V * (r - 1);
            o.css({
                width: T,
                height: W
            });
            var J = 0;
            for (var N in G) {
                var R = N % a,
                    P = Math.floor(N / a);
                G[N].front.find("img").attr("src", s.get(X).src).css(K);
                var Z = f.duration * (1 - Math.abs((c * H - R * P) / (2 * r * a)));
                var Q = Y(-1, 1) > 0 ? 1 : -1;
                var O = Y(-1, 1) > 0 ? 1 : -1;
                G[N].wrapper.css({
                    width: S,
                    height: V
                });
                G[N].part.css({
                    position: "absolute",
                    top: Q * V,
                    left: O * S,
                    opacity: 0,
                    width: S,
                    height: V
                }).animate({
                    top: 0,
                    left: 0,
                    opacity: 1
                }, Z, function() {
                    J++;
                    if (J == r * a) {
                        u.stop(1, 1);
                        d = false;
                        n.trigger("effectEnd")
                    }
                })
            }
        }
    };

    function F(S, J) {
        J = J || {};
        var U = 1,
            M = J.exclude || [],
            R;
        var O = document.createElement("canvas"),
            L = O.getContext("2d"),
            K = O.width = S.naturalWidth,
            Y = O.height = S.naturalHeight;
        L.drawImage(S, 0, 0, S.naturalWidth, S.naturalHeight);
        try {
            R = L.getImageData(J.x ? J.x : 0, J.y ? J.y : 0, J.w ? J.w : S.width, J.h ? J.h : S.height)["data"]
        } catch (T) {
            return "#ccc"
        }
        var N = (J.w ? J.w : S.width * J.h ? J.h : S.height) || R.length,
            P = {},
            W = "",
            V = [],
            j = {
                dominant: {
                    name: "",
                    count: 0
                }
            };
        var Q = 0;
        while (Q < N) {
            V[0] = R[Q];
            V[1] = R[Q + 1];
            V[2] = R[Q + 2];
            W = V.join(",");
            if (W in P) {
                P[W] = P[W] + 1
            } else {
                P[W] = 1
            }
            if (M.indexOf(["rgb(", W, ")"].join("")) === -1) {
                var X = P[W];
                if (X > j.dominant.count) {
                    j.dominant.name = W;
                    j.dominant.count = X
                }
            }
            Q += U * 4
        }
        return ["rgb(", j.dominant.name, ")"].join("")
    }
}; // -----------------------------------------------------------------------------------

jQuery.extend(jQuery.easing, {
    easeInOutSine: function(j, i, b, c, d) {
        return -c / 2 * (Math.cos(Math.PI * i / d) - 1) + b
    }
});

function rai_domino(m, i, k) {
    $ = jQuery;
    var h = $(this);
    var c = m.columns || 5,
        l = m.rows || 2,
        d = m.centerRow || 2,
        g = m.centerColumn || 2;
    var f = $("<div>").addClass("rai_effect rai_domino").css({
        position: "absolute",
        width: "100%",
        height: "100%",
        top: 0,
        overflow: "hidden",
        zIndex: -9
    }).appendTo(k);
    var b = $("<div>").addClass("rai_zoom").appendTo(f);
    var j = $("<div>").addClass("rai_parts").appendTo(f);
    var e = k.find(".rai_list");
    var a;
    this.go = function(y, x) {
        function z() {
            j.find("img").stop(1, 1);
            j.empty();
            b.empty();
            a = 0
        }
        z();
        var s = $(i.get(x));
        s = {
            width: s.width(),
            height: s.height(),
            marginTop: parseFloat(s.css("marginTop")),
            marginLeft: parseFloat(s.css("marginLeft"))
        };
        var D = $(i.get(x)).clone().appendTo(b).css({
            position: "absolute",
            top: 0,
            left: 0
        }).css(s);
        var p = f.width();
        var o = f.height();
        var w = Math.floor(p / c);
        var v = Math.floor(o / l);
        var t = p - w * (c - 1);
        var E = o - v * (l - 1);

        function I(L, K) {
            return Math.random() * (K - L + 1) + L
        }
        e.hide();
        var u = [];
        for (var C = 0; C < l; C++) {
            u[C] = [];
            for (var B = 0; B < c; B++) {
                var q = m.duration * (1 - Math.abs((d * g - C * B) / (2 * l * c)));
                var F = B < c - 1 ? w : t;
                var n = C < l - 1 ? v : E;
                u[C][B] = $("<div>").css({
                    width: F,
                    height: n,
                    position: "absolute",
                    top: C * v,
                    left: B * w,
                    overflow: "hidden"
                });
                var H = I(C - 2, C + 2);
                var G = I(B - 2, B + 2);
                u[C][B].appendTo(j);
                var J = $(i.get(y)).clone().appendTo(u[C][B]).css(s);
                var A = {
                    top: -H * v,
                    left: -G * w,
                    opacity: 0
                };
                var r = {
                    top: -C * v,
                    left: -B * w,
                    opacity: 1
                };
                if (m.support.transform && m.support.transition) {
                    A.translate = [A.left, A.top, 0];
                    r.translate = [r.left, r.top, 0];
                    delete A.top;
                    delete A.left;
                    delete r.top;
                    delete r.left
                }
                raiAnimate(J.css({
                    position: "absolute"
                }), A, r, q, "easeInOutSine", function() {
                    a++;
                    if (a == l * c) {
                        z();
                        e.stop(1, 1);
                        h.trigger("effectEnd")
                    }
                })
            }
        }
        raiAnimate(D, {
            scale: 1
        }, {
            scale: 1.6
        }, m.duration, m.duration * 0.2, "easeInOutSine")
    }
}; // -----------------------------------------------------------------------------------

function rai_blast(q, j, m) {
    var e = jQuery;
    var i = e(this);
    var f = m.find(".rai_list");
    var a = q.distance || 1;
    var g = e("<div>").addClass("rai_effect rai_blast");
    var c = e("<div>").addClass("rai_zoom").appendTo(g);
    var k = e("<div>").addClass("rai_parts").appendTo(g);
    m.css({
        overflow: "visible"
    }).append(g);
    g.css({
        position: "absolute",
        left: 0,
        top: 0,
        width: "100%",
        height: "100%",
        "z-index": -8
    });
    var d = q.cols;
    var p = q.rows;
    var l = [];
    var b = [];

    function h(u, r, s, t) {
        if (q.support.transform && q.support.transition) {
            if (typeof r.left === "number" || typeof r.top === "number") {
                r.transform = "translate3d(" + (typeof r.left === "number" ? r.left : 0) + "px," + (typeof r.top === "number" ? r.top : 0) + "px,0)"
            }
            delete r.left;
            delete r.top;
            if (s) {
                r.transition = "all " + s + "ms ease-in-out"
            } else {
                r.transition = ""
            }
            u.css(r);
            if (t) {
                u.on("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function() {
                    t();
                    u.off("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd")
                })
            }
        } else {
            delete r.transfrom;
            delete r.transition;
            if (s) {
                u.animate(r, {
                    queue: false,
                    duration: q.duration,
                    complete: t ? t : 0
                })
            } else {
                u.stop(1).css(r)
            }
        }
    }

    function n(r) {
        var w = Math.max((q.width || g.width()) / (q.height || g.height()) || 3, 3);
        d = d || Math.round(w < 1 ? 3 : 3 * w);
        p = p || Math.round(w < 1 ? 3 / w : 3);
        for (var u = 0; u < d * p; u++) {
            var v = u % d;
            var t = Math.floor(u / d);
            e([b[u] = document.createElement("div"), l[u] = document.createElement("div")]).css({
                position: "absolute",
                overflow: "hidden"
            }).appendTo(k).append(e("<img>").css({
                position: "absolute"
            }))
        }
        l = e(l);
        b = e(b);
        o(l, r);
        o(b, r, true);
        var s = {
            position: "absolute",
            top: 0,
            left: 0,
            width: "100%",
            height: "100%",
            overflow: "hidden"
        };
        c.css(s).append(e("<img>").css(s))
    }

    function o(t, u, s, r, w, z) {
        var v = g.width();
        var x = g.height();
        var y = {
            left: e(window).scrollLeft(),
            top: e(window).scrollTop(),
            width: e(window).width(),
            height: e(window).height()
        };
        e(t).each(function(F) {
            var E = F % d;
            var C = Math.floor(F / d);
            if (s) {
                var I = a * v * (2 * Math.random() - 1) + v / 2;
                var G = a * x * (2 * Math.random() - 1) + x / 2;
                var H = g.offset();
                H.left += I;
                H.top += G;
                if (H.left < y.left) {
                    I -= H.left + y.left
                }
                if (H.top < y.top) {
                    G -= H.top + y.top
                }
                var D = (y.left + y.width) - H.left - v / d;
                if (0 > D) {
                    I += D
                }
                var B = (y.top + y.height) - H.top - x / p;
                if (0 > B) {
                    G += B
                }
            } else {
                var I = v * E / d;
                var G = x * C / p
            }
            e(this).find("img").css({
                left: -(v * E / d) + u.marginLeft,
                top: -(x * C / p) + u.marginTop,
                width: u.width,
                height: u.height
            });
            var A = {
                left: I,
                top: G,
                width: v / d,
                height: x / p
            };
            if (w) {
                e.extend(A, w)
            }
            if (r) {
                h(e(this), A, q.duration, (F === 0 && z) ? z : 0)
            } else {
                h(e(this), A)
            }
        })
    }
    this.go = function(s, u) {
        var v = e(j[u]),
            r = {
                width: v.width(),
                height: v.height(),
                marginTop: parseFloat(v.css("marginTop")),
                marginLeft: parseFloat(v.css("marginLeft"))
            };
        if (!l.length) {
            n(r)
        }
        l.find("img").attr("src", j.get(u).src);
        h(l, {
            opacity: 1,
            zIndex: 3
        });
        b.find("img").attr("src", j.get(s).src);
        h(b, {
            opacity: 0,
            zIndex: 2
        });
        c.find("img").attr("src", j.get(u).src);
        h(c.find("img"), {
            transform: "scale(1)"
        });
        g.show();
        f.hide();
        o(b, r, false, true, {
            opacity: 1
        });
        o(l, r, true, true, {
            opacity: 0
        }, function() {
            i.trigger("effectEnd");
            g.hide()
        });
        h(c.find("img"), {
            transform: "scale(2)"
        }, q.duration, 0);
        var t = b;
        b = l;
        l = t
    }
}; // -----------------------------------------------------------------------------------

function rai_blinds(m, l, a) {
    var g = jQuery;
    var k = g(this);
    var c = m.parts || 3;
    var j = g(".rai_list", a);
    var h = g("<div>").addClass("rai_effect rai_blinds").css({
        position: "absolute",
        width: "100%",
        height: "100%",
        left: 0,
        top: 0,
        "z-index": 8
    }).hide().appendTo(a);
    var d = g("<div>").css({
        position: "absolute",
        top: 0,
        left: 0,
        width: "100%",
        height: "100%",
        overflow: "hidden"
    }).appendTo(h);
    var e = [];
    var b = document.addEventListener;
    for (var f = 0; f < c; f++) {
        e[f] = g("<div>").css({
            position: b ? "relative" : "absolute",
            display: b ? "inline-block" : "block",
            height: "100%",
            width: (100 / c + 0.001).toFixed(3) + "%",
            border: "none",
            margin: 0,
            overflow: "hidden",
            top: 0,
            left: b ? 0 : ((100 * f / c).toFixed(3) + "%")
        }).appendTo(h)
    }
    this.go = function(r, p, o) {
        if (o == undefined) {
            o = p > r ? 1 : 0
        }
        h.find("img").stop(true, true);
        h.show();
        var s = g(l[p]);
        var t = {
            width: s.width() || m.width,
            height: s.height() || m.height
        };
        var u = s.clone().css(t).appendTo(d);
        u.from = {
            left: 0
        };
        u.to = {
            left: (!o ? -1 : 1) * u.width() * 0.5
        };
        if (m.support.transform) {
            u.from = {
                translate: [u.from.left, 0, 0]
            };
            u.to = {
                translate: [u.to.left, 0, 0]
            }
        }
        j.hide();
        raiAnimate(u, u.from, u.to, m.duration, m.duration * 0.1, "swing");
        for (var q = 0; q < e.length; q++) {
            var n = e[q];
            var v = g(l[r]).clone().css({
                position: "absolute",
                top: 0
            }).css(t).appendTo(n);
            v.from = {
                left: (!o ? -1 : 1) * v.width() - n.position().left
            };
            v.to = {
                left: -n.position().left
            };
            if (m.support.transform) {
                v.from = {
                    translate: [v.from.left, 0, 0]
                };
                v.to = {
                    translate: [v.to.left, 0, 0]
                }
            }
            raiAnimate(v, v.from, v.to, (m.duration / (e.length + 1)) * (o ? (e.length - q + 1) : (q + 2)), "swing", ((!o && q == e.length - 1 || o && !q) ? function() {
                k.trigger("effectEnd");
                h.hide().find("img").remove();
                u.remove()
            } : false))
        }
    }
}; // -----------------------------------------------------------------------------------

function rai_fly(c, a, b) {
    var e = jQuery;
    var f = e(this);
    var h = {
        position: "absolute",
        left: 0,
        top: 0,
        width: "100%",
        height: "100%",
        transform: "translate3d(0,0,0)",
        zIndex: -9
    };
    var d = b.find(".rai_list");
    var g = e("<div>").addClass("rai_effect rai_fly").css(h).css({
        overflow: "visible"
    }).appendTo(b);
    this.go = function(p, m, l) {
        if (l == undefined) {
            l = !!c.revers
        } else {
            l = !l
        }
        var k = -(c.distance || g.width() / 4),
            n = Math.min(-k, Math.max(0, e(window).width() - g.offset().left - g.width())),
            i = (l ? n : k),
            q = (l ? k : n);
        var j = e(a.get(m));
        j = {
            width: j.width(),
            height: j.height()
        };
        var r = e("<div>").css(h).css({
            "z-index": 1,
            overflow: "hidden"
        }).html(e(a.get(m)).clone().css(j)).appendTo(g);
        var o = e("<div>").css(h).css({
            "z-index": 3,
            overflow: "hidden"
        }).html(e(a.get(p)).clone().css(j)).appendTo(g).show();
        raiAnimate(o, {
            opacity: 0
        }, {
            opacity: 1
        }, c.duration);
        raiAnimate(o, {
            left: i
        }, {
            left: 0
        }, 2 * c.duration / 3);
        d.hide();
        raiAnimate(r, {
            left: 0,
            opacity: 1
        }, {
            left: q,
            opacity: 0
        }, 2 * c.duration / 3, c.duration / 3, function() {
            r.remove();
            f.trigger("effectEnd");
            o.remove()
        })
    }
}; // -----------------------------------------------------------------------------------

jQuery("#image_slider").raiSlider({
    effect: "shift,brick,domino,blast,blinds,fly",
    prev: "",
    next: "",
    duration: 2000,
    delay: 4000,
    width: 1920,
    height: 1000,
    autoPlay: true,
    stopOnHover: false,
    loop: false,
    bullets: 1,
    caption: false,
    captionEffect: "parallax",
    responsive: 1,
    fullScreen: true,
    gestures: 1,
    onBeforeStep: 0,
    images: 0
});