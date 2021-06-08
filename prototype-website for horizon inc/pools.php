<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
<title>Scala - Mobile, distributed and anonymous.</title>
<meta name="description" content="Distributed wealth for all devices.">
<meta name="author" content="Scala development team">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/colors.css">
<link href="css/fontawesome.css" rel="stylesheet">
<style>@import url('https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap');</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/scroll.js"></script>
<script src="js/sorttable.js"></script>

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:site" content="@scalahq"/>
<meta name="twitter:title" content="Scala - Mobile, distributed and anonymous."/>
<meta name="twitter:description" content="Distributed wealth for all devices."/>
<meta name="twitter:image" content="https://scalaproject.io/assets/img/tcard.jpg"/>

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
<link rel="manifest" href="/assets/favicon/site.webmanifest">
<link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#238bff">
<link rel="shortcut icon" href="/assets/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-config" content="/assets/favicon/browserconfig.xml">
<meta name="theme-color" content="#191e26">

<script>
    function copy(id) {
        setClipboard($("#"+id+"_address").val());
        $("#"+id+"_c").text("copied!");
        setTimeout(function(){
            $("#"+id+"_c").text(id.toUpperCase());
        }, 750);
    }

    function setClipboard(value) {
        var tempInput = document.createElement("input");
        tempInput.style = "position: absolute; left: -1000px; top: -1000px";
        tempInput.value = value;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
    }
</script>

  <!-- Copy -->
  <script>
    function tab(tab, a, b) {
      $("#"+tab+"_"+b).hide();
      $("#"+tab+"_"+a).show();
      $("#"+tab+"_"+b).removeClass("active");
      $("#"+tab+"_"+a+"_b").removeClass("bg-darker c-grey").addClass(" bg-lighter");
      $("#"+tab+"_"+b+"_b").removeClass("bg-lighter").addClass("bg-darker");
    }
  </script>
</head>
<body>

  <!-- Navigation Bar -->
  <div class="top-fix bg-grey full-width">
    <div class="container">
      <nav>
        <div class="row">
          <div class="no-lh">
            <img src="assets/img/logo.svg" height="32px" class="left"><h1 class="h5 c-white fat left spacer-top">Mining pools</h1>
            <a href="index.php" class="button right small bg-lighter c-lighter"><i class="fas fa-chevron-left"></i> Back</a>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <div class="container">
    <div class="row push-bottom-hard">
      <div class="push-top">
          <section>
            <header>
              <h4>Scala mining pools</h4>
            </header>
            <article class="small push-bottom">
              <table id="sorttable wide-t">
                <thead>
                  <tr>
                    <th onclick="sortTable(0)" class="h-link">Pool <i class="fas sort-icon"></i></th>
                    <th onclick="sortTable(1)" class="h-link">Hashrate <i class="fas sort-icon"></i></th>
                    <th onclick="sortTable(2)" class="h-link">Last block <i class="fas sort-icon"></i></th>
                    <th onclick="sortTable(3)" class="h-link">Miners <i class="fas sort-icon"></i></th>
                    <th onclick="sortTable(4)" class="h-link">Fee <i class="fas sort-icon"></i></th>
                  </tr>
                </thead>
                <tbody id="txBody2">
                  <tr>
                    <td><a href="https://pool.scalaproject.io/" target="_blank">scalaproject.io</a></td>
                    <td class="scala-hashrate c-green fat"></td>
                    <td class="scala-lastblock"></td>
                    <td class="scala-miners"></td>
                    <td class="scala-fee"></td>
                  </tr>
                  <tr>
                    <td><a href="https://scala.herominers.com/" target="_blank">herominers.com</a></td>
                    <td class="hero-hashrate c-green fat"></td>
                    <td class="hero-lastblock"></td>
                    <td class="hero-miners"></td>
                    <td class="hero-fee"></td>
                  </tr>
                  <tr>
                    <td><a href="https://stellite.miner.rocks/" target="_blank">miner.rocks</a></td>
                    <td class="rock-hashrate c-green fat"></td>
                    <td class="rock-lastblock"></td>
                    <td class="rock-miners"></td>
                    <td class="rock-fee"></td>
                  </tr>
                  <tr>
                    <td><a href="https://xla.pool.gntl.co.uk/" target="_blank">gntl.co.uk</a></td>
                    <td>n/a</td>
                    <td>n/a</td>
                    <td>n/a</td>
                    <td>n/a</td>
                  </tr>
                </tbody>
              </table>
            </article>
        </section>
      </div>


    </div>
  </div>

  <!-- Downloads and links -->
  <!-- Downloads and links -->
