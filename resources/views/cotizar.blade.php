<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="p-3 text-center">Para cotizar tu seguro, por favor llena los campos necesarios</h2>
                <section class="d-flex justify-content-center align-items-start gap-5 flex-wrap">
                    <article class="rounded" style="width: 450px; height: 580px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);">
                        <form  method="post" id="formulario" >
                            @csrf
                            <x-contenedor_input2 class="mt-4">
                                <x-jet-label for="num_personas" value="{{ __('Numero de personas, vehiculos o viviendas:') }}" />
                                <x-jet-input id="num_personas" name="num_personas" :value="old('num_personas')" type="number" class="form-control" required placeholder="Numero de personas, vehiculos o viviendas" value="1" />
                                <x-jet-input-error for="num_personas" class="mt-2" />
                            </x-contenedor_input2>

                            <x-contenedor_input2>
                                <x-jet-label for="seguro" value="{{ __('Que tipo de seguro desea cotizar') }}" />
                                <select id="seguro" name="seguro" :value="old('seguro')" class="form-select" required>
                                    <option value="vida">Seguro de vida</option>
                                    <option value="vivienda">Seguro de vivienda</option>
                                    <option value="vehiculo">Seguro de vehiculo</option>
                                </select>
                                <x-jet-input-error for="seguro" class="mt-2" />
                            </x-contenedor_input2>

                            <x-contenedor_input2>
                                <x-jet-label for="tipo_seguro" value="{{ __('Que tipo de seguro desea cotizar') }}" />
                                <select id="tipo_seguro" name="tipo_seguro" :value="old('tipo_seguro')" class="form-select" required>
                                    <option value="basico">Básico</option>
                                    <option value="estandar">Estándar</option>
                                    <option value="premiun">Premiun</option>
                                </select>
                                <x-jet-input-error for="tipo_seguro" class="mt-2" />
                            </x-contenedor_input2>

                            <x-contenedor_input2>
                                <x-jet-label for="fecha_inicio" value="{{ __('Fecha de inicio:') }}" />
                                <x-jet-input id="fecha_inicio" name="fecha_inicio" :value="old('fecha_inicio')" type="date" class="form-control" required />
                                <x-jet-input-error for="fecha_inicio" class="mt-2" />
                            </x-contenedor_input2>

                            <x-contenedor_input2>
                                <x-jet-label for="fecha_fin" value="{{ __('Fecha de fin:') }}" />
                                <x-jet-input id="fecha_fin" name="fecha_fin" :value="old('fecha_fin')" type="date" class="form-control" required />
                                <x-jet-input-error for="fecha_fin" class="mt-2" />
                            </x-contenedor_input2>
                
                            <div class="d-grid gap-2 ms-4 me-4 mt-4">
                                <button type="submit" name="" id="" class="btn btn-primary">Cotizar</button>
                            </div>
                        </form>

                        <div class="ms-4 me-4 mt-4">
                            <a href="{{route('home')}}" class="d-grid gap-2 text-decoration-none">
                                <button type="button" name="" id="" class="btn btn-dark">Volver</button>
                            </a>
                        </div>
                    </article>
                    
                    <article class="rounded bg-dark" style="width: 450px; height: 350px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);">
                        <h2 class="text-light text-center p-3">Seguros</h2>
                        <div class="container ps-5 pe-5 pt-2">
                            <p id="num_personas" class="text-light fw-bold">Número de asegurados: 1</p>
                            <p class="text-light fw-bold">Días asegurados:</p>
                            <p id="dias_agregados" class="text-light"></p>
                            <p class="text-light fw-bold">Plan seleccionado:</p>
                            <p id="plan_seleccionado" class="text-light"></p>
                            <hr class="border border-primary border-3 opacity-75">
                            <div class="d-flex justify-content-between">
                                <p class="text-light fw-bold">Total:</p>
                                <p id="total" class="text-light fw-bold">0</p>
                            </div>
                        </div>
                    </article>
                    
                </section>
            </div>
        </div>
    </div>
</x-app-layout>