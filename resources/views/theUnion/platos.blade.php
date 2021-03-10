<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Vista platos --}}
                <!-- tailwind.config.js -->


<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div x-data="{ cartOpen: false , isOpen: false }" class="bg-white">
    <header>
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="hidden w-full text-gray-600 md:flex md:items-center">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.06298 10.063 6.27212 12.2721 6.27212C14.4813 6.27212 16.2721 8.06298 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16755 11.1676 8.27212 12.2721 8.27212C13.3767 8.27212 14.2721 9.16755 14.2721 10.2721Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.39409 5.48178 3.79417C8.90918 0.194243 14.6059 0.054383 18.2059 3.48178C21.8058 6.90918 21.9457 12.6059 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.97318 6.93028 5.17324C9.59603 2.3733 14.0268 2.26452 16.8268 4.93028C19.6267 7.59603 19.7355 12.0268 17.0698 14.8268Z" fill="currentColor" />
                    </svg>
                    <span class="mx-1 text-sm">ESP</span>
                </div>
                <div class="w-full text-gray-700 md:text-center text-2xl font-semibold">
                    The Union
                </div>
                <div class="flex items-center justify-end w-full">
                    <a href="{{Route('cart.checkout')}}">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </a>
                </div>
            </div>
            {{-- Menu --}}
            <div class="relative mt-6 max-w-lg mx-auto">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>

                <input class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline" type="text" placeholder="Search">
            </div>

            <div class="relative mt-6 max-w-lg mx-auto">
                <p class="mt-3 text-gray-500 text-2xl font-small" style="text-align: center"><a href="/theUnion/restaurantes/{{$restaurante->id}}/platos">Todos</a></p>
                <p style = "width: 100%; text-align: center;" class="mt-3 text-gray-500 text-2xl font-small"> <a href="/theUnion/restaurantes/{{$restaurante->id}}/platos/ensalada">Ensalada</a>   <a href="/theUnion/restaurantes/{{$restaurante->id}}/platos/carne">Carne</a> <a href="/theUnion/restaurantes/{{$restaurante->id}}/platos/pizza">Pizza</a> <a href="/theUnion/restaurantes/{{$restaurante->id}}/platos/pescado">Pescado</a> <a href="/theUnion/restaurantes/{{$restaurante->id}}/platos/postre">Poste</a> <a href="/theUnion/restaurantes/{{$restaurante->id}}/platos/bodega">Bodega</a></p>
            </div>
        </div>
    </header>

    {{-- CONTENIDO --}}


    <main class="my-8">
        <div class="container mx-auto px-6">
            <a href="{{Route('restaurante.acercaDe', $restaurante->id)}}">
                <h3 style="float: right; margin-left: 50%" class="text-gray-700 text-2xl font-medium">Acerca del {{$restaurante->nombre}}</h3>
            </a>
            <a href="">
            <h3 class="text-gray-700 text-2xl font-small">{{$restaurante->nombre}}</h3>
            </a>
            <span class="mt-3 text-sm text-gray-500">200+ Dishes</span>
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                @if ($platos->count() != 0)

                @foreach ($platos as $plato)

                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{url('storage/plato/img', [$plato->foto])}}');  background-position:center;">

                        <a href="/theUnion/carrito/add/{{$plato->id}}" class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">{{$plato->nombre}}</h3>
                        <h3 class="text-gray-700 uppercase">{{$plato->descripcion}}</h3>
                        <h3 class="text-gray-700 uppercase"> {{$plato->precio}}€</h3>
                    </div>
                </div>
                @endforeach

                @else
                    <h1 style="margin-left: 125%; width: 200%" class="w-full text-gray-700 text-2xl font-semibold">Este Restaurante actualmente no tiene platos</h1>
                @endif

            </div>
            <div class="flex justify-center">
                <div class="flex rounded-md mt-8">
                    {{$platos->links()}}
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-200">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <p class="text-xl font-bold text-gray-500 hover:text-gray-400">The Union</p>
            <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
        </div>
    </footer>
</div>
            </div>
        </div>
    </div>
</x-app-layout>
