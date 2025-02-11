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
    <section class="container-fluid px-0 py-5 my-5" id="upcoming-events" style="background-attachment: fixed;">
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
                </div>
                <div class="row row-cols-md-2 row-cols-lg-3 g-4 d-none" id='event-container'></div>
            </div>
    </section>

    <!-- footer -->
    <?php include 'footer.php'; ?>
    <?php include 'javascripts.php'; ?>
    <script>
    $(document).ready(function() {
        loadTable();

        function loadTable() {
            $.ajax({
                url: "https://www.rx-events.live/rx-panel/events-data-action-request.php?filter=upcoming",
                method: "GET",
                success: function(response) {
                    if (response.success) {
                        response.events_data.forEach((event, index) => {
                            const imgSrc =
                                event.logo == null ?
                                "images/rxTransparentLogo.png" :
                                "https://www.rx-events.live/rx-panel/" + event.logo;
                            const title = event.event == "" ? "Event title" : event.event;
                            const date = event.date == "" ? "Not announced" : event.date;
                            const location =
                                event.location == "" ? "Not announced" : event.location;
                            const link =
                                event.registration_link == null ? "#" : event
                                .registration_link;

                            const item = `
                                <div class="col">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="event-img-container mb-3">
                                                <img src="${imgSrc}" alt="${title}">
                                            </div>
                                            <h4 class="card-title mainheading mb-2">${title}</h4>
                                            <p class="mb-1"><i class="fa-solid fa-calendar-days orangetext"></i> ${date}</p>
                                            <p><i class="fa-solid fa-location-dot orangetext"></i> ${location}</p>
                                            <a href="${link}" class="btn btn-main mx-auto">Register Now</a>
                                        </div>
                                    </div>
                                </div>
                            `;
                            $("#event-container").append(item);
                            $(".event-placeholder").addClass("d-none");
                            $("#event-container").removeClass("d-none");
                        });
                    } else {
                        console.log("Failed to load data");
                    }
                },
                error: function(xhr, status, error) {
                    console.log("Failed to load data : ", error);
                },
            });
        }
    });
    </script>
</body>

</html>