<footer class="frame bg-black" id="footer">
  <div class="container">
    <div class="row">
      <div class="col x1-fourth spacer-top">
        <section>
          <header>
            <h5 class="c-black">Downloads</h5>
          </header>
          <ul>
            <li><a href="https://github.com/scala-network/scala-electron-gui/releases" target="_blank">GUI Wallet</a></li>
            <li><a href="https://github.com/scala-network/Scala/releases" target="_blank">CLI Wallet</a></li>
            <li><a href="https://github.com/scala-network/XLArig/releases" target="_blank">CLI Miner</a></li>
          </ul>
        </section>
      </div>
      <div class="col x1-fourth spacer-top">
        <section>
          <header>
            <h5 class="c-black">Essentials</h5>
          </header>
          <ul>
            <li><a href="https://explorer.scalaproject.io/">Explorer</a></li>
            <li><a href="paper-wallet.php">Paper Wallet</a></li>
            <li><a href="pools.php">Mining Pools</a></li>
          </ul>
        </section>
      </div>
      <div class="col x1-fourth spacer-top">
        <section>
          <header>
            <h5 class="c-black">Plugins</h5>
          </header>
          <ul class="c-darkgrey">
            <li><a href="https://github.com/scala-network/stellite-card-reader" target="_blank">Point of Sales</a></li>
            <li><a href="https://github.com/scala-network/ScalaPay-Merchant-NPM" target="_blank">ScalaPay NPM</a></li>
            <li><a href="https://github.com/scala-network/XTC-Stats" target="_blank">Monitoring Tool</a></li>
          </ul>
        </section>
      </div>
      <div class="col x1-fourth spacer-top">
        <section>
          <header>
            <h5 class="c-black">Exchanges</h5>
          </header>
          <ul>
            <li><a href="https://tradeogre.com/exchange/BTC-XLA" target="_blank">Tradeogre BTC</a></li>
            <li><a href="https://tradeogre.com/exchange/LTC-XLA" target="_blank">Tradeogre LTC</a></li>
            <li><a href="https://crex24.com/de/exchange/XLA-BTC" target="_blank">Crex BTC</a></li>
          </ul>
        </section>
      </div>
    </div>
    <div class="row spacer-top">
      <section>
        <header>
          <h5 class="c-black fat">Join the community</h5>
        </header>
        <a href="https://www.reddit.com/r/ScalaNetwork/" target="_blank" class="button bg-grey mobi-full-width c-white"><i class="fab fa-reddit"></i> Reddit</a>
        <a href="https://www.youtube.com/channel/UCCJ7ecuzhtvUWz360i7kwoA" target="_blank" class="button bg-grey mobi-full-width c-white"><i class="fab fa-youtube"></i> Youtube</a>
        <a href="https://medium.com/scala-network" target="_blank" class="button bg-grey mobi-full-width c-white"><i class="fab fa-medium"></i> Medium</a>
        <a href="https://twitter.com/scalahq" target="_blank" class="button bg-grey mobi-full-width c-white"><i class="fab fa-twitter"></i> Twitter</a>
        <a href="https://t.me/scalaofficial" target="_blank" class="button bg-grey mobi-full-width c-white"><i class="fab fa-telegram"></i> Telegram</a>
        <a href="https://discordapp.com/invite/djAFVvy" target="_blank" class="button bg-grey mobi-full-width c-white"><i class="fab fa-discord"></i> Discord</a>
        <a href="https://github.com/scala-network/" target="_blank" class="button bg-green mobi-full-width right"><i class="fab fa-github"></i> Contribute on GitHub</a>
      </section>
    </div>
  </div>
</footer>

