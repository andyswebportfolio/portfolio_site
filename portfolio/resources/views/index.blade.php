<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Andy's Web Portfolio</title>

        <!-- Original Laravel Header -->

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <!-- Header from Freelancer Theme -->    

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
       <link rel="shortcut icon" href="/favicon.ico">
       <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
       <link rel="icon" type="image/png" sizes="196x196" href="/favicon-192.png">
       <link rel="icon" type="image/png" sizes="160x160" href="/favicon-160.png">
       <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png">
       <link rel="icon" type="image/png" sizes="64x64" href="/favicon-64.png">
       <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
       <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
       <link rel="apple-touch-icon" href="/favicon-57.png">
       <link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">
       <link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">
       <link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">
       <link rel="apple-touch-icon" sizes="60x60" href="/favicon-60.png">
       <link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">
       <link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">
       <link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">
       <link rel="apple-touch-icon" sizes="180x180" href="/favicon-180.png">
       <meta name="msapplication-TileColor" content="#FFFFFF">
       <meta name="msapplication-TileImage" content="/favicon-144.png">
       <meta name="msapplication-config" content="/browserconfig.xml">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       
       

    </head>
    <body class="antialiased">

            <!-- Freelancer Theme Body -->
            
            <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Andy's Web Work</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio_link">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about_link">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact_link">Email</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <!-- Photo by Alex Wigan on Unsplash -->
        <header class="masthead text-white text-center bg-custom">
            <div class="container d-flex align-items-center flex-column bg-custom-2">
                <!-- Masthead Avatar Image-->
                <!-- Avatar from https://getavataaars.com/?accessoriesType=Blank&clotheColor=Black&clotheType=Hoodie&eyeType=Default&eyebrowType=UpDown&facialHairType=Blank&hairColor=BrownDark&mouthType=Default&skinColor=Pale&topType=ShortHairShortCurly -->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0 bg-custom-3">Build it the right way.</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0 bg-custom-3">Full Stack Web Design & Development</p>
        </header>

    @include('marquee')

        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div id="about_link" class="navbar_linkplaceholder"></div>
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">I'm worth a look!</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead">Learning from sites like Treehouse, YouTube, Udemy, Codecademy and countless hours of trial and error, my tech capabilites have expanded since I began a voluntary charity position as a local web designer in 2016.</p></div>
                    <div class="col-lg-4 mr-auto"><p class="lead">Since recently handing off my old projects to different web designers and moving on from my old freelance/business AWK Web Design, I'm looking to join a team where I can contribute my skills more effectively to the industry.</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <form method="get" action="assets/Master_CV.pdf">
                        <button type="submit" class="btn btn-xl btn-outline-light">
                            View Full CV (PDF)&nbsp;
                            <i class="fas fa-download mr-2"></i>
                        </button>   
                    </form>
                </div>



            </div>
        </section>

        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
        <div id="portfolio_link" class="navbar_linkplaceholder"></div>
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/brighter.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/kanda.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/osborne.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section-->
        <section class="page-section" id="contact">
        <div id="contact_link" class="navbar_linkplaceholder"></div>
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Call me maybe?</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <p class="custom_text_1">Hey, I just met you, and this is crazy.<br>But if you would like to talk about how we might work together,<br>feel free to get in touch:<br><br>Email: andyswebportfolio@gmail.com<br>Tel: 0793 8765 321</p>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Happily working from &#127968; in
                            <br />
                            England, UK
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-2">Social</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/34ygy6ie/" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/AndrewW16494780" target="_blank"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/andrew-wells-10286b17b/" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About</h4>
                        <p class="lead mb-0">
                            This is a custom theme, adapted from Freelancer, a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">Start Bootstrap</a>.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Made with &#10084; &nbsp; &#127851; &nbsp; &amp; &nbsp; &#9749; &nbsp; in Laravel, Bootstrap, JS &amp; SASS. &copy; Andy Wells @php echo date('Y'); @endphp</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Brighter Hires</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/brighter.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Built to rival large sites like Monster.com and Indeed, this project was hugely ambitious and saw my development skills skyrocket. Plenty of new and exciting technologies here, with a vast array of complex coding being used to make a site that is not only great to look at, but works effectively beneath the surface, too.
<br><br>
Some of it’s brilliant features included a custom search system, built from complex system using Javascript, JSON, PHP and SQL, designed to deliver the user an effortlessly simple discovery experience.
<br><br>
From it’s secure signup feature that sends emails to confirm new account creation, to the integrated custom user panel allowing you to save jobs to your account, the site was built to be the best, most easy to use jobs site on the entire internet at the time.
<br><br>
The job upload feature allows you to say everything you need about your new advertised position, without overstating your needs or writing too much. You can upload a high quality image that can be adjusted to give a professional appearance on your job listing.
<br><br>
With several features that are hidden in the current demo version, such as Stripe API Integration and the ability to update the listing picture after upload, the site had room to grow and a lot of potential before the project was shelved in 2021.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                    <a href="https://www.brighterhires.online">
                                        <button class="btn btn-secondary">
                                            <i class="fa fa-code"></i>
                                            &nbsp;Live Demo
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">K &amp; A Hair &amp; Beauty</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/kanda.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">This fantastic site, created for a brand new hair salon in the town featured custom Photoshop graphics, a simple back end written in PHP and a mobile and tablet friendly layout, as well as the inclusion of extra items like a promotional video. You could view the price list, photographs of the team and descriptions of the different treatments and services that were offerred.<br><br>The entire layout was build from scratch without any frameworks, taking components from sites like W3Schools, customizing them using vanilla Javascript and CSS. It is this unique quality that adds to it’s professional design.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                    <a href="portfolio_sites/kAndA/index.php">
                                        <button class="btn btn-secondary">
                                            <i class="fa fa-code"></i>
                                            &nbsp;Live Demo
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Osborne Plastering</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/osborne.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">With custom CSS spinning stars in it’s logo, a simple but effective layout that was designed from the ground up to suit the client and a quick 6 week development cycle from conception to delivery, this website was a real success when it was first launched in 2018. As a functioning website, it was fully featured with a set of secure email addresses, search engine optimisation and the use of multiple domains pointed to the same address, a standard industry practice.<br><br>The original version included vibrant embedded content from Google Maps, a photo gallery from a company called EmbedSocial, linked directly to the client’s Facebook page, as well as YouTube videos of Danny (the business owner) doing what he does best - plastering a wall.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                    <a href="portfolio_sites/osborneplastering/index.php">
                                        <button class="btn btn-secondary">
                                            <i class="fa fa-code"></i>
                                            &nbsp;Live Demo
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core theme JS-->
        <script src="js/app.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
