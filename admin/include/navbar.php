<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1); ?>

<ul class="nav nav-underline justify-content-center navbar bg-dark" style="height: 80px;">
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