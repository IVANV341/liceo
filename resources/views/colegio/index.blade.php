@extends('layouts.app')

@section('title', 'Reseña del Colegio - Liceo Bilingüe')

@section('description', 'Conoce la historia, trayectoria y filosofía educativa del Liceo Bilingüe Rodolfo R. Llinás')

@push('head')
<style>
  .hero-section {
    background: linear-gradient(135deg, var(--brand-primary) 0%, var(--brand-accent) 100%);
    color: white;
    padding: 5rem 0 3rem;
    margin-top: -20px;
  }
  
  .hero-section h1 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
  }
  
  .breadcrumb-custom {
    background: transparent;
    padding: 0;
    margin-bottom: 0;
  }
  
  .breadcrumb-custom .breadcrumb-item a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
  }
  
  .breadcrumb-custom .breadcrumb-item.active {
    color: white;
  }
  
  .content-section {
    padding: 4rem 0;
  }
  
  .timeline {
    position: relative;
    padding: 2rem 0;
  }
  
  .timeline::before {
    content: '';
    position: absolute;
    left: 30px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: var(--brand-primary);
  }
  
  .timeline-item {
    position: relative;
    padding-left: 80px;
    margin-bottom: 3rem;
  }
  
  .timeline-item::before {
    content: '';
    position: absolute;
    left: 24px;
    top: 8px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: var(--brand-primary);
    border: 3px solid white;
    box-shadow: 0 0 0 3px var(--brand-primary);
  }
  
  .timeline-content {
    background: white;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    border-left: 4px solid var(--brand-primary);
  }
  
  .stats-section {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    padding: 4rem 0;
  }
  
  .stat-card {
    text-align: center;
    padding: 2rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
  }
  
  .stat-card:hover {
    transform: translateY(-5px);
  }
  
  .stat-number {
    font-size: 3rem;
    font-weight: 800;
    color: var(--brand-primary);
    display: block;
  }
  
  .values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
  }
  
  .value-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
    transition: transform 0.3s ease;
  }
  
  .value-card:hover {
    transform: translateY(-5px);
  }
  
  .value-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: var(--brand-light);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 2rem;
    color: var(--brand-primary);
  }
  
  .image-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
    margin-top: 2rem;
  }
  
  .gallery-item {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
  }
  
  .gallery-item:hover {
    transform: scale(1.02);
  }
  
  .gallery-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }
  
  @media (max-width: 768px) {
    .hero-section {
      padding: 3rem 0 2rem;
    }
    
    .hero-section h1 {
      font-size: 2rem;
    }
    
    .timeline::before {
      left: 20px;
    }
    
    .timeline-item {
      padding-left: 60px;
    }
    
    .timeline-item::before {
      left: 14px;
    }
    
    .stat-number {
      font-size: 2rem;
    }
  }
</style>
@endpush

@section('content')

{{-- HERO SECTION --}}
<section class="hero-section">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
        <li class="breadcrumb-item active">El Colegio</li>
      </ol>
    </nav>
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h1>Reseña del Colegio</h1>
        <p class="lead mb-0">
          Conoce nuestra historia, trayectoria y el compromiso que nos ha convertido 
          en una institución líder en educación bilingüe.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <i class="bi bi-building display-1 opacity-25"></i>
      </div>
    </div>
  </div>
</section>

{{-- INTRODUCCIÓN --}}
<section class="content-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="{{ asset('img/about/fachada-colegio.jpg') }}" 
             alt="Fachada del Liceo Bilingüe" 
             class="img-fluid rounded-3 shadow-lg">
      </div>
      <div class="col-lg-6">
        <h2 class="section-title">Nuestra Historia</h2>
        <div class="content-placeholder bg-light p-4 rounded">
          <p class="text-muted mb-3">
            <strong>[ESPACIO PARA HISTORIA DEL COLEGIO]</strong>
          </p>
          <p class="mb-3">
            Aquí va la historia completa del colegio: cuándo fue fundado, 
            por quién, cuál era la visión inicial, cómo ha evolucionado 
            a lo largo de los años...
          </p>
          <p class="mb-3">
            Mencionar los momentos importantes, logros significativos, 
            reconocimientos recibidos, expansión de instalaciones, 
            crecimiento en número de estudiantes...
          </p>
          <p class="mb-0">
            Hablar sobre la filosofía educativa, el enfoque bilingüe, 
            y lo que hace especial al colegio en comparación con otras 
            instituciones educativas.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ESTADÍSTICAS --}}
