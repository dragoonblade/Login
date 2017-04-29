<?php 
  session_start();
  if(!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('location:index.php');
    exit;
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>project</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <script src="js/sweetalert-dev.js"></script>
</head>
<body>
    <nav class="navbar navbar-fixed-top navbar-dark bg-primary">
    	<div class="container-fluid">
    		<div class="row">
      		<div class="col-md-2">
	        	<div class="navbar-header">
		          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
		          	<a href="dashboard.php"><img src="images/logo.png" class="navbar-brand" alt="Logo" width="40%"></a>
		          	<ul class="nav navbar-nav">
          				<li><a href="dashboard.php">Home</a></li>
          				<li><a href="dashboard.php">About</a></li>
          			</ul>
		        </div>
		    </div>
		    <div class="col-md-6"></div>
		    <div class="col-md-4">
				<div id="navbar" class="collapse navbar-collapse">
        				<ul class="nav navbar-nav">
          				<li class="dropdown">
            					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi <?php echo $_SESSION['username'];  ?> <span class="caret"></span></a>
            					<ul class="dropdown-menu">
              					<li><a href="dashboard.php">Add Post</a></li>
              					<li><a href="view_post.php">View Post</a></li>
              					<li><a href="logout.php">Logout</a></li>
            					</ul>
          				</li>
        				</ul>
      			</div>
		    </div>
      	</div>
    	</div>
    </nav>
    <br><br><br>
    <div class="container" style="margin-top: 5%;">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">Add Post</div>
            <div class="panel-body">
              <form name="addPost" action="add_post.php" method="POST">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" id="title" class="form-control" name="title"/>
                </div>
                <div class="form-group">
                  <label for="body">Body</label>
                  <textarea id="body" class="form-control" name="body" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-danger form-control" value="Submit">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>

    <footer class="footer">
      	<div class="container-fluid">
      		<div class="row">
      			<div class="col-md-6">
      				<p class="text-muted">Manipal University Jaipur. All rights reserved.</p>
      			</div>
      			<div class="col-md-6">
      				<p class="text-muted" style="float: right;">Version 1.0</p>
      			</div>
      		</div>
      	</div>
    </footer>
    <?php 
      if(isset($_SESSION['message'])){
        echo "<script>sweetAlert('".$_SESSION['message']."');</script>";
        unset($_SESSION['message']);
      }
    ?>
</body>
</html>