//! upcoming carousel
$(document).ready(function () {
  $(".upcoming-carousel").owlCarousel();
});
$(".upcoming-carousel").owlCarousel({
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

//! jQuery for fetching upcoming evnets
$(document).ready(function () {
  loadTable();

  function loadTable() {
    $.ajax({
      url: "https://www.rx-events.live/rx-panel/events-data-action-request.php?filter=upcoming",
      method: "GET",
      success: function (response) {
        if (response.success) {
          response.events_data.forEach((event, index) => {
            const imgSrc =
              event.logo == null
                ? "images/rxTransparentLogo.png"
                : "https://www.rx-events.live/rx-panel/" + event.logo;
            const title = event.event == "" ? "Event title" : event.event;
            const date = event.date == "" ? "Not announced" : event.date;
            const location =
              event.location == "" ? "Not announced" : event.location;
            const link =
              event.registration_link == null ? "#" : event.registration_link;

            const item = `
                <div class="item">
                    <div class="card event-card">
                        <div class="card-body">
                            <img src="${imgSrc}" alt="${title}" class="mb-3">
                            <h4 class="card-title mainheading mb-2">${title}</h4>
                            <p class="mb-1"><i class="fa-solid fa-calendar-days orangetext"></i> ${date}</p>
                            <p><i class="fa-solid fa-location-dot orangetext"></i> ${location}</p>
                            <a href="${link}" class="btn btn-main mx-auto">Register Now</a>
                        </div>
                    </div>
                </div>
            `;

            $(".upcoming-carousel")
              .trigger("add.owl.carousel", [item])
              .trigger("refresh.owl.carousel");

            $(".event-placeholder").addClass("d-none");
            $(".upcoming-carousel").removeClass("d-none");
          });
        } else {
          console.log("Failed to load data");
        }
      },
      error: function (xhr, status, error) {
        console.log("Failed to load data : ", error);
      },
    });
  }
});
