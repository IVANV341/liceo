@extends('layouts.app')

@section('title', 'Básica Secundaria (11-14 años) - Liceo Bilingüe')

@section('content')

{{-- HERO --}}
<div style="background: linear-gradient(135deg, #7c3aed 0%, #5b21b6 100%); color: white; padding: 6rem 0 4rem; margin-top: -20px; position: relative; overflow: hidden;">
  <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('data:image/svg+xml,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 60 60&quot;><circle cx=&quot;30&quot; cy=&quot;30&quot; r=&quot;2&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/><circle cx=&quot;10&quot; cy=&quot;10&quot; r=&quot;1&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/></svg>'); opacity: 0.3;"></div>
  
  <div class="container" style="position: relative; z-index: 1;">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb" style="background: transparent; padding: 0; margin-bottom: 0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.8);">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('servicios') }}" style="color: rgba(255,255,255,0.8);">Servicios</a></li>
        <li class="breadcrumb-item active" style="color: white;">Básica Secundaria</li>
      </ol>
    </nav>
    
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div style="background: rgba(255,255,255,0.2); color: white; padding: 0.8rem 2rem; border-radius: 30px; font-weight: 700; display: inline-block; margin-bottom: 1.5rem;">
          📖 11 - 14 años
        </div>
        <h1 style="font-size: 3rem; font-weight: 900; margin-bottom: 1.5rem;">Básica Secundaria</h1>
        <p style="font-size: 1.3rem; opacity: 0.95; margin-bottom: 2rem;">
          Desarrollando talentos únicos y fortaleciendo competencias académicas 
          con orientación vocacional y liderazgo estudiantil para el futuro.
        </p>
        <div class="d-flex gap-3">
          <a href="{{ route('contacto') }}" style="background: white; color: #7c3aed; padding: 1rem 2.5rem; border-radius: 25px; font-weight: 600; text-decoration: none; border: 2px solid white;">
            🎯 Descubre tu Talento
          </a>
          <a href="{{ route('admisiones') }}" style="background: transparent; color: white; padding: 1rem 2.5rem; border-radius: 25px; font-weight: 600; text-decoration: none; border: 2px solid white;">
            💫 Más Información
          </a>
        </div>
      </div>
      <div class="col-lg-4 text-center">
        <i class="bi bi-award-fill" style="font-size: 8rem; opacity: 0.2;"></i>
      </div>
    </div>
  </div>
</div>

{{-- OVERVIEW --}}
<div style="padding: 6rem 0; background: linear-gradient(135deg, #ede9fe 0%, #ddd6fe 100%);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="background: white; border-radius: 25px; padding: 4rem; box-shadow: 0 25px 50px rgba(0,0,0,0.15); border: 1px solid #c4b5fd;">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h2 style="color: #5b21b6; font-size: 2.2rem; font-weight: bold; margin-bottom: 1.5rem;">
                🌟 Descubriendo Vocaciones y Talentos
              </h2>
              <p style="font-size: 1.2rem; color: #666; margin-bottom: 1.5rem;">
                En secundaria profundizamos el conocimiento académico mientras exploramos 
                aptitudes e intereses. Nuestros estudiantes desarrollan pensamiento crítico, 
                liderazgo y una visión clara de su proyecto de vida.
              </p>
              <p style="color: #666;">
                Con orientación vocacional personalizada y metodología bilingüe avanzada, 
                preparamos jóvenes seguros de sí mismos, comprometidos con la excelencia 
                y listos para los desafíos del bachillerato.
              </p>
            </div>
            <div class="col-lg-4 text-center">
              <div style="width: 150px; height: 150px; background: linear-gradient(135deg, #ddd6fe, #c4b5fd); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                <i class="bi bi-star-fill" style="font-size: 4rem; color: #7c3aed;"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- GRADOS --}}
