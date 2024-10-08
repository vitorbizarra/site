<div>
    <div class="py-4 px-4 lg:px-8 mx-auto flex justify-between text-zinc-900 dark:text-zinc-100">
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
</div>
