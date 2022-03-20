<?php include("includes/header.php"); ?>
<nav class="nav navbar-expand-sm bg-info sticky-top">
    <div class="container-fluid p-4 ">
        <div class="row justify-content-between">
            <a class="navbar-brand text-white px-4 font-weight-bold" href="#">EmeDev</a>
            <ul class="nav ">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contact</a>
                </li>
            </ul>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-facebook text-info"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-linkedin text-info"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-twitter text-info border-info"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="bg-img d-flex flex-container flex-row">
    <div class="container container-flex">
        <div class="flex-item text-center mb-4">
            <h3 class="text-white display-4">Emeti Etim</h3>
            <small class="text-white display-4 ">Backend Developer</small>
        </div>
        <div class="flex-item text-center">
            <a href="#" class="btn btn-lg text-white mx-1  btn-outline-info px-4">Portfolio</a>
            <a href="#" class="btn btn-lg text-light mx-1 btn-outline-info px-4">Skills</a>

        </div>
    </div>
</div>

<div class="container my-4">
    <div class="feature">
        <div class="header my-5">
            <h4 class="text-center">Features</h4>
        </div>
        <div class="row mb-5">
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
    <div class="about">
        <div class="header my-2">
            <h4 class="text-center">About me</h4>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 text-center ">
                <img src="image/IMG_20211216_080339_656.jpg" alt="image" class="bk-img img-fluid">
                <h4>about me</h4>
                <p>Building a blazing fast website is always my priority.</p>
            </div>
            <div class="col-md-6 text-center">
                <h4>Proficiency (<?php echo (date("Y") - 2020) . "yrs+" ?>)</h4>
                <div class="row justify-content-between">
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-html5 text-danger fa-3x"></i>
                        <p>HTML5</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-css3 text-info fa-3x"></i>
                        <p>CSS3</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-bootstrap text-info fa-3x"></i>
                        <p>Bootstrap</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fa fa-database text-success fa-3x"></i>
                        <p>MySqli</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-php text-secondary fa-3x"></i>
                        <p>PHP</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-js text-warning fa-3x"></i>
                        <p>JavaScript</p>
                    </div>
                    <!-- <div class="col-md-4 mb-3">
                                <i class="fab fa-laravel text-danger fa-3x"></i>
                                <p>Laravel</p>
                            </div> -->
                    <div class="col-md-4 mb-3">
                        <i class="fab fa-github fa-3x" aria-hidden="true"></i>
                        <p>Github</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="projects">
        <div class="header my-5">
            <h4 class="text-center">Projects</h4>
            <hr>
        </div>
        <div class="row mb-5">
            <div class="col-md-4 text-center ">
                <i class="fa fa-dashboard fa-2x text-info"></i>
                <h3>Fast</h3>
                <p>Building a blazing fast website is always my priority.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fa fa-mobile fa-2x text-info"></i>
                <h3>Security</h3>
                <p>Building a well secured site has always being my goal.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fa fa-lightbulb-o fa-2x text-info"></i>
                <h3>Intuitive</h3>
                <p>User friendly interface</p>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="header mt-4">
            <h4 class="text-center">Contact me</h4>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-body">
                        <form action="sendMail.php" method="post">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Message" id="" cols="30" rows="4"
                                    class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="send" value="Send" class="btn btn-info btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>

<script>

</script>