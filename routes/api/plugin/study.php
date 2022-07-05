<?php

Route::prefix('plugin/study')->namespace('Plugin\Study')->group(function () {
    Route::resource('subject', 'StudySubjectController', ['as' => 'study']);
    Route::resource('sheet', 'StudySheetController', ['as' => 'study']);
});
