<div>

    <section class="book-details">


        <p>
            {{ $book->name }}

        </p>
        <p>
            {{ $book->author }}
        </p>
        <p>
            {{ $book->stocks }}
        </p>
    </section>

    {{-- @dump($book->borrowedBooks) --}}
    <section class="borrowed-books">
        <div class="bg-rose-600">

            <h1 class="text-2xl "> Borrowed Books</h1>

        @forelse ($book->borrowedBooks as $brorrowedBook)
            <p>
                {{ $brorrowedBook->user->name }}
                {{ $brorrowedBook->user->name }}

                <div class="bg-purple-600">
                        Book Damages
                    @forelse ($brorrowedBook->bookDamages as $damage)
                    <p>
                        {{$damage->title}}
                        {{$damage->reason}}

                        {{$damage->fines}}
                    </p>
                    @empty
                    No Damages
                    @endforelse
                </div>


            </p>
            <p>
                Borrowed Date
                <span class="italic text-gray-600 tex-xs">
                    {{ $brorrowedBook->borrowed_from }}
                </span>
            </p>

        @empty
        @endforelse
                </div>
    </section>

</div>
