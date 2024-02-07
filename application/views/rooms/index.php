<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url() . 'css/Hotel.css' ?>">
  <title>Our Rooms</title>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <style>
    .tile-link {
      text-decoration: none;
      margin: 0;
      padding: 0;
      color: black;
    }

    .tile-link:active {
      text-decoration: none;
      color: black;
    }

    a.tile-link:visited {
      text-decoration: none;
      color: black;
    }

    a.tile-link:hover {
      text-decoration: none;
      color: black;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg  fixed-top">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">
      <img src="<?php echo base_url() . '/images/newlogo.png' ?>" width="80" height="80" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <div class="btn-group">
              <a class="nav-link" href="<?php echo base_url() . 'rooms' ?>" style="background-color: transparent; border
            : none;">
                Rooms
              </a>
              <button type="button" class="nav-link dropdown-toggle dropdown-toggle-split" style="background-color: transparent; border
            : none;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu" style="background-color: grey;" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?php echo base_url('rooms/deluxe') ?>">Deluxe rooms</a>
                <a class="dropdown-item" href="<?php echo base_url('rooms/double') ?>">Double rooms</a>
                <a class="dropdown-item" href="<?php echo base_url('rooms/triple') ?>">Triple rooms</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>">Dining</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>">things to do</a>
          </li>
        </ul>
    </div>
    <a href="<?php echo base_url() . 'rooms' ?>" role="button" class="btn btn-outline-dark">Bookings</a>

  </nav>


  <section class="select">

    <div class="container" style="margin-top: 105px;">

      <div class="row justify-content-center">
        <h1 class="our">Our rooms</h1>
      </div>

      <div class="row mt-3">
        <div class="col-md-4">
          <a class="tile-link" href="<?php echo base_url('rooms/deluxe') ?>">
            <div class="fig">
              <img src="./images/deluxe.jpg" style="max-width: 100%; height: auto; " />
              <figcaption>
                <h5 id="Heading">Deluxe Rooms</h5>
              </figcaption>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a class="tile-link" href="<?php echo base_url('rooms/double') ?>">
            <div class="fig">
              <img src="./images/double.jpg" style="max-width: 100%; height: auto; " />
              <figcaption>
                <h5 id="Heading">Double Rooms</h5>
              </figcaption>
            </div>
          </a>
        </div>

        <div class="col-md-4">
          <a class="tile-link" href="<?php echo base_url('rooms/triple') ?>">
            <div class="fig">
              <img src="./images/triple.jpg" style="max-width: 100%; height: auto; " />
              <figcaption>
                <h5 id="Heading">Triple Rooms</h5>
              </figcaption>
            </div>
          </a>
        </div>
      </div>
  </section>

</body>

</html>