<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\User;
use App\Category;

class DataController extends Controller
{
    public function getData()
    {
    	$data = Category::all();
    	return response()->json($data);
    }

   public function deletedata($title)
    {
      $obj=Category::find($title);
     if($obj->delete()){
         return response()->json([
             'error'=>false,
             'msg'=>'Deleted data Successfully'

            ]);
      }
      else{
        return response()->json([
             'error'=>true,
             'msg'=>'Cant Delete!!!'

            ]);
      }
    }

    public function edit(Request $request)
    {
        $id=$request->id;
        $obj=Category::find($id);
        $obj->name=$request->name;
       $obj->description=$request->description;
        if($obj->save())
        {
               return response()->json([
             'error'=>false,
             'msg'=>'updated data Successfully'

            ]);
        }


    }

     public function search($title)
    {
        
          
          $data = User::where('title','=',$title)
		    		   
		    		   ->get();
		    		 // dd($data);
         return response()->json($data);

    }


    public function store(Request $request)
    {
          $obj=new Category();
          $obj->name = $request->name;
        $obj->description = $request->description;
        if($obj->save()){
            return response()->json([
             'error'=>false,
             'msg'=>'Stored data Successfully'

            ]);
        }
        else{
            return response()->json([
             'error'=>true,
             'msg'=>'failed'

            ]);
        }
    }

     public function login(Request $request)
    {
        //dd($request);
        $email = $request->email;
        $password = $request->password;
        
        $obj = Teacher::where('email','=',$email)
                       ->where('password','=', $password)
                       ->first();
        if($obj){
            //dd($obj);
            //return response()->json($obj);
            return response()->json([
             'error'=>false,
             'msg'=>'logged in Successfully',
             'token'=>1

            ]);
            }
            else 
            {
              return response()->json([
             'error'=>true,
             'msg'=>'wrong incredentials'

            ]);
            }
            
        
       
    }

}
