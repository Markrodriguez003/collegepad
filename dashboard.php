<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollegePad - Note taker </title>
    <link rel="stylesheet" type="text/css" href="includes/components/style.css" />
    <link rel="stylesheet" type="text/css" href="includes/lib/bootstrap/css/bootstrap.css" media="screen" />
    <link rel="icon" type="image/x-icon" href="/includes//site.ico">
    <script src="includes/lib/bootstrap/js/bootstrap.bundle.min.js"> </script>

</head>

<body class="siteBackground">

    <!-- HEADER BARD (FOOTER) -->
    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-primary box-shadow border-top border-primary-subtle border-5 mt-5">
        <div class="container-fluid">
            <a class="navbar-brand mr-4" href="#"><img src="includes/assets//logo.png" style="width:34px; margin-right:6px; margin-bottom:4px" />CollegePad</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/collegepad">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://nhl.com">Dashboard</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="collegepad/">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- DASHBOARD CONSOLE PANEL -->
    <div class="container mt-5 p-3 bg-primary text-light box-shadow border border-primary-subtle border-5 rounded-4 loginForm">
        <div class="mt-3">
            <img src="includes//assets//card-logos//document-3503099_640.png" style="width: 20%; height:auto;" class="mx-auto d-block text-center" />
            <h1 class="text-center display-5 fw-bold">Your Dashboard</h1>
            <p class="lead text-center">Here are some stats about your notes repo! ✏️</p>
            <hr />
            <p class="lead text-center"> The amount of notes you have:</p>
            <h1 class="text-center display-6 fw-bold">8</h1>
            <div class="text-center pb-3">
                <button type="button" class="btn btn-lg btn-success">Create a new notepad!</button>
            </div>
        </div>
    </div>
</body>