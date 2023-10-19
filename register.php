<!--
=========================================================
* Corporate UI - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/corporate-ui
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
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
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="position-absolute w-40 top-0 start-0 h-100 d-md-block d-none">
                <div class="oblique-image position-absolute d-flex fixed-top ms-auto h-100 z-index-0 bg-cover me-n8" style="background-image:url('corporate-ui-dashboard-main/assets/img/image-sign-upp.jpg')">
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-black text-dark display-6">Sign up</h3>
                  <p class="mb-0">Halo Silahkan Mendaftar</p>
                </div>
                <div id="success-alert" class="alert alert-success mt-3" style="display: none;">
                  Registrasi berhasil. Silakan login.
                </div>
                <div id="error-alert" class="alert alert-danger mt-3" style="display: none;">
                  Harap isi semua input sebelum melanjutkan.
                </div>
                <div class="card-body">
                  <form action="register_proses.php" method="post">
                      <label>Username</label>
                      <div class="mb-3">
                          <input type="text" class="form-control" name="username" placeholder="Enter your username" aria-label="Username" aria-describedby="username-addon">
                      </div>
                      <label>Email Address</label>
                      <div class="mb-3">
                          <input type="email" class="form-control" name="email" placeholder="Enter your email address" aria-label="Email" aria-describedby="email-addon">
                      </div>
                      <label>Password</label>
                      <div class="mb-3">
                          <input type="password" class="form-control" name="password" placeholder="Create a password" aria-label="Password" aria-describedby="password-addon">
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Sign in</button>
                      </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-xs mx-auto">
                    Sudah Punya akun?
                    <a href="login.php" class="text-dark font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Script tambahan   -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const form = document.querySelector('form');
      const successAlert = document.getElementById('success-alert');
      const errorAlert = document.getElementById('error-alert');
  
      form.addEventListener('submit', function (e) {
        e.preventDefault();
  
        // Pemeriksaan validasi input
        const username = form.querySelector('input[name="username"]').value;
        const email = form.querySelector('input[name="email"]').value;
        const password = form.querySelector('input[name="password"]').value;
  
        if (username.trim() === '' || email.trim() === '' || password.trim() === '') {
          errorAlert.style.display = 'block';
          successAlert.style.display = 'none';
        } else {
          // Kirim formulir ke server dengan AJAX
          fetch('register_proses.php', {
            method: 'POST',
            body: new FormData(form),
          })
          .then(response => response.json())
          .then(data => {
            if (data.status === 'success') {
              successAlert.style.display = 'block';
              errorAlert.style.display = 'none';
            } else {
              errorAlert.style.display = 'block';
              successAlert.style.display = 'none';
            }
          })
          .catch(error => {
            console.error(error);
          });
        }
      });
    });
  </script>
    
  
  <!--   Core JS Files   -->
  <script src="corporate-ui-dashboard-main/assets/js/core/popper.min.js"></script>
  <script src="corporate-ui-dashboard-main/assets/js/core/bootstrap.min.js"></script>
  <script src="corporate-ui-dashboard-main/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="corporate-ui-dashboard-main/assets/js/plugins/smooth-scrollbar.min.js"></script>
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