import Swiper, { Navigation, Pagination } from 'swiper';
import SwiperCore, { Autoplay } from 'swiper';
import 'swiper/swiper-bundle.css';
class View {


    initSwiper() {
        SwiperCore.use([Autoplay]);
        Swiper.use([Navigation, Pagination]);
        const swiper = new Swiper('.swiper-container', {
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'progressbar',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }


}
export default new View();