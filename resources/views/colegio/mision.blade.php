@extends('layouts.app')

@section('title', 'Misión y Visión - Liceo Bilingüe')

@section('description', 'Conoce la misión, visión y objetivos institucionales del Liceo Bilingüe Rodolfo R. Llinás')

@push('head')
<style>
  .hero-section {
    background: linear-gradient(135deg, var(--brand-primary) 0%, var(--brand-accent) 100%);
    color: white;
    padding: 5rem 0 3rem;
    margin-top: -20px;
    position: relative;
    overflow: hidden;
  }
  
  .hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
    opacity: 0.3;
  }
  
  .hero-content {
    position: relative;
    z-index: 1;
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
  
  .mission-vision-section {
    padding: 5rem 0;
  }
  
  .mission-card, .vision-card {
    background: white;
    border-radius: 20px;
    padding: 3rem;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    position: relative;
    overflow: hidden;
  }
  
  .mission-card:hover, .vision-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
  }
  
  .mission-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 6px;
    background: linear-gradient(90deg, var(--brand-primary), var(--brand-accent));
  }
  
  .vision-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 6px;
    background: linear-gradient(90deg, #059669, #047857);
  }
  
  .card-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 2rem;
    font-size: 2rem;
    color: white;
  }
  
  .mission-icon {
    background: linear-gradient(135deg, var(--brand-primary), var(--brand-accent));
  }
  
  .vision-icon {
    background: linear-gradient(135deg, #059669, #047857);
  }
  
  .content-placeholder {
    background: #f8fafc;
    border: 2px dashed #cbd5e1;
    border-radius: 10px;
    padding: 2rem;
    margin: 2rem 0;
    text-align: center;
  }
  
  .objectives-section {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    padding: 5rem 0;
  }
  
  .objective-card {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    border-left: 5px solid var(--brand-primary);
    transition: transform 0.3s ease;
  }
  
  .objective-card:hover {
    transform: translateX(10px);
  }
  
  .objective-number {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: var(--brand-primary);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    margin-right: 1rem;
    flex-shrink: 0;
  }
  
  .principles-section {
    padding: 5rem 0;
  }
  
  .principle-item {
    display: flex;
    align-items: center;
    padding: 1.5rem;
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    margin-bottom: 1rem;
    transition: transform 0.3s ease;
  }
  
  .principle-item:hover {
    transform: translateY(-5px);
  }
  
  .principle-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: var(--brand-light);
    color: var(--brand-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-right: 1.5rem;
    flex-shrink: 0;
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
    
    .mission-vision-section {
      padding: 3rem 0;
    }
    
    .mission-card, .vision-card {
      padding: 2rem;
      margin-bottom: 2rem;
    }
    
    .objectives-section, .principles-section {
      padding: 3rem 0;
    }
    
    .principle-item {
      flex-direction: column;
      text-align: center;
    }
    
    .principle-icon {
      margin-right: 0;
      margin-bottom: 1rem;
    }
  }
  
  /* Animaciones */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  .animate-on-scroll {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease;
  }
  
  .animate-on-scroll.visible {
    opacity: 1;
    transform: translateY(0);
  }
</style>
@endpush

@section('content')

{{-- HERO SECTION --}}
<section class="hero-section">
  <div class="container">
    <div class="hero-content">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ route('colegio') }}">El Colegio</a></li>
          <li class="breadcrumb-item active">Misión y Visión</li>
        </ol>
      </nav>
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h1>Misión y Visión Institucional</h1>
          <p class="lead mb-0">
            Los pilares fundamentales que guían nuestro compromiso educativo y 
            definen el rumbo hacia la excelencia académica.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <i class="bi bi-bullseye display-1 opacity-25"></i>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- MISIÓN Y VISIÓN --}}
