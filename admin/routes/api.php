<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Mission And Visions
    Route::post('mission-and-visions/media', 'MissionAndVisionApiController@storeMedia')->name('mission-and-visions.storeMedia');
    Route::apiResource('mission-and-visions', 'MissionAndVisionApiController');

    // Core Values
    Route::post('core-values/media', 'CoreValuesApiController@storeMedia')->name('core-values.storeMedia');
    Route::apiResource('core-values', 'CoreValuesApiController');

    // Mottoes
    Route::post('mottoes/media', 'MottoApiController@storeMedia')->name('mottoes.storeMedia');
    Route::apiResource('mottoes', 'MottoApiController');

    // Our Histories
    Route::post('our-histories/media', 'OurHistoryApiController@storeMedia')->name('our-histories.storeMedia');
    Route::apiResource('our-histories', 'OurHistoryApiController');

    // What Is Food Recylings
    Route::post('what-is-food-recylings/media', 'WhatIsFoodRecylingApiController@storeMedia')->name('what-is-food-recylings.storeMedia');
    Route::apiResource('what-is-food-recylings', 'WhatIsFoodRecylingApiController');

    // What We Dos
    Route::post('what-we-dos/media', 'WhatWeDoApiController@storeMedia')->name('what-we-dos.storeMedia');
    Route::apiResource('what-we-dos', 'WhatWeDoApiController');

    // Deposit Foods
    Route::post('deposit-foods/media', 'DepositFoodApiController@storeMedia')->name('deposit-foods.storeMedia');
    Route::apiResource('deposit-foods', 'DepositFoodApiController');

    // Volunteers
    Route::post('volunteers/media', 'VolunteerApiController@storeMedia')->name('volunteers.storeMedia');
    Route::apiResource('volunteers', 'VolunteerApiController');

    // Donates
    Route::post('donates/media', 'DonateApiController@storeMedia')->name('donates.storeMedia');
    Route::apiResource('donates', 'DonateApiController');

    // Whats News
    Route::post('whats-news/media', 'WhatsNewApiController@storeMedia')->name('whats-news.storeMedia');
    Route::apiResource('whats-news', 'WhatsNewApiController');

    // Career Pages
    Route::post('career-pages/media', 'CareerPageApiController@storeMedia')->name('career-pages.storeMedia');
    Route::apiResource('career-pages', 'CareerPageApiController');

    // Teams
    Route::post('teams/media', 'TeamApiController@storeMedia')->name('teams.storeMedia');
    Route::apiResource('teams', 'TeamApiController');

    // Our Goals
    Route::post('our-goals/media', 'OurGoalsApiController@storeMedia')->name('our-goals.storeMedia');
    Route::apiResource('our-goals', 'OurGoalsApiController');

    // Services
    Route::post('services/media', 'ServicesApiController@storeMedia')->name('services.storeMedia');
    Route::apiResource('services', 'ServicesApiController');

    // Blogs
    Route::post('blogs/media', 'BlogApiController@storeMedia')->name('blogs.storeMedia');
    Route::apiResource('blogs', 'BlogApiController');

    // Contacts
    Route::apiResource('contacts', 'ContactApiController');

    // Social Media Links
    Route::apiResource('social-media-links', 'SocialMediaLinksApiController');

    // Task Statuses
    Route::apiResource('task-statuses', 'TaskStatusApiController');

    // Task Tags
    Route::apiResource('task-tags', 'TaskTagApiController');

    // Tasks
    Route::post('tasks/media', 'TaskApiController@storeMedia')->name('tasks.storeMedia');
    Route::apiResource('tasks', 'TaskApiController');
});
