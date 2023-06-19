<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DiplomeController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\Emploi_Du_Temps;
use App\Http\Controllers\DemandeBacController;
use App\Http\Controllers\DemandeAttestationController;
use App\Http\Controllers\DemandeReleveDeNote;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\Paiment;
use App\Http\Controllers\ConversationsController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ConventionController;
use App\Http\Controllers\Profilecontroller;
use App\Http\Controllers\ConventionStageController;



Route::get('/', [AuthController::class , 'show1'])->name('login');
Route::get('/register', [AuthController::class , 'show2'])->name('register');
Route::get('/confirme/{id}/{token}', [RegisterController::class, 'confirm'])->name('confirm.email');
Auth::routes();

Route::get('/Etudiant/home', [HomeController::class, 'UserHome'])->name('User.index');
Route::get('/Admin/home', [HomeController::class, 'AdminHome'])->name('Admin.index')->middleware('is_admin');

Route::resource('/ENCG/Admin/Diplome', DiplomeController::class);
Route::resource('/ENCG/Admin/Filiere', FiliereController::class);

Route::resource('EmploiDuTemp', Emploi_Du_Temps::class);
Route::get('Etudiant/EmploiDuTemp', [Emploi_Du_Temps::class, 'show'])->name('EmploiDuTemp.show');
Route::post('Admin/EmploiDuTemp', [Emploi_Du_Temps::class, 'store'])->name('EmploiDuTemp.store');

Route::get('Inscription', [InscriptionController::class, 'create'])->name('Inscription.create');
Route::post('Inscription', [InscriptionController::class, 'store'])->name('Inscription.store');
Route::get('Inscription/{id}/edit',[InscriptionController::class,'edit'])->name('edit');
Route::get('Inscription/{id}/pdf', [InscriptionController::class, 'pdf'])->name('Inscription.pdf');
Route::put('Inscription/{id}', [InscriptionController::class, 'update'])->name('Inscription.update');


Route::get('Etudiant/DemandeBac', [DemandeBacController::class, 'create'])->name('DemandeBac.create');
Route::post('Etudiant/DemandeBac', [DemandeBacController::class, 'store'])->name('DemandeBac.store');
Route::get('Admin/DemandeBac', [DemandeBacController::class, 'show'])->name('DemandeBac.show');
Route::post('Admin/DemandeBac/{id}/mark-as-read', [DemandeBacController::class ,'markAsRead'])->name('DemandeBac.markAsRead');
Route::post('Admin/DemandeBac/{id}/mark-as-signee', [DemandeBacController::class ,'markAsSignee'])->name('DemandeBac.markAsSignee');
Route::post('Admin/DemandeBac/{id}/mark-as-refuser', [DemandeBacController::class ,'markAsTerminer'])->name('DemandeBac.markAsRefuser');


Route::get('Etudiant/DemandeAttestation', [DemandeAttestationController::class, 'create'])->name('DemandeAttestation.create');
Route::post('Etudiant/DemandeAttestation', [DemandeAttestationController::class, 'store'])->name('DemandeAttestation.store');
Route::get('Admin/DemandeAttestation', [DemandeAttestationController::class, 'show'])->name('DemandeAttestation.show');
Route::post('Admin/DemandeAttestation/{id}/mark-as-read', [DemandeAttestationController::class ,'markAsRead'])->name('DemandeAttestation.markAsRead');
Route::post('Admin/DemandeAttestation/{id}/mark-as-signee', [DemandeAttestationController::class ,'markAsSignee'])->name('DemandeAttestation.markAsSignee');
Route::post('Admin/DemandeAttestation/{id}/mark-as-refuser', [DemandeAttestationController::class ,'markAsTerminer'])->name('DemandeAttestation.markAsRefuser');

Route::get('Etudiant/DemandeReleveDeNote', [DemandeReleveDeNote::class, 'create'])->name('DemandeReleveDeNote.create');
Route::post('Etudiant/DemandeReleveDeNote', [DemandeReleveDeNote::class, 'store'])->name('DemandeReleveDeNote.store');
Route::get('Admin/DemandeReleveDeNote', [DemandeReleveDeNote::class, 'show'])->name('DemandeReleveDeNote.show');
Route::post('Admin/DemandeReleveDeNote/{id}/mark-as-read', [DemandeReleveDeNote::class ,'markAsRead'])->name('DemandeReleveDeNote.markAsRead');
Route::post('Admin/DemandeReleveDeNote/{id}/mark-as-signee', [DemandeReleveDeNote::class ,'markAsSignee'])->name('DemandeReleveDeNote.markAsSignee');
Route::post('Admin/DemandeReleveDeNote/{id}/mark-as-refuser', [DemandeReleveDeNote::class ,'markAsTerminer'])->name('DemandeReleveDeNote.markAsRefuser');




Route::get('Paiment', [Paiment::class, 'create'])->name('Paiment.paiment');

Route::get('Sconversations', [ConversationsController::class, 'index'])->name('conversations.index');

Route::get('Master', [EtudiantController::class, 'index'])->name('Master.index');
Route::get('Master/{id}', [EtudiantController::class, 'show'])->name('Master.show');
Route::get('Licence', [EtudiantController::class, 'index1'])->name('Licence.index1');

Route::get('/conversations', [ConversationsController::class, 'index'])->name('conversations');
Route::get('/conversations/{user}', [ConversationsController::class, 'show'])->name('conversations.show');
Route::post('/conversations/{user}', [ConversationsController::class, 'store']);

Route::get('Admin/Profile', [Profilecontroller::class, 'profileAdmin'])->name('profileAdmin');
Route::get('Admin/Parametre/{id}', [Profilecontroller::class, 'editinfoAdmin'])->name('profileAdmin.edit');
Route::get('Etudiant/Profile', [Profilecontroller::class, 'profileUser'])->name('profileUser');
Route::put('Etudiant/Profile/{id}', [Profilecontroller::class, 'updateUser'])->name('profileUser.update');
Route::get('Etudiant/Parametre/{id}', [Profilecontroller::class, 'editinfo'])->name('profileUser.edit');


Route::get('Etudiant/ConventionDeStage', [ConventionController::class, 'show'])->name('convention.show');
Route::get('Etudiant/convention/pdf', [ConventionController::class, 'pdf'])->name('convention.pdf');