<section class="stats-section">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Nuestros Logros</h2>
      <p class="lead text-muted">Números que hablan de nuestra trayectoria</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="stat-card">
          <span class="stat-number">[XX]+</span>
          <h5 class="fw-bold">Años de experiencia</h5>
          <p class="text-muted mb-0">Formando líderes del futuro</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="stat-card">
          <span class="stat-number">[XXX]+</span>
          <h5 class="fw-bold">Egresados exitosos</h5>
          <p class="text-muted mb-0">En universidades y empresas</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="stat-card">
          <span class="stat-number">[XX]</span>
          <h5 class="fw-bold">Docentes especializados</h5>
          <p class="text-muted mb-0">Profesionales comprometidos</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="stat-card">
          <span class="stat-number">100%</span>
          <h5 class="fw-bold">Educación bilingüe</h5>
          <p class="text-muted mb-0">Inglés y español</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- LÍNEA DE TIEMPO --}}
<section class="content-section">
  <div class="container">
    <h2 class="section-title text-center mb-5">Nuestra Evolución</h2>
    
    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-content">
          <h4 class="fw-bold text-primary">[AÑO] - Fundación</h4>
          <p class="mb-2">
            <strong>[ESPACIO PARA HITO IMPORTANTE]</strong>
          </p>
          <p class="text-muted mb-0">
            Descripción del momento de fundación, primeras instalaciones, 
            visión inicial de los fundadores...
          </p>
        </div>
      </div>
      
      <div class="timeline-item">
        <div class="timeline-content">
          <h4 class="fw-bold text-primary">[AÑO] - Expansión</h4>
          <p class="mb-2">
            <strong>[ESPACIO PARA HITO IMPORTANTE]</strong>
          </p>
          <p class="text-muted mb-0">
            Ampliación de instalaciones, nuevos programas académicos, 
            crecimiento en población estudiantil...
          </p>
        </div>
      </div>
      
      <div class="timeline-item">
        <div class="timeline-content">
          <h4 class="fw-bold text-primary">[AÑO] - Reconocimientos</h4>
          <p class="mb-2">
            <strong>[ESPACIO PARA HITO IMPORTANTE]</strong>
          </p>
          <p class="text-muted mb-0">
            Certificaciones obtenidas, reconocimientos oficiales, 
            premios y distinciones...
          </p>
        </div>
      </div>
      
      <div class="timeline-item">
        <div class="timeline-content">
          <h4 class="fw-bold text-primary">[AÑO] - Presente</h4>
          <p class="mb-2">
            <strong>[ESPACIO PARA ESTADO ACTUAL]</strong>
          </p>
          <p class="text-muted mb-0">
            Estado actual del colegio, proyectos en desarrollo, 
            visión hacia el futuro...
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- VALORES INSTITUCIONALES --}}
<section class="content-section bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Nuestros Valores</h2>
      <p class="lead text-muted">Los principios que guían nuestra labor educativa</p>
    </div>
    
    <div class="values-grid">
      <div class="value-card">
        <div class="value-icon">
          <i class="bi bi-award"></i>
        </div>
        <h5 class="fw-bold mb-3">Excelencia</h5>
        <p class="text-muted">
          [DESCRIPCIÓN DEL VALOR] - Explicar cómo se manifiesta 
          este valor en la institución...
        </p>
      </div>
      
      <div class="value-card">
        <div class="value-icon">
          <i class="bi bi-people"></i>
        </div>
        <h5 class="fw-bold mb-3">Respeto</h5>
        <p class="text-muted">
          [DESCRIPCIÓN DEL VALOR] - Explicar cómo se promueve 
          y practica este valor...
        </p>
      </div>
      
      <div class="value-card">
        <div class="value-icon">
          <i class="bi bi-lightbulb"></i>
        </div>
        <h5 class="fw-bold mb-3">Innovación</h5>
        <p class="text-muted">
          [DESCRIPCIÓN DEL VALOR] - Metodologías innovadoras, 
          tecnología en el aula...
        </p>
      </div>
      
      <div class="value-card">
        <div class="value-icon">
          <i class="bi bi-heart"></i>
        </div>
        <h5 class="fw-bold mb-3">Compromiso</h5>
        <p class="text-muted">
          [DESCRIPCIÓN DEL VALOR] - Compromiso con la educación 
          y formación integral...
        </p>
      </div>
    </div>
  </div>
