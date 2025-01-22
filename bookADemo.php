<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book A Demo - RxEvents</title>
    <?php include 'css.php' ; ?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ; ?>

    <section class="container-fluid py-5" id="breadcrums">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mainheading">Book A Demo</h1>
            </div>
        </div>
    </section>

    <!-- request a proposal -->
    <?php include 'requestAProposal.php' ; ?>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-6 my-auto">
                <h2 class="mainheading mb-2">Unlock the Full Potential of Your Event with Rx Events</h2>
                <p>Book a demo with Rx Events to explore how we seamlessly manage physical, virtual, and hybrid
                    conferences. Discover innovative solutions, flawless execution, and engaging experiences tailored to
                    elevate your events.
                </p>
            </div>
            <div class="col-md-6">
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
        </div>
    </section>

    <!-- footer -->
    <?php include 'footer.php'; ?>
    <?php include 'javascripts.php'; ?>
</body>

</html>