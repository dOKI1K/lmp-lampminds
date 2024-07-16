<?php

use Illuminate\Support\ServiceProvider;

class LmpFilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPublishables();
    }

    public function register()
    {
        //
    }

    protected function registerPublishables(): void
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        if (empty(glob(app_path('Models/BaseModel.php')))) {
            $this->publishes([
                __DIR__ . '/../app/Models/BaseModel.php' => app_path('Models/BaseModel.php'),
            ], 'models');
        }

        if (empty(glob(app_path('Traits/AuditTrait.php')))) {
            $this->publishes([
                __DIR__ . '/../app/Traits/AuditTrait.php' => app_path('Traits/AuditTrait.php'),
            ], 'traits');
        }

        if (empty(glob(app_path('Filament/Lampminds/*')))) {
            $this->publishes([
                __DIR__ . '/../app/Filament/Lampminds/FormComponents/*' => app_path('Filament/Lampminds/FormComponents'),
                __DIR__ . '/../app/Filament/Lampminds/Resources/*' => app_path('Filament/Lampminds/Resources'),
                __DIR__ . '/../app/Filament/Lampminds/TableComponents/*' => app_path('Filament/Lampminds/TableComponents'),
            ], 'filament');
        }

        if (empty(glob(app_path('Helpers/*')))) {
            $this->publishes([
                __DIR__ . '/../app/Helpers/helpers-common.php' => app_path('Helpers/helpers-common.php'),
                __DIR__ . '/../app/Helpers/helpers-log.php' => app_path('Helpers/helpers-log.php'),
                __DIR__ . '/../app/Helpers/helpers-useragent.php' => app_path('Helpers/helpers-useragent.php'),
            ], 'helpers');
        }
    }
}