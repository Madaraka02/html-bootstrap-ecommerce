<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WhatsApp Contact Form - PHPHive</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="bootstrap/html5shiv.js"></script>
      <script src="bootstrap/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery-1.9.0.min.js"></script>
  </head>
  <body>
      <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" target="_blank"><span class="glyphicon glyphicon-home"></span> MobTools - PHPHive</a>
        </div>
		<div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1" >
          <ul class="nav navbar-nav">
            <li><a href="http://www.phphive.info/category/php-for-beginners/">PHP for Beginners</a></li>
            <li><a href="http://www.phphive.info/category/snippets/">Snippets</a></li>
            <li><a href="http://www.phphive.info/about/">About</a></li>
            <li><a href="http://www.phphive.info/contact/">Contact Us</a></li>
            <li><a href="http://www.phphive.info/request-tutorial/">Request Tutorial</a></li>			
          </ul>
        </div>
      </div>
    </div>

    <div class="container mainbody">

	  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">WhatsApp Contact Form</h3>
    </div>
    <div class="panel-body">

      <div class="col-lg-12" >
        <div >
          <span class="pull-left">  

  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
				<form class="form-horizontal" role="form" method="post" action="index.php">
    				<?php echo "<p class='text-danger'>$errWhatsAppConfig</p>";?>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
			</div>
		</div>		  
		  
		</div>
      </div>
		  <BR><BR><BR><BR><BR>
</body>
</html>