</section>

{{-- GALERÍA DE INSTALACIONES --}}
<section class="content-section">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Nuestras Instalaciones</h2>
      <p class="lead text-muted">Espacios diseñados para el aprendizaje y desarrollo integral</p>
    </div>
    
    <div class="image-gallery">
      <div class="gallery-item">
        <img src="{{ asset('img/instalaciones/aulas.jpg') }}" alt="Aulas de clase">
        <div class="p-3">
          <h6 class="fw-bold">Aulas Modernas</h6>
          <p class="text-muted small mb-0">Espacios equipados con tecnología</p>
        </div>
      </div>
      
      <div class="gallery-item">
        <img src="{{ asset('img/instalaciones/laboratorio.jpg') }}" alt="Laboratorio de ciencias">
        <div class="p-3">
          <h6 class="fw-bold">Laboratorios</h6>
          <p class="text-muted small mb-0">Ciencias y tecnología</p>
        </div>
      </div>
      
      <div class="gallery-item">
        <img src="{{ asset('img/instalaciones/biblioteca.jpg') }}" alt="Biblioteca">
        <div class="p-3">
          <h6 class="fw-bold">Biblioteca</h6>
          <p class="text-muted small mb-0">Centro de recursos académicos</p>
        </div>
      </div>
      
      <div class="gallery-item">
        <img src="{{ asset('img/instalaciones/deportes.jpg') }}" alt="Instalaciones deportivas">
        <div class="p-3">
          <h6 class="fw-bold">Deportes</h6>
          <p class="text-muted small mb-0">Espacios para actividad física</p>
        </div>
      </div>
    </div>
    
    <div class="text-center mt-4">
      <a href="{{ route('galeria') }}" class="btn btn-primary btn-lg">
        <i class="bi bi-images me-2"></i>Ver Galería Completa
      </a>
    </div>
  </div>
</section>

{{-- LLAMADA A LA ACCIÓN --}}
<section class="content-section bg-primary text-white">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="fw-bold mb-4">¿Quieres ser parte de nuestra familia educativa?</h2>
        <p class="lead mb-4">
          Descubre cómo podemos acompañar el crecimiento académico y personal de tu hijo.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="{{ route('admisiones') }}" class="btn btn-light btn-lg">
            <i class="bi bi-pencil-square me-2"></i>Proceso de Admisiones
          </a>
          <a href="{{ route('contacto') }}" class="btn btn-outline-light btn-lg">
            <i class="bi bi-envelope me-2"></i>Contáctanos
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
  // Animación al hacer scroll
  document.addEventListener('DOMContentLoaded', function() {
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
    
    // Observar elementos que se animan
    document.querySelectorAll('.timeline-item, .stat-card, .value-card').forEach(item => {
      item.style.opacity = '0';
      item.style.transform = 'translateY(30px)';
      item.style.transition = 'all 0.6s ease';
      observer.observe(item);
    });
  });
</script>
@endpush