<?php

namespace App\Http\Controllers;

use App\Models\Guests;
use Illuminate\Http\Request;

class GuestsControllers extends Controller
{
        public function index(){
            $data = Guests::all();
            // dd($data);
            return view('admin.IndexGuest',compact('data'));
        }

        public function EditGuest($id_guest){
            $data =  Guests::find($id_guest);
            return view('admin.ShowEdit', compact('data'));
        }

        public function UpdateGuest(Request $request){
            $data = Guests::where('id', $request->id)
            ->update([
                'name' => $request->name,
                'username' => $request->username,
                'address' => $request->address
            ]);
            // print_r($request->name);die;
            // $data = Guests::find($id);
            // $data->update($request->all());
            return redirect()->route('guest')->with('success', 'Data updated successfully
            ');

        }

        public function DeleteGuest($id){
            $data = Guests::find($id);
            $data->delete();
            return redirect()->route('guest')->with('success', 'Data deleted successfully
            ');

        }
}
