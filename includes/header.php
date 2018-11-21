<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Telling Social</title>

    <link async rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link async rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>

    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/manifest.json">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#fff">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/tellingsocial_logo.png" alt="Telling logo" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php echo $page == "index" ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo $page == "features" ? 'active' : '' ?>">
                        <a class="nav-link" href="features.php">Features</a>
                    </li>

                    <li class="nav-item <?php echo $page == "contact" ? 'active' : '' ?>">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="https://www.dashboard.tellinginsights.com">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>