<div style="padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 style="font-size: 2.5rem; color: #5b21b6; margin-bottom: 1rem;">
        🎓 Nuestros Grados
      </h2>
      <p style="color: #666; font-size: 1.1rem;">De 6° a 9° grado con enfoque vocacional</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-6">
        <div style="background: white; border-radius: 20px; padding: 3rem; box-shadow: 0 15px 35px rgba(0,0,0,0.1); height: 100%; border-left: 5px solid #7c3aed;">
          <div class="row align-items-center">
            <div class="col-md-3 text-center">
              <div style="width: 80px; height: 80px; background: #7c3aed; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 1.8rem;">
                <span style="font-weight: bold;">6°-7°</span>
              </div>
            </div>
            <div class="col-md-9">
              <h5 style="color: #5b21b6; margin-bottom: 1rem;">Sexto y Séptimo</h5>
              <ul style="list-style: none; padding: 0;">
                <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #7c3aed; margin-right: 0.5rem;"></i>Adaptación al bachillerato</li>
                <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #7c3aed; margin-right: 0.5rem;"></i>Profundización académica</li>
                <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #7c3aed; margin-right: 0.5rem;"></i>Metodología de estudio</li>
                <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #7c3aed; margin-right: 0.5rem;"></i>Bilingüismo avanzado</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div style="background: white; border-radius: 20px; padding: 3rem; box-shadow: 0 15px 35px rgba(0,0,0,0.1); height: 100%; border-left: 5px solid #7c3aed;">
          <div class="row align-items-center">
            <div class="col-md-3 text-center">
              <div style="width: 80px; height: 80px; background: #7c3aed; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: white; font-size: 1.8rem;">
                <span style="font-weight: bold;">8°-9°</span>
              </div>
            </div>
            <div class="col-md-9">
              <h5 style="color: #5b21b6; margin-bottom: 1rem;">Octavo y Noveno</h5>
              <ul style="list-style: none; padding: 0;">
                <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #7c3aed; margin-right: 0.5rem;"></i>Orientación vocacional</li>
                <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #7c3aed; margin-right: 0.5rem;"></i>Liderazgo estudiantil</li>
                <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #7c3aed; margin-right: 0.5rem;"></i>Proyectos de investigación</li>
                <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #7c3aed; margin-right: 0.5rem;"></i>Preparación media</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="text-center mt-4">
      <div style="background: #ede9fe; border-radius: 15px; padding: 2rem; border: 2px dashed #7c3aed;">
        <h6 style="color: #5b21b6; margin-bottom: 1rem;">🎯 Proyecto de Vida</h6>
        <p style="color: #666; margin: 0;">
          Al finalizar noveno grado, cada estudiante tiene claridad sobre sus fortalezas, 
          intereses vocacionales y metas para la educación media.
        </p>
      </div>
    </div>
  </div>
</div>

{{-- AREAS ACADÉMICAS --}}
<div style="background: linear-gradient(135deg, #ede9fe 0%, #ddd6fe 100%); padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 style="color: #5b21b6; font-size: 2.5rem; margin-bottom: 1rem;">📚 Áreas de Profundización</h2>
      <p style="color: #666; font-size: 1.1rem;">Currículo especializado y exigente</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div style="background: white; border-radius: 15px; padding: 2.5rem; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.1); height: 100%;" 
             onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <div style="width: 70px; height: 70px; background: #ede9fe; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #7c3aed; font-size: 1.8rem;">
            <i class="bi bi-journal-text"></i>
          </div>
          <h6 style="color: #5b21b6; margin-bottom: 1rem;">Humanidades</h6>
          <p style="color: #666; font-size: 0.9rem;">Lenguaje, literatura, filosofía y pensamiento crítico.</p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div style="background: white; border-radius: 15px; padding: 2.5rem; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.1); height: 100%;" 
             onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <div style="width: 70px; height: 70px; background: #ede9fe; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #7c3aed; font-size: 1.8rem;">
            <i class="bi bi-calculator"></i>
          </div>
          <h6 style="color: #5b21b6; margin-bottom: 1rem;">Matemáticas</h6>
          <p style="color: #666; font-size: 0.9rem;">Álgebra, geometría y estadística avanzada.</p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div style="background: white; border-radius: 15px; padding: 2.5rem; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.1); height: 100%;" 
             onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <div style="width: 70px; height: 70px; background: #ede9fe; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #7c3aed; font-size: 1.8rem;">
            <i class="bi bi-atom"></i>
          </div>
          <h6 style="color: #5b21b6; margin-bottom: 1rem;">Ciencias</h6>
          <p style="color: #666; font-size: 0.9rem;">Física, química, biología y método científico.</p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div style="background: white; border-radius: 15px; padding: 2.5rem; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.1); height: 100%;" 
             onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <div style="width: 70px; height: 70px; background: #ede9fe; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #7c3aed; font-size: 1.8rem;">
            <i class="bi bi-globe-americas"></i>
          </div>
          <h6 style="color: #5b21b6; margin-bottom: 1rem;">Ciencias Sociales</h6>
          <p style="color: #666; font-size: 0.9rem;">Historia, geografía, economía y política.</p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div style="background: white; border-radius: 15px; padding: 2.5rem; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.1); height: 100%;" 
             onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <div style="width: 70px; height: 70px; background: #ede9fe; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #7c3aed; font-size: 1.8rem;">
            <i class="bi bi-translate"></i>
          </div>
          <h6 style="color: #5b21b6; margin-bottom: 1rem;">Idiomas</h6>
          <p style="color: #666; font-size: 0.9rem;">Inglés avanzado y segunda lengua extranjera.</p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div style="background: white; border-radius: 15px; padding: 2.5rem; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.1); height: 100%;" 
             onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <div style="width: 70px; height: 70px; background: #ede9fe; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #7c3aed; font-size: 1.8rem;">
            <i class="bi bi-laptop"></i>
          </div>
          <h6 style="color: #5b21b6; margin-bottom: 1rem;">Tecnología</h6>
          <p style="color: #666; font-size: 0.9rem;">Programación, diseño digital y competencias TIC.</p>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- LIDERAZGO --}}
