<footer class="main-footer border-footer">
    <!-- To the right -->
    <div class="row">
        <div class="col-8">
            <strong>Cáritas de Córdoba &copy; 2022 <a href=""></a>RFC: CCO980114GS2</strong>
        </div>
        <div class="col-3">
            <div class="float-right d-sm-inline ml-5 pl-5">
                v.1--1.1 en construcción
            </div>
        </div>
        <div class="col-2">
        <span class="ir-arriba"><i class="fa-solid fa-arrow-up"></i></span>
        </div>
    </div>
</footer>
<script>
    $(document).ready(function () {

$('.ir-arriba').click(function () {
    $('body, html').animate({
        scrollTop: '0px'
    }, 300);
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
        $('.ir-arriba').slideDown(300);
    } else {
        $('.ir-arriba').slideUp(300);
    }
});
});
</script>