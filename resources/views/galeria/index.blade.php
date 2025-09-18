@extends('layouts.app')

@section('title', 'Galería - Liceo Bilingüe')

@section('description', 'Revive los mejores momentos de nuestra comunidad educativa. Galería fotográfica de eventos y actividades del Liceo Bilingüe.')

@section('content')

{{-- HERO SECTION --}}
<section style="background: linear-gradient(135deg, #7c3aed 0%, #5b21b6 100%); color: white; padding: 5rem 0 3rem; margin-top: -20px;">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb" style="background: transparent; padding: 0; margin-bottom: 0;">
        <li class="breadcrumb-item">
          <a href="{{ route('home') }}" style="color: rgba(255, 255, 255, 0.8); text-decoration: none;">Inicio</a>
        </li>
        <li class="breadcrumb-item active" style="color: white;">Galería</li>
      </ol>
    </nav>
    
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h1 style="font-size: 3rem; font-weight: 900; margin-bottom: 1rem;">Galería Fotográfica</h1>
        <p style="font-size: 1.3rem; opacity: 0.95; margin-bottom: 0;">
          Revive los mejores momentos de nuestra comunidad educativa. 
          Encuentra las fotos de eventos, actividades y celebraciones especiales.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <i class="bi bi-camera" style="font-size: 8rem; opacity: 0.2;"></i>
      </div>
    </div>
  </div>
</section>

{{-- FILTROS --}}
<section style="padding: 3rem 0; background: #f8fafc;">
  <div class="container">
    <div class="text-center mb-4">
      <div class="d-flex justify-content-center gap-2 flex-wrap">
        <button class="btn btn-outline-primary active" onclick="filterGallery('all')">Todas</button>
        <button class="btn btn-outline-primary" onclick="filterGallery('academico')">Académico</button>
        <button class="btn btn-outline-primary" onclick="filterGallery('deportes')">Deportes</button>
        <button class="btn btn-outline-primary" onclick="filterGallery('cultural')">Cultural</button>
        <button class="btn btn-outline-primary" onclick="filterGallery('eventos')">Eventos</button>
      </div>
    </div>
    
    <div class="row justify-content-center">
      <div class="col-md-6">
        <input type="text" class="form-control" placeholder="Buscar evento o actividad..." onkeyup="searchGallery(this.value)">
      </div>
    </div>
  </div>
</section>

