<x-app-layout>
    <div class="py-12">
        <section class=" d-flex pt-5 pb-5 flex-wrap justify-content-around">
            <x-card class="text-bg-primary">
                <x-slot name="title">Numero de clientes</x-slot>
                <x-slot name="icon"><i class="bi bi-people-fill"></i></x-slot>
                <x-slot name="id">clientes</x-slot>
                <x-slot name="numero">0</x-slot>
            </x-card>
            <x-card class="text-bg-secondary">
                <x-slot name="title">Numero de usuarios</x-slot>
                <x-slot name="icon"><i class="bi bi-person-circle"></i></x-slot>
                <x-slot name="id">usuarios</x-slot>
                <x-slot name="numero">0</x-slot>
            </x-card>
            <x-card class="text-bg-success">
                <x-slot name="title">Numero de admins</x-slot>
                <x-slot name="icon"><i class="bi bi-gear-fill"></i></x-slot>
                <x-slot name="id">admins</x-slot>
                <x-slot name="numero">0</x-slot>
            </x-card>
            <x-card class="text-bg-dark">
                <x-slot name="title">Numero de recaudado</x-slot>
                <x-slot name="icon"><i class="bi bi-currency-dollar"></i></x-slot>
                <x-slot name="id">total</x-slot>
                <x-slot name="numero">0</x-slot>
            </x-card>
        </section>
    </div>
</x-app-layout>