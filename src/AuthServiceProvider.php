<?php

namespace brnysn\LaravelH5P;

use brnysn\LaravelH5P\Models\H5PContent;
use brnysn\LaravelH5P\Models\H5PLibrary;
use brnysn\LaravelH5P\Policies\H5PContentPolicy;
use brnysn\LaravelH5P\Policies\H5PLibraryPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        H5PContent::class => H5PContentPolicy::class,
        H5PLibrary::class => H5PLibraryPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