<section class="mission-vision-section">
  <div class="container">
    <div class="row g-5">
      {{-- MISIÓN --}}
      <div class="col-lg-6">
        <div class="mission-card animate-on-scroll">
          <div class="text-center">
            <div class="card-icon mission-icon">
              <i class="bi bi-compass"></i>
            </div>
            <h2 class="fw-bold text-primary mb-4">Nuestra Misión</h2>
          </div>
          
          <div class="content-placeholder">
            <h5 class="text-muted mb-3">
              <i class="bi bi-pencil-square me-2"></i>
              [ESPACIO PARA LA MISIÓN INSTITUCIONAL]
            </h5>
            <p class="text-muted mb-0">
              Aquí va la declaración completa de la misión del colegio. 
              Debe explicar el propósito fundamental de la institución, 
              a quién sirve, qué ofrece y cómo lo hace.
            </p>
          </div>
          
          <div class="text-center mt-4">
            <p class="text-muted small mb-0">
              <i class="bi bi-info-circle me-1"></i>
              La misión define nuestro propósito y compromiso diario
            </p>
          </div>
        </div>
      </div>
      
      {{-- VISIÓN --}}
      <div class="col-lg-6">
        <div class="vision-card animate-on-scroll">
          <div class="text-center">
            <div class="card-icon vision-icon">
              <i class="bi bi-eye"></i>
            </div>
            <h2 class="fw-bold text-success mb-4">Nuestra Visión</h2>
          </div>
          
          <div class="content-placeholder">
            <h5 class="text-muted mb-3">
              <i class="bi bi-telescope me-2"></i>
              [ESPACIO PARA LA VISIÓN INSTITUCIONAL]
            </h5>
            <p class="text-muted mb-0">
              Aquí va la declaración de la visión del colegio. 
              Debe describir hacia dónde se dirige la institución, 
              qué aspira a ser en el futuro y cómo quiere ser reconocida.
            </p>
          </div>
          
          <div class="text-center mt-4">
            <p class="text-muted small mb-0">
              <i class="bi bi-info-circle me-1"></i>
              La visión proyecta nuestras aspiraciones futuras
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- OBJETIVOS INSTITUCIONALES --}}
<section class="objectives-section">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title animate-on-scroll">Objetivos Institucionales</h2>
      <p class="lead text-muted animate-on-scroll">
        Metas específicas que orientan nuestro trabajo educativo
      </p>
    </div>
    
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="objective-card animate-on-scroll">
          <div class="d-flex align-items-start">
            <div class="objective-number">1</div>
            <div>
              <h5 class="fw-bold mb-2">[OBJETIVO 1]</h5>
              <p class="text-muted mb-0">
                Descripción completa del primer objetivo institucional. 
                Explicar cómo se implementa y qué resultados se esperan.
              </p>
            </div>
          </div>
        </div>
        
        <div class="objective-card animate-on-scroll">
          <div class="d-flex align-items-start">
            <div class="objective-number">2</div>
            <div>
              <h5 class="fw-bold mb-2">[OBJETIVO 2]</h5>
              <p class="text-muted mb-0">
                Descripción del segundo objetivo. Puede ser sobre calidad académica, 
                formación integral, innovación educativa, etc.
              </p>
            </div>
          </div>
        </div>
        
        <div class="objective-card animate-on-scroll">
          <div class="d-flex align-items-start">
            <div class="objective-number">3</div>
            <div>
              <h5 class="fw-bold mb-2">[OBJETIVO 3]</h5>
              <p class="text-muted mb-0">
                Tercer objetivo institucional. Podría relacionarse con 
                la proyección comunitaria, el desarrollo tecnológico, etc.
              </p>
            </div>
          </div>
        </div>
        
        <div class="objective-card animate-on-scroll">
          <div class="d-flex align-items-start">
            <div class="objective-number">4</div>
            <div>
              <h5 class="fw-bold mb-2">[OBJETIVO 4]</h5>
              <p class="text-muted mb-0">
                Cuarto objetivo. Puede incluir aspectos como sostenibilidad, 
                responsabilidad social, o mejora continua.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- PRINCIPIOS INSTITUCIONALES --}}
