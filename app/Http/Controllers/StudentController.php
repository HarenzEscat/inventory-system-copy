<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function __construct(){
        $this-> = new ;
    }
    function index(){
        $ = $this->->get();
        return view('home', compact(''));
    }
    function save_(Request $request){
        $data = [
            'name' => $request->name,
            'address' => $request->address,
            
        ];
        $this->->save($data);
        return back();
    }
    function delete_($id){
        $this->->delete($id);
        return back();
    }
    function update_($id){
        $ = $this->->update($id);
        return view('update_', compact(''));
    }
    function save_updated_(Request $request){
        $data = [
            'name' => $request->update_name,
            'address' => $request->update_address,
            
        ];
        $this->->updated($data, $request->id);
        return redirect()->route('home');
    }

}
