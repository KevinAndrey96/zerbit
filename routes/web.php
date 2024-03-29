<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users')->middleware("auth");
    Route::post('/users', [App\Http\Controllers\UsersController::class, 'create'])->middleware("auth");
    Route::delete('/users/{user}', [App\Http\Controllers\UsersController::class, 'destroy'])->middleware("auth");
    Route::get('/users/change-password', [App\Http\Controllers\UsersController::class, 'change'])->name('change')->middleware("auth");
    Route::post('/users/change-password', [App\Http\Controllers\UsersController::class, 'changePassword'])->middleware("auth");

    Route::get('/signatures', [App\Http\Controllers\SignatureController::class, 'index'])->middleware("auth");
    Route::get('/signatures/{user}', [App\Http\Controllers\SignatureController::class, 'show'])->middleware("auth");
    Route::get('/signatures/create/{user}', [App\Http\Controllers\SignatureController::class, 'create'])->middleware("auth");
    Route::post('/signatures/{user}', [App\Http\Controllers\SignatureController::class, 'store'])->middleware("auth");

    Route::get('/patients', [App\Http\Controllers\PatientsController::class, 'index'])->name('patients')->middleware("auth");
    Route::get('/patients/create', [App\Http\Controllers\PatientsController::class, 'create'])->middleware("auth");
    Route::post('/patients', [App\Http\Controllers\PatientsController::class, 'store'])->middleware("auth");

    Route::delete('/patients/{patient}', [App\Http\Controllers\PatientsController::class, 'destroy'])->middleware("auth");

    Route::get('/lab-samples/create', [App\Http\Controllers\LabSampleController::class, 'create'])->middleware("auth")->name('lab-samples-create');
    Route::get('/lab-samples/{filter}', [App\Http\Controllers\LabSampleController::class, 'index'])->middleware("auth");
    Route::get('/lab-samples', [App\Http\Controllers\LabSampleController::class, 'index'])->name('lab-samples')->middleware("auth");
    Route::get('/lab-samples-pdf/{labSample}', [App\Http\Controllers\LabSampleController::class, 'show'])->middleware("auth");
    Route::post('/lab-samples', [App\Http\Controllers\LabSampleController::class, 'store'])->middleware("auth");
    Route::delete('/lab-samples/{labSample}', [App\Http\Controllers\LabSampleController::class, 'destroy'])->middleware("auth");

    Route::get('/physical-therapies/create', [App\Http\Controllers\PhysicalTherapyController::class, 'create'])->middleware("auth")->name('physical-therapies-create');
    Route::get('/physical-therapies', [App\Http\Controllers\PhysicalTherapyController::class, 'index'])->name('physical-therapies')->middleware("auth");
    Route::get('/physical-therapies/{physicalTherapy}', [App\Http\Controllers\PhysicalTherapyController::class, 'show'])->middleware("auth");
    Route::post('/physical-therapies', [App\Http\Controllers\PhysicalTherapyController::class, 'store'])->middleware("auth");
    Route::delete('/physical-therapies/{physicalTherapy}', [App\Http\Controllers\PhysicalTherapyController::class, 'destroy'])->middleware("auth");

    Route::get('/clinical-histories/{filter}', [App\Http\Controllers\ClinicalHistoriesController::class, 'index'])->middleware("auth");
    Route::get('/clinical-histories-a', [App\Http\Controllers\ClinicalHistoriesController::class, 'indexa'])->middleware("auth")->name('clinical-histories-a');;
    Route::get('/clinical-histories', [App\Http\Controllers\ClinicalHistoriesController::class, 'index'])->middleware("auth")->name('clinical-histories');
    Route::get('/clinical-histories-create', [App\Http\Controllers\ClinicalHistoriesController::class, 'create'])->middleware("auth")->name('clinical-histories-create');
    Route::post('/clinical-histories', [App\Http\Controllers\ClinicalHistoriesController::class, 'store'])->middleware("auth");
    Route::get('/clinical-histories-pdf/{clinicalHistory}', [App\Http\Controllers\ClinicalHistoriesController::class, 'show'])->middleware("auth");
    Route::get('/clinical-histories-pdf/refresh/{clinicalHistory}', [App\Http\Controllers\ClinicalHistoriesController::class, 'refresh'])->middleware("auth");

    Route::post('/evolutions', [App\Http\Controllers\EvolutionsController::class, 'store'])->middleware("auth");

    Route::get('/appointments', [App\Http\Controllers\AppointmentsController::class, 'index'])->middleware("auth")->name('appointments');
    Route::get('/appointments/create', [App\Http\Controllers\AppointmentsController::class, 'create'])->middleware("auth")->name('appointments-create');
    Route::post('/appointments', [App\Http\Controllers\AppointmentsController::class, 'store'])->middleware("auth");
    Route::post('/appointments/reminder', [App\Http\Controllers\AppointmentsController::class, 'reminder'])->middleware("auth");
    Route::post('/appointments/cancel', [App\Http\Controllers\AppointmentsController::class, 'cancel'])->middleware("auth");

});

Route::get('/clients/login', [App\Http\Controllers\ClientController::class, 'login']);
Route::get('/clients/register', [App\Http\Controllers\ClientController::class, 'register']);
Route::get('/clients/documents', [App\Http\Controllers\ClientController::class, 'documents']);
Route::post('/patients/external', [App\Http\Controllers\PatientsController::class, 'externalStore'])->name("externalRegister");
Route::post('/patients/externalAuth', [App\Http\Controllers\PatientsController::class, 'externalAuth'])->name("externalAuth");
Route::get('/clients/externalAuth/{patient}', [App\Http\Controllers\PatientsController::class, 'alreadyAuth']);
Route::post('/lab-samples/externalLab', [App\Http\Controllers\LabSampleController::class, 'externalLab'])->name("externalLab");
Route::get('/f9664ea1803311b35f81d07d8c9e072d/{labSample}', [App\Http\Controllers\LabSampleController::class, 'show']);
Route::get('/generic-signature/{signatureType}/{id}', [App\Http\Controllers\GenericSignatureController::class, 'index']);


Route::get('/generic-signature/{signatureType}/{id}', [App\Http\Controllers\GenericSignatureController::class, 'index']);
Route::post('/generic-signature', [App\Http\Controllers\GenericSignatureController::class, 'store']);

Route::get('/cache', [App\Http\Controllers\CacheController::class, 'index']);

//f9664ea1803311b35f81d07d8c9e072d is md5('lab)
Route::get('/', function () {
    return redirect('/login');
});