<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physical Conferences - RxEvents</title>
    <?php include 'css.php' ; ?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ; ?>

    <section class="container-fluid py-5" id="breadcrums">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mainheading">Physical Conference</h1>
            </div>
        </div>
    </section>

    <!-- request a proposal -->
    <?php include 'requestAProposal.php' ; ?>

    <!-- intro -->
    <section class="container my-5">
        <div class="row mb-5">
            <div class="col-md-6 my-auto">
                <h2 class="mainheading mb-2">Physical Conference</h2>
                <p>Rx Events provides end-to-end management of the physical conferences, ensuring the optimum
                    utilization of
                    resources, latest technology, and flawless coordination customised to a particular event and its
                    needs.
                    Our team delivers innovative solutions to increase your brand visibility and add value to the
                    program.
                </p>
                <p>Our dedicated team works closely with you to understand your objectives and craft tailored strategies
                    that not only enhance the attendee experience but also maximize your brand’s visibility. Whether
                    it’s planning, execution, or post-event evaluation, we bring a creative and detail-oriented approach
                    to every aspect of the conference.</p>
            </div>
            <div class="col-md-6 my-auto">
                <img src="images/physicalConferenceIntro.jpeg" class="img-fluid" alt="Physical conference">
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-12 text-center">
                <h2 class="mainheading mb-3">We’ve Successfully Delivered 1000+ Physical
                    Conferences</h2>
                <p>When it comes to managing your event, trust the expertise of Rx Events—the trusted
                    partner for over 1,000 successful conferences worldwide. Let us handle the complexities while you
                    focus on achieving your goals and building meaningful connections.</p>
                <a href="#" class="btn btn-animated-main mx-auto"><span>Get in touch</span></a>
            </div>
        </div>

        <div class="row mt-5 g-5">
            <?php 
                $physicalEvents = array(
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Venue-Selection-Booking.png', 
                        'title' => 'Venue Selection & Booking', 
                        'text'=>'We manage the entire venue booking process, from selection and negotiation to finalizing agreements, payments, and allotment, ensuring the perfect location for your event.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/vanue-selector.png', 
                        'title' => 'Venue Layout', 
                        'text'=>'We design and organize the venue layout, including scientific halls, F&B areas, faculty lounges, exhibitions, and signages, ensuring a seamless and functional setup.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Registration.png', 
                        'title' => 'Registration', 
                        'text'=>'We streamline the registration process with online and offline software, onsite counters, self-check-in kiosks, hall and lunch area scanning, and certificate distribution for a smooth attendee experience.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Exhibition.png', 
                        'title' => 'Exhibition', 
                        'text'=>'We manage every aspect of the exhibition, including layout design, space booking, exhibitor agreements, onsite support, production, power supply, entry management, and guidelines for both bare spaces and shell schemes.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/abstract.png', 
                        'title' => 'Abstract', 
                        'text'=>'We manage the abstract process, from online submission and scoring to reviewing, notifying authors, providing guidelines for oral and poster presentations, and arranging travel grants and prizes for the best papers.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Scientific-Program.png', 
                        'title' => 'Scientific Program', 
                        'text'=>'We manage the scientific program by preparing the outline, highlighting key topics, maintaining a faculty database, handling invitations and confirmations, organizing master data, and providing speaker introductions with photographs.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Travel.png', 
                        'title' => 'Travel', 
                        'text'=>'We manage travel arrangements, including air tickets, visa assistance for international faculty, airport pickups and drops, web check-ins, and special assistance for VIP guests.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Food-Beverages.png', 
                        'title' => 'Food & Beverages', 
                        'text'=>'We manage food and beverages by budgeting, selecting vendors, accommodating special requirements, finalizing menus, and preparing menu booklets for a delightful dining experience.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Planning-Budgeting.png', 
                        'title' => 'Planning & Budgeting', 
                        'text'=>'We handle planning and budgeting by understanding event details, selecting optimal dates to maximize attendance, avoiding clashes with major events, and setting budgets and sponsorship goals for success.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Website-Mobile-App.png', 
                        'title' => 'Website & Mobile App', 
                        'text'=>'We provide complete website and mobile app solutions, including development, online registration, abstract submission, scientific program updates, advertisements, and secure payment gateways.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Promotion.png', 
                        'title' => 'Promotion', 
                        'text'=>'We promote your event through a variety of channels, including advertisements in magazines, posters in medical colleges and hospitals, mass emails, WhatsApp and SMS, calls, and social media, ensuring maximum reach and engagement.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Sponsorship.png', 
                        'title' => 'Sponsorship', 
                        'text'=>'We handle sponsorships by managing a database of potential sponsors, creating sponsorship prospectuses, sending request letters, providing payment documents, and organizing sponsorship forms, power supply, and benefits.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Audio-Visuals.png', 
                        'title' => 'Audio Visuals', 
                        'text'=>'We handle all audiovisual needs, from analyzing requirements and determining hall setups to selecting vendors, managing preview rooms, and ensuring the right screen size and sound quality. We also take care of e-poster arrangements for a flawless presentation experience.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/kit.png', 
                        'title' => 'Kit', 
                        'text'=>'We handle the entire kit process, from selection and design/branding to vendor evaluation, kit insertion, and final distribution, ensuring a complete and branded experience for attendees.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Memento-Gift.png', 
                        'title' => 'Memento / Gift', 
                        'text'=>'We manage theme-based mementos and gifts, including delivery, faculty name printing, and distribution, ensuring a memorable experience for all attendees.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Accommodation.png', 
                        'title' => 'Accomodation', 
                        'text'=>'We manage accommodation with a focus on faculty needs, rooming lists, VIP requirements, in-room goodies, and personalized welcome letters to ensure a comfortable stay for all attendees.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/car-copy.png', 
                        'title' => 'Local Transportation', 
                        'text'=>'We manage all aspects of local transportation, including airport pick-up and drop-off, transfers to and from the venue, transportation for local faculties, and garbage clearance for a hassle-free event.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Inauguration.png', 
                        'title' => 'Inauguration', 
                        'text'=>'We manage the inauguration process, including finalizing the chief guest, inviting the guest of honor and special invitees, coordinating media and local public invites, and organizing the seating arrangement.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Gala-Dinner.png', 
                        'title' => 'Gala Dinner', 
                        'text'=>'We organize a memorable gala dinner with a musical night, including artist selection, light and sound requirements, artist logistics, invitation cards, and security, ensuring a flawless event experience.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Promotion.png', 
                        'title' => 'Social Programs', 
                        'text'=>'We organize engaging social programs, including cultural events, public awareness initiatives, exhibitions, and NGO invitations, enhancing the event experience for all attendees.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Insurance.png', 
                        'title' => 'Insurance', 
                        'text'=>'We provide comprehensive event insurance, covering public liability, cancellations, fire, and natural calamities, ensuring peace of mind throughout your event.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Legal-Permissions.png', 
                        'title' => 'Legal Permissions', 
                        'text'=>'We handle all legal permissions, including coordination with external ministries for foreign faculties and delegates, CME credit hours, and compliance with regulations for electricity, fire and safety, police, corporation, and ITPO.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Other-Agencies.png', 
                        'title' => 'Other Agencies', 
                        'text'=>'We coordinate with other agencies to ensure your event runs smoothly, including housekeeping, security, parking, PR & media, photographers, anchors, and ambulance services.'),
                    array(
                        'img' => 'images/PhysicalConferenceIcons/Post-Event-Reporting.png', 
                        'title' => 'Post Event Reporting', 
                        'text'=>'We provide comprehensive post-event reporting, covering registration, F&B, travel and accommodation, exhibition, attendance, and finance to ensure detailed insights and a clear overview of your event’s success.'),
                );

                foreach($physicalEvents as $event){
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