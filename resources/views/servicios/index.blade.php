@extends('layouts.app')

@section('title', 'Servicios Educativos - Liceo Bilingüe')

@section('description', 'Conoce todos nuestros servicios educativos desde guardería hasta educación media. Formación bilingüe de excelencia.')

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
  
  .services-intro {
    padding: 5rem 0;
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
  }
  
  .intro-card {
    background: white;
    border-radius: 20px;
    padding: 3rem;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    text-align: center;
  }
  
  .services-grid {
    padding: 5rem 0;
  }
  
  .service-card {
    background: white;
    border-radius: 20px;
    padding: 2.5rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    border-top: 5px solid var(--brand-primary);
    position: relative;
    overflow: hidden;
  }
  
  .service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
  }
  
  .service-card::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 80px;
    height: 80px;
    background: var(--brand-light);
    border-radius: 50%;
    transform: translate(25px, -25px);
    opacity: 0.5;
  }
  
  .service-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--brand-primary), var(--brand-accent));
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin: 0 auto 2rem;
    position: relative;
    z-index: 1;
  }
  
  .age-badge {
    background: var(--brand-light);
    color: var(--brand-primary);
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-weight: 600;
    font-size: 0.9rem;
    display: inline-block;
    margin-bottom: 1rem;
  }
  
  .features-list {
    list-style: none;
    padding: 0;
    margin: 1.5rem 0;
  }
  
  .features-list li {
    padding: 0.5rem 0;
    display: flex;
    align-items: center;
  }
  
  .features-list li i {
    color: var(--brand-primary);
    margin-right: 0.5rem;
    width: 16px;
  }
  
  .methodology-section {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    padding: 5rem 0;
  }
  
  .methodology-card {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    height: 100%;
  }
  
  .methodology-card:hover {
    transform: translateY(-5px);
  }
  
  .methodology-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: var(--brand-light);
    color: var(--brand-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    margin: 0 auto 1.5rem;
  }
  
  .info-section {
    padding: 5rem 0;
  }
  
  .info-card {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    border-left: 5px solid var(--brand-primary);
    margin-bottom: 1.5rem;
  }
  
  .info-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: var(--brand-primary);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    margin-bottom: 1rem;
  }
  
  .cta-section {
    background: linear-gradient(135deg, var(--brand-primary) 0%, var(--brand-accent) 100%);
    color: white;
    padding: 4rem 0;
    text-align: center;
  }
  
  @media (max-width: 768px) {
    .hero-section {
      padding: 3rem 0 2rem;
    }
    
    .hero-section h1 {
      font-size: 2rem;
    }
    
    .services-intro, .services-grid, .methodology-section, .info-section {
      padding: 3rem 0;
    }
    
    .intro-card {
      padding: 2rem;
    }
    
    .service-card {
      margin-bottom: 2rem;
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
        <li class="breadcrumb-item active">Servicios</li>
      </ol>
    </nav>
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h1>Servicios Educativos</h1>
        <p class="lead mb-0">
          Formación integral desde los primeros años hasta la educación media, 
          con metodología bilingüe y enfoque en la excelencia académica.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <i class="bi bi-mortarboard display-1 opacity-25"></i>
      </div>
    </div>
  </div>
</section>

{{-- INTRODUCCIÓN --}}
<section class="services-intro">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="intro-card">
          <h2 class="fw-bold text-primary mb-4">Educación Bilingüe de Excelencia</h2>
          <p class="lead text-muted mb-4">
            Ofrecemos un continuo educativo desde guardería hasta educación media, 
            con programas diseñados para desarrollar las competencias del siglo XXI 
            en un ambiente bilingüe español-inglés.
          </p>
          <div class="row text-center">
            <div class="col-md-4">
              <h4 class="fw-bold text-primary">5 Niveles</h4>
              <p class="text-muted small">Guardería a Grado 11</p>
            </div>
            <div class="col-md-4">
              <h4 class="fw-bold text-primary">100% Bilingüe</h4>
              <p class="text-muted small">Español e Inglés</p>
            </div>
            <div class="col-md-4">
              <h4 class="fw-bold text-primary">Certificado</h4>
              <p class="text-muted small">Educación de calidad</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- SERVICIOS EDUCATIVOS --}}
