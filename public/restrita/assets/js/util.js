const BASE_URL = "http://localhost/irboats/";
//const BASE_URL = "https://anuncioslegais.000webhostapp.com/";



$(function () {

    function blinker() {

        $('.blink_me').fadeOut(1000);
        $('.blink_me').fadeIn(1000);
    }
    setInterval(blinker, 1000);
});


