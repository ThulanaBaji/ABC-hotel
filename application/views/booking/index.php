<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . '/css/Hotel.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . '/css/room.css' ?>">

    <title>Home</title>
</head>

<body>

    <style>
        .contact-center2 {
            height: 30vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .css-1j8o68f {
            width: 200px;
            height: auto;
        }


        #cnum2 {
            padding-top: 5px;
            font-family: 'Barranco Black', sans-serif;
            font-style: italic;
            color: white;
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

    <section class="contact-center2">
        <div class="abc">
           BOOK NOW
        </div>
        <div id="cnum2">
            <center>Planning a stay at The ABC Hotel? Reach out to us by phone or email to secure your reservation today!</center>
        </div>

    </section>


    <div class="bgr">
        <div class="booking-bg row col-md-10">
            <div class="rb">
                <h1>Room <br>Booking</h1>
            </div>

            <div class="bform">
                <?php echo form_open('booking/book'); ?>
                <input type="hidden" id="room" name="room" value="deluxe">

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputFullName1">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputFullName1" aria-describedby="FullName" name="name">
                        </div>

                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputMobile">Mobile</label>
                            <input type="text" class="form-control" id="exampleInputMobile" aria-describedby="Mobile" name="mobile">
                        </div>

                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputCountry">Country</label>
                            <input type="text" class="form-control" id="exampleInputCountry" aria-describedby="Country" name="country">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputadult">No of adults</label>
                            <div class="input-group mb-3">

                                <select class="custom-select" id="inputGroupSelect01" name="adult">
                                    <option selected>Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="3">4</option>
                                    <option value="3">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputChildren">No of children</label>
                            <div class="input-group mb-3">

                                <select class="custom-select" id="inputGroupSelect01" name="child">
                                    <option selected>Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="3">4</option>
                                    <option value="3">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputDate">Arrival</label>
                            <input type="text" class="form-control" id="exampleInputArrival" name="arrival">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputDate">Departure</label>
                            <input type="text" class="form-control" id="exampleInputDeparture" name="departure">
                        </div>
                    </div>


                </div>


                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block btn-outline-light">Submit</button>
                </div>
                <?php echo form_close(); ?>
            </div>

        </div>

    </div>

    <section class="contact-center">
    <div class="abc">
      HOTEL ABC
    </div>
    <hr class="hr3">
    <h3 id="cnum">(+94) 0775950824</h3>
    <h2 id="email">abchotels@info.lk</h2>
    <i class="bi bi-c-circle"> Copyright 2024 ABC Hotels (PVT) Ltd.</i>

  </section>


</body>

</html>