<x-layouts.app.sidebar :title="$title ?? null">

    <style>


    </style>
    <flux:main>
      
    {{Auth::user()->accountInformation->first_name}}

        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>
