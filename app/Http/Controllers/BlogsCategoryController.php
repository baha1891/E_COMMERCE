<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\BlogCategoryDataTable;
use App\Http\Interfaces\BlogsCategoryInterface;

class BlogsCategoryController extends Controller
{
    private $blogCategoryInterface;

    public function __construct(BlogsCategoryInterface $blogCategoryInterface)
    {
        $this->blogCategoryInterface=$blogCategoryInterface;
    }


    public function index(BlogCategoryDataTable $dataTable){

        return $this->blogCategoryInterface->index($dataTable);

    }

    public function create(){
        return $this->blogCategoryInterface->create();
    }

    public function store(Request $request){

        return $this->blogCategoryInterface->store($request);
    }

    public function edit($id){
        return $this->blogCategoryInterface->edit($id);
    }

    public function update(Request $request){
        return $this->blogCategoryInterface->update($request);
    }

    public function delete(Request $request){
        return $this->blogCategoryInterface->delete($request);
    }
}
