<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="corporate-ui-dashboard-main/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="corporate-ui-dashboard-main/assets/img/favicon.png">
    <title>
    To Do List Kelompok 2
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="corporate-ui-dashboard-main/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="corporate-ui-dashboard-main/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
    <link href="corporate-ui-dashboard-main/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="corporate-ui-dashboard-main/assets/css/corporate-ui-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.3.4/dist/aos.js"></script>

</head>

    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">To Do List</li>
          </ol>
          <h6 class="font-weight-bold mb-0">To Do List</h6>
        </nav>
        <a href="index_proses.php" class="btn btn-danger ml-3">Logout <i class="fa fa-sign-out"></i></a>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Main Content -->
    <div class="container-fluid py-4 px-5" data-aos="fade">
      <div class="row">
        <div class="col-md-12">
          <div class="d-md-flex align-items-center mb-3 mx-2">
            <div class="mb-md-0 mb-3">
              <h3 class="font-weight-bold mb-0">Hello,<?php echo $_SESSION['username']; ?></h3>
              <p class="mb-0"><?php echo $_SESSION['username']; ?>, Your to do list</p>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <!-- To Do List di bawah sini-->
      <div class="">
        <h1 data-aos="fade">Task List</h1>
        <div class="d-md-flex align-items-center mb-3 mx-2" data-aos="fade">
          <a href="addTask.php">
            <button type="button" class="btn btn-primary">Add Task</button>
          </a>
        </div>
        <table class="table">
            <thead data-aos="fade">
                <tr>
                    <th>Task</th>
                    <th>Done</th>
                    <th>Progress</th>
                    <th>Edit Task</th>
                    <th>Delete Task</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('tasklist.php');
                ?>
            </tbody>
        </table>
    </div>
      <!-- To Do List sampai sini  -->
    <hr>
    <footer class="footer py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-4 mx-auto text-center">
            <a href="https://github.com/AdliGR" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Shyehan Rafael Adlinugroho
            </a>
            <a href="https://github.com/DirsyaArsyad7" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Dirsya Arrosyid Arsyad
            </a>
            <a href="https://github.com/Eliezer223" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Eliezer Raphael
            </a>
            <br>
            <a href="https://github.com/DavidTheMarksmen" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              David Moses Mantiri Kalesaran
            </a>
            <a href="https://github.com/MichaelVallent" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Michael Vallent
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              <a href="https://github.com/AdliGR/To_Do_List_UTS">
                <h5>Kelompok 2</h5>
              </a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    </div>
  </main>
  <!--  Script Tambahan   -->
  <script>
  AOS.init({
    duration: 1000, 
    once: true, 
    mirror: false, 
  });
  </script>

  <!--   Core JS Files   -->
  <script src="corporate-ui-dashboard-main/assets/js/core/popper.min.js"></script>
  <script src="corporate-ui-dashboard-main/assets/js/core/bootstrap.min.js"></script>
  <script src="corporate-ui-dashboard-main/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="corporate-ui-dashboard-main/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="corporate-ui-dashboard-main/assets/js/plugins/chartjs.min.js"></script>
  <script src="corporate-ui-dashboard-main/assets/js/plugins/swiper-bundle.min.js" type="text/javascript"></script>
  <script>
    if (document.getElementsByClassName('mySwiper')) {
      var swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
        initialSlide: 1,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    };


    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
        datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderSkipped: false,
            backgroundColor: "#2ca8ff",
            data: [450, 200, 100, 220, 500, 100, 400, 230, 500, 200],
            maxBarThickness: 6
          },
          {
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderSkipped: false,
            backgroundColor: "#7c3aed",
            data: [200, 300, 200, 420, 400, 200, 300, 430, 400, 300],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
          tooltip: {
            backgroundColor: '#fff',
            titleColor: '#1e293b',
            bodyColor: '#1e293b',
            borderColor: '#e9ecef',
            borderWidth: 1,
            usePointStyle: true
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            stacked: true,
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [4, 4],
            },
            ticks: {
              beginAtZero: true,
              padding: 10,
              font: {
                size: 12,
                family: "Noto Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#64748B"
            },
          },
          x: {
            stacked: true,
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              font: {
                size: 12,
                family: "Noto Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#64748B"
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(45,168,255,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(45,168,255,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(45,168,255,0)'); //blue colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(119,77,211,0.4)');
    gradientStroke2.addColorStop(0.7, 'rgba(119,77,211,0.1)');
    gradientStroke2.addColorStop(0, 'rgba(119,77,211,0)'); //purple colors

    new Chart(ctx2, {
      plugins: [{
        beforeInit(chart) {
          const originalFit = chart.legend.fit;
          chart.legend.fit = function fit() {
            originalFit.bind(chart.legend)();
            this.height += 40;
          }
        },
      }],
      type: "line",
      data: {
        labels: ["Aug 18", "Aug 19", "Aug 20", "Aug 21", "Aug 22", "Aug 23", "Aug 24", "Aug 25", "Aug 26", "Aug 27", "Aug 28", "Aug 29", "Aug 30", "Aug 31", "Sept 01", "Sept 02", "Sept 03", "Aug 22", "Sept 04", "Sept 05", "Sept 06", "Sept 07", "Sept 08", "Sept 09"],
        datasets: [{
            label: "Volume",
            tension: 0,
            borderWidth: 2,
            pointRadius: 3,
            borderColor: "#2ca8ff",
            pointBorderColor: '#2ca8ff',
            pointBackgroundColor: '#2ca8ff',
            backgroundColor: gradientStroke1,
            fill: true,
            data: [2828, 1291, 3360, 3223, 1630, 980, 2059, 3092, 1831, 1842, 1902, 1478, 1123, 2444, 2636, 2593, 2885, 1764, 898, 1356, 2573, 3382, 2858, 4228],
            maxBarThickness: 6

          },
          {
            label: "Trade",
            tension: 0,
            borderWidth: 2,
            pointRadius: 3,
            borderColor: "#832bf9",
            pointBorderColor: '#832bf9',
            pointBackgroundColor: '#832bf9',
            backgroundColor: gradientStroke2,
            fill: true,
            data: [2797, 2182, 1069, 2098, 3309, 3881, 2059, 3239, 6215, 2185, 2115, 5430, 4648, 2444, 2161, 3018, 1153, 1068, 2192, 1152, 2129, 1396, 2067, 1215, 712, 2462, 1669, 2360, 2787, 861],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: true,
            position: 'top',
            align: 'end',
            labels: {
              boxWidth: 6,
              boxHeight: 6,
              padding: 20,
              pointStyle: 'circle',
              borderRadius: 50,
              usePointStyle: true,
              font: {
                weight: 400,
              },
            },
          },
          tooltip: {
            backgroundColor: '#fff',
            titleColor: '#1e293b',
            bodyColor: '#1e293b',
            borderColor: '#e9ecef',
            borderWidth: 1,
            pointRadius: 2,
            usePointStyle: true,
            boxWidth: 8,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [4, 4]
            },
            ticks: {
              callback: function(value, index, ticks) {
                return parseInt(value).toLocaleString() + ' EUR';
              },
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 12,
                family: "Noto Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#64748B"
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [4, 4]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 12,
                family: "Noto Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#64748B"
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="corporate-ui-dashboard-main/assets/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>
</body>

</html>