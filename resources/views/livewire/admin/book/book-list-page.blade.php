<div>
    <div class= "flex justify-between items-center mb-4">
        <h1 class= " text-2xl">

            Book List
        </h1>
        <div>
            <flux:input icon="magnifying-glass" placeholder="Search orders" wire:model.live.throttle.200ms="search" />
        </div>
    </div>
     <flux:button href="{{route('admin.create-book')}}" admin.create-user  class="mb-6" variant="primary" color="blue">Add book</flux:button>
    <section class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-4 lg:grid-cols-4 xl:gap-x-8">
        @forelse ($books as $book)
            <a href="#" class="group">
                <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/category-page-01-image-card-01.jpg"
                    alt="Person using a pen to cross a task off a productivity paper card."
                    class="aspect-square w-full overflow-hidden rounded-lg object-cover group-hover:opacity-75 sm:aspect-[2/3]" />
                <div class="mt-4  items-center justify-between text-base font-medium text-gray-900">
                    <div class="flex justify-between">
                        <h3>{{ $book->name }}l</h3>
                        <p>{{ $book->stocks }}</p>
                    </div>
                    <p>{{ $book->author }}</p>

                    <div>
                        <flux:button href="{{ route('admin.view-book-page', ['id' => $book->id]) }}">View Details
                        </flux:button>
                    </div>

                </div>


            </a>
        @empty
        @endforelse
    </section>

    <section class="mt-7">
        {{ $books->links() }}
    </section>

</div>
