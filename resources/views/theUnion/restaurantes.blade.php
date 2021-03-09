<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Vista Restaurantes --}}
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
        </div>
    </header>

    {{-- CONTENIDO --}}


    <main class="my-8">
        <div class="container mx-auto px-6">
            <h3 class="text-gray-700 text-2xl font-medium">Restaurant</h3>
            <span class="mt-3 text-sm text-gray-500">200+ Restaurant</span>
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">

                @foreach ($restaurantes as $restaurante)

                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{url('storage/restaurantes/img', [$restaurante->foto])}}'); background-position: center ;">
                        <a href="/theUnion/restaurantes/{{$restaurante->id}}/platos" class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                   {{-- <svg class="fill-current h-5 w-5" version="1.1" id="Open_book" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <path d="M10.595,5.196l0.446,1.371c0.369-0.316,0.835-0.599,1.441-0.795c0.59-0.192,1.111-0.3,1.582-0.362l-0.43-1.323 c-0.476,0.069-1.001,0.18-1.58,0.368C11.476,4.643,10.999,4.905,10.595,5.196z M11.522,8.051l0.446,1.371 c0.369-0.316,0.835-0.599,1.441-0.795c0.59-0.192,1.111-0.3,1.582-0.362l-0.43-1.323c-0.476,0.069-1.001,0.18-1.58,0.368 C12.403,7.497,11.927,7.759,11.522,8.051z M12.45,10.905l0.446,1.371c0.369-0.316,0.835-0.599,1.441-0.795 c0.59-0.192,1.111-0.3,1.582-0.362l-0.43-1.323c-0.476,0.069-1.001,0.18-1.58,0.368C13.33,10.351,12.854,10.614,12.45,10.905z M5.388,13.077l0.43,1.323c0.417-0.226,0.902-0.445,1.492-0.636c0.606-0.197,1.149-0.242,1.633-0.203l-0.446-1.371 c-0.499,0.002-1.038,0.07-1.615,0.257C6.303,12.635,5.813,12.853,5.388,13.077z M3.533,7.368l0.43,1.323 C4.38,8.465,4.865,8.247,5.455,8.055c0.606-0.197,1.149-0.242,1.633-0.203L6.643,6.48C6.144,6.483,5.605,6.55,5.027,6.738 C4.448,6.926,3.958,7.144,3.533,7.368z M4.46,10.223l0.43,1.323c0.417-0.226,0.902-0.445,1.492-0.636 c0.606-0.197,1.149-0.242,1.633-0.203L7.57,9.335c-0.499,0.002-1.038,0.07-1.615,0.257C5.376,9.78,4.885,9.999,4.46,10.223z M11.064,1.41C9.341,1.97,8.441,3.162,8.011,3.969c-0.822-0.4-2.25-0.835-3.973-0.275c-2.523,0.82-3.969,2.627-3.969,2.627 l4.095,12.587c0.126,0.387,0.646,0.477,0.878,0.143c0.499-0.719,1.46-1.658,3.257-2.242c1.718-0.558,2.969,0.054,3.655,0.578 c0.272,0.208,0.662,0.06,0.762-0.268c0.252-0.827,0.907-2.04,2.61-2.593c1.799-0.585,3.129-0.389,3.956-0.1 c0.385,0.134,0.75-0.242,0.625-0.629L15.819,1.203C15.819,1.203,13.587,0.591,11.064,1.41z M10.951,15.256 c-0.819-0.244-1.901-0.358-3.141,0.044c-1.251,0.406-2.127,0.949-2.699,1.404L1.866,6.722C2.224,6.364,3.053,5.68,4.528,5.201 c1.389-0.451,2.528-0.065,3.279,0.378L10.951,15.256z M17.845,12.567c-0.731-0.032-1.759,0.044-3.01,0.451 c-1.24,0.403-2.048,1.132-2.567,1.81L9.124,5.151c0.346-0.8,1.04-1.782,2.43-2.233c1.474-0.479,2.547-0.413,3.047-0.334 L17.845,12.567z"/> </svg> --}}
                                    <img width="10%" class="fill-current h-5 w-5" version="1.1" src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTEuOTk5IDUxMS45OTkiIGhlaWdodD0iNTEyIiB2aWV3Qm94PSIwIDAgNTExLjk5OSA1MTEuOTk5IiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnPjxnIGlkPSJfeDM0XzhfZXllIj48cGF0aCBkPSJtMjU2IDEyNy45NTNjLTE3NS43MjcgMy4xMjctMjQ4LjUgMTI4LjA0Ny0yNDguNSAxMjguMDQ3czcyLjc3MyAxMjQuOTE5IDI0OC41IDEyOC4wNDZjMTc1LjcyNy0zLjEyNyAyNDguNS0xMjguMDQ3IDI0OC41LTEyOC4wNDdzLTcyLjc3My0xMjQuOTE5LTI0OC41LTEyOC4wNDZ6IiBmaWxsPSIjZDhlY2ZlIi8+PHBhdGggZD0ibTQ3My41ODEgMjE3LjcwNWMyLjI4NSAzLjM1NyAzLjQwMyA1LjI3NSAzLjQwMyA1LjI3NXMtNzIuNzczIDEyNC45Mi0yNDguNSAxMjguMDQ3Yy0xMTEuMjI4LTEuOTc5LTE4MS4xOTQtNTIuNzQ3LTIxNy41ODEtODkuNzUyIDE2LjE4NSAyMy43NzcgOTEuMTEyIDEyMC4wMzEgMjQ1LjA5NyAxMjIuNzcxIDE3NS43MjctMy4xMjcgMjQ4LjUtMTI4LjA0NyAyNDguNS0xMjguMDQ3cy05LjgxOS0xNi44MzUtMzAuOTE5LTM4LjI5NHoiIGZpbGw9IiNjNGUyZmYiLz48Y2lyY2xlIGN4PSIyNTYiIGN5PSIyNTYiIGZpbGw9IiMwMTgyZmMiIHI9IjEyOC4wNDciLz48cGF0aCBkPSJtMjU2IDMyNy41NGMtMzkuNDQ4IDAtNzEuNTQxLTMyLjA5My03MS41NDEtNzEuNTQgMC0zOS40NDggMzIuMDkzLTcxLjU0MSA3MS41NDEtNzEuNTQxIDM5LjQ0NyAwIDcxLjU0IDMyLjA5MyA3MS41NCA3MS41NDEgMCAzOS40NDctMzIuMDkzIDcxLjU0LTcxLjU0IDcxLjU0eiIgZmlsbD0iIzQ2NWE2MSIvPjxwYXRoIGQ9Im0yOTguNzI5IDI0Ny44ODFjLTE5LjA4NCAwLTM0LjYxMS0xNS41MjYtMzQuNjExLTM0LjYxIDAtMTkuMDg1IDE1LjUyNi0zNC42MTEgMzQuNjExLTM0LjYxMSAxOS4wODQgMCAzNC42MSAxNS41MjYgMzQuNjEgMzQuNjExIDAgMTkuMDg0LTE1LjUyNiAzNC42MS0zNC42MSAzNC42MXoiIGZpbGw9IiNkOGVjZmUiLz48cGF0aCBkPSJtMzI4LjUxOCAxNTAuNDYzYzE0LjE5NCAyMC42MTcgMjIuNTEgNDUuNTk1IDIyLjUxIDcyLjUxOCAwIDcwLjcxOC01Ny4zMjggMTI4LjA0Ny0xMjguMDQ3IDEyOC4wNDctMjYuOTIzIDAtNTEuOS04LjMxNi03Mi41MTgtMjIuNTEgMjMuMDg5IDMzLjUzOCA2MS43NDIgNTUuNTI5IDEwNS41MzcgNTUuNTI5IDcwLjcxOCAwIDEyOC4wNDctNTcuMzI4IDEyOC4wNDctMTI4LjA0NyAwLTQzLjc5Ni0yMS45OTItODIuNDQ5LTU1LjUyOS0xMDUuNTM3eiIgZmlsbD0iIzAxNzJmYiIvPjwvZz48Zz48cGF0aCBkPSJtNTEwLjk4IDI1Mi4yMjRjLS43NzItMS4zMjUtMTkuMzgyLTMyLjgzMy02MC4xOTMtNjQuOTY4LTIzLjkwNi0xOC44MjMtNTAuNTI4LTMzLjk1NS03OS4xMjgtNDQuOTc2LTM3LjcyOS0xNC41MzgtODAuNTY2LTIxLjc4My0xMTUuNDc5LTIxLjgyNi0uMDE2IDAtLjAzMS0uMDAxLS4wNDctLjAwMS0uMDE5IDAtLjAzOCAwLS4wNTYgMC0uMDI2IDAtLjA1MS0uMDAxLS4wNzctLjAwMXMtLjA1MS4wMDEtLjA3Ny4wMDFjLS4wMTkgMC0uMDM4IDAtLjA1NiAwLS4wMTkgMC0uMDM3LjAwMS0uMDU2LjAwMS01Ni4xODQuMDc4LTExNy42NzkgMTYuMDYtMTY5LjczOCA0OS4xNzUtMy40OTUgMi4yMjMtNC41MjYgNi44NTgtMi4zMDMgMTAuMzU0IDIuMjIzIDMuNDk0IDYuODU4IDQuNTI1IDEwLjM1NCAyLjMwMyAyNS40MTItMTYuMTY1IDUyLjk1Ny0yOC4xODYgODIuMzkzLTM2LjAxMi0zMy45NDUgMjQuNjU4LTU2LjA2MyA2NC42NTQtNTYuMDYzIDEwOS43MjUgMCA0NC45NDUgMjEuOTk0IDg0Ljg0NCA1NS43NzkgMTA5LjUxOC00Ni42MzEtMTIuNTI1LTgxLjUyNC0zMy41ODMtMTA1LjIwNy01Mi4xNC0zMC43NzgtMjQuMTE3LTQ4LjUyMi00OC4yODEtNTQuNjIzLTU3LjM3NyA1LjgtOC42NSAyMi4wOTgtMzAuODg4IDUwLjA3Ni01My43NCAzLjIwOC0yLjYyIDMuNjg0LTcuMzQ2IDEuMDY0LTEwLjU1My0yLjYyMS0zLjIwOC03LjM0NC0zLjY4NS0xMC41NTMtMS4wNjQtMzcuOTAzIDMwLjk2MS01NS4yNSA2MC4zNDctNTUuOTcgNjEuNTgyLTEuMzU5IDIuMzMzLTEuMzU5IDUuMjE4IDAgNy41NTEuNzcyIDEuMzI1IDE5LjM4MSAzMi44MzMgNjAuMTkzIDY0Ljk2OCAyMy45MDYgMTguODIzIDUwLjUyOSAzMy45NTUgNzkuMTI4IDQ0Ljk3NiAzNy43MjkgMTQuNTM4IDgwLjU2NiAyMS43ODMgMTE1LjQ3OSAyMS44MjYuMDE2IDAgLjAzMS4wMDEuMDQ3LjAwMS4wNDQuMDAxLjA4OS4wMDEuMTMzLjAwMXMuMDg5IDAgLjEzMy0uMDAxYy4wMTQgMCAuMDI5LS4wMDEuMDQzLS4wMDEgMTQuMzkzLS4wMTggMzQuMDcxLTIuMTc4IDM0LjA3MS0yLjE3OCA2Mi4wODMtNi45MjkgMTE3LjEyLTI5LjQ4NyAxNjMuNTgyLTY3LjA1IDMuMjIyLTIuNjA0IDMuNzIyLTcuMzI2IDEuMTE3LTEwLjU0Ny0yLjYwMy0zLjIyMi03LjMyNS0zLjcyMS0xMC41NDctMS4xMTctMzIuMTQ3IDI1Ljk4OC02OC42NSA0NC40MjItMTA4LjkzOCA1NS4wOSAzMy45NTgtMjQuNjU2IDU2LjA4Ni02NC42NjEgNTYuMDg2LTEwOS43NDIgMC00NC45NDUtMjEuOTk0LTg0Ljg0NC01NS43NzktMTA5LjUxOCA0Ni42MyAxMi41MjUgODEuNTIzIDMzLjU4MyAxMDUuMjA2IDUyLjE0IDMwLjc4MSAyNC4xMTkgNDguNTI1IDQ4LjI4NSA1NC42MjUgNTcuMzgxLTMuODgxIDUuNzk2LTEyLjQ1MSAxNy42NzEtMjYuMDE3IDMxLjY2MS0yLjg4NCAyLjk3NC0yLjgxMSA3LjcyMi4xNjMgMTAuNjA0IDIuOTcxIDIuODg0IDcuNzIyIDIuODEyIDEwLjYwNC0uMTYzIDIwLjQwNy0yMS4wNDQgMzAuMjEyLTM3LjYxNSAzMC42MTktMzguMzExIDEuMzctMi4zMzcgMS4zNzYtNS4yMzIuMDEyLTcuNTcyem0tMTM0LjQzMyAzLjc3NmMwIDYyLjgyLTQ5LjExNyAxMTkuMjQ3LTEyMC41NDcgMTIwLjU0Ni03MS4yMjEtMS4yOTItMTIwLjU0Ni01Ny41NDgtMTIwLjU0Ni0xMjAuNTQ2IDAtNjIuNjk4IDQ4Ljk3NC0xMTkuMjQ4IDEyMC41NDYtMTIwLjU0NiA3MS4yMjEgMS4yOTEgMTIwLjU0NyA1Ny41NDcgMTIwLjU0NyAxMjAuNTQ2eiIvPjxwYXRoIGQ9Im0yNTYgMTc2Ljk1OWMtNDMuNTgzIDAtNzkuMDQxIDM1LjQ1OC03OS4wNDEgNzkuMDQxczM1LjQ1OCA3OS4wNCA3OS4wNDEgNzkuMDQgNzkuMDQtMzUuNDU3IDc5LjA0LTc5LjA0YzAtNi4xMS0uNzI2LTEyLjIwMi0yLjE0LTE4LjE2NiA0Ljk4OC02LjkyIDcuOTM5LTE1LjQwMSA3LjkzOS0yNC41NjQgMC0yMy4yMi0xOC44OTEtNDIuMTEtNDIuMTEtNDIuMTEtOS4xNjIgMC0xNy42NDMgMi45NS0yNC41NjMgNy45MzgtNS45NjItMS40MTMtMTIuMDU0LTIuMTM5LTE4LjE2Ni0yLjEzOXptMCAxNDMuMDgxYy0zNS4zMTIgMC02NC4wNDEtMjguNzI5LTY0LjA0MS02NC4wNCAwLTM1LjMxMyAyOC43MjktNjQuMDQxIDY0LjA0MS02NC4wNDEgMi4wODkgMCA0LjE3Ni4xMDQgNi4yNTMuMzA5LS4wMDIuMDAzLS4wMDQuMDA3LS4wMDUuMDEtMy44NDIgNi42NS01LjYyOSAxMy45ODMtNS42MjkgMjAuOTkzIDAgMTUuOTYzIDguOTI5IDI5Ljg4IDIyLjA1NSAzNy4wMiAxMy4xNDIgNy4xNDggMjguNzE1IDYuNTc1IDQxLjAyNS0uNTI2LjAxMS0uMDA2LjAyMy0uMDEyLjAzNC0uMDE4LjIwNSAyLjA3OC4zMDkgNC4xNjUuMzA5IDYuMjUzLS4wMDIgMzUuMzExLTI4LjczIDY0LjA0LTY0LjA0MiA2NC4wNHptNjMuMTE3LTg4LjkzMmMtLjAxNC4wMTUtLjAzLjAyOC0uMDQzLjA0My0xNi41ODIgMTguODQtNDcuNDU2IDYuOTE2LTQ3LjQ1Ni0xNy44OCAwLTE0LjgwNyAxMi4wNjMtMjcuMTExIDI3LjExLTI3LjExMSAyMy4zMTcgMCAzNS42MjcgMjcuNTU0IDIwLjM4OSA0NC45NDh6Ii8+PC9nPjwvZz48L3N2Zz4=" />
                        </a>
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">{{$restaurante->nombre}}</h3>
                        <h3 class="text-gray-700 uppercase">{{$restaurante->ciudad}}</h3>
                        <h3 class="text-gray-700 uppercase"> Tlf:{{$restaurante->telefono}}</h3>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="flex justify-center">
                <div class="flex rounded-md mt-8" style="color: white">
                    {{ $restaurantes->links() }}
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
