<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="#" name="#">
  <title>Ataraxia Cafe</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
<link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
/* Truncate teks jadi max 2 baris */
.text-truncate-2-lines {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}

/* Hover lembut untuk UX bagus */
.hover-highlight:hover {
  background-color: #f8f9fa;
  transition: all 0.3s ease-in-out;
  border-left: 4px solid #0d6efd;
}

/* Bayangan dan radius lembut */
.dropdown-menu {
  border-radius: 12px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
  padding: 0.5rem 0;
  max-height: 400px;
  overflow-y: auto;
  backdrop-filter: blur(10px);
}

/* Badge animasi pulse */
#notificationBadge {
  animation: pulseBadge 1.5s infinite;
  font-size: 0.65rem;
  padding: 0.3em 0.5em;
}

@keyframes pulseBadge {
  0% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.2); opacity: 0.8; }
  100% { transform: scale(1); opacity: 1; }
}
</style>

</head>

<body class="index-page" >

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Logo Image -->
        <img src="assets/img/logoo.png" alt="Ataraxia Logo" class="logo-img">
        <h1 class="sitename">Ataraxia</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('index') }}" class="active">Home</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="{{ route('index') }}">Reservation</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>


      @auth
<div class="nav-item dropdown position-relative me-3">
  <a class="nav-link dropdown-toggle d-flex align-items-center position-relative"
     href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="bi bi-bell-fill fs-4 text-dark"></i>
    <span id="notificationBadge"
          class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger shadow-sm"
          style="display: none;">
      1
    </span>
  </a>

  <ul class="dropdown-menu dropdown-menu-end animate__animated animate__fadeIn"
      aria-labelledby="notificationDropdown"
      id="notificationDropdownList"
      style="min-width: 340px; max-width: 380px;">
    
    <li class="dropdown-header fw-bold text-dark px-3 pt-2">🔔 Notifikasi Terbaru</li>

    <!-- Default isi sebelum AJAX -->
    <li>
      <a class="dropdown-item py-2 px-3 d-flex align-items-start gap-3 hover-highlight" href="#">
        <i class="bi bi-info-circle-fill text-muted fs-5 mt-1"></i>
        <div class="flex-grow-1">
          <div class="fw-semibold text-muted text-truncate-2-lines">Belum ada notifikasi</div>
          <small class="text-muted">Kamu akan melihatnya di sini</small>
        </div>
      </a>
    </li>

  </ul>
</div>
@endauth



      <a href="/book-table" class="btn-book-table">Book Table</a>

    </div>
</header>


  <main class="main">

    <!-- Hero Section -->
  <!-- Hero Section -->
  <section id="hero" class="hero section light-background">
      <div class="container">
          <div class="hero-background">
              <img src="assets/img/bgstory.jpg" alt="Ataraxia Balige">
              <div class="overlay"></div>
          </div>
          <div class="hero-content">
              <h1 style="font-family: 'Dash Horizon', sans-serif" >Ataraxia</h1><br>
              <p style="color: white">ATARAKAN PERASAANMU DI ATARAXIA</p>
              <p class="open-hours" style="color: white">We are open from <br> 10.00 AM until 12.00 AM</p>
              <a href="/book-table" class="btn-book-table">Book Table</a>
          </div>
      </div>
    </section>
    <!-- /Hero Section -->


   <!-- Menu Section -->
   <section id="menu" class="menu section" >

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h1>Menu</h1>
 
</div><!-- End Section Title -->

<main class="main">
<div class="container-menu">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li class="active"><img src="{{ asset('assets/img/Marsada.jpg') }}" alt="Makanan">Makanan</li>
            <li><img src="{{ asset('assets/img/Marsada.jpg') }}" alt="Minuman">Minuman</li>
        </ul>
    </div>

    <!-- Konten Menu -->
    <div class="menu-content">
        <div class="menu-item">
            <img src="{{ asset('assets/img/menu/menu-item-1.png') }}" alt="Nasi Liwet Ayam">
            <div class="menu-details">
                <h3>Makanan</h3>
                <h1>Nasi Liwet Ayam</h1>
                <p>Perpaduan antara nasi liwet dan ayam yang menyajikan perpaduan yang sempuran</p>
                <h2>Rp55.000</h2>
            </div>
        </div>
        <!-- Navigasi -->
        <div class="navigation">
            <button class="nav-btn">&lt;</button>
            <button class="nav-btn">&gt;</button>
        </div>
    </div>
