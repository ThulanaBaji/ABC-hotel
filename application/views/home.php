<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url() . '/css/Hotel.css' ?>">
  <title>Home</title>
</head>

<body>
  <style>
    .body-section {
      position: relative;
      height: fit-content;
      background-color: rgba(61, 60, 58);

    }

    .about-right {
      position: absolute;
    }

    .about-right img {
      vertical-align: middle;
      width: 100%;
      height: 50vh;
      margin-bottom: 20px;
      border-radius: 5px;

    }

    .row {
      padding-top: 20px;
      padding-bottom: 20px;

    }


  </style>

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
                <a class="dropdown-item" href="<?php echo base_url() ?>">Deluxe rooms</a>
                <a class="dropdown-item" href="<?php echo base_url() ?>">Double rooms</a>
                <a class="dropdown-item" href="<?php echo base_url() ?>">Triple rooms</a>
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
    <button type="button" class="btn btn-outline-dark">Bookings</button>

  </nav>

  <section class="logor">
    <div class="logo reveal">
      <img src="<?php echo base_url() . '/images/hotelbg2.png' ?>" alt="Logo">
    </div>

  </section>

  <section class="body-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about-left">
            <h2>Welcome to
              <span>ABC Hotels</span>
            </h2>
            <p>
              ABC Hotels, is a delightful destination to spend your leisure time. This beachfront resort offers a tranquil and picturesque setting for relaxation and enjoyment. You can soak up the sun on the pristine sandy beaches, take refreshing swims in the ocean, or simply unwind in the resort's comfortable accommodations. Negombo itself is known for its beautiful beaches, historic sites, and vibrant local culture, making it a great place for leisure and exploration. Whether you're interested in water sports, exploring the town, or just lounging by the pool, Amadel Negombo Resort is an excellent choice for a leisurely escape. <br>
            </p>
          </div>

        </div>
        <div class="col-md-6">
          <div class="about-right">
            <img src="<?php echo base_url() . '/images/h2.jpg' ?>" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <script>
    window.addEventListener('load', reveal);

    function reveal() {
      var reveals = document.querySelectorAll('.reveal');
      for (var i = 0; i < reveals.length; i++) {
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if (revealtop < windowheight - revealpoint) {
          reveals[i].classList.add('active');
        } else {
          reveals[i].classList.remove('active');
        }
      }
    }
  </script>
</body>


</html>