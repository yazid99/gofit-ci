<!DOCTYPE html>
<html>

<head>
    <title>Go-Fit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Sans">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg kelas-navbar py-1!">
        <a class="navbar-brand my-0 logo" href=<?= base_url(); ?>>Go-Fit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></s   pan>
        </button>

        <div class="collapse navbar-collapse nav-konten" id="navbarSupportedContent">
            <ul class="nav mx-auto my-navbar pl-0 nav-konten">
                <li class="nav-item">
                    <a class="nav-link" href=<?= base_url(); ?>>
                        <p>Home</p> <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>misc">
                        <p>Lapangan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>misc/aboutUs">
                        <p>About Us</p>
                    </a>
                </li>
            </ul> 
            <?php if(!isset($_SESSION['nama'])){?>
            <div class="reg-btn ">
                <a href="<?= base_url(); ?>login" class="login mr-2"> Login </a>
                <a href="<?= base_url(); ?>misc/registrasi" class="reg">Register</a>
            </div>
            <?php }else { ?>
                <div class="reg-btn ">
                    <a href="#" class="reg"><?= $_SESSION['username'] ?></a>
                    <a href="<?= base_url(); ?>login/logout" class="login mr-2"> Logout </a>
                </div>
            <?php } ?>
        </div>
    </nav>
    