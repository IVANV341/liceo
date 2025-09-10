@extends('layouts.app')

@section('title', 'Educación Media (10-11) - Liceo Bilingüe')

@section('content')

<div style="background: linear-gradient(135deg, #059669 0%, #047857 100%); color: white; padding: 6rem 0 4rem; margin-top: -20px; position: relative; overflow: hidden;">
  <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('data:image/svg+xml,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 60 60&quot;><circle cx=&quot;30&quot; cy=&quot;30&quot; r=&quot;2&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/><circle cx=&quot;10&quot; cy=&quot;10&quot; r=&quot;1&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/></svg>'); opacity: 0.3;"></div>
  
  <div class="container" style="position: relative; z-index: 1;">
    <nav aria-label="breadcrumb" style="margin-bottom: 2rem;">
      <ol class="breadcrumb" style="background: transparent; padding: 0; margin-bottom: 0; font-size: 0.9rem;">
        <li class="breadcrumb-item">
          <a href="{{ route('home') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s ease;">
            <i class="bi bi-house-door me-1"></i>Inicio
          </a>
        </li>
        <li class="breadcrumb-item">
          <a href="{{ route('servicios') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s ease;">
            <i class="bi bi-mortarboard me-1"></i>Servicios
          </a>
        </li>
        <li class="breadcrumb-item active" style="color: rgba(255,255,255,0.9); font-weight: 500;">
          Educación Media
        </li>
      </ol>
    </nav>
    
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div style="background: rgba(255,255,255,0.2); color: white; padding: 0.8rem 2rem; border-radius: 30px; font-weight: 700; display: inline-block; margin-bottom: 1.5rem;">
          🎓 10 - 11 Grado
        </div>
        <h1 style="font-size: clamp(2rem, 8vw, 3rem); font-weight: 900; margin-bottom: 1.5rem;">Educación Media</h1>
        <p style="font-size: clamp(1rem, 4vw, 1.3rem); opacity: 0.95; margin-bottom: 2.5rem; line-height: 1.6;">
          El último escalón hacia el éxito. Formamos bachilleres integrales con 
          competencias para la vida universitaria y profesional del siglo XXI.
        </p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="{{ route('contacto') }}" class="btn btn-light btn-lg">
            🎯 Conoce el Bachillerato
          </a>
          <a href="{{ route('admisiones') }}" class="btn btn-outline-light btn-lg">
            🌟 Proceso de Admisión
          </a>
        </div>
      </div>
      <div class="col-lg-4 text-center">
        <i class="bi bi-trophy-fill" style="font-size: clamp(4rem, 12vw, 8rem); opacity: 0.2;"></i>
      </div>
    </div>
  </div>
</div>

