<div
    x-data="{
        showSubscribe: @entangle('showSubscribe'),
        showSuccess: @entangle('showSuccess')
    }"
    class="flex flex-col bg-indigo-700 h-screen w-screen">
    <nav class="pt-5 flex justify-between container mx-auto text-indigo-200 ">
        <a href="/" class="text-4xl font-bold">
            <x-application-logo class="w-16 h-16 fill-current">
            </x-application-logo>
        </a>
        <div class="flex justify-end">
            @auth
                <a href="{{route('dashboard')}}">Dashboard</a>
            @else
                <a href="{{route('login')}}">Login</a>
            @endauth
        </div>
    </nav>
    <div class="flex container mx-auto items-center h-full">
        <div class="flex w-1/3 flex-col items-start">

            <h1 class="font-bold text-white text-5xl leading-tight mb-4">Página principal genérica</h1>
            <p class="text-indigo-200 text-xl mb-10">Estás en una página
                <span class="font-bold underline">
                        TALL.</span>
                <br>¿Quisieras subscribirte?</p>
            <x-button @click="showSubscribe = true"
                      class="py-3 px-8 bg-rose-500 hover:bg-red-500">
                Subscribe
            </x-button>
        </div>

    </div>
    <x-modal_page class="bg-rose-500" trigger="showSubscribe">
        <p class="text-white font-extrabold text-5xl text-center mt-5">
            Puedes subscribirte
        </p>
        <form
            wire:submit.prevent="Subscribe"
            class="flex flex-col items-center p-24">
            <x-input class="px-5 py-3 w-80 border border-blue-400"
                     type="email" name="email"
                     placeholder="@email"
                     wire:model="email"
            >

            </x-input>
            <span class="text-gray-100 text-xs">
                {{$errors->has('email')?$errors->first('email'):'Enviaremos un correo de confirmación'}}
            </span>
            <x-button clsss="px-5 py-3 mt-5 w-80 bg-blue-500 justify-center">
                Desde aquí
            </x-button>
        </form>
    </x-modal_page>

    <x-modal_page class="bg-green-500" trigger="showSuccess">
        <p class="animate-pulse text-white font-extrabold text-6xl text-center">
            &check;
        </p>
        <p class="text-white font-extrabold text-5xl text-center mt-16">Exitoso</p>
        @if(request()->has('verified') && request()->verified == 1 )
            <p class="text-white text-3xl text-center">
                Tu casilla ha sido confirmada
            </p>
        @else
            <p class="text-white text-3xl text-center">Enlace enviado</p>
        @endif

    </x-modal_page>


</div>
