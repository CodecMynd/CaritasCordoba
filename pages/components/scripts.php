<script type="text/javascript">
    (function() {
        var options = {
            whatsapp: "2282882976", // WhatsApp number
            email: "caritas20cordoba@gmail.com", // Email
            call_to_action: "Envíanos un mensaje", // Call to action
            button_color: "#FD2015", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,email", // Order of buttons
            pre_filled_message: "Hola somos Cáritas Córdoba en que podemos servirte?", // WhatsApp pre-filled message
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

<!-- jQuery -->
<script src="../../plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="../../plugins/bootstrap/bootstrap.min.js"></script>
<!-- magnific popup -->
<script src="../../plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
<!-- slick slider caruseles -->
<script src="../../plugins/slick/slick.min.js"></script>
<!-- filter fotos-->
<script src="../../plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="../../plugins/google-map/gmap.js"></script>
<!-- Syo Timer temporizador -->
<script src="../../plugins/syotimer/jquery.syotimer.js"></script>
<!-- aos efectos scroll en div se recorre de un lado a otro-->
<script src="../../plugins/aos/aos.js"></script>
<!-- swiper efecto transiciones de imagenes-->
<script src="../../plugins/swiper/swiper.min.js"></script>
<!-- js particles -->
<script src="../../plugins/particles/particles.js"></script>
<script src="../../plugins/particles/app.js"></script>
<!-- scrollTop al cargar pagina posicion top(0)-->
<script>
    $(window).on('beforeunload', function() {
        $(window).scrollTop(0);
    });
</script>
<!-- Main Script -->
<script src="../../src/js/script.js"></script>