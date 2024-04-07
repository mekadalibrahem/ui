<?php 

namespace Mekadalibrahem\Ui\Console ;



trait InstallDefaultStack 
{

    public function installDefaultStack(){
        // NPM Packages...
        $this->updateNodePackages(function ($packages) {
            return [
                'autoprefixer' => '^10.4.18',
                'postcss' => '^8.4.35',
                'tailwindcss' => '^3.4.1',
                'flowbite' => '^2.3.0' ,
            ] + $packages;
        });

         // Tailwind / Vite...
         copy(__DIR__.'/../../stubs/default/tailwind.config.js', base_path('tailwind.config.js'));
         copy(__DIR__.'/../../stubs/default/postcss.config.js', base_path('postcss.config.js'));
         copy(__DIR__.'/../../stubs/default/vite.config.js', base_path('vite.config.js'));
         copy(__DIR__.'/../../stubs/default/resources/css/app.css', resource_path('css/app.css'));
         copy(__DIR__.'/../../stubs/default/resources/js/app.js', resource_path('js/app.js'));
 
         $this->components->info('Installing and building Node dependencies.');

         if (file_exists(base_path('pnpm-lock.yaml'))) {
             $this->runCommands(['pnpm install', 'pnpm run build']);
         } elseif (file_exists(base_path('yarn.lock'))) {
             $this->runCommands(['yarn install', 'yarn run build']);
         } else {
             $this->runCommands(['npm install', 'npm run build']);
         }
 
 
 
         $this->line('');
         $this->components->info('ui  installed successfully.');
         
    }
}


