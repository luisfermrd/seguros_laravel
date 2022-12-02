<div class="container m-sm-5 mt-3 bg-light">
    <div class="row">
        <div class="col ms-3">
            <h1 class="text-2xl text-blue-600">{{ $titulo }}</h1>
        </div>
        <div class="container p-4">
            <form action="" method="{{ $metodo }}" id="formulario" class="row d-flex">
                @csrf
                {{ $formulario }}

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
