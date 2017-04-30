<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session; 
use DB;
use Illuminate\Support\Facades\Input;

class indexController extends Controller
{
   public function storeData($latitude,$longitude)
   {

   	 DB::table('geolocation')->insert([
    'longitude' => $longitude,
    'latitude' => $latitude,
    ]); 
     return response()->json(true);
   }
}