</div>
</main>

 <!-- About Section -->

 <section id="about" class="about section" style="background: url('assets/img/bgstory.jpg') no-repeat center center/cover; padding: 80px 0; color: white;">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h1> Our Story <h1>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">
    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
      <img src="assets/img/story.jpg" class="img-fluid mb-4" alt="">
    </div>
    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
      <div class="content ps-0 ps-lg-5">
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <ul>
          <li> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit.
         Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
        </ul>
        <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
        </p>
      </div>
    </div>
  </div>

</div>

</section><!-- /About Section -->
  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section light-background">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h1>Review</h1>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="swiper init-swiper">
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        }
      }
    </script>
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-6">
              <div class="testimonial-content">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-2 text-center">
            <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="img-fluid testimonial-img" alt="">

            </div>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-6">
              <div class="testimonial-content">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-2 text-center">
            <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="img-fluid testimonial-img" alt="">

            </div>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-6">
              <div class="testimonial-content">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-2 text-center">
            <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="img-fluid testimonial-img" alt="">

            </div>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-6">
              <div class="testimonial-content">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-2 text-center">
            <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="img-fluid testimonial-img" alt="">

            </div>
          </div>
        </div>
      </div><!-- End testimonial item -->

    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>

</section><!-- /Testimonials Section -->


     
    <!-- Events Section -->
    <section id="events" class="events section">
  <div class="container section-title" data-aos="fade-up">
    <h1>Events</h1>
  </div>
  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 1
            }
          }
        }
      </script>

      <div class="swiper-wrapper">
  @foreach($events as $event)
    @auth
      <a href="{{ route('pilihkursi') }}" class="swiper-slide event-item d-flex flex-column justify-content-end text-decoration-none"
         style="background-image: url('{{ asset($event->image) }}')">
        <h3>{{ $event->name }}</h3>
        <p class="description">{{ $event->description }}</p>
      </a>
    @endauth

    @guest
      <a href="{{ route('login') }}" class="swiper-slide event-item d-flex flex-column justify-content-end text-decoration-none"
         style="background-image: url('{{ asset($event->image) }}')">
        <h3>{{ $event->name }}</h3>
        <p class="description">{{ $event->description }}</p>
      </a>
    @endguest
  @endforeach
</div>

      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<!-- /Events Section -->
      

    <!-- Book A Table Section -->
    <section id="reservation" class="reservation section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Book A Table</h2>
        <p>Book Your Table</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

        <div class="reservation-container">
  <div class="reservation-bg" style="background-image: url(assets/img/Table.jpg);"></div>

  <div class="reservation-overlay">
  <a class="btn-getstarted" href="/reservation">Reservation Now</a>
  
  </div>
</div>

<style>
  .reservation-container {
    position: relative;
    width: 100%;
    height: 600px; /* Sesuaikan tinggi sesuai kebutuhan */
    overflow: hidden;
  }

  .reservation-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    
  }

  .reservation-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(0, 0, 0, 0.4); /* Efek gelap transparan */
  }

  .reservation-button {
    background: #ff9900;
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 18px;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  .reservation-button:hover {
    background: #e68a00;
  }
  #notificationBadge {
    position: absolute;
    top: 0;
    right: 0;
    font-size: 12px;
    background-color: red;
    color: white;
    padding: 5px;
    border-radius: 50%;
}

