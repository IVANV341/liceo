@extends('layouts.app')

@section('title', 'Actividades - Liceo Bilingüe')

@section('description', 'Descubre las próximas actividades, eventos y talleres del Liceo Bilingüe Rodolfo R. Llinás. Participa en nuestras actividades académicas, culturales y deportivas.')

@push('head')
<style>
  .hero-section {
    background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
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
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><circle cx="30" cy="30" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.1)"/></svg>');
    opacity: 0.3;
  }
  
  .hero-content {
    position: relative;
    z-index: 1;
  }
  
  .hero-section h1 {
    font-size: 3rem;
    font-weight: 900;
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
  
  .featured-activities {
    padding: 6rem 0;
    background: #f8fafc;
  }
  
  .activity-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    margin-bottom: 2rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #f3f4f6;
  }
  
  .activity-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
  }
  
  .activity-image {
    position: relative;
    overflow: hidden;
    height: 250px;
  }
  
  .activity-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }
  
  .activity-card:hover .activity-image img {
    transform: scale(1.05);
  }
  
  .activity-date-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: rgba(255, 255, 255, 0.95);
    color: var(--brand-primary);
    padding: 0.75rem;
    border-radius: 15px;
    text-align: center;
    font-weight: 700;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    min-width: 70px;
  }
  
  .activity-date-badge .day {
    font-size: 1.5rem;
    display: block;
    line-height: 1;
  }
  
  .activity-date-badge .month {
    font-size: 0.8rem;
    text-transform: uppercase;
    margin-top: 2px;
  }
  
  .activity-status {
    position: absolute;
    top: 1rem;
    left: 1rem;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-weight: 600;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  
  .status-proximo { background: #059669; }
  .status-inscripciones { background: #dc2626; }
  .status-en-curso { background: #f59e0b; }
  .status-confirmado { background: #3b82f6; }
  
  .activity-content {
    padding: 2rem;
  }
  
  .activity-time {
    color: #059669;
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    font-weight: 600;
  }
  
  .activity-time i {
    margin-right: 0.5rem;
  }
  
  .activity-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #111827;
    margin-bottom: 1rem;
    line-height: 1.3;
  }
  
  .activity-description {
    color: #6b7280;
    line-height: 1.6;
    margin-bottom: 1.5rem;
  }
  
  .activity-details {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.5rem;
    flex-wrap: wrap;
  }
  
  .activity-detail {
    display: flex;
    align-items: center;
    color: #6b7280;
    font-size: 0.9rem;
  }
  
  .activity-detail i {
    margin-right: 0.5rem;
    color: var(--brand-primary);
  }
  
  .activity-actions {
    display: flex;
    gap: 1rem;
    align-items: center;
  }
  
  .btn-inscribirse {
    background: var(--brand-primary);
    color: white;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 25px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
  }
  
  .btn-inscribirse:hover {
    background: var(--brand-accent);
    color: white;
    transform: translateY(-2px);
  }
  
  .btn-info {
    color: var(--brand-primary);
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
  }
  
  .btn-info:hover {
    color: var(--brand-accent);
  }
  
  @media (max-width: 768px) {
    .hero-section {
      padding: 3rem 0 2rem;
    }
    
    .hero-section h1 {
      font-size: 2rem;
    }
    
    .featured-activities {
      padding: 4rem 0;
    }
    
    .activity-card {
      margin-bottom: 1.5rem;
    }
    
    .activity-image {
      height: 200px;
    }
    
    .activity-content {
      padding: 1.5rem;
    }
    
    .activity-title {
      font-size: 1.2rem;
    }
    
    .activity-actions {
      flex-direction: column;
      align-items: stretch;
    }
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
          <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Inicio</a>
          </li>
          <li class="breadcrumb-item active">Actividades</li>
        </ol>
      </nav>
      
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h1>Próximas Actividades</h1>
          <p class="lead mb-0" style="font-size: 1.3rem; opacity: 0.95;">
            Participa en nuestros eventos, talleres y actividades académicas. 
            ¡No te pierdas ninguna oportunidad de aprender y crecer!
          </p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <i class="bi bi-calendar-event" style="font-size: 8rem; opacity: 0.2;"></i>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ACTIVIDADES DESTACADAS --}}
<section class="featured-activities">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title" style="color: var(--brand-accent); font-size: 2.5rem; margin-bottom: 1rem;">
        🎯 Próximos Eventos Destacados
      </h2>
      <p class="lead text-muted">
        Las actividades más importantes que se realizarán próximamente
      </p>
    </div>

    <div class="row g-4">
      {{-- ACTIVIDAD 1 --}}
      <div class="col-lg-6">
        <article class="activity-card">
          <div class="activity-image">
            <img src="{{ asset('img/actividades/feria-ciencias.jpg') }}" alt="Feria de Ciencias 2025">
            <div class="activity-date-badge">
              <span class="day">25</span>
              <span class="month">Mar</span>
            </div>
            <div class="activity-status status-inscripciones">Inscripciones Abiertas</div>
          </div>
          <div class="activity-content">
            <div class="activity-time">
              <i class="bi bi-clock"></i>
              8:00 AM - 4:00 PM
            </div>
            <h3 class="activity-title">Feria de Ciencias e Innovación 2025</h3>
            <p class="activity-description">
              Presenta tu proyecto científico y participa en la competencia anual. 
              Categorías: Robótica, Química, Física, Biología y Tecnología.
            </p>
            <div class="activity-details">
              <div class="activity-detail">
                <i class="bi bi-geo-alt"></i>
                Auditorio Principal
              </div>
              <div class="activity-detail">
                <i class="bi bi-people"></i>
                Todos los grados
              </div>
              <div class="activity-detail">
                <i class="bi bi-calendar-check"></i>
                Inscripciones hasta el 20 de Marzo
              </div>
            </div>
            <div class="activity-actions">
              <a href="#" class="btn-inscribirse">
                <i class="bi bi-pencil-square"></i>
                Inscribirse
              </a>
              <a href="#" class="btn-info">
                <i class="bi bi-info-circle"></i>
                Más información
              </a>
            </div>
          </div>
        </article>
      </div>

      {{-- ACTIVIDAD 2 --}}
      <div class="col-lg-6">
        <article class="activity-card">
          <div class="activity-image">
            <img src="{{ asset('img/actividades/reunion-padres.jpg') }}" alt="Reunión de Padres">
            <div class="activity-date-badge">
              <span class="day">30</span>
              <span class="month">Mar</span>
            </div>
            <div class="activity-status status-confirmado">Confirmado</div>
          </div>
          <div class="activity-content">
            <div class="activity-time">
              <i class="bi bi-clock"></i>
              6:00 PM - 8:00 PM
            </div>
            <h3 class="activity-title">Reunión General de Padres de Familia</h3>
            <p class="activity-description">
              Informe académico del primer trimestre, presentación de nuevos proyectos 
              y espacios para resolver inquietudes.
            </p>
            <div class="activity-details">
              <div class="activity-detail">
                <i class="bi bi-geo-alt"></i>
                Auditorio Central
              </div>
              <div class="activity-detail">
                <i class="bi bi-people"></i>
                Padres de familia
              </div>
              <div class="activity-detail">
                <i class="bi bi-bell"></i>
                Asistencia obligatoria
              </div>
            </div>
            <div class="activity-actions">
              <a href="#" class="btn-inscribirse">
                <i class="bi bi-check-circle"></i>
                Confirmar Asistencia
              </a>
              <a href="#" class="btn-info">
                <i class="bi bi-download"></i>
                Descargar Agenda
              </a>
            </div>
          </div>
        </article>
      </div>

      {{-- ACTIVIDAD 3 --}}
      <div class="col-lg-6">
        <article class="activity-card">
          <div class="activity-image">
            <img src="{{ asset('img/actividades/simulacro.jpg') }}" alt="Simulacro de Emergencia">
            <div class="activity-date-badge">
              <span class="day">05</span>
              <span class="month">Abr</span>
            </div>
            <div class="activity-status status-proximo">Próximo</div>
          </div>
          <div class="activity-content">
            <div class="activity-time">
              <i class="bi bi-clock"></i>
              10:00 AM - 11:00 AM
            </div>
            <h3 class="activity-title">Simulacro de Evacuación</h3>
            <p class="activity-description">
              Práctica de evacuación para toda la comunidad educativa. 
              Actividad coordinada con Bomberos y Defensa Civil.
            </p>
            <div class="activity-details">
              <div class="activity-detail">
                <i class="bi bi-geo-alt"></i>
                Toda la institución
              </div>
              <div class="activity-detail">
                <i class="bi bi-people"></i>
                Estudiantes y personal
              </div>
              <div class="activity-detail">
                <i class="bi bi-shield-check"></i>
                Seguridad escolar
              </div>
            </div>
            <div class="activity-actions">
              <a href="#" class="btn-info">
                <i class="bi bi-info-circle"></i>
                Protocolo de seguridad
              </a>
            </div>
          </div>
        </article>
      </div>

      {{-- ACTIVIDAD 4 --}}
      <div class="col-lg-6">
        <article class="activity-card">
          <div class="activity-image">
            <img src="{{ asset('img/actividades/spelling-bee.jpg') }}" alt="Spelling Bee Competition">
            <div class="activity-date-badge">
              <span class="day">10</span>
              <span class="month">Abr</span>
            </div>
            <div class="activity-status status-inscripciones">Inscripciones Abiertas</div>
          </div>
          <div class="activity-content">
            <div class="activity-time">
              <i class="bi bi-clock"></i>
              2:00 PM - 5:00 PM
            </div>
            <h3 class="activity-title">Competencia de Spelling Bee en Inglés</h3>
            <p class="activity-description">
              Competencia anual de deletreo en inglés. Demuestra tu dominio del idioma 
              y compite por increíbles premios.
            </p>
            <div class="activity-details">
              <div class="activity-detail">
                <i class="bi bi-geo-alt"></i>
                Aula de Idiomas
              </div>
              <div class="activity-detail">
                <i class="bi bi-people"></i>
                Grados 6° a 11°
              </div>
              <div class="activity-detail">
                <i class="bi bi-trophy"></i>
                Premios especiales
              </div>
            </div>
            <div class="activity-actions">
              <a href="#" class="btn-inscribirse">
                <i class="bi bi-pencil-square"></i>
                Inscribirse
              </a>
              <a href="#" class="btn-info">
                <i class="bi bi-book"></i>
                Lista de palabras
              </a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

{{-- SECCIÓN DE INSCRIPCIONES Y CONTACTO --}}
<section style="padding: 4rem 0; background: white;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h3 class="fw-bold mb-4" style="color: var(--brand-accent);">
          ¿Tienes dudas sobre alguna actividad?
        </h3>
        <p class="lead text-muted mb-4">
          Nuestro equipo de coordinación está listo para ayudarte con información 
          sobre horarios, inscripciones y requisitos.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="{{ route('contacto') }}" class="btn-inscribirse">
            <i class="bi bi-envelope"></i>
            Contactar Coordinación
          </a>
          <a href="#" class="btn-info">
            <i class="bi bi-download"></i>
            Descargar Cronograma
          </a>
          <a href="{{ route('admisiones') }}" class="btn-info">
            <i class="bi bi-info-circle"></i>
            Proceso de Admisiones
          </a>
        </div>
        
        <div class="row g-4 mt-4">
          <div class="col-md-4">
            <div style="background: #f8fafc; padding: 2rem; border-radius: 15px; text-align: center;">
              <i class="bi bi-clock" style="font-size: 2rem; color: var(--brand-primary); margin-bottom: 1rem;"></i>
              <h6 class="fw-bold">Horario de Atención</h6>
              <p class="text-muted mb-0">Lunes a Viernes<br>7:00 AM - 5:00 PM</p>
            </div>
          </div>
          
          <div class="col-md-4">
            <div style="background: #f8fafc; padding: 2rem; border-radius: 15px; text-align: center;">
              <i class="bi bi-telephone" style="font-size: 2rem; color: var(--brand-primary); margin-bottom: 1rem;"></i>
              <h6 class="fw-bold">Coordinación Académica</h6>
              <p class="text-muted mb-0">Ext. 123<br>actividades@colegio.edu.co</p>
            </div>
          </div>
          
          <div class="col-md-4">
            <div style="background: #f8fafc; padding: 2rem; border-radius: 15px; text-align: center;">
              <i class="bi bi-geo-alt" style="font-size: 2rem; color: var(--brand-primary); margin-bottom: 1rem;"></i>
              <h6 class="fw-bold">Ubicación</h6>
              <p class="text-muted mb-0">Oficina de Coordinación<br>Primer piso - Bloque A</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection