<?php

namespace Theme;

use Snap\Hookables\Theme;
use Snap\Utils\Vite;

/**
 * Setup theme.
 *
 * This means registering scripts, sidebars and menus.
 */
class Bootstrap extends Theme
{
    /**
     * Declare theme support.
     *
     * Keys are the feature to enable, and values are any additional arguments to pass to add_theme_support().
     *
     * @var array
     */
    protected $supports = [
        'html5' => ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style',],
        'responsive-embeds',
        'editor-styles',
    ];

    /**
     * Declare theme menus.
     *
     * @var array
     */
    protected $menus = [
        'primary' => 'The primary navigation for the site',
    ];

    /**
     * Boot up your theme!
     */
    public function boot(): void
    {
        $this->addAction('widgets_init', 'registerThemeWidgets');
        $this->addAction('wp_enqueue_scripts', 'enqueueThemeAssets');
    }

    /**
     * Enqueue the theme CSS files.
     */
    public function enqueueThemeAssets(): void
    {
        // If using vite:
        Vite::registerScript('resources/assets/js/theme.js');
        Vite::registerStyle('resources/assets/sass/style.scss');
    }

    /**
     * Register the theme's widgets.
     */
    public function registerThemeWidgets(): void
    {
    }
}
