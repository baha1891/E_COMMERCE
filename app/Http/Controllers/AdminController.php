<?php

namespace App\Http\Controllers;

use App\DataTables\AdminDataTable;
use App\Http\Interfaces\AdminInterface;
use App\Http\Requests\Admin\AdminCreateRequest;
use App\Http\Requests\Admin\AdminDeleteRequest;
use App\Http\Requests\Admin\AdminUpdateRequest;

class AdminController extends Controller
{
    private $adminInterface;

    public function __construct(AdminInterface $adminInterface)
    {
        $this->adminInterface=$adminInterface;
    }


    public function index(AdminDataTable $dataTable){

        return $this->adminInterface->index($dataTable);

    }

    public function create(){
        return $this->adminInterface->create();
    }

    public function store(AdminCreateRequest $request){

        return $this->adminInterface->store($request);
    }

    public function edit($id){
        return $this->adminInterface->edit($id);
    }
    

    public function update(AdminUpdateRequest $request){
        return $this->adminInterface->update($request);
    }

    public function delete(AdminDeleteRequest $request){
        return $this->adminInterface->delete($request);
    }
}
