<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - RxEvents</title>
    <?php include 'css.php' ; ?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ; ?>

    <section class="container-fluid py-5" id="breadcrums">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mainheading">Contact Us</h1>
            </div>
        </div>
    </section>

    <!-- request a proposal -->
    <?php include 'requestAProposal.php' ; ?>

    <section class="container my-5">
        <!-- first row -->
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div
                    class="card h-100 p-5 p-md-3 p-lg-5 contact-card d-flex flex-row align-items-center rounded-3 align-items-center border-0">
                    <div class="feature-i d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="ms-2">
                        <h4>Address</h4>
                        <p class="mt-1 mb-0">401, Shyamak Complex, Opp. Sahjanand College, Ambawadi, Ahmedabad –
                            380015 Gujarat, India.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div
                    class="card h-100 p-5 p-md-3 p-lg-5 contact-card d-flex flex-row align-items-center rounded-3 mt-3 mt-md-0 border-0">
                    <div class="feature-i d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="ms-2">
                        <h4>Call Us Now</h4>
                        <p class="mt-1 mb-0"><a class="text-decoration-none footer-contact" href="tel:9099331371">+91
                                90993 31371</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div
                    class="card h-100 p-5 p-md-3 p-lg-5 contact-card d-flex flex-row align-items-center rounded-3 mt-3 mt-md-0 border-0">
                    <div class="feature-i d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-envelope-open"></i>
                    </div>
                    <div class="ms-2">
                        <h4>Mail Us Now</h4>
                        <p class="mt-1 mb-0"><a class="text-decoration-none footer-contact"
                                href="mailto:contact@rxevents.co.in">contact@rxevents.co.in</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- second row -->
        <div class="row my-5 pt-5" id="contact">
            <div class="col-md-6">
                <h2 class="mainheading mb-4">Have Any Query? Please Contact Us!</h2>
                <form action="#" method="POST">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" name="name"
                                    placeholder="FIRST NAME *" required>
                                <label for="floatingInput">FULL NAME *</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInput" name="email"
                                    placeholder="YOUR EMAIL *" required>
                                <label for="floatingInput">YOUR EMAIL *</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="floatingInput" name="phone"
                                    placeholder="PHONE*" required>
                                <label for="floatingInput">PHONE*</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="YOUR MESSAGE *" id="floatingTextarea"
                                    name="message"></textarea>
                                <label for="floatingTextarea">YOUR MESSAGE *</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-main bookADemo" type="submit">SEND <i
                                    class="fa-regular fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.9768877106435!2d72.54231167477032!3d23.024620816252785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85287fc18fb3%3A0x4b44456135db26e4!2sRx%20Events!5e0!3m2!1sen!2sin!4v1737564019389!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include 'footer.php'; ?>
    <?php include 'javascripts.php'; ?>
</body>

</html>