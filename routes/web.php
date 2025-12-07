<?php


use Laravel\Fortify\Features;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Admin\EditUserPage;
use App\Livewire\Settings\TwoFactor;
use App\Livewire\Admin\UsersListPage;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\CreateUserPage;
use App\Livewire\Admin\Book\BookListPage;

use App\Livewire\Admin\Book\ViewBookPage;
use App\Livewire\Admin\Book\CreateBookPage;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::view('/meme', 'meme')
    ->middleware(['auth', 'verified'])
    ->name('meme');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('profile.edit');
    Route::get('settings/password', Password::class)->name('user-password.edit');
    Route::get('settings/appearance', Appearance::class)->name('appearance.edit');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');

    // USERS
    Route::get('admin/users',   UsersListPage::class)->name('admin.users-page');
Route::get('admin/create-user', CreateUserPage::class)->name('admin.create-user-page');
    Route::get('admin/edit-user/{id}',   EditUserPage::class)->name('admin.edit-user');
    Route::get('admin/view-user/{id}',   ViewBookPage::class)->name('')->name('admin.view-user');

    //BOOKS
    Route::get('admin/books',   BookListPage::class)->name('')->name('admin.books-list-page');
    Route::get('admin/book-details/{id}',   ViewBookPage::class)->name('')->name('admin.view-book-page');
    Route::get('admin/create-book',   CreateBookPage::class)->name('')->name('admin.create-book');


});
