<?php namespace Awjudd\QuickGame\Models\User;
/* 
* @Author: Andrew Judd
* @Date:   2014-03-23 09:10:46
* @Last Modified by:   Andrew Judd
* @Last Modified time: 2014-03-23 09:49:26
*/

use Zizaco\Confide\ConfideUser;

class User extends ConfideUser
{
    public $presenter = 'Awjudd\QuickGame\Presenters\User\User';

    public static function boot()
    {
        parent::boot();

        // Add to the hook for creating a user
        User::creating(function($model) {
            // Add in unique token
            $model->token = Str::random(50);
        });
    }
}