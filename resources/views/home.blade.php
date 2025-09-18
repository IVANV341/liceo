@extends('layouts.app')

@section('title', 'Inicio - Liceo Bilingüe Rodolfo R. Llinás')

@section('description', 'Bienvenidos al Liceo Bilingüe Rodolfo R. Llinás - Formación académica de excelencia en Bucaramanga')

@push('head')
<style>
  /* Estilos adicionales para la página de inicio */
  .hero-carousel {
    margin-top: 0;
  }
  
  .hero-carousel .carousel-item {
    position: relative;
    height: 500px; /* Altura fija para desktop */
    overflow: hidden;
  }
  
  .hero-carousel .carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Recorta la imagen manteniendo proporción */
    object-position: center center; /* Centra la imagen */
    filter: brightness(0.7);
    transition: transform 0.3s ease;
  }
  
  /* Hover effect opcional */
  .hero-carousel .carousel-item:hover img {
    transform: scale(1.05);
  }
  
  .hero-carousel .carousel-caption {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, 0.5);
    padding: 2rem;
    border-radius: 15px;
    backdrop-filter: blur(10px);
    max-width: 600px;
    width: 90%;
  }
  
  .hero-carousel .carousel-caption h1 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
  }
  
  .hero-carousel .carousel-caption p {
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
  }
  
  .welcome-section {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    padding: 5rem 0;
  }
  
  .welcome-section .section-title {
    text-align: center;
    margin-bottom: 3rem;
  }
  
  .welcome-section .section-title h2 {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--brand-accent);
    margin-bottom: 1rem;
  }
  
  .welcome-section .section-title .subtitle {
    font-size: 1.2rem;
    color: var(--text-muted);
    max-width: 600px;
    margin: 0 auto;
  }
  
  .feature-card {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    border: none;
  }
  
  .feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
  }
  
  .feature-card .icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: var(--brand-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 1.8rem;
    color: white;
  }
  
  .biography-section {
    padding: 5rem 0;
    background: white;
  }
  
  .biography-section .content-area {
    background: #f8fafc;
    border-radius: 20px;
    padding: 3rem;
    border-left: 6px solid var(--brand-primary);
  }
  
  .map-section {
    padding: 5rem 0;
    background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
  }
  
  .map-container {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    height: 450px;
    position: relative;
  }
  
  .map-container iframe {
    width: 100%;
    height: 100%;
    border: none;
    filter: grayscale(0.3);
    transition: filter 0.3s ease;
  }
  
  .map-container:hover iframe {
    filter: grayscale(0);
  }
  
  .contact-info {
    background: white;
    border-radius: 20px;
    padding: 2.5rem;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    margin-top: 2rem;
  }
  
  .contact-info .contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
    padding: 1rem;
    background: #f8fafc;
    border-radius: 10px;
    transition: background 0.3s ease;
  }
  
  .contact-info .contact-item:hover {
    background: var(--brand-light);
  }
  
  .contact-info .contact-item i {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: var(--brand-primary);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    font-size: 1.2rem;
  }
  
  /* Responsive para móviles */
  @media (max-width: 768px) {
    .hero-carousel .carousel-item {
      height: 350px; /* Altura más pequeña en móviles */
    }
    
    .hero-carousel .carousel-caption h1 {
      font-size: 1.8rem;
    }
    
    .hero-carousel .carousel-caption {
      padding: 1.5rem;
    }
    
    .welcome-section {
      padding: 3rem 0;
    }
    
    .biography-section, .map-section {
      padding: 3rem 0;
    }
    
    .biography-section .content-area {
      padding: 2rem;
    }
  }
  
  @media (max-width: 576px) {
    .hero-carousel .carousel-item {
      height: 280px; /* Aún más pequeña en móviles pequeños */
    }
  }
</style>
@endpush

@section('content')

