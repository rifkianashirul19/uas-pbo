<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>FJ Grooming-Cat Hotel-Pacak</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/65.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>
  @include('navbar')
  <section class="hero-section" id="hero">
    <div class="wave">
      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path
              d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
              id="Path"></path>
          </g>
        </g>
      </svg>
    </div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-8 text-center text-lg-start">
              <h1 data-aos="fade-right">Grooming - Cat Hotel - Pacak</h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Menjaga dan merawat kesehatan kucing Anda.</p>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="{{ route('login') }}"
                  class="btn btn-outline-white">Gunakan Jasa Kami Sekarang!</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main id="main">
    <section class="section" id="tentang-kami">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-5" data-aos="fade-up">
          <h2 class="section-heading">Tentang Kami</h2>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto">
            <h2 class="mb-4">FJ Grooming</h2>
            <p class="mb-4" style="text-align: justify;">FJ grooming adalah sebuah tempat yang tepat untuk merawat
              peliharaan anda. Kami menyediakan berbagai macam pelayanan seperti Grooming, Cat Hotel, dan Pacak. Dengan
              dedikasi yang tinggi terhadap kenyamanan serta cara cinta terhadap hewan, kami memberikan rasa percaya
              terhadap setiap pelanggan yang datang. Owner kami Bapak FJ mendirikan usaha ini dengan tujuan untuk
              membantu merawat peliharaan ketika pelanggan sedang sibuk atau pergi keluar kota sehingga hewan kesayangan
              anda tetap terawat.</p>
            <p></p>
          </div>
          <div class="col-md-4" data-aos="fade-left">
            <img src="assets/img/latar.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <section class="section" id="pelayanan">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-5" data-aos="fade-up">
          <h2 class="section-heading">Pelayanan Yang Kami Berikan</h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-people"></i>
              </div>
              <h3 class="mb-3">Reguler Grooming cat</h3>
              <p></p>
            </div>
          </div>
          <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="fa-solid fa-scissors" style="color: #ffffff;"></i>
              </div>
              <h3 class="mb-3">Grooming Cat With Fungus Treatment</h3>
              <p></p>
            </div>
          </div>
          <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="fa-solid fa-hotel" style="color: #ffffff;"></i>
              </div>
              <h3 class="mb-3">Cat Hotel</h3>
              <p></p>
            </div>
          </div>
          <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="fa-solid fa-heart" style="color: #ffffff;"></i>
              </div>
              <h3 class="mb-3">Pacak</h3>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="harga">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-5" data-aos="fade-up">
          <h2 class="section-heading">Harga Yang Kami Tawarkan</h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="card text-center" style="height: 12rem" data-aos="fade-up">
              <div class="card-body">
                <h5 class="card-title">Reguler Grooming Cat</h5>
                <br>
                <p class="card-text">Rp. 100k / hari</p>
                <a href="{{ route('login') }}" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card text-center" style="height: 12rem" data-aos="fade-up">
              <div class="card-body">
                <h5 class="card-title">Grooming Cat With Fungus Treatment</h5>
                <p class="card-text">Rp. 120k / hari</p>
                <a href="{{ route('login') }}" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card text-center" style="height: 12rem" data-aos="fade-up">
              <div class="card-body">
                <h5 class="card-title">Cat Hotel</h5>
                <br>
                <p class="card-text">Rp. 50k / hari</p>
                <a href="{{ route('login') }}" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="galeri">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Galeri FJ</h2>
          </div>
        </div>
        <p class="page-description text-center"></p>
        <div class="tz-gallery">
          <div class="row">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="assets/img/FJ/DSC_0039.JPG">
                  <img src="assets/img/FJ/DSC_0039.JPG" alt="Bridge" class="img-fluid">
                </a>
              </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="assets/img/FJ/DSC_0055.JPG">
                  <img src="assets/img/FJ/DSC_0055.JPG" alt="Park" class="img-fluid">
                </a>
              </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="assets/img/FJ/DSC_0063.JPG">
                  <img src="assets/img/FJ/DSC_0063.JPG" alt="Tunnel" class="img-fluid">
                </a>
              </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="assets/img/FJ/DSC_0065.JPG">
                  <img src="assets/img/FJ/DSC_0065.JPG" alt="Traffic" class="img-fluid">
                </a>
              </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="assets/img/FJ/DSC_0050.JPG">
                  <img src="assets/img/FJ/DSC_0050.JPG" alt="Coast" class="img-fluid">
                </a>
              </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="assets/img/FJ/DSC_0068.JPG">
                  <img src="assets/img/FJ/DSC_0068.JPG" alt="Rails" class="img-fluid">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="text-center text-lg-start text-white" style="background-color: #6495ED">
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <p class="fs-6">Batu Ampar, Kec. Balikpapan Utara, Kota Balikpapan, Kalimantan Timur 76136</p>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.940080452408!2d116.86528557364643!3d-1.2021969355372295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df149ec899a0aff%3A0x604eccc289f4bbf4!2sFJ%20Grooming!5e0!3m2!1sid!2sid!4v1700019201374!5m2!1sid!2sid"
              width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold text-white">Social Media</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #ffffff; height: 2px" />
            <p>
              <a href="https://www.instagram.com/fjbalikpapan/" class="text-white"><i class="fa-brands fa-instagram"
                  style="color: #ffffff;"></i> fjbalikpapan</a>
            </p>
            <p>
              <a href="https://web.facebook.com/fj.grooming/?_rdc=1&_rdr" class="text-white"><i
                  class="fa-brands fa-facebook" style="color: #ffffff;"></i> FJ Grooming</a>
            </p>
            <p>
              <a href="https://www.tiktok.com/@fj_balikpapan" class="text-white"><i class="fa-brands fa-tiktok"
                  style="color: #ffffff;"></i> fj_balikpapan</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold text-white">Contact</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #ffffff; height: 2px" />
            <p><i class="fa fa-home mr-3"></i> Balikpapan, 76136, ID</p>
            <p><i class="fa fa-envelope mr-3"></i> FJGrooming@gmail.com</p>
            <p><i class="fa fa-phone mr-3"></i> + 62 813 4777 5333</p>
          </div>
        </div>
      </div>
    </section>
    <div class="text-center p-3" style="background-color: #0C5DFFCC">
      © 2023 Copyright :
      <a class="text-white" href="/">FJ Grooming</a>
    </div>
  </footer>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/1a4750aa4f.js" crossorigin="anonymous"></script>
</body>

</html>