<?php namespace Awjudd\QuickGame\Models\User;
/* 
* @Author: Andrew Judd
* @Date:   2014-03-23 09:10:46
* @Last Modified by:   Andrew Judd
* @Last Modified time: 2014-03-23 09:49:26
*/

use Zizaco\Confide\ConfideUser;

/**
 * Awjudd\QuickGame\Models\User\User
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $confirmation_code
 * @property boolean $confirmed
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $slug
 * @property string $token
 * @property integer $points
 * @method static \Illuminate\Database\Query\Builder|\Awjudd\QuickGame\Models\User\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Awjudd\QuickGame\Models\User\User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\Awjudd\QuickGame\Models\User\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Awjudd\QuickGame\Models\User\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\Awjudd\QuickGame\Models\User\User whereConfirmationCode($value)
 * @method static \Illuminate\Database\Query\Builder|\Awjudd\QuickGame\Models\User\User whereConfirmed($value)
 * @method static \Illuminate\Database\Query\Builder|\Awjudd\QuickGame\Models\User\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Awjudd\QuickGame\Models\User\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Awjudd\QuickGame\Models\User\User whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\Awjudd\QuickGame\Models\User\User whereToken($value)
 * @method static \Illuminate\Database\Query\Builder|\Awjudd\QuickGame\Models\User\User wherePoints($value)
 */
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