<?php namespace Awjudd\QuickGame\Controllers\Game;
/* 
* @Author: Andrew Judd
* @Date:   2014-03-24 06:40:12
* @Last Modified by:   Andrew Judd
* @Last Modified time: 2014-03-30 20:36:58
*/

use Redirect;
use Request;

use QuickGame;

use  Awjudd\QuickGame\Controllers\BaseController;

class BlackJackController extends BaseController
{
    public function getIndex()
    {

    }

    public function getCard()
    {
        // Is the request coming in through JavaScript?
        if(!Request::ajax())
        {
            // It isn't, so ignore it (redirect the user)
            return Redirect::to(QuickGame::action('Game\BlackJackController@getIndex'))
                        ->with('info', 'No direct access.');
        }

        // Are they in a game?
        
    }
}