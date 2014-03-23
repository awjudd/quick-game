<?php namespace Awjudd\QuickGame\Providers;
/* 
* @Author: Andrew Judd
* @Date:   2014-03-22 21:51:35
* @Last Modified by:   Andrew Judd
* @Last Modified time: 2014-03-22 22:05:16
*/

use Illuminate\Support\ServiceProvider;

class QuickGameServiceProvider extends ServiceProvider
{

/**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('awjudd/quick-game');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register the game engine
        $this->registerQuickGame();
    }

    /**
     * Register the application bindings.
     *
     * @return void
     */
    protected function registerQuickGame()
    {
        $this->app->bind('awjudd/quick-game', function($app)
        {
            return new QuickGame($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('awjudd/quick-game');
    }

    /**
     * Used in order to resolve the validator that the application should
     * be using.
     * 
     * @return void
     */
    protected function resolveValidator()
    {
        // Resolve the validator
        \Validator::resolver(function($translator, $data, $rules, $messages)
        {
            return new VPDValidator($translator, $data, $rules, $messages);
        });
    }

    /**
     * Register the artisan commands.
     *
     * @return void
     */
    private function registerCommands()
    {
       
    }

    /**
     * Used internally in order to set up all of the macros that
     * are required for the application to run.
     * 
     * @return void
     */
    private function addMacros()
    {
        
    }
}