<?php

use App\Models\Activity;
use App\Models\Template;
use Illuminate\Support\Facades\Auth;
use Firefly\FilamentBlog\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Livewire\Boilerplate\AllTemplate;
use Firefly\FilamentBlog\Models\Category;
use App\Livewire\Boilerplate\TemplateShow;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $templates = Template::latest()->take(4)->get();
    $categories = Category::all();
    $posts = Post::all();
    return view('welcome', compact('categories', 'posts', 'templates'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $activites = Activity::where('user_id', Auth::user()->id)->get();
        return view('dashboard', compact('activites'));
    })->name('dashboard');
});
Route::get('/templates', AllTemplate::class)->name('all-templates');
Route::get('/template/{slug}', TemplateShow::class)->name('template-show');
