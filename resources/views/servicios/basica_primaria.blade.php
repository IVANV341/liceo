@extends('layouts.app')

@section('title', 'Básica Primaria (6-10 años) - Liceo Bilingüe')

@section('content')

<div style="background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); color: white; padding: 6rem 0 4rem; margin-top: -20px; position: relative; overflow: hidden;">
  <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('data:image/svg+xml,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 60 60&quot;><circle cx=&quot;30&quot; cy=&quot;30&quot; r=&quot;2&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/><circle cx=&quot;10&quot; cy=&quot;10&quot; r=&quot;1&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/></svg>'); opacity: 0.3;"></div>
  
  <div class="container" style="position: relative; z-index: 1;">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb" style="background: transparent; padding: 0; margin-bottom: 0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.8); text-decoration: none;">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('servicios') }}" style="color: rgba(255,255,255,0.8); text-decoration: none;">Servicios</a></li>
        <li class="breadcrumb-item active" style="color: white;">Básica Primaria</li>
      </ol>
    </nav>
    
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div style="background: rgba(255,255,255,0.2); color: white; padding: 0.8rem 2rem; border-radius: 30px; font-weight: 700; display: inline-block; margin-bottom: 1.5rem;">
          📚 6 - 10 años
        </div>
        <h1 style="font-size: clamp(2rem, 8vw, 3rem); font-weight: 900; margin-bottom: 1.5rem;">Básica Primaria</h1>
        <p style="font-size: clamp(1rem, 4vw, 1.3rem); opacity: 0.95; margin-bottom: 2.5rem; line-height: 1.6;">
          Construyendo bases sólidas para el futuro académico con metodología bilingüe, 
          pensamiento crítico y valores que transforman vidas.
        </p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="{{ route('contacto') }}" class="btn btn-light btn-lg">
            📖 Conoce Nuestro Programa
          </a>
          <a href="{{ route('admisiones') }}" class="btn btn-outline-light btn-lg">
            🌟 Más Información
          </a>
        </div>
      </div>
      <div class="col-lg-4 text-center">
        <i class="bi bi-mortarboard-fill" style="font-size: clamp(4rem, 12vw, 8rem); opacity: 0.2;"></i>
      </div>
    </div>
  </div>
</div>

