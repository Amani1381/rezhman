<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;



class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (view::exists('index.v1.admin.role.add')){
            return view('index.v1.admin.role.add');
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100|regex:/^[ \s]+$/',
            'title' => 'required|min:3|max:100',
        ]);
        try{
            $role=new Role();
            $role->name=$request->input('name');
            $role->title=$request->input('title');
            $role->admin_id = 1;
            $role->save();
            Session::flash('role_success','عملیات موفقیت آمیز بود');
            return redirect('admin/roles');
        }catch (\Exception $er){
            Session::flash('role_error','خطا در انجام عملیات');
            return redirect('admin/roles');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
