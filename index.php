<?php include("includes/header.php"); ?>
<nav class="nav navbar-expand-md bg-info sticky-top">
    <div class="container-fluid p-4 ">
        <div class="row justify-content-between">
            <a class="navbar-brand text-white pl-3 font-weight-bold" href="#">
                <small class="logo" style="font-size: 30px;">Emedev</small>
            </a>
            <button class="navbar-toggler btn btn-sm" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"><i class="fa fa-bars fa-2x text-white"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="nav list-unstyled small">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#feature">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#project">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="nav list-unstyled small-center">
                    <li class="nav-item">
                        <a class="nav-link" href="https://web.facebook.com/emeti.etim"><i
                                class="fab fa-facebook text-white"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/emeti-etim-74a299123/"><i
                                class="fab fa-linkedin text-white"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/emetisuccess"><i
                                class="fab fa-twitter text-white border-info"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</nav>
<div class="bg-img d-flex flex-container flex-row">
    <div class="container container-flex">
        <div class="flex-item text-center mb-4">
            <h3 class="text-white display-4">Emeti Etim</h3>
            <small class="text-white display-4 ">Backend Developer</small>
        </div>
        <!-- <div class="flex-item text-center">
            <a href="#" class="btn btn-lg text-white mx-1 my-1  btn-outline-info px-4">Portfolio</a>
            <a href="#" class="btn btn-lg text-light mx-1 my-1 btn-outline-info px-4">Skills</a>
        </div> -->
    </div>
</div>
<div class="container my-4">
    <div class="feature">
        <div class="header my-5 text-center">
            <h4>Features</h4>
        </div>
        <div class="row mb-5" id="feature">
            <div class="col-md-3 text-center ">
                <i class="fa fa-dashboard fa-2x text-info"></i>
                <h3>Fast</h3>
                <p>Building a blazing fast website is always my priority.</p>
            </div>
            <div class="col-md-3 text-center">
                <i class="fa fa-mobile fa-2x text-info"></i>
                <h3>Security</h3>
                <p>Building a well secured site has always being my goal.</p>
            </div>
            <div class="col-md-3 text-center">
                <i class="fa fa-lightbulb-o fa-2x text-info"></i>
                <h3>Intuitive</h3>
                <p>User friendly interface</p>
            </div>
            <div class="col-md-3 text-center">
                <i class="fa fa-rocket fa-2x text-info"></i>
                <h3>Maintainability</h3>
                <p>My website are always easy to maintain</p>
            </div>
        </div>
    </div>
    <hr class="mb-4">
    <div class="about" id="about">
        <div class="header my-2">
            <h4 class="text-center">About me</h4>
        </div>
        <div class="row mt-5">
            <div class="col-md-5 text-center ">
                <img src="image/IMG_20211216_080339_656.jpg" alt="image" class="bk-img img-fluid">
                <h4 class="my-2">Who's this Guy?</h4>
                <p>
                    Hi, i'm Emeti Etim, a backend developer from Akwa Ibom, Nigeria. I have passion for building a well
                    secured web base applications, CMS systems and a dynamic UI.
                </p>

                <div class="text-center d-flex justify-content-center">
                    <a class="nav-link" href="https://web.facebook.com/emeti.etim"><i
                            class="fab fa-facebook text-info"></i></a>
                    <a class="nav-link" href="https://www.linkedin.com/in/emeti-etim-74a299123/"><i
                            class="fab fa-linkedin text-info"></i></a>
                    <a class="nav-link" href="https://twitter.com/emetisuccess"><i
                            class="fab fa-twitter text-info"></i></a>
                </div>
                <div class="mb-4 text-style ">
                    <a href="image/etimemeti.pdf" class="text-info">My CV</a>
                </div>

            </div>
            <div class="col-md-7 text-center">
                <h4 class="mb-4">Proficiency (<?php echo (date("Y") - 2020) . "yrs+" ?>)</h4>
                <div class="row justify-content-between">
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-html5 text-danger fa-3x skill"></i>
                        <p>HTML5</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-css3 text-info fa-3x skill"></i>
                        <p>CSS3</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-bootstrap text-info fa-3x skill"></i>
                        <p>Bootstrap</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fa fa-database text-success fa-3x skill"></i>
                        <p>MySqli</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-php text-secondary fa-3x skill"></i>
                        <p>PHP</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-js text-warning fa-3x skill"></i>
                        <p>JavaScript</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-js text-dark fa-3x skill"></i>
                        <p>Ajax</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-js text-danger fa-3x skill"></i>
                        <p>jQuery</p>
                    </div>
                    <!-- <div class="col-md-4 mb-3">
                        <i class="fab fa-laravel text-danger fa-3x"></i>
                        <p>Laravel</p>
                    </div> -->
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-github fa-3x skill" aria-hidden="true"></i>
                        <p>Git</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="projects" id="project">
        <div class="header my-5">
            <h4 class="text-center">Projects</h4>
            <hr>
        </div>
        <div class=" mb-5">
            <div>
                <h1 class="text-center">Still Working On..</h1>
            </div>
            <!-- <div class="col-md-4 text-center ">
                <img src="image/mycode.png" class="m-1 img-fluid" width="300px" height="300px" alt="">
                <p>Building a blazing fast website is always my priority.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="image/mycode.png" class="m-1 img-fluid" width="300px" height="300px" alt="">
                <p>Building a well secured site has always being my goal.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="image/mycode.png" class="m-1 img-fluid" width="300px" height="300px" alt="">
                <p>User friendly interface</p>
            </div> -->
        </div>
        <hr>
    </div>
    <div class="contact mt-5" id="contact">
        <?php include("contact.php"); ?>
    </div>
</div>
<?php include("includes/footer.php"); ?>