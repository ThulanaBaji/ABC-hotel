<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url() . 'css/style.css' ?>">
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
                        <a class="nav-link" href="<?php echo base_url() ?>">Dining</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>">things to do</a>
                    </li>
                </ul>
        </div>
        <a href="<?php echo base_url() . 'rooms' ?>" role="button" class="btn btn-outline-dark">Bookings</a>

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
            <a href="tel:+940772833935" type="button" class="btn btn-outline-dark">Call Us</a>
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


    <div class="bgr">
        <div class="booking-bg row col-md-10">
            <div class="rb">
                <h1>Room <br>Booking</h1>
            </div>

            <div class="bform">
                <?php echo form_open('Rooms/bookings'); ?>
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

    <script>
        $(function() {
            $("#exampleInputArrival").datepicker();
            $("#exampleInputDeparture").datepicker();
        });
    </script>
</body>

</html>