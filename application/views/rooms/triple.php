<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url() . '/css/Hotel.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . '/css/room.css' ?>">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <title>Deluxe Room</title>
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
                        <a class="nav-link" href="<?php echo base_url() . 'about' ?>">About Us</a>
                    </li>
                </ul>
        </div>
        <a href="<?php echo base_url() . 'booking' ?>" role="button" class="btn btn-outline-dark">Bookings</a>

    </nav>

    <section class="room1">
        <div class="deluxe">
            <img src="../images/triple.jpg">
            <p class="caption">TRIPLE ROOM</p>
        </div>
    </section>

    <div class="con">
        <div class="text">
            <h3 class="p1"> "Experience comfort for groups or families in our spacious triple rooms."</h3>
            <h5 class="he1">For more information</h5>
            <a href="../booking" type="button" class="btn btn-outline-dark">Book now</a>
        </div>
    </div>


    <section class="body-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-left">
                        <dl>
                            <dt id="spec">Our Specialities</dt>
                            <dd> • Group Comfort</dd>
                            <dd> • Cost effective</dd>
                            <dd> • Convenience</dd>
                        </dl>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-right">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="body-section2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-left2">
                        With our Superior Rooms, you have the best of both worlds – A luxurious, quiet escape with the city of Colombo on your doorstep.
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="about-right2">
                        <img src="../images/h1.jpg">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact-center">
        <div class="abc">
            HOTEL ABC
        </div>
        <hr class="hr3">
        <h3 id="cnum">(+94) 0775950824</h3>
        <h2 id="email">abchotels@info.lk</h2>
        <i class="bi bi-c-circle"> Copyright 2024 ABC Hotels (PVT) Ltd.</i>

    </section>

    <script>
        $(function() {
            $("#exampleInputArrival").datepicker();
            $("#exampleInputDeparture").datepicker();
        });
    </script>
</body>

</html>