{{-- GALERÍA --}}
<section style="padding: 5rem 0;">
  <div class="container">
    
    {{-- ÁLBUM 1: Feria de Ciencias --}}
    <div class="gallery-album mb-5" data-category="academico">
      <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem; text-align: center;">
        <h2 style="color: var(--brand-accent); font-size: 1.8rem; font-weight: 700; margin-bottom: 0.5rem;">Feria de Ciencias e Innovación 2025</h2>
        <p style="color: #6b7280; font-weight: 500; margin-bottom: 1rem;">15 de Marzo, 2025</p>
        <p style="color: #374151; line-height: 1.6;">
          Nuestros estudiantes brillaron con proyectos innovadores en robótica, química, física y biología.
        </p>
      </div>
      
      <div class="row g-3">
        <div class="col-md-4">
          <div style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openModal('{{ asset('img/galeria/feria1.jpg') }}', 'Proyecto de Robótica - Grado 10A', 'Robot programado para resolver laberintos')">
            <img src="{{ asset('img/galeria/feria1.jpg') }}" class="img-fluid" alt="Robótica" style="height: 250px; width: 100%; object-fit: cover;">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
              <div style="font-weight: 600;">Proyecto de Robótica - Grado 10A</div>
              <div style="font-size: 0.9rem; opacity: 0.8;">Robot programado para resolver laberintos</div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openModal('{{ asset('img/galeria/feria2.jpg') }}', 'Experimento de Química', 'Reacciones químicas y cambios de color')">
            <img src="{{ asset('img/galeria/feria2.jpg') }}" class="img-fluid" alt="Química" style="height: 250px; width: 100%; object-fit: cover;">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
              <div style="font-weight: 600;">Experimento de Química</div>
              <div style="font-size: 0.9rem; opacity: 0.8;">Reacciones químicas y cambios de color</div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openModal('{{ asset('img/galeria/feria3.jpg') }}', 'Energía Solar - Grado 11B', 'Panel solar casero generando electricidad')">
            <img src="{{ asset('img/galeria/feria3.jpg') }}" class="img-fluid" alt="Energía Solar" style="height: 250px; width: 100%; object-fit: cover;">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
              <div style="font-weight: 600;">Energía Solar - Grado 11B</div>
              <div style="font-size: 0.9rem; opacity: 0.8;">Panel solar casero generando electricidad</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- ÁLBUM 2: Día del Árbol --}}
    <div class="gallery-album mb-5" data-category="eventos">
      <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem; text-align: center;">
        <h2 style="color: var(--brand-accent); font-size: 1.8rem; font-weight: 700; margin-bottom: 0.5rem;">Actividad Día del Árbol</h2>
        <p style="color: #6b7280; font-weight: 500; margin-bottom: 1rem;">25 de Febrero, 2025</p>
        <p style="color: #374151; line-height: 1.6;">
          Jornada ecológica donde plantamos 50 árboles nativos en el campus escolar. Compromiso ambiental en acción.
        </p>
      </div>
      
      <div class="row g-3">
        <div class="col-md-3">
          <div style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openModal('{{ asset('img/galeria/arbol1.jpg') }}', 'Plantando Árboles Nativos', 'Estudiantes de 8° grado sembrando ceibas')">
            <img src="{{ asset('img/galeria/arbol1.jpg') }}" class="img-fluid" alt="Plantando" style="height: 200px; width: 100%; object-fit: cover;">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 0.75rem;">
              <div style="font-weight: 600; font-size: 0.9rem;">Plantando Árboles</div>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openModal('{{ asset('img/galeria/arbol2.jpg') }}', 'Preparando la Tierra', 'Trabajo en equipo para el medio ambiente')">
            <img src="{{ asset('img/galeria/arbol2.jpg') }}" class="img-fluid" alt="Preparando" style="height: 200px; width: 100%; object-fit: cover;">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 0.75rem;">
              <div style="font-weight: 600; font-size: 0.9rem;">Preparando la Tierra</div>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openModal('{{ asset('img/galeria/arbol3.jpg') }}', 'Compromiso Ecológico', 'Promesa de cuidar los árboles plantados')">
            <img src="{{ asset('img/galeria/arbol3.jpg') }}" class="img-fluid" alt="Compromiso" style="height: 200px; width: 100%; object-fit: cover;">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 0.75rem;">
              <div style="font-weight: 600; font-size: 0.9rem;">Compromiso Ecológico</div>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openModal('{{ asset('img/galeria/arbol4.jpg') }}', 'Charla Ambiental', 'Biólogo explicando importancia de los bosques')">
            <img src="{{ asset('img/galeria/arbol4.jpg') }}" class="img-fluid" alt="Charla" style="height: 200px; width: 100%; object-fit: cover;">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 0.75rem;">
              <div style="font-weight: 600; font-size: 0.9rem;">Charla Ambiental</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- ÁLBUM 3: Olimpiadas Deportivas --}}
    <div class="gallery-album mb-5" data-category="deportes">
      <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem; text-align: center;">
        <h2 style="color: var(--brand-accent); font-size: 1.8rem; font-weight: 700; margin-bottom: 0.5rem;">Olimpiadas Deportivas Intercolegiadas</h2>
        <p style="color: #6b7280; font-weight: 500; margin-bottom: 1rem;">5 de Marzo, 2025</p>
        <p style="color: #374151; line-height: 1.6;">
          Nuestros atletas se destacaron obteniendo medallas de oro en natación y atletismo.
        </p>
      </div>
      
      <div class="row g-3">
        <div class="col-md-4">
          <div style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openModal('{{ asset('img/galeria/deporte1.jpg') }}', 'Competencia de Natación', 'Final de 100 metros libres')">
            <img src="{{ asset('img/galeria/deporte1.jpg') }}" class="img-fluid" alt="Natación" style="height: 250px; width: 100%; object-fit: cover;">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
              <div style="font-weight: 600;">Competencia de Natación</div>
              <div style="font-size: 0.9rem; opacity: 0.8;">Final de 100 metros libres</div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openModal('{{ asset('img/galeria/deporte2.jpg') }}', 'Atletismo - Salto Alto', 'Carlos Mendoza batiendo récord escolar')">
            <img src="{{ asset('img/galeria/deporte2.jpg') }}" class="img-fluid" alt="Atletismo" style="height: 250px; width: 100%; object-fit: cover;">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
              <div style="font-weight: 600;">Atletismo - Salto Alto</div>
              <div style="font-size: 0.9rem; opacity: 0.8;">Carlos Mendoza batiendo récord escolar</div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openModal('{{ asset('img/galeria/deporte3.jpg') }}', 'Equipo de Baloncesto', 'Semifinal femenina - Victoria 68-54')">
            <img src="{{ asset('img/galeria/deporte3.jpg') }}" class="img-fluid" alt="Baloncesto" style="height: 250px; width: 100%; object-fit: cover;">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
              <div style="font-weight: 600;">Equipo de Baloncesto</div>
              <div style="font-size: 0.9rem; opacity: 0.8;">Semifinal femenina - Victoria 68-54</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- ÁLBUM 4: Teatro --}}
    <div class="gallery-album mb-5" data-category="cultural">
      <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 2rem; text-align: center;">
        <h2 style="color: var(--brand-accent); font-size: 1.8rem; font-weight: 700; margin-bottom: 0.5rem;">Festival de Teatro: "Romeo y Julieta" Bilingüe</h2>
        <p style="color: #6b7280; font-weight: 500; margin-bottom: 1rem;">1 de Marzo, 2025</p>
        <p style="color: #374151; line-height: 1.6;">
          Una magistral adaptación bilingüe de la obra clásica de Shakespeare.
        </p>
      </div>
      
      <div class="row g-3">
        <div class="col-md-4">
          <div style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openModal('{{ asset('img/galeria/teatro1.jpg') }}', 'Escena del Balcón', 'Romeo y Julieta - Acto II')">
            <img src="{{ asset('img/galeria/teatro1.jpg') }}" class="img-fluid" alt="Teatro" style="height: 250px; width: 100%; object-fit: cover;">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
              <div style="font-weight: 600;">Escena del Balcón</div>
              <div style="font-size: 0.9rem; opacity: 0.8;">Romeo y Julieta - Acto II</div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openModal('{{ asset('img/galeria/teatro2.jpg') }}', 'Vestuario Renacentista', 'Detalles de época perfectamente recreados')">
            <img src="{{ asset('img/galeria/teatro2.jpg') }}" class="img-fluid" alt="Vestuario" style="height: 250px; width: 100%; object-fit: cover;">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
              <div style="font-weight: 600;">Vestuario Renacentista</div>
              <div style="font-size: 0.9rem; opacity: 0.8;">Detalles de época perfectamente recreados</div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'" onclick="openModal('{{ asset('img/galeria/teatro3.jpg') }}', 'Ovación del Público', 'Standing ovation al final de la obra')">
            <img src="{{ asset('img/galeria/teatro3.jpg') }}" class="img-fluid" alt="Ovación" style="height: 250px; width: 100%; object-fit: cover;">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 1rem;">
              <div style="font-weight: 600;">Ovación del Público</div>
              <div style="font-size: 0.9rem; opacity: 0.8;">Standing ovation al final de la obra</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- MODAL LIGHTBOX --}}
