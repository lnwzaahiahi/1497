<?php

namespace App\Http\Controllers;
use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

           public function index(Request $request)
           {

           return view('permiss');
      
           }

        public function store(Request $request)
        {
        $this->validate($request, [
        'name' => 'required',
        ]);
        $input = $request->all();
        Permission::create($input);

        return redirect()->route('roles.index');
        }
}