</style>

        </div>

      </div>

    </section><!-- /Book A Table Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p><span>Check</span> <span class="description-title">Our Gallery</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span class="description-title">Contact Us</span> <span>& Feedback</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Opening Hours<br></h3>
                <p><strong>Mon-Sat:</strong> 11AM - 23PM; <strong>Sunday:</strong> Closed</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div> <br>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">
        <div class="container">
            <div class="row gy-3">
                @if(isset($footers['address']))
                    @php $address = json_decode($footers['address']->content, true); @endphp
                    <div class="col-lg-3 col-md-6 d-flex">
                        <i class="bi bi-geo-alt icon"></i>
                        <div class="address">
                            <h4>Address</h4>
                            <p>{{ $address['street'] }}</p>
                            <p>{{ $address['city'] }}, {{ $address['zip'] }}</p>
                        </div>
                    </div>
                @endif
                @if(isset($footers['contact']))
                    @php $contact = json_decode($footers['contact']->content, true); @endphp
                    <div class="col-lg-3 col-md-6 d-flex">
                        <i class="bi bi-telephone icon"></i>
                        <div>
                            <h4>Contact</h4>
                            <p>
                                <strong>Phone:</strong> <span>{{ $contact['phone'] }}</span><br>
                                <strong>Email:</strong> <span>{{ $contact['email'] }}</span><br>
                            </p>
                        </div>
                    </div>
                @endif
                @if(isset($footers['opening_hours']))
                    @php $opening_hours = json_decode($footers['opening_hours']->content, true); @endphp
                    <div class="col-lg-3 col-md-6 d-flex">
                        <i class="bi bi-clock icon"></i>
                        <div>
                            <h4>Opening Hours</h4>
                            <p>
                                <strong>Mon-Sat:</strong> <span>{{ $opening_hours['mon_sat'] }}</span><br>
                                <strong>Sunday:</strong> <span>{{ $opening_hours['sunday'] }}</span>
                            </p>
                        </div>
                    </div>
                @endif
                @if(isset($footers['social_links']))
                    @php $social_links = json_decode($footers['social_links']->content, true); @endphp
                    <div class="col-lg-3 col-md-6">
                        <h4>Follow Us</h4>
                        <div class="social-links d-flex">
                            <a href="{{ $social_links['twitter'] }}" class="twitter"><i class="bi bi-twitter-x"></i></a>
                            <a href="{{ $social_links['facebook'] }}" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="{{ $social_links['instagram'] }}" class="instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Ataraxia</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
        <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
    </footer>

    </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
  function loadUserNotifikasi() {
    $.get("{{ route('load-notifikasi') }}", function (data) {
      let html = "";

      if (data.length > 0) {
        $("#notificationBadge").show().text(data.length);

        data.forEach(n => {
          html += `
            <li>
              <a href="#" 
                 class="dropdown-item py-2 px-3 d-flex align-items-start gap-3 hover-highlight view-notif-detail"
                 data-message="${n.message}" 
                 data-time="${n.created_at}">
                <i class="bi bi-check-circle-fill text-success fs-5 mt-1"></i>
                <div class="flex-grow-1">
                  <div class="fw-semibold text-dark text-truncate-2-lines">${n.message}</div>
                  <small class="text-muted">${n.created_at}</small> <br>
                  <small class="text-muted">"Klik to detail"</small>
                </div>
              </a>
            </li>
          `;
        });

      } else {
        html = `<li>
          <a class="dropdown-item py-2 px-3 text-muted">Tidak ada notifikasi</a>
        </li>`;
        $("#notificationBadge").hide();
      }

      $("#notificationDropdownList").html(html);
    });
  }

  loadUserNotifikasi();
  setInterval(loadUserNotifikasi, 10000); // 10 detik
</script>

<script>
  $(document).on("click", ".view-notif-detail", function (e) {
    e.preventDefault();
    const message = $(this).data("message");
    const time = $(this).data("time");

    $("#notificationDetailMessage").text(message);
    $("#notificationDetailTime").text("Diterima: " + time);
    $("#notificationDetailModal").modal("show");
  });
</script>
<!-- MODAL DETAIL NOTIFIKASI -->
<div class="modal fade" id="notificationDetailModal" tabindex="-1" aria-labelledby="notificationDetailLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content shadow rounded-3">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="notificationDetailLabel">Detail</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <p class="mb-1 fw-semibold" id="notificationDetailMessage">...</p>
        <p style="font-size: 12px;">Mohon tunjukkan detail ini kepada tim penulis guna keperluan verifikasi akses Anda.</p>
 <br>
        <small class="text-muted" id="notificationDetailTime">...</small>
      </div>
    </div>
  </div>
</div>

</body>

</html>