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


Route::name('dashboard')->prefix('dashboard')->group(function(){
    Route::get('/',[DashboardController::class,'index']);
    Route::get('/calificar/{id}',[CalificacioneController::class,'index'])
    ->name('.calificar.index');
    Route::get('/calificar/{id}/edit',[CalificacioneController::class,'edit'])
    ->name('.calificar.edit');
    Route::put('/calificar/{id}/update',[CalificacioneController::class,'update'])
    ->name('.calificar.update');

    Route::get('/participantes',[ParticipanteController::class,'index'])
    ->name('.participantes.index');
    Route::get('/participantes/create',[ParticipanteController::class,'create'])
    ->name('.participantes.create');
    Route::post('/participantes',[ParticipanteController::class,'store'])
    ->name('.participantes.store');

    Route::delete('/participantes/{id}',[ParticipanteController::class,'destroy'])
    ->name('.participantes.destroy');


})->middleware(['auth', 'verified']);




Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
