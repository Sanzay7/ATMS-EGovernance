
$(document).ready(function() {
    $(".billboard").slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1000
    });

    let menuIcon = $(".hamburger");
    menuIcon.on("click", function() {
        $(".main-nav > ul").slideToggle(500);
    });
});