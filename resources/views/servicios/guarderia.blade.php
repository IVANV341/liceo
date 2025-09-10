@extends('layouts.app')

@section('title', 'Guardería (1-3 años) - Liceo Bilingüe')

@section('description', 'Servicio de guardería con estimulación temprana y cuidado personalizado para niños de 1 a 3 años')

@section('content')

{{-- HERO SECTION --}}
<div style="background: linear-gradient(135deg, #ec4899 0%, #be185d 100%); color: white; padding: 6rem 0 4rem; margin-top: -20px; position: relative; overflow: hidden;">
  <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('data:image/svg+xml,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 60 60&quot;><circle cx=&quot;30&quot; cy=&quot;30&quot; r=&quot;2&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/><circle cx=&quot;10&quot; cy=&quot;10&quot; r=&quot;1&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/><circle cx=&quot;50&quot; cy=&quot;20&quot; r=&quot;1.5&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/></svg>'); opacity: 0.3;"></div>
  
  <div class="container" style="position: relative; z-index: 1;">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb" style="background: transparent; padding: 0; margin-bottom: 0;">
        <li class="breadcrumb-item">
          <a href="{{ route('home') }}" style="color: rgba(255,255,255,0.8); text-decoration: none;">Inicio</a>
        </li>
        <li class="breadcrumb-item">
          <a href="{{ route('servicios') }}" style="color: rgba(255,255,255,0.8); text-decoration: none;">Servicios</a>
        </li>
        <li class="breadcrumb-item active" style="color: white;">Guardería</li>
      </ol>
    </nav>
    
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div style="background: rgba(255,255,255,0.2); color: white; padding: 0.8rem 2rem; border-radius: 30px; font-weight: 700; font-size: 1.1rem; display: inline-block; margin-bottom: 1.5rem; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
          👶 1 - 3 años
        </div>
        <h1 style="font-size: 3rem; font-weight: 900; margin-bottom: 1.5rem; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">
          Guardería
        </h1>
        <p style="font-size: 1.3rem; opacity: 0.95; margin-bottom: 2rem;">
          Un hogar lleno de amor donde cada pequeño descubre el mundo 
          a través del juego, la exploración y el cuidado especializado.
        </p>
        <div class="d-flex flex-wrap gap-3">
          <a href="{{ route('contacto') }}" style="background: white; color: #ec4899; border-color: white; padding: 1rem 2.5rem; border-radius: 25px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; text-decoration: none; border: 2px solid white; transition: all 0.3s ease;">
            <i class="bi bi-calendar me-2"></i>Agenda una Visita
          </a>
          <a href="{{ route('admisiones') }}" style="background: transparent; color: white; border-color: white; padding: 1rem 2.5rem; border-radius: 25px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; text-decoration: none; border: 2px solid white; transition: all 0.3s ease;">
            <i class="bi bi-heart me-2"></i>Más Información
          </a>
        </div>
      </div>
      <div class="col-lg-4 text-lg-end">
        <i class="bi bi-emoji-heart-eyes" style="font-size: 8rem; opacity: 0.2;"></i>
      </div>
    </div>
  </div>
</div>

