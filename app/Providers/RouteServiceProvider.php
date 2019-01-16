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
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
        $this->mapAdminDashboardRoutes();
        $this->mapAdminAboutRoutes();
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
             ->middleware(['web', 'auth'])
             ->name('admin.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin.php'));
    }
    protected function mapAdminHomeRoutes()
    {
        Route::prefix('/{locale?}/admin/home')
             ->middleware(['web', 'auth'])
             ->name('admin.home.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin/home/web.php'));
    }
    protected function mapAdminAboutRoutes()
    {
        Route::prefix('/{locale?}/admin/about')
             ->middleware(['web', 'auth'])
             ->name('admin.about.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin/about/web.php'));
    }
    protected function mapAdminFieldsRoutes()
    {
        Route::prefix('/{locale?}/admin/fields')
             ->middleware(['web', 'auth'])
             ->name('admin.fields.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin/fields/web.php'));
    }
    protected function mapAdminSubFieldsRoutes()
    {
        Route::prefix('/{locale?}/admin/sub-fields')
             ->middleware(['web', 'auth'])
             ->name('admin.sub-fields.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin/sub-fields/web.php'));
    }
    protected function mapAdminPartnersRoutes()
    {
        Route::prefix('/{locale?}/admin/partners')
             ->middleware(['web', 'auth'])
             ->name('admin.partners.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin/partners/web.php'));
    }
    protected function mapAdminProductsRoutes()
    {
        Route::prefix('/{locale?}/admin/products')
             ->middleware(['web', 'auth'])
             ->name('admin.products.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin/products/web.php'));
    }
    // protected function mapAdminProductsRoutes()
    // {
    //     Route::prefix('/{locale?}/admin/products')
    //          ->middleware(['web', 'auth'])
    //          ->name('admin.products.')
    //          ->namespace('App\Http\Controllers\Admin')
    //          ->group(base_path('routes/admin/products/web.php'));
    // }
    protected function mapAdminAchievementsRoutes()
    {
        Route::prefix('/{locale?}/admin/achievements')
             ->middleware(['web', 'auth'])
             ->name('admin.achievements.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin/achievements/web.php'));
    }
    protected function mapAdminContactsRoutes()
    {
        Route::prefix('/{locale?}/admin/contacts')
             ->middleware(['web', 'auth'])
             ->name('admin.contacts.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin/contacts/web.php'));
    }
    protected function mapAdminSettingsRoutes()
    {
        Route::prefix('/{locale?}/admin/settings')
             ->middleware(['web', 'auth'])
             ->name('admin.settings.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin/settings/web.php'));
    }
    protected function mapAdmiContactUsRoutes()
    {
        Route::prefix('/{locale?}/admin/contact-us')
             ->middleware(['web', 'auth'])
             ->name('admin.contact-us.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin/contact-us/web.php'));
    }
    protected function mapAdmiSubscribeRoutes()
    {
        Route::prefix('/{locale?}/admin/subscribe')
             ->middleware(['web', 'auth'])
             ->name('admin.subscribe.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin/subscribe/web.php'));
    }
    protected function mapAdmiNewsRoutes()
    {
        Route::prefix('/{locale?}/admin/news')
             ->middleware(['web', 'auth'])
             ->name('admin.news.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin/news/web.php'));
    }
    protected function mapAdmiDownloadsRoutes()
    {
        Route::prefix('/{locale?}/admin/downloads')
             ->middleware(['web', 'auth'])
             ->name('admin.downloads.')
             ->namespace('App\Http\Controllers\Admin')
             ->group(base_path('routes/admin/downloads/web.php'));
    }
}
