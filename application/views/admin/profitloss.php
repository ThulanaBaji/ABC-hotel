<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../sidebar.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="<?= base_url('css/admin/admindash.css') ?>" rel="stylesheet" />
  <title>Document</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li><a href="<?= base_url('admin/dashboard') ?>">Dahsboard</a></li>
        <li><a href="<?= base_url('admin/inventory') ?>">Inventory</a></li>
        <li><a href="<?= base_url('admin/profitloss') ?>">Profit & Loss</a></li>
        <li><a href="<?= base_url('admin/dashboard/logout') ?>">Logout</a></li>
      </ul>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
            <h1 class="text-center">Bootstrap Sidebar</h1>
            <h2 class="small text-center">Second Header</h2>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium perferendis maiores velit ad id delectus nisi eligendi doloremque officia necessitatibus, repellendus alias omnis, natus nam voluptates dolor vel minus ab?</p>
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