<div class="m-5 bg-light">
    <h1><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Mis seguros</span></h1>

    <article class="p-3">
        <form id="formulario" method="post">
            <input type="hidden" name="id">
        </form>

        <div class="table-responsive rounded">
            <table class="table table-striped table-hover rounded">
                <thead>
                    <tr>
                        <th scope="col">Id beneficiario</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Tipo de seguro</th>
                        <th scope="col">Fecha inicio - Fecha fin</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Pago</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody id="datosTabla">
                    <tr class="text-sm">
                        <td scope="row">1234567811</td>
                        <td scope="row">usuario</td>
                        <td scope="row">Seguro de vida (premiun)</td>
                        <td scope="row">2022-11-10 - 2022-12-01</td>
                        <td scope="row">42000</td>
                        <td scope="row">
                            <x-p color="primary">NO</x-p>
                        </td>
                        <td scope="row">
                            <x-a href="{{ route('user.pagar') }}" type="button" color="primary">
                                Pagar
                            </x-a>
                            <x-a href="{{ route('user.detalles') }}" type="button" color="yellow">
                                Detalles
                            </x-a>
                        </td>
                    </tr>
                    <tr class="text-sm">
                        <td scope="row">1234567811</td>
                        <td scope="row">usuario</td>
                        <td scope="row">Seguro de vida (estandar)</td>
                        <td scope="row">2022-11-10 - 2023-01-10</td>
                        <td scope="row">91500</td>
                        <td scope="row">
                            <x-p color="green">SI</x-p>
                        </td>
                        <td scope="row">
                            <x-a href="{{ route('user.cancelar_seguro') }}" type="button" color="red">
                                Cancelar seguro
                            </x-a>
                            <x-a href="{{ route('user.reclamar') }}" type="button" color="green">
                                Reclamar
                            </x-a>
                            <x-a href="{{ route('user.reclamar') }}" type="button" color="yellow">
                                Detalles
                            </x-a>
                        </td>
                    </tr>
                    <tr class="text-sm">
                        <td scope="row">1234567811</td>
                        <td scope="row">usuario</td>
                        <td scope="row">Seguro de vida (basico)</td>
                        <td scope="row">2022-11-10 - 2022-12-10</td>
                        <td scope="row">30000</td>
                        <td scope="row">
                            <x-p color="green">SI</x-p>
                        </td>
                        <td scope="row">
                            <x-a href="{{ route('user.pagar') }}" type="button" color="green">
                                Reclamado
                            </x-a>
                            <x-a href="{{ route('user.detalles') }}" type="button" color="yellow">
                                Detalles
                            </x-a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </tbody>
    </article>
</div>