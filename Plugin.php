<?php namespace KosmosKosmos\SynoChat;

use Backend;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use KosmosKosmos\SynoChat\Classes\SynoLog;
use KosmosKosmos\SynoChat\Models\SynoChatSettings;
use System\Classes\PluginBase;

/**
 * SynoChat Plugin Information File
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
            'name'        => 'SynoChat',
            'description' => 'October CMS Synology Chat integration plugin.',
            'author'      => 'KosmosKosmos',
            'icon'        => 'icon-comments-o'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('synolog', function () {
            return new SynoLog(SynoChatSettings::get('token'), SynoChatSettings::get('url'));
        });
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'KosmosKosmos\SynoChat\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'kosmoskosmos.synochat.some_permission' => [
                'tab' => 'SynoChat',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'synochat' => [
                'label'       => 'SynoChat',
                'url'         => Backend::url('kosmoskosmos/synochat/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['kosmoskosmos.synochat.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerSettings() {
        return [
            'synochat_settings' => [
                'label' => 'kosmoskosmos.synochat::lang.settings.title',
                'description' => 'kosmoskosmos.synochat::lang.settings.description',
                'category' => 'SynoChat',
                'icon' => 'icon-comments-o',
                'class' => 'KosmosKosmos\SynoChat\Models\SynoChatSettings',
                'order' => 500,
                'keywords' => 'kosmos kosmoskosmos syno chat synology synochat',
                'permissions' => ['*']
            ],
        ];
    }
}
