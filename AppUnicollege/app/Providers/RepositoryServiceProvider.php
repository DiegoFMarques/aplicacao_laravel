<?php

namespace AppUnicollege\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
          'AppUnicollege\Repositories\UserRepository',
          'AppUnicollege\Repositories\UserRepositoryEloquent'
        );
    }
}
