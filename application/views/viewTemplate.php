<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company-HTML Bootstrap theme</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand">
              <a href="index.html"><h1><span>Com</span>pany</h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="index.html" <?php if (isset(explode('/', $_SERVER['REQUEST_URI'])[2])) echo 'class="active"'; ?>>Home</a></li>
                <li role="presentation"><a href="about.html" <?php if (isset(explode('/', $_SERVER['REQUEST_URI'])[2])) echo 'class="active"'; ?>>About Us</a></li>
                <li role="presentation"><a href="services.html" <?php if (isset(explode('/', $_SERVER['REQUEST_URI'])[2])) echo 'class="active"'; ?>>Services</a></li>
                <li role="presentation"><a href="portfolio.html" <?php if (isset(explode('/', $_SERVER['REQUEST_URI'])[2])) echo 'class="active"'; ?>>Portfolio</a></li>
                <li role="presentation"><a href="blog.html" <?php if (isset(explode('/', $_SERVER['REQUEST_URI'])[2])) echo 'class="active"'; ?>>Blog</a></li>
                <li role="presentation"><a href="contact.html" <?php if (isset(explode('/', $_SERVER['REQUEST_URI'])[2])) echo 'class="active"'; ?>>Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
<?php
include 'application/views/' . $viewContent;
?>
