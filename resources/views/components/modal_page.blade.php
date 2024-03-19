@props(['trigger'])

<div class="flex fixed top-0 w-full h-full bg-gray-900 bg-opacity-60 item-center"
     x-show="{{ $trigger }}"
     @click.self="{{ $trigger }} = false"
     @keydown.escape.window="{{ $trigger }}=false"
     x-cloak
>
    <div
        {{ $attributes->merge(['class' => 'm-auto bg-gray-200 shadow-2xl rounded-xl p-8']) }}
    >
        {{ $slot }}
    </div>
</div>
