@extends('layouts.app')

@section('title', 'Política de Calidad - Liceo Bilingüe')

@section('description', 'Conoce nuestra política de calidad y compromiso con la excelencia educativa')

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
  
  .quality-card {
    background: white;
    border-radius: 15px;
    padding: 2.5rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    height: 100%;
    border-left: 5px solid var(--brand-primary);
  }
  
  .quality-card:hover {
    transform: translateY(-5px);
  }
  
  .content-placeholder {
    background: #f8fafc;
    border: 2px dashed #cbd5e1;
    border-radius: 10px;
    padding: 2rem;
    margin: 2rem 0;
    text-align: center;
  }
  
  @media (max-width: 768px) {
    .hero-section {
      padding: 3rem 0 2rem;
    }
    
    .hero-section h1 {
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
        <li class="breadcrumb-item"><a href="{{ route('colegio') }}">El Colegio</a></li>
        <li class="breadcrumb-item active">Política de Calidad</li>
      </ol>
    </nav>
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h1>Política de Calidad</h1>
        <p class="lead mb-0">
          Nuestro compromiso firme con la excelencia educativa, la mejora continua 
          y la satisfacción de nuestra comunidad académica.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <i class="bi bi-award display-1 opacity-25"></i>
      </div>
    </div>
  </div>
</section>

{{-- DECLARACIÓN DE POLÍTICA --}}
<section class="content-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="quality-card">
          <div class="text-center mb-4">
            <h2 class="fw-bold text-primary mb-3">Declaración de Política de Calidad</h2>
            <div class="d-inline-flex align-items-center justify-content-center">
              <div style="width: 60px; height: 60px; background: var(--brand-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-shield-check text-white" style="font-size: 1.5rem;"></i>
              </div>
            </div>
          </div>
          
          <div class="content-placeholder">
            <h5 class="text-muted mb-3">
              <i class="bi bi-file-text me-2"></i>
              [ESPACIO PARA LA DECLARACIÓN COMPLETA DE POLÍTICA DE CALIDAD]
            </h5>
            <p class="text-muted mb-3">
              Aquí va la declaración oficial de la política de calidad del colegio. 
              Debe incluir el compromiso con la calidad educativa, la mejora continua, 
              la satisfacción del cliente, y el cumplimiento de requisitos.
            </p>
            <p class="text-muted mb-0">
              También debe mencionar los estándares que sigue la institución, 
              las certificaciones que posee, y cómo se implementa esta política 
              en todos los niveles de la organización.
            </p>
          </div>
          
          <div class="row mt-4">
            <div class="col-md-6 text-center">
              <h6 class="fw-bold text-primary">Fecha de emisión</h6>
              <p class="text-muted">[FECHA]</p>
            </div>
            <div class="col-md-6 text-center">
              <h6 class="fw-bold text-primary">Última actualización</h6>
              <p class="text-muted">[FECHA]</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- COMPROMISOS DE CALIDAD --}}
<section class="content-section bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Nuestros Compromisos de Calidad</h2>
      <p class="lead text-muted">
        Garantías que asumimos con nuestra comunidad educativa
      </p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="quality-card text-center">
          <div style="width: 70px; height: 70px; background: var(--brand-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: white; font-size: 1.8rem;">
            <i class="bi bi-mortarboard"></i>
          </div>
          <h5 class="fw-bold mb-3">Excelencia Académica</h5>
          <p class="text-muted">
            Garantizamos procesos educativos de alta calidad que preparen 
            a nuestros estudiantes para los desafíos del futuro.
          </p>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="quality-card text-center">
          <div style="width: 70px; height: 70px; background: var(--brand-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: white; font-size: 1.8rem;">
            <i class="bi bi-arrow-clockwise"></i>
          </div>
          <h5 class="fw-bold mb-3">Mejora Continua</h5>
          <p class="text-muted">
            Implementamos ciclos de mejora constante en todos nuestros 
            procesos para optimizar los resultados educativos.
          </p>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="quality-card text-center">
          <div style="width: 70px; height: 70px; background: var(--brand-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: white; font-size: 1.8rem;">
            <i class="bi bi-people-fill"></i>
          </div>
          <h5 class="fw-bold mb-3">Satisfacción Total</h5>
          <p class="text-muted">
            Nos comprometemos a superar las expectativas de estudiantes, 
            familias y toda la comunidad educativa.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- LLAMADA A LA ACCIÓN --}}
<section class="content-section bg-primary text-white">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="fw-bold mb-4">Experimenta la Diferencia de la Calidad</h2>
        <p class="lead mb-4">
          Nuestro compromiso con la excelencia se traduce en experiencias 
          educativas excepcionales que transforman vidas.
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