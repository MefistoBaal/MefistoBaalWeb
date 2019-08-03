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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'show_home_path'
]);

Route::get('/home', [
    'uses' => 'HomeController@index',
    'as'   => 'show_home_path'
]);

Route::get('/login', [
    'uses' => 'LoginController@index',
    'as'   => 'show_login_path'
]);

Route::get('/about', [
    'uses' => 'AboutController@index',
    'as'   => 'show_about_path'
]);

Route::get('/services', [
    'uses' => 'ServicesController@index',
    'as'   => 'show_services_path'
]);

Route::get('/portfolio', [
    'uses' => 'PortfolioController@index',
    'as'   => 'show_portfolio_path'
]);

Route::get('/portfolio/{project}', [
    'uses' => 'PortfolioController@projects',
    'as'   => 'show_portfolio_projects_path'
]);

Route::get('/blog', [
    'uses' => 'BlogController@index',
    'as'   => 'show_blog_path'
]);

Route::get('/contact', [
    'uses' => 'ContactController@index',
    'as'   => 'show_contact_path'
]);