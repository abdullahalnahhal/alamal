<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {

        if (!app()->environment('testing')) {

            header("Access-Control-Allow-Origin: *");


            header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE, PATCH');
            header("Access-Control-Allow-Credentials: true");

            header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
            header("Access-Control-Max-Age: 86400");
        }

        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
        $this->mapAdminDashboardRoutes();
        $this->mapAdminAboutRoutes();
        $this->mapAdminSliderRoutes();
        $this->mapAdminHomeRoutes();
        $this->mapAdminFieldsRoutes();
        $this->mapAdminSubFieldsRoutes();
        $this->mapAdminPartnersRoutes();
        $this->mapAdminProductsRoutes();
        $this->mapAdminAchievementsRoutes();
        $this->mapAdminContactsRoutes();
        $this->mapAdminSettingsRoutes();
        $this->mapAdmiContactUsRoutes();
        $this->mapAdmiSubscribeRoutes();
        $this->mapAdmiNewsRoutes();
        $this->mapAdmiDownloadsRoutes();
        $this->mapAdminMediaRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
    protected function mapAdminDashboardRoutes()
    {
        Route::prefix('/{locale?}/admin')

            ->name('admin.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin.php'));
    }
    protected function mapAdminHomeRoutes()
    {
        Route::prefix('/{locale?}/admin/home')
            ->middleware(['auth:api'])
            ->name('admin.home.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/home/web.php'));
    }
    protected function mapAdminSliderRoutes()
    {
        Route::prefix('/{locale?}/admin/slider')
            ->middleware(['auth:api'])
            ->name('admin.slider.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/slider/web.php'));
    }
    protected function mapAdminAboutRoutes()
    {
        Route::prefix('/{locale?}/admin/about')
            ->middleware(['auth:api'])
            ->name('admin.about.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/about/web.php'));
    }
    protected function mapAdminFieldsRoutes()
    {
        Route::prefix('/{locale?}/admin/fields')
            ->middleware(['auth:api'])
            ->name('admin.fields.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/fields/web.php'));
    }
    protected function mapAdminSubFieldsRoutes()
    {
        Route::prefix('/{locale?}/admin/sub-fields')
            ->middleware(['auth:api'])
            ->name('admin.sub-fields.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/sub-fields/web.php'));
    }
    protected function mapAdminPartnersRoutes()
    {
        Route::prefix('/{locale?}/admin/partners')
            ->middleware(['auth:api'])
            ->name('admin.partners.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/partners/web.php'));
    }
    protected function mapAdminProductsRoutes()
    {
        Route::prefix('/{locale?}/admin/products')
            ->middleware(['auth:api'])
            ->name('admin.products.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/products/web.php'));
    }
    // protected function mapAdminProductsRoutes()
    // {
    //     Route::prefix('/{locale?}/admin/products')
    //          ->middleware(['auth:api'])
    //          ->name('admin.products.')
    //          ->namespace('App\Http\Controllers\Admin')
    //          ->group(base_path('routes/admin/products/web.php'));
    // }
    protected function mapAdminAchievementsRoutes()
    {
        Route::prefix('/{locale?}/admin/achievements')
            ->middleware(['auth:api'])
            ->name('admin.achievements.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/achievements/web.php'));
    }
    protected function mapAdminContactsRoutes()
    {
        Route::prefix('/{locale?}/admin/contacts')
            ->middleware(['auth:api'])
            ->name('admin.contacts.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/contacts/web.php'));
    }
    protected function mapAdminSettingsRoutes()
    {
        Route::prefix('/{locale?}/admin/settings')
            ->middleware(['auth:api'])
            ->name('admin.settings.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/settings/web.php'));
    }
    protected function mapAdmiContactUsRoutes()
    {
        Route::prefix('/{locale?}/admin/contact-us')
            ->middleware(['auth:api'])
            ->name('admin.contact-us.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/contact-us/web.php'));
    }
    protected function mapAdmiSubscribeRoutes()
    {
        Route::prefix('/{locale?}/admin/subscribe')
            ->middleware(['auth:api'])
            ->name('admin.subscribe.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/subscribe/web.php'));
    }
    protected function mapAdmiNewsRoutes()
    {
        Route::prefix('/{locale?}/admin/news')
            ->middleware(['auth:api'])
            ->name('admin.news.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/news/web.php'));
    }
    protected function mapAdmiDownloadsRoutes()
    {
        Route::prefix('/{locale?}/admin/downloads')
            ->middleware(['auth:api'])
            ->name('admin.downloads.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/downloads/web.php'));
    }
    protected function mapAdminMediaRoutes()
    {
        Route::prefix('/{locale?}/admin/media')
            ->middleware(['auth:api'])
            ->name('admin.media.')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin/media/web.php'));
    }
}
