<?php

namespace App\Http\Repositories;


use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\interfaces\AdminInterface;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;

class AdminRepository implements AdminInterface
{
    private $admin;
    public function __construct(Admin $admin)
    {
        $this->admin=$admin;
    }

    public function index($dataTable)
    {
        return $dataTable->render('admin.index');
    }

    public function create()
    {
        $roles=Role::get();
        return view('admin.create',compact('roles'));
    }

    public function store($request)
    {
        $admin=$this->admin::create([
            'first_name'=>['en'=>$request->first_name_en,'ar'=>$request->first_name_ar],
            'last_name'=>['en'=>$request->last_name_en,'ar'=>$request->last_name_ar],
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone,

        ]);

        foreach( $request->role_ids as $role_id){
            $role=Role::find($role_id);
            $admin->assignRole($role);
        }

        toast('the admin added successfully','success');
        // Alert::success('admin added','the admin added successfully');
        return redirect()->route('admin.create');
    }


    public function edit($id)
{
    $roles=Role::get();
    $admin = $this->admin->find($id);
    return ($admin) ? view('admin.edit', compact('admin','roles')) : back();
}

    public function update($request)
{
    $admin = Admin::findOrFail($request->id);
    $admin->update([
        'first_name' => ['en'=>$request->first_name_en,'ar'=>$request->first_name_en],
        'last_name' => ['en'=>$request->last_name_en,'ar'=>$request->last_name_en],
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'phone' => $request->phone,
    ]);

    foreach( $request->role_ids as $role_id){
        $role=Role::find($role_id);
        $admin->assignRole($role);
    }

    toast('The admin updated successfully', 'success');
    return redirect()->route('admin.index');
}
    public function delete($request)
    {
        $admin = Admin::findOrFail($request->id);
        $admin->delete();
        if($admin){
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
