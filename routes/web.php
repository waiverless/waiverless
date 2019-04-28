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

/* -------------------------------------- Target -------------------------------------------------------------------------------------- */
Route::get('/Target/target','Target\TargetController@target');
Route::post('/Target/addTarget','Target\TargetController@storeTarget');

Route::get('/Volunteer/volunteer','Volunteer\VolunteerController@volunteer');
Route::post('/Volunteer/addVolunteer','Volunteer\VolunteerController@storeVolunteer');


Route::get('/','ModeleReussite\ModeleReussiteController@modele_reussite');
Route::get('/Localisation/localisation','Localisation\LocalisationController@localisation');
Route::get('/Documentation/formation','Documentation\DocumentationController@formation');
Route::get('/ModeleReussite/modele_reussite','ModeleReussite\ModeleReussiteController@modele_reussite');