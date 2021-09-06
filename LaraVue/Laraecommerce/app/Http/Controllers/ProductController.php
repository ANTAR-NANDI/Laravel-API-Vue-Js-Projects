<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
class ProductController extends Controller
{
    public function items()
    {
      $data=Product::all();
		       return response()->json($data);
    }
    public function searchbyid($name)
    {
    	 $data = Product::where('name', 'LIKE', "%{$name}%") 

      ->get();
		    		 // dd($data);
      return response()->json($data);

  }
  public function find($id)
  {
  	$data=Product::find($id);
  	return response()->json($data);
  }

    
}
