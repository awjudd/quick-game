<?php namespace Awjudd\QuickGame\Facades;
/* 
* @Author: Andrew Judd
* @Date:   2014-03-22 22:04:07
* @Last Modified by:   Andrew Judd
* @Last Modified time: 2014-03-22 22:06:26
*/

use \Illuminate\Support\Facades\Facade;

class QuickGameFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'awjudd/quick-game'; }

}
