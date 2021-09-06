<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class DataController extends Controller
{
    public function getData()
    {
    	$data = User::all();
    	return response()->json($data);
    }


    public function findbyid($id)
    {
        $employee=User::find($id);
         return response()->json($employee);

    }

     public function search($title)
    {
        
          
          $data = User::where('title','=',$title)
		    		   
		    		   ->get();
		    		 // dd($data);
         return response()->json($data);

    }


    public function signup()
    {
           return view('signup');
    }

}
