<?php namespace Acme\Blog;

class Plugin extends \System\Classes\PluginBase
{

    public function pluginDetails()
    {
        return [
            'name' => 'Blog Plugin',
            'description' => 'Provides some really cool blog features.',
            'author' => 'ACME Corporation',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Acme\Blog\Components\Post' => 'blogPost'
        ];
    }

    // public function registerMarkupTags()
    // {
    //     return [
    //         'filters' => [
    //             // A global function, i.e str_plural()
    //             'plural' => 'str_plural',

    //             // A local method, i.e $this->makeTextAllCaps()
    //             'uppercase' => [$this, 'makeTextAllCaps']
    //         ],
    //         'functions' => [
    //             // A static method call, i.e Form::open()
    //             'form_open' => ['October\Rain\Html\Form', 'open'],

    //             // Using an inline closure
    //             'helloWorld' => function() { return 'Hello World!'; }
    //         ]
    //     ];
    // }

    // public function makeTextAllCaps($text)
    // {
    //     return strtoupper($text);
    // }

    // public function registerNavigation()
    // {
    //     return [
    //         'blog' => [
    //             'label'       => 'Blog',
    //             'url'         => Backend::url('acme/blog/posts'),
    //             'icon'        => 'icon-pencil',
    //             'permissions' => ['acme.blog.*'],
    //             'order'       => 500,

    //             'sideMenu' => [
    //                 'posts' => [
    //                     'label'       => 'Posts',
    //                     'icon'        => 'icon-copy',
    //                     'url'         => Backend::url('acme/blog/posts'),
    //                     'permissions' => ['acme.blog.access_posts']
    //                 ],
    //                 'categories' => [
    //                     'label'       => 'Categories',
    //                     'icon'        => 'icon-copy',
    //                     'url'         => Backend::url('acme/blog/categories'),
    //                     'permissions' => ['acme.blog.access_categories']
    //                 ]
    //             ]
    //         ]
    //     ];
    // }

    // public function boot()
    // {
    //     \Cms\Classes\CmsController::extend(function($controller) {
    //         $controller->middleware('Path\To\Custom\Middleware');
    //     });
    // }

}