{{-- OVERVIEW --}}
<div style="padding: 6rem 0; background: linear-gradient(135deg, #fdf2f8 0%, #fce7f3 100%);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="background: white; border-radius: 25px; padding: 4rem; box-shadow: 0 25px 50px rgba(0,0,0,0.15); border: 1px solid #f9a8d4; position: relative; overflow: hidden;">
          <div style="position: absolute; top: -50px; right: -50px; width: 150px; height: 150px; background: linear-gradient(135deg, #fce7f3, #f9a8d4); border-radius: 50%; opacity: 0.3;"></div>
          
          <div class="row align-items-center">
            <div class="col-lg-8" style="position: relative; z-index: 1;">
              <h2 style="color: #be185d; font-size: 2.2rem; font-weight: bold; margin-bottom: 1.5rem;">
                💕 Primeros Pasos, Grandes Sueños
              </h2>
              <p style="font-size: 1.2rem; color: #666; margin-bottom: 1.5rem;">
                En nuestra guardería, cada día es una nueva aventura llena de 
                descubrimientos, risas y aprendizajes. Creamos un ambiente donde 
                los más pequeños se sienten seguros, amados y libres para explorar.
              </p>
              <p style="color: #666; margin-bottom: 0;">
                Con educadoras especializadas en primera infancia y espacios 
                diseñados especialmente para esta edad, tu hijo vivirá experiencias 
                que potenciarán su desarrollo integral.
              </p>
            </div>
            <div class="col-lg-4 text-center">
              <div style="width: 150px; height: 150px; background: linear-gradient(135deg, #fce7f3, #f9a8d4); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; position: relative; z-index: 1;">
                <i class="bi bi-heart-fill" style="font-size: 4rem; color: #ec4899;"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- CARACTERÍSTICAS --}}
