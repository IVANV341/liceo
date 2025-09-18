<!doctype html>
<html lang="es" data-bs-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="@yield('description', '')">
  <meta name="keywords" content="colegio, educación, Bucaramanga, bilingüe, formación académica">
  <meta name="author" content="">
  
  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="@yield('title','')">
  <meta property="og:description" content="@yield('description', '')">
  <meta property="og:image" content="{{ asset('img/logo.jpg') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">

  <title>@yield('title','')</title>

  <!-- External CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

  <style>
    :root {
      --brand-primary: #b91c1c;     /* Rojo institucional */
      --brand-secondary: #ffffff;   /* Blanco */
      --brand-accent: #7f1d1d;      /* Rojo oscuro */
      --brand-light: #fee2e2;       /* Rojo muy claro */
      --text-dark: #111827;
      --text-muted: #6b7280;
      --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
      --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
      --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1);
      --transition-base: all 0.3s ease;
    }

    /* SMOOTH SCROLLING */
    html {
      scroll-behavior: smooth;
    }

    /* TOPBAR */
    .topbar-wrap {
      background: linear-gradient(135deg, var(--brand-primary) 0%, var(--brand-accent) 100%);
      color: #fff;
      font-size: 0.875rem;
    }
    .topbar-wrap a {
      color: #fff;
      opacity: 0.9;
      text-decoration: none;
      transition: var(--transition-base);
    }
    .topbar-wrap a:hover {
      opacity: 1;
      text-decoration: underline;
    }

    /* LOGO/BRANDING */
    .branding {
      background: #fff;
      border-bottom: 1px solid #e5e7eb;
      box-shadow: var(--shadow-sm);
    }
    .branding img {
      max-height: 140px;
      width: auto;
      transition: var(--transition-base);
    }
    .branding img:hover {
      transform: scale(1.02);
    }

    /* NAVBAR */
    .navbar {
      background: var(--brand-primary);
      box-shadow: var(--shadow-md);
    }
    .navbar .nav-link, 
    .navbar-brand {
      color: #fff !important;
      font-weight: 500;
      transition: var(--transition-base);
      position: relative;
    }
    .navbar .nav-link:hover {
      color: var(--brand-light) !important;
      transform: translateY(-1px);
    }
    .navbar .nav-link.active {
      font-weight: 700;
      color: var(--brand-light) !important;
    }
    .navbar .nav-link.active::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 50%;
      transform: translateX(-50%);
      width: 30px;
      height: 3px;
      background: var(--brand-light);
      border-radius: 2px;
    }

    /* DROPDOWN */
    .dropdown-menu {
      border: none;
      box-shadow: var(--shadow-lg);
      border-radius: 8px;
      padding: 0.5rem 0;
      margin-top: 0.5rem;
    }
    .dropdown-item {
      padding: 0.75rem 1.5rem;
      transition: var(--transition-base);
      font-weight: 500;
    }
    .dropdown-item:hover {
      background-color: var(--brand-light);
      color: var(--brand-primary);
      transform: translateX(5px);
    }

    /* FLOATING BUTTONS */
    .floating-btn {
      position: fixed;
      right: 20px;
      bottom: 20px;
      z-index: 1040;
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }
    .floating-btn a {
      border-radius: 25px;
      padding: 0.75rem 1.25rem;
      font-weight: 600;
      box-shadow: var(--shadow-lg);
      text-decoration: none;
      transition: var(--transition-base);
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.875rem;
    }
    .floating-btn a:hover {
      transform: translateY(-2px);
      box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1);
    }
    .btn-admisiones {
      background: var(--brand-primary);
      color: #fff;
      border: 2px solid var(--brand-primary);
    }
    .btn-admisiones:hover {
      background: var(--brand-accent);
      border-color: var(--brand-accent);
      color: #fff;
    }
    .btn-pqrsd {
      background: #fff;
      color: var(--brand-primary);
      border: 2px solid var(--brand-primary);
    }
    .btn-pqrsd:hover {
      background: var(--brand-primary);
      color: #fff;
    }

    /* UTILITIES */
    .section-title {
      border-left: 6px solid var(--brand-primary);
      padding-left: 0.75rem;
      font-weight: 800;
      color: var(--brand-accent);
      margin-bottom: 2rem;
    }

    /* FOOTER */
    footer {
      background: linear-gradient(135deg, var(--brand-accent) 0%, #4c0f0f 100%);
      color: #ffecec;
      margin-top: 4rem;
    }
    footer a {
      color: #ffecec;
      text-decoration: none;
      transition: var(--transition-base);
    }
    footer a:hover {
      color: var(--brand-light);
      transform: translateY(-1px);
    }
    footer .social-icons a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      margin: 0 0.25rem;
      font-size: 1.2rem;
    }
    footer .social-icons a:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-2px);
    }

    /* RESPONSIVE IMPROVEMENTS */
    @media (max-width: 991.98px) {
      .floating-btn {
        right: 15px;
        bottom: 15px;
      }
      .floating-btn a {
        padding: 0.6rem 1rem;
        font-size: 0.8rem;
      }
    }
    
    @media (max-width: 576px) {
      .branding img {
        max-height: 100px;
      }
      .section-title {
        font-size: 1.25rem;
      }
      .topbar-wrap .d-flex {
        flex-direction: column;
        gap: 0.5rem;
      }
    }
  </style>

  @stack('head')
