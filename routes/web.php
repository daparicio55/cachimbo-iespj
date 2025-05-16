<?php

use App\Http\Controllers\CalificacioneController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParticipanteController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';

Route::get('/dashboard',[DashboardController::class,'index'])
->middleware(['auth','verified'])
->name('dashboard');

Route::get('/dashboard/calificar/{id}',[CalificacioneController::class,'index'])
->middleware(['auth','verified'])
->name('dashboard.calificar.index');
Route::get('/dashboard/calificar/{id}/edit',[CalificacioneController::class,'edit'])
->middleware(['auth','verified'])
->name('dashboard.calificar.edit');
Route::put('/dashboard/calificar/{id}/update',[CalificacioneController::class,'update'])
->middleware(['auth','verified'])
->name('dashboard.calificar.update');

Route::get('/dashboard/participantes',[ParticipanteController::class,'index'])
->middleware(['auth','verified'])
->name('dashboard.participantes.index');
Route::get('/dashboard/participantes/create',[ParticipanteController::class,'create'])
->middleware(['auth','verified'])
->name('dashboard.participantes.create');
Route::post('/dashboard/participantes',[ParticipanteController::class,'store'])
->name('dashboard.participantes.store');
Route::delete('/participantes/{id}',[ParticipanteController::class,'destroy'])
->name('dashboard.participantes.destroy');