<div style="padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 style="font-size: 2.5rem; color: #be185d; margin-bottom: 1rem;">
        ✨ Lo Que Nos Hace Especiales
      </h2>
      <p style="color: #666; font-size: 1.1rem;">
        Cada detalle pensado para el bienestar y felicidad de tu pequeño
      </p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div style="background: white; border-radius: 20px; padding: 3rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.4s ease; height: 100%; border: 1px solid #f9a8d4; position: relative; overflow: hidden;" 
             onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 25px 50px rgba(236, 72, 153, 0.2)';" 
             onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.1)';">
          <div style="position: absolute; top: 0; left: 0; right: 0; height: 5px; background: linear-gradient(90deg, #ec4899, #be185d);"></div>
          <div style="width: 90px; height: 90px; border-radius: 50%; background: linear-gradient(135deg, #ec4899, #be185d); color: white; display: flex; align-items: center; justify-content: center; font-size: 2.2rem; margin: 0 auto 2rem; box-shadow: 0 10px 20px rgba(236, 72, 153, 0.3);">
            <i class="bi bi-shield-heart"></i>
          </div>
          <h5 style="font-weight: bold; margin-bottom: 1rem; color: #be185d;">Amor y Seguridad</h5>
          <p style="color: #666;">
            Un ambiente completamente seguro donde cada niño recibe amor incondicional 
            y cuidado personalizado como en casa.
          </p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div style="background: white; border-radius: 20px; padding: 3rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.4s ease; height: 100%; border: 1px solid #f9a8d4; position: relative; overflow: hidden;" 
             onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 25px 50px rgba(236, 72, 153, 0.2)';" 
             onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.1)';">
          <div style="position: absolute; top: 0; left: 0; right: 0; height: 5px; background: linear-gradient(90deg, #ec4899, #be185d);"></div>
          <div style="width: 90px; height: 90px; border-radius: 50%; background: linear-gradient(135deg, #ec4899, #be185d); color: white; display: flex; align-items: center; justify-content: center; font-size: 2.2rem; margin: 0 auto 2rem; box-shadow: 0 10px 20px rgba(236, 72, 153, 0.3);">
            <i class="bi bi-people-fill"></i>
          </div>
          <h5 style="font-weight: bold; margin-bottom: 1rem; color: #be185d;">Educadoras Expertas</h5>
          <p style="color: #666;">
            Profesionales certificadas en primera infancia que entienden y respetan 
            las necesidades únicas de cada etapa.
          </p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div style="background: white; border-radius: 20px; padding: 3rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.4s ease; height: 100%; border: 1px solid #f9a8d4; position: relative; overflow: hidden;" 
             onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 25px 50px rgba(236, 72, 153, 0.2)';" 
             onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.1)';">
          <div style="position: absolute; top: 0; left: 0; right: 0; height: 5px; background: linear-gradient(90deg, #ec4899, #be185d);"></div>
          <div style="width: 90px; height: 90px; border-radius: 50%; background: linear-gradient(135deg, #ec4899, #be185d); color: white; display: flex; align-items: center; justify-content: center; font-size: 2.2rem; margin: 0 auto 2rem; box-shadow: 0 10px 20px rgba(236, 72, 153, 0.3);">
            <i class="bi bi-stars"></i>
          </div>
          <h5 style="font-weight: bold; margin-bottom: 1rem; color: #be185d;">Estimulación Integral</h5>
          <p style="color: #666;">
            Actividades diseñadas para potenciar todos los sentidos y habilidades 
            a través del juego y la exploración libre.
          </p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div style="background: white; border-radius: 20px; padding: 3rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.4s ease; height: 100%; border: 1px solid #f9a8d4; position: relative; overflow: hidden;" 
             onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 25px 50px rgba(236, 72, 153, 0.2)';" 
             onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.1)';">
          <div style="position: absolute; top: 0; left: 0; right: 0; height: 5px; background: linear-gradient(90deg, #ec4899, #be185d);"></div>
          <div style="width: 90px; height: 90px; border-radius: 50%; background: linear-gradient(135deg, #ec4899, #be185d); color: white; display: flex; align-items: center; justify-content: center; font-size: 2.2rem; margin: 0 auto 2rem; box-shadow: 0 10px 20px rgba(236, 72, 153, 0.3);">
            <i class="bi bi-clock-history"></i>
          </div>
          <h5 style="font-weight: bold; margin-bottom: 1rem; color: #be185d;">Horarios Familiares</h5>
          <p style="color: #666;">
            Flexibilidad total para adaptarnos a las necesidades de tu familia 
            y rutinas personalizadas para cada niño.
          </p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div style="background: white; border-radius: 20px; padding: 3rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.4s ease; height: 100%; border: 1px solid #f9a8d4; position: relative; overflow: hidden;" 
             onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 25px 50px rgba(236, 72, 153, 0.2)';" 
             onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.1)';">
          <div style="position: absolute; top: 0; left: 0; right: 0; height: 5px; background: linear-gradient(90deg, #ec4899, #be185d);"></div>
          <div style="width: 90px; height: 90px; border-radius: 50%; background: linear-gradient(135deg, #ec4899, #be185d); color: white; display: flex; align-items: center; justify-content: center; font-size: 2.2rem; margin: 0 auto 2rem; box-shadow: 0 10px 20px rgba(236, 72, 153, 0.3);">
            <i class="bi bi-chat-heart-fill"></i>
          </div>
          <h5 style="font-weight: bold; margin-bottom: 1rem; color: #be185d;">Comunicación Diaria</h5>
          <p style="color: #666;">
            Reportes detallados con fotos y videos del día para que no te pierdas 
            ningún momento especial de tu pequeño.
          </p>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div style="background: white; border-radius: 20px; padding: 3rem; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.4s ease; height: 100%; border: 1px solid #f9a8d4; position: relative; overflow: hidden;" 
             onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 25px 50px rgba(236, 72, 153, 0.2)';" 
             onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.1)';">
          <div style="position: absolute; top: 0; left: 0; right: 0; height: 5px; background: linear-gradient(90deg, #ec4899, #be185d);"></div>
          <div style="width: 90px; height: 90px; border-radius: 50%; background: linear-gradient(135deg, #ec4899, #be185d); color: white; display: flex; align-items: center; justify-content: center; font-size: 2.2rem; margin: 0 auto 2rem; box-shadow: 0 10px 20px rgba(236, 72, 153, 0.3);">
            <i class="bi bi-house-heart"></i>
          </div>
          <h5 style="font-weight: bold; margin-bottom: 1rem; color: #be185d;">Ambiente Hogareño</h5>
          <p style="color: #666;">
            Espacios cálidos y acogedores que recrean la calidez del hogar 
            para que se sientan cómodos y felices.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- HORARIOS --}}
