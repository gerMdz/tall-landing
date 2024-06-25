<div class="px-8">

    <x-input
        type="text"
        name="search"
        placeholder="Buscar..."
        class="rounded-lg border float-right border-gray-200 w-1/3 mt-2 mb-3 pl-8 "
        wire:model="search"
    >
        <x-slot name="icon">
            <i class="fa fa-search"></i>
        </x-slot>
    </x-input>

    @if($subscriptores->isEmpty())
        <div class="flex w-full bg-red-200 p-5 rounded-xl ">
            <p class="text-red-500">No se encontraron subscriptores</p>
        </div>
    @else
        <table class="w-full">
            <thead
                class="border-b-2 border-gray-200 text-gray-600"
            >
            <tr>
                <th class="px-6 py-3 text-left"> Id</th>
                <th class="px-6 py-3 text-left"> Email</th>
                <th class="px-6 py-3 text-left"> Verificado</th>
                <th class="px-6 py-3 text-left"> Creado</th>
                <th class="px-6 py-3 text-left"><i class="fa fa-cogs"></i></th>
            </tr>
            </thead>
            <tbody>
            @foreach($subscriptores as $subscriptor)
                <tr class="text-left text-sm text-indigo-900 border-b border-gray-400">
                    <td class="px-6 py-2">{{ $subscriptor->id }}</td>
                    <td class="px-6 py-2">{{ $subscriptor->email }}</td>
                    <td class="px-6 py-2">{{ $subscriptor->email_verified_at?->diffForHumans()?? 'Aún no' }}</td>
                    <td class="px-6 py-2">{{ $subscriptor->created_at?->diffForHumans()?? 'Aún no' }}</td>
                    <td class="px-6 py-2">
                        <x-button
                            class="border border-red-500 text-red-500 bg-red-50
                            hover:bg-red-200"
                            wire:click="delete({{$subscriptor->id}})"
                        >Borrar
                        </x-button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