<div style="padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 style="color: #5b21b6; font-size: 2.5rem; margin-bottom: 1rem;">👑 Liderazgo Estudiantil</h2>
      <p style="color: #666; font-size: 1.1rem;">Formando líderes responsables y comprometidos</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-4">
        <div style="background: white; border-radius: 20px; padding: 3rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); height: 100%; border: 1px solid #c4b5fd;">
          <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #7c3aed, #5b21b6); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; color: white; font-size: 2rem;">
            <i class="bi bi-people-fill"></i>
          </div>
          <h5 style="color: #5b21b6; margin-bottom: 1.5rem;">Gobierno Estudiantil</h5>
          <p style="color: #666;">
            Participación activa en decisiones institucionales y representación 
            estudiantil con responsabilidad y compromiso.
          </p>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div style="background: white; border-radius: 20px; padding: 3rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); height: 100%; border: 1px solid #c4b5fd;">
          <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #7c3aed, #5b21b6); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; color: white; font-size: 2rem;">
            <i class="bi bi-heart-fill"></i>
          </div>
          <h5 style="color: #5b21b6; margin-bottom: 1.5rem;">Servicio Social</h5>
          <p style="color: #666;">
            Proyectos comunitarios que desarrollan conciencia social y 
            compromiso con el bienestar de otros.
          </p>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div style="background: white; border-radius: 20px; padding: 3rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); height: 100%; border: 1px solid #c4b5fd;">
          <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #7c3aed, #5b21b6); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; color: white; font-size: 2rem;">
            <i class="bi bi-trophy-fill"></i>
          </div>
          <h5 style="color: #5b21b6; margin-bottom: 1.5rem;">Clubes y Concursos</h5>
          <p style="color: #666;">
            Participación en olimpiadas académicas, debates, arte y 
            deportes que potencian talentos únicos.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- ORIENTACIÓN VOCACIONAL --}}
<div style="background: linear-gradient(135deg, #ede9fe 0%, #ddd6fe 100%); padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 style="color: #5b21b6; font-size: 2.5rem; margin-bottom: 1rem;">🎯 Orientación Vocacional</h2>
      <p style="color: #666; font-size: 1.1rem;">Descubriendo vocaciones y construyendo proyectos de vida</p>
    </div>
    
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div style="background: white; border-radius: 20px; padding: 3rem; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
          <div class="row g-4">
            <div class="col-md-6">
              <div style="padding: 1.5rem; background: #ede9fe; border-radius: 10px; text-align: center;">
                <i class="bi bi-search" style="font-size: 2rem; color: #7c3aed; margin-bottom: 1rem;"></i>
                <h6 style="color: #5b21b6; margin-bottom: 1rem;">Exploración de Intereses</h6>
                <p style="color: #666; margin: 0; font-size: 0.9rem;">Tests vocacionales y actividades de autoconocimiento.</p>
              </div>
            </div>
            
            <div class="col-md-6">
              <div style="padding: 1.5rem; background: #ede9fe; border-radius: 10px; text-align: center;">
                <i class="bi bi-briefcase" style="font-size: 2rem; color: #7c3aed; margin-bottom: 1rem;"></i>
                <h6 style="color: #5b21b6; margin-bottom: 1rem;">Exploración Profesional</h6>
                <p style="color: #666; margin: 0; font-size: 0.9rem;">Conferencias con profesionales y visitas empresariales.</p>
              </div>
            </div>
            
            <div class="col-md-6">
              <div style="padding: 1.5rem; background: #ede9fe; border-radius: 10px; text-align: center;">
                <i class="bi bi-graph-up" style="font-size: 2rem; color: #7c3aed; margin-bottom: 1rem;"></i>
                <h6 style="color: #5b21b6; margin-bottom: 1rem;">Seguimiento Académico</h6>
                <p style="color: #666; margin: 0; font-size: 0.9rem;">Análisis de fortalezas y áreas de desarrollo.</p>
              </div>
            </div>
            
            <div class="col-md-6">
              <div style="padding: 1.5rem; background: #ede9fe; border-radius: 10px; text-align: center;">
                <i class="bi bi-map" style="font-size: 2rem; color: #7c3aed; margin-bottom: 1rem;"></i>
                <h6 style="color: #5b21b6; margin-bottom: 1rem;">Proyecto de Vida</h6>
                <p style="color: #666; margin: 0; font-size: 0.9rem;">Construcción de metas y plan de carrera.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- CTA --}}
<div style="background: linear-gradient(135deg, #7c3aed 0%, #5b21b6 100%); color: white; padding: 5rem 0; text-align: center;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 1.5rem;">
          🌟 ¿Listo para Descubrir tu Potencial?
        </h2>
        <p style="font-size: 1.3rem; opacity: 0.95; margin-bottom: 2.5rem;">
          Esta es la etapa perfecta para explorar talentos, desarrollar liderazgo 
          y construir las bases de un futuro extraordinario.
        </p>
        <div class="d-flex justify-content-center gap-3">
          <a href="{{ route('contacto') }}" style="background: white; color: #7c3aed; padding: 1rem 2.5rem; border-radius: 25px; font-weight: 600; text-decoration: none; border: 2px solid white;">
            🎯 Explora el Programa
          </a>
          <a href="{{ route('admisiones') }}" style="background: transparent; color: white; padding: 1rem 2.5rem; border-radius: 25px; font-weight: 600; text-decoration: none; border: 2px solid white;">
            📞 Más Información
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection