<?php

class AboutController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default About Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'AboutController@showWelcome');
    |
    */

    public function showAbout()
    {
        return 'About Website';
    }

    public function showDirection()
    {
        return 'About Website';
    }

}