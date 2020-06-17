<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); header('Content-type: text/html; charset=utf-8');?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PlanetHoster - Votre hébergement est actif!</title>
  <meta name="description" content="PlanetHoster solutions d'hébergement web, que ce soit des hébergements mutualisés, des plans revendeurs, des serveurs dédiés, des serveurs virtuels ou de l'hébergement E-commerce">
  <meta name="author" content="PlanetHoster Inc.">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link rel="icon" href="//www.planethoster.com/favicon.ico" type="image/x-icon" />
<style type="text/css">
   html{
    height: 100%;
  }
  body {
    background: #0080c6 url(https://www.planethoster.com/img/cpanel_configuration/world/background_circle.svg) no-repeat center center;
    background-size: cover;
    color: white;
    text-align: center;
    font-family: 'Lato', sans-serif;
  }
  .container{
    max-width: 1170px;
    margin: 0 auto;
    padding: 0 1em;
  }
a:hover, a:active, a:focus {
  text-decoration: none !important;
}
.planet-logo {
  padding-top: 60px;
}
h6 {
    background-color: #4f4f4f;
    border-radius: 60px;
    display: inline-block;
    padding: 15px 35px;
    margin-bottom: 60px;
}

.numbers {
  background-color: rgba(255,255,255,0.5);
  border-radius: 100%;
  width: 60px;
  height: 60px;
  line-height: 59px;
  font-weight: bold;
  font-size: 2.5em;
  margin: 0 auto;
  margin-bottom: 15px;
  }
#wrapper{
  min-height:100%;
  position:relative;
  }
 .global-circles {
  width: 240px;
  height: 240px;
  color: #4f4f4f;
  margin: 0 auto;
  margin-bottom: 95px;
 }
 .circle1 {
  width: 96%;
  height: 96%;
  background-color: rgba(255,255,255,0.6);
  border-radius: 100%;
 }
  .circle2 {
    width: 90%;
    height: 90%;
    background-color: rgba(255,255,255,0.7);
    border-radius: 100%;
    position: relative;
    left: 50%;
    transform: translate(-50%,-50%);
    top: 50%;
 }
  .circle3 {
    width: 90%;
    height: 90%;
    background-color: rgba(255,255,255,1);
    border-radius: 100%;
    position: relative;
    left: 50%;
    transform: translate(-50%,-50%);
    top: 50%;
 }
.circle3 p {
  padding: 7px 0px 0px;
  font-size: 12px;
}
.circle4 {
   position: relative;
    left: 50%;
    transform: translate(-50%,-50%);
    top: 50%;
}
 .arrow_box {
  position: relative;
  background: #4f4f4f;
  color: white;
  padding: 6px 11px;
  border-radius: 25px;
  font-size: 9px;
  transition: all 500ms;
}
.arrow_box:after {
  bottom: 99%;
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(79, 79, 79, 0);
  border-bottom-color: #4f4f4f;
  border-width: 10px;
  margin-left: -10px;
  transition: all 500ms;
}
 .arrow_box:hover {
  color: #f4f4f4f;
  text-decoration: none;
  background-color: #f9a431;
 }
 .arrow_box:hover:after {
  border-bottom-color: #f9a431;
 }
 #lang-switch {
    position: absolute;
    top: 30px;
    right: 40px;
    font-size: 1.5em;
    font-weight: bold;
    color: white;
 }
 .title-1{
    margin-top: 40px;
 }
 .title-2{
    margin-top: -13px;
    margin-bottom: 30px;
 }
 .media-icons{
  margin: 0px 5px;
 }
 .img-siciale{
  width: 37px;
 }
footer{
  position:absolute;
  bottom: 0;
  width: 100%;
  height: 0.5em;
  padding: 2.5em 0;
  background-color: #4f4f4f;
  overflow: hidden;
  color: white;
  text-align: left;
}

footer a{
  color: white;
  transition: color 500ms;
}
footer a:hover{
  color: #7ba940;
}

footer .container{margin-top: -0.2em;}

footer .section{
  font-size: 14px;
}
footer .section.section-copyright{text-align: center;}
footer .section.section-social{position: relative; top: -9px; text-align: right;}

