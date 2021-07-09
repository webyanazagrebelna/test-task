<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>adressbook</title>

  <!-- Bootstrap -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/animate.css">
  <link href="/css/prettyPhoto.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet" />
  <link href="/css/my-css.css" rel="stylesheet" />
</head>

<body>
  <header>
    <nav class="navbar navbar-default" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <div class="navbar-brand">
              <a href="/index.html"><h1><span>Adress</span>book</h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="/adress/add" >Add new adress</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

<!-- MAIN -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<aside class="col-sm-2">
				</aside>
				<article class="col-sm-10">
					<?php
					include 'application/views/' . $viewContent;
					?>
				</article>
			</div>
		</div>
	</main>
<!-- FOOTER -->
	<footer class="footer fixed-bottom">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4">

    FOOTER
				</div>
				<div class="col-sm-4">
    FOOTER
				</div>
				<div class="col-sm-4">

    FOOTER
				</div>
			</div>
		</div>
	</footer>  