<section class="principles-section">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title animate-on-scroll">Principios Institucionales</h2>
      <p class="lead text-muted animate-on-scroll">
        Los valores fundamentales que rigen nuestro quehacer educativo
      </p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="principle-item animate-on-scroll">
          <div class="principle-icon">
            <i class="bi bi-star"></i>
          </div>
          <div>
            <h5 class="fw-bold mb-2">Excelencia Académica</h5>
            <p class="text-muted mb-0">
              [DESCRIPCIÓN] - Compromiso con los más altos estándares 
              de calidad en todos los procesos educativos.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="principle-item animate-on-scroll">
          <div class="principle-icon">
            <i class="bi bi-people"></i>
          </div>
          <div>
            <h5 class="fw-bold mb-2">Formación Integral</h5>
            <p class="text-muted mb-0">
              [DESCRIPCIÓN] - Desarrollo armónico de todas las dimensiones 
              del ser humano: cognitiva, afectiva, social y espiritual.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="principle-item animate-on-scroll">
          <div class="principle-icon">
            <i class="bi bi-heart"></i>
          </div>
          <div>
            <h5 class="fw-bold mb-2">Valores Éticos</h5>
            <p class="text-muted mb-0">
              [DESCRIPCIÓN] - Promoción de principios morales sólidos 
              que guíen el comportamiento y las decisiones.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="principle-item animate-on-scroll">
          <div class="principle-icon">
            <i class="bi bi-lightbulb"></i>
          </div>
          <div>
            <h5 class="fw-bold mb-2">Innovación Educativa</h5>
            <p class="text-muted mb-0">
              [DESCRIPCIÓN] - Incorporación de metodologías y tecnologías 
              que potencien el aprendizaje significativo.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="principle-item animate-on-scroll">
          <div class="principle-icon">
            <i class="bi bi-globe"></i>
          </div>
          <div>
            <h5 class="fw-bold mb-2">Perspectiva Global</h5>
            <p class="text-muted mb-0">
              [DESCRIPCIÓN] - Formación de ciudadanos con visión internacional 
              y competencias para el mundo globalizado.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="principle-item animate-on-scroll">
          <div class="principle-icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <div>
            <h5 class="fw-bold mb-2">Responsabilidad Social</h5>
            <p class="text-muted mb-0">
              [DESCRIPCIÓN] - Compromiso con el desarrollo sostenible 
              y el bienestar de la comunidad.
            </p>
          </div>
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
        <div class="animate-on-scroll">
          <h2 class="fw-bold mb-4">Únete a Nuestra Comunidad Educativa</h2>
          <p class="lead mb-4">
            Conoce cómo estos principios se traducen en experiencias 
            educativas excepcionales para nuestros estudiantes.
          </p>
          <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="{{ route('colegio') }}" class="btn btn-light btn-lg">
              <i class="bi bi-info-circle me-2"></i>Conoce Más
            </a>
            <a href="{{ route('servicios') }}" class="btn btn-outline-light btn-lg">
              <i class="bi bi-mortarboard me-2"></i>Nuestros Servicios
            </a>
            <a href="{{ route('contacto') }}" class="btn btn-outline-light btn-lg">
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
  // Animación al hacer scroll
  document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, observerOptions);
    
    // Observar todos los elementos con animación
    document.querySelectorAll('.animate-on-scroll').forEach(item => {
      observer.observe(item);
    });
    
    // Efecto de typing para los títulos principales
    const titles = document.querySelectorAll('.mission-card h2, .vision-card h2');
    titles.forEach((title, index) => {
      setTimeout(() => {
        title.style.opacity = '1';
        title.style.transform = 'translateY(0)';
      }, index * 200);
    });
  });
</script>
@endpush