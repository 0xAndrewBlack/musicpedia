<?php
include("./includes/connection.php");
include_once "classes/Felhasznalo.php";
include './includes/check_auth.php';

$user=$_SESSION['user'];
$performername = "Mc Hawer és tekknő";
if(isset($_POST['Kedvenc'])) {
    $user->addFavorite($performername);
}
if(isset($_POST['NemKedvenc'])) {
    $user->deleteFavorite($performername);
}

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Musicpedia</title>
    <meta name="author" content="a gyász meg a szhenvedés"/>
    <meta name="keywords" content="MC Hawer és Tekknő"/>
    <link rel="icon" href="assets/resources/logo.png"/>
    <link rel="stylesheet" href="assets/styles/Eloado.css"/>
    <link rel="stylesheet" href="./assets/styles/main.css"/>
    <link rel="stylesheet" href="./assets/styles/animaciok.css"/>

</head>
<body>
<!-- Menü -->
<nav class="navigacio">
    <ul id="menu">
        <li class="menuElemek">
            <img id="logo" alt="Musicpedia logo" src="./assets/resources/logo.png" height="60" draggable="false"/>
        </li>
        <li class="menuElemek"><a href="./index.php">Főoldal</a></li>
        <li class="menuElemek"><a href="./eloadok.php" class="active">Előadók</a></li>
        <li class="menuElemek dropdown">
            <a id="profilom" href="javascript:void(0)" class="dropbtn">Profilom</a>
            <div class="dropdown-content"><!-- Ide betöltődik majd a navigáció --></div>
        </li>
    </ul>
</nav>

