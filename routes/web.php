<?php

use Spatie\Sitemap\SitemapGenerator;
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

// Frontend Route
Route::group(['middleware' => 'web'], function () {
  Route::get('/', 'FrontEndController@index')->name('index');
  Route::get('/learn', 'FrontEndController@learn')->name('learn');
  Route::get('/projects', 'FrontEndController@projects')->name('projects');
});

// Authentication Route
Route::get('login/google', 'Auth\OAuthController@redirectToGoogle')->name('google');
Route::get('login/google/callback', 'Auth\OAuthController@handleGoogleCallback');
Route::get('login/github', 'Auth\OAuthController@redirectToGitHub')->name('github');
Route::get('login/github/callback', 'Auth\OAuthController@handleGitHubCallback');
Route::get('login/facebook', 'Auth\OAuthController@redirectToFacebook')->name('facebook');
Route::get('login/facebook/callback', 'Auth\OAuthController@handleFacebookCallback');
Auth::routes(['verify' => true]);

// Lead Route
Route::group(['namespace' => 'Lead','prefix' => 'lead', 'as' => 'lead.', 'middleware' => ['auth','role:lead','verified']], function () {
  // Dashboard
  Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
  // Roles
  Route::resource('roles', 'RolesController');
  // Teams
  Route::resource('teams', 'TeamsController');
  //Settings
  Route::get('settings', 'SettingsController@settings')->name('settings');
  //Support
  Route::get('support', 'SupportController@support')->name('support');
  //User
  Route::get('user', 'UserController@user')->name('user');
  //Core Team
  Route::get('coreteam', 'CoreTeamController@coreteam')->name('coreteam');
  //Learning Teams
  Route::get('learningteams', 'LearningTeamsController@learningteams')->name('learningteams');
 
  // Users
  Route::resource('users', 'UsersController', ['except' => ['show']]);
  // Profile
  Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
  // SiteMap
  Route::get('sitemap', function () {
    SitemapGenerator::create(config('app.url'))->writeToFile('sitemap.xml');

    return view('frontend.sitemap');
  })->name('sitemap');
});
   //Order questions
   Route::group(['namespace' => 'FAQ\Controllers\Lead'],function (){
    Route::resource('/faqs/categories', 'CategoriesController');
    Route::put('order', ['as' => 'lead.faqs.order', 'uses' => 'OrderController@index']);
    Route::post('/faqs/order', 'OrderController@updateorder');
    Route::resource('/faqs/categories', 'FAQsController');
   });
   

// Technical Core Team Route
Route::group(['namespace' => 'TechCoreTeam','prefix' => 'techcore', 'as' => 'core.', 'middleware' => ['auth','role:techcore','verified']], function () {
  // Dashboard
  Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
  // Profile
  Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
  Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
  Route::get('settings', 'SettingsController@settings')->name('settings');
  Route::get('support', 'SupportController@support')->name('support');
  //Core Team
  Route::get('coreteam', 'CoreTeamController@coreteam')->name('coreteam');
  //Learning Teams
  Route::get('learningteams', 'LearningTeamsController@learningteams')->name('learningteams');

});

// Non-Technical Core Team Route
Route::group(['namespace' => 'NonTechCoreTeam','prefix' => 'nontechcore', 'as' => 'noncore.', 'middleware' => ['auth','role:nontechcore','verified']], function () {
  // Dashboard
  Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
  // Profile
  Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
  Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
  //Settings
  Route::get('settings', 'SettingsController@settings')->name('settings');
  //Support
  Route::get('support', 'SupportController@support')->name('support');
  //Core Team
  Route::get('coreteam', 'CoreTeamController@coreteam')->name('coreteam');
  //Learning Teams
  Route::get('learningteams', 'LearningTeamsController@learningteams')->name('learningteams');
});

// Member Route
Route::group(['namespace' => 'Member','prefix' => 'member', 'as' => 'member.', 'middleware' => ['auth','role:member','verified']], function () {
  // Dashboard
  Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
  // Profile
  Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
  Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
  //Settings
  Route::get('settings', 'SettingsController@settings')->name('settings');
  //Support
  Route::get('support', 'SupportController@support')->name('support');
  //Core Team
  Route::get('coreteam', 'CoreTeamController@coreteam')->name('coreteam');
  //Learning Teams
  Route::get('learningteams', 'LearningTeamsController@learningteams')->name('learningteams');
});

  