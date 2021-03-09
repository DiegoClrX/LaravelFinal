<x-app-layout>
    <style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
    <style>
		.animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		.animated.faster {
			-webkit-animation-duration: 500ms;
			animation-duration: 500ms;
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			animation-name: fadeIn;
		}

		.fadeOut {
			-webkit-animation-name: fadeOut;
			animation-name: fadeOut;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@keyframes fadeOut {
			from {
				opacity: 1;
			}

			to {
				opacity: 0;
			}
		}
.form-radio {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  -webkit-print-color-adjust: exact;
          color-adjust: exact;
  display: inline-block;
  vertical-align: middle;
  background-origin: border-box;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  flex-shrink: 0;
  border-radius: 100%;
  border-width: 2px;
}

.form-radio:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat;
}

@media not print {
  .form-radio::-ms-check {
    border-width: 1px;
    color: transparent;
    background: inherit;
    border-color: inherit;
    border-radius: inherit;
  }
}

.form-radio:focus {
  outline: none;
}

.form-select {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23a0aec0'%3e%3cpath d='M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z'/%3e%3c/svg%3e");
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  -webkit-print-color-adjust: exact;
          color-adjust: exact;
  background-repeat: no-repeat;
  padding-top: 0.5rem;
  padding-right: 2.5rem;
  padding-bottom: 0.5rem;
  padding-left: 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  background-position: right 0.5rem center;
  background-size: 1.5em 1.5em;
}

.form-select::-ms-expand {
  color: #a0aec0;
  border: none;
}

@media not print {
  .form-select::-ms-expand {
    display: none;
  }
}

@media print and (-ms-high-contrast: active), print and (-ms-high-contrast: none) {
  .form-select {
    padding-right: 0.75rem;
  }
}

dialog[open] {
  animation: appear .15s cubic-bezier(0, 1.8, 1, 1.8);
}

  dialog::backdrop {
    background: linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(54, 54, 54, 0.5));
    backdrop-filter: blur(3px);
  }