{{-- CAROUSEL HERO --}}
<section class="hero-carousel">
  <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
    </div>
    
    <div class="carousel-inner">
      {{-- Slide 1 --}}
      <div class="carousel-item active">
        <img src="{{ asset('img/carousel/slide1.jpg') }}" alt="Instalaciones del colegio">
        <div class="carousel-caption">
          <h1>Bienvenidos al Liceo Bilingüe</h1>
          <p class="lead">Formando líderes del futuro con excelencia académica y valores sólidos</p>
          <a href="{{ route('admisiones') }}" class="btn btn-light btn-lg me-3">
            <i class="bi bi-pencil-square me-2"></i>Admisiones 2025
          </a>
          <a href="{{ route('colegio') }}" class="btn btn-outline-light btn-lg">
            <i class="bi bi-info-circle me-2"></i>Conoce más
          </a>
        </div>
      </div>
      
      {{-- Slide 2 --}}
      <div class="carousel-item">
        <img src="{{ asset('img/carousel/slide2.png') }}" alt="Estudiantes en actividades académicas">
        <div class="carousel-caption">
          <h1>Educación Bilingüe de Calidad</h1>
          <p class="lead">Desde guardería hasta educación media con metodología innovadora</p>
          <a href="{{ route('servicios') }}" class="btn btn-light btn-lg me-3">
            <i class="bi bi-mortarboard me-2"></i>Nuestros Servicios
          </a>
          <a href="{{ route('galeria') }}" class="btn btn-outline-light btn-lg">
            <i class="bi bi-images me-2"></i>Galería
          </a>
        </div>
      </div>
      
      {{-- Slide 3 --}}
      <div class="carousel-item">
        <img src="{{ asset('img/carousel/slide3.png') }}" alt="Actividades deportivas y culturales">
        <div class="carousel-caption">
          <h1>Formación Integral</h1>
          <p class="lead">Desarrollamos todas las dimensiones de nuestros estudiantes</p>
          <a href="{{ route('actividades') }}" class="btn btn-light btn-lg me-3">
            <i class="bi bi-calendar-event me-2"></i>Actividades
          </a>
          <a href="{{ route('contacto') }}" class="btn btn-outline-light btn-lg">
            <i class="bi bi-envelope me-2"></i>Contacto
          </a>
        </div>
      </div>
    </div>

    
    
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>
</section>

{{-- SECCIÓN VIDEO DE BIENVENIDA --}}
<section style="padding: 6rem 0; background: linear-gradient(135deg, #1e293b 0%, #334155 100%);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="text-center mb-5">
          <h2 style="color: white; font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">
            🎬 Conoce Nuestro Liceo
          </h2>
          <p style="color: rgba(255,255,255,0.8); font-size: 1.2rem; max-width: 600px; margin: 0 auto;">
            Un recorrido por nuestras instalaciones, metodología y la experiencia educativa 
            que ofrecemos a nuestros estudiantes.
          </p>
        </div>
        
        <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.3); background: #000;">
          {{-- VIDEO EMBED --}}
          <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
            <video 
              controls 
              preload="metadata"
              poster="{{ asset('video/video-poster.jpg') }}"
              style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; border-radius: 20px;"
            >
              <source src="{{ asset('video/bienvenida-liceo.mp4') }}" type="video/mp4">
              <source src="{{ asset('video/bienvenida-liceo.webm') }}" type="video/webm">
              Tu navegador no soporta el elemento de video.
            </video>
          </div>
          
          {{-- OVERLAY CON INFORMACIÓN --}}
          <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 2rem 1.5rem 1.5rem;">
            <div class="row align-items-center">
              <div class="col-md-8">
                <h5 style="font-weight: 700; margin-bottom: 0.5rem;">Video Institucional 2025</h5>
                <p style="margin-bottom: 0; opacity: 0.9; font-size: 0.95rem;">
                  Duración: 1:04 min | Conoce nuestras instalaciones y metodología
                </p>
              </div>
              <div class="col-md-4 text-md-end mt-2 mt-md-0">
                <button class="btn btn-outline-light btn-sm" onclick="toggleFullscreen()">
                  <i class="bi bi-arrows-fullscreen me-1"></i>
                  Pantalla completa
                </button>
              </div>
            </div>
          </div>
        </div>
        
        {{-- ESTADÍSTICAS DEL VIDEO --}}
        <div class="row g-4 mt-4">
          <div class="col-md-3 col-6">
            <div class="text-center" style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 15px; backdrop-filter: blur(10px);">
              <i class="bi bi-building" style="font-size: 2rem; color: #fbbf24; margin-bottom: 0.5rem;"></i>
              <h6 style="color: white; font-weight: 700; margin-bottom: 0.25rem;">Instalaciones</h6>
              <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; margin: 0;">Modernas y seguras</p>
            </div>
          </div>
          
          <div class="col-md-3 col-6">
            <div class="text-center" style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 15px; backdrop-filter: blur(10px);">
              <i class="bi bi-people" style="font-size: 2rem; color: #10b981; margin-bottom: 0.5rem;"></i>
              <h6 style="color: white; font-weight: 700; margin-bottom: 0.25rem;">Comunidad</h6>
              <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; margin: 0;">Estudiantes y familias</p>
            </div>
          </div>
          
          <div class="col-md-3 col-6">
            <div class="text-center" style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 15px; backdrop-filter: blur(10px);">
              <i class="bi bi-award" style="font-size: 2rem; color: #8b5cf6; margin-bottom: 0.5rem;"></i>
              <h6 style="color: white; font-weight: 700; margin-bottom: 0.25rem;">Metodología</h6>
              <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; margin: 0;">Innovadora y efectiva</p>
            </div>
          </div>
          
          <div class="col-md-3 col-6">
            <div class="text-center" style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 15px; backdrop-filter: blur(10px);">
              <i class="bi bi-globe" style="font-size: 2rem; color: #ef4444; margin-bottom: 0.5rem;"></i>
              <h6 style="color: white; font-weight: 700; margin-bottom: 0.25rem;">Bilingüe</h6>
              <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; margin: 0;">Español e inglés</p>
            </div>
          </div>
        </div>
        
        {{-- BOTONES DE ACCIÓN --}}
        <div class="text-center mt-5">
          <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('admisiones') }}" class="btn btn-light btn-lg" style="border-radius: 25px;">
              <i class="bi bi-pencil-square me-2"></i>
              Proceso de Admisiones
            </a>
            <a href="{{ route('colegio') }}" class="btn btn-outline-light btn-lg" style="border-radius: 25px;">
              <i class="bi bi-info-circle me-2"></i>
              Conoce Más Sobre Nosotros
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- JAVASCRIPT PARA EL VIDEO --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
  const video = document.querySelector('video');
  
  // Función para pantalla completa
  window.toggleFullscreen = function() {
    if (video.requestFullscreen) {
      video.requestFullscreen();
    } else if (video.webkitRequestFullscreen) {
      video.webkitRequestFullscreen();
    } else if (video.msRequestFullscreen) {
      video.msRequestFullscreen();
    }
  };
  
  // Tracking de reproducción (opcional)
  video.addEventListener('play', function() {
    console.log('Video de bienvenida iniciado');
    // Aquí puedes agregar Google Analytics o tracking
  });
  
  video.addEventListener('ended', function() {
    console.log('Video de bienvenida completado');
    // Aquí puedes agregar tracking de conversión
  });
  
  // Lazy loading del video para mejor performance
  const observerOptions = {
    threshold: 0.25
  };
  
  const videoObserver = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Precargar el video cuando esté visible
        video.load();
        videoObserver.unobserve(video);
      }
    });
  }, observerOptions);
  
  videoObserver.observe(video);
});
</script>



