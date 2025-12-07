<div>


    <section class="flex justify-between items-center">
        <h1 class="text-4xl mb-6">
            List of users

        </h1>
        <div class="search-fied flex items-center space-x-4">
            <flux:input icon="magnifying-glass" placeholder="Search orders" wire:model.live.throttle.200ms="search" />

        </div>


    </section>

    <section class="users-list">


     <flux:button href="{{route('admin.create-user-page')}}" admin.create-user  class="mb-6" variant="primary" color="blue">Add Account</flux:button>

        <ul role="list" class="grid grid-cols-5 gap-6 sm:grid-cols-5 lg:grid-cols-5">
            @forelse ($users as $user)
                <li
                    class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow dark:divide-white/10 dark:bg-gray-800/50 dark:shadow-none dark:outline dark:outline-1 dark:-outline-offset-1 dark:outline-white/10">
                    <div class="flex w-full items-center justify-between space-x-6 p-6">
                        <div class="flex-1 truncate">
                            <div class="flex items-center space-x-3">
                                <h3 class="truncate text-sm font-medium text-gray-900 dark:text-white">
                                    {{ $user->name }}
                                </h3>
                                <span
                                    class="inline-flex shrink-0 items-center rounded-full bg-green-50 px-1.5 py-0.5 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20 dark:bg-green-500/10 dark:text-green-500 dark:ring-green-500/10">Admin</span>
                            </div>
                            <p class="mt-1 truncate text-sm text-gray-500 dark:text-gray-400">{{ $user->name }}</p>
                            <p class="mt-1 truncate text-sm text-gray-500 dark:text-gray-400">{{ $user->email }}</p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                            alt=""
                            class="size-10 shrink-0 rounded-full bg-gray-300 outline outline-1 -outline-offset-1 outline-black/5 dark:bg-gray-700 dark:outline-white/10" />
                    </div>
                    <div class=" p-2 ">
                        <flux:button href="{{ route('admin.view-user', ['id' => $user->id]) }}">View Details</flux:button>
                        <flux:button href="{{ route('admin.edit-user', ['id' => $user->id]) }}">Update Details</flux:button>
                    </div>
                </li>



            @empty
                no borrowed books
            @endforelse

        </ul>


    </section>

    <section class="users-links mt-6">
        {{ $users->links() }}
    </section>


</div>