<div style="padding: 6rem 0; background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card shadow-lg border-0" style="border-radius: 25px; border-left: 5px solid #059669;">
          <div class="card-body p-4 p-lg-5">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <h2 style="color: #047857; font-size: clamp(1.5rem, 5vw, 2.2rem); font-weight: bold; margin-bottom: 1.5rem;">
                  🏆 Preparándote para el Mundo
                </h2>
                <p style="font-size: 1.2rem; color: #666; margin-bottom: 1.5rem; line-height: 1.6;">
                  En educación media culminamos tu formación integral con un enfoque 
                  especializado que te prepara para las mejores universidades del país 
                  y del mundo. Desarrollamos líderes con pensamiento crítico y visión global.
                </p>
                <p style="color: #666; line-height: 1.6;">
                  Con énfasis en investigación, proyectos de impacto social y certificaciones 
                  internacionales, garantizamos que nuestros bachilleres estén listos 
                  para cualquier desafío académico y profesional.
                </p>
              </div>
              <div class="col-lg-4 text-center">
                <div class="d-flex align-items-center justify-content-center mx-auto" style="width: 150px; height: 150px; background: linear-gradient(135deg, #a7f3d0, #6ee7b7); border-radius: 50%;">
                  <i class="bi bi-mortarboard-fill" style="font-size: 4rem; color: #059669;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title" style="color: #047857; font-size: clamp(1.8rem, 6vw, 2.5rem);">
        📚 Grados y Especialización
      </h2>
      <p style="color: #666; font-size: 1.1rem;">Formación especializada en décimo y once</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="card h-100 shadow border-0" style="border-radius: 20px; border-left: 5px solid #059669;">
          <div class="card-body p-4">
            <div class="row align-items-center">
              <div class="col-md-3 text-center">
                <div class="d-flex align-items-center justify-content-center mx-auto" style="width: 100px; height: 100px; background: #059669; border-radius: 50%; color: white; font-size: 2.5rem;">
                  <span style="font-weight: bold;">10°</span>
                </div>
              </div>
              <div class="col-md-9">
                <h5 style="color: #047857; margin-bottom: 1rem; font-size: 1.3rem;">Décimo Grado</h5>
                <ul class="list-unstyled">
                  <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-success me-2"></i>Exploración de carreras profesionales</li>
                  <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-success me-2"></i>Fortalecimiento en ciencias y matemáticas</li>
                  <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-success me-2"></i>Desarrollo de habilidades investigativas</li>
                  <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-success me-2"></i>Preparación para pruebas ICFES</li>
                  <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-success me-2"></i>Certificación B2 en inglés</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="card h-100 shadow border-0" style="border-radius: 20px; border-left: 5px solid #059669;">
          <div class="card-body p-4">
            <div class="row align-items-center">
              <div class="col-md-3 text-center">
                <div class="d-flex align-items-center justify-content-center mx-auto" style="width: 100px; height: 100px; background: #059669; border-radius: 50%; color: white; font-size: 2.5rem;">
                  <span style="font-weight: bold;">11°</span>
                </div>
              </div>
              <div class="col-md-9">
                <h5 style="color: #047857; margin-bottom: 1rem; font-size: 1.3rem;">Once Grado</h5>
                <ul class="list-unstyled">
                  <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-success me-2"></i>Proyecto de investigación final</li>
                  <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-success me-2"></i>Preparación universitaria intensiva</li>
                  <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-success me-2"></i>Prácticas profesionales</li>
                  <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-success me-2"></i>Examen de Estado ICFES</li>
                  <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-success me-2"></i>Grado de bachiller</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%); padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title" style="color: #047857; font-size: clamp(1.8rem, 6vw, 2.5rem);">🔬 Áreas de Énfasis</h2>
      <p style="color: #666; font-size: 1.1rem;">Especialización según vocación e intereses</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px; background: #d1fae5; border-radius: 50%; color: #059669; font-size: 2rem;">
              <i class="bi bi-laptop"></i>
            </div>
            <h6 style="color: #047857; margin-bottom: 1rem; font-size: 1.1rem;">Ciencias y Tecnología</h6>
            <p style="color: #666; font-size: 0.9rem; line-height: 1.5;">
              Matemáticas avanzadas, física, química, biología y programación. 
              Ideal para ingenierías y ciencias exactas.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px; background: #d1fae5; border-radius: 50%; color: #059669; font-size: 2rem;">
              <i class="bi bi-people-fill"></i>
            </div>
            <h6 style="color: #047857; margin-bottom: 1rem; font-size: 1.1rem;">Humanidades y Sociales</h6>
            <p style="color: #666; font-size: 0.9rem; line-height: 1.5;">
              Literatura, filosofía, historia, ciencias sociales y debate. 
              Preparación para derecho, comunicación y ciencias sociales.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px; background: #d1fae5; border-radius: 50%; color: #059669; font-size: 2rem;">
              <i class="bi bi-graph-up"></i>
            </div>
            <h6 style="color: #047857; margin-bottom: 1rem; font-size: 1.1rem;">Economía y Gestión</h6>
            <p style="color: #666; font-size: 0.9rem; line-height: 1.5;">
              Administración, economía, finanzas y emprendimiento. 
              Base sólida para carreras empresariales.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px; background: #d1fae5; border-radius: 50%; color: #059669; font-size: 2rem;">
              <i class="bi bi-heart-pulse"></i>
            </div>
            <h6 style="color: #047857; margin-bottom: 1rem; font-size: 1.1rem;">Ciencias de la Salud</h6>
            <p style="color: #666; font-size: 0.9rem; line-height: 1.5;">
              Biología, química orgánica, anatomía y primeros auxilios. 
              Preparación para medicina y ciencias de la salud.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px; background: #d1fae5; border-radius: 50%; color: #059669; font-size: 2rem;">
              <i class="bi bi-palette"></i>
            </div>
            <h6 style="color: #047857; margin-bottom: 1rem; font-size: 1.1rem;">Artes y Diseño</h6>
            <p style="color: #666; font-size: 0.9rem; line-height: 1.5;">
              Artes visuales, diseño gráfico, música y expresión creativa. 
              Portafolio profesional para carreras artísticas.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px; background: #d1fae5; border-radius: 50%; color: #059669; font-size: 2rem;">
              <i class="bi bi-globe-americas"></i>
            </div>
            <h6 style="color: #047857; margin-bottom: 1rem; font-size: 1.1rem;">Lenguas Extranjeras</h6>
            <p style="color: #666; font-size: 0.9rem; line-height: 1.5;">
              Inglés avanzado, francés y alemán. Certificaciones internacionales 
              y preparación para programas de intercambio.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title" style="color: #047857; font-size: clamp(1.8rem, 6vw, 2.5rem);">🎯 Preparación Universitaria</h2>
      <p style="color: #666; font-size: 1.1rem;">Programas especializados para el éxito académico</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="card h-100 shadow border-0" style="border-radius: 20px; border: 1px solid #6ee7b7;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 100px; height: 100px; background: linear-gradient(135deg, #059669, #047857); border-radius: 50%; color: white; font-size: 2.5rem;">
              <i class="bi bi-award-fill"></i>
            </div>
            <h5 style="color: #047857; margin-bottom: 1.5rem; font-size: 1.3rem;">Programa ICFES</h5>
            <p style="color: #666; line-height: 1.6;">
              Preparación intensiva para las pruebas de Estado con simulacros, 
              análisis de resultados y estrategias específicas para obtener 
              puntajes sobresalientes.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="card h-100 shadow border-0" style="border-radius: 20px; border: 1px solid #6ee7b7;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 100px; height: 100px; background: linear-gradient(135deg, #059669, #047857); border-radius: 50%; color: white; font-size: 2.5rem;">
              <i class="bi bi-mortarboard"></i>
            </div>
            <h5 style="color: #047857; margin-bottom: 1.5rem; font-size: 1.3rem;">Orientación Vocacional</h5>
            <p style="color: #666; line-height: 1.6;">
              Acompañamiento personalizado para la elección de carrera, 
              visitas universitarias, conferencias profesionales y 
              construcción del proyecto de vida.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="card h-100 shadow border-0" style="border-radius: 20px; border: 1px solid #6ee7b7;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 100px; height: 100px; background: linear-gradient(135deg, #059669, #047857); border-radius: 50%; color: white; font-size: 2.5rem;">
              <i class="bi bi-globe"></i>
            </div>
            <h5 style="color: #047857; margin-bottom: 1.5rem; font-size: 1.3rem;">Programas Internacionales</h5>
            <p style="color: #666; line-height: 1.6;">
              Preparación para SAT, TOEFL, IELTS y otros exámenes internacionales. 
              Becas y oportunidades de estudio en universidades del exterior.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="card h-100 shadow border-0" style="border-radius: 20px; border: 1px solid #6ee7b7;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 100px; height: 100px; background: linear-gradient(135deg, #059669, #047857); border-radius: 50%; color: white; font-size: 2.5rem;">
              <i class="bi bi-lightbulb"></i>
            </div>
            <h5 style="color: #047857; margin-bottom: 1.5rem; font-size: 1.3rem;">Proyecto de Grado</h5>
            <p style="color: #666; line-height: 1.6;">
              Investigación científica o proyecto de impacto social como requisito 
              de graduación. Desarrollo de competencias investigativas y pensamiento crítico.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%); padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title" style="color: #047857; font-size: clamp(1.8rem, 6vw, 2.5rem);">⏰ Horario Académico</h2>
      <p style="color: #666; font-size: 1.1rem;">Jornada intensiva de formación integral</p>
    </div>
    
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="card mb-3 shadow-sm border-0" style="border-radius: 10px; border-left: 4px solid #059669;">
          <div class="card-body p-3">
            <div class="d-flex align-items-center flex-wrap">
              <span class="badge me-3 mb-2 mb-md-0" style="background: #059669; color: white; padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700;">6:30 AM</span>
              <div>
                <h6 style="color: #047857; margin-bottom: 0.5rem;">🌅 Llegada y Preparación</h6>
                <p style="color: #666; margin: 0;">Organización personal y revisión de agenda académica.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card mb-3 shadow-sm border-0" style="border-radius: 10px; border-left: 4px solid #059669;">
          <div class="card-body p-3">
            <div class="d-flex align-items-center flex-wrap">
              <span class="badge me-3 mb-2 mb-md-0" style="background: #059669; color: white; padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700;">7:00 AM</span>
              <div>
                <h6 style="color: #047857; margin-bottom: 0.5rem;">📚 Clases de Especialización</h6>
                <p style="color: #666; margin: 0;">Materias según área de énfasis elegida.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card mb-3 shadow-sm border-0" style="border-radius: 10px; border-left: 4px solid #059669;">
          <div class="card-body p-3">
            <div class="d-flex align-items-center flex-wrap">
              <span class="badge me-3 mb-2 mb-md-0" style="background: #059669; color: white; padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700;">10:00 AM</span>
              <div>
                <h6 style="color: #047857; margin-bottom: 0.5rem;">☕ Pausa Académica</h6>
                <p style="color: #666; margin: 0;">Descanso y socialización entre estudiantes.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card mb-3 shadow-sm border-0" style="border-radius: 10px; border-left: 4px solid #059669;">
          <div class="card-body p-3">
            <div class="d-flex align-items-center flex-wrap">
              <span class="badge me-3 mb-2 mb-md-0" style="background: #059669; color: white; padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700;">12:00 PM</span>
              <div>
                <h6 style="color: #047857; margin-bottom: 0.5rem;">🍽️ Almuerzo</h6>
                <p style="color: #666; margin: 0;">Tiempo de alimentación y descanso.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card mb-3 shadow-sm border-0" style="border-radius: 10px; border-left: 4px solid #059669;">
          <div class="card-body p-3">
            <div class="d-flex align-items-center flex-wrap">
              <span class="badge me-3 mb-2 mb-md-0" style="background: #059669; color: white; padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700;">1:00 PM</span>
              <div>
                <h6 style="color: #047857; margin-bottom: 0.5rem;">🔬 Laboratorios y Proyectos</h6>
                <p style="color: #666; margin: 0;">Investigación, laboratorios y trabajo en proyectos.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card mb-3 shadow-sm border-0" style="border-radius: 10px; border-left: 4px solid #059669;">
          <div class="card-body p-3">
            <div class="d-flex align-items-center flex-wrap">
              <span class="badge me-3 mb-2 mb-md-0" style="background: #059669; color: white; padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700;">3:00 PM</span>
              <div>
                <h6 style="color: #047857; margin-bottom: 0.5rem;">🎓 Finalización</h6>
                <p style="color: #666; margin: 0;">Síntesis del día y preparación para casa.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background: linear-gradient(135deg, #059669 0%, #047857 100%); color: white; padding: 5rem 0; text-align: center;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 style="font-size: clamp(1.8rem, 6vw, 2.5rem); font-weight: bold; margin-bottom: 1.5rem;">
          🎓 ¡Tu Futuro Comienza Aquí!
        </h2>
        <p style="font-size: 1.2rem; opacity: 0.9; margin-bottom: 2rem; line-height: 1.6;">
          Únete a nuestra comunidad de bachilleres exitosos que han logrado ingresar 
          a las mejores universidades del país y del mundo.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="{{ route('contacto') }}" class="btn btn-light btn-lg">
            📞 Agenda una Cita
          </a>
          <a href="{{ route('admisiones') }}" class="btn btn-outline-light btn-lg">
            📋 Proceso de Admisión
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.card:hover {
  transform: translateY(-5px);
}

@media (max-width: 768px) {
  .d-flex.gap-3 {
    flex-direction: column;
    gap: 1rem !important;
  }
  
  .btn {
    width: 100%;
    margin-bottom: 0.5rem;
  }
  
  .badge {
    margin-bottom: 0.5rem !important;
    display: block !important;
    text-align: center !important;
    width: fit-content !important;
    margin-left: auto !important;
    margin-right: auto !important;
  }
}
</style>

@endsection