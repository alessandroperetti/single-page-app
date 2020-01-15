<html>
<head>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <meta name="theme-color" content="#ee4d4d"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="js/pjs.js"></script>
    <script src="vendor/onemarshall/contao-aos/src/Resources/public/dist/aos.min.js"></script>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pstyle.css">
    <link rel="stylesheet" href="css/timeline.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="vendor/fortawesome/font-awesome/css/all.css">
    <link rel="stylesheet" href="vendor/onemarshall/contao-aos/src/Resources/public/dist/aos.min.css">
</head>
<body>
<script>
    AOS.init();
</script>
<?php require "php\config_environment.php"; ?>
<div id="sticky-sidebar">
    <div class="block px-3"><a class="white" href="#home">Home</a></div>
    <div class="block px-3"><a class="white" href="#work">Work</a></div>
    <div class="block px-3"><a class="white" href="#education">Education</a></div>
    <div class="block px-3"><a class="white" href="#publications">Publications</a></div>
    <div class="block px-3"><a class="white" href="#contact">Contact</a></div>

    <p class><i id="open" class="px-3 py-2 block white fas fa-arrow-up" style="font-size: 18px"></i></p>
</div>
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center" style="justify-content: center">
            <img id="image-profile"
                 src="img/img.jpg"
                 alt="image-profile"
                 width="120" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        </div>
        <div class="media d-flex align-items-center">
            <div class="media-body" style="text-align: center">
                <h4 class="mx-3">John Doe</h4>
                <h7 class="font-weight-light text-muted mb-0">Full Stack Developer</h7>
            </div>
        </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Menu</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a id="home-link" href="#home" class="nav-link text-dark font-italic active">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a id="work-link" href="#work" class="nav-link text-dark font-italic">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                Work Experience
            </a>
        </li>
        <li class="nav-item">
            <a id="education-link" href="#education" class="nav-link text-dark font-italic">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Education
            </a>
        </li>
        <li class="nav-item">
            <a id="contact-link" href="#publications" class="nav-link text-dark font-italic">
                <i class="fas fa-flag mr-3 text-primary fa-fw"></i>
                Publications
            </a>
        </li>
        <li class="nav-item">
            <a id="contact-link" href="#contact" class="nav-link text-dark font-italic">
                <i class="fas fa-at mr-3 text-primary fa-fw"></i>
                Contact
            </a>
        </li>
    </ul>
</div>
<div class="container-fluid">
    <section id="home" class="home-content">
        <img id="image-profile-page" class="mr-3 rounded-circle img-thumbnail shadow-sm"
             src="img/img.jpg"
             alt="image-profile"
             width="120">
        <div class="title">
            <div class="inner-text my-5 py-5">
                <h1 id="title" class="title text_1"> I am a Full Stack Developer.</h1>
                <h2> John Doe </h2>
                <p>
                    <a class="btn" href="cv/CV.pdf" target="_blank">Download Curriculum
                        Vitae</a>
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div id="social-container"></div>
            <div class="move"></div>
        </div>
    </section>
    <div
            data-aos="fade-up"
            data-aos-offset="0"
            data-aos-delay="50"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
    >
        <section id="work" class="page-content">
            <div class="title">
                <h2>About Me</h2>
            </div>
            I am a full stack web developer.
        </section>
    </div>
    <div
            data-aos="fade-down"
            data-aos-offset="0"
            data-aos-delay="50"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
    >

        <section id="education" class="page-content">
            <div class="title">
                <h2>My Education</h2>
            </div>
        </section>
    </div>
    <section id="publications" class="page-content">
        <div class="title">
            <h2>Publications</h2>
        </div>
    </section>
    <section id="contact" class="page-content">
        <div class="title">
            <h2>Contact Me</h2>
        </div>
    </section>
</div>
</body>
</html>