<?php
Route::get('/home', 'Admin\IndexController@home');
Route::get('/', 'Admin\LoginController@login');
Route::get('/login', 'Admin\LoginController@login')->name('login');
Route::get('/logout', 'Admin\LoginController@logout')->name('logout');
Route::post('login/store', 'Admin\LoginController@store')->name('login.store');


Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/priviledge.list', 'PriviledgeController@list')->name('priviledge.list');
    Route::get('/priviledge.roles', 'PriviledgeController@roles')->name('priviledge.roles');
    Route::get('/priviledge.edit_role/{id}', 'PriviledgeController@edit_role')->name('priviledge.edit_role');
    Route::post('/priviledge.edit_role_post', 'PriviledgeController@edit_role_post')->name('priviledge.edit_role_post');
    Route::get('/priviledge.del/{id}', 'PriviledgeController@del')->name('priviledge.del');
    Route::get('/priviledge.add_role', 'PriviledgeController@add_role')->name('priviledge.add_role');
    Route::post('/priviledge.add_role_post', 'PriviledgeController@add_role_post')->name('priviledge.add_role_post');
    Route::get('/consumer.list', 'ConsumerController@list');
    Route::get('/consumer.lock/{id}', 'ConsumerController@lock');
    Route::get('/consumer.del/{id}', 'ConsumerController@del');

    Route::get('/satisfactionsurvey.company_advice', 'SatisfactionSurvey@company_advice');
    Route::get('/satisfactionsurvey.company_tipoff_gov', 'SatisfactionSurvey@company_tipoff_gov');
    Route::get('/satisfactionsurvey.consumer_advice', 'SatisfactionSurvey@consumer_advice');
    Route::get('/satisfactionsurvey.consumer_tipoff_company', 'SatisfactionSurvey@consumer_tipoff_company');
    Route::get('/satisfactionsurvey.consumer_tipoff_gov', 'SatisfactionSurvey@consumer_tipoff_gov');

    Route::get('/infopubcontroller.consume_warning', 'InfoPubController@consume_warning');
    Route::get('/infopubcontroller.hot_consult', 'InfoPubController@hot_consult');
    Route::get('/infopubcontroller.gov_pub', 'InfoPubController@gov_pub');

    Route::get('/complaints.list', 'ComplaintsController@list');
    Route::get('/complaints.passed', 'ComplaintsController@passed');
    Route::get('/complaints.done', 'ComplaintsController@done');
    Route::get('/complaints.category_list', 'ComplaintsController@done');

    Route::get('/consult.visitors', 'ConsultController@visitors');
    Route::get('/consult.offline', 'ConsultController@offline');

    Route::get('/brand.list', 'BrandController@list');

});
