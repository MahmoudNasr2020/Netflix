<?php

namespace App\Http\Controllers\admin\category;

use App\DataTables\categoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\category\addRequest;
use App\Http\Requests\admin\category\updateRequest;
use App\Model\Admin\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(categoryDataTable $dataTable)
    {
        return $dataTable->render('dashboard.pages.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(addRequest $request)
    {
        $data     = $request->all(); // to change requests to array
        $category = Category::create($data); // to insert data into table
        if($category)
        {
            return response()->json(['success'=>'Data inserted successfully']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::findOrFail($id);

        if($data)
        {
            return response()->json($data);
        }
        else{
            return response()->json('no id');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateRequest $request, $id)
    {
        $id = Category::findOrFail($id);
        $data = $request->all();
        $update = $id->update($data);
        if($update)
        {
            return response()->json(['success'=>'data edit successfully']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Category::findOrFail($id);
        $id->delete();
        return response()->json(['success'=>'deleted successfully']);
    }
}
