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
<!-- fancybox js -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
AOS.init();

// back to top
$(document).ready(function() {
    "use strict";
    //Scroll back to top
    var progressPath = document.querySelector('.progress-wrap path');
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
    var updateProgress = function() {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
    }
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 50;
    var duration = 550;
    jQuery(window).on('scroll', function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.progress-wrap').addClass('active-progress');
        } else {
            jQuery('.progress-wrap').removeClass('active-progress');
        }
    });
    jQuery('.progress-wrap').on('click keydown', function(event) {
        if (event.type === 'click' || (event.type === 'keydown' && event.keyCode === 13)) {
            event.preventDefault();
            jQuery('html, body').animate({
                scrollTop: 0
            }, 50); // replace with your desired duration
            return false;
        }
    });
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

// gallery fancybox
Fancybox.bind("[data-fancybox]", {
    hideScrollbar: true,
    Toolbar: {
        display: {
            left: [],
            middle: ["prev", "infobar", "next"],
            right: ["close"],
        },
    },
});
</script>