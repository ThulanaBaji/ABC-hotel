<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bootstrap Table with Add and Delete Row Feature</title>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="<?= base_url('css/admin/style.css') ?>" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />`
  <script src="<?= base_url('js/jquery-3.7.0.js') ?>"></script>
  <link rel="stylesheet" href="<?= base_url('css/admin/dashboard.css') ?>">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



  <style>
    body {
      font-family: 'Open Sans', sans-serif;
    }

    .table-wrapper {
      width: 700px;
      margin: 30px auto;
      background: #fff;
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

    body {
      font-family: 'lato', sans-serif;
    }

    .container {
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
      padding-left: 10px;
      padding-right: 10px;
    }

    h2 {
      font-size: 26px;
      margin: 20px 0;
      text-align: center;
    }

    small {
      font-size: 0.5em;
    }

    .responsive-table {
      li {
        border-radius: 3px;
        padding: 25px 30px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 25px;
      }

      .table-header {
        background-color: #95A5A6;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.03em;
        display: flex;
        justify-content: space-between;
      }

      .table-row {
        background-color: #ffffff;
        box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
      }

      .col-1,
      .col-2,
      .col-3,
      .col-4 {
        flex-basis: 25%;
      }

      @media all and (max-width: 767px) {
        .table-header {
          display: none;
        }

        .table-row {}

        li {
          display: block;
        }

        .col {
          flex-basis: 100%;
          display: flex;
          padding: 10px 0;
        }

        .col:before {
          color: #6C7A89;
          padding-right: 10px;
          content: attr(data-label);
          flex-basis: 50%;
          text-align: right;
        }
      }
    }
  </style>
  <script>
    $(document).ready(function() {
      var trigger = $('.hamburger'),
        overlay = $('.overlay'),
        isClosed = false;

      trigger.click(function() {
        hamburger_cross();
      });

      function hamburger_cross() {
        if (isClosed == true) {
          overlay.hide();
          trigger.removeClass('is-open');
          trigger.addClass('is-closed');
          isClosed = false;
        } else {
          overlay.show();
          trigger.removeClass('is-closed');
          trigger.addClass('is-open');
          isClosed = true;
        }
      }

      $('[data-toggle="offcanvas"]').click(function() {
        $('#wrapper').toggleClass('toggled');
      });
    });


    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
      var actions = $("table td:last-child").html();
      // Append table with add row form on add new button click
      $(".add-new").click(function() {
        $(this).attr("disabled", "disabled");
        var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
          '<td><input type="text" class="form-control" name="name" id="name"></td>' +
          '<td><input type="text" class="form-control" name="department" id="department"></td>' +
          '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
          '<td>' + actions + '</td>' +
          '</tr>';
        $("table").append(row);
        $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
      });
      // Add row on add button click
      $(document).on("click", ".add", function() {
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
          input.each(function() {
            $(this).parent("td").html($(this).val());
          });
          $(this).parents("tr").find(".add, .edit").toggle();
          $(".add-new").removeAttr("disabled");
        }
      });
      // Edit row on edit button click
      $(document).on("click", ".edit", function() {
        $(this).parents("tr").find("td:not(:last-child)").each(function() {
          $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
        });
        $(this).parents("tr").find(".add, .edit").toggle();
        $(".add-new").attr("disabled", "disabled");
      });
      // Delete row on delete button click
      $(document).on("click", ".delete", function() {
        $(this).parents("tr").remove();
        $(".add-new").removeAttr("disabled");
      });
    });
  </script>
</head>

<body>

  <div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
      <ul class="nav sidebar-nav mt-3">
        <div class="sidebar-header">
          <li><a href="<?= base_url('admin/dashboard') ?>"> <span class="fa fa-tachometer mr-2"></span>Dashboard</a></li>
          <li><a href="<?= base_url('admin/profitloss') ?>"> <span class="fa fa-file-text mr-2"></span>profit & loss</a></li>
          <li><a href="<?= base_url('admin/bills') ?>"> <span class="fa fa-clock-o mr-2"></span> bill history</a></li>
          <li><a href="<?= base_url('admin/inventory') ?>"> <span class="fa fa-th-large mr-2"></span>Inventory Management</a></li>
          <li><a href="<?= base_url('admin/dashboard/logout') ?>"> <span class="fa fa-sign-out mr-2"></span>Logout</a></li>
      </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
      </button>
    </div>

    <div class="container-lg">
      <div class="table-responsive">
        <div class="table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-8">
                <h2>Employee <b>Details</b></h2>
              </div>
              <div class="col-sm-4">
                <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
              </div>
            </div>
          </div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Phone</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John Doe</td>
                <td>Administration</td>
                <td>(171) 555-2222</td>
                <td>
                  <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                  <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                  <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                </td>
              </tr>
              <tr>
                <td>Peter Parker</td>
                <td>Customer Service</td>
                <td>(313) 555-5735</td>
                <td>
                  <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                  <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                  <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                </td>
              </tr>
              <tr>
                <td>Fran Wilson</td>
                <td>Human Resources</td>
                <td>(503) 555-9931</td>
                <td>
                  <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                  <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                  <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>

</html>