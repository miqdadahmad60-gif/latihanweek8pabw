<?php
namespace App\Http\Controllers;
use App\Models\User; use Illuminate\Http\Request; use Modules\Pendaftaran\Models\Daftar;
class DashboardController extends Controller { public function __invoke(Request $request){return view('dashboard',['totalPendaftar'=>Daftar::count(),'totalUsers'=>$request->user()->isAdmin()?User::count():null]);} }
