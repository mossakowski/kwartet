<!DOCTYPE html>
<html lang="pl">

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
include('mailer.php');
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="node_modules/plyr/dist/plyr.css"> -->
  <link rel="stylesheet" href="css/plyr.css">
  <title>Marco Gianni Quartet - śląski kwartet smyczkowy</title>
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="#intro">Marco <br class="breakline-368"> Gianni <br class="breakline-502">Quartet</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#intro">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">O nas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#musicians">Muzycy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#repertoire">Repertuar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#songs">Audio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Kontakt</a>
        </li>
      </ul>
    </div>
  </nav>

  <header id="intro" style="min-height: 50px;">
    <!-- Jssor Slider Begin -->

    <style>
      /* jssor slider loading skin spin css */

      .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
      }

      @keyframes jssorl-009-spin {
        from {
          transform: rotate(0deg);
        }

        to {
          transform: rotate(360deg);
        }
      }
    </style>
    <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
      top: 0px; left: 0px; width: 1300px; height:660px; overflow: hidden;">
      <!-- Loading Screen -->
      <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
      </div>

      <!-- Slides Container -->
      <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1300px; height: 660px; overflow: hidden;">
        <div>
          <img data-u="image" src=" img/slider/kwartet13.jpg" />
        </div>
        <div>
          <img data-u="image" src=" img/slider/kwartet4.jpg" />
        </div>
        <div>
          <img data-u="image" src=" img/slider/kwartet12.jpg" />
        </div>
        <div>
          <img data-u="image" src=" img/slider/kasia.jpg" />
        </div>
        <div>
          <img data-u="image" src=" img/slider/kwartet7.jpg" />
        </div>
        <div>
          <img data-u="image" src=" img/slider/kwartet8.jpg" />
        </div>
        <div>
          <img data-u="image" src=" img/slider/1300x500/003.jpg" />
        </div>
        <div>
          <img data-u="image" src=" img/slider/kwartet10.jpg" />
        </div>
        <div>
          <img data-u="image" src=" img/slider/kwartet16.jpg" />
        </div>
        <div>
          <img data-u="image" src=" img/slider/kwartet14.jpg" />
        </div>

      </div>

      <!--#region Bullet Navigator Skin Begin -->
      <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
      <style>
        .jssorb031 {
          position: absolute;
        }

        .jssorb031 .i {
          position: absolute;
          cursor: pointer;
        }

        .jssorb031 .i .b {
          fill: #000;
          fill-opacity: 0.5;
          stroke: #fff;
          stroke-width: 1200;
          stroke-miterlimit: 10;
          stroke-opacity: 0.3;
        }

        .jssorb031 .i:hover .b {
          fill: #fff;
          fill-opacity: .7;
          stroke: #000;
          stroke-opacity: .5;
        }

        .jssorb031 .iav .b {
          fill: #fff;
          stroke: #000;
          fill-opacity: 1;
        }

        .jssorb031 .i.idn {
          opacity: .3;
        }
      </style>
      <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
          <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                      <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                  </svg>
        </div>
      </div>
      <!--#endregion Bullet Navigator Skin End -->

      <!--#region Arrow Navigator Skin Begin -->
      <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
      <style>
        .jssora051 {
          display: block;
          position: absolute;
          cursor: pointer;
        }

        .jssora051 .a {
          fill: none;
          stroke: #fff;
          stroke-width: 360;
          stroke-miterlimit: 10;
        }

        .jssora051:hover {
          opacity: .8;
        }

        .jssora051.jssora051dn {
          opacity: .5;
        }

        .jssora051.jssora051ds {
          opacity: .3;
          pointer-events: none;
        }
      </style>
      <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                  <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
              </svg>
      </div>
      <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                  <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
              </svg>
      </div>
      <!--#endregion Arrow Navigator Skin End -->
    </div>
  </header>
  <!-- Jssor Slider End -->

  <section id="about" class="mt-3 mb-3">
    <div class="container-fluid">
      <h2>O nas</h2>
      <div class="row">
        <div class="col-md-6">
          <p>Marco Gianni Quartet powstał 2008 roku. Tworzą go filharmonicy zabrzańscy. Obecnie członkami grupy są również absolwenci Akademii Muzycznych. Dzięki oryginalnemu podejściu do muzyki poważnej i rozrywkowej, kwartet często jest zapraszany do uświetniania
            różnego rodzaju projektów: eventowych, spotkań biznesowych,uroczystych otwarć obiektów oraz do oprawy różnego rodzaju konferencji i bankietów.</p>
          <p>Marco Gianni Quartet często grywa muzykę rozrywką , a nasze aranżacje na długo pozostają w pamięci naszych słuchaczy. Wybierając nasze usługi , macie Państwo pewność fachowego zrealizowania zadanego tematu muzycznego. Wspaniałe brzmienie wykonywanych
            przez kwartet utworów zapewniają muzycy z długoletnim doświadczeniem: Lucyna (I skrzypce), Marta (II skrzypce), Kasia (wiolonczela), Dominika (altówka), Dorota (sopran), Bartek (tenor), Łukasz (aranżacje utworów).</p>
          <p>Kwartet współpracuje z: Jacek (klawisze), Agata (wokal, jazz, rozrywka), Łukasz (gitara basowa), Jacek (perkusja).</p>
          <p>Serdecznie zapraszamy do współpracy!</p>
          <p class="text-logo">Prezentujemy własne aranżacje utworów , zapraszamy do wysłuchania nas w realu !</p>
        </div>
        <div class="col-md-6 text-center">
          <img class="about-img" src="img/marcoGianni.jpg" alt="zespol">
        </div>
      </div>
    </div>
  </section>

  <div class="parallax-window" data-parallax="scroll" data-image-src="img/zespol2.jpg">
    <h1 class="ml-3 mt-3 pl-2 pr-2 parallax-description bg-dark">Muzycy</h1>
  </div>

  <section id="musicians">
    <div class="container-fluid mt-5">
      <div class="row">

        <div class="col-md-3 text-center">
          <div class="profile-img-container">
            <div class="profile-img-bg" style="background-image:url('img/profilowe/lucyna.jpg');">
              <div class="profile-img-overlay" style="background-image:url('img/profilowe/lucyna2.jpg');"></div>
            </div>
          </div>
          <h3>Lucyna</h3>
        </div>


        <div class="col-md-3 text-center">
          <div class="profile-img-container">
            <div class="profile-img-bg" style="background-image:url('img/profilowe/marta.jpg');">
              <div class="profile-img-overlay" style="background-image:url('img/profilowe/marta2.jpg');"></div>
            </div>

          </div>
          <h3>Marta</h3>
        </div>


        <div class="col-md-3 text-center">
          <div class="profile-img-container">
            <div class="profile-img-bg" style="background-image:url('img/profilowe/kasia.jpg');">
              <div class="profile-img-overlay" style="background-image:url('img/profilowe/kasia2.jpg');"></div>
            </div>

          </div>
          <h3>Kasia</h3>
        </div>


        <div class="col-md-3 text-center">
          <div class="profile-img-container">
            <div class="profile-img-bg" style="background-image:url('img/profilowe/dominika.jpg');">
              <div class="profile-img-overlay" style="background-image:url('img/profilowe/dominika2.jpg');"></div>
            </div>

          </div>
          <h3>Dominika</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 text-center">
          <div class="profile-img-container">
            <div class="profile-img-bg" style="background-image:url('img/profilowe/jacek.jpg');">
              <div class="profile-img-overlay" style="background-image:url('img/profilowe/jacek2.jpg');"></div>
            </div>

          </div>
          <h3>Jacek</h3>
        </div>
        <div class="col-md-3 text-center">
          <div class="profile-img-container">
            <div class="profile-img-bg" style="background-image:url('img/profilowe/agata.jpg');">
              <div class="profile-img-overlay" style="background-image:url('img/profilowe/agata2.jpg');"></div>
            </div>

          </div>
          <h3>Agata</h3>
        </div>
        <div class="col-md-3 text-center">
          <div class="profile-img-container">
            <div class="profile-img-bg" style="background-image:url('img/profilowe/dorota.jpg');">
              <div class="profile-img-overlay" style="background-image:url('img/profilowe/dorota2.jpg');"></div>
            </div>

          </div>
          <h3>Dorota</h3>
        </div>
        <div class="col-md-3 text-center">
          <div class="profile-img-container">
            <div class="profile-img-bg" style="background-image:url('img/profilowe/bartek.jpg');">
              <div class="profile-img-overlay" style="background-image:url('img/profilowe/bartek2.jpg');"></div>
            </div>

          </div>
          <h3>Bartek</h3>
        </div>
      </div>
    </div>
  </section>

  <div class="parallax-window" data-parallax="scroll" data-image-src="img/repertuar.jpg">
    <h1 class="ml-3 mt-3 pl-2 pr-2 parallax-description bg-dark">Repertuar</h1>
  </div>

  <section id="repertoire" class="p-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <ul>
            <li>Mozart - Sonata Da Chiesa KV 67</li>
            <li>Schubert - Taniec węgierski</li>
            <li>Gershwin - Oh, lady be good!</li>
            <li>Scott Joplin - Country Club</li>
            <li>Funiculi Funicula</li>
            <li>Gira con me</li>
            <li>Dziewczęta z Barcelony</li>
            <li>Ach jedź do Varasalin</li>
            <li>Przetańczyć całą noc</li>
            <li>Usta milczą dusza śpiewa</li>
            <li>Co się dzieje, oszaleję</li>
            <li>Jakże mam Ci wytłumaczyć</li>
            <li>Geh! Geh! Herz von Flandern (wersja polska)</li>
            <li>Duet hrabiego i hrabiny z operetki "Wiedeńska krew"</li>
            <li>Z Tobą chcę oglądać świat</li>
            <li>Wcale nie, ależ tak</li>
            <li>Tylko jedno życie masz</li>
            <li>Dumka na dwa serca</li>
            <li>City of stars</li>
            <li>Byle nie o miłości</li>
            <li>Miłość rośnie wokół nas</li>
            <li>Świat na pewno zapamięta mnie</li>
            <li>Miłość stanęła w drzwich</li>
            <li>Wiosna ach to ty</li>
            <li>La Paloma</li>
            <li>My Country Is The Best</li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul>
            <li>O Karolino</li>
            <li>Moja Mała Blondyneczko</li>
            <li>Jesteś Szalona</li>
            <li>Kochana Uwierz Mi</li>
            <li>Filmowa Miłość</li>
            <li>Miliony Białych Róż</li>
            <li>Białyje Rozy</li>
            <li>Felicita</li>
            <li>Sharazan</li>
            <li>Tu Soltanto Tu</li>
            <li>Ci Sara</li>
            <li>Despacito</li>
            <li>Perfect</li>
            <li>Dawaj Nalewaj</li>
            <li>El.Bano</li>
            <li>Halleluja</li>
            <li>Voyage,Voyage</li>
            <li>Ameno</li>
            <li>Moment Of Peace</li>
            <li>I Am Alive</li>
            <li>Time To Say Goodbay</li>
            <li>Muzyka Z Filmu Titanic</li>
            <li>Muzyka Z Filmu Gladiator</li>
            <li>Muzyka Z Filmu Gwiezdne wojny</li>
            <li>Alizze: I En Ai Marre</li>
            <li>Motyw Muzyczny Z Filmu : Misja</li>
            <li>Derniere Danse</li>
            <li>Sos</li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul>
            <li>Don't Cry Me Argentina</li>
            <li>Subeme La Radio</li>
            <li>Alone</li>
            <li>What About</li>
            <li>Me Enamore</li>
            <li>Galamukani</li>
            <li>Bottle Of Lonelienss</li>
            <li>Rockabye,Particula</li>
            <li>Something Just Like Dis</li>
            <li>Isis</li>
            <li>Hey Dj</li>
            <li>Echame La Culpa</li>
            <li>Sos</li>
            <li>Dancing Queen</li>
            <li>Woterloo</li>
            <li>Mother</li>
            <li>Maj</li>
            <li>Mgły</li>
            <li>Jak</li>
            <li>Gloria</li>
            <li>Kim właściwie była ta pani</li>
            <li>Goniąc Kormorany</li>
            <li>Augustowskie Noce</li>
            <li>Kochać Jak To</li>
            <li>Zielone Wzgózza Nad Soliną</li>
            <li>Acropolis Adieu</li>
            <li>Santa Maria</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class="parallax-window" data-parallax="scroll" data-image-src="img/violin.jpg">
    <h1 class="ml-3 mt-3 pl-2 pr-2 parallax-description bg-dark">Audio</h1>
  </div>

  <div id="songs" class="playlist">
    <div class="plyr">
      <audio controls></audio>
      <div class="test">
        <ul class='playlist--list'>
          <li data-id data-audio="audio/kwartet2.ogg">Scott Joplin - Country Club
          </li>
          <li data-id data-audio="audio/kwartet5.ogg">Gershwin - Oh, lady be good!
          </li>
          <li data-id data-audio="audio/kwartet4.ogg">Schubert - Taniec węgierski
          </li>
          <li data-id data-audio="audio/kwartet2.ogg">Mozart - Sonata Da Chiesa KV 67
          </li>
          <li data-id data-audio="audio/giraConMe.mp3">Gira Con Me

          </li>
          <li data-id data-audio="audio/przetanczycCalaNoc.mp3">Przetańczyć Całą Noc

          </li>
          <li data-id data-audio="audio/zTobaChceOgladacSwiat.mp3">Z Tobą chce oglądać świat

          </li>
          <li data-id data-audio="audio/dumkaNaDwaSerca.mp3">Dumka na dwa serca

          </li>
          <li data-id data-audio="audio/Karolinko.mp3">Karolinko

          </li>
          <li data-id data-audio="audio/myHeartWillGoOn.mp3">My heart will go on

          </li>
          <li data-id data-audio="audio/mojaMalaBlondyneczko.mp3">Moja mała blondyneczko

          </li>
          <li data-id data-audio="audio/Perfect.mp3">Perfect

          </li>
          <li data-id data-audio="audio/VoyageVoyage.mp3">Voyage Voyage

          </li>
          <li data-id data-audio="audio/kochanaUwierzMi.mp3">Kochana uwierz mi

          </li>
          <li data-id data-audio="audio/felicita.mp3">Felicita

          </li>
          <li data-id data-audio="audio/dawajNalewaj.mp3">Dawaj Nalewaj

          </li>
          <li data-id data-audio="audio/filmowaMilosc.mp3">Filmowa Miłość

          </li>
          <li data-id data-audio="audio/milionBialychRoz.mp3">Milion białych róż

          </li>
          <li data-id data-audio="audio/bielyjeRozy.mp3">Bielyje Roze

          </li>
          <li data-id data-audio="audio/sharan.mp3">Sharan

          </li>
          <li data-id data-audio="audio/momentOfPeace.mp3">Moment of Peace

          </li>
          <li data-id data-audio="audio/ciSara.mp3">Ci Sara

          </li>
          <li data-id data-audio="audio/tuSoltanoTu.mp3">Tu Soltano Tu

          </li>
          <li data-id data-audio="audio/elBano.mp3">El Bano

          </li>
          <li data-id data-audio="audio/tyTylkoTy.mp3">Ty tylko Ty

          </li>
          <li data-id data-audio="audio/jestesSzalona.mp3">Jesteś Szalona

          </li>
          <li data-id data-audio="audio/Despacito.mp3">Despacito

          </li>
          <li data-id data-audio="audio/Ameno.mp3">Ameno

          </li>
          <li data-id data-audio="audio/Alleluja.mp3">Alleluja

          </li>

        </ul>
      </div>
    </div>

  </div>

  <div style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"><symbol id="plyr-captions-off" viewBox="0 0 18 18"><path d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z" fill-rule="evenodd" fill-opacity=".5"/></symbol><symbol id="plyr-captions-on" viewBox="0 0 18 18"><path d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z" fill-rule="evenodd"/></symbol><symbol id="plyr-enter-fullscreen" viewBox="0 0 18 18"><path d="M10 3h3.6l-4 4L11 8.4l4-4V8h2V1h-7zM7 9.6l-4 4V10H1v7h7v-2H4.4l4-4z"/></symbol><symbol id="plyr-exit-fullscreen" viewBox="0 0 18 18"><path d="M1 12h3.6l-4 4L2 17.4l4-4V17h2v-7H1zM16 .6l-4 4V1h-2v7h7V6h-3.6l4-4z"/></symbol><symbol id="plyr-fast-forward" viewBox="0 0 18 18"><path d="M7.875 7.171L0 1v16l7.875-6.171V17L18 9 7.875 1z"/></symbol><symbol id="plyr-muted" viewBox="0 0 18 18"><path d="M12.4 12.5l2.1-2.1 2.1 2.1 1.4-1.4L15.9 9 18 6.9l-1.4-1.4-2.1 2.1-2.1-2.1L11 6.9 13.1 9 11 11.1zM3.786 6.008H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z"/></symbol><symbol id="plyr-pause" viewBox="0 0 18 18"><path d="M6 1H3c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1zM12 1c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1h-3z"/></symbol><symbol id="plyr-play" viewBox="0 0 18 18"><path d="M15.562 8.1L3.87.225C3.052-.337 2 .225 2 1.125v15.75c0 .9 1.052 1.462 1.87.9L15.563 9.9c.584-.45.584-1.35 0-1.8z"/></symbol><symbol id="plyr-restart" viewBox="0 0 18 18"><path d="M9.7 1.2l.7 6.4 2.1-2.1c1.9 1.9 1.9 5.1 0 7-.9 1-2.2 1.5-3.5 1.5-1.3 0-2.6-.5-3.5-1.5-1.9-1.9-1.9-5.1 0-7 .6-.6 1.4-1.1 2.3-1.3l-.6-1.9C6 2.6 4.9 3.2 4 4.1 1.3 6.8 1.3 11.2 4 14c1.3 1.3 3.1 2 4.9 2 1.9 0 3.6-.7 4.9-2 2.7-2.7 2.7-7.1 0-9.9L16 1.9l-6.3-.7z"/></symbol><symbol id="plyr-rewind" viewBox="0 0 18 18"><path d="M10.125 1L0 9l10.125 8v-6.171L18 17V1l-7.875 6.171z"/></symbol><symbol id="plyr-volume" viewBox="0 0 18 18"><path d="M15.6 3.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4C15.4 5.9 16 7.4 16 9c0 1.6-.6 3.1-1.8 4.3-.4.4-.4 1 0 1.4.2.2.5.3.7.3.3 0 .5-.1.7-.3C17.1 13.2 18 11.2 18 9s-.9-4.2-2.4-5.7z"/><path d="M11.282 5.282a.909.909 0 0 0 0 1.316c.735.735.995 1.458.995 2.402 0 .936-.425 1.917-.995 2.487a.909.909 0 0 0 0 1.316c.145.145.636.262 1.018.156a.725.725 0 0 0 .298-.156C13.773 11.733 14.13 10.16 14.13 9c0-.17-.002-.34-.011-.51-.053-.992-.319-2.005-1.522-3.208a.909.909 0 0 0-1.316 0zM3.786 6.008H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z"/></symbol></svg></div>

  </div>
  </div>

  <section id="contact" class="pb-3 pt-3">
    <div class="container-fluid">
      <h2>Kontakt</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="contact-profile mb-3">
            <img class="contact-photo mr-1" src="img/profilowe/marek_kuznik.jpg">
            <p><b>Manager</b><br> Marek Kuźnik</br>
              tel: +48 729-988-640</br>
              email: kwartet@marco-gianni.pl<br>
              email: biuro@good-group69.pl</p>

          </div>
          <div class="contact-profile mb-3">
            <img class="contact-photo mr-1" src="img/profilowe/mossakowski.jpg">
            <p><b>Multimedia & Reklama</b><br> Kamil Mossakowski</br>
              tel: +48 503-036-096</br>
              email: kamil@good-group69.pl</p>
          </div>
          <div class="contact-profile">
            <img class="contact-photo mr-1" src="img/profilowe/lukasz.jpg">
            <p><b>Aranżacje muzyczne</b><br> Łukasz Hallek
              </br>
          </div>
        </div>


        <div class="col-md-6">

          <form method="post" onsubmit="return Validate();" action="" class="form-horizontal" name="formValidation">
            <fieldset>
              <!-- Form Name -->
              <legend>Formularz</legend>
              <!-- Text input-->
              <div class="form-group">
                <label class="control-label" for="sender">Imię*</label>
                <div class=" ">
                  <input id="sender" name="sender" type="text" placeholder="Twoje imie" class="form-control input-md">
                  <div id="sender_error" class="form-error"></div>
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="control-label" for="email">Email*</label>
                  <input id="email" name="email" type="text" placeholder="Twój email" class="form-control input-md">
                  <div id="email_error" class="form-error"></div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="control-label" for="telefon">Telefon</label>
                  <input id="phone" name="phone" type="text" placeholder="Twój nr telefonu" class="form-control input-md">
                  <div id="error_phone" class="form-error"></div>
              </div>
              <!-- Textarea -->
              <div class="form-group">
                <label class="control-label" for="message">Wiadomość*</label>
                  <textarea class="form-control" id="message" name="message" placeholder="Twoja wiadomość"></textarea>
                  <div id="message_error" class="form-error"></div>
              </div>

              <div class="form-group">
                <input type="submit" value="Wyślij">
                <input type="reset" value="Wyczyść">
              </div>

            </fieldset>
          </form>
              <div>
                <label>* Pola z gwiazdką są wymagane</label>
              </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="p-3">
    <div class="container-fluid">
      <div class="row d-flex align-items-center">
        <div class="col-md-4 col-sm-4 mb-3">
          <div class="text-center text-logo">
            <b>Aranżacje utworów</b><br> tel: +48 729-988-640
          </div>
        </div>
        <div class="col-md-4 col-sm-4 text-center mb-3">
          Współpracujemy z:<br>
          <a target="_blank" href="http://www.restauracjaadria.pl/"><img src="img/adria.png"></a>
        </div>
        <div class="col-md-4 col-sm-4 mb-3">
          <div class="text-center">
            Wykonał:<br>
            <a target="_blank" href="http://good-group69.pl"><img src="img/goodgroup.png"></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">www.marco-gianni.pl</div>
        <div class="col-md-12 text-center">Wszystkie prawa zastrzeżone! Marco Gianni Quartet <span id="footer-year">2018</span></div>
      </div>
    </div>
  </footer>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="tether/dist/js/tether.min.js"></script>
  <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="js/ie10-viewport-bug-workaround.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/jssor.slider.min.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/lazyScroll.js"></script>
  <script src="js/heightMenu.js"></script>
  <script src="js/validation.js"></script>
  <script src="https://cdn.plyr.io/1.6.13/plyr.js"></script>
  <script src="js/plyr.js"></script>
  <script src="https://cdn.plyr.io/3.3.8/plyr.polyfilled.js"></script>

  <script>
    var currentYear = new Date();
    var footerYear = document.getElementById('footer-year');
    footerYear.innerHTML = currentYear.getFullYear();
  </script>

<script src="http://localhost:35729/livereload.js"></script>

</body>

</html>
