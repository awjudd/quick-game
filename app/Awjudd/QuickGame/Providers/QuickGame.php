<?php namespace Awjudd\QuickGame\Providers;
/* 
* @Author: Andrew Judd
* @Date:   2014-03-22 21:54:58
* @Last Modified by:   Andrew Judd
* @Last Modified time: 2014-03-22 21:55:54
*/

use InvalidArgumentException;
use Config;
use URL;

class QuickGame
{
    /**
     * Laravel application
     * 
     * @var Illuminate\Foundation\Application
     */
    public $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * Returns the Laravel application
     * 
     * @return Illuminate\Foundation\Application
     */
    public function app()
    {
        return $this->app;
    }

    /**
     * Check whether the controller's action exists.  Returns the url if it does. Otherwise false.
     * 
     * @param string $action The action to look for
     * @param array $parameters Any parameters that should be passed by the URL
     * @param boolean $absolute Should it be absolute path?
     * @return string
     */
    public function action ( $action, $parameters = array(), $absolute = true )
    {
        // The action that will be returned
        $return = null;

        try
        {
            // Try it as it stands
            $return = $this->app['url']->action($action, $parameters, $absolute);
        }
        catch( InvalidArgumentException $e )
        {
            // Try to prefix it with the namespace
            $namespaces = Config::get('namespaces.controllers', array());

            // Cycle through all of the namespaces
            foreach($namespaces as $namespace)
            {
                // Build up the action
                $completeAction = $namespace . '\\' . $action;

                try
                {
                    // Try to build the URL
                    $return = URL::action($completeAction, $parameters, $absolute);

                    // We successfully built it, so, we are done
                    break;
                }
                catch( InvalidArgumentException $e )
                {
                    // Do nothing
                    $return = null;
                }
            }
        }

        // Check if we were able to find anything
        if($return === null)
        {
            // We weren't, so throw an exception
            throw new InvalidArgumentException('The specified controller action (' . $action . ') is not available.');
        }

        // Otherwise, return the action
        return $return;
    }

    /**
     * Used to derive the name of the controller that is to be used.  This is
     * used as a way to bypass fully-qualifying it every time.
     * 
     * @param string $controller The classname of the controller to use.
     * @return string The fully qualified name of the controller
     * @throws InvalidArgumentException
     */
    public function controller( $controller )
    {
        // Check if the controller exists
        if(class_exists($controller))
        {
            // It does, so just return it
            return $controller;
        }

        // Try to prefix it with the namespace
        $namespaces = Config::get('namespaces.controllers', array());

        // Cycle through all of the namespaces
        foreach($namespaces as $namespace)
        {
            // Derive the full name
            $completeController = $namespace . '\\' . $controller;

            // Deos that class exist?
            if(class_exists($completeController))
            {
                // It existed, so we are done
                return $completeController;
            }
        }

        // Throw an exception letting you know that the controller doesn't exist
        throw new InvalidArgumentException('The specified controller (' . $controller . ') does not exist.');
    }

    /**
     * Used to derive the duration in which an object should be cached
     * 
     * @return integer
     */
    public function cache()
    {
        // Check if caching is enabled
        if(Config::get('site.cache.enabled'))
        {
            // It is, so return the cache duration
            return Config::get('site.cache.duration');
        }

        // Otherwise don't cache it
        return 0;
    }

}