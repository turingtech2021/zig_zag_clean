function initSwiper() {

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

const toggleForm = function(e){
    e.preventDefault();
    document.querySelector('#form-container').classList.toggle('hidden');
};

document.getElementById('book-now').addEventListener('click', toggleForm);
document.getElementById('form-close').addEventListener('click', toggleForm);


initSwiper();