<?php

?>
<!DOCTYPE html>
<html lang="it" class="no-js">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108218482-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108218482-1');
</script>
<meta charset="utf-8">
<title>La tua libertà finanziaria - BitcoinZ</title>
<meta name="description" content="BitcoinZ è un nuovo tipo di calcolo dei pagamenti. Scegli la tua moneta" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta property="og:image" content="path/to/image.jpg">
<!--Favicon-->
<link rel="icon" href="/favicon.ico">
<!--Libs css-->
<link rel="stylesheet" href="/css/stylelibs.css">
<!--Main css-->
<link rel="stylesheet" data-style="styles" href="/css/stylemain.css">

</head>
<body class="dark-load">
<header id="top-nav" class="top-nav page-header">
<div class="container"><a href="/" class="logo smooth-scroll"><img src="/img/logo.png" alt="logo" class="logo-white"><img src="/img/logo.png" alt="logo" class="logo-dark"></a>
<nav class="top-menu">
<ul class="sf-menu">
<!--Menu default-->
<li><a href="/media/Community_Paper_Final.pdf">Carta comunitaria</a>
<li><a href="#benefist" class="smooth-scroll">Benefici</a></li>
<li><a href="#exchange" class="smooth-scroll">Exchanges</a></li>
<li><a href="#wallets" class="smooth-scroll">Portafogli</a></li>
<li><a href="#" class="smooth-scroll">Piscine</a>
<ul>
<?php
include_once '../pools.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">And more on the forum bitcointalk</a></li>
</ul></li>
<li><a href="#" class="smooth-scroll">Esploratore</a>
<ul>
<?php
include_once '../explorer.php';
?>
</ul></li>
<li><a href="#" class="smooth-scroll">Sociale</a>
<ul>
<?php
include_once '../social.php';
?>
</ul> 
<!--<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">ANN</a></li>-->
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Lang</a>
<ul class="sub-menu">
<?php
include_once '../lang.php';
?>
</ul></li>
</nav>
<!-- Start mobile menu-->
<!-- Start toggle menu--><a href="#" class="toggle-mnu"><span></span></a>
<div id="mobile-menu">
<div class="inner-wrap">
<nav>
<ul class="nav_menu"><br>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Language</a>
<ul class="sub-menu"><br>
<?php
include_once '../langmobile.php';
?>
</ul></li>
<li><a href="/media/Community_Paper_Final.pdf">Carta comunitaria</a></li>
<li><a href="#benefist" class="smooth-scroll">Benefici</a></li>
<li><a href="#exchange" class="smooth-scroll">Exchanges</a></li>
<li><a href="#wallets" class="smooth-scroll">Portafogli</a></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Piscine</a>
<ul class="sub-menu"><br>
<?php
include_once '../poolsmobile.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">And more...</a></li>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Esploratore</a>
<ul class="sub-menu"><br>
<?php
include_once '../explorermobile.php';
?>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Sociale</a>
<ul class="sub-menu"><br>
<?php
include_once '../socialmobile.php';
?>
</ul></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">Forum bitcointalk</a>
</ul>
</nav>
</div>
</div>
<!-- End mobile menu-->
</div>
</header>

