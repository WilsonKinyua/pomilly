<?php



Route::redirect('/', 'login');



Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Mission And Visions
    Route::delete('mission-and-visions/destroy', 'MissionAndVisionController@massDestroy')->name('mission-and-visions.massDestroy');
    Route::post('mission-and-visions/media', 'MissionAndVisionController@storeMedia')->name('mission-and-visions.storeMedia');
    Route::post('mission-and-visions/ckmedia', 'MissionAndVisionController@storeCKEditorImages')->name('mission-and-visions.storeCKEditorImages');
    Route::resource('mission-and-visions', 'MissionAndVisionController');

    // Core Values
    Route::delete('core-values/destroy', 'CoreValuesController@massDestroy')->name('core-values.massDestroy');
    Route::post('core-values/media', 'CoreValuesController@storeMedia')->name('core-values.storeMedia');
    Route::post('core-values/ckmedia', 'CoreValuesController@storeCKEditorImages')->name('core-values.storeCKEditorImages');
    Route::resource('core-values', 'CoreValuesController');

    // Mottoes
    Route::delete('mottoes/destroy', 'MottoController@massDestroy')->name('mottoes.massDestroy');
    Route::post('mottoes/media', 'MottoController@storeMedia')->name('mottoes.storeMedia');
    Route::post('mottoes/ckmedia', 'MottoController@storeCKEditorImages')->name('mottoes.storeCKEditorImages');
    Route::resource('mottoes', 'MottoController');

    // Our Histories
    Route::delete('our-histories/destroy', 'OurHistoryController@massDestroy')->name('our-histories.massDestroy');
    Route::post('our-histories/media', 'OurHistoryController@storeMedia')->name('our-histories.storeMedia');
    Route::post('our-histories/ckmedia', 'OurHistoryController@storeCKEditorImages')->name('our-histories.storeCKEditorImages');
    Route::resource('our-histories', 'OurHistoryController');

    // What Is Food Recylings
    Route::delete('what-is-food-recylings/destroy', 'WhatIsFoodRecylingController@massDestroy')->name('what-is-food-recylings.massDestroy');
    Route::post('what-is-food-recylings/media', 'WhatIsFoodRecylingController@storeMedia')->name('what-is-food-recylings.storeMedia');
    Route::post('what-is-food-recylings/ckmedia', 'WhatIsFoodRecylingController@storeCKEditorImages')->name('what-is-food-recylings.storeCKEditorImages');
    Route::resource('what-is-food-recylings', 'WhatIsFoodRecylingController');

    // What We Dos
    Route::delete('what-we-dos/destroy', 'WhatWeDoController@massDestroy')->name('what-we-dos.massDestroy');
    Route::post('what-we-dos/media', 'WhatWeDoController@storeMedia')->name('what-we-dos.storeMedia');
    Route::post('what-we-dos/ckmedia', 'WhatWeDoController@storeCKEditorImages')->name('what-we-dos.storeCKEditorImages');
    Route::resource('what-we-dos', 'WhatWeDoController');

    // Deposit Foods
    Route::delete('deposit-foods/destroy', 'DepositFoodController@massDestroy')->name('deposit-foods.massDestroy');
    Route::post('deposit-foods/media', 'DepositFoodController@storeMedia')->name('deposit-foods.storeMedia');
    Route::post('deposit-foods/ckmedia', 'DepositFoodController@storeCKEditorImages')->name('deposit-foods.storeCKEditorImages');
    Route::resource('deposit-foods', 'DepositFoodController');

    // Volunteers
    Route::delete('volunteers/destroy', 'VolunteerController@massDestroy')->name('volunteers.massDestroy');
    Route::post('volunteers/media', 'VolunteerController@storeMedia')->name('volunteers.storeMedia');
    Route::post('volunteers/ckmedia', 'VolunteerController@storeCKEditorImages')->name('volunteers.storeCKEditorImages');
    Route::resource('volunteers', 'VolunteerController');

    // Donates
    Route::delete('donates/destroy', 'DonateController@massDestroy')->name('donates.massDestroy');
    Route::post('donates/media', 'DonateController@storeMedia')->name('donates.storeMedia');
    Route::post('donates/ckmedia', 'DonateController@storeCKEditorImages')->name('donates.storeCKEditorImages');
    Route::resource('donates', 'DonateController');

    // Whats News
    Route::delete('whats-news/destroy', 'WhatsNewController@massDestroy')->name('whats-news.massDestroy');
    Route::post('whats-news/media', 'WhatsNewController@storeMedia')->name('whats-news.storeMedia');
    Route::post('whats-news/ckmedia', 'WhatsNewController@storeCKEditorImages')->name('whats-news.storeCKEditorImages');
    Route::resource('whats-news', 'WhatsNewController');

    // Career Pages
    Route::delete('career-pages/destroy', 'CareerPageController@massDestroy')->name('career-pages.massDestroy');
    Route::post('career-pages/media', 'CareerPageController@storeMedia')->name('career-pages.storeMedia');
    Route::post('career-pages/ckmedia', 'CareerPageController@storeCKEditorImages')->name('career-pages.storeCKEditorImages');
    Route::resource('career-pages', 'CareerPageController');

    // Teams
    Route::delete('teams/destroy', 'TeamController@massDestroy')->name('teams.massDestroy');
    Route::post('teams/media', 'TeamController@storeMedia')->name('teams.storeMedia');
    Route::post('teams/ckmedia', 'TeamController@storeCKEditorImages')->name('teams.storeCKEditorImages');
    Route::resource('teams', 'TeamController');

    // Our Goals
    Route::delete('our-goals/destroy', 'OurGoalsController@massDestroy')->name('our-goals.massDestroy');
    Route::post('our-goals/media', 'OurGoalsController@storeMedia')->name('our-goals.storeMedia');
    Route::post('our-goals/ckmedia', 'OurGoalsController@storeCKEditorImages')->name('our-goals.storeCKEditorImages');
    Route::resource('our-goals', 'OurGoalsController');

    // Services
    Route::delete('services/destroy', 'ServicesController@massDestroy')->name('services.massDestroy');
    Route::post('services/media', 'ServicesController@storeMedia')->name('services.storeMedia');
    Route::post('services/ckmedia', 'ServicesController@storeCKEditorImages')->name('services.storeCKEditorImages');
    Route::resource('services', 'ServicesController');

    // Blogs
    Route::delete('blogs/destroy', 'BlogController@massDestroy')->name('blogs.massDestroy');
    Route::post('blogs/media', 'BlogController@storeMedia')->name('blogs.storeMedia');
    Route::post('blogs/ckmedia', 'BlogController@storeCKEditorImages')->name('blogs.storeCKEditorImages');
    Route::resource('blogs', 'BlogController');

    // Contacts
    Route::delete('contacts/destroy', 'ContactController@massDestroy')->name('contacts.massDestroy');
    Route::resource('contacts', 'ContactController');

    // Social Media Links
    Route::delete('social-media-links/destroy', 'SocialMediaLinksController@massDestroy')->name('social-media-links.massDestroy');
    Route::resource('social-media-links', 'SocialMediaLinksController');

    // Task Statuses
    Route::delete('task-statuses/destroy', 'TaskStatusController@massDestroy')->name('task-statuses.massDestroy');
    Route::resource('task-statuses', 'TaskStatusController');

    // Task Tags
    Route::delete('task-tags/destroy', 'TaskTagController@massDestroy')->name('task-tags.massDestroy');
    Route::resource('task-tags', 'TaskTagController');

    // Tasks
    Route::delete('tasks/destroy', 'TaskController@massDestroy')->name('tasks.massDestroy');
    Route::post('tasks/media', 'TaskController@storeMedia')->name('tasks.storeMedia');
    Route::post('tasks/ckmedia', 'TaskController@storeCKEditorImages')->name('tasks.storeCKEditorImages');
    Route::resource('tasks', 'TaskController');

    // Tasks Calendars
    Route::resource('tasks-calendars', 'TasksCalendarController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    Route::get('messenger', 'MessengerController@index')->name('messenger.index');
    Route::get('messenger/create', 'MessengerController@createTopic')->name('messenger.createTopic');
    Route::post('messenger', 'MessengerController@storeTopic')->name('messenger.storeTopic');
    Route::get('messenger/inbox', 'MessengerController@showInbox')->name('messenger.showInbox');
    Route::get('messenger/outbox', 'MessengerController@showOutbox')->name('messenger.showOutbox');
    Route::get('messenger/{topic}', 'MessengerController@showMessages')->name('messenger.showMessages');
    Route::delete('messenger/{topic}', 'MessengerController@destroyTopic')->name('messenger.destroyTopic');
    Route::post('messenger/{topic}/reply', 'MessengerController@replyToTopic')->name('messenger.reply');
    Route::get('messenger/{topic}/reply', 'MessengerController@showReply')->name('messenger.showReply');
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});




