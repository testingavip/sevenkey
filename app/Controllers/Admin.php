<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    public function admin()
    {
        return view('admin/admin');
    }

    public function userList()
    {
        return view('admin/user');
    }

    public function product()
    {
        return view('admin/product');
    }

    public function create()
    {
        return view('admin/create');
    }

    public function save()
    {
        return view('admin/product');
    }

    public function delete()
    {
        return view('admin/product');
    }

    public function edit()
    {
        return view('admin/edit');
    }

    public function update()
    {
        return view('admin/product');
    }
    //--------------------------------------------------------------------

}
