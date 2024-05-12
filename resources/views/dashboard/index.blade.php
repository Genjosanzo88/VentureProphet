<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __($user->name . ' dashboard') }}
            </h2>
            <p class="text-gray-600 font-semibold">Puntos totales: 33</p>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-1">
                    <!-- Sección 1 -->
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <p class="text-gray-600 font-semibold">Code: {{ $user->code }}</p>
                            </div>
                            <div>
                                <p class="text-gray-600 font-semibold">Name: {{ $user->name }}</p>
                            </div>
                            <div>
                                <p class="text-gray-600 font-semibold">Email: {{ $user->email }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sección 2 -->
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <div class="flex items-center">
                            <img src="img/trophy.png" alt="Icono" class="inline-block h-14 w-14 mr-4">
                        </div>
                    </div>

                    <!-- Sección 3 -->
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                        Lista de ventas realizadas<br>
                        Codigo de venta, etc
                    </div>
                </div>
                <div class="col-span-1">
                    <!-- Sección en la columna derecha -->
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                        <h2 class="text-2xl font-semibold mb-4">Ranking</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 p-4">
                                <h3 class="text-xl font-semibold mb-2">{{ $user->name }}</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-gray-600">Puntos: 33</p>
                                    <span class="text-lg font-bold bg-green-500 text-white px-2 rounded-full">1</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Sección en la columna derecha -->
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                        Grafica lineal con pronostico
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
