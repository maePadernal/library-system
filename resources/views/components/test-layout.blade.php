<div>
    <header class="bg-green-600 p-10 text-white">
        <div class="flex justify-center items-center">
            <li class="px-4 text-lg">Home</li>
            <li class="px-4 text-lg">About</li>
        </div>
               {{Auth::user()->name}}        {{Auth::user()->email}}
    </header>
    {{$slot}}

<footer class="bg-gray-900 p-10 text-white">
        Reserved at 2025
    </footer>
</div>
