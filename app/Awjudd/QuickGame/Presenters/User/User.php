<?php namespace Awjudd\QuickGame\Presenters\User;
/* 
* @Author: Andrew Judd
* @Date:   2014-03-23 09:48:09
* @Last Modified by:   Andrew Judd
* @Last Modified time: 2014-03-23 10:46:09
*/

use QuickGame;
use Awjudd\QuickGame\Presenters\Base;

class User extends Base
{
    public function logout()
    {
        return QuickGame::action('UserController@getLogout', [$this->resource->token]);
    }
}