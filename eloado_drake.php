<?php
include("./includes/connection.php");
include_once "classes/Felhasznalo.php";
include './includes/check_auth.php';

$user = $_SESSION['user'];
$performername = "Drake";
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
        <h2>Drake</h2>
    </header>
    <img src="assets/resources/eloadok/drake0.jpg" alt="Avatar" width="350"/>
    <p id="leiras">1986. október 24-én született a kanadai Torontóban. Apja Dennis Graham afroamerikai dobos, anyja
        Sandi Graham zsidó származású kanadai. Végzettségét tekintve pedagógus. Drake a helyi zsidó iskolában tanult. A
        rapper ötéves volt, amikor szülei elváltak. 2012-ben érettségizett le, miután tinédzser korában kicsapták az
        iskolából. Drake iskolás éveiről úgy nyilatkozott, hogy sokat bántották bőrszíne és vallása miatt. Színészként
        kezdte karrierjét. A Degrassi gimi című tinisorozatban mutatkozott meg először, a 2000-es évek elején.
        Első szólóalbuma, a Thank Me Later 2010-ben debütált. Az album meglehetősen sikeresnek bizonyult, az amerikai
        Billboard 200-as listáján az élre került.[2] 2011-ben adta ki a Take Care című stúdióalbumát, valamint 2013-ban
        Nothing Was the Same-et, utóbbi háromszoros platinalemez lett.[3][4][5]
        Drake negyedik stúdióalbuma, a Views 2016-ban jelent meg. Ezzel az albummal felállította rekordját Michael
        Jacksonnal és Whitney Houstonnal szemben is: a Billboard Hot 100-as és 200-as listáján nyolc hétig volt
        listavezető.[6] Drake többek között olyan előadókkal működött együtt, mint Rihanna (What’s My Name, Work), Big
        Sean, Kanye West (Blessings) Lil Wayne, Chris Brown, valamint Nicki Minaj (Only).</p>
    <form method="POST">
        <?php
        if ($user->isfavorite("Drake") == 0){
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
    <button class="collapsible">Knife Talk</button>
    <div class="content">
    <pre>
    I gotta feed the streets,my pistol gon' bleed the streets
    Ski mask on my face, sometimes you gotta cheat
    To stay ahead in this bitch-a (gang), drank syrup like it's liquor
    Street life'll have you catchin' up to God quicker (yeah, gang)
    Sticker, AK-40 to your liver
    Let the chopper bang on you like a Blood or a Cripper (gang)
    Flipper, so much bread, I'm a gymnast
    Made so much money off of dummies, off of dummies (yeah, gang)
    I'm mister body catcher, Slaughter Gang soul snatcher
    Ain't no regular F-150, this a fuckin' Raptor
    No capper, street nigga, not a rapper
    Chopper hit him and he turned into a booty clapper
    Smith & Wesson, I'm 4L Gang reppin'
    We done baptized more niggas than a damn reverend (yeah)
    Kappa Alpha, me and my gang, we do all the steppin'
    Who you checkin'? This FN shoot East to West End (gang)
    Yeah
    I heard Papi outside
    And he got the double-R droppy outside
    Checked the weather and it's gettin' real oppy outside
    I'ma drop this shit and have these pussies droppin' like some motherfuckin' flies
    Type of nigga that can't look me in the eyes
    I despise
    When I see you, better put that fuckin' pride to the side
    Many times, plenty times, I survived
    Beef is live, spoiler alert, this nigga dies
    Keep blickies, and you know the weed sticky
    My finger itchy, the Glock like to leave hickeys
    Your shooters iffy, a street punk could never diss me
    I come straight up out the 6, and we don't spare sissies
    I fuck with her, and fuck with her, and her
    I hit up err and tell him do the err, for sure
    Voodoo curse, it got him while I flew to Turks
    Know the dogs had to hit them where we knew it hurts
    Gang shit, that's all I'm on (yeah)
    Gang shit, that's all I'm on
    Nigga, gang shit, that's all I'm on
    Gang shit, that's all I'm on
    Nigga, gang shit, that's all I'm on
    Gang shit, that's all I'm on
    Nigga, gang shit, that's all I'm on
    Gang shit, that's all I'm on
    Let it bang, bang, let it bang, bang
    'Til his brains hang and his mama sang
    And the pastor sang and them bullets sang
    And them choppers sang and the choir sang
    I'm on everything
    Jacob charged me four-fifty for a tennis chain
    US Open, had it on us at the tennis game
    Tell the coach don't take me out, I like to finish games
    And my pen insane, and my men insane
    There's like eighty of us now, that's the scary thing
    Shit they doin' on that other side embarrassing
    We in Paris with it, hundred carats with it
    All this shit is for my son, 'cause he's inheritin' it
    Gang (yeah)
    (Metro)
    Gang shit, that's all I'm on
    Gang shit, that's all I'm on
    Nigga, gang shit, that's all I'm on
    Gang shit, that's all I'm on
    Nigga, gang shit, that's all I'm on
    Gang shit, that's all I'm on
    Nigga, gang shit, that's all I'm on
    Gang shit, that's all I'm on, yeah
    </pre>
        <pre>
    Etetni kell az utcákat, a pisztolyom vérezni fogja az utcákat
    Símaszk az arcomra, néha csalni kell
    Hogy előrébb maradjon ebben a bandában,
    igyon szirupot,mintha szeszesitalt volna
    Az utcai élet miatt gyorsabban utolérheti Istent (igen, banda)
    Matrica, AK-40 a májára
    Hagyja, hogy a helikopter úgy csapjon rád,
    mint egy Blood vagy egy Cripper (banda)
    Flipper, annyi kenyér, tornász vagyok
    Annyi pénzt keresett a bábokból, a bábokból (igen, a bandából)
    Én vagyok a testfogó úr, a Slaughter Gang lélekrablója
    Nem egy normál F-150, ez egy kibaszott Raptor
    Nem kapkodó, utcai nigga, nem rapper
    Chopper megütötte, és zsákmánycsapdává változott
    Smith & Wesson, 4L Gang reppin vagyok
    Több niggát kereszteltünk meg, mint egy átkozott reverendát (igen)
    Kappa Alpha, én és a bandám, mindent megteszünk
    Kit ellenőrizsz? Ez az FN lövés East to West End (banda)
    Igen
    Hallottam kint Papit
    És kint kapta a dupla R cseppet
    Megnéztem az időjárást, és nagyon rossz idő van kint
    Eldobom ezt a szart, és úgy hullanak le ezek a puncik, mint valami kibaszott legyek
    Nigga típus, aki nem tud a szemembe nézni
    megvetem
    Amikor meglátlak, jobb, ha félretesszük ezt a kibaszott büszkeséget
    Sokszor, rengetegszer túléltem
    Marha él, spoiler riasztás, ez a nigga meghal
    Tartsd meg a blicket, és tudod, hogy a gaz ragacsos
    Viszket az ujjam, a Glock szereti elhagyni a hickey-t
    A lövöldözői, ha rosszak, egy utcai punk soha nem tudna leszólni
    Egyenesen kijövök a 6-oson, és nem kíméljük a cicusokat
    Kibaszom vele, kibaszom vele és vele
    Hibát ütök, és azt mondom neki, hogy csinálja a hibát, az biztos
    Voodoo átok, ez kapta el, miközben törökökhöz repültem
    Tudjuk, hogy a kutyáknak ott kellett megütniük őket, ahol tudtuk, hogy fáj
    Banda szar, csak ezen vagyok (igen)
    Banda szar, csak ezen vagyok
    Nigga, banda szar, csak ezen vagyok
    Banda szar, csak ezen vagyok
    Nigga, banda szar, csak ezen vagyok
    Banda szar, csak ezen vagyok
    Nigga, banda szar, csak ezen vagyok
    Banda szar, csak ezen vagyok
    Hadd dörögjön, dörögjön, dörögjön, durranjon
    – Amíg az agya nem lóg, és a mama énekel
    És a pásztor énekelt, és a golyók énekeltek
    És énekeltek a helikopterek, és énekelt a kórus
    mindenen rajta vagyok
    Jacob négy-ötvenet kért tőlem egy teniszláncért
    A US Openen a teniszmeccsünkön volt
    Mondd meg az edzőnek, hogy ne vigyen ki, szeretem befejezni a meccseket
    És a tollam őrültek, és az embereim őrültek
    Most vagy nyolcvanan vagyunk, ez a félelmetes
    A francba, amit a másik oldalon csinálnak, ez kínos
    Mi Párizsban vele, száz karáttal
    Ez az egész szar a fiamnak szól, mert ő örökli
    Banda (igen)
    (Metró)
    Banda szar, csak ezen vagyok
    Banda szar, csak ezen vagyok
    Nigga, banda szar, csak ezen vagyok
    Banda szar, csak ezen vagyok
    Nigga, banda szar, csak ezen vagyok
    Banda szar, csak ezen vagyok
    Nigga, banda szar, csak ezen vagyok
    Banda szar, csak ezen vagyok, igen
    </pre>
        <video controls width="560">
            <source src="./assets/resources/videos/knifetalk.mp4" type="video/mp4"/>
        </video>
    </div>
    <button class="collapsible">One Dance</button>
    <div class="content">
        <pre>
        [Verse 1]
        Baby, I like your style
        Grips on your waist
        Front way, back way
        You know that I don't play
        Streets not safe
        But I never run away
        Even when I'm away
        Oti, oti, there's never much love when we go OT
        I pray to make it back in one piece
        I pray, I pray
        That's why I need a one dance
        Got a Hennessy in my hand
        One more time 'fore I go
        Higher powers taking a hold on me
        I need a one dance
        Got a Hennessy in my hand
        One more time 'fore I go
        Higher powers taking a hold on me
        Baby, I like your style
        Strength and guidance
        All that I'm wishin' for my friends
        Nobody makes it from my ends
        I had to bust up the silence
        You know you gotta stick by me
        Soon as you see the text, reply me
        I don't wanna spend time fighting
        We've got no time
        And that's why I need a one dance
        Got a Hennessy in my hand
        One more time 'fore I go
        Higher powers taking a hold on me
        I need a one dance
        Got a Hennessy in my hand
        One more time 'fore I go
        Higher powers taking a hold on me
        Got a pretty girl and she love me long time
        Wine it, wine it, and she love me long time
        Ooh yeah, very long time
        Back up, back up, back up and wine it
        Back up, back up and wine it, girl
        Back up, back up, back up and wine it
        Ooh yeah, very long time
        Back, up, back up and wine it, girl
        Ooh, tell me
        I need to know, where do you wanna go?
        'Cause if you're down, I'll take it slow
        Make you lose control
        Where, where, where
        Where, where, where, where (ooh yeah, very long time)
        Where, where, where
        Back, up, back up and wine it, girl (where, where, where, where=
        'Cause if you're down (back up, back up and)
        'Cause if you're down (back up, back up and)
        'Cause if you're down (back up, back up and)
        I need a one dance
        Got a Hennessy in my hand
        One more time 'fore I go
        Higher powers taking a hold on me
        I need a one dance
        Got a Hennessy in my hand
        One more time 'fore I go
        Higher powers taking a hold on me
    </pre>
        <pre>
        [1. vers]
        Kicsim, tetszik a stílusod
        Fogások a derekadon
        Elöl, hátul
        Tudod, hogy nem játszom
        Az utcák nem biztonságosak
        De soha nem futok el
        Akkor is, ha távol vagyok
        Oti, oti, soha nincs sok szerelem, amikor OT-ra megyünk
        Imádkozom, hogy egy darabban tegyük vissza
        Imádkozom, imádkozom
        Ezért kell egy tánc
        Egy Hennessy van a kezemben
        Még egyszer, mielőtt elmegyek
        Magasabb hatalmak vesznek erőt rajtam
        Egy táncra van szükségem
        Egy Hennessy van a kezemben
        Még egyszer, mielőtt elmegyek
        Magasabb hatalmak vesznek erőt rajtam
        Kicsim, tetszik a stílusod
        Erő és útmutatás
        Minden, amit a barátaimnak kívánok
        Senki sem csinálja az én végemből
        Fel kellett törnöm a csendet
        Tudod, hogy kitartasz mellettem
        Amint látja a szöveget, azonnal válaszoljon
        Nem akarok időt vesztegetni
        Nincs időnk
        És ezért van szükségem egy táncra
        Egy Hennessy van a kezemben
        Még egyszer, mielőtt elmegyek
        Magasabb hatalmak vesznek erőt rajtam
        Egy táncra van szükségem
        Egy Hennessy van a kezemben
        Még egyszer, mielőtt elmegyek
        Magasabb hatalmak vesznek erőt rajtam
        Van egy csinos lányom és régóta szeret
        Borozzon, borozzon, és ő régóta szeret engem
        Ó, igen, nagyon régóta
        Hátrál, hátrál, hátrál és borozd fel
        Hátra, hátrálni és borogatni, lány
        Hátrál, hátrál, hátrál és borozd fel
        Ó, igen, nagyon régóta
        Vissza, fel, hát, és borozzon, lány
        Ó, mondd el
        Tudnom kell, hova akarsz menni?
        Mert ha alulmaradsz, lassan viszem
        Elveszítheti az irányítást
        Hol, hol, hol
        Hol, hol, hol, hol (ó, igen, nagyon régóta)
        Hol, hol, hol
        Vissza, fel, hát és boríts, lány (hol, hol, hol, hol=
        Mert ha le vagy (vissza fel, vissza és)
        Mert ha le vagy (vissza fel, vissza és)
        Mert ha le vagy (vissza fel, vissza és)
        Egy táncra van szükségem
        Egy Hennessy van a kezemben
        Még egyszer, mielőtt elmegyek
        Magasabb hatalmak vesznek erőt rajtam
        Egy táncra van szükségem
        Egy Hennessy van a kezemben
        Még egyszer, mielőtt elmegyek
        Magasabb hatalmak vesznek erőt rajtam
    </pre>
        <video controls width="560">
            <source src="./assets/resources/videos/onedance.mp4" type="video/mp4"/>
        </video>
    </div>
    <button class="collapsible">Fair Trade</button>
    <div class="content">
    <pre>
    I don't understand why you blame me
    Take me as I am, it's the same me
    Yeah
    Senseless sight to see
    Yeah
    Senseless sight to see
    Ayy
    Feelin' young but they treat me like the OG
    And they want the tea on me, I swear these bitches nosy
    Said he put some money on my head, I guess we gon' see
    I won't put no money on his head, my niggas owe me
    I gotta be single for a while, you can't control me
    Uno, dos, tres, in a race, they can't hold me
    And I show my face in a case so you know it's me
    Imitation isn't flattery, it's just annoyin' me
    And I'm too about it
    And the dirt that they threw on my name
    Turned to soil and I grew up out it
    Time for y'all to figure out what y'all gon' do about it
    Big wheels keep rollin', rollin'
    I'm outside, 29, G5, seaside
    I been losin' friends and findin' peace
    But honestly, that sound like a fair trade to me
    If I ever heard one and I'm still here
    Outside, frontline, Southside
    I've been losin' friends and findin' peace
    Honestly, that sound like a fair trade to me
    Look, don't invite me over if you throw another pity party
    Lookin' back, it's hard to tell you where I started
    I don't know who love me, but I know that it ain't everybody
    I can never love her, she a busy body
    Baby, if you want me, can't be turnin' up with everybody, nah
    Can't be fuckin' on just anybody, yeah
    I got feelings for you, that's the thing about it, yeah
    You know that, it's somethin' when I sing about it, yeah
    Momma used to be on disability but gave this ability
    And now she walkin' with her head high and her back straight
    I don't think you feelin', I'm out here
    Bein' everything they said I wouldn't be and couldn't be
    I don't know what happened to them guys that said they would be
    I still see you at the top and they misunderstood me
    I hold no resentment in my heart, that's that maturity
    And we don't keep on us anymore, it's with security
    I'm outside (yeah), 29 (yeah), G5, seaside
    I've been losin' friends and findin' peace
    But honestly, that sound like a fair trade to me
    If I ever heard one and I'm still here
    Outside, frontline, Southside (Southside)
    I've been losin' friends and findin' peace
    Honestly, that sound like a fair trade to me
    I don't understand why you blame me
    Take me as I am, it's the same me (I'm trying)
    Senseless sight to see
    Senseless sight to see (Outside)
    Rollin' in a Rolls and ain't no saftey
    Ridin', engine revvin'
    Gotta roll over to you gotta get my release
    Spread your legs downtown as I'm going out to eat
    You can hear the raw sounds when it rock up in your sleep
    I'ma roll on her 'fore I let her roll on me
    Split this one down the middle, wake up in a harmony (sick)
    Worried sick, I'm sick of worryin' (sick, sick)
    It's just a worryin', I'd rather bury them
    I'm talkin' fake friends and skeletons (yeah)
    Early morning, shoulder rubs and lawyer signed the settlement
    I'm never settling this shit get darker then my melanin
    At the crib all by myself, this shit been cavin' in
    Scrolling through my call log by emojis how I'm saving 'em
    Del Mar as the beach where my hoe was but I favorite them
    That butterfly emoji hold me down and all my babies dem
    Backwood in your face, won't push away, he got the K on him
    I broke bread instead of watchin' niggas break down (break it)
    They sent a couple bitches too like I'm from Cape Town
    Know they position, you know ass up with the face down (let's go)
    I'm never content, two mil' an event, I get it frequent
    I'm make an expense, to me it's just sense
    I'm droppin' the top, no tint for the whip
    I'm dropping the top 'cause bro tried to spin
    She dropping the top she back again
    Fuck her 'cause she at the crib again, company
    I let it slide when I really should slid
    After all the shit I did
    Look at how they repaying me back
    Now fall out my real
    Tell me what kind of payment is that?
    I put that on my kid and my trust
    Yeah, it is what it is
    I'm outside, 29, G5, (ah-ah-ah), seaside
    I been losing friends and finding peace
    But honestly that sounds like a fair trade to me
    If I ever heard one then I'm still here
    Outside, front line, Southside
    I been losing friends and finding peace
    Honestly, that sounds like a fair trade to me
    I don't understand why you blame me
    Take me as I am, it's the same me
    Senseless sight to see
    Senseless sight to see
    Up on a mountain (up on a mountain)
    Search through the valley (search through the valley)
    You hear me calling (you hear me calling)
    Won't you come find me? (Won't you come find me?)
    Please don't forsake me (please don't forsake me)
    All of a sudden (all of a sudden)
    My heart is breaking (breaking)
    I feel it coming, I, I
    </pre>

        <pre>
    Nem értem, miért engem hibáztatsz
    Fogadj el olyannak, amilyen vagyok, ez ugyanaz, mint én
    Igen
    Értelmetlen látvány
    Igen
    Értelmetlen látvány
    Ayy
    Fiatalnak érzem magam, de úgy bánnak velem, mint az OG-val
    És rajtam akarják a teát, esküszöm, hogy ezek a szukák kíváncsiak
    Azt mondta, pénzt tett a fejemre, azt hiszem, meglátjuk
    Nem adok pénzt a fejére, a niggáim tartoznak nekem
    Egy darabig szinglinek kell lennem, nem irányíthatsz engem
    Uno, dos, tres, egy versenyen nem tarthatnak meg
    És megmutatom az arcom egy tokban, hogy tudd, én vagyok az
    Az utánzás nem hízelgés, csak idegesít
    És én is foglalkozom vele
    És a piszok, amit a nevemre dobtak
    Földdé változott, és kinőttem
    Itt az ideje, hogy kitalálja, mit kezdjen vele
    A nagy kerekek gurulnak, forognak
    Kint vagyok, 29, G5, tengerpart
    Elvesztettem a barátokat és békét találtam
    De őszintén szólva számomra tisztességes kereskedelemnek tűnik
    Ha valaha hallottam egyet, és még mindig itt vagyok
    Kint, fronton, déli oldalon
    Elvesztettem a barátokat, és békét találtam
    Őszintén szólva számomra tisztességes kereskedelemnek tűnik
    Nézze, ne hívjon el, ha még egy szánalmas bulit rendez
    Visszatekintve nehéz megmondani, honnan indultam
    Nem tudom, ki szeret engem, de tudom, hogy nem mindenki
    Soha nem tudom szeretni, elfoglalt test
    Kicsim, ha akarsz, nem lehetsz mindenkivel, na
    Nem lehet kibaszott senkit, igen
    Érzek irántad, ez a lényeg, igen
    Tudod, ez valami, amikor énekelek róla, igen
    Anya korábban mozgássérült volt, de megadta ezt a képességet
    És most felemelt fejjel és egyenes háttal sétál
    Szerintem nem érzed, én kint vagyok
    Mindennek ellenére, amit mondtak, nem leszek és nem is lehetnék
    Nem tudom, mi történt velük, akik azt mondták, hogy lesznek
    Még mindig látlak a csúcson, és félreértettek
    Nem tartok haragot a szívemben, ez az érettség
    És mi már nem tartunk magunkon, ez a biztonság
    Kint vagyok (igen), 29 éves (igen), G5, tengerparton
    Elvesztettem a barátokat, és békét találtam
    De őszintén szólva számomra tisztességes kereskedelemnek tűnik
    Ha valaha hallottam egyet, és még mindig itt vagyok
    Kívül, frontvonal, déli oldal (déloldal)
    Elvesztettem a barátokat, és békét találtam
    Őszintén szólva számomra tisztességes kereskedelemnek tűnik
    Nem értem, miért engem hibáztatsz
    Fogadj el olyannak, amilyen vagyok, ez ugyanaz, mint én (próbálom)
    Értelmetlen látvány
    Értelmetlen látvány (kint)
    Rollsban gurulok, és nincs biztonság
    motorozás, motorpörgés
    Át kell borulnom hozzád, ki kell engedned
    Nyújtsa szét a lábát a belvárosban, amikor kimegyek enni
    Hallhatja a nyers hangokat, amikor álmában felfelé ringat
    Rágurulok, mielőtt hagynám, hogy rám guruljon
    Oszd fel ezt a közepén, ébredj harmóniában (beteg)
    Aggódó beteg, elegem van az aggódásból (beteg, beteg)
    Ez csak aggodalom, inkább eltemetem őket
    Hamis barátokról és csontvázakról beszélek (igen)
    Kora reggel válldörzsölés és ügyvéd aláírta az egyezséget
    Soha nem fogom elviselni, hogy ez a szar sötétebb legyen, mint a melaninom
    Egyedül a kiságyban, ez a szar bejött
    Görgesse a hívásnaplómat hangulatjelek alapján, hogyan mentem el őket
    Del Mar, mint a strand, ahol a kapám volt, de én kedvelem őket
    Ez a pillangós hangulatjel lenyomott engem és az összes babámat
    Backwood az arcodban, nem lökdösödik, rajta van a K betű
    Megtörtem a kenyeret ahelyett, hogy néztem volna, ahogy a niggák szétesnek (megtörik)
    Küldtek pár szukát is, mintha Fokvárosból lennék
    Tudd, hogy helyezkednek el, tudod, hogy a segg felfelé néz, arccal lefelé (menjünk)
    Soha nem vagyok megelégedve, két millió esemény, gyakran megesik
    Költséget vállalok, számomra ez logikus
    Ledobom a tetejét, nincs színe az ostornak
    Ledobom a felsőt, mert tesó pörögni próbált
    Ledobta a felsőt, és ismét visszatette
    Bassza meg, mert megint a kiságyban van, társaság
    Hagytam csúszni, amikor tényleg csúsznom kellene
    Minden szar után, amit csináltam
    Nézd meg, hogyan fizetnek vissza
    Most ess ki az igazi
    Mondja meg, milyen fizetés ez?
    Ezt a gyerekemre és a bizalmamra helyeztem
    Igen, ez van
    Kint vagyok, 29, G5, (ah-ah-ah), tengerpart
    Elvesztettem a barátokat, és békét találtam
    De őszintén szólva számomra tisztességes kereskedelemnek tűnik
    Ha valaha hallottam ilyet, akkor még mindig itt vagyok
    Kívül, frontvonal, déli oldal
    Elvesztettem a barátokat, és békét találtam
    Őszintén szólva számomra tisztességes kereskedelemnek tűnik
    Nem értem, miért engem hibáztatsz
    Fogadj el olyannak, amilyen vagyok, ez ugyanaz, mint én
    Értelmetlen látvány
    Értelmetlen látvány
    Fenn a hegyen (fönn a hegyen)
    Keresés a völgyben (keresés a völgyben)
    Hallod, ahogy hívom (hallod, ahogy hívom)
    Nem jössz megkeresni? (Nem jössz megkeresni?)
    Kérlek, ne hagyj el (kérlek, ne hagyj el)
    Hirtelen (hirtelen)
    A szívem megszakad (megszakad)
    Érzem, hogy jön, én, én
    </pre>
        <audio controls>
            <source src="./assets/resources/videos/fairtrade.mp3" type="audio/mpeg"/>
        </audio>
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