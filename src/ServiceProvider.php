<?php

namespace Igophper\Student;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton(Student::class, function () {
            return new Student(config('services.student.name'));
        });

        $this->app->alias(Student::class, 'student');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Student::class, 'student'];
    }
}