<div style="padding: 6rem 0; background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card shadow-lg border-0" style="border-radius: 25px; border-left: 5px solid #3b82f6;">
          <div class="card-body p-4 p-lg-5">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <h2 style="color: #1d4ed8; font-size: clamp(1.5rem, 5vw, 2.2rem); font-weight: bold; margin-bottom: 1.5rem;">
                  🚀 Forjando Líderes del Mañana
                </h2>
                <p style="font-size: 1.2rem; color: #666; margin-bottom: 1.5rem; line-height: 1.6;">
                  En primaria consolidamos las habilidades fundamentales mientras desarrollamos 
                  el pensamiento crítico, la creatividad y el liderazgo. Cada estudiante descubre 
                  sus talentos únicos en un ambiente bilingüe estimulante.
                </p>
                <p style="color: #666; line-height: 1.6;">
                  Nuestro currículo integra tecnología, proyectos STEAM y formación en valores, 
                  preparando ciudadanos globales comprometidos con su comunidad.
                </p>
              </div>
              <div class="col-lg-4 text-center">
                <div class="d-flex align-items-center justify-content-center mx-auto" style="width: 150px; height: 150px; background: linear-gradient(135deg, #bfdbfe, #93c5fd); border-radius: 50%;">
                  <i class="bi bi-lightbulb-fill" style="font-size: 4rem; color: #3b82f6;"></i>
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
      <h2 class="section-title" style="color: #1d4ed8; font-size: clamp(1.8rem, 6vw, 2.5rem);">
        🎓 Nuestros Grados
      </h2>
      <p style="color: #666; font-size: 1.1rem;">Programa progresivo de 1° a 5° grado</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="card h-100 shadow border-0" style="border-radius: 20px; border-left: 5px solid #3b82f6;">
          <div class="card-body p-4">
            <div class="row align-items-center">
              <div class="col-md-3 text-center">
                <div class="d-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px; background: #3b82f6; border-radius: 50%; color: white; font-size: 2rem;">
                  <i class="bi bi-1-square-fill"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h5 style="color: #1d4ed8; margin-bottom: 1rem;">Primero y Segundo</h5>
                <ul class="list-unstyled">
                  <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Lectoescritura consolidada</li>
                  <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Matemáticas fundamentales</li>
                  <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Bilingüismo activo</li>
                  <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Hábitos de estudio</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="card h-100 shadow border-0" style="border-radius: 20px; border-left: 5px solid #3b82f6;">
          <div class="card-body p-4">
            <div class="row align-items-center">
              <div class="col-md-3 text-center">
                <div class="d-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px; background: #3b82f6; border-radius: 50%; color: white; font-size: 2rem;">
                  <i class="bi bi-3-square-fill"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h5 style="color: #1d4ed8; margin-bottom: 1rem;">Tercero y Cuarto</h5>
                <ul class="list-unstyled">
                  <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Pensamiento crítico</li>
                  <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Proyectos de investigación</li>
                  <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Competencias digitales</li>
                  <li style="padding: 0.2rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Liderazgo estudiantil</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-12">
        <div class="card shadow border-0" style="border-radius: 20px; border-left: 5px solid #3b82f6;">
          <div class="card-body p-4">
            <div class="row align-items-center">
              <div class="col-lg-2 text-center">
                <div class="d-flex align-items-center justify-content-center mx-auto mb-3 mb-lg-0" style="width: 100px; height: 100px; background: #3b82f6; border-radius: 50%; color: white; font-size: 2.5rem;">
                  <i class="bi bi-5-square-fill"></i>
                </div>
              </div>
              <div class="col-lg-8">
                <h5 style="color: #1d4ed8; margin-bottom: 1rem; font-size: 1.3rem;">Quinto Grado - Preparación para Bachillerato</h5>
                <div class="row">
                  <div class="col-md-6">
                    <ul class="list-unstyled">
                      <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Preparación bachillerato</li>
                      <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Proyecto de grado</li>
                      <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Certificación en inglés</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="list-unstyled">
                      <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Responsabilidad social</li>
                      <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Metodología de estudio</li>
                      <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill text-primary me-2"></i>Habilidades del S. XXI</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 text-center">
                <a href="{{ route('servicios.basica_secundaria') }}" class="btn btn-primary">
                  Siguiente →
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%); padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title" style="color: #1d4ed8; font-size: clamp(1.8rem, 6vw, 2.5rem);">📋 Áreas Académicas</h2>
      <p style="color: #666; font-size: 1.1rem;">Currículo integral y bilingüe</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px; background: #dbeafe; border-radius: 50%; color: #3b82f6; font-size: 1.8rem;">
              <i class="bi bi-book-fill"></i>
            </div>
            <h6 style="color: #1d4ed8; margin-bottom: 1rem;">Lenguaje</h6>
            <p style="color: #666; font-size: 0.9rem;">Español e inglés con enfoque comunicativo y literario.</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px; background: #dbeafe; border-radius: 50%; color: #3b82f6; font-size: 1.8rem;">
              <i class="bi bi-calculator-fill"></i>
            </div>
            <h6 style="color: #1d4ed8; margin-bottom: 1rem;">Matemáticas</h6>
            <p style="color: #666; font-size: 0.9rem;">Pensamiento lógico y resolución de problemas.</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px; background: #dbeafe; border-radius: 50%; color: #3b82f6; font-size: 1.8rem;">
              <i class="bi bi-globe"></i>
            </div>
            <h6 style="color: #1d4ed8; margin-bottom: 1rem;">Ciencias Naturales</h6>
            <p style="color: #666; font-size: 0.9rem;">Exploración científica y método experimental.</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px; background: #dbeafe; border-radius: 50%; color: #3b82f6; font-size: 1.8rem;">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <h6 style="color: #1d4ed8; margin-bottom: 1rem;">Ciencias Sociales</h6>
            <p style="color: #666; font-size: 0.9rem;">Historia, geografía y formación ciudadana.</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px; background: #dbeafe; border-radius: 50%; color: #3b82f6; font-size: 1.8rem;">
              <i class="bi bi-cpu-fill"></i>
            </div>
            <h6 style="color: #1d4ed8; margin-bottom: 1rem;">Tecnología</h6>
            <p style="color: #666; font-size: 0.9rem;">Competencias digitales y programación básica.</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; transition: transform 0.3s ease;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px; background: #dbeafe; border-radius: 50%; color: #3b82f6; font-size: 1.8rem;">
              <i class="bi bi-palette-fill"></i>
            </div>
            <h6 style="color: #1d4ed8; margin-bottom: 1rem;">Artes</h6>
            <p style="color: #666; font-size: 0.9rem;">Música, artes plásticas y expresión creativa.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title" style="color: #1d4ed8; font-size: clamp(1.8rem, 6vw, 2.5rem);">🔬 Proyectos STEAM</h2>
      <p style="color: #666; font-size: 1.1rem;">Ciencia, Tecnología, Ingeniería, Arte y Matemáticas</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="card h-100 shadow border-0" style="border-radius: 20px; border: 1px solid #93c5fd;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px; background: linear-gradient(135deg, #3b82f6, #1d4ed8); border-radius: 50%; color: white; font-size: 2rem;">
              <i class="bi bi-rocket-takeoff-fill"></i>
            </div>
            <h5 style="color: #1d4ed8; margin-bottom: 1.5rem;">Feria de Ciencias</h5>
            <p style="color: #666;">
              Proyectos de investigación donde los estudiantes exploran, experimentan 
              y presentan sus descubrimientos científicos.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="card h-100 shadow border-0" style="border-radius: 20px; border: 1px solid #93c5fd;">
          <div class="card-body text-center p-4">
            <div class="d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px; background: linear-gradient(135deg, #3b82f6, #1d4ed8); border-radius: 50%; color: white; font-size: 2rem;">
              <i class="bi bi-robot"></i>
            </div>
            <h5 style="color: #1d4ed8; margin-bottom: 1.5rem;">Robótica Educativa</h5>
            <p style="color: #666;">
              Construcción y programación de robots que desarrollan pensamiento 
              computacional y habilidades del siglo XXI.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%); padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title" style="color: #1d4ed8; font-size: clamp(1.8rem, 6vw, 2.5rem);">⏰ Horario Académico</h2>
      <p style="color: #666; font-size: 1.1rem;">Jornada completa de aprendizaje</p>
    </div>
    
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="card mb-3 shadow-sm border-0" style="border-radius: 10px; border-left: 4px solid #3b82f6;">
          <div class="card-body p-3">
            <div class="d-flex align-items-center flex-wrap">
              <span class="badge bg-primary me-3 mb-2 mb-md-0" style="padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700;">6:30 AM</span>
              <div>
                <h6 style="color: #1d4ed8; margin-bottom: 0.5rem;">🌅 Inicio de Jornada</h6>
                <p style="color: #666; margin: 0;">Llegada, saludo y preparación para el día.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card mb-3 shadow-sm border-0" style="border-radius: 10px; border-left: 4px solid #3b82f6;">
          <div class="card-body p-3">
            <div class="d-flex align-items-center flex-wrap">
              <span class="badge bg-primary me-3 mb-2 mb-md-0" style="padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700;">7:00 AM</span>
              <div>
                <h6 style="color: #1d4ed8; margin-bottom: 0.5rem;">📚 Clases Académicas</h6>
                <p style="color: #666; margin: 0;">Matemáticas, lenguaje, ciencias y sociales.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card mb-3 shadow-sm border-0" style="border-radius: 10px; border-left: 4px solid #3b82f6;">
          <div class="card-body p-3">
            <div class="d-flex align-items-center flex-wrap">
              <span class="badge bg-primary me-3 mb-2 mb-md-0" style="padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700;">10:00 AM</span>
              <div>
                <h6 style="color: #1d4ed8; margin-bottom: 0.5rem;">☕ Descanso</h6>
                <p style="color: #666; margin: 0;">Refrigerio y actividades recreativas.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card mb-3 shadow-sm border-0" style="border-radius: 10px; border-left: 4px solid #3b82f6;">
          <div class="card-body p-3">
            <div class="d-flex align-items-center flex-wrap">
              <span class="badge bg-primary me-3 mb-2 mb-md-0" style="padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700;">12:00 PM</span>
              <div>
                <h6 style="color: #1d4ed8; margin-bottom: 0.5rem;">🍽️ Almuerzo</h6>
                <p style="color: #666; margin: 0;">Comida saludable y momento de socialización.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card mb-3 shadow-sm border-0" style="border-radius: 10px; border-left: 4px solid #3b82f6;">
          <div class="card-body p-3">
            <div class="d-flex align-items-center flex-wrap">
              <span class="badge bg-primary me-3 mb-2 mb-md-0" style="padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700;">2:30 PM</span>
              <div>
                <h6 style="color: #1d4ed8; margin-bottom: 0.5rem;">🎒 Finalización</h6>
                <p style="color: #666; margin: 0;">Cierre académico y recogida de estudiantes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); color: white; padding: 5rem 0; text-align: center;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 style="font-size: clamp(1.8rem, 6vw, 2.5rem); font-weight: bold; margin-bottom: 1.5rem;">
          🚀 ¿Listo para la Aventura del Conocimiento?
        </h2>
        <p style="font-size: 1.2rem; opacity: 0.9; margin-bottom: 2rem; line-height: 1.6;">
          Descubre cómo tu hijo puede alcanzar su máximo potencial en un ambiente académico 
          estimulante y lleno de oportunidades.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="{{ route('contacto') }}" class="btn btn-light btn-lg">
            📞 Contáctanos
          </a>
          <a href="{{ route('admisiones') }}" class="btn btn-outline-light btn-lg">
            📝 Proceso de Admisión
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