import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay, Mousewheel } from 'swiper/modules';

document.addEventListener('DOMContentLoaded', function () {

    Swiper.use([Navigation, Pagination, Autoplay, Mousewheel]);

    let imgContenedor = document.querySelector('.main-page__content-images');
    let classImg = document.querySelectorAll('.main-page__content-images--image');


    let selecionado = document.querySelector('.swiper-slide-active');

    let test = document.querySelector('.main-page__content-titles--title');
    if (test) {
        test.classList.add('active');
    }

    if (imgContenedor) {
        let swiper = new Swiper(imgContenedor, {
            direction: "vertical",
            slidesPerView: 1,
            mousewheel: { releaseOnEdges: true, },

            on: {
                slideChangeTransitionEnd: function () {

                    classImg.forEach(item => {

                        if (item.classList.contains('swiper-slide-active')) {


                            //numero del slide
                            let temp = item.dataset.slide;
                            //el elemento
                            let title = document.querySelector('a[data-slide="' + temp + '"]');

                            title.classList.add('active');
                            console.log(title);
                            $(title).siblings().removeClass('active');
                            console.log(title);
                        }
                    });
                }
            }

        });
    }


});
