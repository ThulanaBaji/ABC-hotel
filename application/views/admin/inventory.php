<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../sidebar.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="<?= base_url('css/admin/admindash.css') ?>" rel="stylesheet" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <title>Inventory</title>

</head>

<body>
  <style>
    body {
      color: #404E67;
      background: #F5F7FA;
      font-family: 'Open Sans', sans-serif;
    }

    .table-wrapper {
      width: fit-content;
      margin: 30px auto;
      background: whitesmoke;
      padding: 20px;
      box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
      padding-bottom: 10px;
      margin: 0 0 10px;
    }

    .table-title h2 {
      margin: 6px 0 0;
      font-size: 22px;
    }

    .table-title .add-new {
      float: right;
      height: 30px;
      font-weight: bold;
      font-size: 12px;
      text-shadow: none;
      min-width: 100px;
      border-radius: 50px;
      line-height: 13px;
    }

    .table-title .add-new i {
      margin-right: 4px;
    }

    table.table {
      table-layout: fixed;
    }

    table.table tr th,
    table.table tr td {
      border-color: #e9e9e9;
    }

    table.table th i {
      font-size: 13px;
      margin: 0 5px;
      cursor: pointer;
    }

    table.table th:last-child {
      width: 100px;
    }

    table.table td a {
      cursor: pointer;
      display: inline-block;
      margin: 0 5px;
      min-width: 24px;
    }

    table.table td a.add {
      color: #27C46B;
    }

    table.table td a.edit {
      color: #FFC107;
    }

    table.table td a.delete {
      color: #E34724;
    }

    table.table td i {
      font-size: 19px;
    }

    table.table td a.add i {
      font-size: 24px;
      margin-right: -1px;
      position: relative;
      top: 3px;
    }

    table.table .form-control {
      height: 32px;
      line-height: 32px;
      box-shadow: none;
      border-radius: 2px;
    }

    table.table .form-control.error {
      border-color: #f50000;
    }

    table.table td .add {
      display: none;
    }
  </style>

  <script>
    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
      var actions = $("table td:last-child").html();
      // Append table with add row form on add new button click
      $(".add-new").click(function() {
        $(this).attr("disabled", "disabled");

        var row = `<tr>
                      <td><input type="text" class="form-control input-itemcode"></td>
                      <td><input type="text" class="form-control input-item"></td>
                      <td><input type="text" class="form-control input-inuse"></td>
                      <td><input type="text" class="form-control input-available"></td>
                      <td>
                        <form action="<?= base_url('admin/inventory/add') ?>" method="post" style="display:inline">
                          <input type="hidden" name="itemcode">
                          <input type="hidden" name="item">
                          <input type="hidden" name="inuse">
                          <input type="hidden" name="available">
                          <button type="submit" class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></button>
                        </form>
                        <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                      </td>
                  </tr>`;
        $("table tbody").append(row);
        var index = $('table tbody tr').length;
        $("table tbody tr").eq(index - 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
      });
      // Add row on add button click
      $(document).on("click", ".add", function(e) {
        e.preventDefault();
        var empty = false;
        var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function() {
          if (!$(this).val()) {
            $(this).addClass("error");
            empty = true;
          } else {
            $(this).removeClass("error");
          }
        });
        $(this).parents("tr").find(".error").first().focus();
        if (!empty) {

          $(this).parent('form').find('input[name="itemcode"]').val($(this).parents('tr').find('.input-itemcode').val());
          $(this).parent('form').find('input[name="item"]').val($(this).parents('tr').find('.input-item').val());
          $(this).parent('form').find('input[name="inuse"]').val($(this).parents('tr').find('.input-inuse').val());
          $(this).parent('form').find('input[name="available"]').val($(this).parents('tr').find('.input-available').val());

          input.each(function() {
            $(this).parent("td").html($(this).val());

          });

          $(this).parents("tr").find(".add, .edit").toggle();
          $(".add-new").removeAttr("disabled");
          
          $(this).parent('form').submit();
          
        }
      });
      // Edit row on edit button click
      $(document).on("click", ".edit", function() {
        $(this).parents("tr").find("td.data-itemcode").each(function() {
          $(this).html('<input type="text" class="form-control input-itemcode" value="' + $(this).text() + '">');
        });
        $(this).parents("tr").find("td.data-item").each(function() {
          $(this).html('<input type="text" class="form-control input-item" value="' + $(this).text() + '">');
        });
        $(this).parents("tr").find("td.data-inuse").each(function() {
          $(this).html('<input type="text" class="form-control input-inuse" value="' + $(this).text() + '">');
        });
        $(this).parents("tr").find("td.data-available").each(function() {
          $(this).html('<input type="text" class="form-control input-available" value="' + $(this).text() + '">');
        });
        
        $(this).parents("tr").find(".add, .edit").toggle();

        $(".add-new").attr("disabled", "disabled");
      });
    });
  </script>

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
                        <h2>Inventory <b>Management</b></h2>
                      </div>
                      <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                      </div>
                    </div>
                  </div>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Item Code</th>
                        <th>Item</th>
                        <th>In use stock</th>
                        <th>Available stock</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(count($items) > 0): ?>
                        <?php foreach($items as $item): ?>
                          <tr>
                            <td class="data-itemcode"><?= $item['Item_code'] ?></td>
                            <td class="data-item"><?= $item['Item_name'] ?></td>
                            <td class="data-inuse"><?= $item['In_use_stock'] ?></td>
                            <td class="data-available"><?= $item['Available_stock'] ?></td>
                            <td>
                              <form action="<?= base_url('admin/inventory/edit') ?>" method="post" style="display:inline">
                                <input type="hidden" name="itemcode">
                                <input type="hidden" name="item">
                                <input type="hidden" name="inuse">
                                <input type="hidden" name="available">
                                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                <button type="submit" class="add" title="" data-toggle="tooltip" style="display: none;" data-original-title="Add" aria-describedby="tooltip546351"><i class="material-icons"></i></button><div class="tooltip fade top in" role="tooltip" id="tooltip546351" style="top: 154.175px; left: 600.1px; display: block;"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Add</div></div>
                              </form>
                              <a class="edit" title="" data-toggle="tooltip" style="" data-original-title="Edit"><i class="material-icons">&#xE254;</i></a>
                              <a href="<?= base_url('admin/inventory/delete/'.$item['id']) ?>" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="material-icons">&#xE872;</i></a>
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

      $('.alert').fadeOut(2000);
    });
  </script>


</body>

</html>