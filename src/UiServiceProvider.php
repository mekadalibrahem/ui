<?php 

namespace Mekadalibrahem\Ui ;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider ;

class UiServiceProvider extends ServiceProvider 
{
    public function register()
    {
        //
    }

    public function boot(){
        $this->commands([
            Console\InstallCommand::class,
        ]);
        if ($this->app->runningInConsole()) {
            // Publish views
            $this->publishes([
                __DIR__.'/../stubs/default/resources/views' => resource_path('views'),
              ], 'views');
          
          }
          
        Blade::anonymousComponentPath(__DIR__.'/../stubs/default/resources/views/components' , 'UI');
    }
}



