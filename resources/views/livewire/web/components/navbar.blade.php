<div class="absolute top-0 w-full py-4 px-4 lg:px-16 mx-auto flex justify-between bg-zinc-100 text-zinc-900 dark:text-zinc-100 dark:bg-zinc-900">
    <a href="#" class="font-mono font-medium text-lg">
        {{ config('app.name') }}
    </a>

    <button 
        type="button"
        x-on:click="darkTheme = !darkTheme">
        <x-heroicon-m-moon
            x-show="darkTheme"
            x-cloak
            class="h-6 w-6 text-zinc-100" />

        <x-heroicon-m-sun 
            x-show="!darkTheme"
            x-cloak
            class="h-6 w-6 text-zinc-900" />
    </button>
</div>
