<x-app-layout>
</form>
 <form action="{{Route('usuarios.update', $usuarios->id)}}" method='post' enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7); width: 100%; overflow: scroll">
    <div  style="width: 40%; height:150px; margin-top: -30%">
        <div class="w-full mx-auto rounded-lg bg-white shadow-lg p-5 text-gray-700" style="max-width: 600px; height: 700px">
            <div class="w-full pt-1 pb-5">
                <div class="bg-indigo-500 text-white overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg flex justify-center items-center">
                    <img src={{ asset('img/theUnion.png') }} alt="error">
                </div>
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$usuarios->name}}" required autofocus autocomplete="name"  />
            </div>

            <div>
                <x-jet-label for="lastname" value="{{ __('Lastname') }}" />
                <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" value="{{$usuarios->lastname}}" required autofocus autocomplete="lastname" />
            </div>

            <div>
                <x-jet-label for="address" value="{{ __('address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{$usuarios->address}}" required autofocus autocomplete="address" />
            </div>

            <div>
                <x-jet-label for="city" value="{{ __('city') }}" />
                <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" value="{{$usuarios->city}}" required autofocus autocomplete="city" />
            </div>

            <div>
                <x-jet-label for="movil" value="{{ __('Movil') }}" />
                <x-jet-input id="movil" class="block mt-1 w-full" type="number" name="movil" value="{{$usuarios->movil}}" required autofocus autocomplete="movil" />
            </div>

            <div>
                <x-jet-label for="dni" value="{{ __('DNI') }}" />
                <x-jet-input id="dni" class="block mt-1 w-full" type="text" name="dni" value="{{$usuarios->dni}}" required autofocus autocomplete="dni" />
            </div>

            <div>
                <x-jet-label for="role_id" value="{{ __('role') }}" />

                <select name="role_id" id="role_id" class="block mt-1 w-full" required autofocus autocomplete="role_id" style="border-radius: 8px; border: 1px solid rgb(202, 202, 202)">
                    <option value="4">Cliente</option>
                    <option value="2">G.Restaurante</option>
                    <option value="3">Repartidor</option>
                    <option value="1">admin</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$usuarios->email}}" required />
            </div>
                        <!--Footer-->

                        <div class="flex justify-end pt-2">
                            <a href="{{Route('usuarios.index')}}" class="class=focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">
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
