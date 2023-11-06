<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1); ?>

<style>
    li {
        font-family: Inter;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img class="mx-3" src="../img/Logo AMA.png" width="40" height="50" class="d-inline-block align-text-top">
    </a>
    <div class="h4 text-white me-5 mx-0" style="font-family: Inter;">QR Code System</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav nav-underline justify-content-center mx-5 px-5">
            <li class="nav-item h4 px-3">
                <a class="nav-link <?= $page == 'dashboard.php' ? 'active text-primary' : 'text-white' ?>" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item h4 px-3">
                <a class="nav-link <?= $page == 'event.php' ? 'active text-primary' : 'text-white' ?>" href="event.php">Event</a>
            </li>
            <li class="nav-item h4 px-3">
                <a class="nav-link text-white" href="student.php">Student</a>
            </li>
            <li class="nav-item h4 px-3">
                <a class="nav-link text-white" href="sco.php">SCO</a>
            </li>
            <li class="nav-item h4 px-3">
                <a class="nav-link text-white" href="report.php">Report</a>
            </li>
        </ul>
        <!-- display block when the screen is large -->
        <div class="float-end d-lg-none">
            <ul class="navbar-nav mx-3">
                <!-- account dropdown -->
                <div class="dropdown">
                <a class="text-white" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Logout Logo
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editUserId<?= $_SESSION['id'] ?>">Account</button></li>
                    <li><button class="dropdown-item">Logout</button></li>
                </ul>
                </div>
                </ul>
        </div>
    </div>
    <!-- display when the screen is large -->
    <div class="float-end d-sm-block d-none">
        <ul class="navbar-nav mx-3">
            <!-- account dropdown -->
            <div class="dropdown">
            <a class="text-white" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Logout Logo
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editUserId<?= $_SESSION['id'] ?>">Account</button></li>
                <li><button class="dropdown-item">Logout</button></li>
            </ul>
            </div>
        </ul>
    </div>
</nav>
