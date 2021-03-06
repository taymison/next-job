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

Route::get('/', 'VacancyController@menu')->name('menu');
Route::get('/vacancy', 'VacancyController@formNewVacancy')->name('form-new-vacancy');
Route::post('/vacancy', 'VacancyController@newVacancy')->name('new-vacancy');

Route::get('/companies', 'CompanyController@listCompanies')->name('companies');
Route::post('/company', 'CompanyController@newCompany')->name('new-company');
Route::get('/company/delete/{id}', 'CompanyController@deleteCompany')->name('delete-company');
Route::get('/comppany/{id}', 'CompanyController@editCompany')->name('edit-company');
Route::put('/company', 'CompanyController@updateCompany')->name('update-company');