{{-- SECCIÓN BIENVENIDOS --}}
<section class="welcome-section">
  <div class="container">
    <div class="section-title">
      <h2>Bienvenidos a Nuestro Liceo</h2>
      <p class="subtitle">
        Un espacio donde la excelencia académica se encuentra con la formación en valores, 
        preparando estudiantes para los desafíos del mundo moderno.
      </p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="feature-card text-center">
          <div class="icon">
            <i class="bi bi-award"></i>
          </div>
          <h4 class="fw-bold mb-3">Excelencia Académica</h4>
          <p class="text-muted">
            Más de 25 años formando estudiantes con los más altos estándares educativos 
            y metodologías innovadoras de enseñanza.
          </p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="feature-card text-center">
          <div class="icon">
            <i class="bi bi-globe"></i>
          </div>
          <h4 class="fw-bold mb-3">Educación Bilingüe</h4>
          <p class="text-muted">
            Formación integral en español e inglés que prepara a nuestros estudiantes 
            para un mundo globalizado y competitivo.
          </p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="feature-card text-center">
          <div class="icon">
            <i class="bi bi-people"></i>
          </div>
          <h4 class="fw-bold mb-3">Formación en Valores</h4>
          <p class="text-muted">
            Desarrollamos personas íntegras con sólidos principios éticos, 
            responsabilidad social y liderazgo positivo.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- SECCIÓN BIOGRAFÍA/HISTORIA --}}
