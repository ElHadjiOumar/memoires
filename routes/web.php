<?php

use App\Http\Controllers\CentreOrthoController;
use App\Http\Controllers\HopitaleController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\FraismedicsController;
use App\Http\Controllers\FraispharmController;
use App\Http\Controllers\LaboratoireController;
use App\Http\Controllers\MaladieController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\OpticienController;
use App\Http\Controllers\PharmacieController;
use App\Http\Controllers\SpecialisationController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Centreortho\EditCentreorthoPage;
use App\Http\Livewire\Famille\EditFamillePage as FamilleEditFamillePage;
use App\Http\Livewire\Famille\IndexFamillePage as FamilleIndexFamillePage;
use App\Http\Livewire\Fraismedicaux\CreateFraismedicauxPage;
use App\Http\Livewire\Fraismedicaux\FamilleFraismedicauxPage;
use App\Http\Livewire\Fraismedicaux\ShowFraismedicauxPage;
use App\Http\Livewire\Fraispharm\CreateFraispharmPage;
use App\Http\Livewire\Fraispharm\FamilleFraispharmPage;
use App\Http\Livewire\Fraispharm\ShowFraispharmPage;
use App\Http\Livewire\Hopitale\EditHopitalePage;
use App\Http\Livewire\Laboratoire\EditLaboratoirePage;
use App\Http\Livewire\Maladie\EditMaladiePage;
use App\Http\Livewire\Medecin\EditMedecinPage;
use App\Http\Livewire\Medecin\IndexMedecinPage;
use App\Http\Livewire\Medicament\EditMedicamentPage;
use App\Http\Livewire\Medicament\IndexMedicamentPage;
use App\Http\Livewire\Opticien\EditOpticienPage;
use App\Http\Livewire\Pharmacie\EditPharmaciePage;
use App\Http\Livewire\Specialisation\EditSpecialisationPage;
use App\Http\Livewire\User\EditUserPage as UserEditUserPage;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => [
    'auth:sanctum',
    'verified',
]], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/role-register', [UserController::class, 'index']);
    Route::get('/famille/{id}', [FamilleIndexFamillePage::class, 'render']);
    Route::get('/pharmacie', [PharmacieController::class, 'index']);
    Route::get('/hopitale', [HopitaleController::class, 'index']);
    Route::get('/specialisation', [SpecialisationController::class, 'index']);
    Route::get('/medecin/{id}', [IndexMedecinPage::class, 'render']);
    Route::get('/maladie', [MaladieController::class, 'index']);
    Route::get('/medicament/{id}', [IndexMedicamentPage::class, 'render']);
    Route::get('/opticien', [OpticienController::class, 'index']);
    Route::get('/laboratoire', [LaboratoireController::class, 'index']);
    Route::get('/centreOrtho', [CentreOrthoController::class, 'index']);
    Route::get('/fraispharm-index', [FraispharmController::class, 'index']);
    Route::get('/fraispharm/{id}', [ShowFraispharmPage::class, 'render']);
    Route::get('/fraismedicaux-index', [FraismedicsController::class, 'index']);
    Route::get('/fraismedic/{id}', [ShowFraismedicauxPage::class, 'render']);

    Route::group(['middleware' => [
        'auth',
        'admin',
    ]], function () {

        Route::get('/create-user', [UserController::class, 'create']);
        Route::post('/save-user', [UserController::class, 'store']);
        Route::get('/role-edit/{id}', [UserEditUserPage::class, 'render']);
        Route::put('/role-register-update/{id}', [UserController::class, 'update']);
        Route::delete('/role-delete/{id}', [UserController::class, 'delete']);

        Route::post('/save-famille', [FamilleController::class, 'store']);
        Route::post('/famille-store/{id}', [FamilleController::class, 'store']);
        Route::get('/famille-edit/{id}', [FamilleEditFamillePage::class, 'render']);
        Route::put('/famille-update/{id}', [FamilleController::class, 'update']);
        Route::delete('/famille-delete/{id}', [FamilleController::class, 'delete']);

        Route::get('/hopitale-create', [HopitaleController::class, 'create']);
        Route::post('/hopitale-store', [HopitaleController::class, 'store']);
        Route::get('/hopitale-edit/{id}', [EditHopitalePage::class, 'render']);
        Route::put('/hopitale-update/{id}', [HopitaleController::class, 'update']);
        Route::delete('/hopitale-delete/{id}', [HopitaleController::class, 'delete']);

        Route::get('/pharmacie-create', [PharmacieController::class, 'create']);
        Route::post('/pharmacie-store', [PharmacieController::class, 'store']);
        Route::get('/pharmacie-edit/{id}', [EditPharmaciePage::class, 'render']);
        Route::put('/pharmacie-update/{id}', [PharmacieController::class, 'update']);
        Route::delete('/pharmacie-delete/{id}', [PharmacieController::class, 'delete']);

        Route::get('/specialisation-create', [SpecialisationController::class, 'create']);
        Route::post('/specialisation-store', [SpecialisationController::class, 'store']);
        Route::get('/specialisation-edit/{id}', [EditSpecialisationPage::class, 'render']);
        Route::put('/specialisation-update/{id}', [SpecialisationController::class, 'update']);
        Route::delete('/specialisation-delete/{id}', [SpecialisationController::class, 'delete']);

        Route::post('/save-medecin', [MedecinController::class, 'store']);
        Route::post('/medecin-store/{id}', [MedecinController::class, 'store']);
        Route::get('/medecin-edit/{id}', [EditMedecinPage::class, 'render']);
        Route::put('/medecin-update/{id}', [MedecinController::class, 'update']);
        Route::delete('/medecin-delete/{id}', [MedecinController::class, 'delete']);

        Route::get('/maladie-create', [MaladieController::class, 'create']);
        Route::post('/maladie-store', [MaladieController::class, 'store']);
        Route::get('/maladie-edit/{id}', [EditMaladiePage::class, 'render']);
        Route::put('/maladie-update/{id}', [MaladieController::class, 'update']);
        Route::delete('/maladie-delete/{id}', [MaladieController::class, 'delete']);

        Route::post('/save-medicament', [MedicamentController::class, 'store']);
        Route::post('/medicament-store/{id}', [MedicamentController::class, 'store']);
        Route::get('/medicament-edit/{id}', [EditMedicamentPage::class, 'render']);
        Route::put('/medicament-update/{id}', [MedicamentController::class, 'update']);
        Route::delete('/medicament-delete/{id}', [MedicamentController::class, 'delete']);

        Route::get('/opticien-create', [OpticienController::class, 'create']);
        Route::post('/opticien-store', [OpticienController::class, 'store']);
        Route::get('/opticien-edit/{id}', [EditOpticienPage::class, 'render']);
        Route::put('/opticien-update/{id}', [OpticienController::class, 'update']);
        Route::delete('/opticien-delete/{id}', [OpticienController::class, 'delete']);

        Route::get('/laboratoire-create', [LaboratoireController::class, 'create']);
        Route::post('/laboratoire-store', [LaboratoireController::class, 'store']);
        Route::get('/laboratoire-edit/{id}', [EditLaboratoirePage::class, 'render']);
        Route::put('/laboratoire-update/{id}', [LaboratoireController::class, 'update']);
        Route::delete('/laboratoire-delete/{id}', [LaboratoireController::class, 'delete']);

        Route::get('/centreOrtho-create', [CentreOrthoController::class, 'create']);
        Route::post('/centreOrtho-store', [CentreOrthoController::class, 'store']);
        Route::get('/centreOrtho-edit/{id}', [EditCentreorthoPage::class, 'render']);
        Route::put('/centreOrtho-update/{id}', [CentreOrthoController::class, 'update']);
        Route::delete('/centreOrtho-delete/{id}', [CentreOrthoController::class, 'delete']);
    });

    Route::group(['middleware' => [
        'auth',
        'pharmacie',
    ]], function () {

        Route::get('/fraispharm-create/{id}', [CreateFraispharmPage::class, 'render']);
        Route::get('/fraispharm-createFam/{id}', [FamilleFraispharmPage::class, 'render']);
        Route::post('/fraispharm-store', [FraispharmController::class, 'store']);
    });



    Route::group(['middleware' => [
        'auth',
        'medecin',
    ]], function () {

        Route::get('/fraismedicaux-create/{id}', [CreateFraismedicauxPage::class, 'render']);
        Route::get('/fraismedicaux-createFam/{id}', [FamilleFraismedicauxPage::class, 'render']);
        Route::post('/fraismedicaux-store', [FraismedicsController::class, 'store']);
    });
});
