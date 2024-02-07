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
        .contact-center {
            height: 30vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .css-1j8o68f {
            width: 200px;
            height: auto;
            /*padding-top: 35px;*/
        }


        #cnum {
            padding-top: 5px;
            font-family: 'Barranco Black', sans-serif;
            font-style: italic;
            color: white;
        }

        .abc {
            color: white;
            font-size: 50px;
            font-family: 'Barranco Black', sans-serif;

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
                        <a class="nav-link" href="<?php echo base_url() ?>">Dining</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'about' ?>">About Us</a>
                    </li>
                </ul>
        </div>
        <a href="./rooms" role="button" class="btn btn-outline-dark">Bookings</a>
    </nav>

    <section class="contact-center">
        <div class="abc">
            CONTACT US
        </div>
        <div id="cnum">
           <center>Planning a stay at The ABC Hotel? Reach out to us by phone or email to secure your reservation today!</center></div>

    </section>


</body>

</html>