<!--aboutLipa-->
<main class="kontener">
    <header>
        <h2>MC Hawer és Tekknő</h2>
    </header>
    <img src="assets/resources/eloadok/mchawerestekno0.jpg" alt="Avatar" width="350"/>
    <p id="leiras">MC Hawer és Tekknő egy magyar mulatós popzenét játszó könnyűzenei duó. Benyó Miklós 1971. nyarán született Budapesten. Finommechanikai műszerész szakon végzett. Jókedvében mulatósan kezdte énekelni a Jaj, de jó, jaj, de finom kezdetű nótát. Ekkor támadt az ötletük, hogy roma zenészekkel és népi hangszerekkel próbálják meg. 1995-ben Rétfalvi Attilával megalakították a Tekknő együttest, a mulatós techno első hazai képviselőjeként. Jó barátságba került MC Hawerrel, aki felvetette, hogy próbálják meg együtt. Koczka Géza 1965-ben, Budapesten született. Az általános iskola elvégzése után, másfél évig egy szakközépiskolába járt. Az ezt követő kilenc évben volt távirat-kézbesítő, gépkocsivezető, sorkatona, traktoros, segédmunkás, gyermekfotó-üzletkötő. 1993-ban elköltözött Szombathelyre, hogy az ottani piacot is kiaknázza, de 1995-től más munkát keresett. Közben egy-két báli zenekarban is dobolt, és azt tapasztalta, hogy a vidéki fiatalok jól szórakoznak a mulatós nótákra. Ekkor támadt az az ötlete, hogy meg kellene próbálni „frissíteni” ezeket a dalokat. 1995-ben Technóták 1. című hanganyaggal jelentkezettk egy szombathelyi magánkiadónál, de nem váltotta be a hozzá fűzött reményeket, mert korszerűtlen volt a hangszerelése. Újra próbálkozott Szabó Péter szintetizátorossal, aki a Bye bye, lány című lemezig a zenei alapokat készítette.Új lemezük már egy komolyabb hangtechnikával rendelkező kiadónál jelent meg 2000 februárjában Bye, bye, lány címmel. Decemberre aranylemez, 2002 júniusára pedig platinalemez lett belőle.
        2013 őszén többszöri nekifutásra megszabadult súlyos alkoholfüggőségétől, három évvel később a cigarettát is sikerült letennie. Szeret utazni, kedvenc sportja a kerékpározás, nyaranta sok időt tölt el a Velencei-tó körül.
        2015-ben megjelent 'Mámor' című daluk, videóklippel.
        2016 nyarán megjelent az Ismerős Arcok zenekar 'Nélküled' című számából készült feldolgozásuk.</p>
    <form method="POST">
        <?php
        if($user->isfavorite("Mc Hawer és tekknő")==0){?>
        <input type="submit" name="Kedvenc" value="Kedvencekhez Adom" />
    </form>

    <?php }else{?>
        <form method="POST">
            <input type="submit" name="NemKedvenc" value="Törlés a kedvencek közül" />
        </form>

    <?php }
    ?>

    <button class="collapsible">Utcára nyílik</button>
    <div class="content">
    <pre>
    Rap1:
    Van egy utca, hol a hangulat olyan,
    Mintha mindig folyna a folyam.
    Folyik is bizony, de nem csak a bólé,
    A kocsmáros bizony abból él.
    A zenekarnak is jó itt a dolga,
    Mulat a Pista is, meg az Olga.
    Szórják a pénzt, a jó magyar forintot,
    Igazítják a jófajta joggingot.

    Refrén:
    Utcára nyílik a kocsmaajtó,
    Kihallatszik belőle a szép muzsikaszó.
    ||: Sört ide, bort ide, te szép barna lány, az anyád,
    Hadd mulatom ki magam igazán! :||
    Mához egy hétre már nem leszek itt,
    Elvisz a gyorsvonat engemet is.
    ||: Gyorsvonat, sebesvonat valahol megáll, ha megáll,
    Nyújtom a jobb kezem - Szerbusz, babám! :||

    Rap2:
    Szeretik egymást, ez látszik rajtuk,
    Tetoválva van mind a két karjuk.
    Ebből látszik az igazi érzés,
    Esküvő mikor lesz? - ez a kérdés.
    Szép lenne a lány arának,
    De nem született jó anyának.
    A fiúnak sem áll jól a baráti csuha,
    A joggingot váltja esküvői ruha.
    </pre>
        <pre>
    Rap1:
    There is a street where the atmosphere is
    It's like the river is always flowing.
    It does happen, but not only that,
    The bartender certainly makes a living from it.
    The band is doing well here too,
    The Pista and Olga are also happy.
    They spend the money, the good Hungarian forint,
    They adjust to good jogging.

    Chorus:
    The pub door opens to the street,
    The beautiful word for music comes out of it.
    ||: Beer here, wine here, you beautiful brunette girl, your mother,
    Let me really make fun of myself! : ||
    I won't be here for a week today,
    The express train will take me too.
    Fast train, high-speed train stops somewhere if it stops,
    I extend my right hand - Serbia, baby! : ||

    Rap2:
    They love each other, it shows in them
    Both of their arms are tattooed.
    It shows the real feeling
    When will the wedding be? - this is the question.
    That would be nice for the girl,
    But she was not born a good mother.
    The boy doesn't like a friendly dress either,
    Jogging is replaced by a wedding dress.
    </pre>
        <iframe class="video" src="https://www.youtube.com/embed/jRo2aFxY9PQ" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <button class="collapsible">Piros volt a paradicsom</button>
    <div class="content">
        <pre>
        Piros, ha tilosba tévedtem, bele-belehatoltam itt az életbe, de
        Hol van már az az örök tûz, mi a szemedben lángolt, s ördögöt ûz
        Elmentél, itthagytál végleg, sajnálom magam ez itt a lényeg!
        Adjatok hát egy kanalat, hogy szíven szúrhassam magamat!
        Piros volt a paradicsom, nem sárga, elhagyott a feleségem a Sára
        Mit ér az én legénységem, csuhajja, hogyha nincs szép feleségem, csuhajja
        Piros lett a paradicsom, nem sárga, elhagyott a feleségem a Sára
        Gyere Sára, súgok neked valamit, gombold ki a selyeminged elejit


        Piros lett a paradicsom, nem sárga.
        Elhagyott a feleségem a Sára.
        [:Mit ér az én legénységem, ihajla,
        Hogyha nincsen feleségem csuhajla. :]

        Azt mondják a paradicsom rossz ízű
        Pedig csak a héja volt a keserű
        [:Gyere babám mondok neked valamit,
        Gombold ki a selyem inged elejét

        Csávo, csávó roma csávó minek vagy
        Ha te folyton ilyen nagyon beteg vagy
        [:Mit ér a te legénységed csuhajja
        Hogyha nincs szép fele csuhajja:]

        Hétfőn este úgy jó laktam túróval.
        Egész éjjel nem bírtam a fúróval.
        [:Gyere rózsám mondok neked valamit,
        Gombold ki a selyem inged elejét. :]

        Hétfőn este úgy jó laktam rizsával,
        Egész éjjel nem bírtam az Icával.
        [:Gyere rózsám mondok neked valamit,
        Gombold ki a selyem inged elejét. :]
    </pre>
        <pre>
        Red, if I made a mistake, I got into life here, but
        Where is the everlasting fire that is kindled in your eyes, and casts out the devil?
        You left, you left me here forever, I'm sorry that's the point!
        So give me a spoon so I can stab myself in the heart!
        The tomatoes were red, not yellow, my wife left Sarah
        What is my crew worthing, if I don’t have a beautiful wife, a tussle
        The tomatoes turned red, not yellow, my wife left Sarah
        Come on Sarah, I'll whisper something to you, unbutton the front of your silk shirt


        The tomatoes turned red, not yellow.
        My wife has left Sarah.
        [: What is my crew worthy of?
        If I don't have a wife. :]

        Tomatoes are said to taste bad
        And only the shell was bitter
        [: Come on my baby I'll tell you something
        Unbutton the front of the silk shirt

        Dude, dude Roma dude, why are you?
        If you're so sick all the time
        [: What is the crew of your crew worth?
        If you don't have a nice half:]

        I had a good time with cottage cheese on Monday night.
        I couldn't stand the drill all night.
        [: Come on my rose I'll tell you something
        Unbutton the front of the silk shirt. :]

        I had a good time with rice on Monday night,
        I couldn't stand Ica all night.
        [: Come on my rose I'll tell you something
        Unbutton the front of the silk shirt. :]
    </pre>

        <iframe class="video" src="https://www.youtube.com/embed/IwG3p7Oo5GU" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <button class="collapsible">Bye-bye lány</button>
    <div class="content">
    <pre>
    Örök a tûz, amíg élsz, dobog a szíved, a szerelem õrzi, míg élsz és nem alszik el
    Nem múlik el, életre kel, nem tûnik el, újabb jön el

    Bye, bye lány, bye, bye love, gondolj rám minden nap
    Nem kell már, hogy jó legyél, ó, a szerelem ennyit is ér

    Jöjj, már, s add hát a kezedet, a szerelem az élet legszebbik esete.
    Futsz elõle, néha, mert fáj, nem számít, ha sok az akadály.
    De sokszor érzed, ha leteper téged, a vágy az ágyig aláz, érzed!
    Úgy tennél, mintha sohase látnál, s nem éreznél többet a vártnál!

    Forog a Föld, amíg élsz, szerelem érhet, véget is ér, jön egy új, mi megyünk tovább
    Futunk tovább a percekért, megyünk tovább, ha véget ér

    Nem tudom már, hogy mi az amit eszem, rajtad édes, elment az eszem!
    Ahogy elmentél nem kérdeztél, csak a szavakat ûzöm elfújja a szél.
    Emléked él bennem el nem feledem, hisz csak a szépre emlékezem, kezem
    Feléd nyújtom, de nem érlek el, nyomaszt a bánat, de kit érdekel?
    </pre>

        <pre>
    Eternal fire as long as you live, your heart beats, love keeps you alive and not asleep
    It does not pass away, it comes to life, it does not disappear, another one comes

    Bye, bye girl, bye, bye love, think of me every day
    You don't have to be good anymore, oh, love is worth that much

    Come on, give me your hand, love is the most beautiful case in life.
    You run away from it, sometimes because it hurts, no matter how many obstacles.
    But many times you feel it, when you are overwhelmed by the desire to bed, you feel it!
    You would pretend to never see and feel no more than expected!

    The Earth is spinning as long as you live, love can come to an end, a new one is coming, we will move on
    We run on for minutes, we go on when it ends

    I don't know what I eat anymore, sweetie, I'm gone!
    As you left you didn’t ask, only the words I chase are blown away by the wind.
    Your memory lives in me, I don't forget, because I only remember the beautiful, my hand
    I give it to you, but I can't reach you, grief, but who cares?
    </pre>
        <iframe class="video" src="https://www.youtube.com/embed/R-7FqBeoN-0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <br>
    <br>
    <br>
</main>
<!-- Lábjegyzet vagy mi -->
<footer>
    <p>Musicpedia &copy; 2022</p>
</footer>
<!-- Szkriptek -->
<script src="./assets/scripts/auth.check.js" defer></script>
<script src="assets/scripts/eloado.js"></script>
</body>
</html>