<div style="background: linear-gradient(135deg, #fdf2f8 0%, #fce7f3 100%); padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 style="font-size: 2.5rem; color: #be185d; margin-bottom: 1rem;">
        🌈 Un Día Lleno de Aventuras
      </h2>
      <p style="color: #666; font-size: 1.1rem;">
        Rutina diseñada para brindar seguridad y estimular el desarrollo natural
      </p>
    </div>
    
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div style="position: relative;">
          <div style="position: absolute; left: 30px; top: 0; bottom: 0; width: 3px; background: linear-gradient(to bottom, #ec4899, #be185d); border-radius: 2px;"></div>
          
          <div style="position: relative; padding-left: 80px; margin-bottom: 2rem;">
            <div style="position: absolute; left: 20px; top: 10px; width: 20px; height: 20px; border-radius: 50%; background: #ec4899; border: 4px solid white; box-shadow: 0 0 0 4px #ec4899;"></div>
            <div style="background: white; border-radius: 15px; padding: 2rem; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border-left: 4px solid #ec4899; transition: transform 0.3s ease;" 
                 onmouseover="this.style.transform='translateX(10px)';" 
                 onmouseout="this.style.transform='translateX(0)';">
              <span style="background: linear-gradient(135deg, #ec4899, #be185d); color: white; padding: 0.5rem 1.2rem; border-radius: 20px; font-weight: 700; font-size: 0.9rem; display: inline-block; margin-bottom: 1rem; box-shadow: 0 4px 15px rgba(236, 72, 153, 0.3);">7:00 AM</span>
              <h6 style="font-weight: bold; margin-bottom: 0.5rem; color: #be185d;">🌅 Buenos Días</h6>
              <p style="color: #666; margin-bottom: 0;">
                Recibimiento con amor, adaptación gentil y primeras actividades tranquilas.
              </p>
            </div>
          </div>
          
          <div style="position: relative; padding-left: 80px; margin-bottom: 2rem;">
            <div style="position: absolute; left: 20px; top: 10px; width: 20px; height: 20px; border-radius: 50%; background: #ec4899; border: 4px solid white; box-shadow: 0 0 0 4px #ec4899;"></div>
            <div style="background: white; border-radius: 15px; padding: 2rem; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border-left: 4px solid #ec4899; transition: transform 0.3s ease;" 
                 onmouseover="this.style.transform='translateX(10px)';" 
                 onmouseout="this.style.transform='translateX(0)';">
              <span style="background: linear-gradient(135deg, #ec4899, #be185d); color: white; padding: 0.5rem 1.2rem; border-radius: 20px; font-weight: 700; font-size: 0.9rem; display: inline-block; margin-bottom: 1rem; box-shadow: 0 4px 15px rgba(236, 72, 153, 0.3);">8:00 AM</span>
              <h6 style="font-weight: bold; margin-bottom: 0.5rem; color: #be185d;">🥛 Desayuno Nutritivo</h6>
              <p style="color: #666; margin-bottom: 0;">
                Alimentación balanceada y desarrollo de hábitos saludables desde pequeños.
              </p>
            </div>
          </div>
          
          <div style="position: relative; padding-left: 80px; margin-bottom: 2rem;">
            <div style="position: absolute; left: 20px; top: 10px; width: 20px; height: 20px; border-radius: 50%; background: #ec4899; border: 4px solid white; box-shadow: 0 0 0 4px #ec4899;"></div>
            <div style="background: white; border-radius: 15px; padding: 2rem; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border-left: 4px solid #ec4899; transition: transform 0.3s ease;" 
                 onmouseover="this.style.transform='translateX(10px)';" 
                 onmouseout="this.style.transform='translateX(0)';">
              <span style="background: linear-gradient(135deg, #ec4899, #be185d); color: white; padding: 0.5rem 1.2rem; border-radius: 20px; font-weight: 700; font-size: 0.9rem; display: inline-block; margin-bottom: 1rem; box-shadow: 0 4px 15px rgba(236, 72, 153, 0.3);">9:00 AM</span>
              <h6 style="font-weight: bold; margin-bottom: 0.5rem; color: #be185d;">🎨 Exploración y Juego</h6>
              <p style="color: #666; margin-bottom: 0;">
                Actividades sensoriales, motricidad y descubrimiento del mundo que los rodea.
              </p>
            </div>
          </div>
          
          <div style="position: relative; padding-left: 80px; margin-bottom: 2rem;">
            <div style="position: absolute; left: 20px; top: 10px; width: 20px; height: 20px; border-radius: 50%; background: #ec4899; border: 4px solid white; box-shadow: 0 0 0 4px #ec4899;"></div>
            <div style="background: white; border-radius: 15px; padding: 2rem; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border-left: 4px solid #ec4899; transition: transform 0.3s ease;" 
                 onmouseover="this.style.transform='translateX(10px)';" 
                 onmouseout="this.style.transform='translateX(0)';">
              <span style="background: linear-gradient(135deg, #ec4899, #be185d); color: white; padding: 0.5rem 1.2rem; border-radius: 20px; font-weight: 700; font-size: 0.9rem; display: inline-block; margin-bottom: 1rem; box-shadow: 0 4px 15px rgba(236, 72, 153, 0.3);">1:00 PM</span>
              <h6 style="font-weight: bold; margin-bottom: 0.5rem; color: #be185d;">😴 Siesta Reparadora</h6>
              <p style="color: #666; margin-bottom: 0;">
                Descanso en un ambiente tranquilo y acogedor para recargar energías.
              </p>
            </div>
          </div>
          
          <div style="position: relative; padding-left: 80px; margin-bottom: 0;">
            <div style="position: absolute; left: 20px; top: 10px; width: 20px; height: 20px; border-radius: 50%; background: #ec4899; border: 4px solid white; box-shadow: 0 0 0 4px #ec4899;"></div>
            <div style="background: white; border-radius: 15px; padding: 2rem; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border-left: 4px solid #ec4899; transition: transform 0.3s ease;" 
                 onmouseover="this.style.transform='translateX(10px)';" 
                 onmouseout="this.style.transform='translateX(0)';">
              <span style="background: linear-gradient(135deg, #ec4899, #be185d); color: white; padding: 0.5rem 1.2rem; border-radius: 20px; font-weight: 700; font-size: 0.9rem; display: inline-block; margin-bottom: 1rem; box-shadow: 0 4px 15px rgba(236, 72, 153, 0.3);">4:00 PM</span>
              <h6 style="font-weight: bold; margin-bottom: 0.5rem; color: #be185d;">👋 Hasta Mañana</h6>
              <p style="color: #666; margin-bottom: 0;">
                Despedida cariñosa y reporte detallado del día para los papás.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- ACTIVIDADES --}}
