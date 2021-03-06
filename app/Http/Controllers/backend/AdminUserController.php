<?php

namespace App\Http\Controllers\backend;

use App\AdminUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\Datatables\Datatables;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('backend.admin_user.index');
    }
    public function ssd()
    {
        $data = AdminUser::query();
        return Datatables::of($data)
            ->addColumn('action', function ($each) {
                $edit_icon = '<a href="' . route('admin.admin-users.edit', $each->id) . '" class="text-primary"><i class="fas fa-edit"></i></a>';
                $delete_icon = '<a href="" class="text-danger"><i class="fas fa-trash-alt"></i></a>';
                return '<div class="action-icon">' . $edit_icon . $delete_icon . "</div>";
            })
            ->make(true);
    }
    public function create()
    {
        return view('backend.admin_user.create');
    }
    public function store(StoreAdminUserRequest $request)
    {
        $admin_user = new AdminUser();
        $admin_user->create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => Hash::make($request->password)
        ]);
        return redirect()->route('admin.admin-users.index')->with('create', 'Successfully Created!');
    }
    public function edit(AdminUser $admin_user)
    {
        return view('backend.admin_user.edit', compact('admin_user'));
    }
}
