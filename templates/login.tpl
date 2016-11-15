
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Login tienda de aromas</title>

  </head>
  <body>
    <div class="container">
    <div class="omb_login">
    	<h3 class="omb_authTitle">Login tienda de aromas ap</h3>
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">
			    <form class="omb_loginForm" action="index.php?action=loguearme" method="POST">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" name="email" placeholder="email address">
					</div>
					<span class="help-block"></span>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="password" class="form-control" name="pass" placeholder="Password">
					</div>
          <span class="help-block"></span>
          <div class="row omb_row-sm-offset-6">
              </div>

					<button class="btn btn-lg btn-primary btn-block" type="submit" id="login">Login</button>
				</form>
			</div>
    	</div>
		</div>
</div>

    </body>
  </html>