<div style="padding: 6rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 style="font-size: 2.5rem; color: #be185d; margin-bottom: 1rem;">
        🎯 Actividades que Transforman
      </h2>
      <p style="color: #666; font-size: 1.1rem;">
        Cada experiencia diseñada para potenciar su desarrollo natural
      </p>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem;">
      <div style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.3s ease; border: 1px solid #f9a8d4; text-align: center;" 
           onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 25px 50px rgba(236, 72, 153, 0.15)';" 
           onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.1)';">
        <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #fce7f3, #f9a8d4); color: #ec4899; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin: 0 auto 1.5rem;">
          <i class="bi bi-palette"></i>
        </div>
        <h6 style="font-weight: bold; margin-bottom: 1rem; color: #be185d;">Arte y Creatividad</h6>
        <p style="color: #666; margin-bottom: 0;">
          Pintura con dedos, plastilina y actividades que despiertan 
          su lado artístico y expresivo.
        </p>
      </div>
      
      <div style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.3s ease; border: 1px solid #f9a8d4; text-align: center;" 
           onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 25px 50px rgba(236, 72, 153, 0.15)';" 
           onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.1)';">
        <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #fce7f3, #f9a8d4); color: #ec4899; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin: 0 auto 1.5rem;">
          <i class="bi bi-music-note-beamed"></i>
        </div>
        <h6 style="font-weight: bold; margin-bottom: 1rem; color: #be185d;">Música y Movimiento</h6>
        <p style="color: #666; margin-bottom: 0;">
          Canciones, ritmos y bailes que desarrollan coordinación 
          y alegría por la música.
        </p>
      </div>
      
      <div style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.3s ease; border: 1px solid #f9a8d4; text-align: center;" 
           onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 25px 50px rgba(236, 72, 153, 0.15)';" 
           onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.1)';">
        <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #fce7f3, #f9a8d4); color: #ec4899; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin: 0 auto 1.5rem;">
          <i class="bi bi-puzzle"></i>
        </div>
        <h6 style="font-weight: bold; margin-bottom: 1rem; color: #be185d;">Exploración Sensorial</h6>
        <p style="color: #666; margin-bottom: 0;">
          Texturas, sonidos y experiencias que estimulan 
          todos sus sentidos de forma segura.
        </p>
      </div>
      
      <div style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 15px 35px rgba(0,0,0,0.1); transition: all 0.3s ease; border: 1px solid #f9a8d4; text-align: center;" 
           onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 25px 50px rgba(236, 72, 153, 0.15)';" 
           onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.1)';">
        <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #fce7f3, #f9a8d4); color: #ec4899; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin: 0 auto 1.5rem;">
          <i class="bi bi-people"></i>
        </div>
        <h6 style="font-weight: bold; margin-bottom: 1rem; color: #be185d;">Socialización</h6>
        <p style="color: #666; margin-bottom: 0;">
          Juegos en grupo que enseñan a compartir, 
          esperar turnos y hacer amigos.
        </p>
      </div>
    </div>
  </div>
