<?php

namespace App\Providers;

use App;
use App\Jobs\TestJob;
use App\Jobs\ProductCreated;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // \App::bindMethod(TestJob::class .'@handle',fn($job)=>$job->handle());
        \App::bindMethod(ProductCreated::class .'@handle',fn($job)=>$job->handle());
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