<section class="services-grid">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Nuestros Servicios</h2>
      <p class="lead text-muted">
        Programas educativos adaptados a cada etapa del desarrollo
      </p>
    </div>
    
    <div class="row g-4">
      {{-- GUARDERÍA --}}
      <div class="col-lg-6">
        <div class="service-card">
          <div class="service-icon">
            <i class="bi bi-emoji-smile"></i>
          </div>
          <div class="age-badge">1 - 3 años</div>
          <h4 class="fw-bold mb-3">Guardería</h4>
          <p class="text-muted mb-3">
            Cuidado y estimulación temprana en un ambiente seguro y amoroso. 
            Desarrollo de habilidades básicas y socialización inicial.
          </p>
          
          <ul class="features-list">
            <li><i class="bi bi-check-circle-fill"></i> Estimulación temprana</li>
            <li><i class="bi bi-check-circle-fill"></i> Cuidado personalizado</li>
            <li><i class="bi bi-check-circle-fill"></i> Introducción al inglés</li>
            <li><i class="bi bi-check-circle-fill"></i> Desarrollo psicomotor</li>
          </ul>
          
          <div class="text-center mt-4">
            <a href="{{ route('servicios.guarderia') }}" class="btn btn-primary">
              Ver más detalles <i class="bi bi-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
      </div>
      
      {{-- PREESCOLAR --}}
      <div class="col-lg-6">
        <div class="service-card">
          <div class="service-icon">
            <i class="bi bi-balloon"></i>
          </div>
          <div class="age-badge">3 - 5 años</div>
          <h4 class="fw-bold mb-3">Preescolar</h4>
          <p class="text-muted mb-3">
            Preparación para la vida escolar con metodologías lúdicas. 
            Desarrollo de competencias básicas en español e inglés.
          </p>
          
          <ul class="features-list">
            <li><i class="bi bi-check-circle-fill"></i> Aprendizaje lúdico</li>
            <li><i class="bi bi-check-circle-fill"></i> Bilingüismo inicial</li>
            <li><i class="bi bi-check-circle-fill"></i> Habilidades sociales</li>
            <li><i class="bi bi-check-circle-fill"></i> Preparación escolar</li>
          </ul>
          
          <div class="text-center mt-4">
            <a href="{{ route('servicios.preescolar') }}" class="btn btn-primary">
              Ver más detalles <i class="bi bi-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
      </div>
      
      {{-- BÁSICA PRIMARIA --}}
      <div class="col-lg-6">
        <div class="service-card">
          <div class="service-icon">
            <i class="bi bi-book"></i>
          </div>
          <div class="age-badge">6 - 10 años</div>
          <h4 class="fw-bold mb-3">Básica Primaria</h4>
          <p class="text-muted mb-3">
            Consolidación de habilidades fundamentales. Fortalecimiento 
            del bilingüismo y desarrollo del pensamiento crítico.
          </p>
          
          <ul class="features-list">
            <li><i class="bi bi-check-circle-fill"></i> Currículo bilingüe</li>
            <li><i class="bi bi-check-circle-fill"></i> Pensamiento crítico</li>
            <li><i class="bi bi-check-circle-fill"></i> Proyectos STEAM</li>
            <li><i class="bi bi-check-circle-fill"></i> Valores ciudadanos</li>
          </ul>
          
          <div class="text-center mt-4">
            <a href="{{ route('servicios.basica_primaria') }}" class="btn btn-primary">
              Ver más detalles <i class="bi bi-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
      </div>
      
      {{-- BÁSICA SECUNDARIA --}}
      <div class="col-lg-6">
        <div class="service-card">
          <div class="service-icon">
            <i class="bi bi-journal-text"></i>
          </div>
          <div class="age-badge">11 - 14 años</div>
          <h4 class="fw-bold mb-3">Básica Secundaria</h4>
          <p class="text-muted mb-3">
            Profundización académica y desarrollo de competencias complejas. 
            Orientación vocacional y liderazgo estudiantil.
          </p>
          
          <ul class="features-list">
            <li><i class="bi bi-check-circle-fill"></i> Profundización académica</li>
            <li><i class="bi bi-check-circle-fill"></i> Orientación vocacional</li>
            <li><i class="bi bi-check-circle-fill"></i> Liderazgo estudiantil</li>
            <li><i class="bi bi-check-circle-fill"></i> Competencias digitales</li>
          </ul>
          
          <div class="text-center mt-4">
            <a href="{{ route('servicios.basica_secundaria') }}" class="btn btn-primary">
              Ver más detalles <i class="bi bi-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
      </div>
      
      {{-- EDUCACIÓN MEDIA --}}
      <div class="col-lg-12">
        <div class="service-card">
          <div class="row align-items-center">
            <div class="col-lg-2 text-center">
              <div class="service-icon">
                <i class="bi bi-mortarboard-fill"></i>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="age-badge">15 - 17 años</div>
              <h4 class="fw-bold mb-3">Educación Media (Grados 10 - 11)</h4>
              <p class="text-muted mb-3">
                Preparación para la educación superior con énfasis en excelencia académica. 
                Certificaciones internacionales y proyecto de vida definido.
              </p>
              
              <div class="row">
                <div class="col-md-6">
                  <ul class="features-list">
                    <li><i class="bi bi-check-circle-fill"></i> Preparación universitaria</li>
                    <li><i class="bi bi-check-circle-fill"></i> Certificaciones internacionales</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="features-list">
                    <li><i class="bi bi-check-circle-fill"></i> Proyecto de vida</li>
                    <li><i class="bi bi-check-circle-fill"></i> Bachillerato bilingüe</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 text-center">
              <a href="{{ route('servicios.educacion_media') }}" class="btn btn-primary">
                Ver más detalles <i class="bi bi-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- METODOLOGÍA --}}
