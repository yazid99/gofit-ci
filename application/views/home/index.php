<?php if ($this->session->flashdata('logout')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="color:red">
                    <?= $this->session->flashdata('logout'); ?>.
                </div>
    <?php endif; ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url(); ?>/assets/images/GOR_RIAU.JPG" class="d-block w-100" alt="load">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>/assets/images/kolamRenang.jpeg" class="d-block w-100" alt="load">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>/assets/images/GOR_SAGARANTEN.jpg" class="d-block w-100" alt="load img">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
