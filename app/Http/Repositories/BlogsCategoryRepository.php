<?php

namespace App\Http\Repositories;
use App\Models\BlogCategory;
use App\Http\interfaces\BlogsCategoryInterface;

class BlogsCategoryRepository implements BlogsCategoryInterface
{
    private $blogCategory;
    public function __construct(BlogCategory $blogCategory)
    {
        $this->blogCategory=$blogCategory;
    }

    public function index($dataTable)
    {
        return $dataTable->render('blogCategory.index');
    }

    public function create()
    {
        return view('blogCategory.create');
    }

    public function store($request)
    {
        $this->blogCategory::create([
            'name'=>['en'=>$request->name_en,'ar'=>$request->name_ar],


        ]);
        toast('the blogCategory added successfully','success');
        // Alert::success('blogCategory added','the blogCategory added successfully');
        return redirect()->route('admin.blogsCategory.create');
    }

    public function edit($id)
    {
        $blogCategory=$this->blogCategory::find($id);
        return ($blogCategory)?view('blogCategory.edit',compact('blogCategory')):back();
    }

    public function update($request)
{
    $blogCategory = BlogCategory::findOrFail($request->id);
    $blogCategory->update([
        'name'=>['en'=>$request->name_en,'ar'=>$request->name_ar],
    ]);

    toast('The blogCategory updated successfully', 'success');
    return redirect()->route('admin.blogsCategory.index');
}
public function delete($request)
{
    $blogCategory = BlogCategory::findOrFail($request->id);
    $blogCategory->delete();
    if($blogCategory){
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
