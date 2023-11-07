<?php include 'include/header.php'; ?>
<body>
    <?php include 'include/navbar.php'; ?>

    <div class="container-fluid pt-5 mt-5 vh-100 " style="background-color:#D9D9D9">
        <div class="row mx-5 h2">Dashboard</div>
        <hr>
        <div class="row mx-5">
            <div class="col-md-3">
                <!-- card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="text-center">
                                <i class='bx bx-calendar-event h1' style="color:#17A2B8;"></i>
                                </div>
                            </div>
                            <div class="col-sm-8 h5">
                                Events<br>
                                <?=$count = 2?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="text-center">
                                <i class='bx bxs-group h1' style="color: #007BFF;"></i>
                                </div>
                            </div>
                            <div class="col-sm-8 h5">
                                Listed Student<br>
                                <?=$count = 2?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="text-center">
                                <i class='bx bx-calendar-event h1' style="color: #28A745;"></i>
                                </div>
                            </div>
                            <div class="col-sm-8 h5">
                                Finished Event<br>
                                <?=$count = 2?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="text-center">
                                <i class='bx bxs-calendar-event h1' style="color: #FFC107;"></i>
                                </div>
                            </div>
                            <div class="col-sm-8 h5">
                                On-Going Events<br>
                                <?=$count = 2?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel -->
        <div class="row mx-5">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner text-center border">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="../img/aclc_logo.png" height="400" width="700" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    </div>

    <!-- fixed footer -->
    <?php include 'include/footer.php'; ?>
</body>

</html>