<!-- Modal -->
<div class="modal fade" id="modalCoockie" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">AVISO DE COOKIES</h5>
            </div>
            <div class="modal-body">
                <p>El sitio web URL <a href="https://pokecolombia.co/"
                        rel="noopener noreferrer">https://www.pokecolombia.co/</a>, utiliza cookies propias y de
                    terceros para recopilar información que ayuda a optimizar su visita a sus páginas web. No se
                    utilizarán las cookies para recoger información de carácter personal. Para permitir el uso de
                    las cookies, dar clic en ACEPTAR.</p>
                <p class="m-0">Para permitir el uso de las cookies, dar clic en ACEPTAR</p>
                <p>Encontrará más información en nuestra <a
                        href="https://www.pokecolombia.co/wp-content/uploads/2020/03/politica-de-cookies.pdf"
                        target="_blank" rel="noopener noreferrer">Política de Cookies.</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">ACEPTAR</button>
            </div>
        </div>
    </div>
</div>

<footer class="main-footer">
    <div class="container">
        <div class="main-footer__content">
            <div class="main-footer__item">
                <div class="main-footer__box">
                    <?php if (!dynamic_sidebar('Footer columna 1')); ?>
                </div>
            </div>
            <div class="main-footer__item">
                <div class="main-footer__box">
                    <?php if (!dynamic_sidebar('Footer columna 2')); ?>
                </div>
            </div>
            <div class="main-footer__item">
                <div class="main-footer__box">
                    <?php if (!dynamic_sidebar('Footer columna 3')); ?>
                </div>
            </div>
            <div class="main-footer__item">
                <div class="main-footer__box">
                    <div class="main-footer__redes">
                        <?php if (!dynamic_sidebar('Footer Redes sociales')); ?>
                    </div>
                    <div class="main-footer__email">
                        <?php if (!dynamic_sidebar('Footer email')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer__copy">
        <?php if (!dynamic_sidebar('Footer copyright')); ?>
    </div>
</footer>

<style>
.js-displayNone {
    display: none;
}

.Fecha_nacimiento>input {
    text-transform: uppercase;
}
</style>
<link async href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet">
<link async href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" rel="stylesheet">
<link async href="<?php echo get_template_directory_uri(); ?>/assets/css/datepicker.css" rel="stylesheet">
<link async href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
<link async rel="stylesheet" href="https://use.typekit.net/bpf1deu.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script async src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/setting-slick.js"></script>
<script defersrc="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js">
</script>
<script async src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script>
/*! Lazy Load 1.9.7 - MIT license - Copyright 2010-2015 Mika Tuupola */ ! function(a, b, c, d) {
    var e = a(b);
    a.fn.lazyload = function(f) {
        function g() {
            var b = 0;
            i.each(function() {
                var c = a(this);
                if (!j.skip_invisible || c.is(":visible"))
                    if (a.abovethetop(this, j) || a.leftofbegin(this, j));
                    else if (a.belowthefold(this, j) || a.rightoffold(this, j)) {
                    if (++b > j.failure_limit) return !1
                } else c.trigger("appear"), b = 0
            })
        }
        var h, i = this,
            j = {
                threshold: 0,
                failure_limit: 0,
                event: "scroll",
                effect: "show",
                container: b,
                data_attribute: "original",
                skip_invisible: !1,
                appear: null,
                load: null,
                placeholder: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
            };
        return f && (d !== f.failurelimit && (f.failure_limit = f.failurelimit, delete f.failurelimit), d !== f
                .effectspeed && (f.effect_speed = f.effectspeed, delete f.effectspeed), a.extend(j, f)), h = j
            .container === d || j.container === b ? e : a(j.container), 0 === j.event.indexOf("scroll") && h.bind(j
                .event,
                function() {
                    return g()
                }), this.each(function() {
                var b = this,
                    c = a(b);
                b.loaded = !1, (c.attr("src") === d || c.attr("src") === !1) && c.is("img") && c.attr("src", j
                    .placeholder), c.one("appear", function() {
                    if (!this.loaded) {
                        if (j.appear) {
                            var d = i.length;
                            j.appear.call(b, d, j)
                        }
                        a("<img />").bind("load", function() {
                            var d = c.attr("data-" + j.data_attribute);
                            c.hide(), c.is("img") ? c.attr("src", d) : c.css("background-image",
                                    "url('" + d + "')"), c[j.effect](j.effect_speed), b
                                .loaded = !0;
                            var e = a.grep(i, function(a) {
                                return !a.loaded
                            });
                            if (i = a(e), j.load) {
                                var f = i.length;
                                j.load.call(b, f, j)
                            }
                        }).attr("src", c.attr("data-" + j.data_attribute))
                    }
                }), 0 !== j.event.indexOf("scroll") && c.bind(j.event, function() {
                    b.loaded || c.trigger("appear")
                })
            }), e.bind("resize", function() {
                g()
            }), /(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion) && e.bind("pageshow", function(b) {
                b.originalEvent && b.originalEvent.persisted && i.each(function() {
                    a(this).trigger("appear")
                })
            }), a(c).ready(function() {
                g()
            }), this
    }, a.belowthefold = function(c, f) {
        var g;
        return g = f.container === d || f.container === b ? (b.innerHeight ? b.innerHeight : e.height()) + e
            .scrollTop() : a(f.container).offset().top + a(f.container).height(), g <= a(c).offset().top - f
            .threshold
    }, a.rightoffold = function(c, f) {
        var g;
        return g = f.container === d || f.container === b ? e.width() + e.scrollLeft() : a(f.container).offset()
            .left + a(f.container).width(), g <= a(c).offset().left - f.threshold
    }, a.abovethetop = function(c, f) {
        var g;
        return g = f.container === d || f.container === b ? e.scrollTop() : a(f.container).offset().top, g >= a(c)
            .offset().top + f.threshold + a(c).height()
    }, a.leftofbegin = function(c, f) {
        var g;
        return g = f.container === d || f.container === b ? e.scrollLeft() : a(f.container).offset().left, g >= a(c)
            .offset().left + f.threshold + a(c).width()
    }, a.inviewport = function(b, c) {
        return !(a.rightoffold(b, c) || a.leftofbegin(b, c) || a.belowthefold(b, c) || a.abovethetop(b, c))
    }, a.extend(a.expr[":"], {
        "below-the-fold": function(b) {
            return a.belowthefold(b, {
                threshold: 0
            })
        },
        "above-the-top": function(b) {
            return !a.belowthefold(b, {
                threshold: 0
            })
        },
        "right-of-screen": function(b) {
            return a.rightoffold(b, {
                threshold: 0
            })
        },
        "left-of-screen": function(b) {
            return !a.rightoffold(b, {
                threshold: 0
            })
        },
        "in-viewport": function(b) {
            return a.inviewport(b, {
                threshold: 0
            })
        },
        "above-the-fold": function(b) {
            return !a.belowthefold(b, {
                threshold: 0
            })
        },
        "right-of-fold": function(b) {
            return a.rightoffold(b, {
                threshold: 0
            })
        },
        "left-of-fold": function(b) {
            return !a.rightoffold(b, {
                threshold: 0
            })
        }
    })
}(jQuery, window, document);
</script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/8.14.0/lazyload.min.js"></script>
  <script>
    var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy"
  });
  function BackgroundNode({node: e, loadedClassName: a}){let o=e.getAttribute("data-background-image-url"); return{node: e, load: d=>{let n=new Image; n.onload=(d=>{requestAnimationFrame(()=>{e.style.backgroundImage=`url(${o})`, e.classList.add(a), d()})})(d), n.src=o}}}let defaultOptions={selector: "[data-background-image-url]", loadedClassName: "loaded"}; function BackgroundLazyLoader({selector: e, loadedClassName: a}=defaultOptions){let o=[].slice.apply(document.querySelectorAll(e)).map(e=> new BackgroundNode({node: e, loadedClassName: a})), d=new IntersectionObserver((e, a)=>{e.forEach(({target: e, isIntersecting: d})=>{if (!d) return; let n=o.find(a=> a.node.isSameNode(e)); n && n.load(()=>{a.unobserve(e), (o=o.filter(a=> !a.node.isSameNode(e))).length || a.disconnect()})})}); o.forEach(e=> d.observe(e.node))}BackgroundLazyLoader();
  </script> -->
<?php wp_footer(); ?>
<script id="mcjs">
! function(c, h, i, m, p) {
    m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p)
}(document, "script",
    "https://chimpstatic.com/mcjs-connected/js/users/a06b75f091a54f9a351eaa9e7/b4e0c3b56fcac88e26d8b3282.js");
</script>
<!-- Hotjar Tracking Code for www.pokecolombia.co -->
<!-- <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1641158,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script> -->
</body>

</html>