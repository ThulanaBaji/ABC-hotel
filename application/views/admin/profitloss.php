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
                         
                    </div>
                    
                </div>
                <div class="row">
                  <div class="col-lg-offset-3 col-sm-2">
                    <select class="form-control" onchange="changeview(this)" id="viewchange-select">
                      <option value="week">week</option>
                      <option value="month">Month</option>
                      <option value="year">Year</option>
                    </select>
                  </div>

                  <div class="col-lg-offset-3 col-sm-3">
                    <button type="button" id="button-toggle" onclick="toggleAll()" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                      All rooms
                    </button>
                  </div>
                </div>
                <div class="row">
                  <br>
                  <div class="jumbotron col-lg-offset-3 col-lg-6">
                    <div id="area-chart"></div>
                  </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        $(document).ready(function() {
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("menuDisplayed");
            });

          $("#viewchange-select option[value='month']").attr("selected","selected");
          changeview($("#viewchange-select"));
        });

        const weekcategory = <?= $weekcategory ?>;
        const monthcategory = <?= $monthcategory ?>;
        const yearcategory = <?= $yearcategory ?>;
        const weektotalseries = <?= $weektotalseries ?>;
        const monthtotalseries = <?= $monthtotalseries ?>;
        const yeartotalseries = <?= $yeartotalseries ?>;
        const weeknormalseries = <?= $weeknormalseries ?>;
        const monthnormalseries = <?= $monthnormalseries ?>;
        const yearnormalseries = <?= $yearnormalseries ?>;

        function changeview(e, total=null){
          var view = $(e).val();

          switch (view) {
            case "week":
              if(total == null){
                if($('#button-toggle').hasClass('active'))
                  //total
                  loadChart(weekcategory, weektotalseries);
                else
                  loadChart(weekcategory, weeknormalseries);
              }else{
                if(total) loadChart(weekcategory, weektotalseries);
                else loadChart(weekcategory, weeknormalseries);
              }

              break;
            case "month":
              if(total == null){
                if($('#button-toggle').hasClass('active'))
                  //total
                  loadChart(monthcategory, monthtotalseries);
                else
                  loadChart(monthcategory, monthnormalseries);
              }else{
                if(total) loadChart(monthcategory, monthtotalseries);
                else loadChart(monthcategory, monthnormalseries);
              }
              
              break;
            case "year":
              if(total == null){
                if($('#button-toggle').hasClass('active'))
                  //total
                  loadChart(yearcategory, yeartotalseries);
                else
                  loadChart(yearcategory, yearnormalseries);
              }else{
                if(total) loadChart(yearcategory, yeartotalseries);
                else loadChart(yearcategory, yearnormalseries);
              }
              
              break;
          
            default:
              break;
          }
        }

        function toggleAll(){
          var total = !$('#button-toggle').hasClass('active');
          changeview($("#viewchange-select"), total);
        }

        function loadChart(categories, series){
          console.log(categories);
          console.log(series);
          let options = {
            chart: {
              height: "200%",
              maxWidth: "100%",
              type: "area",
              fontFamily: "Inter, sans-serif",
              dropShadow: {
                enabled: false,
              },
              toolbar: {
                show: false,
              },
            },
            tooltip: {
              enabled: true,
              x: {
                show: false,
              },
            },
            fill: {
              type: "gradient",
              gradient: {
                opacityFrom: 0.55,
                opacityTo: 0,
                shade: "#1C64F2",
                gradientToColors: ["#1C64F2"],
              },
            },
            dataLabels: {
              enabled: false,
            },
            stroke: {
              width: 6,
            },
            grid: {
              show: true,
              strokeDashArray: 4,
              padding: {
                left: 40,
                right: 2,
                top: 0
              },
            },
            series: series,
            xaxis: {
              categories: categories,
              labels: {
                show: true,
              },
              axisBorder: {
                show: false,
              },
              axisTicks: {
                show: false,
              },
            },
            yaxis: {
              show: false,
            },
          }

          if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
            $('#area-chart').children().remove();
            const chart = new ApexCharts(document.getElementById("area-chart"), options);
            chart.render();
          }
        }
    </script>


</body>

</html>