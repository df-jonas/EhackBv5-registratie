$(document).ready(function () {

    countDown();
    overlays();
    menuActiveState();
    closeMenuOnClick();

});

function overlays() {

    $(".showOverlay").click(function (event) {

        event.preventDefault();

        if ($(this).attr("id") == "userfull") {
            $("#overlay .title").html("Audi 1");
            $("#overlay .text").html("Test");
        }
        if ($(this).attr("id") == "barracuda") {
            $("#overlay .title").html("Philippe Michiels &amp; Johan van Gestel");
            $("#overlay .text").html("How about als topic: Security & Networking in the Cloud Generation. We kunnen hiervoor veel info halen uit onze bestaande oplossingen, focusen op SD-WAN, Ransomware, connectiviteit en visibiliteit en het netwerk waar studenten binnen enkele jaren in terecht komen en hoe security en networking er dan meer en meer gaan uitzien, of toch ons zicht daarop.");
        }
        if ($(this).attr("id") == "guardsquare") {
            $("#overlay .title").html("Irasara Senarathne");
            $("#overlay .text").html("A mobile application in the wild is exposed to a multitude of threats that are quite easy to orchestrate. In this presentation, I will discuss how static and dynamic analysis opens up different attack vectors for mobile applications. I will discuss common threats to mobile apps, and outline how code hardening techniques and run-time application self-protection (RASP) mechanisms can mitigate such threats.<br><br>Irasara Senarathne is a Pre-sales and services engineer at GuardSquare. She holds an M.Sc. in Computer Science and specializes in mobile security. Irasara is one of the technical specialists at GuardSquare, she offers assistance to customers, performs penetration testing and contributes to product R&D.");
        }
        if ($(this).attr("id") == "cegeka") {
            $("#overlay .title").html("Koen Vanhees");
            $("#overlay .text").html("Het principe van een NOC (Network Operations Center) is al wijdverspreid: aan de hand van next generation firewalls, web application firewalls, web en mail gateways, antivirus,… investeren vele bedrijven al jaren fortuinen aan maatregelen die instaan voor “protect”.  Desondanks worden er dagelijks nog bedrijven gehackt, met grote reputatie- en financiële verliezen tot gevolg.  De cyberbedreigingen worden steeds meer geavanceerd en het wordt steeds meer een uitdaging om een cyberaanval te vermijden.  Vandaar dat er steeds meer wordt gefocust op “detect” en “respond” – naast “protect” – om een impact van een onvermijdelijke cyberaanval zoveel mogelijk te verminderen.  Dit gebeurt typisch in een SOC (Security Operations Center) en in deze seminarie bekijken we hoe zo een SOC zich organiseert aan de hand van voorbeelden “from the field”.");
        }

        if ($(this).attr("id") == "csgo") {
            $("#overlay .title").html("CS:GO");
            $("#overlay .text").html("Voor het Counter Strike: Global Offensive starten we met een poulesysteem waarbij er 2 poules van 6 teams zijn. Elk team zal eenmaal tegen elk team spelen en de 4 teams die het meeste hebben gewonnen gaan door naar de volgende ronde. In deze ronde zal er met een bracket systeem gewerkt worden voor de 8 overblijvende teams. Als je wint ga je door naar de volgende ronde in de bracket als je verliest is het gedaan. De games worden gespeeld op servers voorzien door de organisatie.");
        }
        if ($(this).attr("id") == "hearthstone") {
            $("#overlay .title").html("Hearthstone");
            $("#overlay .text").html("Zoals elk jaar wordt er een hearthstone toernooi georganiseerd op EHackB. Toon je “skills” aan je medeleerlingen en geef niet op tot je als laatste overblijft. Laat je zeker niet afschrikken door de tegenstand en probeer zeker zelf ook zo ver mogelijk te raken in de bracket. Elke speler bereidt 3 decks van 3 verschillende classes voor, deze worden niet meer veranderd voor de rest van het toernooi. De decks worden in het standaard formaat gespeeld, dat wil zeggen dat je geen kaarten mag gebruiken uit de 'Goblins VS Gnomes' en 'Naxxramas'. Er worden geen accounts gedeeld, één account kan maar één keer ingeschreven worden. Elke match bestaat uit een best of 5, spelers moeten met alle 3 hun decks een game winnen, de eerste die wint met al zijn decks gaat door naar de volgende ronde. Afhankelijk van de hoeveelheid spelers zal er misschien ook nog een losersbracket zijn. Alle games worden op de Europese servers gespeeld.");
        }
        if ($(this).attr("id") == "fifa") {
            $("#overlay .title").html("FIFA");
            $("#overlay .text").html(" Durf je je talent en skills te komen tonen op het voetbalveld, en als deze goed genoeg zijn kans te maken op een prijs? Dan is ons FIFA17 Toernooi de perfecte opportuniteit voor jou! Registreer je snel omdat er maar slechts 16 deelnemers toegestaan zijn. Lengte van een match: - Achtste Finale: 6’ - Achtste Finale: 6’ - Vierde Finale: 6’ - Halve Finale: 8’ - Finale: 8’ - Kleine Finale: 8’ Het toernooi wordt op PS4 gespeeld. Wanneer een deelnemer verliest wordt hij/zij geëlimineerd. De deelnemers zullen gevraagd worden, door het centrale streaming, te komen opdagen een paar minuten voor de match. Als deze na vijf minuten het einde van de vorige match niet komt opdagen wordt deze geëlimineerd. Elke deelnemer kan het spel maar maximum drie keer pauzeren per match.");
        }
        if ($(this).attr("id") == "lol") {
            $("#overlay .title").html("League of Legends");
            $("#overlay .text").html("Voor het League of Legends tornooi werken we met een poulesysteem waarbij er 2 poules van 6 teams zijn. Elk team zal eenmaal tegen alle teams binnen zijn poule spelen. De top 4 van elke poule zullen doorstoten naar de volgende ronde. Na de poules zullen de teams in een single elimination (bracket-systeem) tegen elkaar in een best-of-1 match spelen tot en met de finale. Voor het toernooi zullen wij gebruik maken van de Riot Rules en vragen elke deelnemer zich te houden aan de Summoners code. Elke speler zal zich moeten registreren op het Riot event website om kans te maken op de prijzen.");
        }
        if ($(this).attr("id") == "ssb") {
            $("#overlay .title").html("Super Smash Bros");
            $("#overlay .text").html("Je kiest 1 character uit een grote verzameling van Nintendo characters om jezelf naar de top te vechten. Regels: Het toernooi bestaat uit 2 rondes, de eliminatie- en de finaleronde Indien er een speler niet komt opdagen wordt zijn match uitgesteld tot het einde van de ronde, komt hij dan nog niet opdagen betekent het een directe diskwalificatie. Controllers zullen ter beschikking gesteld worden. Uit eigen veiligheid is het aangeraden om je eigen controller mee te nemen. Er wordt ook genoeg tijd voorzien om de settings van je controller in te stellen (indien dit moet gebeuren). Eliminatiefase: Er zijn twee groepen van 8 personen. Alle spelers binnen de groep vechten voor eerste en tweede plaats. Deze eerste twee stoten dan door naar de finalefase. Finalefase: Eerste en tweede plaats van beide groepen gaan door naar de finalefase om uit te vechten wie de uiteindelijk winnaar wordt. Als prijs zijn er twee amiibo’s beschikbaar. De winnaar mag kiezen welke amiibo hij/zij wilt. De tweede plaats wint de overige amiibo.");
        }
        if ($(this).attr("id") == "rl") {
            $("#overlay .title").html("Rocket League");
            $("#overlay .text").html("Denk jij tegen de pro's op te kunnen? Laat dan jouw skills zien op ons 1v1 rocket league toernooi. Het toernooi wordt gespeeld op voorziene computers die plaatsvinden op het evenement zelf. De enige vereiste is dat je zelf een controller meebrengt.");
        }

        if ($(this).attr("id") == "hack") {
            $("#overlay .title").html("Hack");
            $("#overlay .text").html("");
        }
        if ($(this).attr("id") == "casual") {
            $("#overlay .title").html("Casual");
            $("#overlay .text").html("");
        }
        if ($(this).attr("id") == "create") {
            $("#overlay .title").html("Create");
            $("#overlay .text").html("");
        }
        if ($(this).attr("id") == "competitive") {
            $("#overlay .title").html("Competitive Gaming");
            $("#overlay .text").html("");
        }
        if ($(this).attr("id") == "food") {
            $("#overlay .title").html("Food &amp; Drinks");
            $("#overlay .text").html("");
        }
        if ($(this).attr("id") == "learn") {
            $("#overlay .title").html("Learn");
            $("#overlay .text").html("");
        }

        if ($(this).attr("id") == "fietsen") {
            $("#overlay .title").html("Stappen - Fietsen");
            $("#overlay .text").html("Stappen<br> De Nijverheidskaai 170 bevindt zich aan het kanaal Brussel - Charleroi, naast de slachthuizen in Anderlecht.<br><br> Trappen<br> Met de fiets gebruik je het best de 'flat track' routes. De routes vind je hier en de map hier. Alsje geen fiets hebt, kan je er altijd één huren bij Villo of Blue Bike.");
        }

        if ($(this).attr("id") == "openbaar") {
            $("#overlay .title").html("Openbaar vervoer");
            $("#overlay .text").html("Trein<br> Campus Kaai is snel bereikbaar vanaf het Zuidstation dankzij metrolijnen 2 en 6. Afstappen in metrostation Delacroix.<br><br> Metro<br> Delacroix: lijn 2 en lijn 6.<br><br> Bus en tram<br> Trams 31 en 81 vanaf Brussel-Zuid. Bus 46 vanaf De Brouckère of Washuis. Voor meer informatie over de tram en bus in Brussel kan je terecht op de website van de MIVB. Meer informatie over de bussen van De Lijn vind je op de website.");
        }

        if ($(this).attr("id") == "auto") {
            $("#overlay .title").html("Auto");
            $("#overlay .text").html("Parkeren kan gemakkelijk voor of achter de campus. De binnenparking tussen A &amp; B zijn dit jaar ook toegankelijk. (Beperkte &amp; onbewaakte parking)");
        }

        $("#overlay").css("display", "flex");
    });

    $("#overlay").click(function () {
        $("#overlay").css("display", "none");
        $("#overlay .title").html("");
        $("#overlay .text").html("");
    });

}

function countDown() {
    var countDownDate = new Date("Dec 15, 2017 16:45:00").getTime();
    var x = setInterval(function () {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if (hours < 10) {
            hours = "0" + hours;
        }
        if (minutes < 10) {
            minutes = "0" + minutes;
        }
        if (seconds < 10) {
            seconds = "0" + seconds;
        }
        var dag = " dagen<br>";
        if (days == 1) {
            dag = " dag<br>";
        }
        if (days == 0) {
            days = "";
            dag = "";
        }
        document.getElementById("countdown").innerHTML = days + dag + hours + "&nbsp;&nbsp;:&nbsp;&nbsp;" + minutes + "&nbsp;&nbsp;:&nbsp;&nbsp;" + seconds;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "";
        }
    }, 1000);
}

function menuActiveState() {
    $(window).scroll(function () {
        var scrollDistance = $(window).scrollTop() + 100;
        $('section').each(function (i) {
            if ($(this).position().top <= scrollDistance) {
                if (i == 1) {
                    $('header li a.active').removeClass('active');
                }
                $('header li a.active').removeClass('active');
                $('header li a').eq(i).addClass('active');
            }
        });
    }).scroll();
}

function closeMenuOnClick() {
    $('.navbar-nav>li>a').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });
}

