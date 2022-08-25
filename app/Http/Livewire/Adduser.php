<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class Adduser extends Component
{
    public $name;
    public $email;
    public $password;
    public $role_name;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'role_name' => 'required',
    ];

    public function submit()
    {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        $user->assignRole($this->role_name);
        $this->name = "";
        $this->email = "";
        $this->password = "";
        $this->role_name = "";
        session()->flash('user_add_message', 'User added deleted.');
    }
    public function userDelete($id)
    {
        User::findOrFail($id)->delete();
        session()->flash('user_delete_message', 'User successfully deleted.');
    }
    public function resetForm()
    {
        $this->name = "";
        $this->email = "";
        $this->password = "";
        $this->role_name = "";
    }
    public function render()
    {
        return view('livewire.adduser', [
            'permissions' => Permission::select('id','name')->get(),
            'roles' => Role::select('id','name')->with('users')->latest()->get(),
            'users' => User::latest()->get()
        ]);
    }
}