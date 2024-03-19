<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Charles's Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="/favicons/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>


  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    background-color: #1a1a1a;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #1a1a1a;
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
    
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
    background-color: rgba(5, 5, 5, 0.8);
    
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
    background-color: rgba(5, 5, 5, 0.8);
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }

  .jumbotron.content-container.bg-1 {
		background-image: url("img/2.png");
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		text-align: center;
		color: #fff;
		padding: 60px;
		margin-bottom: 20px;
	}

  .jumbotron.content-container-contactme {
		background-image: url("img/1.3.png");
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		text-align: center;
		color: #fff;
		padding: 60px;
		margin-bottom: 20px;
	}

  .centered-form-container {
		text-align: center;
		background-color: #f5f5f5;
		padding: 20px;
		border-radius: 5px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		max-width: 400px;
		margin: 0 auto;
		background-color: #1a1a1a;
	}

	.centered-form-container p {
		font-size: 18px;
		margin: 0;
	}

	.centered-form-container form {
		margin-top: 20px;
	}

	.centered-form-container input[type="text"],
	.centered-form-container input[type="email"],
	.centered-form-container textarea {
		width: 100%;
		padding: 10px;
		margin: 5px 0;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	.centered-form-container button {
		background-color: #007BFF;
		color: #fff;
		padding: 10px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		font-size: 16px;
	}

	.centered-form-container button:hover {
		background-color: #0056b3;
	}
	
	
	#contactFormModal .modal-content {
  background-color: #000; 
  color: #fff;
}
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/">Charles's Blog</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact-us">Contact us</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Third Container (Grid) -->
<div class="container bg-3"> 
  <p></p>   
  <br>
  <br>
  @yield('content')
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center navbar-fixed-bottom" style="padding: 10px;">
  <p>Copyright &copy 2023. <a href='/about'>Charles's Blog</a>. All rights reserved.</p> 
</footer>
</body>
</html>
