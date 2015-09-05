<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script><!--[if lt IE 9]>
    <html class="lt-ie9">
      <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    </html>
    <script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/device.min.js"></script>
  </head>
  <body>
    <div class="page">
      <!--
      ========================================================
      							HEADER
      ========================================================
      
      
      -->
      <header>
        <div class="container">
          <div class="brand">
            <h1 class="brand_name"><a href="./">Impulse</a></h1>
           <p class="brand_slogan">Pvt. Ltd.</p>
          </div><a href="callto:#" class="fa-phone">+977 9816-766-984</a>
          <p>One of our representatives will happily contact you within 24 hours. For urgent needs call us at</p>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li class="active"><a href="./">Home</a>
                </li>
                <li><a href="about.html">About</a>
                  <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Conse ctetur adipisicing</a></li>
                    <li><a href="#">Elit sed do eiusmod
                        <ul>
                          <li><a href="#">Lorem ipsum</a></li>
                          <li><a href="#">Conse adipisicing</a></li>
                          <li><a href="#">Sit amet dolore</a></li>
                        </ul></a></li>
                    <li><a href="#">Incididunt ut labore</a></li>
                    <li><a href="#">Et dolore magna</a></li>
                    <li><a href="#">Ut enim ad minim</a></li>
                  </ul>
                </li>
                <li><a href="services.html">Services</a>
                </li>
                <li><a href="faqs.html">FAQS</a>
                </li>
                <li><a href="contacts.html">Contacts</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
        <section class="camera_container">
          <div id="camera" class="camera_wrap">
            <div data-src="images/page-1_slide01.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">Helping with any of your business needs!</div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="images/page-1_slide02.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">The best strategies to attract new business</div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="images/page-1_slide03.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">A wide range of global business information</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container banner_wr">
            <ul class="banner">
              <li>
                <div class="fa-globe"></div>
                <h3>Software<br/>Development</h3>
                <p align="justify">Impulse accepts web, android and Management Information System (MIS) development projects.</p><a href="#"></a>
              </li>
              <li>
                <div class="fa-lightbulb-o"></div>
                <h3>Support &<br/>Maintenance</h3>
                <p align="justify">Impulse offers continuous support and maintenance services to its clients.</p><a href="#"></a>
              </li>
              <li>
                <div class="fa-cog"></div>
                <h3>Consultancy<br/>Services</h3>
                <p align="justify">Impulse provides complete insights to its clients to achieve optimum utilisation of the technical infrastructures.</p><a href="#"></a>
              </li>
              <li>
                <div class="fa-briefcase"></div>
                <h3>Research &<br/>Development</h3>
                <p align="justify">Impulse relentlessly pursues excellence in its services with aid of continuous research and development.</p><a href="#"></a>
              </li>
            </ul>
          </div>
        </section>
        <section class="well1">
          <div class="container">
            <div class="row">
              <div class="grid_4">
                <h2>About</h2><img src="images/page-1_img01.jpg" alt="">
                <p align="justify">
                Impulse is a recently established IT company with the goals of providing excellent and prompt services. At present, Impulse concentrates on Web, Android and Management Information System (MIS) products development.
                Impulse is committed to provide support and maintenance services in the future. Impulse aims at providing consultancy services, as it grows.
                </p><a href="#" class="btn">Read more</a>
              </div>
              <div class="grid_4">
                <h2>News & Events</h2>
                
                <p> What is Impulse doing & When? </p>
                <ul class="marked-list">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $myDB = "impulse";
                try {
                	$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
                	// set the PDO error mode to exeception
                	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                	//echo "Connected successfully";
                	$stmt = $conn->prepare("SELECT text FROM newsandevents");
                	$stmt->execute();
                	//
                	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                	//print_r($result);
                	foreach ($result as $text){
                		foreach ($text as $msg) {
                			echo "<li><a href=\"#\">".$msg."</a></li>";
                		}
                	}
                }
                catch (PDOExeception $e) {
                	echo "Connection failed: " . $e->getMessage();
                }
                ?>
                </ul><a href="#" class="btn">Read more</a>
              </div>
              <div class="grid_4">
                <div class="info-box">
                  <h2 class="fa-comment">Help center</h2>
                  <hr>
                  <h3>Ask professionals:</h3>
                  <dl>
                    <dt>Monday - Friday:</dt>
                    <dd>8am-7pm</dd>
                  </dl>
                  <dl>
                    <dt>Saturday:</dt>
                    <dd>8am-5pm</dd>
                  </dl>
                  <dl>
                    <dt>Sunday:</dt>
                    <dd>1pm-5pm</dd>
                  </dl>
                  <hr>
                  <h3>24/7 Online Support:</h3>
                  <dl>
                    <dt>800-2345-6789</dt>
                  </dl>
                </div>
                <div class="owl-carousel">
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="images/page-1_img02.jpg" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                        </p>
                        <cite><a href="#">Incididunt ut labor</a></cite>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="images/page-1_img03.jpg" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                        </p>
                        <cite><a href="#">Incididunt ut labor</a></cite>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="images/page-1_img04.jpg" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                        </p>
                        <cite><a href="#">Incididunt ut labor</a></cite>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="images/page-1_img05.jpg" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                        </p>
                        <cite><a href="#">Incididunt ut labor</a></cite>
                      </div>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      <footer>
        <section class="well3">
          <div class="container">
            <ul class="row contact-list">
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address>4578 Marmora Road,Glasgow<br/> D04 89GR</address>
                  </div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="mailto:#">info@demolink.org</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-phone"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">800-2345-6789</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-fax"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">800-2345-6790</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-facebook"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on facebook</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-twitter"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on Twitter</a></div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="copyright">Impulse PL © <span id="copyright-year"></span>&nbsp;&nbsp;<a href="index-5.html">Privacy Policy</a>
            </div>
          </div>
        </section>
      </footer>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>