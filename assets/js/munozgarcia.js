function toggleSolicitud(){
    if ($("#opcion-fincas").hasClass('active')){
        $("div.solicitud-presupuesto-footer").show();
    }
    else{
        $("div.solicitud-presupuesto-footer").hide();
    }
}

$(function(){
    toggleSolicitud();

    $('#slide-home').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        pauseOnFocus: false,
        pauseOnHover: false,
    });

    $(window).scroll(function(event) {
        toggleSolicitud();
    });

    $("a.aviso-legal").unbind('click');

    $("a.aviso-legal").click(function(event) {
        event.preventDefault();
        $("#aviso-legal").modal('show');
    });

    $("a.politica-privacidad").unbind('click');

    $("a.politica-privacidad").click(function(event) {
        event.preventDefault();
        $("#politica-privacidad").modal('show');
    });

    $(".navbar-custom .navbar-nav > li > a").click(function(event) {
        var ancho = $(document).width();
        if(ancho < 768){
            $("button.navbar-toggle").trigger("click");
        }
    });
});