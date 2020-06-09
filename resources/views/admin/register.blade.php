<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>HALLO</h1>
                  </div>
                  <p>Project Laravel Pemrograman berbasis WEB <br> - by Shindi purnama putri - 151811513009 -</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form class="text-left form-validate" action="RegisterStore" method="post">
                  <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <div class="form-group-material">
                      <input id="register-firstname" type="text" name="firstuser" required data-msg="Please enter your first name" class="input-material">
                      <label for="register-firstname" class="label-material">First Name</label>
                    </div>
                    <div class="form-group-material">
                      <input id="register-lastname" type="text" name="lastuser" required data-msg="Please enter your last name" class="input-material">
                      <label for="register-lastname" class="label-material">Last Name</label>
                    </div>
                    <div class="form-group-material">
                      <input id="register-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                      <label for="register-username" class="label-material">Username</label>
                    </div>
                    <div class="form-group-material">
                    <label for="register-jabatan" class="label-material">Jabatan</label>
                      <select name="jabatan" class="form-control mb-3 mb-3" > 
                        <option disabled selected>Pilih Jabatan</option>
                        <option  value="0">Admin</option>
                        <option  value="1">Kasir</option>
                      </select>
                    </div>
                    <div class="form-group-material">
                      <input id="register-phone" type="text" name="phoneuser" required data-msg="Please enter a valid email address" class="input-material">
                      <label for="register-email" class="label-material">Phone</label>
                    </div>
                    <div class="form-group-material">
                      <input id="register-email" type="email" name="emailuser" required data-msg="Please enter a valid email address" class="input-material">
                      <label for="register-email" class="label-material">Email Address</label>
                    </div>
                    <div class="form-group-material">
                      <input id="passuser" type="password" name="passuser" required data-msg="Please enter your password" class="input-material">
                      <label for="register-password" class="label-material">Password</label>
                    </div>
                    <div class="form-group-material">
                      <input id="copass" type="password" name="passuser" required data-msg="Please rewrite your password" class="input-material" onkeyup="cekPass()">
                      <label for="register-password" class="label-material">Password</label>
                      <p id="eror" style="color:red"></p>	
                    </div>
                    <div class="form-group terms-conditions text-center">
                      <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                      <label for="register-agree">I agree with the terms and policy</label>
                    </div>
                    <div class="form-group text-center">
                      <input id="register" type="submit" value="Register" class="btn btn-primary">
                    </div>
                  </form><small>Already have an account? </small><a href="login" class="signup">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
  <script>
	function cekPass()
	{
		var pass = document.getElementById('passuser').value;
		var copass = document.getElementById('copass').value;
		var text = document.getElementById('eror');
		if(pass != copass)
		{
			text.style.color='red';
			text.innerHTML='Password is not Correct';
		}
		else
		{
			text.style.color = 'green';
			text.innerHTML = 'Password is Correct';
		}	
	}
</script>
</html>