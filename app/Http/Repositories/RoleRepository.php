<?php

namespace App\Http\Repositories;
use Spatie\Permission\Models\Role;
use App\Http\interfaces\RoleInterface;
use Spatie\Permission\Models\Permission;

class RoleRepository implements RoleInterface
{

    private $role;
    public function __construct(Role $role)
    {
        $this->role=$role;
    }

    public function index($dataTable)
    {
        return $dataTable->render('role.index');
    }

    public function create()
    {
        $permissions=Permission::all();
        return view('Role.create',compact('permissions'));
    }

    public function store($request)
    {

        $role=Role::create([
            'name'=>$request->name,
        ]);
        foreach( $request->permission_ids as $permission_id){
            $permission=Permission::find($permission_id);
            $role->givePermissionTo($permission);
        }

        toast('the role added successfully','success');
        // Alert::success('blogCategory added','the blogCategory added successfully');
        return redirect()->route('admin.role.create');
    }

    public function edit($id)
    {
        $role=$this->role::find($id);
        return ($role)?view('role.edit',compact('role')):back();
    }

    public function update($request)
{
    $role = Role::findOrFail($request->id);
    $role->update([
        'name'=>$request->name,
    ]);

    toast('The role updated successfully', 'success');
    return redirect()->route('admin.role.index');
}
public function delete($request)
{
    $role = Role::findOrFail($request->id);
    $role->delete();
    if($role){
        return response()->json([
            'message'=>'success',
            'id'=>$request->id,
        ]);
    }

    return response()->json([
        'message'=>'fail',
        'id'=>$request->id,
    ]);
}
}