<div class="modal fade" id="photoModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" style="background: #000; border: none;">
      <div class="modal-header border-0" style="position: absolute; top: 0; right: 0; z-index: 1000;">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-0">
        <img id="modalImage" src="" alt="" class="img-fluid w-100" style="max-height: 80vh; object-fit: contain;">
        <div class="text-center text-white p-3">
          <h5 id="modalCaption" class="mb-2"></h5>
          <p id="modalDetails" class="mb-0 opacity-75"></p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
// Filtrar por categoría
function filterGallery(category) {
  // Actualizar botones activos
  document.querySelectorAll('.btn').forEach(btn => btn.classList.remove('active'));
  event.target.classList.add('active');
  
  // Mostrar/ocultar álbumes
  document.querySelectorAll('.gallery-album').forEach(album => {
    if (category === 'all' || album.dataset.category === category) {
      album.style.display = 'block';
    } else {
      album.style.display = 'none';
    }
  });
}

// Buscar por texto
function searchGallery(searchTerm) {
  const term = searchTerm.toLowerCase();
  document.querySelectorAll('.gallery-album').forEach(album => {
    const title = album.querySelector('h2').textContent.toLowerCase();
    const description = album.querySelector('p').textContent.toLowerCase();
    
    if (title.includes(term) || description.includes(term)) {
      album.style.display = 'block';
    } else {
      album.style.display = 'none';
    }
  });
}

// Abrir modal con foto
function openModal(src, caption, details) {
  document.getElementById('modalImage').src = src;
  document.getElementById('modalCaption').textContent = caption;
  document.getElementById('modalDetails').textContent = details;
  
  var modal = new bootstrap.Modal(document.getElementById('photoModal'));
  modal.show();
}
</script>

@endsection