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
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ; ?>

    <!-- request a proposal -->
    <section class="container">
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
            <div class="parallax-inner">

            </div>
        </section>
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
</body>

</html>