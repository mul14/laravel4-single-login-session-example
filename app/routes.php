<?php

Route::get('/', function()
{
    return View::make('home');

})->before('auth');

Route::get('/login', function()
{
	return View::make('login');
});

Route::post('/login', function()
{
    $credentials = Input::only('username', 'password');

    if (Auth::attempt($credentials))
    {
        $user = Auth::user();
        $user->session_id = Auth::getSession()->getId();
        $user->save();

        return Redirect::intended('/');
    }

    return Redirect::back()->withInput();
});

Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::to('/');
});
