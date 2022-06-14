<?php

Route::namespace ('Webview')
    ->group(function () {
});

//Language Change
Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});