</head>
<body>

  {{-- TOPBAR: Información de contacto y redes sociales --}}
  <div class="topbar-wrap py-2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8">
          <div class="d-flex flex-wrap align-items-center gap-3">
            <span><i class="bi bi-telephone-fill"></i> PBX: </span>
            <span><i class="bi bi-geo-alt-fill"></i> </span>
            <span><i class="bi bi-envelope-fill"></i> </span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-md-end justify-content-start align-items-center gap-2 mt-2 mt-md-0">
            <small class="me-2">Síguenos:</small>
            <a href="" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- BRANDING: Logo centrado --}}
  <div class="branding py-4">
    <div class="container text-center">
      <a href="{{ route('home') }}" class="d-inline-block" title="Ir al inicio">
        <img src="{{ asset('img/logo/logo_colegio.jpg') }}" 
             alt=" - Logo institucional"
             loading="lazy">
      </a>
    </div>
  </div>

  {{-- NAVBAR --}}
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top" role="navigation" aria-label="Menú principal">
    <div class="container">
      <a class="navbar-brand fw-bold d-lg-none" href="{{ route('home') }}">
        
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
              data-bs-target="#mainNav" aria-controls="mainNav"
              aria-expanded="false" aria-label="Mostrar menú de navegación">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="mainNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" 
               href="{{ route('home') }}">
              <i class="bi bi-house-door me-1"></i>Inicio
            </a>
          </li>

          {{-- El Colegio --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->routeIs('colegio*') ? 'active' : '' }}" 
               href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-building me-1"></i>El Colegio
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('colegio') }}">
                <i class="bi bi-info-circle me-2"></i>Reseña Histórica
              </a></li>
              <li><a class="dropdown-item" href="{{ route('colegio.mision') }}">
                <i class="bi bi-bullseye me-2"></i>Misión y Visión
              </a></li>
              <li><a class="dropdown-item" href="{{ route('colegio.politica_de_calidad') }}">
                <i class="bi bi-award me-2"></i>Política de Calidad
              </a></li>
            </ul>
          </li>

          {{-- Servicios --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->routeIs('servicios*') ? 'active' : '' }}" 
               href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-mortarboard me-1"></i>Servicios
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('servicios') }}">
                <i class="bi bi-list-ul me-2"></i>Todos los Servicios
              </a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('servicios.guarderia') }}">
                <i class="bi bi-emoji-smile me-2"></i>Guardería
              </a></li>
              <li><a class="dropdown-item" href="{{ route('servicios.preescolar') }}">
                <i class="bi bi-balloon me-2"></i>Preescolar
              </a></li>
              <li><a class="dropdown-item" href="{{ route('servicios.basica_primaria') }}">
                <i class="bi bi-book me-2"></i>Básica Primaria
              </a></li>
              <li><a class="dropdown-item" href="{{ route('servicios.basica_secundaria') }}">
                <i class="bi bi-journal-text me-2"></i>Básica Secundaria
              </a></li>
              <li><a class="dropdown-item" href="{{ route('servicios.educacion_media') }}">
                <i class="bi bi-mortarboard-fill me-2"></i>Educación Media (10-11)
              </a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('noticias*') ? 'active' : '' }}" 
               href="{{ route('noticias') }}">
              <i class="bi bi-newspaper me-1"></i>Noticias
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('actividades') ? 'active' : '' }}" 
               href="{{ route('actividades') }}">
              <i class="bi bi-calendar-event me-1"></i>Actividades
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('galeria') ? 'active' : '' }}" 
               href="{{ route('galeria') }}">
              <i class="bi bi-images me-1"></i>Galería
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}" 
               href="{{ route('contacto') }}">
              <i class="bi bi-envelope me-1"></i>Contacto
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- CONTENIDO PRINCIPAL --}}
  <main id="main-content" role="main">
    @yield('content')
  </main>

  {{-- BOTONES FLOTANTES --}}
  <div class="floating-btn">
    <a class="btn btn-admisiones" href="{{ route('admisiones') }}" title="Proceso de admisiones">
      <i class="bi bi-pencil-square"></i>
      <span>Admisiones</span>
    </a>
    <a class="btn btn-pqrsd" href="{{ route('pqrsd') }}" title="Peticiones, quejas, reclamos y sugerencias">
      <i class="bi bi-megaphone"></i>
      <span>PQRSD</span>
    </a>
  </div>

  {{-- FOOTER --}}
  <footer class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4">
          <h5 class="fw-bold mb-3"></h5>
          <p class="mb-3"></p>
          <div class="social-icons">
            <a href="" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
            <a href="" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="col-lg-4">
          <h6 class="fw-bold mb-3">Contacto</h6>
          <p class="mb-2"><i class="bi bi-geo-alt-fill me-2"></i></p>
          <p class="mb-2"></p>
          <p class="mb-2"><i class="bi bi-telephone-fill me-2"></i>PBX: </p>
          <p><i class="bi bi-envelope-fill me-2"></i></p>
        </div>
        <div class="col-lg-4">
          <h6 class="fw-bold mb-3">Enlaces Rápidos</h6>
          <ul class="list-unstyled">
            <li><a href="{{ route('admisiones') }}" class="text-decoration-none">Proceso de Admisiones</a></li>
            <li><a href="{{ route('pqrsd') }}" class="text-decoration-none">PQRSD</a></li>
            <li><a href="{{ route('contacto') }}" class="text-decoration-none">Contacto</a></li>
            <li><a href="#" class="text-decoration-none">Política de Privacidad</a></li>
          </ul>
        </div>
      </div>
      <hr class="my-4 opacity-25">
      <div class="row align-items-center">
        <div class="col-md-8">
          <small>© {{ date('Y') }} . Todos los derechos reservados.</small>
        </div>
        <div class="col-md-4 text-md-end mt-2 mt-md-0">
          <small>Desarrollado con ❤️ para la educación</small>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Auto-hide navbar on scroll (opcional)
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      
      if (scrollTop > lastScrollTop && scrollTop > 100) {
        navbar.style.transform = 'translateY(-100%)';
      } else {
        navbar.style.transform = 'translateY(0)';
      }
      
      lastScrollTop = scrollTop;
    });
  </script>

  @stack('scripts')
</body>
</html>