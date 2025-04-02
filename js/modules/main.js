import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay, Mousewheel } from 'swiper/modules'; 

document.addEventListener('DOMContentLoaded', function() {

    Swiper.use([Navigation, Pagination, Autoplay, Mousewheel]);

    let imgContenedor = document.querySelector('.main-page__content-images');
    let test = document.querySelector('.main-page__content-titles--title');


    let swiper = new Swiper(imgContenedor, {
        direction: "vertical",
        slidesPerView: 1,
        mousewheel: {releaseOnEdges: true,}
        
    });
});
