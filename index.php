<?php Echo '<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Apollo 15</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/css/uikit.min.css">
  <link rel="stylesheet" type="text/css" href="css/aos-2.3.4.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica:ital@1&family=IM+Fell+English:ital@1&display=swap"
    rel="stylesheet">
</head>

<body>
  <!-- <div uk-grid class="uk-grid" style="position: relative; z-index: 10;" >

  </div> -->

  <div id="content">
    <section class="uk-child-width-1-1 uk-margin-remove uk-text-center ap-intro" uk-grid>
      <div class="uk-flex-row a15-landing-section">
        <nav class="uk-navbar-container uk-padding ap-nav ap-z-index" uk-navbar style="background: none; overflow: hidden;">
          <div class="uk-hidden@m" uk-toggle="target: #offcanvas-nav">
            <span class="ap-menu-item ap-logo ap-button uk-text-uppercase"> <span uk-icon="menu"></span> The Apollo 15 Learning Hub</span>
          </div>
          <div id="offcanvas-nav" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar">
              <ul class="uk-nav uk-nav-default">
                <li><a class="ap-menu-item" href="#flight-path">Flight Path</a></li>
                <li><a class="ap-menu-item" href="https://readux.ecds.emory.edu/collections/emory-control:LSDI-Apollo15/">Data
                    File</a></li>
                <li><a class="ap-menu-item" href="https://apollo15hub.org/items/browse">Exhibition</a></li>
                <li><a class="ap-menu-item" href="https://apollo15hub.org/lunarmodule">Inside the Ship</a></li>
                <li><a class="ap-menu-item" href="https://apollo15hub.org/about">About</a></li>
              </ul>
            </div>
          </div>
          <div class="uk-navbar-left uk-visible@m">
            <ul class="uk-navbar-nav">
              <li>
                <a href="/" class="ap-menu-item uk-visible@m">
                  <ul class="uk-list ap-logo uk-visible@m">
                    <li>The Apollo 15 Learning Hub</li>
                  </ul>
                </a>
              </li>
            </ul>
          </div>
          <div class="uk-navbar-right uk-visible@m">
            <ul class="uk-navbar-nav">
              <li><a class="ap-menu-item" href="#flight-path">Flight Path</a></li>
              <li><a class="ap-menu-item" href="https://readux.ecds.emory.edu/collections/emory-control:LSDI-Apollo15/">Data File</a></li>
              <li><a class="ap-menu-item" href="https://apollo15hub.org/items/browse">Exhibition</a></li>
              <li><a class="ap-menu-item" href="https://apollo15hub.org/lunarmodule">Inside the Ship</a></li>
              <li><a class="ap-menu-item" href="https://apollo15hub.org/about">About</a></li>
            </ul>
          </div>
        </nav>

        <div class="ap-site-msg-container uk-margin-large">
          <div class="ap-site-msg-heading">
            Welcome to the Apollo 15 Learning Hub
          </div>
          <div class="ap-site-msg-body">
            A project to assemble, preserve, and make available primary source records of Apollo 15 for research,
            education, and
            preservation as an example of a unique human endeavor.
          </div>
        </div>

        <div class="ap-site-scroll-container uk-margin-large">
          Scroll down to take the flight path and explore
        </div>

        <div class="ap-site-logo-container uk-container uk-margin-large">

          <div class="uk-child-width-1-3@m grid-collapse" uk-grid>
            <a href="#flight-path" class="ap-home-card ap-z-index">
              <div class="uk-inline a15-card ">
                <img src="images/flight-path-1.jpg" alt="">
                <!-- <div class="uk-overlay-primary uk-position-cover"></div> -->
                <div class="uk-overlay uk-overlay-default uk-position-bottom a15-overlay">
                  <p>Flight Path</p>
                </div>
              </div>
            </a>
            <a href="https://readux.ecds.emory.edu/collections/emory-control:LSDI-Apollo15/" class="ap-home-card ap-z-index">
              <div class="uk-inline a15-card">
                <img src="images/manual-1.jpg" alt="">
                <!-- <div class="uk-overlay-primary uk-position-cover"></div> -->
                <div class="uk-overlay uk-overlay-default uk-position-bottom a15-overlay">
                  <p>Manual</p>
                </div>
              </div>
            </a>
            <a href="https://apollo15hub.org/lunarmodule" class="ap-home-card ap-z-index">
              <div class="uk-inline a15-card">
                <img src="images/3d-1.jpg" alt="">
                <!-- <div class="uk-overlay-primary uk-position-cover"></div> -->
                <div class="uk-overlay uk-overlay-default uk-position-bottom a15-overlay">
                  <p>Inside the Ship: 3D Model in Unity</p>
                </div>
              </div>
            </a>
          </div>

        </div>


        <!-- <div class="ap-site-msg-container uk-margin-large">
          <div class="ap-site-msg-heading">
            The Flight Path
          </div>
          <div class="ap-site-msg-body">
            Phasellus risus turpis, pretium sit amet magna non, molestie ultricies enim. Nullam pulvinar felis at metus
            malesuada,
            nec convallis lacus commodo. Duis blandit neque purus, nec auctor mi sollicitudin nec. Duis urna ipsum,
            tincidunt at
            euismod ut, placerat eget urna. Curabitur nec faucibus leo, et laoreet nibh. Pellentesque euismod quam at
            eros
            efficitur, vitae venenatis sem consectetur. Donec ut risus ultricies, dictum neque at, bibendum purus. In
            hac habitasse
            platea dictumst.
          </div>
        </div> -->

        <nav class="uk-navbar-container uk-padding ap-nav" uk-navbar style="background: none; overflow: hidden;">
          <div class="uk-navbar-left">
            <div class="ap-site-logo-left">
              <a href="https://www.nasa.gov/mission_pages/apollo/missions/apollo15.html">
                <img src="images/nasa_logo.svg" class="ap-site-logo-img">
              </a>
            </div>
          </div>
          <div class="uk-navbar-right">
            <div class="ap-site-logo-right">
              <a href="http://digitalscholarship.emory.edu/">
                <img src="images/ecds_logo.svg" class="ap-site-logo-img">
              </a>
            </div>
          </div>
        </nav>


      </div>
    </section>
    <div class="uk-flex-row">
      <div uk-grid class="uk-grid uk-child-width-1-2 ">


        <!-- left column -->
        <article class="uk-first-column-apollo" id="flight-path">
          <div class="uk-padding">

            <h1 class="uk-heading uk-text-bold uk-margin-remove-bottom" data-aos="fade-in">
              <a class="anchor" href="/">Apollo 15</a>
            </h1>

            <nav uk-navbar data-aos="fade-in" uk-sticky uk-sticky-fixed id="navbar">

              <div class="uk-navbar-left">
                <div class="uk-hidden@m ap-responsive-menu" uk-toggle="target: #offcanvas-nav">
                  <span class="ap-menu-item ap-logo ap-button uk-text-uppercase"> <span uk-icon="menu"></span> Menu </span>
                </div>
                <ul class="uk-navbar-nav uk-visible@m">
                  <li><a class="uk-padding-remove-left uk-text-capitalize" href="/">Flight Path</a></li>
                  <li><a class="uk-text-capitalize" href="https://readux.ecds.emory.edu/collections/emory-control:LSDI-Apollo15/">Data File</a>
                  </li>
                  <li><a class="uk-text-capitalize" href="https://apollo15hub.org/items/browse">Exhibition</a></li>
                </ul>
              </div>
              <div class="uk-navbar-right uk-visible@m" id="navbar-logo">
                <ul class="uk-navbar-nav">
                  <li><a class="uk-text-capitalize" href="/">Apollo 15</a></li>
                </ul>
              </div>
            </nav>

            <section id="trigger-on-earth" class="uk-margin-top">
              <!-- trigger-on-earth-->
              <h2 data-aos="fade-in" data-aos-delay="500" uk-sticky="offset: 80;" uk-sticky-below
                class="uk-margin-remove uk-ap-heading">
                The Apollo 15 Learning Hub</h2>
                <p data-aos="fade-in">
                  The Apollo 15 Learning Hub is a project in the Emory Center for Digital Scholarship that has as its mission to assemble, preserve, and make available primary source records of Apollo 15 for research, education, and preservation as an example of a unique human endeavor. The Hub offers access to a digital archive of Apollo 15 onboard materials, an interactive 3D model of the Lunar Module, as well as links to reliable primary sources of Apollo history. In this section of the Apollo 15 Learning Hub, we present information about the flight path of Apollo 15 to the Moon and back. The original flight documents presented here are part of the Learning Hub’s collection and were provided by Commander David R. Scott.
                </p>
                <p data-aos="fade-in">
                  NASA’s Apollo program started in the 1960s and continued well into the 1970s, achieving several milestones throughout its run with the Moon landing of Apollo 11 being the most famous of them. The Apollo 15 mission was part of that effort, being the ninth crewed mission of the Apollo program. The Apollo 15 mission involved several groundbreaking scientific experiments as well as innovating space travel features.
                </p>
                <p data-aos="fade-in">
                  The four primary objectives of the Apollo 15 mission in terms of science and engineering were to explore the Hadley-Apennine region of the Moon, set up and activate surface scientific experiments, make engineering evaluations of new Apollo equipment, and conduct lunar orbital experiments and photographic tasks .
                </p>
                <p data-aos="fade-in">
                  On March 26, 1970 NASA announced the crew for Apollo 15, which was planned to be the fifth Moon landing mission . The three astronauts selected for the mission were David R. Scott, the mission commander, Alfred M. Worden, and James B. Irwin.
                </p>
                <p data-aos="fade-in">
                  The Apollo 15 crew and their backups underwent training that lasted about 20 months before their mission. Part of that training took place in Antarctica for a habitability study in January 1970, as the following video donated by Commander David Scott shows.
                </p>
                <div class="margin-v2">
                  <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                    <div class="object-title">Training in the Antarctic</div>
                    <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/175" target="_blank"> <!--<span uk-icon="link"></span>-->
                      view
                    </a>
                  </figcaption>
                  <iframe  class="uk-width-1-1" src="https://player.vimeo.com/video/497302349" frameborder="0" allowfullscreen></iframe>
                </div>
              <p data-aos="fade-in">
                  Another part of that process was geology training exercises in the Orocopia Mountains and in the Mojave Desert in California and the area around Flagstaff, Arizona. Apollo 15 would be the first mission to utilize the Lunar Roving Vehicle (LRV) to enable the astronauts to travel farther from their Lunar Module to explore areas of geologic interest.
              </p>
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" class="uk-margin-remove uk-ap-heading">
                Launch</h2>
                <p data-aos="fade-in">
                  The Apollo 15 mission launch date had been scheduled for July 26, 1971. The last few weeks before the launch, the astronauts’ training as it related to the launch and everything else about the mission had intensified. Every detail about the flight plan, the Command and Service Module (CSM), the plan of action after the CSM had left the Earth’s atmosphere was exhaustively examined and checked.
                  </p>
                  <blockquote data-aos="fade-in">
                  Again and again we had practiced every aspect of the mission to the highest possible fidelity. Nothing was left to chance. </blockquote>

                  <p class="note">Col. David R. Scott, <span>"Two Sides of the Moon"</span>, 244. All quotations are by Col. Scott from <a class="ap-inline-link" href="https://books.google.com/books?id=Sb9RAQAAQBAJ">"Two sides of the Moon"</a>.
                  </p>
                  <p data-aos="fade-in">
                  The Apollo 15 crew and their backups had been placed in quarantine for two weeks before the launch to ensure that they would not contract any viruses and that they would be in peak physical condition at the time of the flight. On the day of the launch, the crew started their day by undergoing a thorough physical exam by the Apollo 15 doctors.
                  <blockquote data-aos="fade-in">
                  After being declared in excellent physical condition we sat down to a traditional hearty breakfast with members of our back-up-crew and support team. From there we were taken to the suit laboratory, where our individual suit technicians began the lengthy process of fitting us into our spacesuits (244).
                  </blockquote>
                  </p>
                <p data-aos="fade-in">
                  Scott, Worden, and Irwin were helped into their spacesuits several hours before the launch. They had to wait for NASA technicians to finish the final check of the launch vehicle wearing their spacesuits, which took the whole morning of that day. Finally, the three crew members entered the Command and Service Module.
                  <blockquote data-aos="fade-in">
                  Two hours and forty minutes before lift-off, first I, then Jim and Al maneuvered ourselves into the confines of the Apollo 15 Command Module perched atop the Saturn V booster rocket (246).
                  </blockquote>
                  </p>
                  <p data-aos="fade-in">
                  After the crew had entered the Command and Service Module a new round of checks followed.
                  <blockquote data-aos="fade-in">
                  For the next two hours, as we sat on top of this massive explosive device, we ran through a series of system checks with Launch Control (246).
                  </blockquote>
                </p>
                <p data-aos="fade-in">
                  The following image, which is part of the Apollo 15 Learning Hub’s collection, shows the first page of the first page of the Launch Checklist booklet that the Apollo 15 crew had inside the Command and Service Module.
                </p>
                <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Launch Checklist</div>
                  <a class="object-action uk-button uk-button-default" href="https://readux2.ecdsdev.org/volume/tz844/page/tz844_004.jpg" target="_blank"> <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
              <img class="margin-v2" data-aos="fade-in" data-aos-delay="0"
                src="https://images.readux.ecds.emory.edu:8443/cantaloupe/iiif/2/tz844_004.jpg/full/full/0/default.jpg">
                </div>
                <p data-aos="fade-in">
                  Finally, after everything had been checked and had been found OK, the launch process started at 9:34 AM EST at Cape Canaveral, Florida, only 187 milliseconds off schedule. Commander Scott describes the final few seconds before lift-off:
                  <blockquote data-aos="fade-in">
                  8.9 seconds before lift-off and a deafening roar engulfed the launch tower as the five giant engines of the first stage of the Saturn V rocket – providing a total of 7.7 lb of thrust – ignited (246).
                  </blockquote>
                  </p>
                  <p data-aos="fade-in">
                  The following fish-eye color photograph shows the moment the Saturn V rocket is blasting off from the launch pad.
                </p>
                <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Apollo 15 Launch</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/68" target="_blank"> <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
              <img class="margin-v2" data-aos="fade-in" data-aos-delay="0"
                src="https://apollo15hub.org/files/original/e85fdf31c1ed72f39a5d7f005d5c255e.jpg">
                </div>
              <p data-aos="fade-in">
                <blockquote data-aos="fade-in">
                  Three, two, one, all engines running…Launch commit… Lift-off. Right on schedule we started to lift away from the pad (247).
                </blockquote>
              </p>
              <div class="margin-v2" data-aos="fade-in">
                <div class="embed-container" data-aos="fade-in">
                  <iframe src="https://www.youtube.com/embed//5JvMNHx9Rjg" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </section> <!-- end trigger-on-earth -->


            <section id="trigger1">
              <!-- trigger1 -->
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" class="uk-margin-remove uk-ap-heading">Ascent</h2>
              <p data-aos="fade-in">
                The ascent of the space craft was one of the most dangerous parts of the whole mission. There were a number of things that could go wrong during this phase that could force Commander Scott to take the decision to abort the mission. What made this part of the flight even more stressful was the difficulty of replicating the ascent of the CSM in a flight simulator. The time-frame within which an abort could be activated was less than a second.
                <blockquote data-aos="fade-in">
                Throughout these critical moments of our powered ascent there were various modes of aborting the launch in the evet of a major failure of any aspect of either our Apollo spacecraft or the Saturn V gulping 15 tons of fuel per second beneath us. This was one of the riskiest times of the entire mission and one for which it had been particularly difficult to train (247).
                </blockquote>
                </p>
                <p data-aos="fade-in">
                The following cue card that was donated by Commander David Scott to the Apollo 15 Learning Hub shows two lists of steps that the commander of the mission would have to take in order to abort the mission, in case that was necessary.
              </p>

              <div class="margin-v2" data-aos="fade-in">
                <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Abort Mission Card</div>
                  <a class="object-action uk-button uk-button-default" href="https://readux2.ecdsdev.org/volume/v016s/page/v016s_04F.jpg" target="_blank"> <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
                <img class="margin-v2" data-aos="fade-in" data-aos-delay="0"
                  src="https://images.readux.ecds.emory.edu:8443/cantaloupe/iiif/2/v016s_04F.jpg/full/full/0/default.jpg">
              </div>
              <p data-aos="fade-in">
              The following is a detailed view of the forward panels inside the Lunar Module. We can see the Velcro patches where the cue cards where placed inside the Lunar Module and the Command and Service Module
              </p>

              <div class="margin-v2" data-aos="fade-in">
                <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Lunar Module (LM) Panel</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/147" target="_blank"> <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
                <a href="https://apollo15hub.org/items/show/147">
                  <img class="uk-width-1-1"
                    src="https://apollo15hub.org/files/original/7dafa2e53e5d74e70792b5e720d6357c.jpg">
                </a>
              </div>
              <p data-aos="fade-in">
              The Apollo 15 space craft safely went through the various stages of the ascent from earth without encountering any issues that could jeopardize the safety of the crew. When the space craft was out of the Earth’s atmosphere and into orbit, Mission Control and the Apollo 15 crew realized that they had gone through this dangerous part of the flight without any problems.
              <blockquote data-aos="fade-in">
              Eleven and a half minutes into the flight (at 94 miles) the third stage of the launch vehicle shut down and we began to experience prolonged weightlessness. Once in orbit “heads down” we caught a glimpse of the Earth (284).
              </blockquote>
              </p>
              <p data-aos="fade-in">
              It would take the Command and Service Module three days of free flight – “translunar coast” – to reach a position near the Moon from which they could light our big engine and enter lunar orbit. p. 285
              </p>

            </section> <!-- end trigger 1-->

            <section id="trigger2">
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" uk-sticky-below class="uk-margin-remove uk-ap-heading">Moon
                Landing</h2>
              <p data-aos="fade-in">
                When the Apollo 15 Command and Service Module (CSM) “Endeavour” entered the Moon’s orbit, David Scott and James Irwin descended to the Moon in their Lunar Module, the vehicle that was designed to transport them from the CSM to the surface of the Moon.
                <blockquote data-aos="fade-in">
                Al closed the Endeavour’s hatch behind us, and at 100:39 GET he threw the switch to separate the two vehicles. We were on our own. Falcon pulled away from Endeavour. After a final systems check and trajectory certification, Houston gave us a “Go for descent” call. We began preparations to ignite Falcon’s powerful engine which would take us on our descent toward the lunar surface (253).
                </blockquote>
                </p>
                <p data-aos="fade-in">
                They flew their Lunar Module to a perfect landing at 6:16 pm EST July 30 at Hadley Rille about 1,500 feet north and east of the targeted landing point. They touched down with two of the Lunar Module’s landing pads just over the edge of a small crater that the astronauts had not been able to see through the dust raised by their rocket engine, causing the lunar module to tilt. But they were stable enough to continue their mission . Landing approach over the Apennine Range - one of the highest on the moon - was at an angle of 26 degrees, the steepest approach yet used in Apollo missions.
              </p>
              <p data-aos="fade-in">
                The following cue card, which is also part of the Apollo 15 Learning Hub’s collection, contains hand-written notes by Commander David Scott. The cue card was inside the Lunar Module and presents a list of steps that the crew of the LM had to follow during the landing on the Moon’s surface.
              </p>
              <div class="margin-v2" data-aos="fade-in">
                <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">LM Landing Cue Card</div>
                  <a class="object-action uk-button uk-button-default" href="https://readux2.ecdsdev.org/volume/v016s/page/v016s_12F.jpg" target="_blank"> <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
                <a href="https://readux2.ecdsdev.org/volume/v016s/page/v016s_12F.jpg">
                  <img class="uk-width-1-1"
                    src="https://images.readux.ecds.emory.edu:8443/cantaloupe/iiif/2/v016s_12F.jpg/full/full/0/default.jpg">
                </a>
              </div>
              <p data-aos="fade-in">
              In the following picture, we see a page from the Lunar Landmark Maps book that the astronauts had with them in the Command and Service Module. The hand-written note is about the Proclus Crater on the surface of the Moon.
              </p>
              <div class="margin-v2" data-aos="fade-in">
                <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Handwritten Note about the Proclus Crater</div>
                  <a class="object-action uk-button uk-button-default" href="https://readux2.ecdsdev.org/volume/spj23/page/spj23_00000029.jpg" target="_blank"> <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
                <a href="https://readux2.ecdsdev.org/volume/spj23/page/spj23_00000029.jpg">
                  <img class="uk-width-1-1"
                    src="https://images.readux.ecds.emory.edu:8443/cantaloupe/iiif/2/spj23_00000029.jpg/full/full/0/default.jpg">
                </a>
              </div>
              <p data-aos="fade-in">
              Commander Scott describes the moment right after the Lunar Module had landed:
              <blockquote data-aos="fade-in">
              The fog of dust dispersed almost instantly and our silvery, spiderlike craft came in to rest with a firm thud (256).
              </blockquote>
              </p>
              <div class="margin-v2" data-aos="fade-in">
                <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Landing on the Moon</div>
                  <a class="object-action uk-button uk-button-default" href="https://vimeo.com/368580707" target="_blank"> <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
                <iframe  class="uk-width-1-1" src="https://player.vimeo.com/video/368580707" frameborder="0" allowfullscreen></iframe>
              </div>
              <p data-aos="fade-in">
                It took Apollo 15 104 hours since they left Earth to reach the Moon’s surface. Regarding the specific place that  the Lunar Module ended up landing, Commander Scott comments:
                <blockquote data-aos="fade-in">
                It was clear straight away that we had landed on uneven ground: the LM as tipped backward at a slight angle (it turned out later that one of the rear feet had landed in a shallow crater) (256).
                </blockquote>
                </p>
                <p data-aos="fade-in">
                After they landed on the Moon, Commander Scott removed the Lunar Module’s upper hatch, stood on the engine cover and spent 33 minutes photographing the surroundings and describing what he saw to scientists in Houston.
              </p>
            </section> <!-- end trigger 2-->

            <section id="trigger-on-the-moon">
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" uk-sticky-below class="uk-margin-remove uk-ap-heading">On
                the Moon’s Surface
              </h2>
              <p data-aos="fade-in">
                After they had taken some rest following their landing on the Moon, Scott and Irwin unfolded and deployed their lunar rover the following day. Specially designed for operation at 1/6 Earth’s gravity, it could carry 180 pounds of astronauts, gear and samples on the Moon (which would weigh 1,080 pounds on Earth), more than twice the rover’s weight, but risked collapse if accidentally sat upon while still on Earth. Though its range was 40 miles at speeds up to 11 mph, the astronauts were restricted to an area 3 miles from the lunar module so they could walk back if the rover broke down (Source: https://solarsystem.nasa.gov/missions/apollo-15/in-depth/).
              </p>
              <p data-aos="fade-in">
                Describing his experience driving the lunar rover on the Moon’s surface, Commander Scott writes:
                <blockquote data-aos="fade-in">
                Despite our maximum speed or only 7 or 8 mph, the reduced gravity and very irregular surface meant one or more of the independently suspended wheels lifted away from the surface every time we hit uneven terrain. No part of the lunar surface was totally flat or even (262).
                </blockquote>
                </p>
                <p data-aos="fade-in">
                The Apollo 15 mission was the first one that gave astronauts astronauts to drive a car on the Moon. Having the lunar rover allowed Scott and Irwin to complete over 18 hours of exploration and to travel 17.5 miles on the Moon’s surface during the 3 days (from July 31 to August 2) they spent on the Moon. Also, the two astronauts were able to collect more than 170 pounds of lunar samples and to provide extensive oral descriptions and photographic documentation of geologic features in the vicinity of the landing site (Source: https://www.nasa.gov/mission_pages/apollo/missions/apollo15.html).
              </p>
              <p data-aos="fade-in">
              In this photo that is part of the Apollo 15 Learning Hub’s collection, Commander David Scott tests the steering mechanisms of the Lunar Rover before the EVA-2 traverse. The lunar module was controlled by a joystick instead of a steering wheel because it would have been difficult for the astronauts to grasp in their spacesuits.
              </p>

              <div id="trigger-show-surface">

                <div class="margin-v2">
                  <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                    <div class="object-title">James Irwin on the Lunar Rover</div>
                    <a class="object-action uk-button uk-button-default"
                      href="https://apollo15hub.org/items/show/86" target="_blank">
                      <!--<span uk-icon="link"></span>--> view </a>
                  </figcaption>
                  <a data-aos="fade-in" href="https://apollo15hub.org/items/show/86">
                    <img class="uk-width-1-1"
                      src="https://apollo15hub.org/files/original/f765d7419062f4c99bb93b436f65f45b.jpg">
                  </a>
                </div>
                <p data-aos="fade-in">
                Thanks to the television camera mounted on the rover, scientists back on Earth could for the first time see live coverage everywhere the astronauts went, not just at the landing site. The camera could be controlled from Earth, enabling scientists to look around for interesting features while the astronauts conducted their tasks (Source: https://www.youtube.com/watch?v=BTq9jtTg89E&feature=emb_logo&ab_channel=Apollo15-ApolloFlightJournal).
                </p>
                <div class="margin-v2" data-aos="fade-in">
                  <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                    <div class="object-title">Video from the Rover Camera</div>
                    <a class="object-action uk-button uk-button-default" href="https://www.youtube.com/watch?v=BTq9jtTg89E&feature=emb_logo&ab_channel=Apollo15-ApolloFlightJournal" target="_blank"> <!--<span uk-icon="link"></span>-->
                      view
                    </a>
                  </figcaption>
                  <iframe  class="uk-width-1-1" src="https://www.youtube.com/embed/BTq9jtTg89E frameborder="0" allowfullscreen></iframe>
                </div>
                <p data-aos="fade-in">
                  Despite the usefulness of the lunar rover, the astronauts conducted most of their geology exploration of the Moon’s surface walking, which turned out be rather challenging given the lower gravity of the Moon:
                  <blockquote data-aos="fade-in">
                  But most of our geology was done on foot. The most effective way of walking turned out to be more of a loping movement, which I can only describe as being something similar to walking on a trampoline (262)
                  </blockquote>
                  </p>
                  <p data-aos="fade-in">
                  One of the most important aspect of the Apollo 15 mission was the study of the Moon’s geology, which was still not well understood at the time of the mission. Astronauts Scott and Irwin collected several samples during their EVAs. Among the rocks they collected was one that was later dubbed the “Genesis Rock.” It was a very pure specimen of anorthosite, a type of rock believed to have floated like icebergs in the magma oceans that constituted the Moon’s outer layers early in its history. It was found to be more than 4 billion years old and was the most ancient whole rock recovered from the lunar surface to that point. The prospect of finding such rocks was one reason the landing site had been selected ("Apollo 15," https://solarsystem.nasa.gov/missions/apollo-15/in-depth/).
                </p>
                <p data-aos="fade-in">
                  The interaction between Commander Scott, Jim Irwin, and mission control is revealing of their surprise and delight because of that discovery:
                  <blockquote data-aos="fade-in">
                    - I think we found what we came for.
                    </blockquote>
                    <blockquote data-aos="fade-in">
                    - Crystalline rock, huh?
                    </blockquote>
                    <blockquote data-aos="fade-in">
                    - Yes, sir. You better believe it. Oh, boy, I think we might have ourselves something close to anorthosite…What a beaut (269).
                  </blockquote>
                  </p>
                  <p data-aos="fade-in">
                  That gleaming sample was soon named the “genesis rock”.
                </p>
                <div class="margin-v2">
                  <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                    <div class="object-title">EVA 2: 2 - Genesis Rock</div>
                    <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/9" target="_blank"> <span
                        uk-icon="link"></span>
                      view </a>
                  </figcaption>
                  <iframe data-aos="fade-in" class="uk-width-1-1"
                    src="https://player.vimeo.com/video/265046072"></iframe>
                </div>
                <p data-aos="fade-in">
                  At the end of the final EVA, Scott performed a televised sequel to the experiment Galileo is purported to have conducted at the Tower of Pisa. He dropped a hammer and a feather together in the lunar vacuum and observed that they struck the ground at the same time ("Apollo 15," https://solarsystem.nasa.gov/missions/apollo-15/in-depth/). Commander Scott describes how he conducted the experiment:
                  <blockquote data-aos="fade-in">
                    I wanted to prove the law, proposed more than there centuries before by the Italian astronomer and mathematician Galileo Galilei, that all objects fall with equal speed in a vacuum. Taking into one hand a falcon feather I had brought along for the purpose and in the other my trusty aluminium geology hammer, I positioned myself in front of the cameras, raised my arms and let both objects fall (273).
                  </blockquote>
                  </p>
                  <p data-aos="fade-in">
                  This video that is part of the Apollo 15 Learning Hub’s collection shows how the feather and hammer experiment was shown on TV back on earth.
                </p>

                <div class="margin-v2">
                  <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                    <div class="object-title">EVA 3: 2 - The Hammer and Feather experiment on the surface of the Moon as shown on TV</div>
                    <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/11" target="_blank"> <!--<span uk-icon="link"></span>-->
                      view
                    </a>
                  </figcaption>
                  <iframe data-aos="fade-in" class="uk-width-1-1"
                    src="https://player.vimeo.com/video/265046535"></iframe>
                </div>

              </div>
            </section> <!-- end tirgger on moon-->

            <section id="trigger3">
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" uk-sticky-below class="uk-margin-remove uk-ap-heading">Sub
                Satellite</h2>
              <p data-aos="fade-in">
                On Aug. 2, the Lunar Modulefired its ascent stage engine and lifted off the moon for its rendezvous with command module, or CM, Endeavor. For the first time, the lunar liftoff was seen on Earth via the LRV television camera. The two spacecraftsdocked as Endeavor began its 50th lunar orbit. On the 74th revolution, the Particles and Fields subsatellite was spring-launched from the service modulebay. On the next revolution, Aug. 4, a 2-minute, 21-second propulsion systemburn put Apollo 15 on its path back to Earth ("Apollo 15," https://www.nasa.gov/mission_pages/apollo/missions/apollo15.html). This photo shows one page ofthe flight plan that was used by the crew of Apollo 15 onboard the Command and Service Modulewith handwritten annotations by the crew. This photoshowsone hourof the schedule that the crew had to follow after the CommanderDavidScott and James Irwin had returned back to the CSM after their Lunar landing.
              </p>
              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">CSM Flight Plan</div>
                  <a class="object-action uk-button uk-button-default"
                    href="https://readux2.ecdsdev.org/volume/tsnhf/page/tsnhf_00000113.jpg" target="_blank">
                    <!--<span uk-icon="link"></span>--> view </a>
                </figcaption>
                <a data-aos="fade-in" href="https://readux2.ecdsdev.org/volume/tsnhf/page/tsnhf_00000113.jpg">
                  <img class="uk-width-1-1"
                    src="https://images.readux.ecds.emory.edu:8443/cantaloupe/iiif/2/tsnhf_00000113.jpg/full/full/0/default.jpg">
                </a>
              </div>
              <p data-aos="fade-in">
                While travelling back to Earth, the Apollo 15 crew had several tasks to complete, the first of which was to launch the sub-satellite:
                <blockquote data-aos="fade-in">
                  We still had a fairly full program of scientific experiments to perform during our return journey. First, before leaving lunar orbit, we had to deploy a small hexagonal satellite, the first sub-satellite to be launched in space, which would continue to orbit the Moon and send back data on its magnetic field for over a year (277).
                </blockquote>
                </p>
                <p data-aos="fade-in">
                The following series of photos is detailing the launch of the sub-satellite from the Command and Service Module.
              </p>
              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Subsatellite Launch</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/4" target="_blank"> <!--<span
                      uk-icon="link"></span>-->
                    view </a>
                </figcaption>
                <iframe data-aos="fade-in" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                  src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/431162745&color=%23ff5500&auto_ıplay=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
              </div>
              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Subsatellite Launch</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/34" target="_blank"> <!--<span
                      uk-icon="link"></span>-->
                    view </a>
                </figcaption>
                <img data-aos="fade-in" class="uk-width-1-1"
                  src="https://apollo15hub.org/files/original/b0c3a15e196c5ebebd0acf9b89534de8.jpg" />
              </div>
              <p data-aos="fade-in">
              This small satellite was designed around a hexagonal structure with a diameter of 14 inches that was equipped with three instrument booms. The power supply came from solar panels and chemical batteries. The instruments measured the strength and direction of interplanetary and terrestrial magnetic fields, detected variations in the lunar gravity field, and measured proton and electron flux ("Apollo 15," https://solarsystem.nasa.gov/missions/apollo-15/in-depth/).
              </p>
            </section> <!-- end trigger 3-->

            <section id="trigger4">
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" uk-sticky-below class="uk-margin-remove uk-ap-heading">
                Return to Earth</h2>
              <p data-aos="fade-in">
                On August 5, while the Command and Service Module was on its way back to Earth, Alfred Worden had to perform a deep space extravehicular activity - “the first ever performed in deep space” as Commander Scott mentions in his book (227).
              </p>
              <p data-aos="fade-in">
                In this photo, we see Astronaut Alfred M. Worden floating in space outside the spacecraft during his trans-Earth EVA. During his EVA, Worden made an inspection of the Service Module’s Scientific Instrument Module (SIM) bay and retrieved the film cassettes from the Panoramic Camera and the Mapping Camera before the SIM was discarded into space.
              </p>

              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Worden During His Trans-Earth EVA</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/43" target="_blank"> <!--<span
                      uk-icon="link"></span>-->
                    view </a>
                </figcaption>
                <img data-aos="fade-in" class="uk-width-1-1" data-aos="fade-in"
                  src="https://apollo15hub.org/files/original/84f76c05c08318a74217aefdfa43ac1e.jpg" />
              </div>

              <p data-aos="fade-in">
                Toward the end of their trip to the Moon and back the crew started preparing for landing back on Earth. The landing procedure went smoothly for the most part, although there was an unexpected problem that could have potentially jeopardized the mission:
                <blockquote data-aos="fade-in">
                  Twelve days after blasting away from the Cape we prepared our spacecraft for landing […] one of the Endeavour’s three main parachutes collapsed shortly after it was deployed. But the remaining two were sufficient to break our fall and bring us down safely (278).
                </blockquote>
                </p>
                <p data-aos="fade-in">
                This is a color photograph capturing the Apollo 15 CSM impact with the ocean. The two successfully deployed parachutes are visible.
              </p>
            <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Return to Earth</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/78" target="_blank"> <!--<span
                      uk-icon="link"></span>-->
                    view </a>
                </figcaption>
                <img data-aos="fade-in" class="uk-width-1-1" data-aos="fade-in"
                  src="https://apollo15hub.org/files/original/cd4a3795f1de2bec062903347441f6de.jpg" />
              </div>

              <div class="margin-v2">
                <div class="embed-container" data-aos="fade-in">
                  <iframe src="https://www.youtube.com/embed/E-Vd75Ptg9I" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <p data-aos="fade-in">
                At approximately 4:46 p.m. EDT Aug. 7, Apollo 15 splashed down in the Pacific Ocean, about 335 miles north of Honolulu, ending a flight of 12 days, seven hours. The crew was picked up by helicopters from the prime recovery ship, the USS Okinawa, 6.32 miles from the targeted touchdown point ("Apollo 15," https://www.nasa.gov/mission_pages/apollo/missions/apollo15.html).
              </p>

              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Astronauts</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/25" target="_blank"> <!--<span
                      uk-icon="link"></span>-->
                    view </a>
                </figcaption>
                <img data-aos="fade-in" class="uk-width-1-1"
                  src="https://apollo15hub.org/files/original/e38f70d36e85249c8a05ec8d7fe022e7.jpg" />
              </div>

            </section> <!-- end trigger 4-->

            <section>
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" uk-sticky-below class="uk-margin-remove uk-ap-heading">
                Conclusion</h2>
              <p data-aos="fade-in">
                The return of the Apollo 15 mission included a long series of talks and presentations for the crew members that were informed about the accomplishments of their mission regarding the scientific experiments they had conducted, as well as the engineering and other technical achievement of the Apollo 15 mission. Commander Scott commenting on the aftermath of the Apollo 15 mission:
                <blockquote data-aos="fade-in">
                  ... immediately on our return we went through endless debriefings about the science, engineering and operation of our mission, all of which was very interesting (280).
                </blockquote>
              </p>
              <p data-aos="fade-in">
                In the following photo, we see Astronauts David R. Scott, left foreground, and James B. Irwin, right foreground, join the Manned Spacecraft Center’s geologists in getting first looks at some of the first Apollo 15 samples to be opened in the Non-Sterile Nitrogen Processing Line in the MSC Lunar Receiving Laboratory (NASA).
              </p>
              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">The MSC Lunar Receiving Laboratory</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/88" target="_blank"> <!--<span
                      uk-icon="link"></span>-->
                    view </a>
                </figcaption>
                <img data-aos="fade-in" class="uk-width-1-1"
                  src="https://apollo15hub.org/files/original/f1bb696c0ba1b1923cd9e91fdeb1f1df.jpg" />
              </div>
              <p data-aos="fade-in">
                The samples that the mission brought back had been deemed as especially valuable by NASA scientists and it would turn out to be one of the more noteworthy contributions of the Apollo 15 mission. -Dimitri Zaras, 2021
              </p>
            </section>

            <section>
              <h2 data-aos="fade-in" uk-sticky="bottom: true; offset: 80;" class="uk-margin-remove uk-ap-heading">About
              </h2>
              <p data-aos="fade-in">
                <a href="https://github.com/ecds/Apollo-15-Flight-Path" class=" object-action uk-button uk-button-default"><span uk-icon="github"></span>
                  visit
                  on github </a>
              </p>
              <p data-aos="fade-in">
                Flight Path is designed and produced by <a href="https://github.com/jcmundy" class="ap-inline-link">Joanna
                  Mundy</a>, <a href="https://github.com/jayvarner" class=" ap-inline-link">Jay Varner</a> and <a
                  href="https://github.com/yl5682" class="ap-inline-link">Yang Li</a> at <a href="https://ecds.emory.edu/"
                  class="ap-inline-link">Emory Center for Digital Scholarship. </a>
              </p>
              <a href="https://ecds.emory.edu/" class=""><img class="margin-v2" data-aos="fade-in" width="300px"
                  src="images/lits-ecds-hz-grey.svg"></a>
            </section>

          </div>
        </article>
        <!-- left column -->

        <!-- right column -->
        <div class="svg-collection">
          <?xml version="1.0" encoding="utf-8"?>
          <svg class="flight-path" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 216.2 448.1"
            style="enable-background:new 0 0 216.2 448.1;" xml:space="preserve">
            <g id="Layer_2_1_">
              <path id="leg-4" class="cls-1 descent" style="stroke-linecap: round; stroke-linejoin: round;" fill="none"
                stroke="darkturquoise" stroke-width="5"
                d="M87.8,442.9c-12-6.3-20.3-18.1-22.2-31.5c-0.4-2.9-0.8-8.6,3.4-23.1
                c5.6-19.4,10.4-28.5,14.9-35.6c3.1-5,6.6-9.5,15.2-18.8c21.5-23.3,29-26.9,47.2-46.2c9.4-10,18.2-20.5,26.5-31.5
                c8.5-11.2,16.2-21.4,24-36.5c4-7.6,7.4-15.4,10.2-23.5c6.6-19,9.7-38.9,9.2-59c-0.6-15.2-3.3-30.3-8-44.8
                c-3.2-9.7-6.9-20.5-15.8-32c-5.1-6.5-10.8-13.9-21.2-18.2c-10.7-4.5-27.5-6-33.2,2.2c-1.3,1.9-2,4.2-2,6.5" />
              <path id="leg-3" class="cls-1 descent" style="stroke-linecap: round; stroke-linejoin: round;" fill="none"
                stroke="darkturquoise" stroke-width="5"
                d="M118.7,405.3c-4.3-3.7-10.1-9.6-13.3-16.8c-0.9-2.1-1.6-4.2-0.8-6.3c1.4-3.5,6-4.5,7.2-4.8
                c7.5-1.7,14.1,3.1,16.3,4.7c1.6,1.1,11,8.2,12.2,20.9c0.5,6.1-0.9,12.1-3.9,17.4c-1.6,3.2-7.3,14.1-19.5,17.1
                c-10.4,2.5-19-2.4-21.6-3.9c-10.3-6-17.5-17.6-17.6-29.8c-0.1-11.3,5.6-21.9,15.2-28c2.3-1.5,11.7-7.4,23.6-5
                c6.9,1.4,11.4,4.9,14.9,7.8c4.6,3.7,14.3,11.6,16.2,24.7c2.3,15.8-8.2,27.4-11,30.5c-12.3,13.8-32.4,17.5-48.8,9.1" />
              <path id="leg-2" class="st1" style="stroke-linecap: round; stroke-linejoin: round;" fill="none"
                stroke="deeppink" stroke-width="5" d="M59.6,370.1c0.2-1.4,0.5-2.8,0.8-4.2c1.3-5.2,3.5-10.1,6.7-14.4c2.3-3.2,5.1-5.9,8.3-8
                c4.1-2.7,8.8-4.4,13.7-5c9.1-1.1,16.2,2.1,20.3,4c10.6,5,16.4,12.4,22.6,20.3c7,9,12.3,19.1,15.6,30c2.3,7.7,2.4,12,2.3,14.6
                c-0.2,6.2-1.9,12.2-5,17.6c-4.4,8.2-11.6,14.4-20.3,17.6c-0.8,0.3-13,4.4-25.8-0.7c-3.8-1.3-7.2-3.5-10-6.3c-2.7-2.9-4.7-6.3-6-10
                c-2.1-5.6-3-11.7-2.5-17.7c0.3-3.8,1.2-7.5,2.5-11c0.8-2.8,2.1-5.4,3.8-7.7c1.8-2.8,4.3-5.1,7.3-6.7c2.4-1.3,5-2.1,7.7-2.1
                c3.7,0.1,7.3,1.6,10,4.1c3.4,3.3,4.5,7.3,5.8,12.7c0.7,2.7,1.1,5.4,1.2,8.1" />
              <path id="leg-1" class="st1" style="stroke-linecap: round; stroke-linejoin: round;" fill="none"
                stroke="deeppink" stroke-width="5" d="M146.2,123c-0.7,2.7-1.6,6.5-2.3,11c-1.2,8-1,13.8-0.7,22.3c0.6,15.1,2.4,19.2,3.7,21.7
              c1,2.3,2.5,4.3,4.3,6c7.8,6.6,22.1,5.3,19.7,5c3.4-2.3,6.6-4.9,9.7-7.7c17.1-15.7,23.5-34.2,26.3-42.7c5-15.1,6.7-31.2,5-47
              c-1.4-10.9-4.5-21.5-9.3-31.3c-8-16.2-18.5-26.1-25.7-32.7c-5.8-5.6-12.1-10.5-19-14.7C128.2-4.7,96,0.2,85.9,1.9
              C75.3,3.7,61,6.2,46.2,16.6c-13.6,9.6-20.5,20.8-26.3,30.3C4.7,71.7,2,95.3,0.9,105.6c-0.9,7.9-1.1,15.8-0.7,23.7
              c1.9,35.6,16.7,62.1,25.8,77.8c10.7,18.5,21.5,31.3,35.5,48c10.7,12.7,16.4,18.2,33.5,38.8c0.6,0.8,11.4,13.8,23.2,30.2
              c3,4.1,6.3,8.9,10.2,15.2c3.5,5.4,6.6,11,9.4,16.7c2.8,5.7,4.4,9.7,7.1,16.4c7.8,19.6,9.2,27.7,9.8,32.1c0.3,1.7,0.4,3.3,0.5,5
              c0.5,14.3-8.7,25-9.3,25.6c-9.5,10.7-22.3,12-28,12.6c-4,0.4-12.3,1.2-21-3c-2.1-1.1-4.1-2.3-6-3.7c-14.3-10.6-21.8-27.7-24.7-34.4
              c-2.9-6.7-5.7-13.5-6.7-23c-0.5-4.5-0.5-9,0.2-13.5" />
            </g>
          </svg>
          <!-- <object data="images/flight-path.svg" class="flight-path" type="image/svg+xml"></object> -->
          <object data="images/Earth2017.svg" class="earth" type="image/svg+xml"></object>
          <object data="images/moon-color.svg" class="moon" type="image/svg+xml"></object>
          <object data="images/surface.svg" class="surface uk-cover-container" type="image/svg+xml"></object>
        </div>
        <!-- right column -->

      </div>
    </div>
  </div>
  #changing the lm to command module for return and the minimal-3d styling.
  <object data="images/ship4.svg" id="lm" class="lm" type="image/svg+xml"></object>
  <object data="images/ship3.svg" id="ship" class="ship" type="image/svg+xml"></object>


  <div class="background">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
  </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/js/uikit-icons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="https://scrollmagic.io/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="js/index.js"></script>

</html>' ?>