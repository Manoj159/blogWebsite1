<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>register</title>
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <!--tinyMCE Script-->
  <script src="https://cdn.tiny.cloud/1/cfygcwo0zv6tq5er1tyv2wwq636m7kecn77duwdjm9l82l64/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark mt-2" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Quizzy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url('home/myarticles'); ?>">My Articles
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Welcome/invest'); ?>">invest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('home/admin'); ?>">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Wallet/index'); ?>">Wallet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo base_url('home/myarticles'); ?>">My Articles</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="<?php echo base_url('home/signout'); ?>">Log Out</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>