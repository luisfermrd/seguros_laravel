<div class="container m-sm-5 mt-3 bg-light">
    <div class="row">
        <div class="col ms-3">
            <h1 class="text-2xl text-blue-600">Formulario de seguro de vehículo</h1>
        </div>
        <div class="container p-4">
            <form action="" method="post">
                @csrf
                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="cumple_seguro" value="{{ __('Cuando le cumple el seguro?(*)') }}" />
                    <select name="cumple_seguro" class="form-select" required>
                        <option value="Enero">Enero</option>
                        <option value="Febrero">Febrero</option>
                        <option value="Marzo">Marzo</option>
                        <option value="Abril">Abril</option>
                        <option value="Mayo">Mayo</option>
                        <option value="Junio">Junio</option>
                        <option value="Julio">Julio</option>
                        <option value="Agosto">Agosto</option>
                        <option value="Septiembre">Septiembre</option>
                        <option value="Octubre">Octubre</option>
                        <option value="Noviembre">Noviembre</option>
                        <option value="Diciembre">Diciembre</option>
                    </select>
                    <x-jet-input-error for="cumple_seguro" class="mt-2" />
                </x-contenedor_input>
            

                <x-contenedor_input>
                    <div class="form-group col-lg-12">
                        <h3 class="text-xl text-gray-500 whitespace-nowrap dark:text-gray-400">Datos del vehículo</h3>
                    </div>
                </x-contenedor_input>

                <div class="row d-flex">
                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="uso" value="{{ __('Uso(*):') }}" />
                        <select name="uso" class="form-select" required>
                            <option value="Servicio público">Servicio público</option>
                            <option value="Servicio privado">Servicio privado</option>
                        </select>
                        <x-jet-input-error for="uso" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="tipo_vehiculo" value="{{ __('Tipo de vehículo(*):') }}" />
                        <select name="tipo_vehiculo" class="form-select" required>
                            <option value="Turismo">Turismo</option>
                            <option value="Furgoneta">Furgoneta</option>
                            <option value="Camión">Camión</option>
                            <option value="Motocicleta">Motocicleta</option>
                            <option value="Ciclomotor">Ciclomotor</option>
                        </select>
                        <x-jet-input-error for="tipo_vehiculo" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="marca" value="{{ __('Marca(*):') }}" />
                        <select name="marca" class="form-select">
                            <option value="">Seleccione...</option>
                            <option value="Alfa Romeo">Alfa Romeo</option>
                            <option value="Aprilia">Aprilia</option>
                            <option value="Audi">Audi</option>
                            <option value="Bmw">Bmw</option>
                            <option value="Cagiva">Cagiva</option>
                            <option value="Citroën">Citroën</option>
                            <option value="Dacia">Dacia</option>
                            <option value="Derbi">Derbi</option>
                            <option value="Ducati">Ducati</option>
                            <option value="Fiat">Fiat</option>
                            <option value="Ford">Ford</option>
                            <option value="Gilera">Gilera</option>
                            <option value="Honda">Honda</option>
                            <option value="Hyundai">Hyundai</option>
                            <option value="Kawasaki">Kawasaki</option>
                            <option value="Kia">Kia</option>
                            <option value="Kymco">Kymco</option>
                            <option value="Lancia">Lancia</option>
                            <option value="Land Rover">Land Rover</option>
                            <option value="Lexus">Lexus</option>
                            <option value="Mazda">Mazda</option>
                            <option value="Mercedes">Mercedes</option>
                            <option value="Mini">Mini</option>
                            <option value="Mitsubishi">Mitsubishi</option>
                            <option value="Nissan">Nissan</option>
                            <option value="Opel">Opel</option>
                            <option value="Peugeot">Peugeot</option>
                            <option value="Piaggio">Piaggio</option>
                            <option value="Renault">Renault</option>
                            <option value="Rieju">Rieju</option>
                            <option value="Seat">Seat</option>
                            <option value="Skoda">Skoda</option>
                            <option value="Smart">Smart</option>
                            <option value="SsangYong">SsangYong</option>
                            <option value="Subaru">Subaru</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Vespa">Vespa</option>
                            <option value="Volkswagen">Volkswagen</option>
                            <option value="Volvo">Volvo</option>
                            <option value="Yamaha">Yamaha</option>
                        </select>
                        <x-jet-input-error for="marca" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="tipo_vehiculo" value="{{ __('Otra marca:') }}" />
                        <x-jet-input id="otra_marca" name="otra_marca" type="text" :value="old('otra_marca')" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="otra_marca" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="modelo" value="{{ __('Modelo (*):') }}" />
                        <x-jet-input id="modelo" name="modelo" type="number" :value="old('modelo')" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="modelo" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="version" value="{{ __('Version:') }}" />
                        <x-jet-input id="version" name="text" type="version" :value="old('version')" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="version" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="motor" value="{{ __('Motor:') }}" />
                        <x-jet-input id="motor" name="motor" type="text" :value="old('motor')" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="motor" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="cv" value="{{ __('CV:') }}" />
                        <x-jet-input id="cv" name="cv" type="text" :value="old('cv')" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="cv" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="carga" value="{{ __('Carga:') }}" />
                        <select name="carga" class="form-control">
                            <option value="Con reparto">Con reparto</option>
                            <option value="Sin reparto">Sin reparto</option>
                        </select>
                        <x-jet-input-error for="carga" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="matricula" value="{{ __('Matricula (*):') }}" />
                        <x-jet-input id="matricula" name="matricula" type="text" :value="old('matricula')" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="matricula" class="mt-2" />
                    </x-contenedor_input>
                </div>

                <x-contenedor_input>
                    <div class="form-group col-lg-12">
                        <h3 class="text-xl text-gray-500 whitespace-nowrap dark:text-gray-400">Datos del conductor</h3>
                    </div>
                </x-contenedor_input>

                <div class="row d-flex">
                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="nombres" value="{{ __('Nombres y apellidos(*):') }}" />
                        <x-jet-input id="nombres" name="nombres" type="text" :value="old('nombres')" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="nombres" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="email" value="{{ __('Email(*):') }}" />
                        <x-jet-input id="email" name="email" type="email" :value="old('email')" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="email" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="celular" value="{{ __('Celular(*)') }}" />
                        <x-jet-input id="celular" name="celular" type="number" :value="old('celular')" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="celular" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="tipo_documento" value="{{ __('Tipo de documento(*)') }}" />
                        <select name="tipo_documento" class="form-select" required>
                            <option value="Cedula de ciudadania">Cedula de ciudadanía</option>
                            <option value="Cedula de extranjeria">Cedula de extranjería</option>
                            <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select>
                        <x-jet-input-error for="tipo_documento" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="num_documento" value="{{ __('Numero de documento(*):') }}" />
                        <x-jet-input id="num_documento" name="num_documento" type="number" :value="old('num_documento')" class="form-control" required maxlength="10" required placeholder="" value="" />
                        <x-jet-input-error for="num_documento" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="fecha_nacimiento" value="{{ __('Fecha de nacimiento:') }}" />
                        <x-jet-input id="fecha_nacimiento" name="fecha_nacimiento" type="date" :value="old('fecha_nacimiento')" class="form-control" required maxlength="10" required placeholder="" value="" />
                        <x-jet-input-error for="fecha_nacimiento" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="fecha_carnet" value="{{ __('Fecha de carnet conducir:') }}" />
                        <x-jet-input id="fecha_carnet" name="fecha_carnet" type="date" :value="old('fecha_carnet')" class="form-control" required maxlength="10" required placeholder="" value="" />
                        <x-jet-input-error for="fecha_carnet" class="mt-2" />
                    </x-contenedor_input>
                </div>
                <br>
                <br>
                <div class="form-group d-flex justify-content-between px-4 py-4">
                    <x-button type="submit" color="green">
                        Enviar
                    </x-button>
                    <a href="{{ route('dashboard') }}">
                        <x-button type="button" color="red">
                            Regresar
                        </x-button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>