footer .ph-social-4icons {
  position: relative;
  top: 6px;
  background: url(//cdn.planethoster.com/welcome/footer_reseaux_sociaux.png) no-repeat;
  background-size: 88px 44px;
  display: inline-block;
  width: 22px;
  height: 22px;
  margin-right: 10px;
}

.footer-contact-info-social a{
  display: inline-block;
  width: 8%;
  fill: #dcdcdc!important;
  opacity: .4;
  transition: fill 250ms,transform 500ms,opacity 500ms;
}
h4 {
    font-size: 18px;
}
h3 {
    font-size: 24px;
}
.h6, h6 {
    font-size: 12px;
}

 @media only screen and (max-width: 769px) {
  .planet-logo {
    width: 48%;
    padding-top: 60px;
  }
  #bloc3{
    margin-bottom: 110px;
  }
  body{
    background-position: center top;
    background-attachment: fixed;
  }
  .section-legal, .footer-contact-info-social {
    display: none;
  }
  .mobile-none {
      display: none!important;
  }
}
@media only screen and (max-width: 400px) {
  .planet-logo {
    width: 80%;
    padding-top: 60px;
  }
  #bloc3{
    margin-bottom: 110px;
  }
  body{
    background-position: center top;
    background-attachment: fixed;
  }
  .section-legal, .footer-contact-info-social {
    display: none!important;
  }
  .global-circles {
    margin-bottom: 38px;
  }
  .mobile-none {
      display: none!important;
  }
}
</style>
</head>

<body id="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="https://www.planethoster.com/img/cpanel_configuration/world/logo_ph_worldpanel.svg" alt="" class="planet-logo" width= "30%" />
      </div>
    </div>

    <div class="row">
      <div class="col-12 text-center">
        <h4 class="title-1"></h4>
        <h3 class="domain"></h3>
        <h4 class="title-2"></h4>
        <h6></h6>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-4">
        <h3 class="numbers">1</h3>
        <div class="global-circles" id="bloc1">
          <div class="circle1">
            <div class="circle2">
              <div class="circle3">
                <div class="circle4">
                  <img src="https://www.planethoster.com/img/cpanel_configuration/world/file_icon.svg" width= "52" alt="file icon" />
                  <p>Retrouvez les identifiants de votre hébergement sur votre espace membre</p>
                  <a class="arrow_box" href="https://my.planethoster.com" target="_blank">ESPACE MEMBRE</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <h3 class="numbers">2</h3>
        <div class="global-circles" id="bloc2">
          <div class="circle1">
            <div class="circle2">
              <div class="circle3">
                <div class="circle4">
                  <img src="https://www.planethoster.com/img/cpanel_configuration/world/knowledge_icon.svg" width= "48" alt="knowledge icon" />
                  <p>Pour plus d'informations, consultez la base des connaissances</p>
                  <a class="arrow_box" href="https://docs.planethoster.com/" target="_blank">BASE DE CONNAISSANCES</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <h3 class="numbers">3</h3>
        <div class="global-circles" id="bloc3">
          <div class="circle1">
            <div class="circle2">
              <div class="circle3">
                <div class="circle4">
                  <img src="https://www.planethoster.com/img/cpanel_configuration/world/video_icon.svg" width= "70" alt="video icon" />
                  <p>Consultez notre chaîne youtube pour des tutoriels vidéos</p>
                  <a class="arrow_box" href="https://go.planethoster.net/youtube-support/" target="_blank">VISIONNEZ LES VIDÉOS</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a id="lang-switch" href="#">EN<a>

  <footer>
    <div class="container">
     <div class="row">
      <div class="col-12 col-lg-4 section section-legal mobile-none"><a id="terms" href="https://www.planethoster.com/fr/Termes-Utilisation">Termes d'utilisation</a> | <a id="policy" href="https://www.planethoster.com/fr/Politique-Vie-Privee">Politique et vie privée</a></div>
      <div class="col-xs-12 col-lg-4 section section-copyright">Copyright © <?php echo date("Y"); ?> <span id="copyright">PlanetHoster Inc. Tous Droits Réservés</span></div>
      <div class="col-12 col-lg-4 section section-social mobile-none">
        <div class="footer-contact-info-social">
          <a href="https://www.facebook.com/PlanetHoster" class="media-icons" target="_blank"><img class="img-siciale" src="https://www.planethoster.com/img/logos/social/facebook.svg" alt="facebook icon" /></a>
          <a href="https://twitter.com/planethoster" class="media-icons" target="_blank"><img class="img-siciale" src="https://www.planethoster.com/img/logos/social/twitter.svg" alt="twitter icon" /></a>
          <a href="https://plus.google.com/104430898324979608625/about" class="media-icons" target="_blank"><img class="img-siciale" src="https://www.planethoster.com/img/logos/social/google.svg" alt="google icon" /></a>
          <a href="https://www.linkedin.com/company/planethoster" class="media-icons" target="_blank"><img class="img-siciale" src="https://www.planethoster.com/img/logos/social/linkedin.svg" alt="linkedin icon" /></a>
          <a href="https://www.instagram.com/planethoster/" class="media-icons" target="_blank"><img class="img-siciale" src="https://www.planethoster.com/img/logos/social/instagram.svg" alt="instagram icon" /></a>
        </div>
       </div>
      </div>
    </div>
  </footer>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript">
