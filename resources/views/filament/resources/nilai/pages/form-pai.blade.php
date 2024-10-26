<x-filament-panels::page>
    <form method="post" wire:submit="save">

        {{ $this->form }}

        <button type="submit" class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">

            Save

        </button>


    </form>
</x-filament-panels::page>