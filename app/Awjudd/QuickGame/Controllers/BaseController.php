<?php namespace Awjudd\QuickGame\Controllers;
/* 
* @Author: Andrew Judd
* @Date:   2014-03-22 21:50:04
* @Last Modified by:   Andrew Judd
* @Last Modified time: 2014-03-22 23:10:41
*/

use Controller;
use View;

abstract class BaseController extends Controller
{

    protected $layout = 'layout.layout';

    public function __construct()
    {
        // Add in the namespace for QuickGame specific views
        View::addNamespace('qg', app_path('Awjudd/QuickGame/Views'));
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

    /**
     * Used in order to handle a little bit of heavy lifting around which view
     * we should actually be calling.  It will then nest the view on the layout.
     * 
     * @return The updated view
     */
    protected function render($key, $view, array $data = array())
    {
        return $this->layout->nest($key, $view, $data);
    }

}