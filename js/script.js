
/*-------------GOOGLE MAPS-----------------*/

/*function initialize() {

    var myLatlng = new google.maps.LatLng(59.934602, 30.334607);
    var mapOptions = {
        center: new google.maps.LatLng(59.934602, 30.334607),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        mapOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"Ditlogistic"
    });
}

function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE&callback=initialize";
    document.body.appendChild(script);
}

window.onload = loadScript;
*/




jQuery(document).ready(function($) {
    var img = $('.example-image');
    setTimeout(function() { 
    img.each(function(){
        var heightEl = $(this).height();
        var topEl = (330 - heightEl)/2 ;
        $(this).css({
            top: topEl        
        });
    });
    }, 3000);   
});

jQuery(document).ready(function($) {
    var txt = $('.advantages__block__text');
    txt.each(function(){
        var h = $(this).height();
        var t = (320 - h)/2 ;
        $(this).css({
            top: t
        });
    });
    /*txt.each(function(){
    var heightEl = $(this).height();
    
    });*/
$(function() {

    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop: 0}, 1000);
    });

    $('.smoothScroll').click(function(event) {
        event.preventDefault();        
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        console.log(top);
        $('html,body').animate({
            scrollTop: top
        }, 1000);
    });
});
});

var clock;
        
$(document).ready(function() {
    var clock;
    clock = $('.clock').FlipClock({
        clockFace: 'DailyCounter',
        autoStart: false,   
        lang: 'ru'  
    });    

    clock.setTime(440880);
    clock.setCountdown(true);
    clock.start();

});