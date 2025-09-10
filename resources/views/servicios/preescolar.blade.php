@extends('layouts.app')

@section('title', 'Preescolar (3-5 años) - Liceo Bilingüe')

@section('content')

{{-- HERO --}}
<div style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; padding: 6rem 0 4rem; margin-top: -20px; position: relative; overflow: hidden;">
  <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('data:image/svg+xml,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 60 60&quot;><circle cx=&quot;30&quot; cy=&quot;30&quot; r=&quot;2&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/><circle cx=&quot;10&quot; cy=&quot;10&quot; r=&quot;1&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/></svg>'); opacity: 0.3;"></div>
  
  <div class="container" style="position: relative; z-index: 1;">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb" style="background: transparent; padding: 0; margin-bottom: 0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.8);">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('servicios') }}" style="color: rgba(255,255,255,0.8);">Servicios</a></li>
        <li class="breadcrumb-item active" style="color: white;">Preescolar</li>
      </ol>
    </nav>
    
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div style="background: rgba(255,255,255,0.2); color: white; padding: 0.8rem 2rem; border-radius: 30px; font-weight: 700; display: inline-block; margin-bottom: 1.5rem;">
          🎈 3 - 5 años
        </div>
        <h1 style="font-size: 3rem; font-weight: 900; margin-bottom: 1.5rem;">Preescolar</h1>
        <p style="font-size: 1.3rem; opacity: 0.95; margin-bottom: 2rem;">
          Donde los sueños toman forma y cada día es una nueva aventura de aprendizaje, 
          creatividad y descubrimiento del mundo que los rodea.
        </p>
        <div class="d-flex gap-3">
          <a href="{{ route('contacto') }}" style="background: white; color: #f59e0b; padding: 1rem 2.5rem; border-radius: 25px; font-weight: 600; text-decoration: none; border: 2px solid white;">
            📅 Agenda una Visita
          </a>
          <a href="{{ route('admisiones') }}" style="background: transparent; color: white; padding: 1rem 2.5rem; border-radius: 25px; font-weight: 600; text-decoration: none; border: 2px solid white;">
            🌟 Más Información
          </a>
        </div>
      </div>
      <div class="col-lg-4 text-center">
        <i class="bi bi-emoji-laughing" style="font-size: 8rem; opacity: 0.2;"></i>
      </div>
    </div>
  </div>
</div>

{{-- OVERVIEW --}}
<div style="padding: 6rem 0; background: linear-gradient(135deg, #fef3c7 0%, #fed7aa 100%);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="background: white; border-radius: 25px; padding: 4rem; box-shadow: 0 25px 50px rgba(0,0,0,0.15); border: 1px solid #fbbf24;">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h2 style="color: #d97706; font-size: 2.2rem; font-weight: bold; margin-bottom: 1.5rem;">
                🌟 Exploradores del Conocimiento
              </h2>
              <p style="font-size: 1.2rem; color: #666; margin-bottom: 1.5rem;">
                En nuestro preescolar, cada niño es un pequeño explorador que descubre 
                el mundo a través del juego, la creatividad y la imaginación. Preparamos 
                las bases sólidas para su futuro académico.
              </p>
              <p style="color: #666;">
                Con metodologías lúdicas y educación bilingüe, desarrollamos habilidades 
                cognitivas, sociales y emocionales en un ambiente lleno de amor y diversión.
              </p>
            </div>
            <div class="col-lg-4 text-center">
              <div style="width: 150px; height: 150px; background: linear-gradient(135deg, #fed7aa, #fbbf24); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                <i class="bi bi-balloon-heart-fill" style="font-size: 4rem; color: #f59e0b;"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- NIVELES --}}
