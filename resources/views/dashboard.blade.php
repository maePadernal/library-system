<x-layouts.app :title="__('Dashboard')">
  @php
      $book=App\Models\Book::find(1);
  @endphp
  <h1 class="text-4xl">
    {{$book->name}}
  </h1>
  <h1 class="text-2xl">
    {{$book->author}}
  </h1>


    @foreach ($book->categories as $category)
<span class="bg-blue-200 text-blue-600 rounded-full px-2 mx-2">
    {{$category->name}}
</span>


    @endforeach


</x-layouts.app>
