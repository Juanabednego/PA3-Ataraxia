<!DOCTYPE html>
<html lang="en">
@include('layouts/Navbar')
  <main class="main">
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
              <a href="/reservation"
         class="btn btn-lg mt-3"
         style="background-color:#cd02caca; color:rgb(255, 255, 255); border-radius: 30px; padding: 12px 32px; font-weight: bold; box-shadow: 0 4px 12px rgba(0,0,0,0.2); transition: all 0.3s;">
        Reservation
      </a>
          </div>
      </div>
    </section>
    <!-- /Hero Section -->
     
    <section id="events" class="events section py-5">
    <div class="container-fluid" data-aos="fade-up">
    <h2 class="text-center fw-bold mb-5">Upcoming Event</h2>

    <div class="row g-4 px-5">
      @foreach($events as $event)
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 shadow-sm border-0 d-flex flex-column">
            <img src="{{ asset($event->image) }}" class="card-img-top" alt="{{ $event->name }}" style="height: 400px; object-fit: cover;">
            <div class="card-body d-flex flex-column text-center">
              <h5 class="card-title mb-3">{{ $event->name }}</h5>
              @php
                $link = auth()->check() ? route('pilihkursi') : route('login');
              @endphp
              <a href="{{ $link }}" class="btn btn-sm mt-auto text-white w-auto mx-auto rounded-pill" style="background-color: #883899; border: none;">
                Beli Tiket
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
   <!-- Menu Section -->
   <section id="menu" class="hero section light-background">
      <div class="container">
          <div class="hero-background">
              <img src="assets/img/about-2.jpg" alt="Ataraxia Balige">
              <div class="overlay"></div>
          </div>
          <div class="hero-content">
              <p style="color: white fw-bold">Endles Delicious, Savor Every Bite</p>
              <a href="/menu"
         class="btn btn-lg mt-3"
         style="background-color:#cd02caca; color:rgb(255, 255, 255); border-radius: 30px; padding: 12px 32px; font-weight: bold; box-shadow: 0 4px 12px rgba(0,0,0,0.2); transition: all 0.3s;">
        Explore Menu
      </a>
          </div>
      </div>
    </section>

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
                  <span>Mantap selalu</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <h3>Roberto Samuel Butarbutar</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-2 text-center">
            <img src="{{ asset('assets/img/Roberto.jpg') }}" class="img-fluid testimonial-img" alt="">
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
                  <span>Mantap Djiwa</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <h3>Juan Sihombing</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-2 text-center">
            <img src="{{ asset('assets/img/Juan.jpg') }}" class="img-fluid testimonial-img" alt="">
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
                  <span>Lanjutkan Anak Muda</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <h3>Jakob Simatupang</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-2 text-center">
            <img src="{{ asset('assets/img/Alvina.jpg') }}" class="img-fluid testimonial-img" alt="">
            </div>
          </div>
        </div>
      </div><!-- End testimonial item -->
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
</section><!-- /Testimonials Section -->
      
    

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

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span class="description-title">Lokasi</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
        </div><!-- End Google Maps --> <br><br>
        <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span class="description-title">Contact us & Feedback</span></p>
        </div>

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
              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>
  @include('layouts/footer')

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
<!-- Modal Informasi Akun -->
@auth
<div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="accountModalLabel">Informasi Akun</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
      </div>
      <div class="modal-footer">
        <a href="{{ route('akun') }}" class="btn btn-primary">Lihat Selengkapnya</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
@endauth

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