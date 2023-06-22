<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\PermissionDataTable;
use App\Http\Interfaces\PermissionInterface;
use App\Http\Requests\Role\PermissionRequest;

class PermissionController extends Controller
{
    private $permissionInterface;

    public function __construct(PermissionInterface $permissionInterface)
    {
        $this->permissionInterface=$permissionInterface;
    }


    public function index(PermissionDataTable $dataTable){

        return $this->permissionInterface->index($dataTable);

    }

    public function create(){
        return $this->permissionInterface->create();
    }

    public function store(PermissionRequest $request){

        return $this->permissionInterface->store($request);
    }

    public function edit($id){
        return $this->permissionInterface->edit($id);
    }

    public function update(Request $request){
        return $this->permissionInterface->update($request);
    }

    public function delete(Request $request){
        return $this->permissionInterface->delete($request);
    }
}
