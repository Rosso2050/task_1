<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|min:1',
            'last_name' => 'required|min:1',
            'image_file' => 'required|file|mimes:jpg,png,gif|max:2048',
        ]);
        $image = $request->file('image_file');


        $name_photo = uniqid() . time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/users');
        $image->move($destinationPath, $name_photo);
        $request->merge(['image' => $name_photo]);

        User::create($request->all());
        \Session::flash('flash_message', 'Data has been Saved');
        return back();
    }

    public function index(){
        $items=User::all();
        return view('index',compact('items'));
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        \Session::flash('flash_message', 'Data has been Deleted');
        return back();
    }
}