</div>

{{-- LLAMADA A LA ACCIÓN --}}
<div style="background: linear-gradient(135deg, #ec4899 0%, #be185d 100%); color: white; padding: 5rem 0; text-align: center; position: relative; overflow: hidden;">
  <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('data:image/svg+xml,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 100 100&quot;><circle cx=&quot;25&quot; cy=&quot;25&quot; r=&quot;3&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/><circle cx=&quot;75&quot; cy=&quot;75&quot; r=&quot;2&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/><circle cx=&quot;80&quot; cy=&quot;20&quot; r=&quot;2.5&quot; fill=&quot;rgba(255,255,255,0.1)&quot;/></svg>'); opacity: 0.3;"></div>
  
  <div class="container" style="position: relative; z-index: 1;">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 1.5rem;">
          💖 ¿Listo para una Experiencia Mágica?
        </h2>
        <p style="font-size: 1.3rem; opacity: 0.95; margin-bottom: 2.5rem;">
          Ven a conocer el lugar donde tu pequeño vivirá sus primeras grandes aventuras 
          rodeado de amor, cuidado y diversión.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="{{ route('contacto') }}" style="background: white; color: #ec4899; border-color: white; padding: 1rem 2.5rem; border-radius: 25px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; text-decoration: none; border: 2px solid white; transition: all 0.3s ease;" 
             onmouseover="this.style.background='transparent'; this.style.color='white'; this.style.transform='translateY(-2px)';" 
             onmouseout="this.style.background='white'; this.style.color='#ec4899'; this.style.transform='translateY(0)';">
            <i class="bi bi-heart me-2"></i>Agenda tu Visita
          </a>
          <a href="{{ route('admisiones') }}" style="background: transparent; color: white; border-color: white; padding: 1rem 2.5rem; border-radius: 25px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; text-decoration: none; border: 2px solid white; transition: all 0.3s ease;" 
             onmouseover="this.style.background='white'; this.style.color='#ec4899'; this.style.transform='translateY(-2px)';" 
             onmouseout="this.style.background='transparent'; this.style.color='white'; this.style.transform='translateY(0)';">
            <i class="bi bi-info-circle me-2"></i>Más Información
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection