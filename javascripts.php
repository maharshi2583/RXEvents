<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<!-- owl carousel -->
<script src="owlcarousel/jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<!-- swiper js -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();

// upcoming carousel
$(document).ready(function() {
    $(".owl-carousel").owlCarousel();
});
$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
        '<i class="fa-solid fa-less-than"></i>',
        '<i class="fa-solid fa-greater-than"></i>',
    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
    },
});

// hero carousel
const swiper = new Swiper('.swiper', {
    a11y: {
        prevSlideMessage: 'Previous slide',
        nextSlideMessage: 'Next slide',
    },
    effect: 'fade',
    slidesPerView: 1,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },
    autoplay: {
        delay: 5000,
    },
    on: {
        slideChangeTransitionStart: function() {
            // Remove animation from all slides
            document.querySelectorAll('.animated-text').forEach((text) => {
                text.style.opacity = '0';
                text.style.transform = 'translateX(-100%)';
                text.style.animation = 'none'; // Reset animation
            });
        },
        slideChangeTransitionEnd: function() {
            // Add animation to the active slide's text
            const activeSlideTexts = document.querySelectorAll('.swiper-slide-active .animated-text');
            activeSlideTexts.forEach((text) => {
                setTimeout(() => {
                    text.style.animation = ''; // Clear the reset animation property
                    text.style.opacity = '1';
                    text.style.transform = 'translateX(0)';
                    text.style.animation = 'fadeInLeft 1s ease-in-out forwards';
                }, 1); // Small delay ensures the animation re-triggers
            });
        },
    },
});
</script>