<div style="padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 style="font-size: 2.5rem; color: #d97706; margin-bottom: 1rem;">
        🎯 Nuestros Niveles
      </h2>
      <p style="color: #666; font-size: 1.1rem;">Programa estructurado por edades y desarrollo</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-4">
        <div style="background: white; border-radius: 20px; padding: 3rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); height: 100%; border-top: 5px solid #f59e0b;" 
             onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <div style="width: 80px; height: 80px; background: #f59e0b; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; color: white; font-size: 2rem;">
            <i class="bi bi-balloon"></i>
          </div>
          <div style="background: #fef3c7; color: #f59e0b; padding: 0.5rem 1rem; border-radius: 20px; display: inline-block; margin-bottom: 1rem;">Pre-Jardín</div>
          <h5 style="color: #d97706; margin-bottom: 1rem;">3 años</h5>
          <ul style="list-style: none; padding: 0; text-align: left;">
            <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #f59e0b; margin-right: 0.5rem;"></i>Adaptación escolar</li>
            <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #f59e0b; margin-right: 0.5rem;"></i>Juego estructurado</li>
            <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #f59e0b; margin-right: 0.5rem;"></i>Habilidades sociales</li>
            <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #f59e0b; margin-right: 0.5rem;"></i>Inglés básico</li>
          </ul>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div style="background: white; border-radius: 20px; padding: 3rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); height: 100%; border-top: 5px solid #f59e0b;" 
             onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <div style="width: 80px; height: 80px; background: #f59e0b; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; color: white; font-size: 2rem;">
            <i class="bi bi-stars"></i>
          </div>
          <div style="background: #fef3c7; color: #f59e0b; padding: 0.5rem 1rem; border-radius: 20px; display: inline-block; margin-bottom: 1rem;">Jardín</div>
          <h5 style="color: #d97706; margin-bottom: 1rem;">4 años</h5>
          <ul style="list-style: none; padding: 0; text-align: left;">
            <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #f59e0b; margin-right: 0.5rem;"></i>Pre-lectura y escritura</li>
            <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #f59e0b; margin-right: 0.5rem;"></i>Conceptos matemáticos</li>
            <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #f59e0b; margin-right: 0.5rem;"></i>Pensamiento lógico</li>
            <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #f59e0b; margin-right: 0.5rem;"></i>Bilingüismo activo</li>
          </ul>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div style="background: white; border-radius: 20px; padding: 3rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); height: 100%; border-top: 5px solid #f59e0b;" 
             onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
          <div style="width: 80px; height: 80px; background: #f59e0b; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; color: white; font-size: 2rem;">
            <i class="bi bi-mortarboard"></i>
          </div>
          <div style="background: #fef3c7; color: #f59e0b; padding: 0.5rem 1rem; border-radius: 20px; display: inline-block; margin-bottom: 1rem;">Transición</div>
          <h5 style="color: #d97706; margin-bottom: 1rem;">5 años</h5>
          <ul style="list-style: none; padding: 0; text-align: left;">
            <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #f59e0b; margin-right: 0.5rem;"></i>Preparación primaria</li>
            <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #f59e0b; margin-right: 0.5rem;"></i>Lectoescritura</li>
            <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #f59e0b; margin-right: 0.5rem;"></i>Matemáticas básicas</li>
            <li style="padding: 0.3rem 0; color: #666;"><i class="bi bi-check-circle-fill" style="color: #f59e0b; margin-right: 0.5rem;"></i>Proyecto de investigación</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- METODOLOGÍA --}}
<div style="background: linear-gradient(135deg, #fef3c7 0%, #fed7aa 100%); padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 style="color: #d97706; font-size: 2.5rem; margin-bottom: 1rem;">🎨 Nuestra Metodología</h2>
      <p style="color: #666; font-size: 1.1rem;">Aprendizaje a través del juego y la exploración</p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div style="background: white; border-radius: 15px; padding: 2rem; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.1); height: 100%;">
          <div style="width: 70px; height: 70px; background: #fef3c7; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #f59e0b; font-size: 1.8rem;">
            <i class="bi bi-puzzle-fill"></i>
          </div>
          <h6 style="color: #d97706; margin-bottom: 1rem;">Aprendizaje Lúdico</h6>
          <p style="color: #666; font-size: 0.9rem;">Jugando descubrimos, experimentamos y aprendemos de forma natural.</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div style="background: white; border-radius: 15px; padding: 2rem; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.1); height: 100%;">
          <div style="width: 70px; height: 70px; background: #fef3c7; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #f59e0b; font-size: 1.8rem;">
            <i class="bi bi-palette-fill"></i>
          </div>
          <h6 style="color: #d97706; margin-bottom: 1rem;">Arte y Creatividad</h6>
          <p style="color: #666; font-size: 0.9rem;">Expresamos ideas y emociones a través del arte y la imaginación.</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div style="background: white; border-radius: 15px; padding: 2rem; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.1); height: 100%;">
          <div style="width: 70px; height: 70px; background: #fef3c7; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #f59e0b; font-size: 1.8rem;">
            <i class="bi bi-globe"></i>
          </div>
          <h6 style="color: #d97706; margin-bottom: 1rem;">Enfoque Bilingüe</h6>
          <p style="color: #666; font-size: 0.9rem;">Inmersión natural en español e inglés desde temprana edad.</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div style="background: white; border-radius: 15px; padding: 2rem; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.1); height: 100%;">
          <div style="width: 70px; height: 70px; background: #fef3c7; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #f59e0b; font-size: 1.8rem;">
            <i class="bi bi-people-fill"></i>
          </div>
          <h6 style="color: #d97706; margin-bottom: 1rem;">Socialización</h6>
          <p style="color: #666; font-size: 0.9rem;">Desarrollamos habilidades sociales y trabajo en equipo.</p>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- HORARIOS --}}
