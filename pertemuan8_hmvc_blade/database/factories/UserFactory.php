<?php
namespace Database\Factories;
use App\Enums\UserRole; use App\Models\User; use Illuminate\Database\Eloquent\Factories\Factory; use Illuminate\Support\Str;
class UserFactory extends Factory { protected $model=User::class; protected static ?string $password=null; public function definition():array{return ['name'=>fake()->name(),'email'=>fake()->unique()->safeEmail(),'role'=>UserRole::User,'email_verified_at'=>now(),'password'=>static::$password??='password','remember_token'=>Str::random(10)];} public function admin():static{return $this->state(fn()=>['role'=>UserRole::Admin]);} }