<section class="methodology-section">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Nuestra Metodología</h2>
      <p class="lead text-muted">
        Enfoques pedagógicos que garantizan el éxito educativo
      </p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="methodology-card">
          <div class="methodology-icon">
            <i class="bi bi-globe"></i>
          </div>
          <h6 class="fw-bold">Educación Bilingüe</h6>
          <p class="text-muted small">
            Inmersión en español e inglés para formar ciudadanos globales.
          </p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="methodology-card">
          <div class="methodology-icon">
            <i class="bi bi-lightbulb"></i>
          </div>
          <h6 class="fw-bold">Aprendizaje Activo</h6>
          <p class="text-muted small">
            Metodologías participativas que fomentan el pensamiento crítico.
          </p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="methodology-card">
          <div class="methodology-icon">
            <i class="bi bi-people"></i>
          </div>
          <h6 class="fw-bold">Formación Integral</h6>
          <p class="text-muted small">
            Desarrollo académico, emocional, social y ético equilibrado.
          </p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="methodology-card">
          <div class="methodology-icon">
            <i class="bi bi-cpu"></i>
          </div>
          <h6 class="fw-bold">Tecnología Educativa</h6>
          <p class="text-muted small">
            Integración de herramientas digitales en el proceso de enseñanza.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- INFORMACIÓN ADICIONAL --}}
<section class="info-section">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Información General</h2>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="info-card">
          <div class="info-icon">
            <i class="bi bi-clock"></i>
          </div>
          <h6 class="fw-bold">Horarios</h6>
          <p class="text-muted mb-2">
            <strong>Guardería y Preescolar:</strong><br>
            7:00 AM - 4:00 PM
          </p>
          <p class="text-muted mb-0">
            <strong>Primaria y Secundaria:</strong><br>
            6:30 AM - 2:30 PM
          </p>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="info-card">
          <div class="info-icon">
            <i class="bi bi-calendar"></i>
          </div>
          <h6 class="fw-bold">Calendario Académico</h6>
          <p class="text-muted mb-2">
            <strong>Inicio de clases:</strong> [FECHA]
          </p>
          <p class="text-muted mb-0">
            <strong>Finalización:</strong> [FECHA]
          </p>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="info-card">
          <div class="info-icon">
            <i class="bi bi-award"></i>
          </div>
          <h6 class="fw-bold">Certificaciones</h6>
          <p class="text-muted mb-0">
            Bachillerato académico bilingüe con certificaciones 
            internacionales reconocidas.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- LLAMADA A LA ACCIÓN --}}
<section class="cta-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="fw-bold mb-4">¿Listo para una Educación de Excelencia?</h2>
        <p class="lead mb-4">
          Conoce más sobre nuestros programas educativos y cómo podemos 
          acompañar el crecimiento integral de tu hijo.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="{{ route('admisiones') }}" class="btn btn-light btn-lg">
            <i class="bi bi-pencil-square me-2"></i>Proceso de Admisiones
          </a>
          <a href="{{ route('contacto') }}" class="btn btn-outline-light btn-lg">
            <i class="bi bi-envelope me-2"></i>Agenda una Visita
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection