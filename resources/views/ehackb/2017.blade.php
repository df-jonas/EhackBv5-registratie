<!doctype html>

<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>EHACKB 5</title>
    <meta name="description" content="EHackB Editie 5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#0d0d35">
    <meta name="apple-mobile-web-app-title" content="EHackB5">
    <meta name="application-name" content="EHackB5">
    <meta name="theme-color" content="#0d0d35">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2017.css">


</head>

<body id="top">
    <header>
        <nav class="navbar fixed-top navbar-expand-md navbar-dark" style="background-color: #0D0D35;">
            <a class="navbar-brand" href="#">
                <img src="img/logo5.svg" width="30" height="30" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="invisible">
                        <a href=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll" href="#registreren">Registreren</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll" href="#programma">Programma</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll" href="#corners">Corners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll" href="#locatie">Locatie</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div id="overlay" class="overlay">
            <span class="close">x</span>
            <div>
                <div class="title"></div>
                <div class="text"></div>
            </div>
        </div>

        <section id="home">
            <h1 style="margin: 0;margin-left: -99999px;height: 0;">EHackB</h1>
            <div class="home_center">
                <div>
                    <img src="img/home/LogoEHackB.png" alt="Logo EHackB5" />
                    <p id="countdown"></p>
                </div>
            </div>
        </section>

        <section id="registreren">
            <div class="register_center">
                <div>
                    <img src="img/registreren/logoSimple.svg" alt="Logo" />
                    <p>Binnenkort kan je hier registreren voor
                        <br>EHackB Editie 5 - 2017!</p>
                    <!-- <a href="#" class="button">Registreren</a> -->
                </div>
            </div>

        </section>

        <section id="programma">
            <div class="program_center">
                <img src="img/programma/sprekers.svg" alt="" class="icon" />
                <h2>SPREKERS</h2>
                <hr>

                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Bart Keybergh (Userfull)</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Internet Of Things</h6>
                            <p class="card-text"></p>
                            <a href="" id="userfull" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">15:00 - 16:00 / NL</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Philippe Michiels &amp; Johan van Gestel (Barracuda)</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Security &amp; Networking in the Cloud Generation</h6>
                            <p class="card-text"></p>
                            <a href="" id="barracuda" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">15:00 - 16:00 / NL</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/programma/ira.jpg" alt="Irasara Senarathne">
                        <div class="card-body">
                            <h4 class="card-title">Irasara Senarathne (Guardsquare)</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Mobile application protection &amp; reverse engineering</h6>
                            <p class="card-text"></p>
                            <a href="" id="guardsquare" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">16:00 - 17:00 / EN</small>
                        </div>
                    </div>
                </div>

                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Koen Vanhees (Cegeka)</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Een Security Operation Center – voorbeelden ‘from the field’</h6>
                            <p class="card-text"></p>
                            <a href="" id="cegeka" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">16:00 - 17:00 / NL</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Sebastien Deleersnyder (Toreon)</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Whiteboard Hacking aka Hands-on Threat Modeling</h6>
                            <p class="card-text"></p>
                            <a href="" id="barracuda" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">17:15 - 18:15 / NL</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Rutger Truyers (Checkpoint)</h4>
                            <h6 class="card-subtitle mb-2 text-muted">ZERO-Day prevention</h6>
                            <p class="card-text"></p>
                            <a href="" id="guardsquare" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">17:15 - 18:15 / NL</small>
                        </div>
                    </div>
                </div>

                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Sebastien Deleersnyder (Toreon)</h4>
                            <h6 class="card-subtitle mb-2 text-muted">STRIDE analysis of an B2B web and mobile applications, sharing the same REST backend (hands-on)</h6>
                            <p class="card-text"></p>
                            <a href="" id="userfull" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">18:15 - 19:15 / NL</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Dirk Van Welden</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Game development </h6>
                            <p class="card-text"></p>
                            <a href="" id="barracuda" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">18:15 - 19:15 / NL</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Erik Vanderhasselt</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Analyzing network traffic (hands-on)</h6>
                            <p class="card-text"></p>
                            <a href="" id="guardsquare" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">19:30 - 20:30 / NL</small>
                        </div>
                    </div>
                </div>

                <img src="img/programma/workshops.svg" alt="" class="icon" />
                <h2>WORKSHOPS</h2>
                <hr>
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Wireshark</h4>
                            <h6 class="card-subtitle mb-2 text-muted">From packet zero to packet hero </h6>
                            <p class="card-text"></p>
                            <a href="" id="userfull" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">15:00 - 16:00 / NL</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/card.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Philippe Michiels &amp; Johan van Gestel (Barracuda)</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Security &amp; Networking in the Cloud Generation</h6>
                            <p class="card-text"></p>
                            <a href="" id="barracuda" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Audi 1 / 15:00 - 16:00 / NL</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/programma/ira.jpg" alt="Irasara Senarathne">
                        <div class="card-body">
                            <h4 class="card-title">Irasara Senarathne (Guardsquare)</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Mobile application protection &amp; reverse engineering</h6>
                            <p class="card-text"></p>
                            <a href="" id="guardsquare" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Audi 1 / 16:00 - 17:00 / EN</small>
                        </div>
                    </div>
                </div>

                <img src="img/programma/gaming.svg" alt="" class="icon" />
                <h2>GAMING</h2>
                <hr>

                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="img/programma/csgo-photo.png" alt="CS:GO">
                        <div class="card-body">
                            <h4 class="card-title">CS:GO</h4>
                            <h6 class="card-subtitle mb-2 text-muted">PC</h6>
                            <a href="" id="csgo" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">TBA</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/programma/hearthstone-photo.jpg" alt="Hearthstone">
                        <div class="card-body">
                            <h4 class="card-title">Hearthstone</h4>
                            <h6 class="card-subtitle mb-2 text-muted">PC</h6>
                            <a href="" id="hearthstone" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">TBA</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/programma/fifa-photo.jpg" alt="FIFA 18">
                        <div class="card-body">
                            <h4 class="card-title">FIFA</h4>
                            <h6 class="card-subtitle mb-2 text-muted">PS4</h6>
                            <a href="" id="fifa" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">TBA</small>
                        </div>
                    </div>
                </div>

                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="img/programma/lol-photo.png" alt="League of Legends">
                        <div class="card-body">
                            <h4 class="card-title">League of Legends</h4>
                            <h6 class="card-subtitle mb-2 text-muted">PC</h6>
                            <a href="" id="lol" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">TBA</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/programma/supersmashbros-photo.jpg" alt="Super Smash Bros">
                        <div class="card-body">
                            <h4 class="card-title">Super Smash Bros</h4>
                            <h6 class="card-subtitle mb-2 text-muted">WII U</h6>
                            <a href="" id="ssb" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">TBA</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="img/programma/rocketleague-photo.jpg" alt="Rocket League">
                        <div class="card-body">
                            <h4 class="card-title">Rocket League</h4>
                            <h6 class="card-subtitle mb-2 text-muted">PC</h6>
                            <a href="" id="rl" class="card-link showOverlay">Meer info...</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">TBA</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="corners">
            <div class="sectionwrapper">
                <h2>CORNERS</h2>
                <ul>
                    <li>
                        <button id="hack" class="">
                            <img src="img/corners/hack.png" alt="" />
                        </button>
                    </li>
                    <li>
                        <button id="casual" class="">
                            <img src="img/corners/casual.png" alt="" />
                        </button>
                    </li>
                    <li>
                        <button id="create" class="">
                            <img src="img/corners/create.png" alt="" />
                        </button>
                    </li>
                    <li>
                        <button id="competitive" class="">
                            <img src="img/corners/play.png" alt="" />
                        </button>
                    </li>
                    <li>
                        <button id="food" class="">
                            <img src="img/corners/food.png" alt="" />
                        </button>
                    </li>
                    <li>
                        <button id="learn" class="">
                            <img src="img/corners/learn.png" alt="" />
                        </button>
                    </li>
                </ul>
            </div>
        </section>

        <section id="locatie">
            <div class="layer">
                <div class="locatie_center">
                    <div>
                        <h2>LOCATIE</h2>
                        <p>Nijverheidskaai 170
                            <br>1070 Anderlecht</p>
                        <ul>
                            <li>
                                <button id="fietsen" class="showOverlay">
                                    <img src="img/locatie/fiets.svg" alt="" />
                                </button>
                            </li>
                            <li>
                                <button id="openbaar" class="showOverlay">
                                    <img src="img/locatie/trein.svg" alt="" />
                                </button>
                            </li>
                            <li>
                                <button id="auto" class="showOverlay">
                                    <img src="img/locatie/auto.svg" alt="" />
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>

        <div class="footer-logo">
            <img src="img/logo/cisco_logo_large.png" alt="Cisco">
            <img src="img/logo/cisco_meraki.jpg" alt="Cisco - Meraki">
            <img src="img/logo/ehb-logo.jpg" alt="EhB">
            <img src="img/logo/Redcorp_logo.png" alt="Redcorp">
            <img src="img/logo/APC_by_Schneider_Electric_3.png" alt="APC">
            <br>
            <img src="img/logo/Acedemic_Software.gif" alt="Academic Software">
            <img src="img/logo/signpost.jpg" alt="Signpost">
            <img src="img/logo/Stylelabs.png" alt="Stylelabs">
            <img src="img/logo/switchpoint-logo-color-no_border-final.jpg" alt="Switchpoint">
            <img src="img/logo/teamspeak_horizontal.png" alt="Teamspeak">
        </div>

    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
    <script src="js/navbar-fixed.js"></script>
    <script src="js/script2017.js"></script>

</body>

</html>