<div style="padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 style="color: #d97706; font-size: 2.5rem; margin-bottom: 1rem;">⏰ Nuestro Día</h2>
      <p style="color: #666; font-size: 1.1rem;">Rutina llena de aventuras y aprendizaje</p>
    </div>
    
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div style="background: white; border-radius: 10px; padding: 1.5rem; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border-left: 4px solid #f59e0b;">
          <div class="d-flex align-items-center">
            <span style="background: #f59e0b; color: white; padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700; margin-right: 1rem;">7:00 AM</span>
            <div>
              <h6 style="color: #d97706; margin-bottom: 0.5rem;">🌅 Buenos Días</h6>
              <p style="color: #666; margin: 0;">Llegada, saludo y actividades de bienvenida.</p>
            </div>
          </div>
        </div>
        
        <div style="background: white; border-radius: 10px; padding: 1.5rem; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border-left: 4px solid #f59e0b;">
          <div class="d-flex align-items-center">
            <span style="background: #f59e0b; color: white; padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700; margin-right: 1rem;">8:30 AM</span>
            <div>
              <h6 style="color: #d97706; margin-bottom: 0.5rem;">📚 Círculo Académico</h6>
              <p style="color: #666; margin: 0;">Actividades de lectoescritura y matemáticas.</p>
            </div>
          </div>
        </div>
        
        <div style="background: white; border-radius: 10px; padding: 1.5rem; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border-left: 4px solid #f59e0b;">
          <div class="d-flex align-items-center">
            <span style="background: #f59e0b; color: white; padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700; margin-right: 1rem;">10:00 AM</span>
            <div>
              <h6 style="color: #d97706; margin-bottom: 0.5rem;">🎨 Arte y Creatividad</h6>
              <p style="color: #666; margin: 0;">Expresión artística y proyectos creativos.</p>
            </div>
          </div>
        </div>
        
        <div style="background: white; border-radius: 10px; padding: 1.5rem; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border-left: 4px solid #f59e0b;">
          <div class="d-flex align-items-center">
            <span style="background: #f59e0b; color: white; padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700; margin-right: 1rem;">12:00 PM</span>
            <div>
              <h6 style="color: #d97706; margin-bottom: 0.5rem;">🍽️ Almuerzo</h6>
              <p style="color: #666; margin: 0;">Comida saludable y hábitos de mesa.</p>
            </div>
          </div>
        </div>
        
        <div style="background: white; border-radius: 10px; padding: 1.5rem; margin-bottom: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border-left: 4px solid #f59e0b;">
          <div class="d-flex align-items-center">
            <span style="background: #f59e0b; color: white; padding: 0.4rem 1rem; border-radius: 15px; font-weight: 700; margin-right: 1rem;">2:30 PM</span>
            <div>
              <h6 style="color: #d97706; margin-bottom: 0.5rem;">👋 Despedida</h6>
              <p style="color: #666; margin: 0;">Cierre del día y recogida de estudiantes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- CTA --}}
<div style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; padding: 5rem 0; text-align: center;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 1.5rem;">
          🌟 ¿Listo para una Aventura de Aprendizaje?
        </h2>
        <p style="font-size: 1.3rem; opacity: 0.95; margin-bottom: 2.5rem;">
          Acompáñanos en esta hermosa etapa donde cada día es una oportunidad 
          de crecer, aprender y brillar con luz propia.
        </p>
        <div class="d-flex justify-content-center gap-3">
          <a href="{{ route('contacto') }}" style="background: white; color: #f59e0b; padding: 1rem 2.5rem; border-radius: 25px; font-weight: 600; text-decoration: none; border: 2px solid white;">
            🎈 Agenda tu Visita
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