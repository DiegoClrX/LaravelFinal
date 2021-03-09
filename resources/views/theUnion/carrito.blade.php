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
                        <a href="{{Route('restaurante.vista')}}" style="margin-right: -9%">
                            <img width =35% style="margin-right: -10%; margin-top: 12%" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00OTIsMjM2SDY4LjQ0Mmw3MC4xNjQtNjkuODI0YzcuODI5LTcuNzkyLDcuODU5LTIwLjQ1NSwwLjA2Ny0yOC4yODRjLTcuNzkyLTcuODMtMjAuNDU2LTcuODU5LTI4LjI4NS0wLjA2OA0KCQkJbC0xMDQuNTA0LDEwNGMtMC4wMDcsMC4wMDYtMC4wMTIsMC4wMTMtMC4wMTgsMC4wMTljLTcuODA5LDcuNzkyLTcuODM0LDIwLjQ5Ni0wLjAwMiwyOC4zMTRjMC4wMDcsMC4wMDYsMC4wMTIsMC4wMTMsMC4wMTgsMC4wMTkNCgkJCWwxMDQuNTA0LDEwNGM3LjgyOCw3Ljc5LDIwLjQ5Miw3Ljc2MywyOC4yODUtMC4wNjhjNy43OTItNy44MjksNy43NjItMjAuNDkyLTAuMDY3LTI4LjI4NEw2OC40NDIsMjc2SDQ5Mg0KCQkJYzExLjA0NiwwLDIwLTguOTU0LDIwLTIwQzUxMiwyNDQuOTU0LDUwMy4wNDYsMjM2LDQ5MiwyMzZ6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />
                        </a>
                        <h1 class="text-3xl" style="text-align: center; margin-top: 0.5%; margin-left: 22%; width: 50%">
                            Carro de compra
                        </h1>
                        @if (count(Cart::getContent()))
                        <form action="/theUnion/pedido/store" method="Get" style="width: 100%">
                            @php
                                $cont = 0;
                            @endphp
                        @foreach (Cart::getContent() as $item)

                                <input type="hidden" name="plato_id_{{$cont}}" value="{{$item->id}} {{$item->quantity}}">
                            @php
                                $cont++;
                            @endphp
                        @endforeach

                        <div class="m-3" style="margin-left: 55%" style="width: 100%">
                            <button type="submit" class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                              <span class="mr-2">Enviar Pedido</span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                              </svg>
                            </button>
                          </div>
                        </form>
                        @endif
                    </div>

                    <div class="px-3 py-4 flex justify-center">

                        <table class="w-full text-md bg-white shadow-md rounded mb-4">
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
                            <tbody>

                            @if (count(Cart::getContent()))

                                <tr class="border-b">
                                    <th class="text-left p-3 px-5">Nombre</th>
                                    <th class="text-left p-3 px-5">Foto</th>
                                    <th class="text-left p-3 px-5">Cantidad</th>
                                    <th class="text-left p-3 px-5">Precio</th>
                                    <th class="text-left p-3 px-5">Quitar</th>
                                </tr>
                                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                            @foreach(Cart::getContent() as $item)
                                            <td class="p-3 px-5">{{ $item->name }}</td>
                                            <td class="p-3 px-5" style="width: 15%"><img width="50%" src="{{ url('storage/plato/img', [$item->attributes->urlFoto])}}" alt=""></td>
                                            <td class="p-3 px-5">{{ $item->quantity }}</td>
                                            <td class="p-3 px-5">{{ $item->price }}€</td>
                                            <td class="p-3 px-5">
                                                <form action="{{ route('cart.delete') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <button type="submit" class="inline-block p-3 text-center text-white transition bg-red-500 rounded-full shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none"><svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                                    </svg></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="3" rowspan="2" ></td>
                                        <td>SubTotal</td>
                                        <td>{{Cart::getSubTotal()}}€</td>
                                    </tr>
                                    <tr>
                                        <td>Total IVA</td>
                                        <td>{{Cart::getTotal() + (Cart::getSubTotal()*0.21)}}€</td>
                                    </tr>
                                </tbody>
                                </table>
                            @else
                            <h1 style="width: 100%; margin-left: 93%; position: absolute">No tienes platos</h1>
                            @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
     {{-- paginador --}}
     {{-- {{ $item->links() }} --}}



    {{-- Script --}}
    <script>
        const modalNew = document.querySelector('.main-modal');
        const closeButton = document.querySelectorAll('.modal-close');

        const modalClose = () => {
            modalNew.classList.remove('fadeIn');
            modalNew.classList.add('fadeOut');
            setTimeout(() => {
                modalNew.style.display = 'none';
            }, 500);
        }



        const openModalNew = () => {
            modalNew.classList.remove('fadeOut');
            modalNew.classList.add('fadeIn');
            modalNew.style.display = 'flex';
        }



        for (let i = 0; i < closeButton.length; i++) {

            const elements = closeButton[i];

            elements.onclick = (e) => modalClose();

            modalNew.style.display = 'none';

            window.onclick = function (event) {
                if (event.target == modalNew) modalClose();
            }
        }

        const modalUpdate = document.querySelector('.update-modal');
        const closeUpdate = document.querySelectorAll('.update-close');

        const modalCloseUpdate = () => {
            modalUpdate.classList.remove('fadeIn');
            modalUpdate.classList.add('fadeOut');
            setTimeout(() => {
                modalUpdate.style.display = 'none';
            }, 500);
        }

       const openModalUpdate = () => {
            modalUpdate.classList.remove('fadeOut');
            modalUpdate.classList.add('fadeIn');
            modalUpdate.style.display = 'flex';
        }

        for (let i = 0; i < closeUpdate.length; i++) {

            const elements = closeUpdate[i];

            elements.onclick = (e) => modalCloseUpdate();

            modalUpdate.style.display = 'none';

            window.onclick = function (event) {
                if (event.target == modalUpdate) modalCloseUpdate();
            }
        }
    </script>
</x-app-layout>

