@extends('layouts.app')

@section('title', 'Noticias - Liceo Bilingüe')

@section('description', 'Mantente al día con las últimas noticias, eventos y actividades del Liceo Bilingüe Rodolfo R. Llinás')

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
  
  .news-section {
    padding: 6rem 0;
  }
  
  .news-item {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    margin-bottom: 3rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #f3f4f6;
  }
  
  .news-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
  }
  
  .news-image {
    position: relative;
    overflow: hidden;
  }
  
  .news-image img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    transition: transform 0.3s ease;
  }
  
  .news-item:hover .news-image img {
    transform: scale(1.05);
  }
  
  .news-category {
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
  
  /* Colores por categoría */
  .category-academico { background: #3b82f6; }    /* Azul */
  .category-eventos { background: #10b981; }      /* Verde */
  .category-deportes { background: #f59e0b; }     /* Naranja */
  .category-cultural { background: #8b5cf6; }     /* Morado */
  .category-internacional { background: #ef4444; } /* Rojo */
  .category-social { background: #06b6d4; }       /* Cyan */
  
  .news-content {
    padding: 2.5rem;
  }
  
  .news-date {
    color: #6b7280;
    font-size: 0.9rem;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
  }
  
  .news-date i {
    margin-right: 0.5rem;
    color: var(--brand-primary);
  }
  
  .news-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #111827;
    margin-bottom: 1rem;
    line-height: 1.3;
  }
  
  .news-title:hover {
    color: var(--brand-primary);
  }
  
  .news-excerpt {
    color: #6b7280;
    line-height: 1.6;
    margin-bottom: 1.5rem;
  }
  
  .read-more {
    display: inline-flex;
    align-items: center;
    color: var(--brand-primary);
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
  }
  
  .read-more:hover {
    color: var(--brand-accent);
    transform: translateX(5px);
  }
  
  .read-more i {
    margin-left: 0.5rem;
    transition: transform 0.3s ease;
  }
  
  .read-more:hover i {
    transform: translateX(3px);
  }
  
  /* Pattern alternativo */
  .news-item:nth-child(even) .row {
    flex-direction: row-reverse;
  }
  
  .news-stats {
    background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%);
    padding: 4rem 0;
    margin-bottom: 4rem;
  }
  
  .stat-card {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
  }
  
  .stat-card:hover {
    transform: translateY(-5px);
  }
  
  .stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--brand-primary);
    display: block;
    margin-bottom: 0.5rem;
  }
  
  .pagination-section {
    background: #f9fafb;
    padding: 3rem 0;
    text-align: center;
  }
  
  .btn-pagination {
    background: var(--brand-primary);
    color: white;
    border: none;
    padding: 0.75rem 2rem;
    border-radius: 25px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    margin: 0 0.5rem;
  }
  
  .btn-pagination:hover {
    background: var(--brand-accent);
    transform: translateY(-2px);
  }
  
  .btn-pagination.disabled {
    background: #d1d5db;
    color: #6b7280;
    cursor: not-allowed;
  }
  
  @media (max-width: 768px) {
    .hero-section {
      padding: 3rem 0 2rem;
    }
    
    .hero-section h1 {
      font-size: 2rem;
    }
    
    .news-section {
      padding: 4rem 0;
    }
    
    .news-item {
      margin-bottom: 2rem;
    }
    
    .news-image img {
      height: 200px;
    }
    
    .news-content {
      padding: 1.5rem;
    }
    
    .news-title {
      font-size: 1.2rem;
    }
    
    /* En móvil, siempre imagen arriba */
    .news-item:nth-child(even) .row {
      flex-direction: row;
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
          <li class="breadcrumb-item active">Noticias</li>
        </ol>
      </nav>
      
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h1>Noticias y Eventos</h1>
          <p class="lead mb-0" style="font-size: 1.3rem; opacity: 0.95;">
            Mantente al día con las últimas actividades, logros y eventos 
            de nuestra comunidad educativa.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <i class="bi bi-newspaper" style="font-size: 8rem; opacity: 0.2;"></i>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ESTADÍSTICAS --}}
<section class="news-stats">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="stat-card">
          <span class="stat-number">10</span>
          <h6 class="fw-bold">Noticias Recientes</h6>
          <p class="text-muted small mb-0">Últimas actividades</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="stat-card">
          <span class="stat-number">50+</span>
          <h6 class="fw-bold">Eventos este Año</h6>
          <p class="text-muted small mb-0">Actividades realizadas</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="stat-card">
          <span class="stat-number">15</span>
          <h6 class="fw-bold">Concursos</h6>
          <p class="text-muted small mb-0">Participaciones exitosas</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="stat-card">
          <span class="stat-number">100%</span>
          <h6 class="fw-bold">Participación</h6>
          <p class="text-muted small mb-0">Estudiantes involucrados</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- NOTICIAS --}}
<section class="news-section">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title" style="color: var(--brand-accent); font-size: 2.5rem; margin-bottom: 1rem;">
        📰 Últimas Noticias
      </h2>
      <p class="lead text-muted">
        Las actividades más recientes de nuestra comunidad educativa
      </p>
    </div>

    {{-- NOTICIA 1 - Imagen izquierda --}}
    <article class="news-item">
      <div class="row g-0">
        <div class="col-lg-5">
          <div class="news-image">
            <img src="{{ asset('img/noticias/noticia1.jpg') }}" alt="Feria de Ciencias 2025">
            <div class="news-category category-academico">Académico</div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="news-content">
            <div class="news-date">
              <i class="bi bi-calendar3"></i>
              15 de Marzo, 2025
            </div>
            <h3 class="news-title">
              <a href="#" style="text-decoration: none; color: inherit;">
                Exitosa Feria de Ciencias 2025: Innovación y Creatividad Estudiantil
              </a>
            </h3>
            <p class="news-excerpt">
              Nuestros estudiantes brillaron en la Feria de Ciencias anual, presentando 
              proyectos innovadores que demuestran su talento científico y creatividad. 
              Desde robots programados hasta experimentos de energía renovable...
            </p>
            <a href="#" class="read-more">
              Leer más <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </article>

    {{-- NOTICIA 2 - Imagen derecha --}}
    <article class="news-item">
      <div class="row g-0">
        <div class="col-lg-5">
          <div class="news-image">
            <img src="{{ asset('img/noticias/noticia2.jpg') }}" alt="Graduación 2025">
            <div class="news-category category-eventos">Eventos</div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="news-content">
            <div class="news-date">
              <i class="bi bi-calendar3"></i>
              10 de Marzo, 2025
            </div>
            <h3 class="news-title">
              <a href="#" style="text-decoration: none; color: inherit;">
                Ceremonia de Graduación: Nuevos Bachilleres Bilingües
              </a>
            </h3>
            <p class="news-excerpt">
              Con gran emoción celebramos la graduación de la promoción 2025. 
              Un total de 45 estudiantes recibieron su título de bachiller bilingüe, 
              listos para enfrentar nuevos desafíos universitarios...
            </p>
            <a href="#" class="read-more">
              Leer más <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </article>

    {{-- NOTICIA 3 - Imagen izquierda --}}
    <article class="news-item">
      <div class="row g-0">
        <div class="col-lg-5">
          <div class="news-image">
            <img src="{{ asset('img/noticias/noticia3.jpg') }}" alt="Olimpiadas Deportivas">
            <div class="news-category category-deportes">Deportes</div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="news-content">
            <div class="news-date">
              <i class="bi bi-calendar3"></i>
              5 de Marzo, 2025
            </div>
            <h3 class="news-title">
              <a href="#" style="text-decoration: none; color: inherit;">
                Olimpiadas Deportivas Intercolegiadas: Medallas de Oro
              </a>
            </h3>
            <p class="news-excerpt">
              Nuestro equipo deportivo se destacó en las olimpiadas intercolegiadas, 
              obteniendo el primer lugar en natación y atletismo. El esfuerzo y 
              dedicación de nuestros atletas...
            </p>
            <a href="#" class="read-more">
              Leer más <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </article>

    {{-- NOTICIA 4 - Imagen derecha --}}
    <article class="news-item">
      <div class="row g-0">
        <div class="col-lg-5">
          <div class="news-image">
            <img src="{{ asset('img/noticias/noticia4.jpg') }}" alt="Teatro Estudiantil">
            <div class="news-category category-cultural">Cultural</div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="news-content">
            <div class="news-date">
              <i class="bi bi-calendar3"></i>
              1 de Marzo, 2025
            </div>
            <h3 class="news-title">
              <a href="#" style="text-decoration: none; color: inherit;">
                Festival de Teatro: "Romeo y Julieta" en Versión Bilingüe
              </a>
            </h3>
            <p class="news-excerpt">
              El grupo de teatro estudiantil presentó una magistral adaptación 
              bilingüe de Romeo y Julieta, cautivando al público con su talento 
              actoral y dominio de ambos idiomas...
            </p>
            <a href="#" class="read-more">
              Leer más <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </article>

    {{-- NOTICIA 5 - Imagen izquierda --}}
    <article class="news-item">
      <div class="row g-0">
        <div class="col-lg-5">
          <div class="news-image">
            <img src="{{ asset('img/noticias/noticia5.jpg') }}" alt="Intercambio Cultural">
            <div class="news-category category-internacional">Internacional</div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="news-content">
            <div class="news-date">
              <i class="bi bi-calendar3"></i>
              25 de Febrero, 2025
            </div>
            <h3 class="news-title">
              <a href="#" style="text-decoration: none; color: inherit;">
                Intercambio Cultural con Colegio de Estados Unidos
              </a>
            </h3>
            <p class="news-excerpt">
              Recibimos la visita de 20 estudiantes de una escuela hermana en Texas, 
              fortaleciendo lazos internacionales y promoviendo el intercambio 
              cultural y académico...
            </p>
            <a href="#" class="read-more">
              Leer más <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </article>

    {{-- NOTICIA 6 - Imagen derecha --}}
    <article class="news-item">
      <div class="row g-0">
        <div class="col-lg-5">
          <div class="news-image">
            <img src="{{ asset('img/noticias/noticia6.jpg') }}" alt="Concurso de Matemáticas">
            <div class="news-category category-academico">Académico</div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="news-content">
            <div class="news-date">
              <i class="bi bi-calendar3"></i>
              20 de Febrero, 2025
            </div>
            <h3 class="news-title">
              <a href="#" style="text-decoration: none; color: inherit;">
                Primer Lugar en Olimpiadas Departamentales de Matemáticas
              </a>
            </h3>
            <p class="news-excerpt">
              María Fernanda Gómez, estudiante de 10° grado, obtuvo el primer lugar 
              en las Olimpiadas Departamentales de Matemáticas, representando 
              con orgullo a nuestra institución...
            </p>
            <a href="#" class="read-more">
              Leer más <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </article>

    {{-- MÁS NOTICIAS (Solo títulos para simular las 10) --}}
    <div class="row g-4 mt-4">
      <div class="col-lg-6">
        <div style="background: white; border-radius: 10px; padding: 1.5rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border-left: 4px solid var(--brand-primary);">
          <div class="news-date">
            <i class="bi bi-calendar3"></i>
            15 de Febrero, 2025
          </div>
          <h6 class="fw-bold mb-2">Taller de Robótica para Padres de Familia</h6>
          <p class="text-muted small mb-2">Los padres participaron en un emocionante taller...</p>
          <a href="#" class="read-more">Ver más <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div style="background: white; border-radius: 10px; padding: 1.5rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border-left: 4px solid var(--brand-primary);">
          <div class="news-date">
            <i class="bi bi-calendar3"></i>
            10 de Febrero, 2025
          </div>
          <h6 class="fw-bold mb-2">Concurso de Spelling Bee en Inglés</h6>
          <p class="text-muted small mb-2">Estudiantes demostraron su dominio del inglés...</p>
          <a href="#" class="read-more">Ver más <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div style="background: white; border-radius: 10px; padding: 1.5rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border-left: 4px solid var(--brand-primary);">
          <div class="news-date">
            <i class="bi bi-calendar3"></i>
            5 de Febrero, 2025
          </div>
          <h6 class="fw-bold mb-2">Campaña Ecológica: Cuidemos Nuestro Planeta</h6>
          <p class="text-muted small mb-2">Iniciativa estudiantil para el cuidado ambiental...</p>
          <a href="#" class="read-more">Ver más <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div style="background: white; border-radius: 10px; padding: 1.5rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border-left: 4px solid var(--brand-primary);">
          <div class="news-date">
            <i class="bi bi-calendar3"></i>
            1 de Febrero, 2025
          </div>
          <h6 class="fw-bold mb-2">Inauguración del Nuevo Laboratorio de Idiomas</h6>
          <p class="text-muted small mb-2">Tecnología de punta para el aprendizaje bilingüe...</p>
          <a href="#" class="read-more">Ver más <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- PAGINACIÓN Y ARCHIVO --}}
<section class="pagination-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h4 class="fw-bold mb-3" style="color: var(--brand-accent);">¿Buscas noticias anteriores?</h4>
        <p class="text-muted mb-4">
          Las noticias más antiguas se archivan automáticamente. 
          Puedes encontrarlas en nuestro archivo de publicaciones.
        </p>
        <div class="d-flex justify-content-center gap-3">
          <a href="{{ route('publicaciones') }}" class="btn-pagination">
            <i class="bi bi-archive me-2"></i>Ver Archivo
          </a>
          <a href="{{ route('actividades') }}" class="btn-pagination">
            <i class="bi bi-calendar-event me-2"></i>Próximas Actividades
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection