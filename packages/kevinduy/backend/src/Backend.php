<?php

namespace Kevinduy\Backend;

class Backend
{
    public const VERSION = '1.0.0';

    public function routes()
    {
        app('router')->group([
            'as'         => 'backend.',
            'prefix'     => 'backend',
        ], function ($router) {
            /* @var \Illuminate\Support\Facades\Route $router */
            $router->namespace('\Kevinduy\Backend\Controllers')->group(function ($router) {
                $router->get('users', 'UserController@index')->name('users');
                /* @var \Illuminate\Routing\Router $router */
                // $router->resource('auth/users', 'UserController')->names('auth.users');
                // $router->resource('auth/roles', 'RoleController')->names('admin.auth.roles');
                // $router->resource('auth/permissions', 'PermissionController')->names('admin.auth.permissions');
                // $router->resource('auth/menu', 'MenuController', ['except' => ['create']])->names('admin.auth.menu');
            });

            // $authController = config('admin.auth.controller', AuthController::class);

            /* @var \Illuminate\Routing\Router $router */
            // $router->get('auth/login', $authController.'@getLogin')->name('admin.login');
            // $router->post('auth/login', $authController.'@postLogin');
            // $router->get('auth/logout', $authController.'@getLogout')->name('admin.logout');
            // $router->get('auth/setting', $authController.'@getSetting')->name('admin.setting');
            // $router->put('auth/setting', $authController.'@putSetting');
        });
    }
}
