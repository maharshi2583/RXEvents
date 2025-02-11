<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events - RxEvents</title>
    <?php include 'css.php' ; ?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ; ?>

    <section class="container-fluid py-5" id="breadcrums">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mainheading">Upcoming Events</h1>
            </div>
        </div>
    </section>

    <!-- request a proposal -->
    <?php include 'requestAProposal.php' ; ?>

    <!-- upcoming events -->
    <section class="container-fluid px-0 py-5 my-5" id="upcoming-events">
        <div class="container">
            <!-- <div class="row mb-4">
                <div class="col-md-6">
                    <h1 class="mainheading">Upcoming Events</h1>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                    <a href="#" class="btn btn-animated-main"><span>See All Events</span></a>
                </div>
            </div> -->
            <div class="row justify-content-center">
                <div class="col-10">
                    <h3 class="orangetext text-center event-placeholder" role="alert">Loading Events...</h3>
                    <div class="carousel-wrap">
                        <div class="owl-carousel upcoming-carousel d-none"></div>
                    </div>
                </div>
            </div>
    </section>

    <!-- footer -->
    <?php include 'footer.php'; ?>
    <?php include 'javascripts.php'; ?>
    <script src="upcomingEvents.js"></script>
</body>

</html>