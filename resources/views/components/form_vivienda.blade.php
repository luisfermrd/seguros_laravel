<div class="container m-sm-5 mt-3 bg-light">
    <div class="row">
        <div class="col ms-3">
            <h4 class="text-2xl text-blue-600">Formulario de seguro de vivienda</h4>
        </div>
        <div class="container p-4">
            <form action="" method="post">
                <div class="grid grid-cols-3 gap-4">
                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="nombres" value="{{ __('Nombre del propietario(*):') }}" />
                        <x-jet-input id="nombres" name="nombres" type="text" :value="old('nombres')" class="form-control" minlength="4" required placeholder="" value="" />
                        <x-jet-input-error for="nombres" class="mt-2" />
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
                        <x-jet-input id="num_documento" name="num_documento" type="number" :value="old('num_documento')" class="form-control" required maxlength="10" value="" />
                        <x-jet-input-error for="num_documento" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="email" value="{{ __('Email(*):') }}" />
                        <x-jet-input id="email" name="email" type="email" :value="old('email')" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="email" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="celular" value="{{ __('Celular:') }}" />
                        <x-jet-input id="celular" name="number" type="celular" :value="old('celular')" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="celular" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="direccion" value="{{ __('Direccion completa del inmueble (*):') }}" />
                        <x-jet-input id="direccion" name="text" type="direccion" :value="old('direccion')" class="form-control" minlength="5" required placeholder="" value="" />
                        <x-jet-input-error for="direccion" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="ciudad" value="{{ __('Ciudad/Municipio (*):') }}" />
                        <x-jet-input id="ciudad" name="ciudad" type="text" :value="old('ciudad')" minlength="5" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="ciudad" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="aseguradora" value="{{ __('Aseguradora Actual (SI APLICA):') }}" />
                        <x-jet-input id="aseguradora" name="aseguradora" type="text" :value="old('aseguradora')" minlength="5" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="aseguradora" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="construccion" value="{{ __('Edad aproximada o años de construcción (*):') }}" />
                        <x-jet-input id="construccion" name="construccion" type="text" :value="old('construccion')" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="construccion" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="valor" value="{{ __('Valor del Inmueble en Millones (*):') }}" />
                        <x-jet-input id="valor" name="valor" type="text" :value="old('valor')" class="form-control" required placeholder="" value="" />
                        <x-jet-input-error for="valor" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="asegurar" value="{{ __('Desea Asegurar contenidos?:') }}" />
                        <div>
                            <input type="radio" name="asegurar" value="Si"> <label>Si</label><br>
                            <input type="radio" name="asegurar" value="No"> <label>No</label>
                        </div>
                        <x-jet-input-error for="asegurar" class="mt-2" />
                    </x-contenedor_input>

                    <x-contenedor_input>
                        <x-jet-label class="font-semibold" for="acreedor" value="{{ __('Tiene acreedor oneroso/hipoteca/leasing?:') }}" />
                        <div>
                            <input type="radio" name="acreedor" value="Si"> <label>Si</label><br>
                            <input type="radio" name="acreedor" value="No"> <label>No</label>
                        </div>
                        <x-jet-input-error for="acreedor" class="mt-2" />
                    </x-contenedor_input>
                </div>
                <br>
                <br>
                <div class="form-group d-flex justify-content-between px-4 py-4">
                    <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Enviar</button>
                    <a href="{{ route('dashboard') }}"><button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Regresar</button></a>
                </div>
            </form>
        </div>
    </div>
</div>