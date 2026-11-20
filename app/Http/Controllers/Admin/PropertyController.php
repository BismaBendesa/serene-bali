<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Http\Controllers\Controller;
use App\Models\Property;

class PropertyController extends Controller
{
  // public function index()
  // {
  //   return view('admin.property.index', [
  //     'title' => 'Property List'
  //   ]);
  // }
  public function index()
  {
    // query property data where the data is active and nonactive
    $activeProperties = Property::select('id', 'property_name', 'property_service', 'location', 'price', 'land_area', 'views', 'building_area', 'max_pax')->where('activation_status', 1)->get();

    $nonactiveProperties = Property::select('id', 'property_name', 'property_service', 'location', 'price', 'land_area', 'views', 'building_area', 'max_pax')->where('activation_status', 0)->get();

    // $property = Property::find($id);
    // dd($catalogCardData);
    return view('admin.property.index', [
      'title' => 'Property Catalog',
      'activeProperties' => $activeProperties,
      'nonactiveProperties' => $nonactiveProperties,
    ]);
  }
}
