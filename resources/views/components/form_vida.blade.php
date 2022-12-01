<div class="container m-sm-5 mt-3 bg-light">
    <div class="row">
        <div class="col ms-3">
            <h1 class="text-2xl text-blue-600">Formulario de seguro de vida</h1>
        </div>
        <div class="container p-4">
            <form id="formulario" method="post" class="row d-flex">
                @csrf
                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="nombres" value="{{ __('Nombres y apellidos(*):') }}" />
                    <x-jet-input id="nombres" name="nombres" type="text" :value="old('num_personas')" class="form-control" required placeholder="Nombres y apellidos" value="" />
                    <x-jet-input-error for="nombres" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="tipo_documento" value="{{ __('Tipo de documento(*)') }}" />
                    <select name="tipo_documento" class="form-select" required">
                        <option value="Cedula de ciudadania">Cedula de ciudadanía</option>
                        <option value="Cedula de extranjeria">Cedula de extranjería</option>
                        <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                    <x-jet-input-error for="tipo_documento" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="num_documento" value="{{ __('Numero de documento(*):') }}" />
                    <x-jet-input id="num_documento" name="num_documento" type="number" :value="old('num_documento')" class="form-control" required placeholder="Numero de documento" value="" />
                    <x-jet-input-error for="num_documento" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="fecha_nacimiento" value="{{ __('Fecha de nacimiento(*):') }}" />
                    <x-jet-input id="fecha_nacimiento" name="fecha_nacimiento" type="date" :value="old('fecha_nacimiento')" class="form-control" required placeholder="Fecha de nacimiento" value="" />
                    <x-jet-input-error for="fecha_nacimiento" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="sexo" value="{{ __('Sexo(*):') }}" />
                    <div>
                        <input type="radio" name="sexo" value="Femenino" required> <label>Femenino</label><br>
                        <input type="radio" name="sexo" value="Masculino"> <label>Masculino</label>
                    </div>
                    <x-jet-input-error for="sexo" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="estado_civil" value="{{ __('Estado civil (*):') }}" />
                    <div class="row">
                        <div class="col-6">
                            <input type="radio" name="estado_civil" value="Soltero" required> <label>Soltero</label><br>
                            <input type="radio" name="estado_civil" value="Separado"> <label>Separado</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="estado_civil" value="Union libre"> <label>Union libre</label><br>
                            <input type="radio" name="estado_civil" value="Casado"> <label>Casado</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="estado_civil" value="Divorciado"> <label>Divorciado</label><br>
                            <input type="radio" name="estado_civil" value="Viudo"> <label>Viudo</label>
                        </div>
                    </div>
                    <x-jet-input-error for="estado_civil" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="email" value="{{ __('Email(*):') }}" />
                    <x-jet-input id="email" name="email" type="email" :value="old('email')" class="form-control" required placeholder="Email" value="" />
                    <x-jet-input-error for="email" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="celular" value="{{ __('Celular:') }}" />
                    <x-jet-input id="celular" name="number" type="celular" :value="old('celular')" class="form-control" required placeholder="Celular" value="" />
                    <x-jet-input-error for="celular" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="direccion" value="{{ __('Direccion de domicilio:') }}" />
                    <x-jet-input id="direccion" name="text" type="direccion" :value="old('direccion')" class="form-control" minlength="5" required placeholder="Direccion de domicilio" value="" />
                    <x-jet-input-error for="direccion" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="ciudad" value="{{ __('Ciudad/Municipio (*):') }}" />
                    <x-jet-input id="ciudad" name="ciudad" type="text" :value="old('ciudad')" minlength="5" class="form-control" required placeholder="Ciudad/Municipio" value="" />
                    <x-jet-input-error for="ciudad" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="ingreso" value="{{ __('Ingreso mensual(*):') }}" />
                    <x-jet-input id="ingreso" name="ingreso" type="number" :value="old('ingreso')" class="form-control" required placeholder="Ingreso mensual" value="" />
                    <x-jet-input-error for="ingreso" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="profesion" value="{{ __('Profesion:') }}" />
                    <x-jet-input id="profesion" name="" type="text" :value="old('profesion')" class="form-control" required placeholder="Profesion" value="" />
                    <x-jet-input-error for="profesion" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="medicamento" value="{{ __('Consume actualmente algún medicamento?:') }}" />
                    <div>
                        <input type="radio" name="medicamento" value="Si"> <label>Si</label><br>
                        <input type="radio" name="medicamento" value="No"> <label>No</label>
                    </div>
                    <x-jet-input-error for="medicamento" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="cual" value="{{ __('En caso de consumir medicamento cual?') }}" />
                    <x-jet-input id="cual" name="cual" type="text" :value="old('profesion')" class="form-control" required placeholder="Cual medicamento" value="" />
                    <x-jet-input-error for="cual" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="eps_ips" value="{{ __('A que EPS e IPS está afiliado? (*):') }}" />
                    <x-jet-input id="eps_ips" name="eps_ips" type="text" :value="old('eps_ips')" class="form-control" required placeholder="EPS e IPS" value="" />
                    <x-jet-input-error for="eps_ips" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="fecha_inicio" value="{{ __('Fecha de inicio del seguro:') }}" />
                    <x-jet-input id="fecha_inicio" name="fecha_inicio" type="date" :value="old('fecha_inicio')" class="form-control" required placeholder="" value="" />
                    <x-jet-input-error for="fecha_inicio" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="fecha_fin" value="{{ __('Fecha de finalización del seguro:') }}" />
                    <x-jet-input id="fecha_fin" name="fecha_fin" type="date" :value="old('fecha_fin')" class="form-control" required placeholder="" value="" />
                    <x-jet-input-error for="fecha_fin" class="mt-2" />
                </x-contenedor_input>

                <x-contenedor_input>
                    <x-jet-label class="font-semibold" for="tipo_seguro" value="{{ __('Seleccione un plan:') }}" />
                    <select name="tipo_seguro" class="form-select" required>
                        <option value="basico">Básico</option>
                        <option value="estandar">Estándar</option>
                        <option value="premiun">Premiun</option>
                    </select>
                    <x-jet-input-error for="tipo_seguro" class="mt-2" />
                </x-contenedor_input>
            
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