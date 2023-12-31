<?php

namespace App\Http\Interfaces;

interface BlogsCategoryInterface
{
    public function index($dataTable);
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request);
    public function delete($request);
}
