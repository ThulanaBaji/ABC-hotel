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
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a href="<?= base_url('admin/dashboard')?>">Dahsboard</a></li>
                <li><a href="<?= base_url('admin/inventory')?>">Inventory</a></li>
                <li><a href="<?= base_url('admin/profitloss')?>">Profit & Loss</a></li>
                <li><a href="<?= base_url('admin/billhistory')?>">Bill history</a></li>
                <li><a href="<?= base_url('admin/dashboard/logout')?>">Logout</a></li>
            </ul>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <div class="container-fluid">

            <div class="row">
              <div class="col-lg-12">
                <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                <div class="container-lg">
                  <div class="table-responsive">
                    <div class="text-center">
                      <?php if(isset($error)): ?>
                      <div class="mx-auto alert alert-danger col-4"><?= $error ?></div>
                      <?php endif; ?>
                      <?php if(isset($success)): ?>
                      <div class="mx-auto alert alert-success col-4"><?= $success ?></div>
                      <?php endif; ?>
                    </div>
                    <div class="table-wrapper">
                      <div class="table-title">
                        <div class="row">
                          <div class="col-sm-8">
                            <h2>Bill <b>History</b></h2>
                          </div>
                        </div>
                      </div>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Reference</th>
                            <th>Customer name</th>
                            <th>Room service</th>
                            <th>Total (Rs)</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if(count($bills) > 0): ?>
                            <?php foreach($bills as $bill): ?>
                              <tr>
                                <td><?= $bill['create_time'] ?></td>
                                <td><?= $bill['reference'] ?></td>
                                <td><?= $bill['customer_name'] ?></td>
                                <td><?= $bill['room'] ?></td>
                                <td><?= $bill['total'] ?></td>
                                <td><?= $bill['status'] ?></td>
                                <td>
                                  <a target="_blank" href="<?= base_url('acc/dashboard/view/'.$bill['id']) ?>" title="" data-original-title="Delete">view bill</a>
                                </td>
                              </tr>
                            <?php endforeach; ?>
                          <?php endif; ?>
                        </tbody>
                      </table>
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