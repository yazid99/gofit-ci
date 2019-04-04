<!DOCTYPE html>
<html lang="en">
    <head> 
		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/regis.css">
		
		<!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

		<title>Registrasi</title>
	</head>
	<body>
		<div class="container">
			<div class="d-flex justify-content-center mx-auto">
                    <div class="form col-4 p-4 mt-5">
					    <form class="form-horizontal" method="post" action="">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
									<small class="form-text text-danger"><?= form_error('name') ?>.</small>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
									<small class="form-text text-danger"><?= form_error('email') ?>.</small>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
									<small class="form-text text-danger"><?= form_error('username') ?>.</small>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
									<small class="form-text text-danger"><?= form_error('password') ?>.</small>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
									<input type="password" class="form-control" name="pasconfirm" id="confirm"  placeholder="Confirm your Password"/>
									<small class="form-text text-danger"><?= form_error('pasconfirm') ?>.</small>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" name="registrasi" class="btn btn-primary btn-lg btn-block login-button">Daftar</button>
						</div>
						<div class="login-register d-flex justify-content-center">
                            <span style="color: grey; font-size: 14px"> Telah Terdaftar? </span>
				            <a href="<?=base_url() ?>login">Login</a>
				         </div>
                        </form>
                    </div>
				
			</div>
		</div>
	</body>
</html>