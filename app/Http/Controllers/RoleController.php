<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\RoleDataTable;
use App\Http\Interfaces\RoleInterface;
use App\Http\Requests\Role\RoleRequest;

class RoleController extends Controller
{
    private $roleInterface;

    public function __construct(RoleInterface $roleInterface)
    {
        $this->roleInterface=$roleInterface;
    }


    public function index(RoleDataTable $dataTable){

        return $this->roleInterface->index($dataTable);

    }

    public function create(){
        return $this->roleInterface->create();
    }

    public function store(RoleRequest $request){

        return $this->roleInterface->store($request);
    }

    public function edit($id){
        return $this->roleInterface->edit($id);
    }

    public function update(Request $request){
        return $this->roleInterface->update($request);
    }

    public function delete(Request $request){
        return $this->roleInterface->delete($request);
    }
}