<!-- Start slider section-->
<div id="top" class="slider">
<div id="preloader">
<div id="status"></div>
</div>
<div class="full-slider intro">
<!-- Start slide-->
<div data-image="/img/17.jpg" class="slide bg-mask background-image full-vh">
<div class="container-slide vertical-align center head-desc">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="heading-title-big"><br>La tua moneta<br><span>BitcoinZ: il True Bitcoin 2.0</span></div>
<div class="description-slide">Benvenuto nella decentralizzazione BitcoinZ. </div>
<div class="buttons-section">&nbsp;&nbsp;<a href="/media/Community_Paper_Final.pdf" class="btn dark-btn large-btn">Carta comunitaria</a><a href="https://connect.bitcoinz.global/" class="btn dark-btn large-btn" target="_blank">Leggi altro</a><a href="https://bitcoinz.global/donations/" class="btn dark-btn large-btn" target="_blank">Donate</a><br><br><center><script type="text/javascript" src="/api.js"></script><div class="coinmarketcap-currency-widget" data-currency="bitcoinz" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div></center>
</div>
</div>
</div>
</div>
</div>
<div id="particles-js" class="canvas-background"></div>
</div>
</div>
<!--Contol slider-->
<div id="dots-control-full-slider" class="dots-control-carousel"></div>
<!-- Strat Control carousel-->
<div id="control-full-slider" class="prev-next-block-rotate opacity-control">
<div class="wrap-prev">
<div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
</div>
<div class="wrap-next">
<div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
</div>
</div><a href="#about" class="smooth-scroll btn-down"><i aria-hidden="true" class="fa fa-angle-down"></i></a>
</div>
<!-- End slider section-->
<!-- Section about-->
<section id="about" class="about-us">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title center">
<h2>SULLA <span>coin</span></h2>
<!--<div class="small-desd">We create <span>awesome stuff</span></div>
<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>-->
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-target"></i>
<div class="bg-icon"><i class="pe-7s-target"></i></div>
</div>
<div class="content">
<h3>DETTAGLI <span>IMPORTANTI</span></h3>
<p>- Backup il tuo wallet in più posti<br>- Immagazzina grandi quantità di monete in wallet fisici con indirizzi anonimi<br>- Non dare/inviare a nessuno le private key. La private key è l’unica cosa di cui tu hai bisogno per avere il possesso del tuo indirizzo. Se tu dai o invii la tua private key a qualcuno, consideralo come un segnale di allarme, pertanto muovi velocemente le tue monete su un altro indirizzo </p>

