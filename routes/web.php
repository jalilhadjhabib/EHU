<?php

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
    return view('home');
});
Route::get('/droits', function () {
    return view('droits');
});
Route::get('/analyses', function () {
    return view('analyses');
});
Route::get('/arrivee', function () {
    return view('arrivee');
});

Route::get('/chirurgie', function () {
    return view('chirurgie');
});

Route::get('/consultation', function () {
    return view('consultation');
});

Route::get('/don', function () {
    return view('don');
});

Route::get('/informations', function () {
    return view('informations');
});

Route::get('/M&D&G', function () {
    return view('M&D&G');
});

Route::get('/M&V', function () {
    return view('M&V');
});

Route::get('/maternite', function () {
    return view('maternite');
});

Route::get('/medecine', function () {
    return view('medecine');
});

Route::get('/N&D', function () {
    return view('N&D');
});

Route::get('/organigramme', function () {
    return view('organigramme');
});

Route::get('/presentation', function () {
    return view('presentation');
});
Route::get('/qos', function () {
    return view('qos');
});
Route::get('/radiologie', function () {
    return view('radiologie');
});
Route::get('/sejour', function () {
    return view('sejour');
});
Route::get('/sortie', function () {
    return view('sortie');
});
Route::get('/urgences', function () {
    return view('urgences');
});
Route::get('/visiteurs', function () {
    return view('visiteurs');
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/cardiologie', function () {
    return view('cardiologie');
});
Route::get('/dermatologie', function () {
    return view('dermatologie');
});
Route::get('/medecinepreventive', function () {
    return view('medecinepreventive');
});
Route::get('/endocrinologie', function () {
    return view('endocrinologie');
});
Route::get('/hematologie', function () {
    return view('hematologie');
});
Route::get('/medecine_de_travail', function () {
    return view('medecine_de_travail');
});
Route::get('/medecine_legale', function () {
    return view('medecine_legale');
});
Route::get('/medecine_physique', function () {
    return view('medecine_physique');
});
Route::get('/nephrologie', function () {
    return view('nephrologie');
});
Route::get('/neurophysiologie', function () {
    return view('neurophysiologie');
});
Route::get('/pneumologie', function () {
    return view('pneumologie');
});
Route::get('/reanimation_medicale', function () {
    return view('reanimation_medicale');
});
Route::get('/oncologie', function () {
    return view('oncologie');
});
Route::get('/neurologie', function () {
    return view('neurologie');
});
Route::get('/reanimation_pediatrique', function () {
    return view('reanimation_pediatrique');
});
Route::get('/cardiaque', function () {
    return view('cardiaque');
});
Route::get('/generale', function () {
    return view('generale');
});
Route::get('/hepatobiliaire', function () {
    return view('hepatobiliaire');
});
Route::get('/maxillo_faciale', function () {
    return view('maxillo_faciale');
});
Route::get('/thoracique', function () {
    return view('thoracique');
});
Route::get('/vasculaire', function () {
    return view('vasculaire');
});
Route::get('/orl', function () {
    return view('orl');
});
Route::get('/urologie', function () {
    return view('urologie');
});
Route::get('/orthopedique', function () {
    return view('orthopedique');
});
Route::get('/imagerie_medicale', function () {
    return view('imagerie_medicale');
});
Route::get('/medecine_nucleaire', function () {
    return view('medecine_nucleaire');
});
Route::get('/biochimie', function () {
    return view('biochimie');
});
Route::get('/bacteriologie', function () {
    return view('bacteriologie');
});
Route::get('/hemobiologie', function () {
    return view('hemobiologie');
});
Route::get('/immunologie', function () {
    return view('immunologie');
});
Route::get('/pharmacologie', function () {
    return view('pharmacologie');
});
Route::get('/toxicologie', function () {
    return view('toxicologie');
});
Route::get('/cytogenetique', function () {
    return view('cytogenetique');
});
Route::get('/gastro_enterologie', function () {
    return view('gastro_enterologie');
});
Route::get('/neurochirurgie', function () {
    return view('neurochirurgie');
});
Route::get('/medecine_interne', function () {
    return view('medecine_interne');
});