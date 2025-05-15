<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="#" name="#">
  <title>Ataraxia Cafe</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="{{ asset('assets/img/Ataraxialogo.jpg') }}" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    .text-truncate-2-lines {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .hover-highlight:hover {
      background-color: #f8f9fa;
      transition: all 0.3s ease-in-out;
      border-left: 4px solid #0d6efd;
    }

    .dropdown-menu {
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
      padding: 0.5rem 0;
      max-height: 400px;
      overflow-y: auto;
      backdrop-filter: blur(10px);
    }

    #notificationBadge {
      animation: pulseBadge 1.5s infinite;
      font-size: 0.65rem;
      padding: 0.3em 0.5em;
    }

    @keyframes pulseBadge {
      0% {
        transform: scale(1);
        opacity: 1;
      }

      50% {
        transform: scale(1.2);
        opacity: 0.8;
      }

      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    .btn-event {
      background: #8174A0;
      color: white;
      font-weight: 600;
      border-radius: 50px;
      padding: 12px 28px;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-event:hover {
      background: linear-gradient(135deg, #82789a 0%, #8174A0 100%);
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(122, 38, 128, 0.4);
    }

    .btn-event:disabled {
      background: #cccccc;
      cursor: not-allowed;
      transform: none;
      box-shadow: none;
    }
  </style>
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top py-3">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logoo.png" alt="Ataraxia Logo" class="logo-img">
        <h1 class="sitename">Ataraxia</h1>
      </a>

      <nav id="navmenu" class="navmenu ms-auto nav-bold">
        <ul class="d-flex align-items-center mb-0">
          <li><a href="{{ route('index') }}" class="active">Home</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="/menu">Menu</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="/reservation">Reservation</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      @auth
      <div class="nav-item dropdown position-relative ms-3">
        <a class="nav-link dropdown-toggle d-flex align-items-center position-relative"
          href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-bell-fill fs-4 text-dark"></i>
          <span id="notificationBadge"
            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger shadow-sm">
            1
          </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown" id="notificationDropdownList">
          <li class="dropdown-header fw-bold text-dark px-3 pt-2">🔔 Notifikasi Terbaru</li>
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

      <div class="dropdown d-inline ms-3">
        <button class="btn p-0 border-0 bg-transparent d-flex align-items-center"
          type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user fs-5 text-dark"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow rounded-3 border-0 mt-2" aria-labelledby="userDropdown">
          <li>
            <button class="dropdown-item py-2" data-bs-toggle="modal" data-bs-target="#accountModal">
              Akun Saya
            </button>
          </li>
          <li>
            <a class="dropdown-item py-2" href="/histori">
              Histori
            </a>
          </li>
          <li>
            <form action="{{ route('logout') }}" method="POST" class="m-0">
              @csrf
              <button type="submit" class="dropdown-item py-2 text-danger">Logout</button>
            </form>
          </li>
        </ul>
      </div>
      @endauth

      @guest
      <div class="d-inline ms-3">
        <a href="/login" class="btn p-0 border-0 bg-transparent d-flex align-items-center">
          <i class="fas fa-user fs-5 text-dark"></i>
        </a>
      </div>
      @endguest

    </div>
  </header>

  <main class="main">
    <section id="hero" class="hero section light-background">
      <div class="container">
        <div class="hero-background">
          <img src="assets/img/bgstory.jpg" alt="Ataraxia Balige">
          <div class="overlay"></div>
        </div>
        <div class="hero-content">
          <h1 style="font-family: 'Dash Horizon', sans-serif">Ataraxia</h1><br>
          <p style="color: white">ATARAKAN PERASAANMU DI ATARAXIA</p>
          <p class="open-hours" style="color: white">We are open from <br> 10:00 - 23:00</p>
          <a href="/reservation" class="btn btn-lg mt-3 btn-event">Reservation</a>
        </div>
      </div>
    </section>

    <section id="events" class="events section py-5">
      <div class="container" data-aos="fade-up">
        <h2 class="text-center fw-bold mb-5">Upcoming Event</h2>
        <div class="row g-4 justify-content-center">
          @foreach($events as $event)
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm border-0 d-flex flex-column position-relative overflow-hidden">
              <div class="position-absolute top-0 start-0 m-3 text-white text-center" style="z-index: 2;">
                <div style="background: radial-gradient(135deg, #82789a 0%, #8174A0 100%); border-radius: 50%; padding: 20px; font-size: 1rem;">
                  <small>HARGA MULAI</small><br>
                  <strong>Rp. {{ number_format($event->harga, 0, ',', '.') }}</strong>
                </div>
              </div>
              <div class="position-absolute top-0 end-0 m-2 px-3 py-1 bg-dark text-white rounded-pill">
                {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}
              </div>
              <img src="{{ asset($event->image) }}" class="card-img-top" alt="{{ $event->name }}" style="height: 400px; object-fit: cover;">
              <div class="card-body d-flex flex-column text-center">
                <h5 class="card-title mb-3 text-decoration-none fw-bold">{{ $event->name }}</h5>
                <p>{{ $event->description }}</p>
                <a href="{{ route('pilih-kursi', ['event_id' => $event->id]) }}" class="btn-event mt-auto">Beli Tiket</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </main>
</body>

</html>