</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3>BitcoinZ È <span>Bitcoin 2.0:</span></h3>
<p>- Tecnologia Bitcoin;<br>- Transazioni anonime (zk-SNARKs privacy) – Bitcoin ha tutte le transazioni pubblicamente disponibili;<br>- GPU Mining decentralizzato (Miners con ASIC sono bannati, hardfork al fine di prevenire eventuali ASIC miners sono possibili);<br>- Sviluppo decentralizzato / Tutti I contributori sono volontari<br>- Grandi blocchi -> I blocchi sono simili a BitcoinCash (BCH)</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>COMUNITÀ <span>ATTIVA</span></h3>
<p>La nostra community è attiva e siamo sempre in fase di sviluppo <br>Puoi seguirci sui nostri social network, sul forum cosi come su slack</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!--Section services-->
<section id="benefist" class="services-section background-image bg-dark-section">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title small-heading center">
<h2>Benefici <span>BitcoinZ</span></h2>
<!--<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>-->
</div>
</div>
</div>
<div class="row">
<div class="tabs services-tabs">
<ul class="services-carousel">
<li class="animated-service anim-shadow"><a href="#tabs-1"><i class="pe-7s-graph"></i>
<h4>Supply massimo</h4>
<p>21 000 000 000 btcz.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-2"><i class="pe-7s-drop"></i>
<h4>Algoritmo</h4>
<p>Equihash.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-3"><i class="pe-7s-timer"></i>
<h4>Transazioni veloci</h4>
<p>BTCZ = 2MB ogni 2,5 minuti ~</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-4"><i class="pe-7s-map"></i>
<h4>Fornitura circolare</h4>
<p>12500 monete ogni 2,5 minuti.</p></a></li>
</ul>
<div id="dots-control-tabs" class="dots-control-carousel"></div>
<!--Start tabs-->
<div id="tabs-1">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Il nostro obiettivo è quello di permettere a tutti i migliori software <span> gratuity sul mercato l’utilizzo di BitcoinZ</span></h2>
<p>Parametri immutabili: </p>
</div>
<p>- Supply massimo </p>
<p>- Inflazione </p>
<p>- Algoritmo POW – E’ possibile eventualmente cambiare l’algoritmo Equihash ad un altro algoritmo POW per prevenire ASIC miners</p>
<p>- Nuove caratteristiche sono ammesse al fine di migliorare l’utilizzabilità e la scalabilità, ma non cambieremo mai la storia (caso ETH/ETC) </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Algoritmo: Equihash (mining CPU – promuoviamo la decentralizzazione nel mining) </li>
<li>Supply massimo 21 miliardi di monete </li>
<li>Attuale supply: 12.500 monete ogni 2,5 minuti</li>
<li>Attuale block size è simile a BCH (BTCZ = 2 MB ogni 2,5 min circa BCC/BCH = 8mb ogni 10 min)</li>
</ul>
</div>
</div>
<div id="tabs-2">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Il software più sicuro è all’interno di  <span>bitcoinz-pod/bitcoinz linux client</span></h2>
<p>Programmi con dati sensibili come i wallet dovranno essere forniti liberamente (open source) e sha256 al fine di poter essere revisionati da altri team/pods. Non è raccomandato utilizzare alcun wallet non revisionato da nessun altro team. </p>
</div>
<p>Software senza alcuna conferma deve essere trattato come un segnale di allarme e quindi non utilizzato.</p>
</div>
<!--<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Decentralized mining</li>
<li>Easy to mine</li>
<li>Decentalized Exchanges</li>
<li>Pure community coin</li>
<li>Always immutable - no way to change history!</li>
<li>Hardforks to improve tech & scalability are allowed but changing history is banned</li>
<li>BitcoinZ is focused on organic growth</li>
<li>and more...	</li>
</ul>
</div> -->
</div>
<!--<div id="tabs-3">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Never fall in love with an idea. They’re whores. If the the <span>job, there’s always another.</span></h2>
<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
</div>
<p>Tab 1 Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et . Mauris </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Rich media banners</li>
<li>Audio production</li>
<li>Photography</li>
<li>Design</li>
<li>Content creation</li>
<li>Content audit</li>
<li>Project management</li>
<li>Technical requirements</li>
<li>Testing</li>
<li>and more...	</li>
</ul>
</div>
</div>
<div id="tabs-4">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Never fall in love with an idea. If the the <span>job, there’s always another.</span></h2>
</div>
<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
<p>Tab 1 Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et . Mauris </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Design</li>
<li>Content creation</li>
<li>Content audit</li>
<li>Project management</li>
<li>Technical requirements</li>
<li>Rich media banners</li>
<li>Audio production</li>
<li>Photography</li>
<li>Testing</li>
<li>and more...</li>
</ul>
</div>
</div>
</div>!-->
<div class="col-md-12">
<div class="link-full"><a href="https://bitcointalk.org/index.php?topic=2166510.0">Forum<i aria-hidden="true" class="fa fa-angle-right"></i></a></div>
</div>
</div>
</div>
</section>
<!--Section how we work-->
<section class="section-how-we-work bg-white-section background-image">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title center">
<h2>Perchè BitcoinZ ?</h2>
<div class="small-desd">Siamo un network totalmente decentralizzato</div>
<p>Ecco alcuni dei vantaggi</p>
</div>
</div>
</div>
<div class="row">
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-look"></i></div>
</div>
<h3>ANONIMITY</h3>
<p>All transactions are completely anonymous.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-light"></i></div>
</div>
<h3>SUPPORTO PER DIVERSE PIATTAFORME</h3>
<p>Il nostro wallet è compatibile on linux, windows, ios e android. E lavoriamo continuamente per miglioramenti.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
</div>
<h3>COMMUNITY</h3>
<p>Noi ascoltiamo la nostra community, cosi possiamo avere successo.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
</div>
<h3>ACTIVE PRICE GROWTH</h3>
<p>BitcoinZ si focalizza su una crescita organica.</p>
</div>
<!-- Edn items-->
</div>
</div>
</section>
<!--Section work progress-->
<section id="exchange" class="section-work-progress background-image bg-dark-section">
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="heading-title small-heading text-left">
<h2>Exchanges</h2>
<p>Comprare o vendere le tue monete BitcoinZ</p>
</div>
</div>
<?php
include_once '../exchange.php';
?>
</section>
<!--Section our some work-->
<section id="wallets" class="section-portfolio bg-white-section background-image">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="heading-title center">
<h2>Scarica il <span>portafoglio</span></h2>
<p>Linux, Windows e portafogli mobili</p>
</div>
<div class="controls-portfolio center">
<?php
include_once '../wallets.php';
?>
</div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
</div>
</div>
</section>
</br>
</br>
</br>
</br>
<!--Section why chose us-->
<?php
include_once '../roadmap.php';
?>
<section class="section-choose-us">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title center">
<h2>PERCHE’ SCEGLIERE <span>BitcoinZ</span></h2>
<div class="small-desd">QUI ALCUNE DELLE  <span> RAGIONI</span></div>
<p>ATTENZIONE. Ricorda sempre le insidie e tieni le tue backup key in un posto sicuro</p>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="content">
<h3>MINING DECENTRALIZZATO</h3>
<p>Come miner non devi utilizzare le più grandi pools per seguire I principi fondamentali<br>
Facile da minare<br>
Algoritmo Equihash.<br>
Exchanges decentralizzati</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>No <span>Pre-mine</span></h3>
<p>Coin Pura – Nessun pre-mine</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-graph1"></i>
<div class="bg-icon"><i class="pe-7s-graph1"></i></div>
</div>
<div class="content">
<h3>BitcoinZ E’ <span>Bitcoin 2.0:</span></h3>
<p>- -	21 miliardi di monete – Tutti nel mondo possono avere almeno 1 BTCZ</p>
</div>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-like"></i>
<div class="bg-icon"><i class="pe-7s-like"></i></div>
</div>
<div class="content">
<h3>Active <span>community</span></h3>
<p>La nostra community è attiva nello sviluppo e nella crescita tutto il giorno</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3>TRANSAZIONI <span>ANONIME</span></h3>
<p>Tutte le transazioni rimangono anonime. Non devi quindi preoccuparti per quanto riguarda la tua privacy</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-phone"></i>
<div class="bg-icon"><i class="pe-7s-phone"></i></div>
</div>
<div class="content">
<h3>WALLET <span>ANDROID e IOD</span></h3>
<p>Utilizza bitcoinz sui tuoi smartphones</p>
</div>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-display1"></i>
<div class="bg-icon"><i class="pe-7s-display1"></i></div>
</div>
<div class="content">
<h3>CRESCITA  <span>NATURALE</span></h3>
<p>La tua moneta crescerà e si svilupperà in una maniera naturale	</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-link"></i>
<div class="bg-icon"><i class="pe-7s-link"></i></div>
</div>
<div class="content">
<h3>SVILUPPO <span>DECENTRALIZZATO</span></h3>
<p>Tutti gli exchanges sono permessi. I migliori sono quelli decentralizzati. Progettiamo di implementare un XCAT exchange totalmente decentralizzato</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-paint"></i>
<div class="bg-icon"><i class="pe-7s-paint"></i></div>
</div>
<div class="content">
<h3>SOLO POW E  <span>NO POS</span></h3>
<p>La coin è calcolata solo per mining POW e non verrà mai cambiata su POS</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!--Section our clients-->
<div class="our-clients">
<div class="container">
<div class="row">
<div id="clients-carousel" class="clients-carousel">
<div class="col-md-2">
<div class="item-carousel"><a href="https://github.com/bitcoinz-pod/bitcoinz" target="_blank"><img src="/img/partners-1.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank"><img src="/img/partner2.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="http://slack.bitcoinz.site/" target="_blank"><img src="/img/partner3.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://www.reddit.com/r/BTCZCommunity/" target="_blank"><img src="/img/partner4.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://discordapp.com/invite/u3dkbFs" target="_blank"><img src="/img/disc.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://www.facebook.com/BitcoinZCommunity/" target="_blank"><img src="/img/face.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://t.me/joinchat/CDzlaRGMvBm4P2Z76sNclQ" target="_blank"><img src="/img/tel.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://twitter.com/BTCZCommunity" target="_blank"><img src="/img/twit.png" alt="logo"></a></div>
</div>
</div>
</div>
</div>
<!-- Strat Control carousel-->
<div id="control-clients" class="prev-next-block-rotate">
<div class="wrap-prev">
<div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
</div>
<div class="wrap-next">
<div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
</div>
</div>
</div>

<!-- Old browsers support--><!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

<footer>
<div class="down-footer">
<div class="container">
<div class="row">
<div class="col-md-12">
<p>© 2017 BitcoinZCommunity. Tutti I diritti riservati</p>
<ul class="footer-menu">
<li><a href="#benefist" class="smooth-scroll">Benefici</a></li>
<li><a href="#exchange" class="smooth-scroll">Exchanges</a></li>
<li><a href="#wallets" class="smooth-scroll">Wallets</a></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">Forum bitcointalk</a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>
<!--button to top-->
<div class="top icon-down toTopFromBottom"><a href="#" class="smooth-scroll"><i class="pe-7s-angle-up"></i></a></div>
<!--end button to top-->
<!--Libs-->
<script src="/js/libs.js.pagespeed.ce.Av_NAtkm4V.js"></script>
<script src="/libs/style-customizer/style-customizer.js.pagespeed.ce.IgWtkWf8IC.js"></script>
<!--Use scripts-->
<script src="/js/common.js.pagespeed.ce.hW1NRi6zyn.js"></script>
</body>
</html>