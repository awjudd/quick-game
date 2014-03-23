<?php namespace Awjudd\QuickGame\Controllers;
/* 
* @Author: Andrew Judd
* @Date:   2014-03-22 21:54:05
* @Last Modified by:   Andrew Judd
* @Last Modified time: 2014-03-22 23:10:56
*/

class HomeController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function getIndex()
    {
        $this->render('content', 'home.welcome.index');
    }
}