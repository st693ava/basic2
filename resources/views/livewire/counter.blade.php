
<div class="flex min-h-screen justify-center items-center w-full">
        <div class="flex space-x-3 items-center">
            <x-button wire:click="decrement">-</x-button>
            <div class="p-2 bg-white border border-gray-200 rounded-lg">{{$counter}}</div>
            <x-button wire:click="increment">+</x-button>
        </div>

</div>
