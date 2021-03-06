<x-app-layout>
    </form>
     <form action="{{Route('platos.update', $plato->id)}}" method='post' enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
        style="background: rgba(0,0,0,.7); width: 100%; overflow: scroll">
        <div  style="width: 40%; height:150px; margin-top: -30%">
            <div class="w-full mx-auto rounded-lg bg-white shadow-lg p-5 text-gray-700" style="max-width: 600px; height: 850px">
                <div class="w-full pt-1 pb-5">
                    <div class="bg-indigo-500 text-white overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg flex justify-center items-center">
                        <img src={{ asset('img/theUnion.png') }} alt="error">
                    </div>
                </div>
                    <div class="mb-10">
                        <h1 class="text-center font-bold text-xl uppercase">Update Plato {{$plato->nombre}}</h1>
                    </div>
                    <div class="mb-3">
                        <label class="font-bold text-sm mb-2 ml-1">Nombre </label>
                        <div>
                            <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" type="text" name = 'nombre' value="{{$plato->nombre}}"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="font-bold text-sm mb-2 ml-1">Descripcion</label>
                        <div>
                            <textarea name="descripcion" type="text" value="{{$plato->descripcion}}" cols="30" rows="10" class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="font-bold text-sm mb-2 ml-1">Foto</label>
                        <div>
                            <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" name="foto" type="file" placeholder="{{$plato->foto}}"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="font-bold text-sm mb-2 ml-1">Precio</label>
                        <div>
                            <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" name="precio" type="text" value="{{$plato->precio}}"/>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="font-bold text-sm mb-2 ml-1">Categories</label>
                        <div>
                            <select class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" name="categoria">
                                <option value="ensalada">Ensalada</option>
                                <option value="carne">Carne</option>
                                <option value="pizza">Pizza</option>
                                <option value="pescado">Pescado</option>
                                <option value="postre">Postre</option>
                                <option value="Bodega">Bodega</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div>
                            <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" name="restaurante_id" type="hidden" value="{{$plato->restaurante_id}}"/>
                        </div>
                    </div>
                            <!--Footer-->

                            <div class="flex justify-end pt-2">
                                <a href="{{Route('platos.restaurante', $plato->id)}}" class="class=focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">
                                        <svg src="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentcolor" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                                        </svg>
                                </a>

                                <button type="submit" class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400" style="background-color: rgb(41, 255, 41)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path></svg></button>
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
