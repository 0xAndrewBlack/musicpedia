<?php
include("./includes/connection.php");
include_once "classes/Felhasznalo.php";
include './includes/check_auth.php';

$user = $_SESSION['user'];
$performername = "Dua Lipa";
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
        <h2>Dua Lipa</h2>
    </header>
    <img src="assets/resources/eloadok/dualipa0.jpg" alt="Avatar" width="350"/>
    <p id="leiras">Dua Lipa (London, 1995. augusztus 22. –) háromszoros Grammy díjas koszovói-albán származású angol
        énekesnő, dalszerző.
        <em>Miután modellként dolgozott, </em>2015-ben leszerződött a Warner Records kiadóval, 2017-ben pedig kiadta
        önmagáról
        elnevezett debütáló stúdióalbumát.
        Az album harmadik lett a brit albumeladási listán, és kilenc kislemezt adtak ki róla, köztük a Be the One-t, az
        IDGAF-et, és a brit kislemezlistán első,
        amerikában pedig hatodik helyet elért New Rulest. 2018-ban Lipa Brit Awards díjat kapott a „Legjobb brit női
        szóló
        előadó” és a „Legjobb brit új előadó” kategóriákban.
        2018 áprilisában adta ki Calvin Harrisszel közös One Kiss című kislemezét, mely a brit slágerlista csúcsára
        került,
        és az év legtovább első helyezett dala lett női előadótól.
        2019-ben a Brit Awardson az év dalának választották. Még ebben az évben Grammy-díjat kapott mint „Legjobb új
        előadó”, továbbá szintén elnyerte a „Legjobb dance felvételnek”
        járó elismerést a Silk City-vel közös Electricity című daláért. A kislemezek sikere révén az önmagáról
        elnevezett
        albuma a Spotify egyik legtöbbet streamelt lemeze lett, és
        világszerte platinalemez státuszt ért el. Második nagylemeze Future Nostalgia címmel 2020 márciusában jelent
        meg, és
        széleskörben kritikailag elismert lett; Lipa hat
        Grammy-jelölést kapott érte, köztük az „Év albuma” kategóriában is.
        Lipa karrierje során számos elismerést kapott, köztük három Grammy-díjat, három Brit Awardsot, két MTV Europe
        Music
        Awardsot, egy MTV Video Music Awardsot és egy American
        Music Awardsot is kiérdemelt. 2020-ban a Billboard átadta neki a Powerhouse Award elismerésüket, melyet azon női
        előadóknak adnak, akik dominálták az adott évet az eladások,
        rádiós játszások és streaming-adatok tekintetében egyaránt.</p>
    <form method="POST">
        <?php
        if ($user->isfavorite("Dua Lipa") == 0){
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

    <button class="collapsible">New Rules</button>
    <div class="content">
    <pre>
    One, one, one, one, one...

    Talkin' in my sleep at night,
    makin' myself crazy
    (Out of my mind, out of my mind)
    Wrote it down and read it out,
    hopin' it would save me
    (Too many times, too many times)

    My love, he makes me feel like nobody else,
    nobody else
    But my love, he doesn't love me,
    so I tell myself, I tell myself

    One: Don't pick up the phone
    You know he's only callin'
    'cause he's drunk and alone
    Two: Don't let him in
    You'll have to kick him out again
    Three: Don't be his friend
    You know you're gonna wake up in
    his bed in the morning
    And if you're under him,
    you ain't gettin' over him

    I got new rules, I count 'em
    I got new rules, I count 'em
    I gotta tell them to myself
    I got new rules, I count 'em
    I gotta tell them to myself

    I keep pushin' forwards,
    but he keeps pullin' me backwards
    (Nowhere to turn, no way)
    (Nowhere to turn, no)
    Now I'm standin' back from it,
    I finally see the pattern
    (I never learn, I never learn)

    But my love, he doesn't love me,
    so I tell myself, I tell myself
    I do, I do, I do

    One: Don't pick up the phone
    You know he's only callin'
    'cause he's drunk and alone
    Two: Don't let him in
    You'll have to kick him out again
    Three: Don't be his friend
    You know you're gonna wake up in
    his bed in the morning
    And if you're under him, you ain't gettin' over him

    I got new rules, I count 'em
    I got new rules, I count 'em
    I gotta tell them to myself
    I got new rules, I count 'em
    I gotta tell them to myself

    Practice makes perfect
    I'm still tryna learn it by heart
    (I got new rules, I count 'em)
    Eat, sleep, and breathe it
    Rehearse and repeat it, 'cause I...
    (I got new...)

    One: Don't pick up the phone (yeah)
    You know he's only callin'
    'cause he's drunk and alone (alone)
    Two: Don't let him in (uh-ooh)
    You'll have to kick him out again (again)
    Three: Don't be his friend
    You know you're gonna wake up in
    his bed in the morning
    And if you're under him,
    you ain't gettin' over him

    I got new rules, I count 'em
    I got new rules, I count 'em
    (Whoa-ooh, whoa-ooh, whoa)
    I gotta tell them to myself
    I got new rules, I count 'em
    (Baby, you know I count 'em)
    I gotta tell them to myself

    Don't let him in, don't let him in
    Don't, don't, don't, don't...
    Don't be his friend, don't be his friend
    Don't, don't, don't, don't...
    Don't let him in, don't let him in
    Don't, don't, don't, don't...
    Don't be his friend, don't be his friend
    Don't, don't, don't, don't...
    You're gettin' over him
    </pre>
        <pre>
    Egy, egy, egy, egy, egy...

    Éjszaka álmomban beszélek,
    és megőrülök
    (Elment az eszem, elment az eszem)
    Leírtam és felolvastam, remélem,
    meg fog menteni
    (Túl sokszor, túl sokszor)

    Szerelmem, úgy érzem magam,
    mint senki más, senki más
    De szerelmem, ő nem szeret,
    ezért mondom magamnak,
    mondom magamnak

    Egy: ne vedd fel a telefont
    Tudod, hogy csak azért hív,
    mert részeg és egyedül van
    Kettő: Ne engedd be
    Megint ki kell rúgnia
    Három: Ne légy a barátja
    Tudod, hogy reggel az
    ágyában fogsz ébredni
    És ha alatta vagy,
    nem lépsz túl rajta

    Új szabályokat kaptam, számolok velük
    Új szabályokat kaptam, számolok velük
    El kell mondanom nekik magamnak
    Új szabályokat kaptam, számolok velük
    El kell mondanom nekik magamnak

    Én folyamatosan nyomok előre,
    de ő folyamatosan húz hátrafelé
    (Nincs hova fordulni, sehogy)
    (Nincs hova fordulni, nem)
    Most hátrálok tőle, végre látom a mintát
    (Soha nem tanulok, soha nem tanulok)

    De szerelmem, ő nem szeret,
    ezért mondom magamnak,
    mondom magamnak
    csinálom, csinálom, csinálom

    Egy: ne vedd fel a telefont
    Tudod, hogy csak azért hív,
    mert részeg és egyedül van
    Kettő: Ne engedd be
    Megint ki kell rúgnia
    Három: Ne légy a barátja
    Tudod, hogy reggel az
    ágyában fogsz ébredni
    És ha alatta vagy, nem lépsz túl rajta

    Új szabályokat kaptam, számolok velük
    Új szabályokat kaptam, számolok velük
    El kell mondanom nekik magamnak
    Új szabályokat kaptam, számolok velük
    El kell mondanom nekik magamnak

    Gyakorlat teszi a mestert
    Még mindig próbálom fejből megtanulni
    (új szabályokat kaptam, számolok velük)
    Egyél, aludj és lélegezz
    Gyakorold és ismételd meg, mert én...
    (van új...)

    Egy: ne vedd fel a telefont (igen)
    Tudod, hogy csak azért hív,
    mert részeg és egyedül (egyedül)
    Kettő: Ne engedd be (uh-ooh)
    Megint ki kell rúgnod (újra)
    Három: Ne légy a barátja
    Tudod, hogy reggel az
    ágyában fogsz ébredni
    És ha alatta vagy,
    nem lépsz túl rajta

    Új szabályokat kaptam, számolok velük
    Új szabályokat kaptam, számolok velük
    (Húúúúúúúúúúúúú)
    El kell mondanom nekik magamnak
    Új szabályokat kaptam, számolok velük
    (Bébi, tudod, hogy számolom őket)
    El kell mondanom nekik magamnak

    Ne engedd be, ne engedd be
    Ne, ne, ne, ne...
    Ne légy a barátja, ne légy a barátja
    Ne, ne, ne, ne...
    Ne engedd be, ne engedd be
    Ne, ne, ne, ne...
    Ne légy a barátja, ne légy a barátja
    Ne, ne, ne, ne...
    Túl vagy rajta
    </pre>
        <iframe class='video' src="https://www.youtube.com/embed/jzbiRNaj_v0"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
    <button class="collapsible">Break My Heart</button>
    <div class="content">
        <pre>
        [Verse 1]
        I’ve always been the one to say the first goodbye
        Had to love and lose a hundred million times
        Had to get it wrong to know just what I like
        Now I’m falling
        You say my name like I have never heard before
        I’m indecisive but this time I know for sure
        I hope I’m not the only one that feels it all
        Are you falling?

        [Pre-Chorus]
        Centre of attention
        You know you can get whatever you want from me
        Whenever you want it baby
        It’s you in my reflection
        I’m afraid of all the things it could do to me
        If I woulda known it baby

        [Chorus]
        I would’ve stayed at home
        Cuz I was doing better alone
        But when you said hello
        I knew that was the end of it all
        I should’ve stayed at home
        Cuz now there ain’t no letting you go
        Am I falling in love with the
        one that could break my heart?
        Oh no
        I was doing better alone
        But when you said hello
        I knew that was the end of it all
        I should’ve stayed at home
        Cuz now there ain’t no letting you go
        Am i falling in love with the
        one that could break my heart?

        [Verse 2]
        I wonder when you go if I stay on your mind
        Two can play that game but you win me every time
        Everyone before you was a waste of time
        Yeah you got me

        [Pre-chorus]

        [Chorus]

        [Post-Chorus]
        Ooooh break my heart
        Ooooh break my heart
        Ooooh
        Am I falling in love with the
        one that could break my heart?

        [Chorus]
    </pre>
        <pre>
        [1. vers]
        Mindig én voltam az, aki először búcsúzott
        Százmilliószor kellett szeretni és elveszíteni
        Félre kellett értenem, hogy tudjam, mit szeretek
        most zuhanok
        Úgy mondod a nevemet, ahogy még soha nem hallottam
        Határozatlan vagyok, de ezúttal biztosan tudom
        Remélem, nem én vagyok az egyetlen, aki ezt érzi
        zuhansz?

        [Előkórus]
        Figyelem középpontjában
        Tudod, hogy bármit megkaphatsz tőlem,
        amit csak akarsz
        Amikor csak akarod bébi
        Te vagy a tükörképemben
        Félek mindentől, amit tehetne velem
        Ha tudtam volna bébi

        [Énekkar]
        otthon maradtam volna
        Mert egyedül jobban jártam
        De amikor köszönt
        Tudtam, hogy ezzel mindennek vége
        otthon kellett volna maradnom
        Mert most már senki sem enged el
        Beleszeretek abba, aki összetörheti a szívem?
        Óh ne
        Egyedül jobban jártam
        De amikor köszönt
        Tudtam, hogy ezzel mindennek vége
        otthon kellett volna maradnom
        Mert most már senki sem enged el
        Beleszeretek abba, aki összetörheti a szívem?

        [2. vers]
        Kíváncsi vagyok, ha elmész, az eszedben maradok-e
        Ketten játszhatják ezt a játékot,
        de engem mindig te nyersz
        Előtte mindenki időpocsékolás volt
        Igen, megkaptad

        [Előkórus]

        [Énekkar]

        [Post-Chorus]
        Óóó törje össze a szívem
        Óóó törje össze a szívem
        Óóóó
        Beleszeretek abba, aki összetörheti a szívem?

        [Énekkar]
    </pre>

        <iframe class='video' src="https://www.youtube.com/embed/JS_ci6wUQ7w?start=6"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
    <button class="collapsible">Levitating</button>
    <div class="content">
    <pre>
    If you wanna run away with me
    I know a galaxy and I can take you for a ride
    I had a premonition that we fell into a rhythm
    Where the music don't stop for life
    Glitter in the sky, glitter in my eyes
    Shining just the way I like
    If you're feeling like you need a little bit of company
    You met me at the perfect time

    You want me, I want you, baby
    My sugarboo, I'm levitating
    The Milky Way, we're renegading
    (Yeah, yeah, yeah, yeah, yeah)

    I got you, moonlight, you're my starlight
    I need you, all night
    Come on, dance with me
    (I'm levitating)
    You, moonlight, you're my starlight
    I need you, all night
    Come on, dance with me
    (I'm levitating)

    I believe that you're for me, I feel it in our energy
    I see us written in the stars
    We can go wherever, so let's do it now or never
    Baby, nothing's ever, ever too far
    Glitter in the sky, glitter in our eyes
    Shining just the way we are
    I feel like we're forever, every time we get together
    But whatever, let's get lost on Mars

    You want me, I want you, baby
    My sugarboo, I'm levitating
    The Milky Way, we're renegading
    (Yeah, yeah, yeah, yeah, yeah)

    I got you, moonlight, you're my starlight
    I need you, all night
    Come on, dance with me
    (I'm levitating)
    You, moonlight, you're my starlight
    I need you, all night
    Come on, dance with me
    (I'm levitating)

    You can fly away with me tonight
    You can fly away with me tonight
    Baby, let me take you for a ride
    (Yeah, yeah, yeah, yeah, yeah)
    (I'm levitating)
    You can fly away with me tonight
    You can fly away with me tonight
    Baby, let me take you for a ride
    (Yeah, yeah, yeah, yeah, yeah)

    My love is like a rocket, watch it blast off
    And I'm feeling so electric, dance my ass off
    And even if I wanted to, I can't stop
    (Yeah, yeah, yeah, yeah, yeah)
    My love is like a rocket, watch it blast off
    And I'm feeling so electric, dance my ass off
    And even if I wanted to, I can't stop
    (Yeah, yeah, yeah, yeah, yeah)

    You want me, I want you, baby
    My sugarboo, I'm levitating
    The Milky Way, we're renegading

    I got you, moonlight, you're my starlight
    I need you, all night
    Come on, dance with me
    (I'm levitating)

    You can fly away with me tonight
    You can fly away with me tonight
    Baby, let me take you for a ride
    (Yeah, yeah, yeah, yeah, yeah)
    (I'm levitating)
    You can fly away with me tonight
    You can fly away with me tonight
    Baby, let me take you for a ride
    (Yeah, yeah, yeah, yeah, yeah)

    I got you, moonlight, you're my starlight
    I need you, all night
    Come on, dance with me
    (I'm levitating)
    You, moonlight, you're my starlight
    I need you, all night
    Come on, dance with me
    (I'm levitating)
    </pre>

        <pre>
    Ha meg akarsz szökni velem
    Ismerek egy galaxist, és elvihetlek egy körre
    Volt egy olyan előérzetem, hogy egy ritmusba estünk
    Ahol a zene nem áll meg egy életre
    Csillogás az égen, csillogás a szememben
    Úgy ragyog, ahogy én szeretem
    Ha úgy érzed, hogy szükséged van egy kis társaságra
    A tökéletes időben találkoztál velem

    Te akarsz engem, én akarlak téged, bébi
    Cukorboom, lebegek
    A Tejútrendszer, lemondunk
    (Igen, igen, igen, igen, igen)

    Megvan, holdfény, te vagy a csillagfényem
    Szükségem van rád, egész éjszaka
    Gyerünk, táncolj velem
    (lebegek)
    Te, holdfény, te vagy a csillagfényem
    Szükségem van rád, egész éjszaka
    Gyerünk, táncolj velem
    (lebegek)

    Hiszem, hogy nekem vagytok, ezt érzem az energiánkban
    Látok minket a csillagokba írva
    Bárhová mehetünk, tegyük most vagy soha
    Bébi, soha semmi nincs túl messze
    Csillogás az égen, csillogás a szemünkben
    Úgy ragyogunk, ahogy vagyunk
    Úgy érzem, örökké élünk, minden alkalommal, amikor összejövünk
    De mindegy, vesszünk el a Marson

    Te akarsz engem, én akarlak téged, bébi
    Cukorboom, lebegek
    A Tejútrendszer, lemondunk
    (Igen, igen, igen, igen, igen)

    Megvan, holdfény, te vagy a csillagfényem
    Szükségem van rád, egész éjszaka
    Gyerünk, táncolj velem
    (lebegek)
    Te, holdfény, te vagy a csillagfényem
    Szükségem van rád, egész éjszaka
    Gyerünk, táncolj velem
    (lebegek)

    Ma este elrepülhetsz velem
    Ma este elrepülhetsz velem
    Kicsim, hadd vigyelek el egy kört
    (Igen, igen, igen, igen, igen)
    (lebegek)
    Ma este elrepülhetsz velem
    Ma este elrepülhetsz velem
    Kicsim, hadd vigyelek el egy kört
    (Igen, igen, igen, igen, igen)

    A szerelmem olyan, mint egy rakéta, nézd, ahogy felrobban
    És annyira elektromosnak érzem magam, táncold le a seggem
    És még ha akarnám sem tudom abbahagyni
    (Igen, igen, igen, igen, igen)
    A szerelmem olyan, mint egy rakéta, nézd, ahogy felrobban
    És annyira elektromosnak érzem magam, táncold le a seggem
    És még ha akarnám sem tudom abbahagyni
    (Igen, igen, igen, igen, igen)

    Te akarsz engem, én akarlak téged, bébi
    Cukorboom, lebegek
    A Tejútrendszer, lemondunk

    Megvan, holdfény, te vagy a csillagfényem
    Szükségem van rád, egész éjszaka
    Gyerünk, táncolj velem
    (lebegek)

    Ma este elrepülhetsz velem
    Ma este elrepülhetsz velem
    Kicsim, hadd vigyelek el egy kört
    (Igen, igen, igen, igen, igen)
    (lebegek)
    Ma este elrepülhetsz velem
    Ma este elrepülhetsz velem
    Kicsim, hadd vigyelek el egy kört
    (Igen, igen, igen, igen, igen)

    Megvan, holdfény, te vagy a csillagfényem
    Szükségem van rád, egész éjszaka
    Gyerünk, táncolj velem
    (lebegek)
    Te, holdfény, te vagy a csillagfényem
    Szükségem van rád, egész éjszaka
    Gyerünk, táncolj velem
    (lebegek)
    </pre>

        <iframe class="video" src="https://www.youtube.com/embed/2FFlTc017zE?start=59"
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