// Frontend

Route::get('/', 'HomePageController@index')->name('home.page');
Route::get('/compay/about', 'HomePageController@about')->name('company.aboutus');
Route::get('/company/missionandvision', 'HomePageController@missionandvision')->name('company.mv');
Route::get('/company/corevalues', 'HomePageController@corevalues')->name('company.corevalues');
Route::get('/company/motto', 'HomePageController@motto')->name('company.motto');
Route::get('/company/ourhistory', 'HomePageController@ourhistory')->name('company.ourhistory');
Route::get('/company/whatisfoodrecycling', 'HomePageController@whatisfoodrecycling')->name('company.whatisfoodrecycling');
Route::get('/company/whatwedo', 'HomePageController@whatwedo')->name('company.whatwedo');
Route::get('/company/depositfood', 'HomePageController@depositfood')->name('company.depositfood');
Route::get('/company/volunteer', 'HomePageController@volunteer')->name('company.volunteer');
Route::get('/company/whatsnew', 'HomePageController@whatsnew')->name('company.whatsnew');
Route::get('/company/donate', 'HomePageController@donate')->name('company.donate');
Route::get('/company/careers', 'HomePageController@careers')->name('company.careers');
Route::get('/team', 'HomePageController@team')->name('home.team');
Route::get('/ourgoals', 'HomePageController@ourgoals')->name('home.ourgoals');
Route::get('/contact', 'HomePageController@contact')->name('home.contact');


// Route::get('/company/depositfood/{id}', 'HomePageController@singledepositfood')->name('company.singledepositfood');

// Route::get('/company/depositfood/{$id}', ['as'=> 'company.singledepositfood', 'uses'=>'HomePageController@singledepositfood']);
