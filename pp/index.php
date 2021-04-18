<?php
include './nedmin/connect.php';

// fetch skills
$fetch_skill = $db->prepare('SELECT * FROM skills WHERE skill_id=1');
$fetch_skill->execute();

$fetch_s = $fetch_skill->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <![endif]-->
  <title>Proje </title>

  <!--  external css -->
  <!-- BOOTSTRAP CORE STYLE CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONT AWESOME CSS -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- ANIMATE  CSS -->
  <link href="assets/css/animate.css" rel="stylesheet" />
  <!-- PRETTY PHOTO  CSS -->
  <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
  <!--  STYLE SWITCHER CSS -->
  <link href="assets/css/styleSwitcher.css" rel="stylesheet" />
  <!-- CUSTOM STYLE CSS -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!--PINK STYLE VERSION IS BY DEFAULT, USE ANY ONE STYLESHEET FROM FOUR STYLESHEETS (pink,green,blue and brown) HERE-->
  <link href="assets/css/themes/pink.css" id="mainCSS" rel="stylesheet" />
  <!-- GOOGLE FONTS -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,300" rel="stylesheet" type="text/css" />
</head>

<body>
  <!-- /. END THEME SWITCHER-->

  <div id="home-sec">
    <div class="overlay">
      <div class="container">
        <!-- first page  -->
        <div class="row pad-top-bottom move-me">
          <div class="col-lg-8 col-md-8 col-sm-8 text-center">
            <img src="assets/img/smile.jpg" class="main-img img-circle wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" alt="" />
            <h1 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
              İsim Soyisim
            </h1>
            <h2 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">
              WEB DESIGNER
            </h2>
            <a href="#skill-sec" class="btn custom-btn-one btn-lg wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">CV İNDİR</a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 text-center" style="margin-top: 25px">
            <a href="#about-sec" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".1s">
              <i class="fa fa-info icon-round icon-round-active"></i>
              <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
                HAKKIMDA
              </h3>
            </a>
            <a href="#resume-sec" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".3s">
              <i class="fa fa-briefcase icon-round"></i>
              <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                CV
              </h3>
            </a>

            <a href="#hire-sec" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".7s">
              <i class="fa fa-paper-plane-o icon-round"></i>
              <h3 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">
                İLETİŞİM
              </h3>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- HOME SECTION END-->
  <section id="about-sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
          <h1>HAKKIMDA</h1>
          <div class="color-strip"></div>
          <div class="social-icon">
            <a href="#">
              <img src="assets/img/Social/facebook.png" alt="" /></a>
            <a href="#">
              <img src="./assets/img/Social/github.png" alt="" /></a>
            <a href="#">
              <img src="assets/img/Social/twitter.png" alt="" /></a>
            <a href="#">
              <img src="assets/img/Social/telegram.png" alt="" /></a>
            <a href="#">
              <img src="assets/img/Social/discord.png" alt="" /></a>
            <a href="#">
              <img src="assets/img/Social/instagram.png" alt="" /></a>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
            pretium lectus vel justo iaculis blandit. Nulla facilisi. In hac
            habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla pretium lectus vel justo iaculis blandit.
            Nulla facilisi. In hac habitasse platea dictumst. Nulla facilisi.
            In hac habitasse platea dictumst.
          </p>
          <p>
            Nulla facilisi. In hac habitasse platea dictumst. Nulla facilisi.
            In hac habitasse platea dictumst. Nulla pretium lectus vel justo
            iaculis blandit. Nulla facilisi. In hac habitasse platea dictumst.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
            pretium lectus vel justo iaculis blandit. Nulla facilisi. In hac
            habitasse platea dictumst.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT SECTION END-->
  <section id="skill-sec">
    <div class="overlay">
      <div class="container">
        <div class="row pad-top-bottom move-me">
          <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
            <span class="chart" data-percent="<?php echo $fetch_s['first_counter']; ?>">
              <span class="percent"></span>
            </span>
            <h4><?php echo $fetch_s['first_skill']; ?></h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
            <span class="chart" data-percent="<?php echo $fetch_s['second_counter']; ?>">
              <span class="percent"></span>
            </span>
            <h4><?php echo $fetch_s['second_skill']; ?></h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">
            <span class="chart" data-percent="<?php echo $fetch_s['third_counter']; ?>">
              <span class="percent"></span>
            </span>
            <h4><?php echo $fetch_s['third_skill']; ?></h4>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">
            <span class="chart" data-percent="<?php echo $fetch_s['forth_counter']; ?>">
              <span class="percent"></span>
            </span>
            <h4><?php echo $fetch_s['forth_skill']; ?></h4>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 wow bounceIn animated" data-wow-duration="1s" data-wow-delay="1s">
            <h1><?php echo $fetch_s['title']; ?></h1>
            <p>
              <?php echo $fetch_s['content']; ?>
            </p>
            <a href="#resume-sec" class="btn btn-style-two btn-lg">CV İNDİR</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SKILL SECTION END-->
  <section id="resume-sec">
    <div class="container">
      <div class="row move-me">
        <div class="col-lg-12 col-md-12 col-sm-12 wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
          <div class="board">
            <div class="board-inner">
              <ul class="nav nav-tabs" id="myTab">
                <li class="active">
                  <a href="#home" data-toggle="tab" title="PERSONAL DETAILS">
                    <span class="round-tabs one">
                      <i class="fa fa-home"></i>
                    </span>
                  </a>
                </li>

                <li>
                  <a href="#profile" data-toggle="tab" title="EDUCATIONAL PROFILE">
                    <span class="round-tabs two">
                      <i class="fa fa-briefcase"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#exp" data-toggle="tab" title="EXPERIENCE DETAILS">
                    <span class="round-tabs three">
                      <i class="fa fa-recycle"></i> </span></a>
                </li>

                <li>
                  <a href="#location" data-toggle="tab" title="PRESENT LOCATION">
                    <span class="round-tabs four">
                      <i class="fa fa-paper-plane-o"></i>
                    </span>
                  </a>
                </li>

                <li>
                  <a href="#contact" data-toggle="tab" title="CONTACT ME">
                    <span class="round-tabs five">
                      <i class="fa fa-comments-o"></i> </span></a>
                </li>
              </ul>
            </div>

            <div class="tab-content">
              <div class="tab-pane fade in active" id="home">
                <h4 class="head text-center">KİŞİSEL BİLGİLER</h4>
                <p class="narrow text-center">
                  <span> <i>İSİM : </i>İSİM SOYİSİM </span>
                  <span> <i>YAŞ :</i>25 YEARS </span>
                  <span> <i>TECRÜBE :</i> 5 YIL </span>
                </p>
              </div>
              <div class="tab-pane fade" id="profile">
                <h4 class="head text-center">EĞİTİM BİLGİLERİ</h4>
                <p class="narrow text-center">
                  <span> <i>LİSANS : </i> Computer Science </span>
                  <span>
                    <i>YETENEKLER :</i>HTML, CSS , PHP, JQUERY, etc.
                  </span>
                </p>
              </div>
              <div class="tab-pane fade" id="exp">
                <h4 class="head text-center">İŞ TECRÜBESİ</h4>
                <p class="narrow text-center">
                  <span>
                    <i>MICROSOFT : </i>2013 - TILL DATE as SR. UI DESIGNER
                  </span>
                  <span>
                    <i>MAYA ANIMATIONS : </i>2010 - 2013 as UI DESIGNER
                  </span>
                  <span>
                    <i>JALSON CREATIVES :</i>2009 - 2010 as DEVELOPER.
                  </span>
                </p>
              </div>
              <div class="tab-pane fade" id="location">
                <h4 class="head text-center">ADRES</h4>
                <p class="narrow text-center">
                  <span> <i>YERLEŞKE </i>243/90 - NEW YORK STREET </span>
                  <span> <i>ŞEHİR </i>UNITED STATES OF AMERICA </span>
                </p>
              </div>
              <div class="tab-pane fade" id="contact">
                <h4 class="head text-center">İLETİŞİM</h4>

                <p class="narrow text-center">
                  <span> <i>EPOSTA </i>hello@yourdomain.com </span>
                  <span> <i>GSM </i>+90-908-678-654 </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PORTFOLIO SECTION END-->
  <section id="hire-sec">
    <div class="overlay">
      <div class="container">
        <div class="row text-center pad-top-bottom wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            <h1>İLETİŞİM</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit onec
              molestie non sem vel condimentum. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
            </p>
            <br />
          </div>
        </div>
        <div class="row move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" required="required" placeholder="Your Name" />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" required="required" placeholder="Your Email" />
              </div>
              <div class="form-group">
                <textarea name="message" id="message" required="required" class="form-control" style="min-height: 100px" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <a href="#hire-sec" class="btn custom-btn-one">CONTACT ME</a>
              </div>
            </form>
          </div>
          <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1" id="footer-sec">
            <h3><strong>ADRES </strong></h3>
            <p>
              Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
            </p>

            <p>
              &copy; 2014 All Rights Reserved
              <br />
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- HIRE SECTION END-->
  <div class="move-me">
    <a href="#home-sec" class="scrollup"><i class="fa fa-chevron-up"></i></a>
  </div>

  <!-- SCROLL TO TOP SECTION END-->
  <!--  JQUERY CORE SCRIPTS -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!--  BOOTSTRAP SCRIPTS -->
  <script src="assets/js/bootstrap.js"></script>
  <!--  SCROLL SCRIPTS -->
  <script src="assets/js/jquery.easing.min.js"></script>
  <!--  WOW ANIMATION SCRIPTS -->
  <script src="assets/js/wow.min.js"></script>
  <!-- EASY PIE CHART SCRIPTS -->
  <script src="assets/js/jquery.easypiechart.min.js"></script>
  <!-- PRETTY PHOTO SCRIPTS -->
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <!--  STYLE SWITCHER SCRIPTS -->
  <script src="assets/js/styleSwitcher.js"></script>
  <!--  CUSTOM SCRIPTS -->
  <script src="assets/js/custom.js"></script>
</body>

</html>