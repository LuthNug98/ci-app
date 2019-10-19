<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- My css -->
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/style.css">

    <title><?php echo $judul; ?></title>
  </head>
  
  <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   	<div class="container">
   <a class="navbar-brand" href="#">CI-APP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>mahasiswa">Mahasiswa</a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>peoples">Peoples</a>
      <a class="nav-item nav-link" href="#">About</a>
    </div>
     	</div>
  </div>
</nav>
