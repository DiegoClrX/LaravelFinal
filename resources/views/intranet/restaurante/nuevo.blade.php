<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

</form>
 <form action="{{Route('restaurante.update', $restaurante->id)}}" method='post' enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="update-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
        style="background: rgba(0,0,0,.7); width: 100%">
        <div class="min-w-screen min-h-screen bg-gray-200 flex items-center justify-center px-5 pb-10 pt-16" style="width: 100%; height:150px">
            <div class="w-full mx-auto rounded-lg bg-white shadow-lg p-5 text-gray-700" style="max-width: 600px;">
                <div class="w-full pt-1 pb-5">
                    <div class="bg-indigo-500 text-white overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg flex justify-center items-center">
                        <img src={{ asset('img/theUnion.png') }} alt="error">
                    </div>
                </div>
                <div class="mb-10">
                    <h1 class="text-center font-bold text-xl uppercase">Update Restaurant {{$restaurante->nombre}}</h1>
                </div>
                <div class="mb-3">
                    <label class="font-bold text-sm mb-2 ml-1">Name of Restaurant</label>
                    <div>
                        <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" type="text" name = 'name' placeholder="{{$restaurante->nombre}}"/>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="font-bold text-sm mb-2 ml-1">Address of Restaurant</label>
                    <div>
                        <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" name="address" type="text" placeholder="{{$restaurante->direccion}}"/>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="font-bold text-sm mb-2 ml-1">City</label>
                    <div>
                        <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" name="city" type="text" placeholder="{{$restaurante->ciudad}}"/>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="font-bold text-sm mb-2 ml-1">Telefono</label>
                    <div>
                        <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" name="telefono" type="text" placeholder="{{$restaurante->telefono}}"/>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="font-bold text-sm mb-2 ml-1">Latitud</label>
                    <div>
                        <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" name="latitud" type="text" placeholder="{{$restaurante->latitud}}"/>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="font-bold text-sm mb-2 ml-1">Longitud</label>
                    <div>
                        <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" name="longitud" type="text" placeholder="{{$restaurante->longitud}}"/>
                    </div>
                </div>
                        <!--Footer-->

                <div class="flex justify-end pt-2">
                    <a href="{{Route('restaurante.index')}}" class="focus:outline-none px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">
                        <svg src="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentcolor" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                        </a>
                    <button type="submit" class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400" style="background-color: rgb(41, 255, 41)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path></svg>
                    </button>
                    </div>
                </div>
        </div>
            </div>
        </div>
    </div>
</div>
</div>
</form>
</x-app-layout>
