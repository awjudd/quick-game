<?php namespace Awjudd\QuickGame\Presenters;
/* 
* @Author: Andrew Judd
* @Date:   2014-03-23 09:47:05
* @Last Modified by:   Andrew Judd
* @Last Modified time: 2014-03-23 10:45:59
*/

use McCool\LaravelAutoPresenter\BasePresenter;

class Base extends BasePresenter
{
    public function __construct($model)
    {
        $this->resource = $model;
    }
}