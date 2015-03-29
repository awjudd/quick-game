<?php
/* 
* @Author: Andrew Judd
* @Date:   2014-03-22 22:29:13
* @Last Modified by:   Andrew Judd
* @Last Modified time: 2014-03-23 20:53:56
*/

if(!function_exists('asset_path'))
{
    function asset_path($path = '')
    {
        return app_path('Awjudd/QuickGame/Assets') . ($path ? '/'.$path : $path);;
    }
}