<script>
    $('#showmenu, #showdownloads, #showsupport, #showstats').click(function() {
      switch(this.id){
        case 'showsupport':
            toggleSupport(!$('.support').is(':hidden'));
            toggleDownloads(true);
            toggleStats(true);
            toggleMenu(true);
          break;
        case 'showstats':
            toggleStats(!$('.stats').is(':hidden'));
            toggleDownloads(true);
            toggleSupport(true);
            toggleMenu(true);
          break;
        case 'showdownloads':
            toggleDownloads(!$('.downloads').is(':hidden'));
            toggleMenu(true);
            toggleSupport(true);
            toggleStats(true);
          break;
        case 'showmenu':
            toggleMenu(!$('.navigation').is(':hidden'));
            toggleDownloads(true);
            toggleSupport(true);
            toggleStats(true);
          break;
      }
     });

    function toggleSupport(hide){
      if(hide != $('.support').is(':hidden')){
        $("#showsupport i").toggleClass("fa-star fa-chevron-down");
        $('.support').slideToggle("fast");
      }
    }

    function toggleStats(hide){
      if(hide != $('.stats').is(':hidden')){
        $("#showstats i").toggleClass("fa-chart-bar fa-chevron-down");
        $('.stats').slideToggle("fast");
      }
    }

    function toggleDownloads(hide){
      if(hide != $('.downloads').is(':hidden')){
        $("#showdownloads i").toggleClass("fa-download fa-chevron-down");
        $('.downloads').slideToggle("fast");
      }
    }

    function toggleMenu(hide){
      if(hide != $('.navigation').is(':hidden')){
        $("#showmenu i").toggleClass("fa-bars fa-chevron-down");
        $('.navigation').slideToggle("fast");
      }
    }

    $('.main-menu, .drop-down').click( function(e) {
        e.stopPropagation();
    });

    $('.myclick').click( function() {
      $('.navigation').fadeOut("fast");
      $("#showmenu i").toggleClass("fa-bars fa-chevron-down");
    });

    $('body').click( function() {
        $('.drop-down').hide();
        if ($('#showmenu i').hasClass( 'fa-chevron-down' )) {
          $("#showmenu i").toggleClass("fa-bars fa-chevron-down");
        }
        else if ($('#showdownloads i').hasClass( 'fa-chevron-down' )) {
          $("#showdownloads i").toggleClass("fa-download fa-chevron-down");
        }
        else if ($('#showstats i').hasClass( 'fa-chevron-down' )) {
          $("#showstats i").toggleClass("fa-chart-bar fa-chevron-down");
        }
        else if ($('#showsupport i').hasClass( 'fa-chevron-down' )) {
          $("#showsupport i").toggleClass("fa-star fa-chevron-down");
        }
    });
  </script>

  <script>
    function abbreviateNumber(value) {
      var newValue = value;
      if (value >= 1000) {
          var suffixes = ["H/s", "kH/s", "mH/s"];
          var suffixNum = Math.floor( (""+value).length/3 );
          var shortValue = '';
          for (var precision = 2; precision >= 1; precision--) {
              shortValue = parseFloat( (suffixNum != 0 ? (value / Math.pow(1000,suffixNum) ) : value).toPrecision(precision));
              var dotLessShortValue = (shortValue + '').replace(/[^a-zA-Z 0-9]+/g,'');
              if (dotLessShortValue.length <= 2) { break; }
          }
          if (shortValue % 1 != 0)  shortValue = shortValue.toFixed(1);
          newValue = shortValue+suffixes[suffixNum];
      }
      return newValue;
    }

    $.getJSON('https://pool.scalaproject.io/api/pool/stats', function(data) {
      console.log(data);
      var scalahashrate = abbreviateNumber(data.pool_statistics.hashRate)
      var scalaminers = `${data.pool_statistics.miners}`
      var scalafee = `0.0 &#37;`
      var scalalastblock = `${data.pool_statistics.lastBlockFoundTime}`

      $(".scala-hashrate").html(scalahashrate);
      $(".scala-miners").html(scalaminers);
      $(".scala-fee").html(scalafee);
      $(".scala-lastblock").html(convertTimestamp(scalalastblock));

    });

    $.getJSON('https://scala.herominers.com/api/stats', function(data) {

      var herohash = `${data.pool.hashrate}`
      var herohashrate = abbreviateNumber(herohash)
      var herominers = `${data.pool.miners}`
      var herofee = `${data.config.fee} &#37;`
      var herolastblock = `${data.pool.lastBlockFound}`

      $(".hero-hashrate").html(herohashrate);
      $(".hero-miners").html(herominers);
      $(".hero-fee").html(herofee);
      $(".hero-lastblock").html(convertTimestamp(herolastblock));

    });

    $.getJSON('https://stellite.miner.rocks/api/stats', function(data) {

      var rockhash = `${data.pool.hashrate}`
      var rockhashrate = abbreviateNumber(rockhash)
      var rockminers = `${data.pool.miners}`
      var rockfee = `${data.config.fee} &#37;`
      var rocklastblock = `${data.pool.lastBlockFound}`

      $(".rock-hashrate").html(rockhashrate);
      $(".rock-miners").html(rockminers);
      $(".rock-fee").html(rockfee);
      $(".rock-lastblock").html(convertTimestamp(rocklastblock));

    });

    function convertTimestamp(timestamp){
      return new Date(parseInt(timestamp)).toLocaleString();
    }

    $('.h-link').click(function() {
      if ($("i", this).is('.fa-chevron-down, .fa-chevron-up')) {
        $("i", this).toggleClass("fa-chevron-down fa-chevron-up");
      }
      else {
        $('.sort-icon').not(this).each(function(){
          $('.sort-icon').removeClass("fa-chevron-down");
          $('.sort-icon').removeClass("fa-chevron-up");
        });
        $("i", this).addClass("fa-chevron-down");
      }
    });
  </script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122317293-4"></script>

  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-122317293-4');
  </script>
  </body>
</html>