<section class="biography-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="{{ asset('img/about/historia.jpg') }}" 
             alt="Historia del Liceo Bilingüe" 
             class="img-fluid rounded-3 shadow-lg">
      </div>
      <div class="col-lg-6">
        <div class="content-area">
          <h2 class="section-title mb-4">Nuestra Historia</h2>
          <p class="lead mb-4">
            [ESPACIO PARA BIOGRAFÍA DEL COLEGIO]
          </p>
          <p class="mb-4">
            Aquí puedes escribir la historia completa del liceo, sus fundadores, 
            momentos importantes, logros alcanzados y la evolución que ha tenido 
            a lo largo de los años.
          </p>
          <p class="mb-4">
            Menciona la visión que tuvieron los fundadores, cómo ha crecido la institución, 
            los valores que han permanecido constantes y los logros más significativos 
            que han marcado la trayectoria del colegio.
          </p>
          <div class="row mt-4">
            <div class="col-6">
              <div class="text-center">
                <h3 class="fw-bold text-primary">25+</h3>
                <p class="small text-muted">Años de experiencia</p>
              </div>
            </div>
            <div class="col-6">
              <div class="text-center">
                <h3 class="fw-bold text-primary">1000+</h3>
                <p class="small text-muted">Egresados exitosos</p>
              </div>
            </div>
          </div>
          <a href="{{ route('colegio') }}" class="btn btn-primary btn-lg mt-3">
            <i class="bi bi-arrow-right me-2"></i>Conoce más sobre nosotros
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- SECCIÓN MAPA Y UBICACIÓN --}}
<section class="map-section">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Nuestra Ubicación</h2>
      <p class="lead text-muted">
        Nos encontramos estratégicamente ubicados en el corazón de Bucaramanga
      </p>
    </div>
    
    <div class="row">
      <div class="col-lg-8 mb-4">
        <div class="map-container">
          {{-- AQUÍ VA TU MAPA DE GOOGLE MAPS --}}
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.6074071694798!2d-73.85311072413279!3d7.
            055331392947047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e42ecae353d014d%3A0x1d5af489dbdf9cf5!2sLiceo%20Bilingue%20Rodolfo%20R.%20Llinas!5e0!3m2!1ses-419!2sco!4v1757465928964!5m2!1ses-419!2sco"
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Ubicación del Liceo Bilingüe Rodolfo R. Llinás">
          </iframe>
          {{-- 
            NOTA: Reemplaza la URL del iframe con la URL real de Google Maps de tu colegio.
            Para obtenerla:
            1. Ve a Google Maps
            2. Busca tu dirección
            3. Click en "Compartir" → "Insertar mapa"
            4. Copia el código iframe
          --}}
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="contact-info">
          <h4 class="fw-bold mb-4 text-center">Información de Contacto</h4>
          
          <div class="contact-item">
            <i class="bi bi-geo-alt-fill"></i>
            <div>
              <h6 class="fw-bold mb-1">Dirección</h6>
              <p class="mb-0 text-muted">
                Calle 44 # 27-50<br>
                Calle 44 # 27-28<br>
                Barrio Recreo, Bucaramanga
              </p>
            </div>
          </div>
          
          <div class="contact-item">
            <i class="bi bi-telephone-fill"></i>
            <div>
              <h6 class="fw-bold mb-1">Teléfono</h6>
              <p class="mb-0 text-muted">PBX: (607) 589 2830</p>
            </div>
          </div>
          
          <div class="contact-item">
            <i class="bi bi-envelope-fill"></i>
            <div>
              <h6 class="fw-bold mb-1">Email</h6>
              <p class="mb-0 text-muted">[TU EMAIL AQUÍ]</p>
            </div>
          </div>
          
          <div class="contact-item">
            <i class="bi bi-clock-fill"></i>
            <div>
              <h6 class="fw-bold mb-1">Horarios</h6>
              <p class="mb-0 text-muted">
                Lunes a Viernes: 6:30 AM - 4:30 PM<br>
                Sábados: 7:00 AM - 12:00 PM
              </p>
            </div>
          </div>
          
          <div class="text-center mt-4">
            <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">
              <i class="bi bi-envelope me-2"></i>Contáctanos
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
  // Inicializar carousel con configuración personalizada
  document.addEventListener('DOMContentLoaded', function() {
    var carousel = new bootstrap.Carousel(document.getElementById('mainCarousel'), {
      interval: 5000,
      wrap: true,
      pause: 'hover'
    });
    
    // Animación de las cards al hacer scroll
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, observerOptions);
    
    // Observar las cards
    document.querySelectorAll('.feature-card').forEach(card => {
      card.style.opacity = '0';
      card.style.transform = 'translateY(30px)';
      card.style.transition = 'all 0.6s ease';
      observer.observe(card);
    });
  });
</script>
@endpush