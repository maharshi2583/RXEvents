<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rx Events</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/rxWhiteLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ; ?>

    <!-- hero section -->
    <div class="hero-slider">
        <div class="carousel-cell"
            style="background-image:url(https://68.media.tumblr.com/57836ee52bc9355ad7c5fed5abf91ccc/tumblr_oiboo6MaRS1slhhf0o1_1280.jpg);">
            <div class="overlay"></div>
            <div class="inner">
                <h3 class="subtitle">Slide 1</h3>
                <h1 class="title">Flickity Parallax</h1>
                <a href="https://flickity.metafizzy.co/" target="_blank" class="btn btn-main">Read More</a>
            </div>
        </div>
    </div>

    <!-- request a proposal -->
    <section class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="accordion accordion-flush" id="requestProposal">
                    <div class="accordion-item">
                        <h1 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                REQUEST A PROPOSAL
                                <div id="open"><span id="closed"></span></div>
                            </button>
                        </h1>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#requestProposal">
                            <div class="container p-4">
                                <div class="row g-4">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" name="fname"
                                                placeholder="FIRST NAME *" required>
                                            <label for="floatingInput">FIRST NAME *</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" name="lname"
                                                placeholder="LAST NAME*" required>
                                            <label for="floatingInput">LAST NAME*</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingInput" name="email"
                                                placeholder="YOUR EMAIL *" required>
                                            <label for="floatingInput">YOUR EMAIL *</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" pattern="^\d*$"
                                                name="participants" placeholder="EXPECTED PARTICIPANTS">
                                            <label for="floatingInput">EXPECTED PARTICIPANTS</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" name="company"
                                                placeholder="ASSOCIATION / COMPANY *" required>
                                            <label for="floatingInput">ASSOCIATION / COMPANY *</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" name="website"
                                                placeholder="YOUR EVENT WEBSITE">
                                            <label for="floatingInput">YOUR EVENT WEBSITE</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInput" pattern="^\d*$"
                                                name="budget" placeholder="APPROXIMATE BUDGET">
                                            <label for="floatingInput">APPROXIMATE BUDGET</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelectGrid" name="interesed">
                                                <option selected disabled>Open this select menu</option>
                                                <option value="Conference Management">Conference Management</option>
                                                <option value="Virtual & hybrid solutions">Virtual & hybrid
                                                    solutions
                                                </option>
                                                <option value="Association management">Association management
                                                </option>
                                                <option value="Anything else">Anything else</option>
                                            </select>
                                            <label for="floatingSelectGrid">Interesed In</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="YOUR MESSAGE *"
                                                id="floatingTextarea" name="message"></textarea>
                                            <label for="floatingTextarea">YOUR MESSAGE *</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 justify-content-center">
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <button class="btn btn-outline-main" type="submit">SEND <i
                                                class="fa-regular fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- welcome to RX -->
    <section class="container my-5">
        <div class="row py-5">
            <div class="col-md-6 my-auto">
                <h2 class="mainheading mb-2">Welcome to Rx Events</h2>
                <p>Rx Events is an emerging best-in-class event management consultancy with rich
                    expertise in
                    conceptualising and
                    organising medical conferences, CMEs, meetings and extensive pharmaceutical event management.
                    Our
                    team with varied
                    experience, understands your goals to drive an impactful and result-oriented successful event.
                    We
                    believe in providing a
                    competitive edge to our clients by paying attention to every detail and implementing the best
                    program practices.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/_n82ZukQNY0?si?autoplay=1&mute=1&controls=0"
                    title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
                    referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </div>
    </section>

    <!-- services -->
    <section class="container-fluid p-0">
        <section class="parallax">
            <div class="parallax-inner py-5">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h1 class="mainheading">OUR SERVICES</h1>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-animated-main"><span>Get in touch</span></a>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-md-4 g-lg-5">
                        <div class="col mb-4 mb-md-0">
                            <a href="#" class="card text-decoration-none">
                                <div class="card-body p-5 our-service-card">
                                    <div class="services-img mb-4">
                                        <img src="images/virtual.png" alt="">
                                    </div>
                                    <h2 class="card-title text-uppercase mainheading mb-3">Virtual Conference</h2>
                                    <p class="card-text text-uppercase mb-3">PUT YOUR CONGRESS IN THE HANDS OF THE
                                        EXPERTS
                                    </p>
                                    <ul class="mb-0 ps-0">
                                        <li>A-Z Event Management</li>
                                        <li>Original Events</li>
                                        <li>Virtual & Hybrid Events</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <a href="#" class="card text-decoration-none">
                                <div class="card-body p-5 our-service-card">
                                    <div class="services-img mb-4">
                                        <img src="images/physical.png" alt="">
                                    </div>
                                    <h2 class="card-title text-uppercase mainheading mb-3">Physical
                                        Conference</h2>
                                    <p class="card-text text-uppercase mb-3">PUT YOUR CONGRESS IN THE HANDS OF THE
                                        EXPERTS
                                    </p>
                                    <ul class="mb-0 ps-0">
                                        <li>A-Z Event Management</li>
                                        <li>Original Events</li>
                                        <li>Virtual & Hybrid Events</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <a href="#" class="card text-decoration-none">
                                <div class="card-body p-5 our-service-card">
                                    <div class="services-img mb-4">
                                        <img src="images/hybrid.png" alt="">
                                    </div>
                                    <h2 class="card-title text-uppercase mainheading mb-3">Hybrid
                                        Conference</h2>
                                    <p class="card-text text-uppercase mb-3">PUT YOUR CONGRESS IN THE HANDS OF THE
                                        EXPERTS
                                    </p>
                                    <ul class="mb-0 ps-0">
                                        <li>A-Z Event Management</li>
                                        <li>Original Events</li>
                                        <li>Virtual & Hybrid Events</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- our history -->
    <section class="container-fluid px-0 py-5" id="our-history">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0 d-flex">
                    <i class="fa-solid fa-angles-right text-white fs-1 me-3"></i>
                    <div class="px-3">
                        <h3>OUR HISTORY</h3>
                        <p>With 59 years of experience and market expertise we are at the global forefront of
                            association and conference
                            management.</p>
                        <a href="#" class="btn btn-outline-main">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0 d-flex">
                    <i class="fa-solid fa-angles-right text-white fs-1 me-3"></i>
                    <div class="px-3">
                        <h3>VIRTUAL SOLUTIONS</h3>
                        <p>Keep up to date with our Empowering Knowledge Newsletter. Read about the latest news,
                            solutions and developments of
                            Kenes Group.</p>
                        <a href="#" class="btn btn-outline-main">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0 d-flex">
                    <i class="fa-solid fa-angles-right text-white fs-1 me-3"></i>
                    <div class="px-3">
                        <h3>NEWSLETTER</h3>
                        <p>Keep up to date with our Empowering Knowledge Newsletter. Read about the latest news,
                            solutions and developments of
                            Kenes Group.</p>
                        <a href="#" class="btn btn-outline-main">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- services counting -->
    <section class="container py-5" id="services-counting">
        <div class="row">
            <div class="col-md-3 text-center">
                <h2>4,300</h2>
                <p>CONFERENCES</p>
            </div>
            <div class="col-md-3 text-center">
                <h2>200+</h2>
                <p>VIRTUAL EVENTS</p>
            </div>
            <div class="col-md-3 text-center">
                <h2>60,000</h2>
                <p>ASSOCIATION MEMBERS</p>
            </div>
            <div class="col-md-3 text-center">
                <h2>220,000</h2>
                <p>DELEGATES PER YEAR</p>
            </div>
        </div>
    </section>

    <!-- upcoming events -->
    <section class="container-fluid px-0 py-5" id="upcoming-events">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h1 class="mainheading">Upcoming Events</h1>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                    <a href="#" class="btn btn-animated-main"><span>See All Events</span></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="carousel-wrap">
                        <!-- <div class="owl-carousel">
                            <div class="item">
                                <div class='card card1'>
                                    <div class="price">
                                        <h6>$14</h6>
                                    </div>
                                    <div class='info text-white'>
                                        <h1 class='title mx-3'>Chocolate Cake</h1>
                                        <p class='description mx-3'>Lorem ipsum dolor sit amet, consectetur
                                            adipiscing
                                            elit,
                                            sedii do
                                            eiusmod teme.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class='card card1'>
                                    <div class="price">
                                        <h6>$14</h6>
                                    </div>
                                    <div class='info text-white'>
                                        <h1 class='title mx-3'>Chocolate Cake</h1>
                                        <p class='description mx-3'>Lorem ipsum dolor sit amet, consectetur
                                            adipiscing
                                            elit,
                                            sedii do
                                            eiusmod teme.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class='card card1'>
                                    <div class="price">
                                        <h6>$14</h6>
                                    </div>
                                    <div class='info text-white'>
                                        <h1 class='title mx-3'>Chocolate Cake</h1>
                                        <p class='description mx-3'>Lorem ipsum dolor sit amet, consectetur
                                            adipiscing
                                            elit,
                                            sedii do
                                            eiusmod teme.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class='card card1'>
                                    <div class="price">
                                        <h6>$14</h6>
                                    </div>
                                    <div class='info text-white'>
                                        <h1 class='title mx-3'>Chocolate Cake</h1>
                                        <p class='description mx-3'>Lorem ipsum dolor sit amet, consectetur
                                            adipiscing
                                            elit,
                                            sedii do
                                            eiusmod teme.</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
    </section>

    <!-- follow us -->
    <section class="container my-5" id="follow-us">
        <div class="row">
            <div class="col-md-6 orangebgdiv">
                <h2 class="mainheading text-center mb-5">follow us!</h2>
                <ul class="list-unstyled d-flex justify-content-around">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/_n82ZukQNY0?si?autoplay=1&mute=1&controls=0"
                    title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
                    referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include 'footer.php'; ?>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="owlcarousel/jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'></script>
    <script>
    // carousel
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
    </script>
</body>

</html>