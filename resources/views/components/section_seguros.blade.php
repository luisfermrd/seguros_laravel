<section id="vida" class="d-flex justify-content-center align-items-center flex-column">
    <h2 class="text-success text-uppercase">{{ $titulo }}</h2>
    <hr class="border border-success border-2 opacity-75" width="40%">
    <h3 class="text-warning">Beneficios de este seguro</h3>
    <p class="ps-5 pe-5 m-5 text-center">{{ $descripcion }}</p>
    <div class="container d-flex justify-content-center align-items-start flex-wrap gap-4">

        {{$slot}}
      
    </div>

  </section>