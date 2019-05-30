<!DOCTYPE HTML>
<html>

<head>
    <title>Sonu Bamniya | Home</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Software developer, JavaScript Lover, Angular, React, NodeJS Expert." />
    <!-- webfonts -->
    <link href='//fonts.googleapis.com/css?family=Asap:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <!-- webfonts -->
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
        });
    });
    </script>
    <!---- start-smoth-scrolling---->
</head>

<body>
    <!-- container -->
    <!-- header -->
    <div id="home" class="header">
        <div class="container">
            <!-- top-hedader -->
            <div class="top-header">
                <!-- /logo -->
                <!--top-nav---->
                <div class="top-nav">
                    <div class="navigation">
                        <div class="logo">
                            <h1><a href="/"><span>Sonu</span>Bamniya</a></h1>
                        </div>
                        <div class="navigation-right">
                            <span class="menu"><img src="images/menu.png" alt=" " /></span>
                            <nav class="link-effect-3" id="link-effect-3">
                                <ul class="nav1 nav nav-wil">
                                    <li class="active"><a data-hover="Home" href="index.html">Home</a></li>
                                    <li><a class="scroll" data-hover="About" href="#about">About</a></li>
                                    <li><a class="scroll" data-hover="Services" href="#services">Services</a></li>
                                    <li><a class="scroll" data-hover="Experience" href="#work">Experience</a></li>
                                    <li><a class="scroll" data-hover="Portfolio" href="#port">Portfolio</a></li>
                                    <!-- <li><a class="scroll" data-hover="Blog" href="#blogs">Blog</a></li> -->
                                    <li><a class="scroll" data-hover="Contact" href="#contact">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- script-for-menu -->
                            <script>
                            $("span.menu").click(function() {
                                $("ul.nav1").slideToggle(300, function() {
                                    // Animation complete.
                                });
                            });
                            </script>
                            <!-- /script-for-menu -->
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /top-hedader -->
                </div>
                <div class="banner-info">
                    <div class="col-md-7 header-right">
                        <h1>Hi !</h1>
                        <h6>Software Engineer</h6>
                        <ul class="address">
                            <li>
                                <ul class="address-text">
                                    <li><b>NAME</b></li>
                                    <li>I'm Sonu Bamniya</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>D.O.B</b></li>
                                    <li>23-08-1994</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>PHONE </b></li>
                                    <li><a href="tel:+918878220874">+91-88782-20874</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>ADDRESS </b></li>
                                    <li>Indore, India.</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>E-MAIL </b></li>
                                    <li><a href="mailto:sbamniya23@gmail.com"> sbamniya23@gmail.com</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 header-left">
                        <img src="images/img1.jpg" alt="">
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about -->
    <div id="about" class="about">
        <div class="col-md-12 about-left">
            <div id="owl-demo1" class="">
                <div class="item">
                    <div class="about-left-grid">
                        <h2>Hi! I'm <span>Rob Lee</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis.</p>
                        <ul>
                            <li><a class="a-btn-a scroll" href="#port">My Work</a></li>
                            <li><a class="a-btn-h scroll" href="#contact">Hire Me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- /about -->
    <!-- services -->
    <div id="services" class="services">
        <div class="container">
            <div class="service-head one text-center ">
                <h4>WHAT I DO</h4>
                <h3>MY <span>SKILLS</span></h3>
                <span class="border two"></span>
            </div>
            <!-- services-grids -->
            <div class="wthree_about_right_grids w3l-agile">
                <div class="col-md-6 wthree_about_right_grid">
                    <div class="col-xs-4 wthree_about_right_grid_left">
                        <div class="hvr-rectangle-in">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_about_right_grid_right">
                        <h4>Frontend (JavaScript)</h4>
                        <p>Vast experiance in JS and its frameworks such as AngularJS, Angular 2+ and VueJS. Extensive knowledge of ReactJS, Redux, TypeScript, jQuery.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 wthree_about_right_grid">
                    <div class="col-xs-4 wthree_about_right_grid_left">
                        <div class="hvr-rectangle-in">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_about_right_grid_right">
                        <h4>Backend (PHP)</h4>
                        <p>Having experiance of 4 years in PHP worked with various framework such as CodeIgniter, Laravel, YII2, and CakePHP.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 wthree_about_right_grid">
                    <div class="col-xs-4 wthree_about_right_grid_left">
                        <div class="hvr-rectangle-in">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_about_right_grid_right">
                        <h4>Backend (NodeJS)</h4>
                        <p>Exntensive working experiance in NodeJS with ExpressJS, Loopback, Socket.IO, Restify and HapiJS.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 wthree_about_right_grid">
                    <div class="col-xs-4 wthree_about_right_grid_left">
                        <div class="hvr-rectangle-in">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_about_right_grid_right">
                        <h4>Mobile Developement</h4>
                        <p>Experiance in working with hybrid application with Ionic 1.x and React-Native. Learner in Flutter.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 wthree_about_right_grid">
                    <div class="col-xs-4 wthree_about_right_grid_left">
                        <div class="hvr-rectangle-in">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_about_right_grid_right">
                        <h4>Database</h4>
                        <p>Working experiance of SQL and NoSQL databases such as MySQL, MSSQL, MongoDB, DynamoDB and Parse-Server.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 wthree_about_right_grid">
                    <div class="col-xs-4 wthree_about_right_grid_left">
                        <div class="hvr-rectangle-in">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_about_right_grid_right">
                        <h4>Design</h4>
                        <p>Experianced in working with Bootstrap 2, Bootstrap 3 and Bootstrap, 4 along with Materialize CSS, MaterialUI, MDBoostrap. Also, working experiance with ng-bootstrap, react-bootstrap, reactstrap, mdbreact. Can write media queries for resposiveness.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- services-grids -->
        </div>
    </div>
    <!-- services -->
    <!--work-experience-->
    <div id="work" class="work">
        <div class="container">
            <div class="service-head text-center">
                <h4>WHAT I DID</h4>
                <h3>MY <span>EXPERIENCE</span></h3>
                <span class="border one"></span>
            </div>
            <div class="time-main w3l-agile">
                <div class="col-md-6 year-info">
                    <ul class="year">
                        <li>Oct, 2017 - Present</li>
                        <li>July, 2015 - Oct, 2017</li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <ul class="col-md-6 timeline">
                    <li>
                        <div class="timeline-badge info"><i class="glyphicon glyphicon-briefcase"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Chapter247 Infotech</h4>
                            </div>
                            <div class="timeline-body">
                                <p>Working as a Sr. Software Engineer, currently handling team of 10+ developers in MEAN and MERN.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge primary"><i class="glyphicon glyphicon-briefcase"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">Freelancer</h4>
                            </div>
                            <div class="timeline-body">
                                <p>Worked as a freelancer for more than 2 years, and got to work with PHP, NodeJS and AngularJS.</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//work-experience-->
    <!-- portfolio -->
    <div class="portfolio" id="port">
        <div class="service-head text-center">
            <h4>MY WORKS</h4>
            <h3>MY <span>PORTFOLIO</span></h3>
            <span class="border"></span>
        </div>
        <div class="portfolio-grids">
            <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
            <script type="text/javascript">
            $(document).ready(function() {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true // 100% fit in a container
                });
            });
            </script>
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>ALL</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>JavaScript</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>PHP</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Mobile</span></li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            <div class="col-md-3 team-gd ">
                                <a href="#portfolioModal1" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic4.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 team-gd ">
                                <a href="#portfolioModal3" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic5.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 team-gd ">
                                <a href="#portfolioModal2" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic9.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 team-gd ">
                                <a href="#portfolioModal4" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic6.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 team-gd yes_marg ">
                                <a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic10.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 team-gd yes_marg ">
                                <a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic11.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 team-gd yes_marg ">
                                <a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic13.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 team-gd yes_marg ">
                                <a href="#portfolioModal8" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic14.jpg" alt="">
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                            <div class="col-md-3 team-gd ">
                                <div class="thumb">
                                    <a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic10.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 team-gd  ">
                                <div class="thumb">
                                    <a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic11.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 team-gd ">
                                <a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic13.jpg" alt="">
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                            <div class="col-md-3 team-gd ">
                                <a href="#portfolioModal2" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic9.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 team-gd ">
                                <a href="#portfolioModal4" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic6.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 team-gd">
                                <a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic10.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 team-gd">
                                <a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic11.jpg" alt="">
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
                            <div class="col-md-3 team-gd ">
                                <a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic10.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 team-gd">
                                <a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic11.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 team-gd ">
                                <a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic13.jpg" alt="">
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //portfolio -->
    <!-- top-grids -->
    <!-- <div class="blog" id="blogs">
        <div class="container">
            <div class="service-head text-center">
                <h4>BLOGS</h4>
                <h3>MY <span>BLOGS</span></h3>
                <span class="border one"></span>
            </div>
            <div class="news-grid w3l-agile">
                <div class="col-md-6 news-img">
                    <a href="#" data-toggle="modal" data-target="#myModal1"> <img src="images/b1.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="col-md-6 news-text">
                    <h3> <a href="#" data-toggle="modal" data-target="#myModal1">HERE GOES AN AWESOME BLOG TITLE</a></h3>
                    <ul class="news">
                        <li><i class="glyphicon glyphicon-user"></i> <a href="#">Admin</a></li>
                        <li><i class="glyphicon glyphicon-comment"></i> <a href="#">2 Comments</a></li>
                        <li><i class="glyphicon glyphicon-heart"></i> <a href="#">50 Likes</a></li>
                        <li><i class="glyphicon glyphicon-tags"></i> <a href="#">3 Tags</a></li>
                    </ul>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                    <a href="#" data-toggle="modal" data-target="#myModal1" class="read hvr-shutter-in-horizontal">Read More</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="news-grid">
                <div class="col-md-6 news-text two">
                    <h3> <a href="#" data-toggle="modal" data-target="#myModal1">HERE GOES AN AWESOME BLOG TITLE</a></h3>
                    <ul class="news">
                        <li><i class="glyphicon glyphicon-user"></i> <a href="#">Admin</a></li>
                        <li><i class="glyphicon glyphicon-comment"></i> <a href="#">2 Comments</a></li>
                        <li><i class="glyphicon glyphicon-heart"></i> <a href="#">50 Likes</a></li>
                        <li><i class="glyphicon glyphicon-tags"></i> <a href="#">3 Tags</a></li>
                    </ul>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                    <a href="#" data-toggle="modal" data-target="#myModal1" class="read hvr-shutter-in-horizontal">Read More</a>
                </div>
                <div class="col-md-6 news-img two">
                    <a href="#" data-toggle="modal" data-target="#myModal1"> <img src="images/b2.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="news-grid">
                <div class="col-md-6 news-img">
                    <a href="#" data-toggle="modal" data-target="#myModal1"> <img src="images/b3.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="col-md-6 news-text">
                    <h3> <a href="#" data-toggle="modal" data-target="#myModal1">HERE GOES AN AWESOME BLOG TITLE</a></h3>
                    <ul class="news">
                        <li><i class="glyphicon glyphicon-user"></i> <a href="#">Admin</a></li>
                        <li><i class="glyphicon glyphicon-comment"></i> <a href="#">2 Comments</a></li>
                        <li><i class="glyphicon glyphicon-heart"></i> <a href="#">50 Likes</a></li>
                        <li><i class="glyphicon glyphicon-tags"></i> <a href="#">3 Tags</a></li>
                    </ul>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                    <a href="#" data-toggle="modal" data-target="#myModal1" class="read hvr-shutter-in-horizontal">Read More</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div> -->
    <!-- top-grids -->
    <!-- /blog-pop-->
    <div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog about" role="document">
            <div class="modal-content about">
                <div class="modal-header">
                    <button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body about">
                    <div class="about">
                        <div class="about-inner">
                            <img src="images/b3.jpg" alt="about" />
                            <h4 class="tittle">A Fews words about us</h4>
                            <p>Lorem ipsum dolor sit amet Integer gravida,Lorem ipsum dolor sit amet Integer gravida velit,Ming sits in the corner the whole day. She's into crochet. quis dolor tristiqumsan.Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. velit quis dolor tristiqumsan.</p>
                            <p>Lorem ipsum dolor sit amet. Integer gravida velit quis dolor tristiqumsan.anteposuerit litterarum formas humanitatis per seacula amet Integer gravida velit. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog-pop-->
    <!-- /header -->
    <div class="footer" id="contact">
        <div class="container">
            <div class="service-head one text-center">
                <h4>CONTACT ME</h4>
                <h3>GET <span>IN TOUCH WITH ME</span></h3>
                <span class="border two"></span>
            </div>
            <div class="mail_us">
                <div class="col-md-6 mail_left">
                    <div class="contact-grid1-left">
                        <div class="contact-grid1-left1">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            <h4>Contact By Email</h4>
                            <ul>
                                <li>Mail1: <a href="mailto:sbamniya23@gmail.com">sbamniya23@gmail.com</a></li>
                                <li>Mail2: <a href="mailto:sonu_bamniya@yahoo.in">sonu_bamniya@yahoo.in</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-grid1-left">
                        <div class="contact-grid1-left1">
                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            <h4>Contact By Phone</h4>
                            <ul>
                                <li>Phone: <a href="tel:+918878220874">+91-88782-20874</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-grid1-left">
                        <div class="contact-grid1-left1">
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                            <h4>Looking For Address</h4>
                            <ul>
                                <li>Address: Indore, Madhya Pradesh</li>
                                <li>India.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 mail_right">
                    <form action="#" method="post">
                        <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                        <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <input type="text" name="Mobile number" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
                        <textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="copy_right text-center">
                <ul class="two list-inline">
                    <li><a target="_blank" class="text-white" href="https://facebook.com/s.s.bamniya">FB </a></li>
                    <li><a target="_blank" class="text-white" href="https://in.linkedin.com/in/sonu-bamniya-b0030b100" class="in">LinkedIn</a></li>
                    <li><a target="_blank"  class="text-white" href="https://github.com/sbamniya" class="github"> Github</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- /container -->
    <div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content port-modal">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <div class="modal-body">
                            <h3>Image-Title</h3>
                            <img src="images/pic4.jpg" class="img-responsive img-centered" alt="">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content port-modal">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <div class="modal-body">
                            <h3>Image-Title</h3>
                            <img src="images/pic9.jpg" class="img-responsive img-centered" alt="">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content port-modal">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <div class="modal-body">
                            <h3>Image-Title</h3>
                            <img src="images/pic5.jpg" class="img-responsive img-centered" alt="">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content port-modal">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <div class="modal-body">
                            <h3>Image-Title</h3>
                            <img src="images/pic6.jpg" class="img-responsive img-centered" alt="">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content port-modal">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <div class="modal-body">
                            <h3>Image-Title</h3>
                            <img src="images/pic10.jpg" class="img-responsive img-centered" alt="">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content port-modal">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <div class="modal-body">
                            <h3>Image-Title</h3>
                            <img src="images/pic11.jpg" class="img-responsive img-centered" alt="">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content port-modal">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <div class="modal-body">
                            <h3>Image-Title</h3>
                            <img src="images/pic13.jpg" class="img-responsive img-centered" alt="">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade slideanim" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content port-modal">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <div class="modal-body">
                            <h3>Image-Title</h3>
                            <img src="images/pic14.jpg" class="img-responsive img-centered" alt="">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade slideanim" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content port-modal">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <div class="modal-body">
                            <img src="images/pic1.jpg" class="img-responsive img-centered" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!--start-smooth-scrolling-->
    <script type="text/javascript">
    $(document).ready(function() {
        /*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
    </script>
    <!--end-smooth-scrolling-->
    <!-- //for bootstrap working -->
    <script src="js/bootstrap.js"></script>
</body>

</html>