<?php
include("./includes/connection.php");
include_once "classes/Felhasznalo.php";
include './includes/check_auth.php';

//kedvencekhez való hozzáadás és eltávolítás 1/2
$user = $_SESSION['user'];
$performername = "Bitto Duo";
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
        <h2>Bitto Duo</h2>
    </header>
    <img src="assets/resources/eloadok/bittoduo0.jpg" alt="Avatar" width="350"/>
    <p id="leiras">A szintetizátor (törzsi elnevezése "szinti") hangok elektronikus előállítására alkalmas, többnyire
        zenei hangszerként szolgáló
        eszköz.[1] A zenei felhasználáson kívül korán felismert alkalmazási területük volt a hangeffektek előállítása
        hangmérnökök számára (pl. filmek, televíziós és színházi műsorok aláfestő hangkörnyezetének – nem csak a zene! –
        megalkotása).

        Egy másik, némileg tágabb definíció szerint a szintetizátor olyan elektronikus eszköz (gép), amelynek feladata
        és képessége a hangszintézis (e műszakibb jellegű meghatározás eltekint a szintetizátorok hangszer voltától). A
        szintetizátoroknak számos előnyük van a hagyományos billentyűs hangszerekkel szemben, így pl. 1). a hangkeltés
        rugalmas, emulatív volta (több-kevesebb tökéletességgel „imitálható” velük nemcsak többféle hangszer, akár
        egyszerre is, hanem egész zenekarok[5] hangzása); 2) a hordozhatóságuk, és 3). digitalizálható voltuk, azaz hogy
        képesek kommunikálni a modern digitális eszközökkel (számítógépek, más hangszerek), így pl. elláthatóak
        memóriával akár a játék, akár az ennek során alkalmazott vezérlőutasítások és beállítások tárolására, vagy
        alkalmasak a játék automatizációjára is („gépzene”).</p>

    <!--kedvencekhez való hozzáadás és eltávolítás 2/2 -->
    <form method="POST">
        <?php
        if ($user->isfavorite("Bitto Duo") == 0){
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

    <button class="collapsible">Hajnalba megyek megint haza</button>
    <div class="content">
    <pre>
    Hajnalba megyek ma megint haza
    Forog a világnak a ház fala
    Meg veszek mindent
    semmi nincs ingyen

    Hajnalig tartson ma az éjszaka
    Tudom hogy lesz hozzám egy két szava
    Áldja az Isten ő az én kincsem

    Soha nem tudom letagadnia véremet
    Ha mulatok hát el visz a hév
    Ilyenkor csak is a haverok értenek
    Mond meg mi csoda feleség.

    Amit meg iszok azt nem veszik tőlem el
    Töltsd meg a poharakat még
    Holnap olyan buli lesz ,hogy az borzalom
    De mégis őt szeretem én

    Hajnalba megyek ma megint haza
    Táncol a világnak a ház fala
    Meg veszek mindent
    semmi nincs ingyen

    Hajnalig tartson ma az éjszaka
    Tudom hogy lesz hozzám egy két szava
    Áldja az Isten ő az én kincsem

    Soha nem tudom letagadnia véremet
    Ha mulatok hát el visz a hév
    Ilyenkor csak is a haverok értenek
    Mond meg mi csoda feleség.

    Amit meg iszok azt nem veszik tőlem el
    Töltsd meg a poharakat még
    Holnap olyan buli lesz ,hogy az borzalom
    De mégis őt szeretem én
    </pre>
        <pre>
    I'm going home again today at dawn
    The wall of the house revolves around the world
    I'll buy everything
    nothing is free

    Hold on until night tonight
    I know he will have two words for me
    Bless God he is my treasure

    I can never deny my blood
    If you have fun, the heat will take you away
    That's when the buddies only understand
    Tell me what a miracle wife.

    What I drink is not taken away from me
    Fill the glasses yet
    There will be such a party tomorrow as horror
    But I still love him

    I'm going home again today at dawn
    The wall of the house dances to the world
    I'll buy everything
    nothing is free

    Hold on until night tonight
    I know he will have two words for me
    Bless God he is my treasure

    I can never deny my blood
    If you have fun, the heat will take you away
    That's when the buddies only understand
    Tell me what a miracle wife.

    What I drink is not taken away from me
    Fill the glasses yet
    There will be such a party tomorrow as horror
    But I still love him
    </pre>
        <iframe class='video' src="https://www.youtube.com/embed/hZ08pOduyRI" title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
    <button class="collapsible">Dikta mamo tyibori</button>
    <div class="content">
        <pre>
        (Hát akkor ez a szám had szóljon a barátaimnak:
        Kezgyétembe a Lacinak
        Körömbe az Ákosnak és a Ricsinek
        Kanadába a Gabi testvéremnek és a Yetinek
        És még a két öcsémnek a Ginonak és a Kristófnak
        Fogadják sok-sok szeretettel)

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj kade so kerav, kade so kerav
        Pala la te me merav, mamo me merav

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj kade so kerav, kade so kerav
        Pala la te me merav, mamo me merav

        Kan so fidans sar tu zhane pale
        Ando kade bare luma
        Kan so fidans sar tu zhane pale
        Shukar e lu bare luma

        Chi zhan chi zhan chi zhan me merav
        Ando kado Devla ji kade mal
        Chi zhan chi zhan chi zhan me merav
        Shukar e lu bare luma

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj kade so kerav, kade so kerav
        Pala la te me merav, mamo me merav

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj kade so kerav, kade so kerav
        Pala la te me merav, mamo me merav

        Kan so fidans sar tu zhane pale
        Ando kade bare luma
        Kan so fidans sar tu zhane pale
        Shukar e li bare luma

        Chi zhan chi zhan chi zhan me merav
        Ando kado Devla ji kade mal
        Chi zhan chi zhan chi zhan me merav
        Ando kade bare luma

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj kade so kerav, kade so kerav
        Pala la te me merav, mamo me merav

        Ale le le le ale le le le ale le le le eeee
        (Pergetés)
        Zha

        Kan so fidans sar tu zhane pale
        Shukar e li bare luma
        Kan so fidans sar tu zhane pale
        Ando kade bare luma

        Chi zhan chi zhan chi zhan me merav
        Ando kado Devla ji kade mal
        Chi zhan chi zhan chi zhan me merav
        Shukar e li bare luma

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj kade so kerav, kade so kerav
        Pala la te me merav, mamo me merav

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj kade so kerav, kade so kerav
        Pala la te me merav, mamo me merav

        (Pergető)

        Elmegyek a cigánybalba
        Elhúzhatom a nótámat
        Reggelig én mulatok
        A pénzemet eliszom

        (Pergető)
    </pre>
        <pre>
        (Well then this number let me tell my friends:
        My hand to Laci
        Nails to Ákos and Ricsi
        To Canada for my brother Gabi and Yeti
        And to my two brothers Gino and Christoph
        They are received with lots and lots of love)

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj envy so kerav, jealous so kerav
        Pala la te me merav, mamo me merav

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj envy so kerav, jealous so kerav
        Pala la te me merav, mamo me merav

        Kan so fidans sar tu zhane pale
        Ando kade bare luma
        Kan so fidans sar tu zhane pale
        Shukar e lu bare luma

        Chi zhan chi zhan chi zhan me merav
        Ando kado Devla ji kade mal
        Chi zhan chi zhan chi zhan me merav
        Shukar e lu bare luma

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj envy so kerav, jealous so kerav
        Pala la te me merav, mamo me merav

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj envy so kerav, jealous so kerav
        Pala la te me merav, mamo me merav

        Kan so fidans sar tu zhane pale
        Ando kade bare luma
        Kan so fidans sar tu zhane pale
        Shukar e li bare luma

        Chi zhan chi zhan chi zhan me merav
        Ando kado Devla ji kade mal
        Chi zhan chi zhan chi zhan me merav
        Ando kade bare luma

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj envy so kerav, jealous so kerav
        Pala la te me merav, mamo me merav

        Ale le le ale le le le ale le le le le eeee
        (Scroll)
        Zha

        Kan so fidans sar tu zhane pale
        Shukar e li bare luma
        Kan so fidans sar tu zhane pale
        Ando kade bare luma

        Chi zhan chi zhan chi zhan me merav
        Ando kado Devla ji kade mal
        Chi zhan chi zhan chi zhan me merav
        Shukar e li bare luma

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj envy so kerav, jealous so kerav
        Pala la te me merav, mamo me merav

        Dikh ta mamo chi bori, chi bori chi bori
        T'aven tuke baxtali, ta mo baxtali
        Aj envy so kerav, jealous so kerav
        Pala la te me merav, mamo me merav

        (Spinning)

        I'm going to the gypsy left
        I can pull my song
        I'm having fun until morning
        I'll take my money

        (Spinning)
    </pre>
        <iframe class='video' src="https://www.youtube.com/embed/pZmdbh-2Ryc" title="YouTube video player"
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