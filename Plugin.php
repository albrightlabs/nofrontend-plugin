<?php namespace Albrightlabs\NoFrontend;

use App;
use Route;
use Event;
use Backend;
use Redirect;
use System\Classes\PluginBase;

/**
 * NoFrontend Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'No Frontend',
            'description' => 'Simply removes the applcation\'s front-end and redirects it to the admin area.',
            'author'      => 'Albright Labs LLC',
            'icon'        => 'icon-ban',
            'icon-svg'    => '/plugins/albrightlabs/nofrontend/assets/images/plugin-icon.svg',
            'homepage'    => 'https://albrightlabs.com/',
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        /**
         * Route homepage to admin area
         */
        Route::get('/', function (){
            return Redirect::to('/backend');
        });

        /**
         * Route all other front-end pages to admin area
         */
        Route::get('/{any}', function ($any) {
              return Redirect::to('/backend');
        })->where('any', '^(?!backend).*$');

        /**
         * Stop if not running in admin area
         */
        if(!App::runningInBackend()){
            return;
        }

        /**
         * Add css to hide scope icon in admin area navigation
         */
        Event::listen('backend.page.beforeDisplay', function($controller, $action, $params) {
            $controller->addCss("/plugins/albrightlabs/nofrontend/assets/css/styles.css");
        });
    }
}
