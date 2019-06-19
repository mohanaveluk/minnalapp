<!DOCTYPE html>
<html>

<head>
    <title>Minnal - Home</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

</head>

<body>


    <!-- example 6 - center on mobile -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block">
                <!-- hidden spacer to center brand on mobile --></span>
            <a class="navbar-brand d-none d-lg-inline-block" href="#">
                MinnalApp
            </a>
            <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
                <img src="//placehold.it/40?text=LOGO" alt="logo">
            </a>
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
            <ul class="navbar-nav ml-auto flex-nowrap">
                <li class="nav-item">
                    <a href="index.php" class="nav-link  menu-item nav-active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link  menu-item">About</a>
                </li>
                <li class="nav-item">
                    <a href="service.php" class="nav-link  menu-item">Service</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link  menu-item">Contact</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container">
        <dir class="row">
            <dir class="col-sm-12" style="background-color:#cdd6f9" >
            <h2 > <?php echo "Home page" ?></h2>
            </div>
        </dir>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>