<?php

namespace Modules\Roles\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\ViewModels\RoleViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Extend this class
use Modules\Roles\Http\Requests\RoleStoreRequest;
use Modules\Roles\Http\Requests\RoleUpdateRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:roles.read,admin', ['only' => ['index']]);
        $this->middleware('permission:roles.create,admin', ['only' => ['create', 'store']]);
        $this->middleware('permission:roles.edit,admin', ['only' => ['edit', 'update']]);
        $this->middleware('permission:roles.delete,admin', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles::index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles::form' , new RoleViewModel());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleStoreRequest $request): RedirectResponse
    {
        $role =  Role::create($request->validated() + ['guard_name' => 'admin']);
        $permissionNames = Permission::whereIn('id', $request->permissions)
            ->pluck('name')
            ->toArray();

        $role->givePermissionTo($permissionNames);
        Session()->flash('success', 'Role Added Successfully');
        return redirect()->route('roles.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('roles::form', new RoleViewModel($role));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleUpdateRequest $request, Role $role): RedirectResponse
    {
        $role->update($request->validated());

        $permissionNames = Permission::whereIn('id', $request->permissions)
            ->pluck('name')
            ->toArray();

        $role->syncPermissions($permissionNames);
        Session()->flash('success', 'Role Updated Successfully');
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        Session()->flash('success', 'Role Deleted Successfully');
        return redirect()->back();
    }
}
