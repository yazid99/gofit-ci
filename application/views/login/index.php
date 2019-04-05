<!DOCTYPE html>
<html>

<head>
    <title>GoFit - Login Page</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/loginStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" method="POST" action="<?=base_url('login/proses_login')?>">
                <?php if ($this->session->flashdata('gagal')) : ?>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="color:red">
                                <?= $this->session->flashdata('gagal'); ?>.
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <input type="text" placeholder="username" name="username"/>
                <input type="password" placeholder="password" name="password"/>
                <button type="submit" name="login" class ="login-btn">login</button>
                <p class="message">Belum Terdaftar? <a href="<?= base_url() ?>misc/registrasi">Buat Akun</a></p>
            </form>
        </div>
    </div>

</body>

</html>