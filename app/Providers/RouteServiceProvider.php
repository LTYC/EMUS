<?php namespace Emus\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * The controllers to scan for route annotations.
	 *
	 * @var array
	 */
	protected $scan = [
		'Emus\Http\Controllers\HomeController',
		'Emus\Http\Controllers\Auth\AuthController',
		'Emus\Http\Controllers\Auth\PasswordController',
	];

	/**
	 * All of the application's route middleware keys.
	 *
	 * @var array
	 */
	protected $middleware = [
		'auth' => 'Emus\Http\Middleware\Authenticated',
		'auth.basic' => 'Emus\Http\Middleware\AuthenticatedWithBasicAuth',
		'csrf' => 'Emus\Http\Middleware\CsrfTokenIsValid',
		'guest' => 'Emus\Http\Middleware\IsGuest',
	];

	/**
	 * Called before routes are registered.
	 *
	 * Register any model bindings or pattern based filters.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function before(Router $router)
	{
		//
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		// require app_path('Http/routes.php');
	}

}
