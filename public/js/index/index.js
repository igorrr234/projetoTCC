function openNewPage(url) {
    window.location.href = url;
}

$(document).ready(function() {
    $('.grid').slick({
        dots: true,
        infinite: true,
        speed: 900,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true, // Adicionando a configuração de autoplay
        autoplaySpeed: 2000, // Definindo a velocidade em milissegundos (2 segundos)
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ],
    });
});