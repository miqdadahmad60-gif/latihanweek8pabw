<?php
namespace Modules\UserManagement\Providers;
use Illuminate\Support\ServiceProvider;
class UserManagementServiceProvider extends ServiceProvider { public function boot():void { $this->loadRoutesFrom(__DIR__.'/../routes/web.php'); $this->loadViewsFrom(__DIR__.'/../resources/views','usermanagement'); $this->loadMigrationsFrom(__DIR__.'/../database/migrations'); } }
