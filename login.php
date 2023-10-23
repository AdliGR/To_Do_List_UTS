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
  <style>
    .typed-text {
      display: inline-block;
    }
  
    .welcome-text {
      font-weight: bold;
      font-size: 2em;
    }
  
    /* Animasi ketik teks */
    .typed-text::after {
      content: "";
      display: inline-block;
      width: 0;
      overflow: hidden;
      border-right: 0.15em solid orange; /* Ganti warna dengan warna yang sesuai */
      animation: typing 3s steps(30, end), blink-caret 0.5s step-end infinite;
    }
  
    @keyframes typing {
      from {
        width: 0;
      }
      to {
        width: 100%;
      }
    }
  
    @keyframes blink-caret {
      from, to {
        border-color: transparent;
      }
      50% {
        border-color: orange; /* Ganti warna dengan warna yang sesuai */
      }
    }
  </style>
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
  <!-- main Content -->
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="welcome-text"><span class="typed-text"></span></h3>
                  <p class="mb-0">Hello Silahkan masukan Email dan Password anda</p>
                </div>
                <div id="error-alert" class="alert alert-danger mt-3" style="display: none;">
                  Harap isi semua input sebelum melakukan login!
                </div>
                <div class="card-body">
                  <form action="login_proses.php" method="post">
                      <label>Email Address</label>
                      <div class="mb-3">
                          <input type="email" class="form-control" name="email" placeholder="Enter your email address" aria-label="Email" aria-describedby="email-addon">
                      </div>
                      <label>Password</label>
                      <div class="mb-3">
                          <input type="password" class="form-control" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                      </div>
                      <div class="text-center">
                          <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Sign in</button>
                      </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-xs mx-auto">
                    Belom punya akun?
                    <a href="register.php" class="text-dark font-weight-bold">Sign up</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="position-absolute w-40 top-0 end-0 h-100 d-md-block d-none">
                <div class="oblique-image position-absolute fixed-top ms-auto h-100 z-index-0 bg-cover ms-n8" style="background-image:url('corporate-ui-dashboard-main/assets/img/image-sign-in.jpg')">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   script tambahan   -->
  <script>
    function validateForm() {
      var email = document.getElementsByName('email')[0].value;
      var password = document.getElementsByName('password')[0].value;
      var errorAlert = document.getElementById('error-alert');
  
      if (email === '' || password === '') {
        errorAlert.style.display = 'block';
        return false;
      }
  
      return true;
    }
  </script>

<script>
  const words = ["Welcome", "Accueillir", "Dobro Pozhalovat", "Irasshaimase", "Mabuhay", "欢迎", "환영"];
  let wordIndex = 0;
  let textIndex = 0;
  let isDeleting = false;
  let typedText = document.querySelector('.typed-text');

  function type() {
    const currentWord = words[wordIndex];
    if (isDeleting) {
      typedText.textContent = currentWord.substring(0, textIndex - 1);
    } else {
      typedText.textContent = currentWord.substring(0, textIndex + 1);
    }

    if (!isDeleting && textIndex === currentWord.length) {
      isDeleting = true;
      setTimeout(function () {
        type();
      }, 1000);
    } else if (isDeleting && textIndex === 0) {
      isDeleting = false;
      wordIndex = (wordIndex + 1) % words.length;
      setTimeout(function () {
        type();
      }, 500);
    } else {
      setTimeout(type, isDeleting ? 50 : 100);
    }
    textIndex = isDeleting ? textIndex - 1 : textIndex + 1;
  }

  type();
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