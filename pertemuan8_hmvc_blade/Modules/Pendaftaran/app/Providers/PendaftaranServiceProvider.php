<?php
namespace Modules\Pendaftaran\Providers;
use Illuminate\Support\ServiceProvider;
class PendaftaranServiceProvider extends ServiceProvider { public function boot():void { $this->loadRoutesFrom(__DIR__.'/../routes/web.php'); $this->loadViewsFrom(__DIR__.'/../resources/views','pendaftaran'); $this->loadMigrationsFrom(__DIR__.'/../database/migrations'); } }
