<?php
namespace Modules\UserManagement\Http\Controllers;
use App\Enums\UserRole; use App\Http\Controllers\Controller; use App\Models\User; use Illuminate\Database\Eloquent\Builder; use Illuminate\Http\Request; use Modules\UserManagement\Http\Requests\StoreUserRequest; use Modules\UserManagement\Http\Requests\UpdateUserRequest;
class UserManagementController extends Controller {
 public function index(Request $r){$search=$r->string('search')->trim()->toString();$role=UserRole::tryFrom($r->string('role')->toString());$users=User::query()->when($search!== '',fn(Builder $q)=>$q->where(fn(Builder $x)=>$x->where('name','like',"%$search%")->orWhere('email','like',"%$search%")))->when($role,fn(Builder $q)=>$q->where('role',$role))->orderBy('name')->paginate(10)->withQueryString();return view('usermanagement::index',compact('users','search','role')+['roles'=>UserRole::cases()]);}
 public function create(){return view('usermanagement::create',['roles'=>UserRole::cases()]);}
 public function store(StoreUserRequest $r){User::create($r->validated());return redirect()->route('admin.users.index')->with('success','User berhasil ditambahkan.');}
 public function edit(User $user){return view('usermanagement::edit',['user'=>$user,'roles'=>UserRole::cases()]);}
 public function update(UpdateUserRequest $r,User $user){$data=$r->validated();if(blank($data['password']??null))unset($data['password']);$user->update($data);return redirect()->route('admin.users.index')->with('success','User berhasil diperbarui.');}
 public function destroy(Request $r,User $user){if($user->is($r->user()))return back()->with('error','Anda tidak dapat menghapus akun Anda sendiri.');$user->delete();return redirect()->route('admin.users.index')->with('success','User berhasil dihapus.');}
}
