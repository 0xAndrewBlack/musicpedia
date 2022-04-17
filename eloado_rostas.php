<?php
include("./includes/connection.php");
include_once "classes/Felhasznalo.php";
include './includes/check_auth.php';

$user = $_SESSION['user'];
$performername = "Rostas Szabika";
if (isset($_POST['Kedvenc'])) {
    $user->addFavorite($performername);
}
if (isset($_POST['NemKedvenc'])) {
    $user->deleteFavorite($performername);
}

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <?php include './includes/head.php'; ?>
    <link rel="stylesheet" href="./assets/styles/Eloado.css"/>
</head>
<body>
<!-- Menü -->
<?php include './includes/navigation.php'; ?>
<!-- Minden szar -->
<main class="kontener">
    <header>
        <h2>Rostás Szabika</h2>
    </header>
    <img alt="Avatar" src="assets/resources/eloadok/rostas0.png" width="350"/>
    <p id="leiras"> A Rostás Szabika Official 2012. jauár 8-án került fel a YouTube csatornái közé.
        Legelső feltöltött dala a Paradicsom (Cover), mely a Hooligans együttes ugyanilyen nevű ("(Cover)" nélkül)
        dalának a feldolgozása.
        Azóta több dalt is kiadott, de az igazi áttörést a Csepereg az Eső zeneszáma hozta, melynek az eredeti
        feltöltött videója
        rejtélyes okok miatt nem t
        alálható a YouTube-on, de egy másolatát a 32 gameplaly csatornája őrzi. Hatalmas sláger lett,
        rengeteg helyen játszották, szórakozóhelyektől kezdve iskolai ballagásokig, sőt egy videó erejéig még Cara
        Delevingne is közreműködött.
        A szám akkora sikert hozott, hogy a Művész Úr korábbi dalai is reneszánszukat éli.
        <strong>Kiemelkedőbb zeneszámai: Hogyha Ugatnak a Kutyák, Vettem a Piacon, Nincs már divatban, Eljárok az
            Alvilágba 2020
            Cover, Függőséget Okoztál (Cover) Audio 2020, Te vagy a tavasz (Cover).</strong></p>
    <form method="POST">
        <?php
        if ($user->isfavorite("Rostas Szabika") == 0){
        ?>
        <input type="submit" name="Kedvenc" value="Kedvencekhez Adom"/>
    </form>

    <?php } else {
        ?>
        <form method="POST">
            <input type="submit" name="NemKedvenc" value="Törlés a kedvencek közül"/>
        </form>

    <?php }
    ?>

    <button class="collapsible">Csepereg az eső</button>
    <div class="content">
    <pre>
    Csepereg az eső
    lefolyik az arcomon.
    Régi barátok
    veletek vagyok
    Már nagyon nagyon rég
    jóban rosszban
    együtt vagyunk.
    Nem feledünk mi,
    barátok maradunk.

    Eshet az eső,
    fújhat a szél.
    A szívünket
    nem törte meg
    semmi még.
    Néha volt vitánk
    de szóval se
    bántjuk egymást
    Bármi legyen is
    együtt van a 4 barát.
    </pre>
        <pre>
    The rain is dripping
    it flows down my face.
    Old friends
    I'm with you
    It's been a very long time
    For Better or Worse
    we are together.
    We don't forget
    we stay friends.

    It may rain
    the wind can blow.
    Our hearts
    he didn't break it
    nothing yet.
    Sometimes we had a discussion
    but not so
    we hurt each other
    Whatever it is
    together we have 4 friends.
    </pre>
        <iframe class="video" src="https://www.youtube.com/embed/C3t6gbsPZNQ"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
    <button class="collapsible">Vettem a Piacon</button>
    <div class="content">
        <pre>
        Vettem a piacon egy szájkosarat,
        A feleségem szájára rátetetem.
        Vettem a piacon egy szájkosarat,
        Pedig nekem kutyám se' volt.
        A feleségem szájára rátetetem,
        Hogy ne beszéljen vissza nekem.
        Rátetetem, rálakatolom,
        A lakatnak a kulcsát a Tiszába dobom.
        Ha leakarja venni a lakatot a nő,
        Hát ugorjon a Tiszába Ő!
        Rátetetem, rálakatolom,
        A lakatnak a kulcsát a Tiszába dobom.
        Ha leakarja venni a lakatot a nő,
        Hát ugorjon a Tiszába Ő!
        Vettem a piacon egy szájkosarat,
        Pedig nekem kutyám se' volt.
        Az anyósom szájára rátetetem,
        Hogy ne ugasson vissza nekem.
        Rátetetem, rálakatolom,
        A lakatnak a kulcsát a Tiszába dobom.
        Ha leakarja venni a lakatot a nő,
        Hát ugorjon a Tiszába Ő!
        Vettem a piacon egy szájkosarat,
        A feleségem szájára rátetetem.
        Rátetetem, rálakatolom,
        A lakatnak a kulcsát a Tiszába dobom.
        Ha leakarja venni a lakatot a nő,
        Hát ugorjon a Tiszába Ő!
    </pre>
        <pre>
        I bought a muzzle on the market,
        I put it on my wife's mouth.
        I bought a muzzle on the market,
        I didn't even have a dog.
        I put it on my wife's mouth,
        Not to talk back to me.
        I'll put it on
        I throw the key of the padlock into the Tisza.
        If the woman wants to take the padlock,
        Well, jump into the Tisza!
        I'll put it on
        I throw the key of the padlock into the Tisza.
        If the woman wants to take the padlock,
        Well, jump into the Tisza!
        I bought a muzzle on the market,
        I didn't even have a dog.
        I put it on my mother-in-law's mouth,
        Not to bark back at me.
        I'll put it on
        I throw the key of the padlock into the Tisza.
        If the woman wants to take the padlock,
        Well, jump into the Tisza!
        I bought a muzzle on the market,
        I put it on my wife's mouth.
        I'll put it on
        I throw the key of the padlock into the Tisza.
        If the woman wants to take the padlock,
        Well, jump into the Tisza!
    </pre>

        <iframe class="video" src="https://www.youtube.com/embed/yRmHNQhlLKU" title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
    <button class="collapsible">Nincs már divatban</button>
    <div class="content">
    <pre>
    Van egy lány a faluban,
    Ott áll lenn a kapuban,
    Oda mennék hozzá, de én nem merek!
    Képzeletben előtte már térdelek!
    Jaj, gyere hozzám, mert én téged szeretlek!

    Nincs már divatban a lovas szekér ,
    Mit tegyek én, hogy velem legyél!
    Nincsen Ferrarim sem BMW-m,
    Mindig csak a Facen lájkollak én!
    Nincs már divatban a lovas szekér ,
    Mit tegyek én, hogy velem legyél!
    Nincsen Ferrarim sem BMW-m,
    Mindig csak a Facen lájkollak én!

    Ez a lány a faluban,
    Ott áll lenn a kapuban!
    Oda mennék hozzá, de én nem merek!
    Képzeletben előtte már térdelek!
    Jaj, gyere hozzám, mert én téged szeretlek!

    Nincs már divatban a lovas szekér ,
    Mit tegyek én, hogy velem legyél!
    Nincsen Ferrarim sem BMW-m,
    Mindig csak a Facen lájkollak én!
    Nincs már divatban a lovas szekér ,
    Mit tegyek én, hogy velem legyél!
    Nincsen Ferrarim sem BMW-m,
    Mindig csak a Facen lájkollak én!
    </pre>

        <pre>
    There is a girl in the village
    He's down there at the gate,
    I would go there, but I don't dare!
    I already kneel before him in my imagination!
    Alas, come to me because I love you!

    The horse-drawn carriage is no longer in vogue,
    What can I do to be with me!
    I don't have a Ferrari or a BMW,
    I always just like Facen!
    The horse-drawn carriage is no longer in vogue,
    What can I do to be with me!
    I don't have a Ferrari or a BMW,
    I always just like Facen!

    This girl in the village,
    It's down there at the gate!
    I would go there, but I don't dare!
    I already kneel before him in my imagination!
    Alas, come to me because I love you!

    The horse-drawn carriage is no longer in vogue,
    What can I do to be with me!
    I don't have a Ferrari or a BMW,
    I always just like Facen!
    The horse-drawn carriage is no longer in vogue,
    What can I do to be with me!
    I don't have a Ferrari or a BMW,
    I always just like Facen!
    </pre>

        <iframe class='video' src="https://www.youtube.com/embed/khHVVd8cZT0"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
    <br>
    <br>
    <br>
</main>
<!-- Lábjegyzet vagy mi -->
<?php include './includes/footer.php'; ?>
<!-- Szkriptek -->
<script src="assets/scripts/eloado.js"></script>
</body>
</html>