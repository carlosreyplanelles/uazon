<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::directive('copyright', function(){
           return "<?php echo 'ProwebUazon ".date('Y')." &copy; Todos los derechos reservados';?>";
        });

        \Blade::if('odd', function($index) {
           return ($index % 2)==0;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
