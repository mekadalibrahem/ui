<?php 

namespace Mekadalibrahem\Ui ;
use Illuminate\Support\ServiceProvider ;

class UiServiceProvider extends ServiceProvider 
{
    public function register()
    {
        //
    }

    public function boot(){
        if ($this->app->runningInConsole()) {
            // Publish views
            $this->publishes([
              __DIR__.'/../resources/views' => resource_path('views/vendor/ui'),
            ], 'views');
          
          }
          
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ui');
    }
}



