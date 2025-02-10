// jQuery for fetching upcoming evnets
$(document).ready(function () {
  loadTable();

  function loadTable() {
    $.ajax({
      url: "https://www.rx-events.live/rx-panel/events-data-action-request.php?filter=upcoming",
      method: "GET",
      success: function (response) {
        if (response.success) {
          response.events_data.forEach((event, index) => {
            console.table(event);
            const imgSrc =
              event.logo == null ? "images/rxWhiteLogo.png" : event.logo;
            const title = event.event == "" ? "Event title" : event.event;
            const date = event.date == "" ? "Not announced" : event.date;
            const location =
              event.location == "" ? "Not announced" : event.location;
            const link =
              event.registration_link == null ? "#" : event.registration_link;

            const item = `
                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <img src="${imgSrc}" alt="${title}" class="mb-3" style="width: 100px !important">
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
