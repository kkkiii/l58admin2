<?php


Route::group(['prefix' => 'admin' , 'namespace'=>'Admin'],function () {
    Route::get('/priviledge.list', 'PriviledgeController@list')->name('priviledge.list');
    Route::get('/priviledge.roles', 'PriviledgeController@roles')->name('priviledge.roles');
    Route::get('/priviledge.mgrs', 'PriviledgeController@mgrs')->name('priviledge.mgrs');

    Route::get('/priviledge.edit_role/{id}', 'PriviledgeController@edit_role')->name('priviledge.edit_role');
    Route::post('/priviledge.edit_role_post', 'PriviledgeController@edit_role_post')->name('priviledge.edit_role_post');
    Route::get('/priviledge.del/{id}', 'PriviledgeController@del')->name('priviledge.del');
    Route::get('/priviledge.add_role', 'PriviledgeController@add_role')->name('priviledge.add_role');
    Route::get('/priviledge.add_admin', 'PriviledgeController@add_admin')->name('priviledge.add_admin');
    Route::post('/priviledge.add_role',   'PriviledgeController@add_admin_post')->name('priviledge.add_admin_post');
    Route::get('/priviledge.roles2mgrs', 'PriviledgeController@roles2mgrs')->name('priviledge.roles2mgrs');
    Route::get('/priviledge.roles2mgrs_fill/{id}', 'PriviledgeController@roles2mgrs_fill')->name('priviledge.roles2mgrs_fill');
    Route::post('/priviledge.roles2mgrs_fill', 'PriviledgeController@roles2mgrs_fill_post')->name('priviledge.roles2mgrs_fill_post');
    Route::post('/priviledge.add_role_post', 'PriviledgeController@add_role_post')->name('priviledge.add_role_post');
    Route::get('/priviledge.modules2role/{id}', 'PriviledgeController@modules2role')->name('priviledge.modules2role');
    Route::post('/priviledge.modules2role', 'PriviledgeController@modules2role_post')->name('priviledge.modules2role_post');

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
    Route::get('/report.list', 'ReportController@list');

    Route::get('/redblackboardcontroller.red_top', 'RedBlackBoardController@red_top');
    Route::get('/redblackboardcontroller.black_top', 'RedBlackBoardController@black_top');
    Route::get('/redblackboardcontroller.prev', 'RedBlackBoardController@prev');

    Route::get('/conplaintsfocus.list', 'ConplaintsFocusController@list');
    Route::get('/media.list', 'MediaController@list');
    Route::get('/linkageorg.list', 'LinkageOrgController@list');
    Route::get('/expertjudge.apply', 'ExpertJudgeController@apply');
    Route::get('/expertjudge.reply', 'ExpertJudgeController@reply');

    Route::get('/enterprisemgr.user_list', 'EnterpriseMgrController@user_list');
    Route::get('/enterprisemgr.acct_list', 'EnterpriseMgrController@acct_list');
    Route::get('/govmgr.org_list', 'GovMgrController@org_list');
    Route::get('/govmgr.org_list_del/{id}', 'GovMgrController@org_list_del')->name('govmgr.org_list_del');
    Route::get('/govmgr.org_list_edit/{id}', 'GovMgrController@org_list_edit')->name('govmgr.org_list_edit');
    Route::post('/govmgr.org_list_edit', 'GovMgrController@org_list_edit_post')->name('govmgr.org_list_edit_post');
    Route::get('/govmgr.org_list_sub/{id}', 'GovMgrController@org_list_sub')->name('govmgr.org_list_sub');
    Route::post('/govmgr.org_list_sub', 'GovMgrController@org_list_sub_post')->name('govmgr.org_list_sub_post');
    Route::get('/govmgr.org_list_root', 'GovMgrController@org_list_root')->name('govmgr.org_list_root');
    Route::post('/govmgr.org_list_root', 'GovMgrController@org_list_root_post')->name('govmgr.org_list_root_post');

    Route::get('/govmgr.user_list', 'GovMgrController@user_list');

    Route::get('/expert.list', 'ExpertController@list');
    Route::get('/msgpush.list', 'MsgPushController@list');
    Route::get('/opinionfeedback.list', 'OpinionFeedbackController@list');
    Route::get('/version.list', 'VersionController@list');
});
