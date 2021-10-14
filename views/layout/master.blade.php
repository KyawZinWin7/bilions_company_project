<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bilions</title>

  <link rel="icon" type="image/png" href="/assets/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="/assets/favicon-16x16.png" sizes="16x16" />
  <link rel='shortcut icon' type='image/x-icon' href='/assets/favicon.ico' />

  <meta property="og:image" content="/assets/images/meta/meta1.png" />
  <meta property="og:title" content="Web & Mobile Design / Development" />
  <meta property="og:description"
    content="We are team of talented designers/developer who make outstanding websites and mobile application." />

  <!-- twitter share card meta -->
  <meta name="twitter:card"
    content="We are team of talented designers/developer who make outstanding websites and mobile application." />
  <meta name="theme-color" content="#141312">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="/assets/vendors/tw-cen-mt/font-face.css">
  <link rel="stylesheet" href="/assets/css/style.css?v={{ $version }}">

  <!-- Remember to include jQuery :) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>


<body>
  <div class="body-container container-fluid">
    <!-- nav bar section -->
    <section>
      <div class="container pt-3 pb-5">
        <div class="row header">
          <div class="col-lg-4 col-4">
            <div class="logo">
              <h3>Bilions</h3>
            </div>
          </div>
          <div class="col-2 d-sm-block d-xs-block d-md-none">
            <!-- <button class="btn btn-primary" id="showMenu">Hamburger Menu</button>  -->
            <div id="showMenu" class="icons">
              <svg viewBox="0 0 32 42" xmlns="http://www.w3.org/2000/svg" class="icon"
                onclick="this.classList.toggle('active')">
                <g transform="matrix(1,0,0,1,-389.5,-264.004)">
                  <g id="arrow_left2">
                    <g transform="matrix(1,0,0,1,0,5)">
                      <path id="top"
                        d="M390,270L420,270L420,270C420,270 420.195,250.19 405,265C389.805,279.81 390,279.967 390,279.967" />
                    </g>
                    <g transform="matrix(1,1.22465e-16,1.22465e-16,-1,0.00024296,564.935)">
                      <path id="bottom"
                        d="M390,270L420,270L420,270C420,270 420.195,250.19 405,265C389.805,279.81 390,279.967 390,279.967" />
                    </g>
                    <path id="middle" d="M390,284.967L420,284.967" />
                  </g>
                </g>
              </svg>
            </div>
          </div>
          <div class="col-md-8 links" id="menu">
            <div class="d-flex justify-content-end">
              <a href="/">
                <div class="nav-item">Home</div>
              </a>
              <a href="/#about">
                <div class="nav-item">About</div>
              </a>
              <a href="/#service">
                <div class="nav-item">Service</div>
              </a>
              <a href="/#ourteam">
                <div class="nav-item">OurTeam</div>
              </a>
              <a href="/#contact">
                <div class="nav-item">Contact</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- nav bar section end -->


    @yield('body')


    <!-- footer section-5 -->
    <section>
      <div class="row mt-5">
        <div class="col-md-8 text-center m-auto">
          <p class="pt-3 text-white"><i class="far fa-copyright mr-1"></i>Copyright Bilions. All right reserved.</p>
        </div>
      </div>
    </section>
    <!-- end footer section-5 -->
  </div>
</body>
<script src="/assets/js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HP099MPDF5"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-HP099MPDF5');
</script>

</html>