var new_domaine = "<?php echo $_SERVER['SERVER_NAME'];?>";
var language = {
            fr: {
              title_1: "Votre compte d'hébergement World <br /> <strong>",
              title_2: "<br /> est maintenant actif !",
              domain: new_domaine,
              subtitle: "QUE FAIRE MAINTENANT ? 3 ÉTAPES FACILES :",
              bloc1: {
                text: "Retrouvez les identifiants de votre hébergement sur votre espace membre",
                link: "ESPACE MEMBRE"
              },
              bloc2: {
                text: "Pour plus d’informations, consultez la base des connaissances",
                link: "BASE DE CONNAISSANCES"
              },
              bloc3: {
                text: "Visionnez notre chaîne youtube pour des tutoriels vidéos",
                link: "VISIONNEZ LES VIDÉOS"
              },
              footer: {
                copyright: "PlanetHoster Inc. Tous Droits Réservés",
                terms: "Termes d'utilisation",
                policy: "Politique et vie privée"
              }
            },
            en: {
              title_1: "Your World Hosting Account <br /> <strong>",
              title_2:  "<br /> is now active!",
              domain: new_domaine,
              subtitle: "WHAT NOW ? 3 EASY STEPS :",
              bloc1: {
                text: "You will find your login information in your client area",
                link: "CLIENT AREA"
              },
              bloc2: {
                text: "For more information, please check our knowledge base",
                link: "KNOWLEDGE BASE"
              },
              bloc3: {
                text: "Check our YouTube Channel for How-To Videos",
                link: "VIEW VIDEOS"
              },
              footer: {
                copyright: "PlanetHoster Inc. All Rights Reserved",
                terms: "Terms of Service",
                policy: "Privacy Policy"
              }
            }
          }

$('body').ready(function(){
  var actual_lang = switch_lang('fr');
  set_text(actual_lang);
})

$('#lang-switch').click(function(){
  var actual_lang = switch_lang();
  set_text(actual_lang);
})

function set_text(actual_lang){
  var infos = language[actual_lang];

  $('.title-1').html(infos.title_1);
  $('.domain').html(infos.domain);
  $('.title-2').html(infos.title_2);
  $('h6').html(infos.subtitle);
  $('#bloc1 p').html(infos.bloc1.text);
  $('#bloc1 a').html(infos.bloc1.link);
  $('#bloc2 p').html(infos.bloc2.text);
  $('#bloc2 a').html(infos.bloc2.link);
  $('#bloc3 p').html(infos.bloc3.text);
  $('#bloc3 a').html(infos.bloc3.link);
  $('#copyright').html(infos.footer.copyright);
  $('#terms').html(infos.footer.terms);
  $('#policy').html(infos.footer.policy);
}

function switch_lang(lang){
  if(lang){
    var actual = lang;
  }
  else{
    var actual = $('#lang-switch').text().toLowerCase();
  }
  if(actual === 'fr') {var res = 'en'; var x = 'fr'; } else { var res = 'fr'; var x = 'en';}
  $('#lang-switch').html(res.toUpperCase());
  return x;
}

</script>
</body>
</html>
