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
        .contact-center3 {
            height: 30vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        #cnum {
            padding-top: 5px;
            font-family: 'Barranco Black', sans-serif;
            font-style: italic;
            color: white;
        }

        .box {
            height: fit-content;
            width: auto;
            margin-left: 50px;
            margin-right: 50px;
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: rgba(61, 60, 58);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
            position: relative;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .add {
            margin-bottom: 40px;
            font-size: larger;
            width: fit-content;
        }

        .res {
            font-size: larger;

        }
    </style>

    <nav class="navbar navbar-expand-lg ">
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
                        <a class="nav-link" href="<?php echo base_url() . 'about' ?>">About Us</a>
                    </li>
                </ul>
        </div>
        <a href="<?php echo base_url() . 'booking' ?>" role="button" class="btn btn-outline-dark">Bookings</a>
    </nav>

    <section class="contact-center3">
        <div class="abc">
            CONTACT US
        </div>
        <div id="cnum">
            <center>Planning a stay at The ABC Hotel? Reach out to us by phone or email to secure your reservation today!</center>
        </div>
    </section>

    <section class="box">
        <div class="row">
            <div class="add">
                ADDRESS: 323/5, Horopathana, Negombo, Sri Lanka
            </div>
        </div>
        <div class="row">
            <div class="add">
                Mobile number: +94 01125678
            </div>
        </div>
        <div class="row">
            <div class="add">
                INQUIRIES: abchotels@info.lk
            </div>
        </div>
        <div class="row">
            <div class="res">
                Reservations: reservationabc@info.lk
            </div>
        </div>
    </section>

    <section class="contact-center" style="margin-top: 50px;">
    <div class="abc">
      HOTEL ABC
    </div>
    <hr class="hr3">
    <h3 id="cnum">(+94) 0775950824</h3>
    <h2 id="email">abchotels@info.lk</h2>
    <i class="bi bi-c-circle"> Copyright 2024 ABC Hotels (PVT) Ltd.</i>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>