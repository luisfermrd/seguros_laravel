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
                            <p class="py-2 px-3 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-blue-600 dark:hover:bg-red-700 dark:focus:ring-blue-800">No</p>
                        </td>
                        <td scope="row">
                            <a href="{{ route('user.pagar') }}" type="button" class="text-decoration-none py-2 px-3 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pagar</a>
                            <a href="{{ route('user.detalles') }}" type="button" class="text-decoration-none py-2 px-3 text-xs font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detalles</a>
                        </td>
                    </tr>
                    <tr class="text-sm">
                        <td scope="row">1234567811</td>
                        <td scope="row">usuario</td>
                        <td scope="row">Seguro de vida (estandar)</td>
                        <td scope="row">2022-11-10 - 2023-01-10</td>
                        <td scope="row">91500</td>
                        <td scope="row">
                            <p class="py-2 px-3 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Si</p>
                        </td>
                        <td scope="row">
                            <a href="{{ route('user.cancelar_seguro') }}" type="button" class="text-decoration-none py-2 px-3 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Cancelar seguro</a>
                            <a href="{{ route('user.reclamar') }}" type="button" class="text-decoration-none py-2 px-3 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Reclamar</a>
                            <a href="" type="button" class="text-decoration-none py-2 px-3 text-xs font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detalles</a>
                        </td>
                    </tr>
                    <tr class="text-sm">
                        <td scope="row">1234567811</td>
                        <td scope="row">usuario</td>
                        <td scope="row">Seguro de vida (basico)</td>
                        <td scope="row">2022-11-10 - 2022-12-10</td>
                        <td scope="row">30000</td>
                        <td scope="row">
                            <p class="py-2 px-3 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Si</p>
                        </td>
                        <td scope="row">
                            <a href="" type="button" class="text-decoration-none py-2 px-3 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Reclamado</a>
                            <a href="" type="button" class="text-decoration-none py-2 px-3 text-xs font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Detalles</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </tbody>
    </article>
</div>