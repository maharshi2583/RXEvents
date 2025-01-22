<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Conferences - RxEvents</title>
    <?php include 'css.php' ; ?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ; ?>

    <section class="container-fluid py-5" id="breadcrums">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mainheading">Virtual Conference</h1>
            </div>
        </div>
    </section>

    <!-- request a proposal -->
    <?php include 'requestAProposal.php' ; ?>

    <!-- intro -->
    <section class="container my-5">
        <div class="row mb-5">
            <div class="col-md-6 my-auto">
                <h2 class="mainheading mb-2">Virtual Conference</h2>
                <p>At Rx Events, we deliver cutting-edge virtual conferences that combine real-time interaction with
                    innovative digital
                    experiences. Our state-of-the-art solutions offer immersive environments and dynamic formats
                    designed to captivate your
                    audience and expand your reach. We ensure every event is engaging, impactful, and results-driven,
                    helping you connect
                    with your target audience like never before.
                </p>
            </div>
            <div class="col-md-6 my-auto">
                <img src="images/virtualConferenceIntro.jpg" class="img-fluid" alt="Virtual conference">
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-12 text-center">
                <h2 class="mainheading mb-3">Leading the Way: 110+ Virtual Conferences Delivered</h2>
                <p>Trust us to manage every detail while you focus on achieving your goals and building lasting
                    connections. With Rx
                    Events, your virtual conference is set for success.</p>
                <a href="#" class="btn btn-animated-main mx-auto"><span>Get in touch</span></a>
            </div>
        </div>

        <div class="row mt-5 g-5">
            <?php 
                $virtualEvents = array(
                    array(
                        'img' => 'images/VirtualConferenceIcons/Additional-Services.png', 
                        'title' => 'Additional Services', 
                        'text'=>'Pre-event promotion and marketing efforts can include bulk email, WhatsApp, and SMS campaigns, along with engaging promotional video teasers to build anticipation.'),
                    array(
                        'img' => 'images/VirtualConferenceIcons/Designing.png', 
                        'title' => 'Designing', 
                        'text'=>'A well-designed conference logo and theme set the tone for the event, supported by timely announcements and a detailed brochure outlining the agenda, highlights, and speaker information.'),
                    array(
                        'img' => 'images/VirtualConferenceIcons/Realtime-Analysis.png', 
                        'title' => 'Realtime Analysis', 
                        'text'=>'Comprehensive data analytics provide valuable insights into the events success, starting with details of total logged-in and registered users. Live location reports and delegate analytics for each location offer real-time tracking and engagement metrics to understand audience distribution.'),
                    array(
                        'img' => 'images/VirtualConferenceIcons/Registration-Certificate-Link-Post-event-Support.png', 
                        'title' => 'Registration & Certificate Link Post event Support', 
                        'text'=>'Gathering participant feedback through post-event forms is crucial for understanding attendee experiences and areas for improvement. Post-event analytics further provide valuable insights into engagement, participation, and overall success.'),
                    array(
                        'img' => 'images/VirtualConferenceIcons/Secretariat-Services.png', 
                        'title' => 'Secretariat Services', 
                        'text'=>'A dedicated secretariat ensures smooth administration of event-related tasks, including managing registration and confirmation reports. With RSVP and callback facilities, participants can easily resolve queries, enhancing their overall experience.'),
                    array(
                        'img' => 'images/VirtualConferenceIcons/Virtual-3-D-Platform.png', 
                        'title' => 'Virtual 3 D Platform', 
                        'text'=>'A dedicated and customized registration and login page, enhanced with sponsor branding, ensures a seamless entry point for participants. Features like a 24×7 helpline on the login page and an integrated online payment gateway provide convenience and support throughout the registration process.'),
                );

                foreach($virtualEvents as $event){
                    $img = htmlspecialchars($event['img']);
                    $title = htmlspecialchars($event['title']);
                    $text = htmlspecialchars($event['text']);
                    echo '<div class="col-md-6 d-flex align-items-center">
                        <div class="events-ul-squares">
                            <img src="' . $img . '" alt="' . $title . '">
                        </div>
                        <div>
                            <h3 class="mainheading">' . $title . '</h3>
                            <p>' . $text . '</p>
                        </div>
                    </div>';
                    };
            ?>
        </div>
    </section>

    <!-- footer -->
    <?php include 'footer.php'; ?>
    <?php include 'javascripts.php'; ?>
</body>

</html>