@keyframes appear {
  from {
    opacity: 0;
    transform: translateX(-3rem);
  }

  to {
    opacity: 1;
    transform: translateX(0);
  }
}
	</style>



    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="text-gray-900 bg-gray-200">
                    <div class="p-4 flex">

                        {{-- Pagina Anterior --}}
                        {{-- <a href="/intranet/restaurante/pedido/{{$restaurante_id}}/verPedidos" style="margin-right: -9%"> --}}
                        {{-- <a href="/intranet/restaurante/pedido/1/verPedidos" style="margin-right: -9%"> --}}
                            <img width =15% style="margin-right: -10%; margin-top: 12%" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00OTIsMjM2SDY4LjQ0Mmw3MC4xNjQtNjkuODI0YzcuODI5LTcuNzkyLDcuODU5LTIwLjQ1NSwwLjA2Ny0yOC4yODRjLTcuNzkyLTcuODMtMjAuNDU2LTcuODU5LTI4LjI4NS0wLjA2OA0KCQkJbC0xMDQuNTA0LDEwNGMtMC4wMDcsMC4wMDYtMC4wMTIsMC4wMTMtMC4wMTgsMC4wMTljLTcuODA5LDcuNzkyLTcuODM0LDIwLjQ5Ni0wLjAwMiwyOC4zMTRjMC4wMDcsMC4wMDYsMC4wMTIsMC4wMTMsMC4wMTgsMC4wMTkNCgkJCWwxMDQuNTA0LDEwNGM3LjgyOCw3Ljc5LDIwLjQ5Miw3Ljc2MywyOC4yODUtMC4wNjhjNy43OTItNy44MjksNy43NjItMjAuNDkyLTAuMDY3LTI4LjI4NEw2OC40NDIsMjc2SDQ5Mg0KCQkJYzExLjA0NiwwLDIwLTguOTU0LDIwLTIwQzUxMiwyNDQuOTU0LDUwMy4wNDYsMjM2LDQ5MiwyMzZ6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />
                        </a>
                        <h1 class="text-3xl" style="text-align: center; margin-top: 1%">
                            Pedidos
                        </h1>

                        {{-- <a href="">
                            <button class="inline-block p-3 text-center text-white transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none">
                                    <img class="w-5 h-5 text-white" src="{{ asset('img/pedido.png') }}"/>
                                </button>
                            </a> --}}
                            {{-- <a href="{{Route('pedido.actualizarEstado', $pedidos[0]->numPedido)}}"> --}}
                                <div class="m-3">
                                    <button class="bg-white text-gray-800 font-bold rounded border-b-2 border-yellow-500 hover:border-yellow-600 hover:bg-yellow-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                                    <span class="mr-2">Pedido Terminado</span>
                                    <img class="w-5 h-5 text-white" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxnPg0KCQkJPHBhdGggZD0iTTQ4MCw3NC42NjdoLTcyLjUzM2MtMTcuNjM0LTMwLjYzMy01Ni43NjItNDEuMTcyLTg3LjM5NS0yMy41MzhjLTkuNzg1LDUuNjMzLTE3LjkwNSwxMy43NTMtMjMuNTM4LDIzLjUzOEgyNTZ2LTY0DQoJCQkJQzI1Niw0Ljc3NiwyNTEuMjI0LDAsMjQ1LjMzMywwaC0xOTJjLTUuODkxLDAtMTAuNjY3LDQuNzc2LTEwLjY2NywxMC42Njd2NjRIMzJjLTE3LjY3MywwLTMyLDE0LjMyNy0zMiwzMlYzODQNCgkJCQljMCwxNy42NzMsMTQuMzI3LDMyLDMyLDMyaDE2MHYyNi41NmMtMjEuNTMyLDcuMzUzLTM3LjQzMSwyNS43MzktNDEuNiw0OC4xMDdIMTI4VjUxMmgyNTZ2LTIxLjMzM2gtMjIuNA0KCQkJCWMtNC4xNjktMjIuMzY4LTIwLjA2OC00MC43NTMtNDEuNi00OC4xMDdWNDE2aDE2MGMxNy42NzMsMCwzMi0xNC4zMjcsMzItMzJWMTA2LjY2N0M1MTIsODguOTk0LDQ5Ny42NzMsNzQuNjY3LDQ4MCw3NC42Njd6DQoJCQkJIE0zNTIsNjRjMjMuNTY0LDAsNDIuNjY3LDE5LjEwMyw0Mi42NjcsNDIuNjY3YzAsMzUuNDEzLTE5LjA5Myw2NC00Mi42NjcsNjRjLTIzLjU3MywwLTQyLjY2Ny0yOC45MDctNDIuNjY3LTY0DQoJCQkJQzMwOS4zMzMsODMuMTAzLDMyOC40MzYsNjQsMzUyLDY0eiBNMzk0LjY2NywyNTZ2NTMuMzMzaC04NS4zMzNWMjU2SDI4OHY1My4zMzNoLTIxLjMzM3YtNjRjMC0xNy42NzMsMTQuMzI3LTMyLDMyLTMyDQoJCQkJYzE2LjM1OSwwLjIxNiwzMS40LTguOTQyLDM4LjcyLTIzLjU3M2M5LjU0NywzLjAwNSwxOS43ODYsMy4wMDUsMjkuMzMzLDBjNy4zMDMsMTQuNTk2LDIyLjI5MywyMy43NDgsMzguNjEzLDIzLjU3Mw0KCQkJCWMxNy42NzMsMCwzMiwxNC4zMjcsMzIsMzJ2NjRINDE2VjI1NkgzOTQuNjY3eiBNNjQsMjEuMzMzaDE3MC42Njd2MTQ5LjMzM2gtMzJjLTUuODkxLDAtMTAuNjY3LDQuNzc2LTEwLjY2NywxMC42Njd2MTkuNjI3DQoJCQkJbC0zMi44NTMtMjcuODRjLTEuOTMyLTEuNjUyLTQuMzkxLTIuNTYtNi45MzMtMi41Nkg2NFYyMS4zMzN6IE0yMS4zMzMsMTA2LjY2N0MyMS4zMzMsMTAwLjc3NiwyNi4xMDksOTYsMzIsOTZoMTAuNjY3djg1LjMzMw0KCQkJCWMwLDUuODkxLDQuNzc2LDEwLjY2NywxMC42NjcsMTAuNjY3aDk1LjA0bDQ3LjQ2Nyw0MC4xMDdjNC41MjYsMy43NywxMS4yNTIsMy4xNTgsMTUuMDIzLTEuMzY5DQoJCQkJYzEuNTc3LTEuODkzLDIuNDUtNC4yNzQsMi40NzEtNi43Mzh2LTMyaDMyYzUuODkxLDAsMTAuNjY3LTQuNzc2LDEwLjY2Ny0xMC42NjdWOTZoMzIuOTZjLTAuNjIxLDMuNTIyLTAuOTQyLDcuMDktMC45NiwxMC42NjcNCgkJCQljLTEuMTc3LDI3LjY4NSw5Ljk1Miw1NC40NzMsMzAuNCw3My4xNzNjLTMuNjEsNy41ODUtMTEuMzM1LDEyLjM0NS0xOS43MzMsMTIuMTZjLTI5LjQ1NSwwLTUzLjMzMywyMy44NzgtNTMuMzMzLDUzLjMzM3Y2NGgtMjI0DQoJCQkJVjEwNi42Njd6IE0zMzkuNjI3LDQ5MC42NjdIMTcyLjM3M2MzLjczMy0xMi44LDE1LjI1My0zMiw1MS42MjctMzJoMzJ2LTIxLjMzM2gtMzJjLTMuNzMzLDAtNy4yNTMsMC0xMC42NjcsMFY0MTZoODUuMzMzdjIxLjMzMw0KCQkJCWMtMy40MTMsMC02LjkzMywwLTEwLjY2NywwdjIxLjMzM0MzMjQuMzczLDQ1OC42NjcsMzM1Ljg5Myw0NzcuODY3LDMzOS42MjcsNDkwLjY2N3ogTTQ5MC42NjcsMzg0DQoJCQkJYzAsNS44OTEtNC43NzYsMTAuNjY3LTEwLjY2NywxMC42NjdIMzJjLTUuODkxLDAtMTAuNjY3LTQuNzc2LTEwLjY2Ny0xMC42Njd2LTUzLjMzM2g0NjkuMzMzVjM4NHogTTQ5MC42NjcsMzA5LjMzM2gtMzJ2LTY0DQoJCQkJYzAtMjkuNDU1LTIzLjg3OC01My4zMzMtNTMuMzMzLTUzLjMzM2MtOC40NzMsMC4xMjgtMTYuMjE4LTQuNzctMTkuNzMzLTEyLjQ4YzIwLjM2MS0xOC42MjcsMzEuNDgyLTQ1LjI3OSwzMC40LTcyLjg1Mw0KCQkJCWMtMC4wMTgtMy41NzYtMC4zMzktNy4xNDUtMC45Ni0xMC42NjdINDgwYzUuODkxLDAsMTAuNjY3LDQuNzc2LDEwLjY2NywxMC42NjdWMzA5LjMzM3oiLz4NCgkJCTxyZWN0IHg9IjQyLjY2NyIgeT0iMzUyIiB3aWR0aD0iMjEuMzMzIiBoZWlnaHQ9IjIxLjMzMyIvPg0KCQkJPHJlY3QgeD0iNzQuNjY3IiB5PSIzNTIiIHdpZHRoPSIyMS4zMzMiIGhlaWdodD0iMjEuMzMzIi8+DQoJCQk8cmVjdCB4PSIxMDYuNjY3IiB5PSIzNTIiIHdpZHRoPSIyMS4zMzMiIGhlaWdodD0iMjEuMzMzIi8+DQoJCQk8cmVjdCB4PSI5NiIgeT0iNjQiIHdpZHRoPSIxMDYuNjY3IiBoZWlnaHQ9IjIxLjMzMyIvPg0KCQkJPHJlY3QgeD0iOTYiIHk9IjEwNi42NjciIHdpZHRoPSIxMDYuNjY3IiBoZWlnaHQ9IjIxLjMzMyIvPg0KCQk8L2c+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />
                                    </button>
                                </div>
                            </a>
                    </div>
                    <div class="px-3 py-4 flex justify-center">

                        <table class="w-full text-md bg-white shadow-md rounded mb-4">
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
                            <tbody>

                                @if ($pedidos->count() != 0)

                                <tr class="border-b">
                                    <th class="text-left p-3 px-5">Nombre Plato</th>
                                    {{-- <th class="text-left p-3 px-5" style="margin-left: 25%">Image</th> --}}
                                    <th class="text-left p-3 px-5">Cantidad</th>
                                    <th class="text-left p-3 px-5">Estado</th>
                                </tr>
                                @foreach($pedidos as $pedido)

                                    {{-- @foreach ($pedido->platos as $plato) --}}

                                    <tr class="border-b hover:bg-orange-100 bg-gray-100">

                                        {{-- <td class="p-3 px-5">{{$pedido->platos->nombre}}</td> --}}
                                        <td class="p-3 px-5"></td>
                                        <td class="p-3 px-5" >{{ $pedido->cantidad }}</td>
                                        <td class="p-3 px-5" >{{ $pedido->estado }}</td>
                                        <td class="p-3 px-5">

                                        </td>
                                    </tr>

                                    {{-- @endforeach --}}

                                @endforeach


                                @else
                                    @if (Auth::user()->role->role == 'admin')
                                        <h1 style="width: 100%; margin-left: 40%">Este Restaurante no tiene pedidos</h1>
                                    @else
                                        <h1 style="width: 100%; margin-left: 45%">No tienes pedidos </h1>
                                    @endif
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
     {{-- paginador --}}
     {{ $pedidos->links() }}




</x-app-layout>

