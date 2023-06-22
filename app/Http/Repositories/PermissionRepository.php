<?php

namespace App\Http\Repositories;
use Spatie\Permission\Models\Permission;
use App\Http\interfaces\PermissionInterface;

class PermissionRepository implements PermissionInterface
{

    private $permission;
    public function __construct(Permission $permission)
    {
        $this->permission=$permission;
    }

    public function index($dataTable)
    {
        return $dataTable->render('permission.index');
    }

    public function create()
    {
        return view('permission.create');
    }

    public function store($request)
    {
        $this->permission::create([
            'name'=>$request->name,

        ]);
        toast('the permission added successfully','success');
        // Alert::success('blogCategory added','the blogCategory added successfully');
        return redirect()->route('admin.permission.create');
    }

    public function edit($id)
    {
        $permission=$this->permission::find($id);
        return ($permission)?view('permission.edit',compact('permission')):back();
    }

    public function update($request)
{
    $permission = Permission::findOrFail($request->id);
    $permission->update([
        'name'=>$request->name,
    ]);

    toast('The permission updated successfully', 'success');
    return redirect()->route('admin.permission.index');
}
public function delete($request)
{
    $permission = Permission::findOrFail($request->id);
    $permission->delete();
    if($permission){
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
