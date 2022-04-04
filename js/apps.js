
window.swiper = new Swiper({

    el:'.slider__contenedor',
    slideClass:'slider__slide',
    createElements: true,
    autoplay: {
        delay:5000
    },
    loop: true,
    pagination: true,
    navigation: true,
    
});


var swipercards = new Swiper('.swiper-container', {
    slidesPerView: 4,
    spaceBetween: 10,
    slidesPerGroup: 2,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });



  