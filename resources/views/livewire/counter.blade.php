<div class="w-full h-svh flex items-center justify-center gap-4">
    <button class="w-16 h-16 flex justify-center items-center text-5xl bg-red-500" wire:click="decrement">-</button>

    <h1 class="text-5xl font-bold">{{ $count }}</h1>

    <button class="w-16 h-16 flex justify-center items-center text-5xl bg-green-500" wire:click="increment">+</button>
</div>
