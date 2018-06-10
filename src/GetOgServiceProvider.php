<?php

namespace Razz\GetOG;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\Finder;
use Illuminate\Filesystem\Filesystem;

class GetOgServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/getOG.php';
        include __DIR__ .'/routes.php';
        $this->loadViewsFrom(__DIR__.'/views', 'getog');
        $this->loadAutoloader(base_path('packages'));
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/Razz/views'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //    
    }


    protected function loadAutoloader($path)
    {
            $finder = new Finder;
            $files = new Filesystem;
 
            $autoloads = $finder->in($path)->files()->name('autoload.php')->depth('<= 3')->followLinks();
 
	    foreach ($autoloads as $file)
	    {
	        $files->requireOnce($file->getRealPath());
	    }
    }
}
