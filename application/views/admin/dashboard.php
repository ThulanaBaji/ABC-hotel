<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sidebar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?= base_url('css/admin/admindash.css') ?>" rel="stylesheet" />
    <title>Document</title>
</head>

<body>

    <style>
        .dash {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 45px;
            font-family: 'Barranco Black', sans-serif;
            margin-top: 30px;
        }

        .btn-group {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a href="<?= base_url('admin/dashboard') ?>">Dahsboard</a></li>
                <li><a href="<?= base_url('admin/inventory') ?>">Inventory</a></li>
                <li><a href="<?= base_url('admin/profitloss') ?>">Profit & Loss</a></li>
                <li><a href="<?= base_url('admin/billhistory') ?>">Bill history</a></li>
                <li><a href="<?= base_url('admin/dashboard/logout') ?>">Logout</a></li>
            </ul>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>

                        <div class="dash">
                            Welcome admin
                        </div>

                        <div class="row">
                            <div class="about-left">
                                <div class="btn-group" role="group" aria-label="...">
                                    <a href="../admin/inventory" class="btn btn-default">Inventory</a>
                                    <a href="../admin/billhistory" class="btn btn-default">Bill History</a>
                                    <a href="../admin/profitloss" class="btn btn-default">Profit & Loss</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("menuDisplayed");
            });
        });
    </script>


</body>

</html>